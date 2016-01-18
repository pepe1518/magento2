<?php
namespace Magento\Framework\View\LayoutInterface;

/**
 * Proxy class for @see \Magento\Framework\View\LayoutInterface
 */
class Proxy implements \Magento\Framework\View\LayoutInterface
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
     * @var \Magento\Framework\View\LayoutInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\View\\LayoutInterface', $shared = true)
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
     * @return \Magento\Framework\View\LayoutInterface
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
    public function getUpdate()
    {
        return $this->_getSubject()->getUpdate();
    }

    /**
     * {@inheritdoc}
     */
    public function generateXml()
    {
        return $this->_getSubject()->generateXml();
    }

    /**
     * {@inheritdoc}
     */
    public function generateElements()
    {
        return $this->_getSubject()->generateElements();
    }

    /**
     * {@inheritdoc}
     */
    public function renderElement($name, $useCache = true)
    {
        return $this->_getSubject()->renderElement($name, $useCache);
    }

    /**
     * {@inheritdoc}
     */
    public function addOutputElement($name)
    {
        return $this->_getSubject()->addOutputElement($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getOutput()
    {
        return $this->_getSubject()->getOutput();
    }

    /**
     * {@inheritdoc}
     */
    public function hasElement($name)
    {
        return $this->_getSubject()->hasElement($name);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetElement($name)
    {
        return $this->_getSubject()->unsetElement($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllBlocks()
    {
        return $this->_getSubject()->getAllBlocks();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlock($name)
    {
        return $this->_getSubject()->getBlock($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlock($parentName, $alias)
    {
        return $this->_getSubject()->getChildBlock($parentName, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function setChild($parentName, $elementName, $alias)
    {
        return $this->_getSubject()->setChild($parentName, $elementName, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function reorderChild($parentName, $childName, $offsetOrSibling, $after = true)
    {
        return $this->_getSubject()->reorderChild($parentName, $childName, $offsetOrSibling, $after);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChild($parentName, $alias)
    {
        return $this->_getSubject()->unsetChild($parentName, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildNames($parentName)
    {
        return $this->_getSubject()->getChildNames($parentName);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlocks($parentName)
    {
        return $this->_getSubject()->getChildBlocks($parentName);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildName($parentName, $alias)
    {
        return $this->_getSubject()->getChildName($parentName, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function addToParentGroup($blockName, $parentGroupName)
    {
        return $this->_getSubject()->addToParentGroup($blockName, $parentGroupName);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupChildNames($blockName, $groupName)
    {
        return $this->_getSubject()->getGroupChildNames($blockName, $groupName);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentName($childName)
    {
        return $this->_getSubject()->getParentName($childName);
    }

    /**
     * {@inheritdoc}
     */
    public function createBlock($type, $name = '', array $arguments = array())
    {
        return $this->_getSubject()->createBlock($type, $name, $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function addBlock($block, $name = '', $parent = '', $alias = '')
    {
        return $this->_getSubject()->addBlock($block, $name, $parent, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function addContainer($name, $label, array $options = array(), $parent = '', $alias = '')
    {
        return $this->_getSubject()->addContainer($name, $label, $options, $parent, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function renameElement($oldName, $newName)
    {
        return $this->_getSubject()->renameElement($oldName, $newName);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementAlias($name)
    {
        return $this->_getSubject()->getElementAlias($name);
    }

    /**
     * {@inheritdoc}
     */
    public function removeOutputElement($name)
    {
        return $this->_getSubject()->removeOutputElement($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessagesBlock()
    {
        return $this->_getSubject()->getMessagesBlock();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockSingleton($type)
    {
        return $this->_getSubject()->getBlockSingleton($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementProperty($name, $attribute)
    {
        return $this->_getSubject()->getElementProperty($name, $attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function isBlock($name)
    {
        return $this->_getSubject()->isBlock($name);
    }

    /**
     * {@inheritdoc}
     */
    public function isContainer($name)
    {
        return $this->_getSubject()->isContainer($name);
    }

    /**
     * {@inheritdoc}
     */
    public function isManipulationAllowed($name)
    {
        return $this->_getSubject()->isManipulationAllowed($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setBlock($name, $block)
    {
        return $this->_getSubject()->setBlock($name, $block);
    }

    /**
     * {@inheritdoc}
     */
    public function isCacheable()
    {
        return $this->_getSubject()->isCacheable();
    }
}
