<?php
namespace Magento\Catalog\Model\Product\Initialization\Helper\ProductLinks;

/**
 * Interceptor class for @see
 * \Magento\Catalog\Model\Product\Initialization\Helper\ProductLinks
 */
class Interceptor extends \Magento\Catalog\Model\Product\Initialization\Helper\ProductLinks implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function initializeLinks(\Magento\Catalog\Model\Product $product, array $links)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initializeLinks');
        if (!$pluginInfo) {
            return parent::initializeLinks($product, $links);
        } else {
            return $this->___callPlugins('initializeLinks', func_get_args(), $pluginInfo);
        }
    }
}
