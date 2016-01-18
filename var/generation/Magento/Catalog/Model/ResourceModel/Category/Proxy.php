<?php
namespace Magento\Catalog\Model\ResourceModel\Category;

/**
 * Proxy class for @see \Magento\Catalog\Model\ResourceModel\Category
 */
class Proxy extends \Magento\Catalog\Model\ResourceModel\Category
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
     * @var \Magento\Catalog\Model\ResourceModel\Category
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Catalog\\Model\\ResourceModel\\Category', $shared = true)
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
     * @return \Magento\Catalog\Model\ResourceModel\Category
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
    public function getEntityType()
    {
        return $this->_getSubject()->getEntityType();
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryProductTable()
    {
        return $this->_getSubject()->getCategoryProductTable();
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreId($storeId)
    {
        return $this->_getSubject()->setStoreId($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreId()
    {
        return $this->_getSubject()->getStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteChildren(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->deleteChildren($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsPosition($category)
    {
        return $this->_getSubject()->getProductsPosition($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenCount($categoryId)
    {
        return $this->_getSubject()->getChildrenCount($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function checkId($entityId)
    {
        return $this->_getSubject()->checkId($entityId);
    }

    /**
     * {@inheritdoc}
     */
    public function verifyIds(array $ids)
    {
        return $this->_getSubject()->verifyIds($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenAmount($category, $isActiveFlag = true)
    {
        return $this->_getSubject()->getChildrenAmount($category, $isActiveFlag);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsActiveAttributeId()
    {
        return $this->_getSubject()->getIsActiveAttributeId();
    }

    /**
     * {@inheritdoc}
     */
    public function findWhereAttributeIs($entityIdsFilter, $attribute, $expectedValue)
    {
        return $this->_getSubject()->findWhereAttributeIs($entityIdsFilter, $attribute, $expectedValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCount($category)
    {
        return $this->_getSubject()->getProductCount($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategories($parent, $recursionLevel = 0, $sorted = false, $asCollection = false, $toLoad = true)
    {
        return $this->_getSubject()->getCategories($parent, $recursionLevel, $sorted, $asCollection, $toLoad);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentCategories($category)
    {
        return $this->_getSubject()->getParentCategories($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentDesignCategory($category)
    {
        return $this->_getSubject()->getParentDesignCategory($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenCategories($category)
    {
        return $this->_getSubject()->getChildrenCategories($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren($category, $recursive = true)
    {
        return $this->_getSubject()->getChildren($category, $recursive);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllChildren($category)
    {
        return $this->_getSubject()->getAllChildren($category);
    }

    /**
     * {@inheritdoc}
     */
    public function isInRootCategoryList($category)
    {
        return $this->_getSubject()->isInRootCategoryList($category);
    }

    /**
     * {@inheritdoc}
     */
    public function isForbiddenToDelete($categoryId)
    {
        return $this->_getSubject()->isForbiddenToDelete($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryPathById($categoryId)
    {
        return $this->_getSubject()->getCategoryPathById($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function changeParent(\Magento\Catalog\Model\Category $category, \Magento\Catalog\Model\Category $newParent, $afterCategoryId = null)
    {
        return $this->_getSubject()->changeParent($category, $newParent, $afterCategoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function countVisible()
    {
        return $this->_getSubject()->countVisible();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultStoreId()
    {
        return $this->_getSubject()->getDefaultStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeRawValue($entityId, $attribute, $store)
    {
        return $this->_getSubject()->getAttributeRawValue($entityId, $attribute, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function load($object, $entityId, $attributes = array())
    {
        return $this->_getSubject()->load($object, $entityId, $attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function setConnection($connection)
    {
        return $this->_getSubject()->setConnection($connection);
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
    public function getIdFieldName()
    {
        return $this->_getSubject()->getIdFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($alias)
    {
        return $this->_getSubject()->getTable($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        return $this->_getSubject()->setType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->_getSubject()->getType();
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeId()
    {
        return $this->_getSubject()->getTypeId();
    }

    /**
     * {@inheritdoc}
     */
    public function unsetAttributes($attributes = null)
    {
        return $this->_getSubject()->unsetAttributes($attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($attribute)
    {
        return $this->_getSubject()->getAttribute($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function addAttribute(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute)
    {
        return $this->_getSubject()->addAttribute($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function isPartialLoad($flag = null)
    {
        return $this->_getSubject()->isPartialLoad($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function isPartialSave($flag = null)
    {
        return $this->_getSubject()->isPartialSave($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function loadAllAttributes($object = null)
    {
        return $this->_getSubject()->loadAllAttributes($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getSortedAttributes($setId = null)
    {
        return $this->_getSubject()->getSortedAttributes($setId);
    }

    /**
     * {@inheritdoc}
     */
    public function attributesCompare($firstAttribute, $secondAttribute)
    {
        return $this->_getSubject()->attributesCompare($firstAttribute, $secondAttribute);
    }

    /**
     * {@inheritdoc}
     */
    public function walkAttributes($partMethod, array $args = array(), $collectExceptionMessages = null)
    {
        return $this->_getSubject()->walkAttributes($partMethod, $args, $collectExceptionMessages);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesByCode()
    {
        return $this->_getSubject()->getAttributesByCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesByTable()
    {
        return $this->_getSubject()->getAttributesByTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTable()
    {
        return $this->_getSubject()->getEntityTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityIdField()
    {
        return $this->_getSubject()->getEntityIdField();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueEntityIdField()
    {
        return $this->_getSubject()->getValueEntityIdField();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueTablePrefix()
    {
        return $this->_getSubject()->getValueTablePrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTablePrefix()
    {
        return $this->_getSubject()->getEntityTablePrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function isAttributeStatic($attribute)
    {
        return $this->_getSubject()->isAttributeStatic($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        return $this->_getSubject()->validate($object);
    }

    /**
     * {@inheritdoc}
     */
    public function setNewIncrementId(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->setNewIncrementId($object);
    }

    /**
     * {@inheritdoc}
     */
    public function checkAttributeUniqueValue(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute, $object)
    {
        return $this->_getSubject()->checkAttributeUniqueValue($attribute, $object);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultAttributeSourceModel()
    {
        return $this->_getSubject()->getDefaultAttributeSourceModel();
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        return $this->_getSubject()->save($object);
    }

    /**
     * {@inheritdoc}
     */
    public function saveAttribute(\Magento\Framework\DataObject $object, $attributeCode)
    {
        return $this->_getSubject()->saveAttribute($object, $attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($object)
    {
        return $this->_getSubject()->delete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultAttributes()
    {
        return $this->_getSubject()->getDefaultAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        return $this->_getSubject()->beginTransaction();
    }

    /**
     * {@inheritdoc}
     */
    public function addCommitCallback($callback)
    {
        return $this->_getSubject()->addCommitCallback($callback);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return $this->_getSubject()->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        return $this->_getSubject()->rollBack();
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRulesBeforeSave()
    {
        return $this->_getSubject()->getValidationRulesBeforeSave();
    }
}
