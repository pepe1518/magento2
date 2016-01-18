<?php
namespace Magento\Framework\Url\SecurityInfo\Proxy;

/**
 * Interceptor class for @see \Magento\Framework\Url\SecurityInfo\Proxy
 */
class Interceptor extends \Magento\Framework\Url\SecurityInfo\Proxy implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\Url\\SecurityInfo', $shared = true)
    {
        $this->___init();
        parent::__construct($objectManager, $instanceName, $shared);
    }

    /**
     * {@inheritdoc}
     */
    public function isSecure($url)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSecure');
        if (!$pluginInfo) {
            return parent::isSecure($url);
        } else {
            return $this->___callPlugins('isSecure', func_get_args(), $pluginInfo);
        }
    }
}
