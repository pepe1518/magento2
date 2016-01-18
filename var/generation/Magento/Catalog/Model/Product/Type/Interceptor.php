<?php
namespace Magento\Catalog\Model\Product\Type;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Type
 */
class Interceptor extends \Magento\Catalog\Model\Product\Type implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ProductTypes\ConfigInterface $config, \Magento\Catalog\Model\Product\Type\Pool $productTypePool, \Magento\Catalog\Model\Product\Type\Price\Factory $priceFactory, \Magento\Framework\Pricing\PriceInfo\Factory $priceInfoFactory)
    {
        $this->___init();
        parent::__construct($config, $productTypePool, $priceFactory, $priceInfoFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function factory($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'factory');
        if (!$pluginInfo) {
            return parent::factory($product);
        } else {
            return $this->___callPlugins('factory', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function priceFactory($productType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'priceFactory');
        if (!$pluginInfo) {
            return parent::priceFactory($productType);
        } else {
            return $this->___callPlugins('priceFactory', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceInfo(\Magento\Catalog\Model\Product $saleableItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceInfo');
        if (!$pluginInfo) {
            return parent::getPriceInfo($saleableItem);
        } else {
            return $this->___callPlugins('getPriceInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionArray');
        if (!$pluginInfo) {
            return parent::getOptionArray();
        } else {
            return $this->___callPlugins('getOptionArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllOption()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllOption');
        if (!$pluginInfo) {
            return parent::getAllOption();
        } else {
            return $this->___callPlugins('getAllOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllOptions');
        if (!$pluginInfo) {
            return parent::getAllOptions();
        } else {
            return $this->___callPlugins('getAllOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        if (!$pluginInfo) {
            return parent::getOptions();
        } else {
            return $this->___callPlugins('getOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionText($optionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionText');
        if (!$pluginInfo) {
            return parent::getOptionText($optionId);
        } else {
            return $this->___callPlugins('getOptionText', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypes');
        if (!$pluginInfo) {
            return parent::getTypes();
        } else {
            return $this->___callPlugins('getTypes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCompositeTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCompositeTypes');
        if (!$pluginInfo) {
            return parent::getCompositeTypes();
        } else {
            return $this->___callPlugins('getCompositeTypes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTypesByPriority()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypesByPriority');
        if (!$pluginInfo) {
            return parent::getTypesByPriority();
        } else {
            return $this->___callPlugins('getTypesByPriority', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        if (!$pluginInfo) {
            return parent::toOptionArray();
        } else {
            return $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo);
        }
    }
}
