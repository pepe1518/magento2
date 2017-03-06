<?php
namespace Magento\Payment\Model\Checks\Composite;

/**
 * Interceptor class for @see \Magento\Payment\Model\Checks\Composite
 */
class Interceptor extends \Magento\Payment\Model\Checks\Composite implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $list)
    {
        $this->___init();
        parent::__construct($list);
    }

    /**
     * {@inheritdoc}
     */
    public function isApplicable(\Magento\Payment\Model\MethodInterface $paymentMethod, \Magento\Quote\Model\Quote $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isApplicable');
        if (!$pluginInfo) {
            return parent::isApplicable($paymentMethod, $quote);
        } else {
            return $this->___callPlugins('isApplicable', func_get_args(), $pluginInfo);
        }
    }
}
