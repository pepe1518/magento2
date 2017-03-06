<?php
namespace Magento\Theme\Model\View\Design;

/**
 * Proxy class for @see \Magento\Theme\Model\View\Design
 */
class Proxy extends \Magento\Theme\Model\View\Design
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
     * @var \Magento\Theme\Model\View\Design
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Theme\\Model\\View\\Design', $shared = true)
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
     * @return \Magento\Theme\Model\View\Design
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
    public function setArea($area)
    {
        return $this->_getSubject()->setArea($area);
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        return $this->_getSubject()->getArea();
    }

    /**
     * {@inheritdoc}
     */
    public function setDesignTheme($theme, $area = null)
    {
        return $this->_getSubject()->setDesignTheme($theme, $area);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigurationDesignTheme($area = null, array $params = array())
    {
        return $this->_getSubject()->getConfigurationDesignTheme($area, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultDesignTheme()
    {
        return $this->_getSubject()->setDefaultDesignTheme();
    }

    /**
     * {@inheritdoc}
     */
    public function getDesignTheme()
    {
        return $this->_getSubject()->getDesignTheme();
    }

    /**
     * {@inheritdoc}
     */
    public function getThemePath(\Magento\Framework\View\Design\ThemeInterface $theme)
    {
        return $this->_getSubject()->getThemePath($theme);
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
    public function getDesignParams()
    {
        return $this->_getSubject()->getDesignParams();
    }
}
