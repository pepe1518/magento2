<?php
namespace Magento\Quote\Model\Cart\TotalsConverter;

/**
 * Interceptor class for @see \Magento\Quote\Model\Cart\TotalsConverter
 */
class Interceptor extends \Magento\Quote\Model\Cart\TotalsConverter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\Data\TotalSegmentInterfaceFactory $factory)
    {
        $this->___init();
        parent::__construct($factory);
    }

    /**
     * {@inheritdoc}
     */
    public function process($addressTotals)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        if (!$pluginInfo) {
            return parent::process($addressTotals);
        } else {
            return $this->___callPlugins('process', func_get_args(), $pluginInfo);
        }
    }
}
