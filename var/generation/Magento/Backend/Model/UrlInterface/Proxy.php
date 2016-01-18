<?php
namespace Magento\Backend\Model\UrlInterface;

/**
 * Proxy class for @see \Magento\Backend\Model\UrlInterface
 */
class Proxy implements \Magento\Backend\Model\UrlInterface
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
     * @var \Magento\Backend\Model\UrlInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Backend\\Model\\UrlInterface', $shared = true)
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
     * @return \Magento\Backend\Model\UrlInterface
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
    public function getSecretKey($routeName = null, $controller = null, $action = null)
    {
        return $this->_getSubject()->getSecretKey($routeName, $controller, $action);
    }

    /**
     * {@inheritdoc}
     */
    public function useSecretKey()
    {
        return $this->_getSubject()->useSecretKey();
    }

    /**
     * {@inheritdoc}
     */
    public function turnOnSecretKey()
    {
        return $this->_getSubject()->turnOnSecretKey();
    }

    /**
     * {@inheritdoc}
     */
    public function turnOffSecretKey()
    {
        return $this->_getSubject()->turnOffSecretKey();
    }

    /**
     * {@inheritdoc}
     */
    public function renewSecretUrls()
    {
        return $this->_getSubject()->renewSecretUrls();
    }

    /**
     * {@inheritdoc}
     */
    public function getStartupPageUrl()
    {
        return $this->_getSubject()->getStartupPageUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function setSession(\Magento\Backend\Model\Auth\Session $session)
    {
        return $this->_getSubject()->setSession($session);
    }

    /**
     * {@inheritdoc}
     */
    public function getAreaFrontName()
    {
        return $this->_getSubject()->getAreaFrontName();
    }

    /**
     * {@inheritdoc}
     */
    public function findFirstAvailableMenu()
    {
        return $this->_getSubject()->findFirstAvailableMenu();
    }

    /**
     * {@inheritdoc}
     */
    public function getUseSession()
    {
        return $this->_getSubject()->getUseSession();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl($params = array())
    {
        return $this->_getSubject()->getBaseUrl($params);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUrl()
    {
        return $this->_getSubject()->getCurrentUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteUrl($routePath = null, $routeParams = null)
    {
        return $this->_getSubject()->getRouteUrl($routePath, $routeParams);
    }

    /**
     * {@inheritdoc}
     */
    public function addSessionParam()
    {
        return $this->_getSubject()->addSessionParam();
    }

    /**
     * {@inheritdoc}
     */
    public function addQueryParams(array $data)
    {
        return $this->_getSubject()->addQueryParams($data);
    }

    /**
     * {@inheritdoc}
     */
    public function setQueryParam($key, $data)
    {
        return $this->_getSubject()->setQueryParam($key, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($routePath = null, $routeParams = null)
    {
        return $this->_getSubject()->getUrl($routePath, $routeParams);
    }

    /**
     * {@inheritdoc}
     */
    public function escape($value)
    {
        return $this->_getSubject()->escape($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getDirectUrl($url, $params = array())
    {
        return $this->_getSubject()->getDirectUrl($url, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function sessionUrlVar($html)
    {
        return $this->_getSubject()->sessionUrlVar($html);
    }

    /**
     * {@inheritdoc}
     */
    public function isOwnOriginUrl()
    {
        return $this->_getSubject()->isOwnOriginUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectUrl($url)
    {
        return $this->_getSubject()->getRedirectUrl($url);
    }

    /**
     * {@inheritdoc}
     */
    public function setScope($params)
    {
        return $this->_getSubject()->setScope($params);
    }
}
