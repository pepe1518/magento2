<?php
namespace Magento\Checkout\Model\Cart;

/**
 * Interceptor class for @see \Magento\Checkout\Model\Cart
 */
class Interceptor extends \Magento\Checkout\Model\Cart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Checkout\Model\ResourceModel\Cart $resourceCart, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockStateInterface $stockState, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, array $data = array())
    {
        $this->___init();
        parent::__construct($eventManager, $scopeConfig, $storeManager, $resourceCart, $checkoutSession, $customerSession, $messageManager, $stockRegistry, $stockState, $quoteRepository, $productRepository, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckoutSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckoutSession');
        if (!$pluginInfo) {
            return parent::getCheckoutSession();
        } else {
            return $this->___callPlugins('getCheckoutSession', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerSession');
        if (!$pluginInfo) {
            return parent::getCustomerSession();
        } else {
            return $this->___callPlugins('getCustomerSession', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItems');
        if (!$pluginInfo) {
            return parent::getItems();
        } else {
            return $this->___callPlugins('getItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteProductIds');
        if (!$pluginInfo) {
            return parent::getQuoteProductIds();
        } else {
            return $this->___callPlugins('getQuoteProductIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuote');
        if (!$pluginInfo) {
            return parent::getQuote();
        } else {
            return $this->___callPlugins('getQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setQuote(\Magento\Quote\Model\Quote $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuote');
        if (!$pluginInfo) {
            return parent::setQuote($quote);
        } else {
            return $this->___callPlugins('setQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addOrderItem($orderItem, $qtyFlag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrderItem');
        if (!$pluginInfo) {
            return parent::addOrderItem($orderItem, $qtyFlag);
        } else {
            return $this->___callPlugins('addOrderItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addProduct($productInfo, $requestInfo = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addProduct');
        if (!$pluginInfo) {
            return parent::addProduct($productInfo, $requestInfo);
        } else {
            return $this->___callPlugins('addProduct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addProductsByIds($productIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addProductsByIds');
        if (!$pluginInfo) {
            return parent::addProductsByIds($productIds);
        } else {
            return $this->___callPlugins('addProductsByIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function suggestItemsQty($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'suggestItemsQty');
        if (!$pluginInfo) {
            return parent::suggestItemsQty($data);
        } else {
            return $this->___callPlugins('suggestItemsQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateItems($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateItems');
        if (!$pluginInfo) {
            return parent::updateItems($data);
        } else {
            return $this->___callPlugins('updateItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeItem($itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeItem');
        if (!$pluginInfo) {
            return parent::removeItem($itemId);
        } else {
            return $this->___callPlugins('removeItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save();
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveQuote');
        if (!$pluginInfo) {
            return parent::saveQuote();
        } else {
            return $this->___callPlugins('saveQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function truncate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'truncate');
        if (!$pluginInfo) {
            return parent::truncate();
        } else {
            return $this->___callPlugins('truncate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductIds');
        if (!$pluginInfo) {
            return parent::getProductIds();
        } else {
            return $this->___callPlugins('getProductIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSummaryQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSummaryQty');
        if (!$pluginInfo) {
            return parent::getSummaryQty();
        } else {
            return $this->___callPlugins('getSummaryQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsCount');
        if (!$pluginInfo) {
            return parent::getItemsCount();
        } else {
            return $this->___callPlugins('getItemsCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsQty');
        if (!$pluginInfo) {
            return parent::getItemsQty();
        } else {
            return $this->___callPlugins('getItemsQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateItem($itemId, $requestInfo = null, $updatingParams = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateItem');
        if (!$pluginInfo) {
            return parent::updateItem($itemId, $requestInfo, $updatingParams);
        } else {
            return $this->___callPlugins('updateItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        if (!$pluginInfo) {
            return parent::addData($arr);
        } else {
            return $this->___callPlugins('addData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($key, $value);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        if (!$pluginInfo) {
            return parent::unsetData($key);
        } else {
            return $this->___callPlugins('unsetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $index);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        if (!$pluginInfo) {
            return parent::getDataByPath($path);
        } else {
            return $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        if (!$pluginInfo) {
            return parent::getDataByKey($key);
        } else {
            return $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        if (!$pluginInfo) {
            return parent::setDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        if (!$pluginInfo) {
            return parent::getDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        if (!$pluginInfo) {
            return parent::hasData($key);
        } else {
            return $this->___callPlugins('hasData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($keys);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        if (!$pluginInfo) {
            return parent::convertToArray($keys);
        } else {
            return $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = array(), $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = array(), $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        if (!$pluginInfo) {
            return parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        if (!$pluginInfo) {
            return parent::toJson($keys);
        } else {
            return $this->___callPlugins('toJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        if (!$pluginInfo) {
            return parent::convertToJson($keys);
        } else {
            return $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString($format);
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        if (!$pluginInfo) {
            return parent::isEmpty();
        } else {
            return $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = array(), $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        if (!$pluginInfo) {
            return parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
        } else {
            return $this->___callPlugins('serialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($data, $objects);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        if (!$pluginInfo) {
            return parent::offsetSet($offset, $value);
        } else {
            return $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        if (!$pluginInfo) {
            return parent::offsetExists($offset);
        } else {
            return $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        if (!$pluginInfo) {
            return parent::offsetUnset($offset);
        } else {
            return $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        if (!$pluginInfo) {
            return parent::offsetGet($offset);
        } else {
            return $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo);
        }
    }
}
