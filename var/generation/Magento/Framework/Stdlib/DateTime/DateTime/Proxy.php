<?php
namespace Magento\Framework\Stdlib\DateTime\DateTime;

/**
 * Proxy class for @see \Magento\Framework\Stdlib\DateTime\DateTime
 */
class Proxy extends \Magento\Framework\Stdlib\DateTime\DateTime
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
     * @var \Magento\Framework\Stdlib\DateTime\DateTime
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\Stdlib\\DateTime\\DateTime', $shared = true)
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
     * @return \Magento\Framework\Stdlib\DateTime\DateTime
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
    public function calculateOffset($timezone = null)
    {
        return $this->_getSubject()->calculateOffset($timezone);
    }

    /**
     * {@inheritdoc}
     */
    public function gmtDate($format = null, $input = null)
    {
        return $this->_getSubject()->gmtDate($format, $input);
    }

    /**
     * {@inheritdoc}
     */
    public function date($format = null, $input = null)
    {
        return $this->_getSubject()->date($format, $input);
    }

    /**
     * {@inheritdoc}
     */
    public function gmtTimestamp($input = null)
    {
        return $this->_getSubject()->gmtTimestamp($input);
    }

    /**
     * {@inheritdoc}
     */
    public function timestamp($input = null)
    {
        return $this->_getSubject()->timestamp($input);
    }

    /**
     * {@inheritdoc}
     */
    public function getGmtOffset($type = 'seconds')
    {
        return $this->_getSubject()->getGmtOffset($type);
    }
}
