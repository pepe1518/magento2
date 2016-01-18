<?php
namespace Magento\Framework\Translate\Inline\ParserInterface;

/**
 * Proxy class for @see \Magento\Framework\Translate\Inline\ParserInterface
 */
class Proxy implements \Magento\Framework\Translate\Inline\ParserInterface
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
     * @var \Magento\Framework\Translate\Inline\ParserInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\Translate\\Inline\\ParserInterface', $shared = true)
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
     * @return \Magento\Framework\Translate\Inline\ParserInterface
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
    public function processAjaxPost(array $translateParams)
    {
        return $this->_getSubject()->processAjaxPost($translateParams);
    }

    /**
     * {@inheritdoc}
     */
    public function processResponseBodyString($body)
    {
        return $this->_getSubject()->processResponseBodyString($body);
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return $this->_getSubject()->getContent();
    }

    /**
     * {@inheritdoc}
     */
    public function setContent($content)
    {
        return $this->_getSubject()->setContent($content);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsJson($flag)
    {
        return $this->_getSubject()->setIsJson($flag);
    }
}
