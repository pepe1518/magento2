<?php
namespace Magento\Catalog\Model\ProductTypes\Config;

/**
 * Proxy class for @see \Magento\Catalog\Model\ProductTypes\Config
 */
class Proxy extends \Magento\Catalog\Model\ProductTypes\Config
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
     * @var \Magento\Catalog\Model\ProductTypes\Config
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Catalog\\Model\\ProductTypes\\Config', $shared = true)
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
     * @return \Magento\Catalog\Model\ProductTypes\Config
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
    public function getType($name)
    {
        return $this->_getSubject()->getType($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getAll()
    {
        return $this->_getSubject()->getAll();
    }

    /**
     * {@inheritdoc}
     */
    public function isProductSet($typeId)
    {
        return $this->_getSubject()->isProductSet($typeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getComposableTypes()
    {
        return $this->_getSubject()->getComposableTypes();
    }

    /**
     * {@inheritdoc}
     */
    public function filter($attributeName, $value = 'true')
    {
        return $this->_getSubject()->filter($attributeName, $value);
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
