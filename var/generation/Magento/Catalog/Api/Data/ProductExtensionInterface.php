<?php
namespace Magento\Catalog\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductInterface
 */
interface ProductExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Bundle\Api\Data\OptionInterface[]|null
     */
    public function getBundleProductOptions();

    /**
     * @param \Magento\Bundle\Api\Data\OptionInterface[] $bundleProductOptions
     * @return $this
     */
    public function setBundleProductOptions($bundleProductOptions);

    /**
     * @return \Magento\Downloadable\Api\Data\LinkInterface[]|null
     */
    public function getDownloadableProductLinks();

    /**
     * @param \Magento\Downloadable\Api\Data\LinkInterface[] $downloadableProductLinks
     * @return $this
     */
    public function setDownloadableProductLinks($downloadableProductLinks);

    /**
     * @return \Magento\Downloadable\Api\Data\SampleInterface[]|null
     */
    public function getDownloadableProductSamples();

    /**
     * @param \Magento\Downloadable\Api\Data\SampleInterface[]
     * $downloadableProductSamples
     * @return $this
     */
    public function setDownloadableProductSamples($downloadableProductSamples);

    /**
     * @return \Magento\CatalogInventory\Api\Data\StockItemInterface|null
     */
    public function getStockItem();

    /**
     * @param \Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem
     * @return $this
     */
    public function setStockItem($stockItem);

    /**
     * @return \Magento\ConfigurableProduct\Api\Data\OptionInterface[]|null
     */
    public function getConfigurableProductOptions();

    /**
     * @param \Magento\ConfigurableProduct\Api\Data\OptionInterface[]
     * $configurableProductOptions
     * @return $this
     */
    public function setConfigurableProductOptions($configurableProductOptions);

    /**
     * @return int[]|null
     */
    public function getConfigurableProductLinks();

    /**
     * @param int[] $configurableProductLinks
     * @return $this
     */
    public function setConfigurableProductLinks($configurableProductLinks);
}
