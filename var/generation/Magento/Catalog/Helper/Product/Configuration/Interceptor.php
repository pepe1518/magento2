<?php
namespace Magento\Catalog\Helper\Product\Configuration;

/**
 * Interceptor class for @see \Magento\Catalog\Helper\Product\Configuration
 */
class Interceptor extends \Magento\Catalog\Helper\Product\Configuration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Catalog\Model\Product\OptionFactory $productOptionFactory, \Magento\Framework\Filter\FilterManager $filter, \Magento\Framework\Stdlib\StringUtils $string)
    {
        $this->___init();
        parent::__construct($context, $productOptionFactory, $filter, $string);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomOptions(\Magento\Catalog\Model\Product\Configuration\Item\ItemInterface $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomOptions');
        if (!$pluginInfo) {
            return parent::getCustomOptions($item);
        } else {
            return $this->___callPlugins('getCustomOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions(\Magento\Catalog\Model\Product\Configuration\Item\ItemInterface $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        if (!$pluginInfo) {
            return parent::getOptions($item);
        } else {
            return $this->___callPlugins('getOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFormattedOptionValue($optionValue, $params = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormattedOptionValue');
        if (!$pluginInfo) {
            return parent::getFormattedOptionValue($optionValue, $params);
        } else {
            return $this->___callPlugins('getFormattedOptionValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModuleOutputEnabled');
        if (!$pluginInfo) {
            return parent::isModuleOutputEnabled($moduleName);
        } else {
            return $this->___callPlugins('isModuleOutputEnabled', func_get_args(), $pluginInfo);
        }
    }
}
