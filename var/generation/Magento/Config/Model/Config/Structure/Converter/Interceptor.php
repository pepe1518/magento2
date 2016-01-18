<?php
namespace Magento\Config\Model\Config\Structure\Converter;

/**
 * Interceptor class for @see \Magento\Config\Model\Config\Structure\Converter
 */
class Interceptor extends \Magento\Config\Model\Config\Structure\Converter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Structure\Mapper\Factory $mapperFactory)
    {
        $this->___init();
        parent::__construct($mapperFactory);
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
