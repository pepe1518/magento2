<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\OrderItemInterface
 */
class OrderItemExtension extends \Magento\Framework\Api\AbstractSimpleObject implements \Magento\Sales\Api\Data\OrderItemExtensionInterface
{
    /**
     * @return \Magento\GiftMessage\Api\Data\MessageInterface|null
     */
    public function getGiftMessage()
    {
        return $this->_get('gift_message');
    }

    /**
     * @param \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage
     * @return $this
     */
    public function setGiftMessage($giftMessage)
    {
        $this->setData('gift_message', $giftMessage);
        return $this;
    }
}
