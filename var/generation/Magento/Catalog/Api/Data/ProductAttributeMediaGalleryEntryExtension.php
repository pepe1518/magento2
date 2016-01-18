<?php
namespace Magento\Catalog\Api\Data;

/**
 * Extension class for @see
 * \Magento\Catalog\Api\Data\ProductAttributeMediaGalleryEntryInterface
 */
class ProductAttributeMediaGalleryEntryExtension extends \Magento\Framework\Api\AbstractSimpleObject implements \Magento\Catalog\Api\Data\ProductAttributeMediaGalleryEntryExtensionInterface
{
    /**
     * @return \Magento\Framework\Api\Data\VideoContentInterface|null
     */
    public function getVideoContent()
    {
        return $this->_get('video_content');
    }

    /**
     * @param \Magento\Framework\Api\Data\VideoContentInterface $videoContent
     * @return $this
     */
    public function setVideoContent($videoContent)
    {
        $this->setData('video_content', $videoContent);
        return $this;
    }
}
