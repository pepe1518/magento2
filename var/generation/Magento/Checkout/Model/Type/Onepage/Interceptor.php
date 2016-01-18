<?php
namespace Magento\Checkout\Model\Type\Onepage;

/**
 * Interceptor class for @see \Magento\Checkout\Model\Type\Onepage
 */
class Interceptor extends \Magento\Checkout\Model\Type\Onepage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Checkout\Helper\Data $helper, \Magento\Customer\Model\Url $customerUrl, \Psr\Log\LoggerInterface $logger, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\RequestInterface $request, \Magento\Customer\Model\AddressFactory $customrAddrFactory, \Magento\Customer\Model\FormFactory $customerFormFactory, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Framework\DataObject\Copy $objectCopyService, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Customer\Model\Metadata\FormFactory $formFactory, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerDataFactory, \Magento\Framework\Math\Random $mathRandom, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderSender, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Framework\Api\ExtensibleDataObjectConverter $extensibleDataObjectConverter, \Magento\Quote\Api\CartManagementInterface $quoteManagement, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector)
    {
        $this->___init();
        parent::__construct($eventManager, $helper, $customerUrl, $logger, $checkoutSession, $customerSession, $storeManager, $request, $customrAddrFactory, $customerFormFactory, $customerFactory, $orderFactory, $objectCopyService, $messageManager, $formFactory, $customerDataFactory, $mathRandom, $encryptor, $addressRepository, $accountManagement, $orderSender, $customerRepository, $quoteRepository, $extensibleDataObjectConverter, $quoteManagement, $dataObjectHelper, $totalsCollector);
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckout');
        if (!$pluginInfo) {
            return parent::getCheckout();
        } else {
            return $this->___callPlugins('getCheckout', func_get_args(), $pluginInfo);
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
    public function initCheckout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initCheckout');
        if (!$pluginInfo) {
            return parent::initCheckout();
        } else {
            return $this->___callPlugins('initCheckout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckoutMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckoutMethod');
        if (!$pluginInfo) {
            return parent::getCheckoutMethod();
        } else {
            return $this->___callPlugins('getCheckoutMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveCheckoutMethod($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveCheckoutMethod');
        if (!$pluginInfo) {
            return parent::saveCheckoutMethod($method);
        } else {
            return $this->___callPlugins('saveCheckoutMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveShipping($data, $customerAddressId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveShipping');
        if (!$pluginInfo) {
            return parent::saveShipping($data, $customerAddressId);
        } else {
            return $this->___callPlugins('saveShipping', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveShippingMethod($shippingMethod)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveShippingMethod');
        if (!$pluginInfo) {
            return parent::saveShippingMethod($shippingMethod);
        } else {
            return $this->___callPlugins('saveShippingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function savePayment($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'savePayment');
        if (!$pluginInfo) {
            return parent::savePayment($data);
        } else {
            return $this->___callPlugins('savePayment', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveOrder');
        if (!$pluginInfo) {
            return parent::saveOrder();
        } else {
            return $this->___callPlugins('saveOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastOrderId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastOrderId');
        if (!$pluginInfo) {
            return parent::getLastOrderId();
        } else {
            return $this->___callPlugins('getLastOrderId', func_get_args(), $pluginInfo);
        }
    }
}
