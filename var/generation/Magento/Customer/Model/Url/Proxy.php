<?php
namespace Magento\Customer\Model\Url;

/**
 * Proxy class for @see \Magento\Customer\Model\Url
 */
class Proxy extends \Magento\Customer\Model\Url
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
     * @var \Magento\Customer\Model\Url
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Customer\\Model\\Url', $shared = true)
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
     * @return \Magento\Customer\Model\Url
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
    public function getLoginUrl()
    {
        return $this->_getSubject()->getLoginUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getLoginUrlParams()
    {
        return $this->_getSubject()->getLoginUrlParams();
    }

    /**
     * {@inheritdoc}
     */
    public function getLoginPostUrl()
    {
        return $this->_getSubject()->getLoginPostUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoutUrl()
    {
        return $this->_getSubject()->getLogoutUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getDashboardUrl()
    {
        return $this->_getSubject()->getDashboardUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getAccountUrl()
    {
        return $this->_getSubject()->getAccountUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getRegisterUrl()
    {
        return $this->_getSubject()->getRegisterUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getRegisterPostUrl()
    {
        return $this->_getSubject()->getRegisterPostUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getEditUrl()
    {
        return $this->_getSubject()->getEditUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getEditPostUrl()
    {
        return $this->_getSubject()->getEditPostUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getForgotPasswordUrl()
    {
        return $this->_getSubject()->getForgotPasswordUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getEmailConfirmationUrl($email = null)
    {
        return $this->_getSubject()->getEmailConfirmationUrl($email);
    }
}
