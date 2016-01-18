<?php
namespace Magento\Directory\Helper\Data;

/**
 * Proxy class for @see \Magento\Directory\Helper\Data
 */
class Proxy extends \Magento\Directory\Helper\Data
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
     * @var \Magento\Directory\Helper\Data
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Directory\\Helper\\Data', $shared = true)
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
     * @return \Magento\Directory\Helper\Data
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
    public function getRegionCollection()
    {
        return $this->_getSubject()->getRegionCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getCountryCollection($store = null)
    {
        return $this->_getSubject()->getCountryCollection($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getRegionJson()
    {
        return $this->_getSubject()->getRegionJson();
    }

    /**
     * {@inheritdoc}
     */
    public function currencyConvert($amount, $from, $to = null)
    {
        return $this->_getSubject()->currencyConvert($amount, $from, $to);
    }

    /**
     * {@inheritdoc}
     */
    public function getCountriesWithOptionalZip($asJson = false)
    {
        return $this->_getSubject()->getCountriesWithOptionalZip($asJson);
    }

    /**
     * {@inheritdoc}
     */
    public function isZipCodeOptional($countryCode)
    {
        return $this->_getSubject()->isZipCodeOptional($countryCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getCountriesWithStatesRequired($asJson = false)
    {
        return $this->_getSubject()->getCountriesWithStatesRequired($asJson);
    }

    /**
     * {@inheritdoc}
     */
    public function isShowNonRequiredState()
    {
        return $this->_getSubject()->isShowNonRequiredState();
    }

    /**
     * {@inheritdoc}
     */
    public function isRegionRequired($countryId)
    {
        return $this->_getSubject()->isRegionRequired($countryId);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseCurrencyCode()
    {
        return $this->_getSubject()->getBaseCurrencyCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultCountry($store = null)
    {
        return $this->_getSubject()->getDefaultCountry($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getRegionData()
    {
        return $this->_getSubject()->getRegionData();
    }

    /**
     * {@inheritdoc}
     */
    public function getTopCountryCodes()
    {
        return $this->_getSubject()->getTopCountryCodes();
    }

    /**
     * {@inheritdoc}
     */
    public function getWeightUnit()
    {
        return $this->_getSubject()->getWeightUnit();
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        return $this->_getSubject()->isModuleOutputEnabled($moduleName);
    }
}
