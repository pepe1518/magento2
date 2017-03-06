<?php
namespace Magento\Customer\Model\Session;

/**
 * Proxy class for @see \Magento\Customer\Model\Session
 */
class Proxy extends \Magento\Customer\Model\Session
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
     * @var \Magento\Customer\Model\Session
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Customer\\Model\\Session', $shared = true)
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
     * @return \Magento\Customer\Model\Session
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
    public function getCustomerConfigShare()
    {
        return $this->_getSubject()->getCustomerConfigShare();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerData(\Magento\Customer\Api\Data\CustomerInterface $customer)
    {
        return $this->_getSubject()->setCustomerData($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerData()
    {
        return $this->_getSubject()->getCustomerData();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerDataObject()
    {
        return $this->_getSubject()->getCustomerDataObject();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerDataObject(\Magento\Customer\Api\Data\CustomerInterface $customerData)
    {
        return $this->_getSubject()->setCustomerDataObject($customerData);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomer(\Magento\Customer\Model\Customer $customerModel)
    {
        return $this->_getSubject()->setCustomer($customerModel);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomer()
    {
        return $this->_getSubject()->getCustomer();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerId($id)
    {
        return $this->_getSubject()->setCustomerId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerId()
    {
        return $this->_getSubject()->getCustomerId();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->_getSubject()->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function setId($customerId)
    {
        return $this->_getSubject()->setId($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerGroupId($id)
    {
        return $this->_getSubject()->setCustomerGroupId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupId()
    {
        return $this->_getSubject()->getCustomerGroupId();
    }

    /**
     * {@inheritdoc}
     */
    public function isLoggedIn()
    {
        return $this->_getSubject()->isLoggedIn();
    }

    /**
     * {@inheritdoc}
     */
    public function checkCustomerId($customerId)
    {
        return $this->_getSubject()->checkCustomerId($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerAsLoggedIn($customer)
    {
        return $this->_getSubject()->setCustomerAsLoggedIn($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerDataAsLoggedIn($customer)
    {
        return $this->_getSubject()->setCustomerDataAsLoggedIn($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function loginById($customerId)
    {
        return $this->_getSubject()->loginById($customerId);
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
    public function authenticate($loginUrl = null)
    {
        return $this->_getSubject()->authenticate($loginUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function setBeforeAuthUrl($url)
    {
        return $this->_getSubject()->setBeforeAuthUrl($url);
    }

    /**
     * {@inheritdoc}
     */
    public function setAfterAuthUrl($url)
    {
        return $this->_getSubject()->setAfterAuthUrl($url);
    }

    /**
     * {@inheritdoc}
     */
    public function regenerateId()
    {
        return $this->_getSubject()->regenerateId();
    }

    /**
     * {@inheritdoc}
     */
    public function writeClose()
    {
        return $this->_getSubject()->writeClose();
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        return $this->_getSubject()->__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        return $this->_getSubject()->start();
    }

    /**
     * {@inheritdoc}
     */
    public function isSessionExists()
    {
        return $this->_getSubject()->isSessionExists();
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $clear = false)
    {
        return $this->_getSubject()->getData($key, $clear);
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionId()
    {
        return $this->_getSubject()->getSessionId();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->_getSubject()->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        return $this->_getSubject()->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(array $options = null)
    {
        return $this->_getSubject()->destroy($options);
    }

    /**
     * {@inheritdoc}
     */
    public function clearStorage()
    {
        return $this->_getSubject()->clearStorage();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieDomain()
    {
        return $this->_getSubject()->getCookieDomain();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookiePath()
    {
        return $this->_getSubject()->getCookiePath();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieLifetime()
    {
        return $this->_getSubject()->getCookieLifetime();
    }

    /**
     * {@inheritdoc}
     */
    public function setSessionId($sessionId)
    {
        return $this->_getSubject()->setSessionId($sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionIdForHost($urlHost)
    {
        return $this->_getSubject()->getSessionIdForHost($urlHost);
    }

    /**
     * {@inheritdoc}
     */
    public function isValidForHost($host)
    {
        return $this->_getSubject()->isValidForHost($host);
    }

    /**
     * {@inheritdoc}
     */
    public function isValidForPath($path)
    {
        return $this->_getSubject()->isValidForPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function expireSessionCookie()
    {
        return $this->_getSubject()->expireSessionCookie();
    }
}
