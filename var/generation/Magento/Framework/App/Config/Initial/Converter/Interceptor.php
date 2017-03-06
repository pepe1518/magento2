<?php
namespace Magento\Framework\App\Config\Initial\Converter;

/**
 * Interceptor class for @see \Magento\Framework\App\Config\Initial\Converter
 */
class Interceptor extends \Magento\Framework\App\Config\Initial\Converter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $nodeMap = array())
    {
        $this->___init();
        parent::__construct($nodeMap);
    }

    /**
     * {@inheritdoc}
     */
    public function convert($source)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convert');
        if (!$pluginInfo) {
            return parent::convert($source);
        } else {
            return $this->___callPlugins('convert', func_get_args(), $pluginInfo);
        }
    }
}
