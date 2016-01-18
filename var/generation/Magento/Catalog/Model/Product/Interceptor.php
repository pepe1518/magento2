<?php
namespace Magento\Catalog\Model\Product;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product
 */
class Interceptor extends \Magento\Catalog\Model\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Api\ProductAttributeRepositoryInterface $metadataService, \Magento\Catalog\Model\Product\Url $url, \Magento\Catalog\Model\Product\Link $productLink, \Magento\Catalog\Model\Product\Configuration\Item\OptionFactory $itemOptionFactory, \Magento\CatalogInventory\Api\Data\StockItemInterfaceFactory $stockItemFactory, \Magento\Catalog\Model\Product\OptionFactory $catalogProductOptionFactory, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Catalog\Model\Product\Attribute\Source\Status $catalogProductStatus, \Magento\Catalog\Model\Product\Media\Config $catalogProductMediaConfig, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\Framework\Module\Manager $moduleManager, \Magento\Catalog\Helper\Product $catalogProduct, \Magento\Catalog\Model\ResourceModel\Product $resource, \Magento\Catalog\Model\ResourceModel\Product\Collection $resourceCollection, \Magento\Framework\Data\CollectionFactory $collectionFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\Catalog\Model\Indexer\Product\Flat\Processor $productFlatIndexerProcessor, \Magento\Catalog\Model\Indexer\Product\Price\Processor $productPriceIndexerProcessor, \Magento\Catalog\Model\Indexer\Product\Eav\Processor $productEavIndexerProcessor, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Catalog\Model\Product\Image\CacheFactory $imageCacheFactory, \Magento\Catalog\Model\ProductLink\CollectionProvider $entityCollectionProvider, \Magento\Catalog\Model\Product\LinkTypeProvider $linkTypeProvider, \Magento\Catalog\Api\Data\ProductLinkInterfaceFactory $productLinkFactory, \Magento\Catalog\Api\Data\ProductLinkExtensionFactory $productLinkExtensionFactory, \Magento\Catalog\Model\Product\Attribute\Backend\Media\EntryConverterPool $mediaGalleryEntryConverterPool, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $joinProcessor, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $storeManager, $metadataService, $url, $productLink, $itemOptionFactory, $stockItemFactory, $catalogProductOptionFactory, $catalogProductVisibility, $catalogProductStatus, $catalogProductMediaConfig, $catalogProductType, $moduleManager, $catalogProduct, $resource, $resourceCollection, $collectionFactory, $filesystem, $indexerRegistry, $productFlatIndexerProcessor, $productPriceIndexerProcessor, $productEavIndexerProcessor, $categoryRepository, $imageCacheFactory, $entityCollectionProvider, $linkTypeProvider, $productLinkFactory, $productLinkExtensionFactory, $mediaGalleryEntryConverterPool, $dataObjectHelper, $joinProcessor, $data);
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
    public function getUrlModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrlModel');
        if (!$pluginInfo) {
            return parent::getUrlModel();
        } else {
            return $this->___callPlugins('getUrlModel', func_get_args(), $pluginInfo);
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
    public function getPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrice');
        if (!$pluginInfo) {
            return parent::getPrice();
        } else {
            return $this->___callPlugins('getPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVisibility');
        if (!$pluginInfo) {
            return parent::getVisibility();
        } else {
            return $this->___callPlugins('getVisibility', func_get_args(), $pluginInfo);
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
    public function setPriceCalculation($calculate = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPriceCalculation');
        if (!$pluginInfo) {
            return parent::setPriceCalculation($calculate);
        } else {
            return $this->___callPlugins('setPriceCalculation', func_get_args(), $pluginInfo);
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
    public function getStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatus');
        if (!$pluginInfo) {
            return parent::getStatus();
        } else {
            return $this->___callPlugins('getStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypeInstance');
        if (!$pluginInfo) {
            return parent::getTypeInstance();
        } else {
            return $this->___callPlugins('getTypeInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTypeInstance($instance)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTypeInstance');
        if (!$pluginInfo) {
            return parent::setTypeInstance($instance);
        } else {
            return $this->___callPlugins('setTypeInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLinkInstance');
        if (!$pluginInfo) {
            return parent::getLinkInstance();
        } else {
            return $this->___callPlugins('getLinkInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdBySku($sku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdBySku');
        if (!$pluginInfo) {
            return parent::getIdBySku($sku);
        } else {
            return $this->___callPlugins('getIdBySku', func_get_args(), $pluginInfo);
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
    public function getCategory()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategory');
        if (!$pluginInfo) {
            return parent::getCategory();
        } else {
            return $this->___callPlugins('getCategory', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryIds');
        if (!$pluginInfo) {
            return parent::getCategoryIds();
        } else {
            return $this->___callPlugins('getCategoryIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryCollection');
        if (!$pluginInfo) {
            return parent::getCategoryCollection();
        } else {
            return $this->___callPlugins('getCategoryCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteIds');
        if (!$pluginInfo) {
            return parent::getWebsiteIds();
        } else {
            return $this->___callPlugins('getWebsiteIds', func_get_args(), $pluginInfo);
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
    public function getAttributes($groupId = null, $skipSuper = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributes');
        if (!$pluginInfo) {
            return parent::getAttributes($groupId, $skipSuper);
        } else {
            return $this->___callPlugins('getAttributes', func_get_args(), $pluginInfo);
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
    public function canAffectOptions($value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canAffectOptions');
        if (!$pluginInfo) {
            return parent::canAffectOptions($value);
        } else {
            return $this->___callPlugins('canAffectOptions', func_get_args(), $pluginInfo);
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
    public function setQty($qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQty');
        if (!$pluginInfo) {
            return parent::setQty($qty);
        } else {
            return $this->___callPlugins('setQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQty');
        if (!$pluginInfo) {
            return parent::getQty();
        } else {
            return $this->___callPlugins('getQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function priceReindexCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'priceReindexCallback');
        if (!$pluginInfo) {
            return parent::priceReindexCallback();
        } else {
            return $this->___callPlugins('priceReindexCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function eavReindexCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'eavReindexCallback');
        if (!$pluginInfo) {
            return parent::eavReindexCallback();
        } else {
            return $this->___callPlugins('eavReindexCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDataChanged()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDataChanged');
        if (!$pluginInfo) {
            return parent::isDataChanged();
        } else {
            return $this->___callPlugins('isDataChanged', func_get_args(), $pluginInfo);
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
    public function cleanCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanCache');
        if (!$pluginInfo) {
            return parent::cleanCache();
        } else {
            return $this->___callPlugins('cleanCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceModel');
        if (!$pluginInfo) {
            return parent::getPriceModel();
        } else {
            return $this->___callPlugins('getPriceModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceInfo');
        if (!$pluginInfo) {
            return parent::getPriceInfo();
        } else {
            return $this->___callPlugins('getPriceInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTierPrices()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTierPrices');
        if (!$pluginInfo) {
            return parent::getTierPrices();
        } else {
            return $this->___callPlugins('getTierPrices', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTierPrices(array $tierPrices = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTierPrices');
        if (!$pluginInfo) {
            return parent::setTierPrices($tierPrices);
        } else {
            return $this->___callPlugins('setTierPrices', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTierPrice($qty = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTierPrice');
        if (!$pluginInfo) {
            return parent::getTierPrice($qty);
        } else {
            return $this->___callPlugins('getTierPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatedPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormatedPrice');
        if (!$pluginInfo) {
            return parent::getFormatedPrice();
        } else {
            return $this->___callPlugins('getFormatedPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFinalPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFinalPrice');
        if (!$pluginInfo) {
            return parent::setFinalPrice($price);
        } else {
            return $this->___callPlugins('setFinalPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFinalPrice($qty = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFinalPrice');
        if (!$pluginInfo) {
            return parent::getFinalPrice($qty);
        } else {
            return $this->___callPlugins('getFinalPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCalculatedFinalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCalculatedFinalPrice');
        if (!$pluginInfo) {
            return parent::getCalculatedFinalPrice();
        } else {
            return $this->___callPlugins('getCalculatedFinalPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMinimalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMinimalPrice');
        if (!$pluginInfo) {
            return parent::getMinimalPrice();
        } else {
            return $this->___callPlugins('getMinimalPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecialPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSpecialPrice');
        if (!$pluginInfo) {
            return parent::getSpecialPrice();
        } else {
            return $this->___callPlugins('getSpecialPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecialFromDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSpecialFromDate');
        if (!$pluginInfo) {
            return parent::getSpecialFromDate();
        } else {
            return $this->___callPlugins('getSpecialFromDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecialToDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSpecialToDate');
        if (!$pluginInfo) {
            return parent::getSpecialToDate();
        } else {
            return $this->___callPlugins('getSpecialToDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRelatedProducts()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelatedProducts');
        if (!$pluginInfo) {
            return parent::getRelatedProducts();
        } else {
            return $this->___callPlugins('getRelatedProducts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRelatedProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelatedProductIds');
        if (!$pluginInfo) {
            return parent::getRelatedProductIds();
        } else {
            return $this->___callPlugins('getRelatedProductIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRelatedProductCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelatedProductCollection');
        if (!$pluginInfo) {
            return parent::getRelatedProductCollection();
        } else {
            return $this->___callPlugins('getRelatedProductCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRelatedLinkCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelatedLinkCollection');
        if (!$pluginInfo) {
            return parent::getRelatedLinkCollection();
        } else {
            return $this->___callPlugins('getRelatedLinkCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUpSellProducts()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpSellProducts');
        if (!$pluginInfo) {
            return parent::getUpSellProducts();
        } else {
            return $this->___callPlugins('getUpSellProducts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUpSellProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpSellProductIds');
        if (!$pluginInfo) {
            return parent::getUpSellProductIds();
        } else {
            return $this->___callPlugins('getUpSellProductIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUpSellProductCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpSellProductCollection');
        if (!$pluginInfo) {
            return parent::getUpSellProductCollection();
        } else {
            return $this->___callPlugins('getUpSellProductCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUpSellLinkCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpSellLinkCollection');
        if (!$pluginInfo) {
            return parent::getUpSellLinkCollection();
        } else {
            return $this->___callPlugins('getUpSellLinkCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCrossSellProducts()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCrossSellProducts');
        if (!$pluginInfo) {
            return parent::getCrossSellProducts();
        } else {
            return $this->___callPlugins('getCrossSellProducts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCrossSellProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCrossSellProductIds');
        if (!$pluginInfo) {
            return parent::getCrossSellProductIds();
        } else {
            return $this->___callPlugins('getCrossSellProductIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCrossSellProductCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCrossSellProductCollection');
        if (!$pluginInfo) {
            return parent::getCrossSellProductCollection();
        } else {
            return $this->___callPlugins('getCrossSellProductCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCrossSellLinkCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCrossSellLinkCollection');
        if (!$pluginInfo) {
            return parent::getCrossSellLinkCollection();
        } else {
            return $this->___callPlugins('getCrossSellLinkCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductLinks()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductLinks');
        if (!$pluginInfo) {
            return parent::getProductLinks();
        } else {
            return $this->___callPlugins('getProductLinks', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setProductLinks(array $links = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductLinks');
        if (!$pluginInfo) {
            return parent::setProductLinks($links);
        } else {
            return $this->___callPlugins('setProductLinks', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaAttributes');
        if (!$pluginInfo) {
            return parent::getMediaAttributes();
        } else {
            return $this->___callPlugins('getMediaAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaAttributeValues()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaAttributeValues');
        if (!$pluginInfo) {
            return parent::getMediaAttributeValues();
        } else {
            return $this->___callPlugins('getMediaAttributeValues', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaGalleryImages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaGalleryImages');
        if (!$pluginInfo) {
            return parent::getMediaGalleryImages();
        } else {
            return $this->___callPlugins('getMediaGalleryImages', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGalleryAttributeBackend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGalleryAttributeBackend');
        if (!$pluginInfo) {
            return parent::getGalleryAttributeBackend();
        } else {
            return $this->___callPlugins('getGalleryAttributeBackend', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addImageToMediaGallery($file, $mediaAttribute = null, $move = false, $exclude = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addImageToMediaGallery');
        if (!$pluginInfo) {
            return parent::addImageToMediaGallery($file, $mediaAttribute, $move, $exclude);
        } else {
            return $this->___callPlugins('addImageToMediaGallery', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaConfig');
        if (!$pluginInfo) {
            return parent::getMediaConfig();
        } else {
            return $this->___callPlugins('getMediaConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVisibleInCatalogStatuses()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVisibleInCatalogStatuses');
        if (!$pluginInfo) {
            return parent::getVisibleInCatalogStatuses();
        } else {
            return $this->___callPlugins('getVisibleInCatalogStatuses', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVisibleStatuses()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVisibleStatuses');
        if (!$pluginInfo) {
            return parent::getVisibleStatuses();
        } else {
            return $this->___callPlugins('getVisibleStatuses', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isVisibleInCatalog()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVisibleInCatalog');
        if (!$pluginInfo) {
            return parent::isVisibleInCatalog();
        } else {
            return $this->___callPlugins('isVisibleInCatalog', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVisibleInSiteVisibilities()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVisibleInSiteVisibilities');
        if (!$pluginInfo) {
            return parent::getVisibleInSiteVisibilities();
        } else {
            return $this->___callPlugins('getVisibleInSiteVisibilities', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isVisibleInSiteVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVisibleInSiteVisibility');
        if (!$pluginInfo) {
            return parent::isVisibleInSiteVisibility();
        } else {
            return $this->___callPlugins('isVisibleInSiteVisibility', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDuplicable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDuplicable');
        if (!$pluginInfo) {
            return parent::isDuplicable();
        } else {
            return $this->___callPlugins('isDuplicable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsDuplicable($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsDuplicable');
        if (!$pluginInfo) {
            return parent::setIsDuplicable($value);
        } else {
            return $this->___callPlugins('setIsDuplicable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSalable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSalable');
        if (!$pluginInfo) {
            return parent::isSalable();
        } else {
            return $this->___callPlugins('isSalable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isAvailable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAvailable');
        if (!$pluginInfo) {
            return parent::isAvailable();
        } else {
            return $this->___callPlugins('isAvailable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsSalable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsSalable');
        if (!$pluginInfo) {
            return parent::getIsSalable();
        } else {
            return $this->___callPlugins('getIsSalable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isVirtual()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVirtual');
        if (!$pluginInfo) {
            return parent::isVirtual();
        } else {
            return $this->___callPlugins('isVirtual', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSaleable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSaleable');
        if (!$pluginInfo) {
            return parent::isSaleable();
        } else {
            return $this->___callPlugins('isSaleable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInStock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInStock');
        if (!$pluginInfo) {
            return parent::isInStock();
        } else {
            return $this->___callPlugins('isInStock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeText($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeText');
        if (!$pluginInfo) {
            return parent::getAttributeText($attributeCode);
        } else {
            return $this->___callPlugins('getAttributeText', func_get_args(), $pluginInfo);
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
    public function getProductUrl($useSid = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductUrl');
        if (!$pluginInfo) {
            return parent::getProductUrl($useSid);
        } else {
            return $this->___callPlugins('getProductUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrlInStore($params = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrlInStore');
        if (!$pluginInfo) {
            return parent::getUrlInStore($params);
        } else {
            return $this->___callPlugins('getUrlInStore', func_get_args(), $pluginInfo);
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
    public function addAttributeUpdate($code, $value, $store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeUpdate');
        if (!$pluginInfo) {
            return parent::addAttributeUpdate($code, $value, $store);
        } else {
            return $this->___callPlugins('addAttributeUpdate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $arrAttributes = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($arrAttributes);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fromArray(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fromArray');
        if (!$pluginInfo) {
            return parent::fromArray($data);
        } else {
            return $this->___callPlugins('fromArray', func_get_args(), $pluginInfo);
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
    public function getGiftMessageAvailable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGiftMessageAvailable');
        if (!$pluginInfo) {
            return parent::getGiftMessageAvailable();
        } else {
            return $this->___callPlugins('getGiftMessageAvailable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isComposite()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isComposite');
        if (!$pluginInfo) {
            return parent::isComposite();
        } else {
            return $this->___callPlugins('isComposite', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canConfigure()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canConfigure');
        if (!$pluginInfo) {
            return parent::canConfigure();
        } else {
            return $this->___callPlugins('canConfigure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSku()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSku');
        if (!$pluginInfo) {
            return parent::getSku();
        } else {
            return $this->___callPlugins('getSku', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeight');
        if (!$pluginInfo) {
            return parent::getWeight();
        } else {
            return $this->___callPlugins('getWeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionInstance');
        if (!$pluginInfo) {
            return parent::getOptionInstance();
        } else {
            return $this->___callPlugins('getOptionInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductOptionsCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductOptionsCollection');
        if (!$pluginInfo) {
            return parent::getProductOptionsCollection();
        } else {
            return $this->___callPlugins('getProductOptionsCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addOption(\Magento\Catalog\Model\Product\Option $option)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOption');
        if (!$pluginInfo) {
            return parent::addOption($option);
        } else {
            return $this->___callPlugins('addOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionById($optionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionById');
        if (!$pluginInfo) {
            return parent::getOptionById($optionId);
        } else {
            return $this->___callPlugins('getOptionById', func_get_args(), $pluginInfo);
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
    public function getIsVirtual()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVirtual');
        if (!$pluginInfo) {
            return parent::getIsVirtual();
        } else {
            return $this->___callPlugins('getIsVirtual', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addCustomOption($code, $value, $product = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCustomOption');
        if (!$pluginInfo) {
            return parent::addCustomOption($code, $value, $product);
        } else {
            return $this->___callPlugins('addCustomOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomOptions(array $options)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomOptions');
        if (!$pluginInfo) {
            return parent::setCustomOptions($options);
        } else {
            return $this->___callPlugins('setCustomOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomOptions');
        if (!$pluginInfo) {
            return parent::getCustomOptions();
        } else {
            return $this->___callPlugins('getCustomOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomOption($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomOption');
        if (!$pluginInfo) {
            return parent::getCustomOption($code);
        } else {
            return $this->___callPlugins('getCustomOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasCustomOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasCustomOptions');
        if (!$pluginInfo) {
            return parent::hasCustomOptions();
        } else {
            return $this->___callPlugins('hasCustomOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canBeShowInCategory($categoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canBeShowInCategory');
        if (!$pluginInfo) {
            return parent::canBeShowInCategory($categoryId);
        } else {
            return $this->___callPlugins('canBeShowInCategory', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableInCategories()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableInCategories');
        if (!$pluginInfo) {
            return parent::getAvailableInCategories();
        } else {
            return $this->___callPlugins('getAvailableInCategories', func_get_args(), $pluginInfo);
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
    public function reset()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reset');
        if (!$pluginInfo) {
            return parent::reset();
        } else {
            return $this->___callPlugins('reset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheIdTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheIdTags');
        if (!$pluginInfo) {
            return parent::getCacheIdTags();
        } else {
            return $this->___callPlugins('getCacheIdTags', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isProductsHasSku(array $productIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isProductsHasSku');
        if (!$pluginInfo) {
            return parent::isProductsHasSku($productIds);
        } else {
            return $this->___callPlugins('isProductsHasSku', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processBuyRequest(\Magento\Framework\DataObject $buyRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processBuyRequest');
        if (!$pluginInfo) {
            return parent::processBuyRequest($buyRequest);
        } else {
            return $this->___callPlugins('processBuyRequest', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPreconfiguredValues()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPreconfiguredValues');
        if (!$pluginInfo) {
            return parent::getPreconfiguredValues();
        } else {
            return $this->___callPlugins('getPreconfiguredValues', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareCustomOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareCustomOptions');
        if (!$pluginInfo) {
            return parent::prepareCustomOptions();
        } else {
            return $this->___callPlugins('prepareCustomOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductEntitiesInfo($columns = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductEntitiesInfo');
        if (!$pluginInfo) {
            return parent::getProductEntitiesInfo($columns);
        } else {
            return $this->___callPlugins('getProductEntitiesInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDisabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDisabled');
        if (!$pluginInfo) {
            return parent::isDisabled();
        } else {
            return $this->___callPlugins('isDisabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage();
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
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
    public function reloadPriceInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reloadPriceInfo');
        if (!$pluginInfo) {
            return parent::reloadPriceInfo();
        } else {
            return $this->___callPlugins('reloadPriceInfo', func_get_args(), $pluginInfo);
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
    public function setSku($sku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSku');
        if (!$pluginInfo) {
            return parent::setSku($sku);
        } else {
            return $this->___callPlugins('setSku', func_get_args(), $pluginInfo);
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
    public function setAttributeSetId($attributeSetId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeSetId');
        if (!$pluginInfo) {
            return parent::setAttributeSetId($attributeSetId);
        } else {
            return $this->___callPlugins('setAttributeSetId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPrice');
        if (!$pluginInfo) {
            return parent::setPrice($price);
        } else {
            return $this->___callPlugins('setPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStatus($status)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStatus');
        if (!$pluginInfo) {
            return parent::setStatus($status);
        } else {
            return $this->___callPlugins('setStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setVisibility($visibility)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVisibility');
        if (!$pluginInfo) {
            return parent::setVisibility($visibility);
        } else {
            return $this->___callPlugins('setVisibility', func_get_args(), $pluginInfo);
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
    public function setWeight($weight)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWeight');
        if (!$pluginInfo) {
            return parent::setWeight($weight);
        } else {
            return $this->___callPlugins('setWeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTypeId($typeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTypeId');
        if (!$pluginInfo) {
            return parent::setTypeId($typeId);
        } else {
            return $this->___callPlugins('setTypeId', func_get_args(), $pluginInfo);
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
    public function setExtensionAttributes(\Magento\Catalog\Api\Data\ProductExtensionInterface $extensionAttributes)
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
    public function getMediaGalleryEntries()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaGalleryEntries');
        if (!$pluginInfo) {
            return parent::getMediaGalleryEntries();
        } else {
            return $this->___callPlugins('getMediaGalleryEntries', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMediaGalleryEntries(array $mediaGalleryEntries = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMediaGalleryEntries');
        if (!$pluginInfo) {
            return parent::setMediaGalleryEntries($mediaGalleryEntries);
        } else {
            return $this->___callPlugins('setMediaGalleryEntries', func_get_args(), $pluginInfo);
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
