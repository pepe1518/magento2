<?php
namespace Magento\Catalog\Model\Category;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Category
 */
class Interceptor extends \Magento\Catalog\Model\Category implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Api\CategoryAttributeRepositoryInterface $metadataService, \Magento\Catalog\Model\ResourceModel\Category\Tree $categoryTreeResource, \Magento\Catalog\Model\ResourceModel\Category\TreeFactory $categoryTreeFactory, \Magento\Store\Model\ResourceModel\Store\CollectionFactory $storeCollectionFactory, \Magento\Framework\UrlInterface $url, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\Config $catalogConfig, \Magento\Framework\Filter\FilterManager $filter, \Magento\Catalog\Model\Indexer\Category\Flat\State $flatState, \Magento\CatalogUrlRewrite\Model\CategoryUrlPathGenerator $categoryUrlPathGenerator, \Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $storeManager, $metadataService, $categoryTreeResource, $categoryTreeFactory, $storeCollectionFactory, $url, $productCollectionFactory, $catalogConfig, $filter, $flatState, $categoryUrlPathGenerator, $urlFinder, $indexerRegistry, $categoryRepository, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getUseFlatResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseFlatResource');
        if (!$pluginInfo) {
            return parent::getUseFlatResource();
        } else {
            return $this->___callPlugins('getUseFlatResource', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrlInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrlInstance');
        if (!$pluginInfo) {
            return parent::getUrlInstance();
        } else {
            return $this->___callPlugins('getUrlInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTreeModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTreeModel');
        if (!$pluginInfo) {
            return parent::getTreeModel();
        } else {
            return $this->___callPlugins('getTreeModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTreeModelInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTreeModelInstance');
        if (!$pluginInfo) {
            return parent::getTreeModelInstance();
        } else {
            return $this->___callPlugins('getTreeModelInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function move($parentId, $afterCategoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'move');
        if (!$pluginInfo) {
            return parent::move($parentId, $afterCategoryId);
        } else {
            return $this->___callPlugins('move', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultAttributeSetId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultAttributeSetId');
        if (!$pluginInfo) {
            return parent::getDefaultAttributeSetId();
        } else {
            return $this->___callPlugins('getDefaultAttributeSetId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductCollection');
        if (!$pluginInfo) {
            return parent::getProductCollection();
        } else {
            return $this->___callPlugins('getProductCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($noDesignAttributes = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributes');
        if (!$pluginInfo) {
            return parent::getAttributes($noDesignAttributes);
        } else {
            return $this->___callPlugins('getAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsPosition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsPosition');
        if (!$pluginInfo) {
            return parent::getProductsPosition();
        } else {
            return $this->___callPlugins('getProductsPosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreIds');
        if (!$pluginInfo) {
            return parent::getStoreIds();
        } else {
            return $this->___callPlugins('getStoreIds', func_get_args(), $pluginInfo);
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
    public function getUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        if (!$pluginInfo) {
            return parent::getUrl();
        } else {
            return $this->___callPlugins('getUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryIdUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryIdUrl');
        if (!$pluginInfo) {
            return parent::getCategoryIdUrl();
        } else {
            return $this->___callPlugins('getCategoryIdUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatUrlKey($str)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatUrlKey');
        if (!$pluginInfo) {
            return parent::formatUrlKey($str);
        } else {
            return $this->___callPlugins('formatUrlKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImageUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageUrl');
        if (!$pluginInfo) {
            return parent::getImageUrl();
        } else {
            return $this->___callPlugins('getImageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentCategory()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentCategory');
        if (!$pluginInfo) {
            return parent::getParentCategory();
        } else {
            return $this->___callPlugins('getParentCategory', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentId');
        if (!$pluginInfo) {
            return parent::getParentId();
        } else {
            return $this->___callPlugins('getParentId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentIds');
        if (!$pluginInfo) {
            return parent::getParentIds();
        } else {
            return $this->___callPlugins('getParentIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomDesignDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomDesignDate');
        if (!$pluginInfo) {
            return parent::getCustomDesignDate();
        } else {
            return $this->___callPlugins('getCustomDesignDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDesignAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDesignAttributes');
        if (!$pluginInfo) {
            return parent::getDesignAttributes();
        } else {
            return $this->___callPlugins('getDesignAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllChildren($asArray = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllChildren');
        if (!$pluginInfo) {
            return parent::getAllChildren($asArray);
        } else {
            return $this->___callPlugins('getAllChildren', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildren');
        if (!$pluginInfo) {
            return parent::getChildren();
        } else {
            return $this->___callPlugins('getChildren', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPathInStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPathInStore');
        if (!$pluginInfo) {
            return parent::getPathInStore();
        } else {
            return $this->___callPlugins('getPathInStore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkId');
        if (!$pluginInfo) {
            return parent::checkId($id);
        } else {
            return $this->___callPlugins('checkId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPathIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPathIds');
        if (!$pluginInfo) {
            return parent::getPathIds();
        } else {
            return $this->___callPlugins('getPathIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLevel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLevel');
        if (!$pluginInfo) {
            return parent::getLevel();
        } else {
            return $this->___callPlugins('getLevel', func_get_args(), $pluginInfo);
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
    public function hasChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasChildren');
        if (!$pluginInfo) {
            return parent::hasChildren();
        } else {
            return $this->___callPlugins('hasChildren', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequestPath');
        if (!$pluginInfo) {
            return parent::getRequestPath();
        } else {
            return $this->___callPlugins('getRequestPath', func_get_args(), $pluginInfo);
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
    public function getAnchorsAbove()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAnchorsAbove');
        if (!$pluginInfo) {
            return parent::getAnchorsAbove();
        } else {
            return $this->___callPlugins('getAnchorsAbove', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductCount');
        if (!$pluginInfo) {
            return parent::getProductCount();
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
    public function getParentCategories()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentCategories');
        if (!$pluginInfo) {
            return parent::getParentCategories();
        } else {
            return $this->___callPlugins('getParentCategories', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenCategories()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenCategories');
        if (!$pluginInfo) {
            return parent::getChildrenCategories();
        } else {
            return $this->___callPlugins('getChildrenCategories', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentDesignCategory()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentDesignCategory');
        if (!$pluginInfo) {
            return parent::getParentDesignCategory();
        } else {
            return $this->___callPlugins('getParentDesignCategory', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInRootCategoryList()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInRootCategoryList');
        if (!$pluginInfo) {
            return parent::isInRootCategoryList();
        } else {
            return $this->___callPlugins('isInRootCategoryList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableSortBy()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableSortBy');
        if (!$pluginInfo) {
            return parent::getAvailableSortBy();
        } else {
            return $this->___callPlugins('getAvailableSortBy', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableSortByOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableSortByOptions');
        if (!$pluginInfo) {
            return parent::getAvailableSortByOptions();
        } else {
            return $this->___callPlugins('getAvailableSortByOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultSortBy()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultSortBy');
        if (!$pluginInfo) {
            return parent::getDefaultSortBy();
        } else {
            return $this->___callPlugins('getDefaultSortBy', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate();
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
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
    public function reindex()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindex');
        if (!$pluginInfo) {
            return parent::reindex();
        } else {
            return $this->___callPlugins('reindex', func_get_args(), $pluginInfo);
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
    public function getPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPath');
        if (!$pluginInfo) {
            return parent::getPath();
        } else {
            return $this->___callPlugins('getPath', func_get_args(), $pluginInfo);
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
    public function getChildrenCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenCount');
        if (!$pluginInfo) {
            return parent::getChildrenCount();
        } else {
            return $this->___callPlugins('getChildrenCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreatedAt');
        if (!$pluginInfo) {
            return parent::getCreatedAt();
        } else {
            return $this->___callPlugins('getCreatedAt', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpdatedAt');
        if (!$pluginInfo) {
            return parent::getUpdatedAt();
        } else {
            return $this->___callPlugins('getUpdatedAt', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsActive()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsActive');
        if (!$pluginInfo) {
            return parent::getIsActive();
        } else {
            return $this->___callPlugins('getIsActive', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryId');
        if (!$pluginInfo) {
            return parent::getCategoryId();
        } else {
            return $this->___callPlugins('getCategoryId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDisplayMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDisplayMode');
        if (!$pluginInfo) {
            return parent::getDisplayMode();
        } else {
            return $this->___callPlugins('getDisplayMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIncludeInMenu()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIncludeInMenu');
        if (!$pluginInfo) {
            return parent::getIncludeInMenu();
        } else {
            return $this->___callPlugins('getIncludeInMenu', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrlKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrlKey');
        if (!$pluginInfo) {
            return parent::getUrlKey();
        } else {
            return $this->___callPlugins('getUrlKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenData');
        if (!$pluginInfo) {
            return parent::getChildrenData();
        } else {
            return $this->___callPlugins('getChildrenData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __toArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__toArray');
        if (!$pluginInfo) {
            return parent::__toArray();
        } else {
            return $this->___callPlugins('__toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toFlatArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toFlatArray');
        if (!$pluginInfo) {
            return parent::toFlatArray();
        } else {
            return $this->___callPlugins('toFlatArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setParentId($parentId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParentId');
        if (!$pluginInfo) {
            return parent::setParentId($parentId);
        } else {
            return $this->___callPlugins('setParentId', func_get_args(), $pluginInfo);
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
    public function setIsActive($isActive)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsActive');
        if (!$pluginInfo) {
            return parent::setIsActive($isActive);
        } else {
            return $this->___callPlugins('setIsActive', func_get_args(), $pluginInfo);
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
    public function setLevel($level)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLevel');
        if (!$pluginInfo) {
            return parent::setLevel($level);
        } else {
            return $this->___callPlugins('setLevel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt($updatedAt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUpdatedAt');
        if (!$pluginInfo) {
            return parent::setUpdatedAt($updatedAt);
        } else {
            return $this->___callPlugins('setUpdatedAt', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt($createdAt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCreatedAt');
        if (!$pluginInfo) {
            return parent::setCreatedAt($createdAt);
        } else {
            return $this->___callPlugins('setCreatedAt', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPath');
        if (!$pluginInfo) {
            return parent::setPath($path);
        } else {
            return $this->___callPlugins('setPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAvailableSortBy($availableSortBy)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAvailableSortBy');
        if (!$pluginInfo) {
            return parent::setAvailableSortBy($availableSortBy);
        } else {
            return $this->___callPlugins('setAvailableSortBy', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIncludeInMenu($includeInMenu)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIncludeInMenu');
        if (!$pluginInfo) {
            return parent::setIncludeInMenu($includeInMenu);
        } else {
            return $this->___callPlugins('setIncludeInMenu', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setProductCount($productCount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductCount');
        if (!$pluginInfo) {
            return parent::setProductCount($productCount);
        } else {
            return $this->___callPlugins('setProductCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setChildrenData(array $childrenData = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setChildrenData');
        if (!$pluginInfo) {
            return parent::setChildrenData($childrenData);
        } else {
            return $this->___callPlugins('setChildrenData', func_get_args(), $pluginInfo);
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
    public function setExtensionAttributes(\Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes)
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
    public function lockAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'lockAttribute');
        if (!$pluginInfo) {
            return parent::lockAttribute($attributeCode);
        } else {
            return $this->___callPlugins('lockAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unlockAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unlockAttribute');
        if (!$pluginInfo) {
            return parent::unlockAttribute($attributeCode);
        } else {
            return $this->___callPlugins('unlockAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unlockAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unlockAttributes');
        if (!$pluginInfo) {
            return parent::unlockAttributes();
        } else {
            return $this->___callPlugins('unlockAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLockedAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLockedAttributes');
        if (!$pluginInfo) {
            return parent::getLockedAttributes();
        } else {
            return $this->___callPlugins('getLockedAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasLockedAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasLockedAttributes');
        if (!$pluginInfo) {
            return parent::hasLockedAttributes();
        } else {
            return $this->___callPlugins('hasLockedAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isLockedAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLockedAttribute');
        if (!$pluginInfo) {
            return parent::isLockedAttribute($attributeCode);
        } else {
            return $this->___callPlugins('isLockedAttribute', func_get_args(), $pluginInfo);
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
    public function loadByAttribute($attribute, $value, $additionalAttributes = '*')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByAttribute');
        if (!$pluginInfo) {
            return parent::loadByAttribute($attribute, $value, $additionalAttributes);
        } else {
            return $this->___callPlugins('loadByAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStore');
        if (!$pluginInfo) {
            return parent::getStore();
        } else {
            return $this->___callPlugins('getStore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteStoreIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteStoreIds');
        if (!$pluginInfo) {
            return parent::getWebsiteStoreIds();
        } else {
            return $this->___callPlugins('getWebsiteStoreIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeDefaultValue($attributeCode, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeDefaultValue');
        if (!$pluginInfo) {
            return parent::setAttributeDefaultValue($attributeCode, $value);
        } else {
            return $this->___callPlugins('setAttributeDefaultValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeDefaultValue($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeDefaultValue');
        if (!$pluginInfo) {
            return parent::getAttributeDefaultValue($attributeCode);
        } else {
            return $this->___callPlugins('getAttributeDefaultValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setExistsStoreValueFlag($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExistsStoreValueFlag');
        if (!$pluginInfo) {
            return parent::setExistsStoreValueFlag($attributeCode);
        } else {
            return $this->___callPlugins('setExistsStoreValueFlag', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExistsStoreValueFlag($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExistsStoreValueFlag');
        if (!$pluginInfo) {
            return parent::getExistsStoreValueFlag($attributeCode);
        } else {
            return $this->___callPlugins('getExistsStoreValueFlag', func_get_args(), $pluginInfo);
        }
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
    public function isDeleteable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDeleteable');
        if (!$pluginInfo) {
            return parent::isDeleteable();
        } else {
            return $this->___callPlugins('isDeleteable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsDeleteable($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsDeleteable');
        if (!$pluginInfo) {
            return parent::setIsDeleteable($value);
        } else {
            return $this->___callPlugins('setIsDeleteable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isReadonly()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isReadonly');
        if (!$pluginInfo) {
            return parent::isReadonly();
        } else {
            return $this->___callPlugins('isReadonly', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsReadonly($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsReadonly');
        if (!$pluginInfo) {
            return parent::setIsReadonly($value);
        } else {
            return $this->___callPlugins('setIsReadonly', func_get_args(), $pluginInfo);
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
