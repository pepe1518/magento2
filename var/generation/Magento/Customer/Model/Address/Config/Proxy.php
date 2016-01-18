<?php
namespace Magento\Customer\Model\Address\Config;

/**
 * Proxy class for @see \Magento\Customer\Model\Address\Config
 */
class Proxy extends \Magento\Customer\Model\Address\Config
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
     * @var \Magento\Customer\Model\Address\Config
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Customer\\Model\\Address\\Config', $shared = true)
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
     * @return \Magento\Customer\Model\Address\Config
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
    public function setStore($store)
    {
        return $this->_getSubject()->setStore($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getStore()
    {
        return $this->_getSubject()->getStore();
    }

    /**
     * {@inheritdoc}
     */
    public function getFormats()
    {
        return $this->_getSubject()->getFormats();
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatByCode($typeCode)
    {
        return $this->_getSubject()->getFormatByCode($typeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function merge(array $config)
    {
        return $this->_getSubject()->merge($config);
    }

    /**
     * {@inheritdoc}
     */
    public function get($path = null, $default = null)
    {
        return $this->_getSubject()->get($path, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        return $this->_getSubject()->reset();
    }
}
