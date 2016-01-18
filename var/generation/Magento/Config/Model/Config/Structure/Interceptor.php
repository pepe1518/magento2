<?php
namespace Magento\Config\Model\Config\Structure;

/**
 * Interceptor class for @see \Magento\Config\Model\Config\Structure
 */
class Interceptor extends \Magento\Config\Model\Config\Structure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Structure\Data $structureData, \Magento\Config\Model\Config\Structure\Element\Iterator\Tab $tabIterator, \Magento\Config\Model\Config\Structure\Element\FlyweightFactory $flyweightFactory, \Magento\Config\Model\Config\ScopeDefiner $scopeDefiner)
    {
        $this->___init();
        parent::__construct($structureData, $tabIterator, $flyweightFactory, $scopeDefiner);
    }

    /**
     * {@inheritdoc}
     */
    public function getTabs()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTabs');
        if (!$pluginInfo) {
            return parent::getTabs();
        } else {
            return $this->___callPlugins('getTabs', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getElement($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElement');
        if (!$pluginInfo) {
            return parent::getElement($path);
        } else {
            return $this->___callPlugins('getElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstSection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFirstSection');
        if (!$pluginInfo) {
            return parent::getFirstSection();
        } else {
            return $this->___callPlugins('getFirstSection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getElementByPathParts(array $pathParts)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementByPathParts');
        if (!$pluginInfo) {
            return parent::getElementByPathParts($pathParts);
        } else {
            return $this->___callPlugins('getElementByPathParts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldPathsByAttribute($attributeName, $attributeValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldPathsByAttribute');
        if (!$pluginInfo) {
            return parent::getFieldPathsByAttribute($attributeName, $attributeValue);
        } else {
            return $this->___callPlugins('getFieldPathsByAttribute', func_get_args(), $pluginInfo);
        }
    }
}
