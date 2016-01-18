<?php
namespace Magento\Customer\Model\ResourceModel\GroupRepository;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\GroupRepository
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\GroupRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\GroupRegistry $groupRegistry, \Magento\Customer\Model\GroupFactory $groupFactory, \Magento\Customer\Api\Data\GroupInterfaceFactory $groupDataFactory, \Magento\Customer\Model\ResourceModel\Group $groupResourceModel, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Customer\Api\Data\GroupSearchResultsInterfaceFactory $searchResultsFactory, \Magento\Tax\Api\TaxClassRepositoryInterface $taxClassRepositoryInterface, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor)
    {
        $this->___init();
        parent::__construct($groupRegistry, $groupFactory, $groupDataFactory, $groupResourceModel, $dataObjectProcessor, $searchResultsFactory, $taxClassRepositoryInterface, $extensionAttributesJoinProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Customer\Api\Data\GroupInterface $group)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($group);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getById($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getById');
        if (!$pluginInfo) {
            return parent::getById($id);
        } else {
            return $this->___callPlugins('getById', func_get_args(), $pluginInfo);
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
    public function delete(\Magento\Customer\Api\Data\GroupInterface $group)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($group);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        if (!$pluginInfo) {
            return parent::deleteById($id);
        } else {
            return $this->___callPlugins('deleteById', func_get_args(), $pluginInfo);
        }
    }
}
