<?php
namespace Magento\Framework\App\PageCache\Identifier;

/**
 * Interceptor class for @see \Magento\Framework\App\PageCache\Identifier
 */
class Interceptor extends \Magento\Framework\App\PageCache\Identifier implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\App\Http\Context $context)
    {
        $this->___init();
        parent::__construct($request, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValue');
        if (!$pluginInfo) {
            return parent::getValue();
        } else {
            return $this->___callPlugins('getValue', func_get_args(), $pluginInfo);
        }
    }
}
