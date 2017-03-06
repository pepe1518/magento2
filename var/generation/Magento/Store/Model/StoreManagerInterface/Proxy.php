<?php
namespace Magento\Store\Model\StoreManagerInterface;

/**
 * Proxy class for @see \Magento\Store\Model\StoreManagerInterface
 */
class Proxy implements \Magento\Store\Model\StoreManagerInterface
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
     * @var \Magento\Store\Model\StoreManagerInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Store\\Model\\StoreManagerInterface', $shared = true)
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
     * @return \Magento\Store\Model\StoreManagerInterface
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
    public function setIsSingleStoreModeAllowed($value)
    {
        return $this->_getSubject()->setIsSingleStoreModeAllowed($value);
    }

    /**
     * {@inheritdoc}
     */
    public function hasSingleStore()
    {
        return $this->_getSubject()->hasSingleStore();
    }

    /**
     * {@inheritdoc}
     */
    public function isSingleStoreMode()
    {
        return $this->_getSubject()->isSingleStoreMode();
    }

    /**
     * {@inheritdoc}
     */
    public function getStore($storeId = null)
    {
        return $this->_getSubject()->getStore($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStores($withDefault = false, $codeKey = false)
    {
        return $this->_getSubject()->getStores($withDefault, $codeKey);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsite($websiteId = null)
    {
        return $this->_getSubject()->getWebsite($websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsites($withDefault = false, $codeKey = false)
    {
        return $this->_getSubject()->getWebsites($withDefault, $codeKey);
    }

    /**
     * {@inheritdoc}
     */
    public function reinitStores()
    {
        return $this->_getSubject()->reinitStores();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultStoreView()
    {
        return $this->_getSubject()->getDefaultStoreView();
    }

    /**
     * {@inheritdoc}
     */
    public function getGroup($groupId = null)
    {
        return $this->_getSubject()->getGroup($groupId);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroups($withDefault = false)
    {
        return $this->_getSubject()->getGroups($withDefault);
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrentStore($store)
    {
        return $this->_getSubject()->setCurrentStore($store);
    }
}
