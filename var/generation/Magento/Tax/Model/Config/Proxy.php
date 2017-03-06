<?php
namespace Magento\Tax\Model\Config;

/**
 * Proxy class for @see \Magento\Tax\Model\Config
 */
class Proxy extends \Magento\Tax\Model\Config
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
     * @var \Magento\Tax\Model\Config
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Tax\\Model\\Config', $shared = true)
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
     * @return \Magento\Tax\Model\Config
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
    public function priceIncludesTax($store = null)
    {
        return $this->_getSubject()->priceIncludesTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function setPriceIncludesTax($value)
    {
        return $this->_getSubject()->setPriceIncludesTax($value);
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
    public function discountTax($store = null)
    {
        return $this->_getSubject()->discountTax($store);
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
    public function setNeedUseShippingExcludeTax($flag)
    {
        return $this->_getSubject()->setNeedUseShippingExcludeTax($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getNeedUseShippingExcludeTax()
    {
        return $this->_getSubject()->getNeedUseShippingExcludeTax();
    }

    /**
     * {@inheritdoc}
     */
    public function getAlgorithm($store = null)
    {
        return $this->_getSubject()->getAlgorithm($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingTaxClass($store = null)
    {
        return $this->_getSubject()->getShippingTaxClass($store);
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
    public function shippingPriceIncludesTax($store = null)
    {
        return $this->_getSubject()->shippingPriceIncludesTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingPriceIncludeTax($flag)
    {
        return $this->_getSubject()->setShippingPriceIncludeTax($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartPricesInclTax($store = null)
    {
        return $this->_getSubject()->displayCartPricesInclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartPricesExclTax($store = null)
    {
        return $this->_getSubject()->displayCartPricesExclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartPricesBoth($store = null)
    {
        return $this->_getSubject()->displayCartPricesBoth($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartSubtotalInclTax($store = null)
    {
        return $this->_getSubject()->displayCartSubtotalInclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartSubtotalExclTax($store = null)
    {
        return $this->_getSubject()->displayCartSubtotalExclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartSubtotalBoth($store = null)
    {
        return $this->_getSubject()->displayCartSubtotalBoth($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartShippingInclTax($store = null)
    {
        return $this->_getSubject()->displayCartShippingInclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartShippingExclTax($store = null)
    {
        return $this->_getSubject()->displayCartShippingExclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartShippingBoth($store = null)
    {
        return $this->_getSubject()->displayCartShippingBoth($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartDiscountInclTax($store = null)
    {
        return $this->_getSubject()->displayCartDiscountInclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartDiscountExclTax($store = null)
    {
        return $this->_getSubject()->displayCartDiscountExclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartDiscountBoth($store = null)
    {
        return $this->_getSubject()->displayCartDiscountBoth($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartTaxWithGrandTotal($store = null)
    {
        return $this->_getSubject()->displayCartTaxWithGrandTotal($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartFullSummary($store = null)
    {
        return $this->_getSubject()->displayCartFullSummary($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displayCartZeroTax($store = null)
    {
        return $this->_getSubject()->displayCartZeroTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesPricesInclTax($store = null)
    {
        return $this->_getSubject()->displaySalesPricesInclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesPricesExclTax($store = null)
    {
        return $this->_getSubject()->displaySalesPricesExclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesPricesBoth($store = null)
    {
        return $this->_getSubject()->displaySalesPricesBoth($store);
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
    public function displaySalesSubtotalBoth($store = null)
    {
        return $this->_getSubject()->displaySalesSubtotalBoth($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesShippingInclTax($store = null)
    {
        return $this->_getSubject()->displaySalesShippingInclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesShippingExclTax($store = null)
    {
        return $this->_getSubject()->displaySalesShippingExclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesShippingBoth($store = null)
    {
        return $this->_getSubject()->displaySalesShippingBoth($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesDiscountInclTax($store = null)
    {
        return $this->_getSubject()->displaySalesDiscountInclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesDiscountExclTax($store = null)
    {
        return $this->_getSubject()->displaySalesDiscountExclTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesDiscountBoth($store = null)
    {
        return $this->_getSubject()->displaySalesDiscountBoth($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesTaxWithGrandTotal($store = null)
    {
        return $this->_getSubject()->displaySalesTaxWithGrandTotal($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesFullSummary($store = null)
    {
        return $this->_getSubject()->displaySalesFullSummary($store);
    }

    /**
     * {@inheritdoc}
     */
    public function displaySalesZeroTax($store = null)
    {
        return $this->_getSubject()->displaySalesZeroTax($store);
    }

    /**
     * {@inheritdoc}
     */
    public function crossBorderTradeEnabled($store = null)
    {
        return $this->_getSubject()->crossBorderTradeEnabled($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isWrongDisplaySettingsIgnored($store = null)
    {
        return $this->_getSubject()->isWrongDisplaySettingsIgnored($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isWrongDiscountSettingsIgnored($store = null)
    {
        return $this->_getSubject()->isWrongDiscountSettingsIgnored($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getInfoUrl($store = null)
    {
        return $this->_getSubject()->getInfoUrl($store);
    }

    /**
     * {@inheritdoc}
     */
    public function needPriceConversion($store = null)
    {
        return $this->_getSubject()->needPriceConversion($store);
    }
}
