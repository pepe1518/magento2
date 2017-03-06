<?php
namespace Magento\SalesRule\Model\ResourceModel\Rule;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\ResourceModel\Rule
 */
class Interceptor extends \Magento\SalesRule\Model\ResourceModel\Rule implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Framework\Stdlib\StringUtils $string, \Magento\SalesRule\Model\ResourceModel\Coupon $resourceCoupon, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $string, $resourceCoupon, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function loadCustomerGroupIds(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadCustomerGroupIds');
        if (!$pluginInfo) {
            return parent::loadCustomerGroupIds($object);
        } else {
            return $this->___callPlugins('loadCustomerGroupIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadWebsiteIds(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadWebsiteIds');
        if (!$pluginInfo) {
            return parent::loadWebsiteIds($object);
        } else {
            return $this->___callPlugins('loadWebsiteIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function _beforeSave(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_beforeSave');
        if (!$pluginInfo) {
            return parent::_beforeSave($object);
        } else {
            return $this->___callPlugins('_beforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerUses($rule, $customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerUses');
        if (!$pluginInfo) {
            return parent::getCustomerUses($rule, $customerId);
        } else {
            return $this->___callPlugins('getCustomerUses', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveStoreLabels($ruleId, $labels)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveStoreLabels');
        if (!$pluginInfo) {
            return parent::saveStoreLabels($ruleId, $labels);
        } else {
            return $this->___callPlugins('saveStoreLabels', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreLabels($ruleId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreLabels');
        if (!$pluginInfo) {
            return parent::getStoreLabels($ruleId);
        } else {
            return $this->___callPlugins('getStoreLabels', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreLabel($ruleId, $storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreLabel');
        if (!$pluginInfo) {
            return parent::getStoreLabel($ruleId, $storeId);
        } else {
            return $this->___callPlugins('getStoreLabel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getActiveAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActiveAttributes');
        if (!$pluginInfo) {
            return parent::getActiveAttributes();
        } else {
            return $this->___callPlugins('getActiveAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setActualProductAttributes($rule, $attributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setActualProductAttributes');
        if (!$pluginInfo) {
            return parent::setActualProductAttributes($rule, $attributes);
        } else {
            return $this->___callPlugins('setActualProductAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductAttributes($serializedString)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductAttributes');
        if (!$pluginInfo) {
            return parent::getProductAttributes($serializedString);
        } else {
            return $this->___callPlugins('getProductAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindRuleToEntity($ruleIds, $entityIds, $entityType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'bindRuleToEntity');
        if (!$pluginInfo) {
            return parent::bindRuleToEntity($ruleIds, $entityIds, $entityType);
        } else {
            return $this->___callPlugins('bindRuleToEntity', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unbindRuleFromEntity($ruleIds, $entityIds, $entityType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unbindRuleFromEntity');
        if (!$pluginInfo) {
            return parent::unbindRuleFromEntity($ruleIds, $entityIds, $entityType);
        } else {
            return $this->___callPlugins('unbindRuleFromEntity', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociatedEntityIds($ruleId, $entityType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAssociatedEntityIds');
        if (!$pluginInfo) {
            return parent::getAssociatedEntityIds($ruleId, $entityType);
        } else {
            return $this->___callPlugins('getAssociatedEntityIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteIds($ruleId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteIds');
        if (!$pluginInfo) {
            return parent::getWebsiteIds($ruleId);
        } else {
            return $this->___callPlugins('getWebsiteIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupIds($ruleId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupIds');
        if (!$pluginInfo) {
            return parent::getCustomerGroupIds($ruleId);
        } else {
            return $this->___callPlugins('getCustomerGroupIds', func_get_args(), $pluginInfo);
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
