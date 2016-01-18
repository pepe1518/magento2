<?php
namespace Magento\Catalog\Model\Product\Attribute\Source\Status;

/**
 * Proxy class for @see \Magento\Catalog\Model\Product\Attribute\Source\Status
 */
class Proxy extends \Magento\Catalog\Model\Product\Attribute\Source\Status
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
     * @var \Magento\Catalog\Model\Product\Attribute\Source\Status
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Catalog\\Model\\Product\\Attribute\\Source\\Status', $shared = true)
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
     * @return \Magento\Catalog\Model\Product\Attribute\Source\Status
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
    public function getVisibleStatusIds()
    {
        return $this->_getSubject()->getVisibleStatusIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getSaleableStatusIds()
    {
        return $this->_getSubject()->getSaleableStatusIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllOptions()
    {
        return $this->_getSubject()->getAllOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionText($optionId)
    {
        return $this->_getSubject()->getOptionText($optionId);
    }

    /**
     * {@inheritdoc}
     */
    public function addValueSortToCollection($collection, $dir = 'asc')
    {
        return $this->_getSubject()->addValueSortToCollection($collection, $dir);
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($attribute)
    {
        return $this->_getSubject()->setAttribute($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute()
    {
        return $this->_getSubject()->getAttribute();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionId($value)
    {
        return $this->_getSubject()->getOptionId($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatColumns()
    {
        return $this->_getSubject()->getFlatColumns();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatIndexes()
    {
        return $this->_getSubject()->getFlatIndexes();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatUpdateSelect($store)
    {
        return $this->_getSubject()->getFlatUpdateSelect($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getIndexOptionText($value)
    {
        return $this->_getSubject()->getIndexOptionText($value);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return $this->_getSubject()->toOptionArray();
    }
}
