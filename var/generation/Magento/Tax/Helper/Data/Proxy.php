<?php
namespace Magento\Tax\Helper\Data;

/**
 * Proxy class for @see \Magento\Tax\Helper\Data
 */
class Proxy extends \Magento\Tax\Helper\Data
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Magento\Tax\Helper\Data
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Tax\\Helper\\Data', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return array('_subject', '_isShared');
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Magento\Tax\Helper\Data
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostCodeSubStringLength()
    {
        return $this->_getSubject()->getPostCodeSubStringLength();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        return $this->_getSubject()->getConfig();
    }

    /**
     * {@inheritdoc}
     */
    public function priceIncludesTax($store = null)
    {
        return $this->_getSubject()->priceIncludesTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function applyTaxAfterDiscount($store = null)
    {
        return $this->_getSubject()->applyTaxAfterDiscount($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceDisplayType($store = null)
    {
        return $this->_getSubject()->getPriceDisplayType($store);
    }

    /**
     * {@inheritdoc}
     */
    public function needPriceConversion($store = null)
    {
        return $this->_getSubject()->needPriceConversion($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayFullSummary($store = null)
    {
        return $this->_getSubject()->displayFullSummary($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayZeroTax($store = null)
    {
        return $this->_getSubject()->displayZeroTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartPriceInclTax($store = null)
    {
        return $this->_getSubject()->displayCartPriceInclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartPriceExclTax($store = null)
    {
        return $this->_getSubject()->displayCartPriceExclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartBothPrices($store = null)
    {
        return $this->_getSubject()->displayCartBothPrices($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesPriceInclTax($store = null)
    {
        return $this->_getSubject()->displaySalesPriceInclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesPriceExclTax($store = null)
    {
        return $this->_getSubject()->displaySalesPriceExclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesBothPrices($store = null)
    {
        return $this->_getSubject()->displaySalesBothPrices($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesSubtotalBoth($store = null)
    {
        return $this->_getSubject()->displaySalesSubtotalBoth($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesSubtotalInclTax($store = null)
    {
        return $this->_getSubject()->displaySalesSubtotalInclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesSubtotalExclTax($store = null)
    {
        return $this->_getSubject()->displaySalesSubtotalExclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceFormat($store = null)
    {
        return $this->_getSubject()->getPriceFormat($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayPriceIncludingTax()
    {
        return $this->_getSubject()->displayPriceIncludingTax();
    }

    /**
     * {@inheritdoc}
     */
    public function displayPriceExcludingTax()
    {
        return $this->_getSubject()->displayPriceExcludingTax();
    }

    /**
     * {@inheritdoc}
     */
    public function displayBothPrices($store = null)
    {
        return $this->_getSubject()->displayBothPrices($store);
    }

    /**
     * {@inheritdoc}
     */
    public function shippingPriceIncludesTax($store = null)
    {
        return $this->_getSubject()->shippingPriceIncludesTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingPriceDisplayType($store = null)
    {
        return $this->_getSubject()->getShippingPriceDisplayType($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayShippingPriceIncludingTax()
    {
        return $this->_getSubject()->displayShippingPriceIncludingTax();
    }

    /**
     * {@inheritdoc}
     */
    public function displayShippingPriceExcludingTax()
    {
        return $this->_getSubject()->displayShippingPriceExcludingTax();
    }

    /**
     * {@inheritdoc}
     */
    public function displayShippingBothPrices()
    {
        return $this->_getSubject()->displayShippingBothPrices();
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingTaxClass($store)
    {
        return $this->_getSubject()->getShippingTaxClass($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingPrice($price, $includingTax = null, $shippingAddress = null, $ctc = null, $store = null)
    {
        return $this->_getSubject()->getShippingPrice($price, $includingTax, $shippingAddress, $ctc, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function discountTax($store = null)
    {
        return $this->_getSubject()->discountTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxBasedOn($store = null)
    {
        return $this->_getSubject()->getTaxBasedOn($store);
    }

    /**
     * {@inheritdoc}
     */
    public function applyTaxOnCustomPrice($store = null)
    {
        return $this->_getSubject()->applyTaxOnCustomPrice($store);
    }

    /**
     * {@inheritdoc}
     */
    public function applyTaxOnOriginalPrice($store = null)
    {
        return $this->_getSubject()->applyTaxOnOriginalPrice($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getCalculationSequence($store = null)
    {
        return $this->_getSubject()->getCalculationSequence($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getCalculationAlgorithm($store = null)
    {
        return $this->_getSubject()->getCalculationAlgorithm($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getCalculatedTaxes($source)
    {
        return $this->_getSubject()->getCalculatedTaxes($source);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultCustomerTaxClass()
    {
        return $this->_getSubject()->getDefaultCustomerTaxClass();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultProductTaxClass()
    {
        return $this->_getSubject()->getDefaultProductTaxClass();
    }

    /**
     * {@inheritdoc}
     */
    public function isCrossBorderTradeEnabled($store = null)
    {
        return $this->_getSubject()->isCrossBorderTradeEnabled($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isCatalogPriceDisplayAffectedByTax($store = null)
    {
        return $this->_getSubject()->isCatalogPriceDisplayAffectedByTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        return $this->_getSubject()->isModuleOutputEnabled($moduleName);
    }
}
