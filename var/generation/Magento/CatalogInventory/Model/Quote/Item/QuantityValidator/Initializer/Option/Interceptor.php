<?php
namespace Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\Initializer\Option;

/**
 * Interceptor class for @see
 * \Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\Initializer\Option
 */
class Interceptor extends \Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\Initializer\Option implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\QuoteItemQtyList $quoteItemQtyList, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockStateInterface $stockState)
    {
        $this->___init();
        parent::__construct($quoteItemQtyList, $stockRegistry, $stockState);
    }

    /**
     * {@inheritdoc}
     */
    public function getStockItem(\Magento\Quote\Model\Quote\Item\Option $option, \Magento\Quote\Model\Quote\Item $quoteItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockItem');
        if (!$pluginInfo) {
            return parent::getStockItem($option, $quoteItem);
        } else {
            return $this->___callPlugins('getStockItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(\Magento\Quote\Model\Quote\Item\Option $option, \Magento\Quote\Model\Quote\Item $quoteItem, $qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initialize');
        if (!$pluginInfo) {
            return parent::initialize($option, $quoteItem, $qty);
        } else {
            return $this->___callPlugins('initialize', func_get_args(), $pluginInfo);
        }
    }
}
