<?php
namespace Magento\Quote\Model\ResourceModel\Quote\Collection;

/**
 * Proxy class for @see \Magento\Quote\Model\ResourceModel\Quote\Collection
 */
class Proxy extends \Magento\Quote\Model\ResourceModel\Quote\Collection
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
     * @var \Magento\Quote\Model\ResourceModel\Quote\Collection
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Quote\\Model\\ResourceModel\\Quote\\Collection', $shared = true)
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
     * @return \Magento\Quote\Model\ResourceModel\Quote\Collection
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
    public function fetchItem()
    {
        return $this->_getSubject()->fetchItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getMainTable()
    {
        return $this->_getSubject()->getMainTable();
    }

    /**
     * {@inheritdoc}
     */
    public function setMainTable($table)
    {
        return $this->_getSubject()->setMainTable($table);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelect()
    {
        return $this->_getSubject()->getSelect();
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToSelect($field, $alias = null)
    {
        return $this->_getSubject()->addFieldToSelect($field, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function addExpressionFieldToSelect($alias, $expression, $fields)
    {
        return $this->_getSubject()->addExpressionFieldToSelect($alias, $expression, $fields);
    }

    /**
     * {@inheritdoc}
     */
    public function removeFieldFromSelect($field, $isAlias = false)
    {
        return $this->_getSubject()->removeFieldFromSelect($field, $isAlias);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllFieldsFromSelect()
    {
        return $this->_getSubject()->removeAllFieldsFromSelect();
    }

    /**
     * {@inheritdoc}
     */
    public function setModel($model)
    {
        return $this->_getSubject()->setModel($model);
    }

    /**
     * {@inheritdoc}
     */
    public function getModelName()
    {
        return $this->_getSubject()->getModelName();
    }

    /**
     * {@inheritdoc}
     */
    public function setResourceModel($model)
    {
        return $this->_getSubject()->setResourceModel($model);
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceModelName()
    {
        return $this->_getSubject()->getResourceModelName();
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        return $this->_getSubject()->getResource();
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($table)
    {
        return $this->_getSubject()->getTable($table);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllIds()
    {
        return $this->_getSubject()->getAllIds();
    }

    /**
     * {@inheritdoc}
     */
    public function join($table, $cond, $cols = '*')
    {
        return $this->_getSubject()->join($table, $cond, $cols);
    }

    /**
     * {@inheritdoc}
     */
    public function setResetItemsDataChanged($flag)
    {
        return $this->_getSubject()->setResetItemsDataChanged($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function resetItemsDataChanged()
    {
        return $this->_getSubject()->resetItemsDataChanged();
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        return $this->_getSubject()->save();
    }

    /**
     * {@inheritdoc}
     */
    public function addBindParam($name, $value)
    {
        return $this->_getSubject()->addBindParam($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        return $this->_getSubject()->getIdFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function setConnection(\Magento\Framework\DB\Adapter\AdapterInterface $conn)
    {
        return $this->_getSubject()->setConnection($conn);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        return $this->_getSubject()->getConnection();
    }

    /**
     * {@inheritdoc}
     */
    public function getSize()
    {
        return $this->_getSubject()->getSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectCountSql()
    {
        return $this->_getSubject()->getSelectCountSql();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectSql($stringMode = false)
    {
        return $this->_getSubject()->getSelectSql($stringMode);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder($field, $direction = 'DESC')
    {
        return $this->_getSubject()->setOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function addOrder($field, $direction = 'DESC')
    {
        return $this->_getSubject()->addOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function unshiftOrder($field, $direction = 'DESC')
    {
        return $this->_getSubject()->unshiftOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToFilter($field, $condition = null)
    {
        return $this->_getSubject()->addFieldToFilter($field, $condition);
    }

    /**
     * {@inheritdoc}
     */
    public function distinct($flag)
    {
        return $this->_getSubject()->distinct($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function load($printQuery = false, $logQuery = false)
    {
        return $this->_getSubject()->load($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function loadWithFilter($printQuery = false, $logQuery = false)
    {
        return $this->_getSubject()->loadWithFilter($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return $this->_getSubject()->getData();
    }

    /**
     * {@inheritdoc}
     */
    public function resetData()
    {
        return $this->_getSubject()->resetData();
    }

    /**
     * {@inheritdoc}
     */
    public function loadData($printQuery = false, $logQuery = false)
    {
        return $this->_getSubject()->loadData($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function printLogQuery($printQuery = false, $logQuery = false, $sql = null)
    {
        return $this->_getSubject()->printLogQuery($printQuery, $logQuery, $sql);
    }

    /**
     * {@inheritdoc}
     */
    public function addFilterToMap($filter, $alias, $group = 'fields')
    {
        return $this->_getSubject()->addFilterToMap($filter, $alias, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function joinExtensionAttribute(\Magento\Framework\Api\ExtensionAttribute\JoinDataInterface $join, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor)
    {
        return $this->_getSubject()->joinExtensionAttribute($join, $extensionAttributesJoinProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemObjectClass()
    {
        return $this->_getSubject()->getItemObjectClass();
    }

    /**
     * {@inheritdoc}
     */
    public function addFilter($field, $value, $type = 'and')
    {
        return $this->_getSubject()->addFilter($field, $value, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getFilter($field)
    {
        return $this->_getSubject()->getFilter($field);
    }

    /**
     * {@inheritdoc}
     */
    public function isLoaded()
    {
        return $this->_getSubject()->isLoaded();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        return $this->_getSubject()->getCurPage($displacement);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastPageNumber()
    {
        return $this->_getSubject()->getLastPageNumber();
    }

    /**
     * {@inheritdoc}
     */
    public function getPageSize()
    {
        return $this->_getSubject()->getPageSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstItem()
    {
        return $this->_getSubject()->getFirstItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getLastItem()
    {
        return $this->_getSubject()->getLastItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        return $this->_getSubject()->getItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnValues($colName)
    {
        return $this->_getSubject()->getColumnValues($colName);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsByColumnValue($column, $value)
    {
        return $this->_getSubject()->getItemsByColumnValue($column, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemByColumnValue($column, $value)
    {
        return $this->_getSubject()->getItemByColumnValue($column, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function addItem(\Magento\Framework\DataObject $item)
    {
        return $this->_getSubject()->addItem($item);
    }

    /**
     * {@inheritdoc}
     */
    public function removeItemByKey($key)
    {
        return $this->_getSubject()->removeItemByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllItems()
    {
        return $this->_getSubject()->removeAllItems();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return $this->_getSubject()->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function walk($callback, array $args = array())
    {
        return $this->_getSubject()->walk($callback, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function each($objMethod, $args = array())
    {
        return $this->_getSubject()->each($objMethod, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataToAll($key, $value = null)
    {
        return $this->_getSubject()->setDataToAll($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setCurPage($page)
    {
        return $this->_getSubject()->setCurPage($page);
    }

    /**
     * {@inheritdoc}
     */
    public function setPageSize($size)
    {
        return $this->_getSubject()->setPageSize($size);
    }

    /**
     * {@inheritdoc}
     */
    public function setItemObjectClass($className)
    {
        return $this->_getSubject()->setItemObjectClass($className);
    }

    /**
     * {@inheritdoc}
     */
    public function getNewEmptyItem()
    {
        return $this->_getSubject()->getNewEmptyItem();
    }

    /**
     * {@inheritdoc}
     */
    public function toXml()
    {
        return $this->_getSubject()->toXml();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray($arrRequiredFields = array())
    {
        return $this->_getSubject()->toArray($arrRequiredFields);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return $this->_getSubject()->toOptionArray();
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionHash()
    {
        return $this->_getSubject()->toOptionHash();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemById($idValue)
    {
        return $this->_getSubject()->getItemById($idValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return $this->_getSubject()->getIterator();
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return $this->_getSubject()->count();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlag($flag)
    {
        return $this->_getSubject()->getFlag($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setFlag($flag, $value = null)
    {
        return $this->_getSubject()->setFlag($flag, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function hasFlag($flag)
    {
        return $this->_getSubject()->hasFlag($flag);
    }
}
