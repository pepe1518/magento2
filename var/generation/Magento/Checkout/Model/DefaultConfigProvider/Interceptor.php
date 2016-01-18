<?php
namespace Magento\Checkout\Model\DefaultConfigProvider;

/**
 * Interceptor class for @see \Magento\Checkout\Model\DefaultConfigProvider
 */
class Interceptor extends \Magento\Checkout\Model\DefaultConfigProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Checkout\Helper\Data $checkoutHelper, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Url $customerUrlManager, \Magento\Framework\App\Http\Context $httpContext, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Api\CartItemRepositoryInterface $quoteItemRepository, \Magento\Quote\Api\ShippingMethodManagementInterface $shippingMethodManager, \Magento\Catalog\Helper\Product\ConfigurationPool $configurationPool, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Customer\Model\Address\Mapper $addressMapper, \Magento\Customer\Model\Address\Config $addressConfig, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Framework\View\ConfigInterface $viewConfig, \Magento\Directory\Model\Country\Postcode\ConfigInterface $postCodesConfig, \Magento\Checkout\Model\Cart\ImageProvider $imageProvider, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Quote\Api\CartTotalRepositoryInterface $cartTotalRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Shipping\Model\Config $shippingMethodConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Quote\Api\PaymentMethodManagementInterface $paymentMethodManagement, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($checkoutHelper, $checkoutSession, $customerRepository, $customerSession, $customerUrlManager, $httpContext, $quoteRepository, $quoteItemRepository, $shippingMethodManager, $configurationPool, $quoteIdMaskFactory, $localeFormat, $addressMapper, $addressConfig, $formKey, $imageHelper, $viewConfig, $postCodesConfig, $imageProvider, $directoryHelper, $cartTotalRepository, $scopeConfig, $shippingMethodConfig, $storeManager, $paymentMethodManagement, $urlBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfig');
        if (!$pluginInfo) {
            return parent::getConfig();
        } else {
            return $this->___callPlugins('getConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRegisterUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRegisterUrl');
        if (!$pluginInfo) {
            return parent::getRegisterUrl();
        } else {
            return $this->___callPlugins('getRegisterUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckoutUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckoutUrl');
        if (!$pluginInfo) {
            return parent::getCheckoutUrl();
        } else {
            return $this->___callPlugins('getCheckoutUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function pageNotFoundUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'pageNotFoundUrl');
        if (!$pluginInfo) {
            return parent::pageNotFoundUrl();
        } else {
            return $this->___callPlugins('pageNotFoundUrl', func_get_args(), $pluginInfo);
        }
    }
}
