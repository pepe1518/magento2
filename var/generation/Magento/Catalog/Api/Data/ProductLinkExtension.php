<?php
namespace Magento\Catalog\Api\Data;

/**
 * Extension class for @see \Magento\Catalog\Api\Data\ProductLinkInterface
 */
class ProductLinkExtension extends \Magento\Framework\Api\AbstractSimpleObject implements \Magento\Catalog\Api\Data\ProductLinkExtensionInterface
{
    /**
     * @return float|null
     */
    public function getQty()
    {
        return $this->_get('qty');
    }

    /**
     * @param float $qty
     * @return $this
     */
    public function setQty($qty)
    {
        $this->setData('qty', $qty);
        return $this;
    }
}
