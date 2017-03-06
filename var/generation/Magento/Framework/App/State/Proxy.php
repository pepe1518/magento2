<?php
namespace Magento\Framework\App\State;

/**
 * Proxy class for @see \Magento\Framework\App\State
 */
class Proxy extends \Magento\Framework\App\State
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
     * @var \Magento\Framework\App\State
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\App\\State', $shared = true)
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
     * @return \Magento\Framework\App\State
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
    public function getMode()
    {
        return $this->_getSubject()->getMode();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsDownloader($flag = true)
    {
        return $this->_getSubject()->setIsDownloader($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setAreaCode($code)
    {
        return $this->_getSubject()->setAreaCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getAreaCode()
    {
        return $this->_getSubject()->getAreaCode();
    }

    /**
     * {@inheritdoc}
     */
    public function isAreaCodeEmulated()
    {
        return $this->_getSubject()->isAreaCodeEmulated();
    }

    /**
     * {@inheritdoc}
     */
    public function emulateAreaCode($areaCode, $callback, $params = array())
    {
        return $this->_getSubject()->emulateAreaCode($areaCode, $callback, $params);
    }
}
