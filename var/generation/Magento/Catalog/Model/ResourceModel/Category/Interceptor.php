<?php
namespace Magento\Catalog\Model\ResourceModel\Category;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Category
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Category implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Entity\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Factory $modelFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Catalog\Model\ResourceModel\Category\TreeFactory $categoryTreeFactory, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, $data = array())
    {
        $this->___init();
        parent::__construct($context, $storeManager, $modelFactory, $eventManager, $categoryTreeFactory, $categoryCollectionFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityType');
        if (!$pluginInfo) {
            return parent::getEntityType();
        } else {
            return $this->___callPlugins('getEntityType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryProductTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryProductTable');
        if (!$pluginInfo) {
            return parent::getCategoryProductTable();
        } else {
            return $this->___callPlugins('getCategoryProductTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreId($storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreId');
        if (!$pluginInfo) {
            return parent::setStoreId($storeId);
        } else {
            return $this->___callPlugins('setStoreId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreId');
        if (!$pluginInfo) {
            return parent::getStoreId();
        } else {
            return $this->___callPlugins('getStoreId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteChildren(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteChildren');
        if (!$pluginInfo) {
            return parent::deleteChildren($object);
        } else {
            return $this->___callPlugins('deleteChildren', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsPosition($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsPosition');
        if (!$pluginInfo) {
            return parent::getProductsPosition($category);
        } else {
            return $this->___callPlugins('getProductsPosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenCount($categoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenCount');
        if (!$pluginInfo) {
            return parent::getChildrenCount($categoryId);
        } else {
            return $this->___callPlugins('getChildrenCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkId($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkId');
        if (!$pluginInfo) {
            return parent::checkId($entityId);
        } else {
            return $this->___callPlugins('checkId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function verifyIds(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'verifyIds');
        if (!$pluginInfo) {
            return parent::verifyIds($ids);
        } else {
            return $this->___callPlugins('verifyIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenAmount($category, $isActiveFlag = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenAmount');
        if (!$pluginInfo) {
            return parent::getChildrenAmount($category, $isActiveFlag);
        } else {
            return $this->___callPlugins('getChildrenAmount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsActiveAttributeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsActiveAttributeId');
        if (!$pluginInfo) {
            return parent::getIsActiveAttributeId();
        } else {
            return $this->___callPlugins('getIsActiveAttributeId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function findWhereAttributeIs($entityIdsFilter, $attribute, $expectedValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findWhereAttributeIs');
        if (!$pluginInfo) {
            return parent::findWhereAttributeIs($entityIdsFilter, $attribute, $expectedValue);
        } else {
            return $this->___callPlugins('findWhereAttributeIs', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCount($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductCount');
        if (!$pluginInfo) {
            return parent::getProductCount($category);
        } else {
            return $this->___callPlugins('getProductCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategories($parent, $recursionLevel = 0, $sorted = false, $asCollection = false, $toLoad = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategories');
        if (!$pluginInfo) {
            return parent::getCategories($parent, $recursionLevel, $sorted, $asCollection, $toLoad);
        } else {
            return $this->___callPlugins('getCategories', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentCategories($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentCategories');
        if (!$pluginInfo) {
            return parent::getParentCategories($category);
        } else {
            return $this->___callPlugins('getParentCategories', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentDesignCategory($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentDesignCategory');
        if (!$pluginInfo) {
            return parent::getParentDesignCategory($category);
        } else {
            return $this->___callPlugins('getParentDesignCategory', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenCategories($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenCategories');
        if (!$pluginInfo) {
            return parent::getChildrenCategories($category);
        } else {
            return $this->___callPlugins('getChildrenCategories', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren($category, $recursive = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildren');
        if (!$pluginInfo) {
            return parent::getChildren($category, $recursive);
        } else {
            return $this->___callPlugins('getChildren', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllChildren($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllChildren');
        if (!$pluginInfo) {
            return parent::getAllChildren($category);
        } else {
            return $this->___callPlugins('getAllChildren', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInRootCategoryList($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInRootCategoryList');
        if (!$pluginInfo) {
            return parent::isInRootCategoryList($category);
        } else {
            return $this->___callPlugins('isInRootCategoryList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isForbiddenToDelete($categoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isForbiddenToDelete');
        if (!$pluginInfo) {
            return parent::isForbiddenToDelete($categoryId);
        } else {
            return $this->___callPlugins('isForbiddenToDelete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryPathById($categoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryPathById');
        if (!$pluginInfo) {
            return parent::getCategoryPathById($categoryId);
        } else {
            return $this->___callPlugins('getCategoryPathById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function changeParent(\Magento\Catalog\Model\Category $category, \Magento\Catalog\Model\Category $newParent, $afterCategoryId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeParent');
        if (!$pluginInfo) {
            return parent::changeParent($category, $newParent, $afterCategoryId);
        } else {
            return $this->___callPlugins('changeParent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function countVisible()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'countVisible');
        if (!$pluginInfo) {
            return parent::countVisible();
        } else {
            return $this->___callPlugins('countVisible', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultStoreId');
        if (!$pluginInfo) {
            return parent::getDefaultStoreId();
        } else {
            return $this->___callPlugins('getDefaultStoreId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeRawValue($entityId, $attribute, $store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeRawValue');
        if (!$pluginInfo) {
            return parent::getAttributeRawValue($entityId, $attribute, $store);
        } else {
            return $this->___callPlugins('getAttributeRawValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function load($object, $entityId, $attributes = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        if (!$pluginInfo) {
            return parent::load($object, $entityId, $attributes);
        } else {
            return $this->___callPlugins('load', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setConnection($connection)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConnection');
        if (!$pluginInfo) {
            return parent::setConnection($connection);
        } else {
            return $this->___callPlugins('setConnection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnection');
        if (!$pluginInfo) {
            return parent::getConnection();
        } else {
            return $this->___callPlugins('getConnection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        if (!$pluginInfo) {
            return parent::getIdFieldName();
        } else {
            return $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        if (!$pluginInfo) {
            return parent::getTable($alias);
        } else {
            return $this->___callPlugins('getTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setType');
        if (!$pluginInfo) {
            return parent::setType($type);
        } else {
            return $this->___callPlugins('setType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getType');
        if (!$pluginInfo) {
            return parent::getType();
        } else {
            return $this->___callPlugins('getType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypeId');
        if (!$pluginInfo) {
            return parent::getTypeId();
        } else {
            return $this->___callPlugins('getTypeId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetAttributes($attributes = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetAttributes');
        if (!$pluginInfo) {
            return parent::unsetAttributes($attributes);
        } else {
            return $this->___callPlugins('unsetAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        if (!$pluginInfo) {
            return parent::getAttribute($attribute);
        } else {
            return $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addAttribute(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttribute');
        if (!$pluginInfo) {
            return parent::addAttribute($attribute);
        } else {
            return $this->___callPlugins('addAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isPartialLoad($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPartialLoad');
        if (!$pluginInfo) {
            return parent::isPartialLoad($flag);
        } else {
            return $this->___callPlugins('isPartialLoad', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isPartialSave($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPartialSave');
        if (!$pluginInfo) {
            return parent::isPartialSave($flag);
        } else {
            return $this->___callPlugins('isPartialSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadAllAttributes($object = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadAllAttributes');
        if (!$pluginInfo) {
            return parent::loadAllAttributes($object);
        } else {
            return $this->___callPlugins('loadAllAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSortedAttributes($setId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSortedAttributes');
        if (!$pluginInfo) {
            return parent::getSortedAttributes($setId);
        } else {
            return $this->___callPlugins('getSortedAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributesCompare($firstAttribute, $secondAttribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'attributesCompare');
        if (!$pluginInfo) {
            return parent::attributesCompare($firstAttribute, $secondAttribute);
        } else {
            return $this->___callPlugins('attributesCompare', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function walkAttributes($partMethod, array $args = array(), $collectExceptionMessages = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'walkAttributes');
        if (!$pluginInfo) {
            return parent::walkAttributes($partMethod, $args, $collectExceptionMessages);
        } else {
            return $this->___callPlugins('walkAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesByCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributesByCode');
        if (!$pluginInfo) {
            return parent::getAttributesByCode();
        } else {
            return $this->___callPlugins('getAttributesByCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesByTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributesByTable');
        if (!$pluginInfo) {
            return parent::getAttributesByTable();
        } else {
            return $this->___callPlugins('getAttributesByTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityTable');
        if (!$pluginInfo) {
            return parent::getEntityTable();
        } else {
            return $this->___callPlugins('getEntityTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityIdField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityIdField');
        if (!$pluginInfo) {
            return parent::getEntityIdField();
        } else {
            return $this->___callPlugins('getEntityIdField', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueEntityIdField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueEntityIdField');
        if (!$pluginInfo) {
            return parent::getValueEntityIdField();
        } else {
            return $this->___callPlugins('getValueEntityIdField', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueTablePrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueTablePrefix');
        if (!$pluginInfo) {
            return parent::getValueTablePrefix();
        } else {
            return $this->___callPlugins('getValueTablePrefix', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTablePrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityTablePrefix');
        if (!$pluginInfo) {
            return parent::getEntityTablePrefix();
        } else {
            return $this->___callPlugins('getEntityTablePrefix', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isAttributeStatic($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAttributeStatic');
        if (!$pluginInfo) {
            return parent::isAttributeStatic($attribute);
        } else {
            return $this->___callPlugins('isAttributeStatic', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($object);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setNewIncrementId(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNewIncrementId');
        if (!$pluginInfo) {
            return parent::setNewIncrementId($object);
        } else {
            return $this->___callPlugins('setNewIncrementId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkAttributeUniqueValue(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute, $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkAttributeUniqueValue');
        if (!$pluginInfo) {
            return parent::checkAttributeUniqueValue($attribute, $object);
        } else {
            return $this->___callPlugins('checkAttributeUniqueValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultAttributeSourceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultAttributeSourceModel');
        if (!$pluginInfo) {
            return parent::getDefaultAttributeSourceModel();
        } else {
            return $this->___callPlugins('getDefaultAttributeSourceModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($object);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveAttribute(\Magento\Framework\DataObject $object, $attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveAttribute');
        if (!$pluginInfo) {
            return parent::saveAttribute($object, $attributeCode);
        } else {
            return $this->___callPlugins('saveAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($object);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultAttributes');
        if (!$pluginInfo) {
            return parent::getDefaultAttributes();
        } else {
            return $this->___callPlugins('getDefaultAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beginTransaction');
        if (!$pluginInfo) {
            return parent::beginTransaction();
        } else {
            return $this->___callPlugins('beginTransaction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addCommitCallback($callback)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCommitCallback');
        if (!$pluginInfo) {
            return parent::addCommitCallback($callback);
        } else {
            return $this->___callPlugins('addCommitCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'commit');
        if (!$pluginInfo) {
            return parent::commit();
        } else {
            return $this->___callPlugins('commit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rollBack');
        if (!$pluginInfo) {
            return parent::rollBack();
        } else {
            return $this->___callPlugins('rollBack', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRulesBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidationRulesBeforeSave');
        if (!$pluginInfo) {
            return parent::getValidationRulesBeforeSave();
        } else {
            return $this->___callPlugins('getValidationRulesBeforeSave', func_get_args(), $pluginInfo);
        }
    }
}
