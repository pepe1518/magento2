<?php
namespace Magento\Catalog\Model\ResourceModel\Eav\Attribute;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Eav\Attribute
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Eav\Attribute implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\Eav\Model\Entity\TypeFactory $eavTypeFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Eav\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Magento\Eav\Api\Data\AttributeOptionInterfaceFactory $optionDataFactory, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Catalog\Model\Product\ReservedAttributeList $reservedAttributeList, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Framework\Stdlib\DateTime\DateTimeFormatterInterface $dateTimeFormatter, \Magento\Catalog\Model\Indexer\Product\Flat\Processor $productFlatIndexerProcessor, \Magento\Catalog\Model\Indexer\Product\Eav\Processor $indexerEavProcessor, \Magento\Catalog\Helper\Product\Flat\Indexer $productFlatIndexerHelper, \Magento\Catalog\Model\Attribute\LockValidatorInterface $lockValidator, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $eavConfig, $eavTypeFactory, $storeManager, $resourceHelper, $universalFactory, $optionDataFactory, $dataObjectProcessor, $dataObjectHelper, $localeDate, $reservedAttributeList, $localeResolver, $dateTimeFormatter, $productFlatIndexerProcessor, $indexerEavProcessor, $productFlatIndexerHelper, $lockValidator, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        if (!$pluginInfo) {
            return parent::beforeSave();
        } else {
            return $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        if (!$pluginInfo) {
            return parent::beforeDelete();
        } else {
            return $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterDeleteCommit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDeleteCommit');
        if (!$pluginInfo) {
            return parent::afterDeleteCommit();
        } else {
            return $this->___callPlugins('afterDeleteCommit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsGlobal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsGlobal');
        if (!$pluginInfo) {
            return parent::getIsGlobal();
        } else {
            return $this->___callPlugins('getIsGlobal', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isScopeGlobal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopeGlobal');
        if (!$pluginInfo) {
            return parent::isScopeGlobal();
        } else {
            return $this->___callPlugins('isScopeGlobal', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isScopeWebsite()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopeWebsite');
        if (!$pluginInfo) {
            return parent::isScopeWebsite();
        } else {
            return $this->___callPlugins('isScopeWebsite', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isScopeStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopeStore');
        if (!$pluginInfo) {
            return parent::isScopeStore();
        } else {
            return $this->___callPlugins('isScopeStore', func_get_args(), $pluginInfo);
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
    public function getApplyTo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApplyTo');
        if (!$pluginInfo) {
            return parent::getApplyTo();
        } else {
            return $this->___callPlugins('getApplyTo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSourceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSourceModel');
        if (!$pluginInfo) {
            return parent::getSourceModel();
        } else {
            return $this->___callPlugins('getSourceModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowedForRuleCondition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowedForRuleCondition');
        if (!$pluginInfo) {
            return parent::isAllowedForRuleCondition();
        } else {
            return $this->___callPlugins('isAllowedForRuleCondition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function _getDefaultSourceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_getDefaultSourceModel');
        if (!$pluginInfo) {
            return parent::_getDefaultSourceModel();
        } else {
            return $this->___callPlugins('_getDefaultSourceModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isIndexable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isIndexable');
        if (!$pluginInfo) {
            return parent::isIndexable();
        } else {
            return $this->___callPlugins('isIndexable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIndexType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIndexType');
        if (!$pluginInfo) {
            return parent::getIndexType();
        } else {
            return $this->___callPlugins('getIndexType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsWysiwygEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsWysiwygEnabled');
        if (!$pluginInfo) {
            return parent::getIsWysiwygEnabled();
        } else {
            return $this->___callPlugins('getIsWysiwygEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsHtmlAllowedOnFront()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsHtmlAllowedOnFront');
        if (!$pluginInfo) {
            return parent::getIsHtmlAllowedOnFront();
        } else {
            return $this->___callPlugins('getIsHtmlAllowedOnFront', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedForSortBy()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedForSortBy');
        if (!$pluginInfo) {
            return parent::getUsedForSortBy();
        } else {
            return $this->___callPlugins('getUsedForSortBy', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsFilterable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsFilterable');
        if (!$pluginInfo) {
            return parent::getIsFilterable();
        } else {
            return $this->___callPlugins('getIsFilterable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsFilterableInSearch()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsFilterableInSearch');
        if (!$pluginInfo) {
            return parent::getIsFilterableInSearch();
        } else {
            return $this->___callPlugins('getIsFilterableInSearch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsUsedInGrid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsUsedInGrid');
        if (!$pluginInfo) {
            return parent::getIsUsedInGrid();
        } else {
            return $this->___callPlugins('getIsUsedInGrid', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsVisibleInGrid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVisibleInGrid');
        if (!$pluginInfo) {
            return parent::getIsVisibleInGrid();
        } else {
            return $this->___callPlugins('getIsVisibleInGrid', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsFilterableInGrid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsFilterableInGrid');
        if (!$pluginInfo) {
            return parent::getIsFilterableInGrid();
        } else {
            return $this->___callPlugins('getIsFilterableInGrid', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPosition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPosition');
        if (!$pluginInfo) {
            return parent::getPosition();
        } else {
            return $this->___callPlugins('getPosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsSearchable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsSearchable');
        if (!$pluginInfo) {
            return parent::getIsSearchable();
        } else {
            return $this->___callPlugins('getIsSearchable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsVisibleInAdvancedSearch()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVisibleInAdvancedSearch');
        if (!$pluginInfo) {
            return parent::getIsVisibleInAdvancedSearch();
        } else {
            return $this->___callPlugins('getIsVisibleInAdvancedSearch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsComparable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsComparable');
        if (!$pluginInfo) {
            return parent::getIsComparable();
        } else {
            return $this->___callPlugins('getIsComparable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsUsedForPromoRules()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsUsedForPromoRules');
        if (!$pluginInfo) {
            return parent::getIsUsedForPromoRules();
        } else {
            return $this->___callPlugins('getIsUsedForPromoRules', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsVisibleOnFront()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVisibleOnFront');
        if (!$pluginInfo) {
            return parent::getIsVisibleOnFront();
        } else {
            return $this->___callPlugins('getIsVisibleOnFront', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedInProductListing()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedInProductListing');
        if (!$pluginInfo) {
            return parent::getUsedInProductListing();
        } else {
            return $this->___callPlugins('getUsedInProductListing', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsVisible()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVisible');
        if (!$pluginInfo) {
            return parent::getIsVisible();
        } else {
            return $this->___callPlugins('getIsVisible', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getScope()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getScope');
        if (!$pluginInfo) {
            return parent::getScope();
        } else {
            return $this->___callPlugins('getScope', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsWysiwygEnabled($isWysiwygEnabled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsWysiwygEnabled');
        if (!$pluginInfo) {
            return parent::setIsWysiwygEnabled($isWysiwygEnabled);
        } else {
            return $this->___callPlugins('setIsWysiwygEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsHtmlAllowedOnFront($isHtmlAllowedOnFront)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsHtmlAllowedOnFront');
        if (!$pluginInfo) {
            return parent::setIsHtmlAllowedOnFront($isHtmlAllowedOnFront);
        } else {
            return $this->___callPlugins('setIsHtmlAllowedOnFront', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUsedForSortBy($usedForSortBy)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUsedForSortBy');
        if (!$pluginInfo) {
            return parent::setUsedForSortBy($usedForSortBy);
        } else {
            return $this->___callPlugins('setUsedForSortBy', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsFilterable($isFilterable)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsFilterable');
        if (!$pluginInfo) {
            return parent::setIsFilterable($isFilterable);
        } else {
            return $this->___callPlugins('setIsFilterable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsFilterableInSearch($isFilterableInSearch)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsFilterableInSearch');
        if (!$pluginInfo) {
            return parent::setIsFilterableInSearch($isFilterableInSearch);
        } else {
            return $this->___callPlugins('setIsFilterableInSearch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPosition($position)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPosition');
        if (!$pluginInfo) {
            return parent::setPosition($position);
        } else {
            return $this->___callPlugins('setPosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setApplyTo($applyTo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setApplyTo');
        if (!$pluginInfo) {
            return parent::setApplyTo($applyTo);
        } else {
            return $this->___callPlugins('setApplyTo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsSearchable($isSearchable)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsSearchable');
        if (!$pluginInfo) {
            return parent::setIsSearchable($isSearchable);
        } else {
            return $this->___callPlugins('setIsSearchable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsVisibleInAdvancedSearch($isVisibleInAdvancedSearch)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsVisibleInAdvancedSearch');
        if (!$pluginInfo) {
            return parent::setIsVisibleInAdvancedSearch($isVisibleInAdvancedSearch);
        } else {
            return $this->___callPlugins('setIsVisibleInAdvancedSearch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsComparable($isComparable)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsComparable');
        if (!$pluginInfo) {
            return parent::setIsComparable($isComparable);
        } else {
            return $this->___callPlugins('setIsComparable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsUsedForPromoRules($isUsedForPromoRules)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsUsedForPromoRules');
        if (!$pluginInfo) {
            return parent::setIsUsedForPromoRules($isUsedForPromoRules);
        } else {
            return $this->___callPlugins('setIsUsedForPromoRules', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsVisibleOnFront($isVisibleOnFront)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsVisibleOnFront');
        if (!$pluginInfo) {
            return parent::setIsVisibleOnFront($isVisibleOnFront);
        } else {
            return $this->___callPlugins('setIsVisibleOnFront', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUsedInProductListing($usedInProductListing)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUsedInProductListing');
        if (!$pluginInfo) {
            return parent::setUsedInProductListing($usedInProductListing);
        } else {
            return $this->___callPlugins('setUsedInProductListing', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsVisible($isVisible)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsVisible');
        if (!$pluginInfo) {
            return parent::setIsVisible($isVisible);
        } else {
            return $this->___callPlugins('setIsVisible', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setScope($scope)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setScope');
        if (!$pluginInfo) {
            return parent::setScope($scope);
        } else {
            return $this->___callPlugins('setScope', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        if (!$pluginInfo) {
            return parent::afterDelete();
        } else {
            return $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteEntity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteEntity');
        if (!$pluginInfo) {
            return parent::deleteEntity();
        } else {
            return $this->___callPlugins('deleteEntity', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadEntityAttributeIdBySet()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadEntityAttributeIdBySet');
        if (!$pluginInfo) {
            return parent::loadEntityAttributeIdBySet();
        } else {
            return $this->___callPlugins('loadEntityAttributeIdBySet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBackendTypeByInput($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackendTypeByInput');
        if (!$pluginInfo) {
            return parent::getBackendTypeByInput($type);
        } else {
            return $this->___callPlugins('getBackendTypeByInput', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultValueByInput($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultValueByInput');
        if (!$pluginInfo) {
            return parent::getDefaultValueByInput($type);
        } else {
            return $this->___callPlugins('getDefaultValueByInput', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeCodesByFrontendType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeCodesByFrontendType');
        if (!$pluginInfo) {
            return parent::getAttributeCodesByFrontendType($type);
        } else {
            return $this->___callPlugins('getAttributeCodesByFrontendType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreLabels()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreLabels');
        if (!$pluginInfo) {
            return parent::getStoreLabels();
        } else {
            return $this->___callPlugins('getStoreLabels', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreLabel($storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreLabel');
        if (!$pluginInfo) {
            return parent::getStoreLabel($storeId);
        } else {
            return $this->___callPlugins('getStoreLabel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSortWeight($setId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSortWeight');
        if (!$pluginInfo) {
            return parent::getSortWeight($setId);
        } else {
            return $this->___callPlugins('getSortWeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdentities');
        if (!$pluginInfo) {
            return parent::getIdentities();
        } else {
            return $this->___callPlugins('getIdentities', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadByCode($entityType, $code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByCode');
        if (!$pluginInfo) {
            return parent::loadByCode($entityType, $code);
        } else {
            return $this->___callPlugins('loadByCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        if (!$pluginInfo) {
            return parent::getName();
        } else {
            return $this->___callPlugins('getName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeId($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeId');
        if (!$pluginInfo) {
            return parent::setAttributeId($data);
        } else {
            return $this->___callPlugins('setAttributeId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeId');
        if (!$pluginInfo) {
            return parent::getAttributeId();
        } else {
            return $this->___callPlugins('getAttributeId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeCode($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeCode');
        if (!$pluginInfo) {
            return parent::setAttributeCode($data);
        } else {
            return $this->___callPlugins('setAttributeCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeCode');
        if (!$pluginInfo) {
            return parent::getAttributeCode();
        } else {
            return $this->___callPlugins('getAttributeCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeModel($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeModel');
        if (!$pluginInfo) {
            return parent::setAttributeModel($data);
        } else {
            return $this->___callPlugins('setAttributeModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeModel');
        if (!$pluginInfo) {
            return parent::getAttributeModel();
        } else {
            return $this->___callPlugins('getAttributeModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBackendType($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBackendType');
        if (!$pluginInfo) {
            return parent::setBackendType($data);
        } else {
            return $this->___callPlugins('setBackendType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBackendType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackendType');
        if (!$pluginInfo) {
            return parent::getBackendType();
        } else {
            return $this->___callPlugins('getBackendType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBackendModel($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBackendModel');
        if (!$pluginInfo) {
            return parent::setBackendModel($data);
        } else {
            return $this->___callPlugins('setBackendModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBackendModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackendModel');
        if (!$pluginInfo) {
            return parent::getBackendModel();
        } else {
            return $this->___callPlugins('getBackendModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBackendTable($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBackendTable');
        if (!$pluginInfo) {
            return parent::setBackendTable($data);
        } else {
            return $this->___callPlugins('setBackendTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultValue');
        if (!$pluginInfo) {
            return parent::getDefaultValue();
        } else {
            return $this->___callPlugins('getDefaultValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultValue($defaultValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultValue');
        if (!$pluginInfo) {
            return parent::setDefaultValue($defaultValue);
        } else {
            return $this->___callPlugins('setDefaultValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeSetId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeSetId');
        if (!$pluginInfo) {
            return parent::getAttributeSetId();
        } else {
            return $this->___callPlugins('getAttributeSetId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeSetId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeSetId');
        if (!$pluginInfo) {
            return parent::setAttributeSetId($id);
        } else {
            return $this->___callPlugins('setAttributeSetId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTypeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityTypeId');
        if (!$pluginInfo) {
            return parent::getEntityTypeId();
        } else {
            return $this->___callPlugins('getEntityTypeId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityTypeId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityTypeId');
        if (!$pluginInfo) {
            return parent::setEntityTypeId($id);
        } else {
            return $this->___callPlugins('setEntityTypeId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityType');
        if (!$pluginInfo) {
            return parent::setEntityType($type);
        } else {
            return $this->___callPlugins('setEntityType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAlias($entity = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAlias');
        if (!$pluginInfo) {
            return parent::getAlias($entity);
        } else {
            return $this->___callPlugins('getAlias', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        if (!$pluginInfo) {
            return parent::setName($name);
        } else {
            return $this->___callPlugins('setName', func_get_args(), $pluginInfo);
        }
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
    public function setEntity($entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntity');
        if (!$pluginInfo) {
            return parent::setEntity($entity);
        } else {
            return $this->___callPlugins('setEntity', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntity');
        if (!$pluginInfo) {
            return parent::getEntity();
        } else {
            return $this->___callPlugins('getEntity', func_get_args(), $pluginInfo);
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
    public function getBackend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackend');
        if (!$pluginInfo) {
            return parent::getBackend();
        } else {
            return $this->___callPlugins('getBackend', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontend');
        if (!$pluginInfo) {
            return parent::getFrontend();
        } else {
            return $this->___callPlugins('getFrontend', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSource');
        if (!$pluginInfo) {
            return parent::getSource();
        } else {
            return $this->___callPlugins('getSource', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function usesSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'usesSource');
        if (!$pluginInfo) {
            return parent::usesSource();
        } else {
            return $this->___callPlugins('usesSource', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isValueEmpty($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValueEmpty');
        if (!$pluginInfo) {
            return parent::isValueEmpty($value);
        } else {
            return $this->___callPlugins('isValueEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInSet($setId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInSet');
        if (!$pluginInfo) {
            return parent::isInSet($setId);
        } else {
            return $this->___callPlugins('isInSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInGroup($setId, $groupId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInGroup');
        if (!$pluginInfo) {
            return parent::isInGroup($setId, $groupId);
        } else {
            return $this->___callPlugins('isInGroup', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdByCode($entityType, $code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdByCode');
        if (!$pluginInfo) {
            return parent::getIdByCode($entityType, $code);
        } else {
            return $this->___callPlugins('getIdByCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isStatic()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isStatic');
        if (!$pluginInfo) {
            return parent::isStatic();
        } else {
            return $this->___callPlugins('isStatic', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBackendTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackendTable');
        if (!$pluginInfo) {
            return parent::getBackendTable();
        } else {
            return $this->___callPlugins('getBackendTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatColumns()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatColumns');
        if (!$pluginInfo) {
            return parent::getFlatColumns();
        } else {
            return $this->___callPlugins('getFlatColumns', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function _getFlatColumnsDdlDefinition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_getFlatColumnsDdlDefinition');
        if (!$pluginInfo) {
            return parent::_getFlatColumnsDdlDefinition();
        } else {
            return $this->___callPlugins('_getFlatColumnsDdlDefinition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatIndexes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatIndexes');
        if (!$pluginInfo) {
            return parent::getFlatIndexes();
        } else {
            return $this->___callPlugins('getFlatIndexes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatUpdateSelect($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatUpdateSelect');
        if (!$pluginInfo) {
            return parent::getFlatUpdateSelect($store);
        } else {
            return $this->___callPlugins('getFlatUpdateSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsUnique()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsUnique');
        if (!$pluginInfo) {
            return parent::getIsUnique();
        } else {
            return $this->___callPlugins('getIsUnique', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsUnique($isUnique)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsUnique');
        if (!$pluginInfo) {
            return parent::setIsUnique($isUnique);
        } else {
            return $this->___callPlugins('setIsUnique', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendClass');
        if (!$pluginInfo) {
            return parent::getFrontendClass();
        } else {
            return $this->___callPlugins('getFrontendClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFrontendClass($frontendClass)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFrontendClass');
        if (!$pluginInfo) {
            return parent::setFrontendClass($frontendClass);
        } else {
            return $this->___callPlugins('setFrontendClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendInput()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendInput');
        if (!$pluginInfo) {
            return parent::getFrontendInput();
        } else {
            return $this->___callPlugins('getFrontendInput', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFrontendInput($frontendInput)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFrontendInput');
        if (!$pluginInfo) {
            return parent::setFrontendInput($frontendInput);
        } else {
            return $this->___callPlugins('setFrontendInput', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsRequired()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsRequired');
        if (!$pluginInfo) {
            return parent::getIsRequired();
        } else {
            return $this->___callPlugins('getIsRequired', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsRequired($isRequired)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsRequired');
        if (!$pluginInfo) {
            return parent::setIsRequired($isRequired);
        } else {
            return $this->___callPlugins('setIsRequired', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        if (!$pluginInfo) {
            return parent::getOptions();
        } else {
            return $this->___callPlugins('getOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions(array $options = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOptions');
        if (!$pluginInfo) {
            return parent::setOptions($options);
        } else {
            return $this->___callPlugins('setOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsUserDefined()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsUserDefined');
        if (!$pluginInfo) {
            return parent::getIsUserDefined();
        } else {
            return $this->___callPlugins('getIsUserDefined', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsUserDefined($isUserDefined)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsUserDefined');
        if (!$pluginInfo) {
            return parent::setIsUserDefined($isUserDefined);
        } else {
            return $this->___callPlugins('setIsUserDefined', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultFrontendLabel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultFrontendLabel');
        if (!$pluginInfo) {
            return parent::getDefaultFrontendLabel();
        } else {
            return $this->___callPlugins('getDefaultFrontendLabel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultFrontendLabel($defaultFrontendLabel)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultFrontendLabel');
        if (!$pluginInfo) {
            return parent::setDefaultFrontendLabel($defaultFrontendLabel);
        } else {
            return $this->___callPlugins('setDefaultFrontendLabel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendLabels()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendLabels');
        if (!$pluginInfo) {
            return parent::getFrontendLabels();
        } else {
            return $this->___callPlugins('getFrontendLabels', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFrontendLabels(array $frontendLabels = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFrontendLabels');
        if (!$pluginInfo) {
            return parent::setFrontendLabels($frontendLabels);
        } else {
            return $this->___callPlugins('setFrontendLabels', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNote');
        if (!$pluginInfo) {
            return parent::getNote();
        } else {
            return $this->___callPlugins('getNote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setNote($note)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNote');
        if (!$pluginInfo) {
            return parent::setNote($note);
        } else {
            return $this->___callPlugins('setNote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSourceModel($sourceModel)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSourceModel');
        if (!$pluginInfo) {
            return parent::setSourceModel($sourceModel);
        } else {
            return $this->___callPlugins('setSourceModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRules()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidationRules');
        if (!$pluginInfo) {
            return parent::getValidationRules();
        } else {
            return $this->___callPlugins('getValidationRules', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setValidationRules(array $validationRules = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setValidationRules');
        if (!$pluginInfo) {
            return parent::setValidationRules($validationRules);
        } else {
            return $this->___callPlugins('setValidationRules', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExtensionAttributes');
        if (!$pluginInfo) {
            return parent::getExtensionAttributes();
        } else {
            return $this->___callPlugins('getExtensionAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setExtensionAttributes(\Magento\Eav\Api\Data\AttributeExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        if (!$pluginInfo) {
            return parent::setExtensionAttributes($extensionAttributes);
        } else {
            return $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributes');
        if (!$pluginInfo) {
            return parent::getCustomAttributes();
        } else {
            return $this->___callPlugins('getCustomAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttribute');
        if (!$pluginInfo) {
            return parent::getCustomAttribute($attributeCode);
        } else {
            return $this->___callPlugins('getCustomAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttributes(array $attributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttributes');
        if (!$pluginInfo) {
            return parent::setCustomAttributes($attributes);
        } else {
            return $this->___callPlugins('setCustomAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttribute($attributeCode, $attributeValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttribute');
        if (!$pluginInfo) {
            return parent::setCustomAttribute($attributeCode, $attributeValue);
        } else {
            return $this->___callPlugins('setCustomAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($key, $value);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        if (!$pluginInfo) {
            return parent::unsetData($key);
        } else {
            return $this->___callPlugins('unsetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $index);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        if (!$pluginInfo) {
            return parent::setId($value);
        } else {
            return $this->___callPlugins('setId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIdFieldName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIdFieldName');
        if (!$pluginInfo) {
            return parent::setIdFieldName($name);
        } else {
            return $this->___callPlugins('setIdFieldName', func_get_args(), $pluginInfo);
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
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        if (!$pluginInfo) {
            return parent::getId();
        } else {
            return $this->___callPlugins('getId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDeleted($isDeleted = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDeleted');
        if (!$pluginInfo) {
            return parent::isDeleted($isDeleted);
        } else {
            return $this->___callPlugins('isDeleted', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanges');
        if (!$pluginInfo) {
            return parent::hasDataChanges();
        } else {
            return $this->___callPlugins('hasDataChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataChanges($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataChanges');
        if (!$pluginInfo) {
            return parent::setDataChanges($value);
        } else {
            return $this->___callPlugins('setDataChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrigData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrigData');
        if (!$pluginInfo) {
            return parent::getOrigData($key);
        } else {
            return $this->___callPlugins('getOrigData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setOrigData($key = null, $data = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrigData');
        if (!$pluginInfo) {
            return parent::setOrigData($key, $data);
        } else {
            return $this->___callPlugins('setOrigData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dataHasChangedFor($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dataHasChangedFor');
        if (!$pluginInfo) {
            return parent::dataHasChangedFor($field);
        } else {
            return $this->___callPlugins('dataHasChangedFor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceName');
        if (!$pluginInfo) {
            return parent::getResourceName();
        } else {
            return $this->___callPlugins('getResourceName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceCollection');
        if (!$pluginInfo) {
            return parent::getResourceCollection();
        } else {
            return $this->___callPlugins('getResourceCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        if (!$pluginInfo) {
            return parent::getCollection();
        } else {
            return $this->___callPlugins('getCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function load($modelId, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        if (!$pluginInfo) {
            return parent::load($modelId, $field);
        } else {
            return $this->___callPlugins('load', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        if (!$pluginInfo) {
            return parent::afterLoad();
        } else {
            return $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSaveAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSaveAllowed');
        if (!$pluginInfo) {
            return parent::isSaveAllowed();
        } else {
            return $this->___callPlugins('isSaveAllowed', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHasDataChanges($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHasDataChanges');
        if (!$pluginInfo) {
            return parent::setHasDataChanges($flag);
        } else {
            return $this->___callPlugins('setHasDataChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save();
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterCommitCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterCommitCallback');
        if (!$pluginInfo) {
            return parent::afterCommitCallback();
        } else {
            return $this->___callPlugins('afterCommitCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isObjectNew($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isObjectNew');
        if (!$pluginInfo) {
            return parent::isObjectNew($flag);
        } else {
            return $this->___callPlugins('isObjectNew', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateBeforeSave');
        if (!$pluginInfo) {
            return parent::validateBeforeSave();
        } else {
            return $this->___callPlugins('validateBeforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheTags');
        if (!$pluginInfo) {
            return parent::getCacheTags();
        } else {
            return $this->___callPlugins('getCacheTags', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function cleanModelCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanModelCache');
        if (!$pluginInfo) {
            return parent::cleanModelCache();
        } else {
            return $this->___callPlugins('cleanModelCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete();
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResource');
        if (!$pluginInfo) {
            return parent::getResource();
        } else {
            return $this->___callPlugins('getResource', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityId');
        if (!$pluginInfo) {
            return parent::getEntityId();
        } else {
            return $this->___callPlugins('getEntityId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityId($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityId');
        if (!$pluginInfo) {
            return parent::setEntityId($entityId);
        } else {
            return $this->___callPlugins('setEntityId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clearInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearInstance');
        if (!$pluginInfo) {
            return parent::clearInstance();
        } else {
            return $this->___callPlugins('clearInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoredData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoredData');
        if (!$pluginInfo) {
            return parent::getStoredData();
        } else {
            return $this->___callPlugins('getStoredData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEventPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventPrefix');
        if (!$pluginInfo) {
            return parent::getEventPrefix();
        } else {
            return $this->___callPlugins('getEventPrefix', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        if (!$pluginInfo) {
            return parent::addData($arr);
        } else {
            return $this->___callPlugins('addData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        if (!$pluginInfo) {
            return parent::getDataByPath($path);
        } else {
            return $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        if (!$pluginInfo) {
            return parent::getDataByKey($key);
        } else {
            return $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        if (!$pluginInfo) {
            return parent::setDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        if (!$pluginInfo) {
            return parent::getDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        if (!$pluginInfo) {
            return parent::hasData($key);
        } else {
            return $this->___callPlugins('hasData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($keys);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        if (!$pluginInfo) {
            return parent::convertToArray($keys);
        } else {
            return $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = array(), $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = array(), $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        if (!$pluginInfo) {
            return parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        if (!$pluginInfo) {
            return parent::toJson($keys);
        } else {
            return $this->___callPlugins('toJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        if (!$pluginInfo) {
            return parent::convertToJson($keys);
        } else {
            return $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString($format);
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        if (!$pluginInfo) {
            return parent::isEmpty();
        } else {
            return $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = array(), $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        if (!$pluginInfo) {
            return parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
        } else {
            return $this->___callPlugins('serialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($data, $objects);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        if (!$pluginInfo) {
            return parent::offsetSet($offset, $value);
        } else {
            return $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        if (!$pluginInfo) {
            return parent::offsetExists($offset);
        } else {
            return $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        if (!$pluginInfo) {
            return parent::offsetUnset($offset);
        } else {
            return $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        if (!$pluginInfo) {
            return parent::offsetGet($offset);
        } else {
            return $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo);
        }
    }
}
