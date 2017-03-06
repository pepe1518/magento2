<?php
namespace Magento\Quote\Model\QuoteRepository;

/**
 * Interceptor class for @see \Magento\Quote\Model\QuoteRepository
 */
class Interceptor extends \Magento\Quote\Model\QuoteRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\QuoteFactory $quoteFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Quote\Model\ResourceModel\Quote\Collection $quoteCollection, \Magento\Quote\Api\Data\CartSearchResultsInterfaceFactory $searchResultsDataFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor)
    {
        $this->___init();
        parent::__construct($quoteFactory, $storeManager, $quoteCollection, $searchResultsDataFactory, $extensionAttributesJoinProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function get($cartId, array $sharedStoreIds = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        if (!$pluginInfo) {
            return parent::get($cartId, $sharedStoreIds);
        } else {
            return $this->___callPlugins('get', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getForCustomer($customerId, array $sharedStoreIds = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForCustomer');
        if (!$pluginInfo) {
            return parent::getForCustomer($customerId, $sharedStoreIds);
        } else {
            return $this->___callPlugins('getForCustomer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getActive($cartId, array $sharedStoreIds = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActive');
        if (!$pluginInfo) {
            return parent::getActive($cartId, $sharedStoreIds);
        } else {
            return $this->___callPlugins('getActive', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getActiveForCustomer($customerId, array $sharedStoreIds = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActiveForCustomer');
        if (!$pluginInfo) {
            return parent::getActiveForCustomer($customerId, $sharedStoreIds);
        } else {
            return $this->___callPlugins('getActiveForCustomer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Quote\Api\Data\CartInterface $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($quote);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Quote\Api\Data\CartInterface $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($quote);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteria $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        if (!$pluginInfo) {
            return parent::getList($searchCriteria);
        } else {
            return $this->___callPlugins('getList', func_get_args(), $pluginInfo);
        }
    }
}
