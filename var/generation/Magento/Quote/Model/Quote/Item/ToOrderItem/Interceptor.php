<?php
namespace Magento\Quote\Model\Quote\Item\ToOrderItem;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\Item\ToOrderItem
 */
class Interceptor extends \Magento\Quote\Model\Quote\Item\ToOrderItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Api\Data\OrderItemInterfaceFactory $orderItemFactory, \Magento\Framework\DataObject\Copy $objectCopyService, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper)
    {
        $this->___init();
        parent::__construct($orderItemFactory, $objectCopyService, $dataObjectHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function convert($item, $data = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convert');
        if (!$pluginInfo) {
            return parent::convert($item, $data);
        } else {
            return $this->___callPlugins('convert', func_get_args(), $pluginInfo);
        }
    }
}
