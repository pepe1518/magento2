<?php
namespace Magento\Framework\Session\SidResolver;

/**
 * Proxy class for @see \Magento\Framework\Session\SidResolver
 */
class Proxy extends \Magento\Framework\Session\SidResolver
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
     * @var \Magento\Framework\Session\SidResolver
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\Session\\SidResolver', $shared = true)
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
     * @return \Magento\Framework\Session\SidResolver
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
    public function getSid(\Magento\Framework\Session\SessionManagerInterface $session)
    {
        return $this->_getSubject()->getSid($session);
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionIdQueryParam(\Magento\Framework\Session\SessionManagerInterface $session)
    {
        return $this->_getSubject()->getSessionIdQueryParam($session);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseSessionVar($var)
    {
        return $this->_getSubject()->setUseSessionVar($var);
    }

    /**
     * {@inheritdoc}
     */
    public function getUseSessionVar()
    {
        return $this->_getSubject()->getUseSessionVar();
    }

    /**
     * {@inheritdoc}
     */
    public function setUseSessionInUrl($flag = true)
    {
        return $this->_getSubject()->setUseSessionInUrl($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getUseSessionInUrl()
    {
        return $this->_getSubject()->getUseSessionInUrl();
    }
}
