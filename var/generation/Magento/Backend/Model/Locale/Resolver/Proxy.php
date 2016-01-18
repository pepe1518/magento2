<?php
namespace Magento\Backend\Model\Locale\Resolver;

/**
 * Proxy class for @see \Magento\Backend\Model\Locale\Resolver
 */
class Proxy extends \Magento\Backend\Model\Locale\Resolver
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
     * @var \Magento\Backend\Model\Locale\Resolver
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Backend\\Model\\Locale\\Resolver', $shared = true)
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
     * @return \Magento\Backend\Model\Locale\Resolver
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
    public function setLocale($locale = null)
    {
        return $this->_getSubject()->setLocale($locale);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultLocalePath()
    {
        return $this->_getSubject()->getDefaultLocalePath();
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultLocale($locale)
    {
        return $this->_getSubject()->setDefaultLocale($locale);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultLocale()
    {
        return $this->_getSubject()->getDefaultLocale();
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
        return $this->_getSubject()->getLocale();
    }

    /**
     * {@inheritdoc}
     */
    public function emulate($scopeId)
    {
        return $this->_getSubject()->emulate($scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function revert()
    {
        return $this->_getSubject()->revert();
    }
}
