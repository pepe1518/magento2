<?php
namespace Magento\Framework\View\Asset\MergeService;

/**
 * Interceptor class for @see \Magento\Framework\View\Asset\MergeService
 */
class Interceptor extends \Magento\Framework\View\Asset\MergeService implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\View\Asset\ConfigInterface $config, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\App\State $state)
    {
        $this->___init();
        parent::__construct($objectManager, $config, $filesystem, $state);
    }

    /**
     * {@inheritdoc}
     */
    public function getMergedAssets(array $assets, $contentType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMergedAssets');
        if (!$pluginInfo) {
            return parent::getMergedAssets($assets, $contentType);
        } else {
            return $this->___callPlugins('getMergedAssets', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function cleanMergedJsCss()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanMergedJsCss');
        if (!$pluginInfo) {
            return parent::cleanMergedJsCss();
        } else {
            return $this->___callPlugins('cleanMergedJsCss', func_get_args(), $pluginInfo);
        }
    }
}
