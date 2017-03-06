<?php
namespace Magento\Catalog\Model\Product\Attribute\Repository;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Attribute\Repository
 */
class Interceptor extends \Magento\Catalog\Model\Product\Attribute\Repository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Attribute $attributeResource, \Magento\Catalog\Helper\Product $productHelper, \Magento\Framework\Filter\FilterManager $filterManager, \Magento\Eav\Api\AttributeRepositoryInterface $eavAttributeRepository, \Magento\Eav\Model\Config $eavConfig, \Magento\Eav\Model\Adminhtml\System\Config\Source\Inputtype\ValidatorFactory $validatorFactory, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder)
    {
        $this->___init();
        parent::__construct($attributeResource, $productHelper, $filterManager, $eavAttributeRepository, $eavConfig, $validatorFactory, $searchCriteriaBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function get($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        if (!$pluginInfo) {
            return parent::get($attributeCode);
        } else {
            return $this->___callPlugins('get', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        if (!$pluginInfo) {
            return parent::getList($searchCriteria);
        } else {
            return $this->___callPlugins('getList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Catalog\Api\Data\ProductAttributeInterface $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($attribute);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Catalog\Api\Data\ProductAttributeInterface $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($attribute);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        if (!$pluginInfo) {
            return parent::deleteById($attributeCode);
        } else {
            return $this->___callPlugins('deleteById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributesMetadata($dataObjectClassName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributesMetadata');
        if (!$pluginInfo) {
            return parent::getCustomAttributesMetadata($dataObjectClassName);
        } else {
            return $this->___callPlugins('getCustomAttributesMetadata', func_get_args(), $pluginInfo);
        }
    }
}
