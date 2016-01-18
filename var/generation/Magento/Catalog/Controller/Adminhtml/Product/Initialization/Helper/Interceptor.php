<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper;

/**
 * Interceptor class for @see
 * \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Controller\Adminhtml\Product\Initialization\StockDataFilter $stockFilter, \Magento\Catalog\Model\Product\Initialization\Helper\ProductLinks $productLinks, \Magento\Backend\Helper\Js $jsHelper, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter)
    {
        $this->___init();
        parent::__construct($request, $storeManager, $stockFilter, $productLinks, $jsHelper, $dateFilter);
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initialize');
        if (!$pluginInfo) {
            return parent::initialize($product);
        } else {
            return $this->___callPlugins('initialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mergeProductOptions($productOptions, $overwriteOptions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'mergeProductOptions');
        if (!$pluginInfo) {
            return parent::mergeProductOptions($productOptions, $overwriteOptions);
        } else {
            return $this->___callPlugins('mergeProductOptions', func_get_args(), $pluginInfo);
        }
    }
}
