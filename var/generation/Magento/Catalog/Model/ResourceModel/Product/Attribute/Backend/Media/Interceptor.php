<?php
namespace Magento\Catalog\Model\ResourceModel\Product\Attribute\Backend\Media;

/**
 * Interceptor class for @see
 * \Magento\Catalog\Model\ResourceModel\Product\Attribute\Backend\Media
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Product\Attribute\Backend\Media implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function loadProductGalleryByAttributeId($product, $attributeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadProductGalleryByAttributeId');
        if (!$pluginInfo) {
            return parent::loadProductGalleryByAttributeId($product, $attributeId);
        } else {
            return $this->___callPlugins('loadProductGalleryByAttributeId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadDataFromTableByValueId($tableNameAlias, array $ids, $storeId = null, array $cols = null, array $leftJoinTables = array(), $whereCondition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadDataFromTableByValueId');
        if (!$pluginInfo) {
            return parent::loadDataFromTableByValueId($tableNameAlias, $ids, $storeId, $cols, $leftJoinTables, $whereCondition);
        } else {
            return $this->___callPlugins('loadDataFromTableByValueId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindValueToEntity($valueId, $entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'bindValueToEntity');
        if (!$pluginInfo) {
            return parent::bindValueToEntity($valueId, $entityId);
        } else {
            return $this->___callPlugins('bindValueToEntity', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveDataRow($table, array $data, array $fields = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveDataRow');
        if (!$pluginInfo) {
            return parent::saveDataRow($table, $data, $fields);
        } else {
            return $this->___callPlugins('saveDataRow', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMainTableAlias()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMainTableAlias');
        if (!$pluginInfo) {
            return parent::getMainTableAlias();
        } else {
            return $this->___callPlugins('getMainTableAlias', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insertGallery($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertGallery');
        if (!$pluginInfo) {
            return parent::insertGallery($data);
        } else {
            return $this->___callPlugins('insertGallery', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteGallery($valueId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteGallery');
        if (!$pluginInfo) {
            return parent::deleteGallery($valueId);
        } else {
            return $this->___callPlugins('deleteGallery', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insertGalleryValueInStore($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertGalleryValueInStore');
        if (!$pluginInfo) {
            return parent::insertGalleryValueInStore($data);
        } else {
            return $this->___callPlugins('insertGalleryValueInStore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteGalleryValueInStore($valueId, $entityId, $storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteGalleryValueInStore');
        if (!$pluginInfo) {
            return parent::deleteGalleryValueInStore($valueId, $entityId, $storeId);
        } else {
            return $this->___callPlugins('deleteGalleryValueInStore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function duplicate($attributeId, $newFiles, $originalProductId, $newProductId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'duplicate');
        if (!$pluginInfo) {
            return parent::duplicate($attributeId, $newFiles, $originalProductId, $newProductId);
        } else {
            return $this->___callPlugins('duplicate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadMediaGalleryEntitiesbyId($valueIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadMediaGalleryEntitiesbyId');
        if (!$pluginInfo) {
            return parent::loadMediaGalleryEntitiesbyId($valueIds);
        } else {
            return $this->___callPlugins('loadMediaGalleryEntitiesbyId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadMediaGalleryEntities($attributeId, $productId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadMediaGalleryEntities');
        if (!$pluginInfo) {
            return parent::loadMediaGalleryEntities($attributeId, $productId);
        } else {
            return $this->___callPlugins('loadMediaGalleryEntities', func_get_args(), $pluginInfo);
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
    public function getMainTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMainTable');
        if (!$pluginInfo) {
            return parent::getMainTable();
        } else {
            return $this->___callPlugins('getMainTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($tableName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        if (!$pluginInfo) {
            return parent::getTable($tableName);
        } else {
            return $this->___callPlugins('getTable', func_get_args(), $pluginInfo);
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
    public function load(\Magento\Framework\Model\AbstractModel $object, $value, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        if (!$pluginInfo) {
            return parent::load($object, $value, $field);
        } else {
            return $this->___callPlugins('load', func_get_args(), $pluginInfo);
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
    public function delete(\Magento\Framework\Model\AbstractModel $object)
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
    public function addUniqueField($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUniqueField');
        if (!$pluginInfo) {
            return parent::addUniqueField($field);
        } else {
            return $this->___callPlugins('addUniqueField', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetUniqueField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetUniqueField');
        if (!$pluginInfo) {
            return parent::resetUniqueField();
        } else {
            return $this->___callPlugins('resetUniqueField', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unserializeFields(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unserializeFields');
        if (!$pluginInfo) {
            return parent::unserializeFields($object);
        } else {
            return $this->___callPlugins('unserializeFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUniqueFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUniqueFields');
        if (!$pluginInfo) {
            return parent::getUniqueFields();
        } else {
            return $this->___callPlugins('getUniqueFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanged($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanged');
        if (!$pluginInfo) {
            return parent::hasDataChanged($object);
        } else {
            return $this->___callPlugins('hasDataChanged', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        if (!$pluginInfo) {
            return parent::afterLoad($object);
        } else {
            return $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChecksum($table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChecksum');
        if (!$pluginInfo) {
            return parent::getChecksum($table);
        } else {
            return $this->___callPlugins('getChecksum', func_get_args(), $pluginInfo);
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
