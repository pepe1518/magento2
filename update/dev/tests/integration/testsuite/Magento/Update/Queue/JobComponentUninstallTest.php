<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Update\Queue;

class JobComponentUninstallTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|\Magento\Update\Status
     */
    private $status;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|\Magento\Composer\MagentoComposerApplication
     */
    private $composerApp;

    public function setUp()
    {

        $this->status = $this->getMock('Magento\Update\Status', [], [], '', false);
        $this->composerApp = $this->getMock('Magento\Composer\MagentoComposerApplication', [], [], '', false);
    }

    public function testExecute()
    {
        $om = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
        $jobComponentUninstall = $om->create(
            'Magento\Update\Queue\JobComponentUninstall',
            [
                'composerApp' => $this->composerApp,
                'status' => $this->status,
                'params' => ['components' => [['name' => 'vendor/package']]],
                'name' => 'component:uninstall',
            ]
        );
        $this->status->expects($this->atLeastOnce())->method('add');
        $this->composerApp->expects($this->at(0))
            ->method('runComposerCommand')
            ->with(['command' => 'remove', 'packages' => ['vendor/package'], '--no-update' => true])
            ->willReturn('Success');
        $this->composerApp->expects($this->at(1))
            ->method('runComposerCommand')
            ->with(['command' => 'update'])
            ->willReturn('Success');
        $jobComponentUninstall->execute();
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Cannot find component to uninstall
     */
    public function testExecuteNoComponent()
    {
        $om = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
        $jobComponentUninstall = $om->create(
            'Magento\Update\Queue\JobComponentUninstall',
            [
                'composerApp' => $this->composerApp,
                'status' => $this->status,
                'params' => [],
                'name' => 'component:uninstall',
            ]
        );
        $this->composerApp->expects($this->never())->method('runComposerCommand');
        $jobComponentUninstall->execute();
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Exception
     */
    public function testExecuteException()
    {
        $om = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
        $jobComponentUninstall = $om->create(
            'Magento\Update\Queue\JobComponentUninstall',
            [
                'composerApp' => $this->composerApp,
                'status' => $this->status,
                'params' => ['components' => [['name' => 'vendor/package']]],
                'name' => 'component:uninstall'
            ]
        );
        $this->status->expects($this->atLeastOnce())->method('add');
        $this->composerApp->expects($this->at(0))
            ->method('runComposerCommand')
            ->with(['command' => 'remove', 'packages' => ['vendor/package'], '--no-update' => true])
            ->willReturn('Success');
        $this->composerApp->expects($this->at(1))
            ->method('runComposerCommand')
            ->with(['command' => 'update'])
            ->will($this->throwException(new \Exception('Exception')));
        $this->status->expects($this->once())->method('setUpdateError')->with(true);
        $jobComponentUninstall->execute();
    }
}
