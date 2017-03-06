<?php
namespace Magento\Backend\Helper\Data;

/**
 * Proxy class for @see \Magento\Backend\Helper\Data
 */
class Proxy extends \Magento\Backend\Helper\Data
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
     * @var \Magento\Backend\Helper\Data
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Backend\\Helper\\Data', $shared = true)
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
     * @return \Magento\Backend\Helper\Data
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
    public function getPageHelpUrl()
    {
        return $this->_getSubject()->getPageHelpUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function setPageHelpUrl($url = null)
    {
        return $this->_getSubject()->setPageHelpUrl($url);
    }

    /**
     * {@inheritdoc}
     */
    public function addPageHelpUrl($suffix)
    {
        return $this->_getSubject()->addPageHelpUrl($suffix);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = array())
    {
        return $this->_getSubject()->getUrl($route, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUserId()
    {
        return $this->_getSubject()->getCurrentUserId();
    }

    /**
     * {@inheritdoc}
     */
    public function prepareFilterString($filterString)
    {
        return $this->_getSubject()->prepareFilterString($filterString);
    }

    /**
     * {@inheritdoc}
     */
    public function generateResetPasswordLinkToken()
    {
        return $this->_getSubject()->generateResetPasswordLinkToken();
    }

    /**
     * {@inheritdoc}
     */
    public function getHomePageUrl()
    {
        return $this->_getSubject()->getHomePageUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getAreaFrontName($checkHost = false)
    {
        return $this->_getSubject()->getAreaFrontName($checkHost);
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        return $this->_getSubject()->isModuleOutputEnabled($moduleName);
    }
}
