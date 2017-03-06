<?php
namespace Magento\Customer\Api\GroupManagementInterface;

/**
 * Proxy class for @see \Magento\Customer\Api\GroupManagementInterface
 */
class Proxy implements \Magento\Customer\Api\GroupManagementInterface
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
     * @var \Magento\Customer\Api\GroupManagementInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Customer\\Api\\GroupManagementInterface', $shared = true)
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
     * @return \Magento\Customer\Api\GroupManagementInterface
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
    public function isReadonly($id)
    {
        return $this->_getSubject()->isReadonly($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultGroup($storeId = null)
    {
        return $this->_getSubject()->getDefaultGroup($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getNotLoggedInGroup()
    {
        return $this->_getSubject()->getNotLoggedInGroup();
    }

    /**
     * {@inheritdoc}
     */
    public function getLoggedInGroups()
    {
        return $this->_getSubject()->getLoggedInGroups();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllCustomersGroup()
    {
        return $this->_getSubject()->getAllCustomersGroup();
    }
}
