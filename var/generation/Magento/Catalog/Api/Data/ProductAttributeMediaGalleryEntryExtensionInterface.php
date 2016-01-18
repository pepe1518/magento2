<?php
namespace Magento\Catalog\Api\Data;

/**
 * ExtensionInterface class for @see
 * \Magento\Catalog\Api\Data\ProductAttributeMediaGalleryEntryInterface
 */
interface ProductAttributeMediaGalleryEntryExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Framework\Api\Data\VideoContentInterface|null
     */
    public function getVideoContent();

    /**
     * @param \Magento\Framework\Api\Data\VideoContentInterface $videoContent
     * @return $this
     */
    public function setVideoContent($videoContent);
}
