<?php
namespace Magento\Backend\Model\Auth;

/**
 * Proxy class for @see \Magento\Backend\Model\Auth
 */
class Proxy extends \Magento\Backend\Model\Auth
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
     * @var \Magento\Backend\Model\Auth
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Backend\\Model\\Auth', $shared = true)
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
     * @return \Magento\Backend\Model\Auth
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
    public function setAuthStorage($storage)
    {
        return $this->_getSubject()->setAuthStorage($storage);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthStorage()
    {
        return $this->_getSubject()->getAuthStorage();
    }

    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->_getSubject()->getUser();
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentialStorage()
    {
        return $this->_getSubject()->getCredentialStorage();
    }

    /**
     * {@inheritdoc}
     */
    public function login($username, $password)
    {
        return $this->_getSubject()->login($username, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function logout()
    {
        return $this->_getSubject()->logout();
    }

    /**
     * {@inheritdoc}
     */
    public function isLoggedIn()
    {
        return $this->_getSubject()->isLoggedIn();
    }
}
