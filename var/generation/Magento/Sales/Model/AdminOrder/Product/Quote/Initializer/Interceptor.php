<?php
namespace Magento\Sales\Model\AdminOrder\Product\Quote\Initializer;

/**
 * Interceptor class for @see
 * \Magento\Sales\Model\AdminOrder\Product\Quote\Initializer
 */
class Interceptor extends \Magento\Sales\Model\AdminOrder\Product\Quote\Initializer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry)
    {
        $this->___init();
        parent::__construct($stockRegistry);
    }

    /**
     * {@inheritdoc}
     */
    public function init(\Magento\Quote\Model\Quote $quote, \Magento\Catalog\Model\Product $product, \Magento\Framework\DataObject $config)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'init');
        if (!$pluginInfo) {
            return parent::init($quote, $product, $config);
        } else {
            return $this->___callPlugins('init', func_get_args(), $pluginInfo);
        }
    }
}
