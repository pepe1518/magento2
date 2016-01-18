<?php
namespace Magento\Sales\Api\Data\OrderStatusHistory;

/**
 * Repository class for @see \Magento\Sales\Api\Data\OrderStatusHistoryInterface
 */
class Repository implements \Magento\Sales\Api\OrderStatusHistoryRepositoryInterface
{
    /**
     * orderStatusHistoryInterfacePersistor
     *
     * @var \Magento\Sales\Api\Data\OrderStatusHistoryInterfacePersistor
     */
    protected $orderStatusHistoryInterfacePersistor = null;

    /**
     * Collection Factory
     *
     * @var \Magento\Sales\Api\Data\OrderStatusHistorySearchResultInterfaceFactory
     */
    protected $orderStatusHistoryInterfaceSearchResultFactory = null;

    /**
     * \Magento\Sales\Api\Data\OrderStatusHistoryInterface[]
     *
     * @var array
     */
    protected $registry = array(
        
    );

    /**
     * Extension attributes join processor.
     *
     * @var \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface
     */
    protected $extensionAttributesJoinProcessor = null;

    /**
     * Repository constructor
     *
     * @param \Magento\Sales\Api\Data\OrderStatusHistoryInterface
     * $orderStatusHistoryInterfacePersistor
     * @param \Magento\Sales\Api\Data\OrderStatusHistorySearchResultInterfaceFactory
     * $orderStatusHistoryInterfaceSearchResultFactory
     * @param \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface
     * $extensionAttributesJoinProcessor
     */
    public function __construct(\Magento\Sales\Api\Data\OrderStatusHistoryInterfacePersistor $orderStatusHistoryInterfacePersistor, \Magento\Sales\Api\Data\OrderStatusHistorySearchResultInterfaceFactory $orderStatusHistoryInterfaceSearchResultFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor)
    {
        $this->orderStatusHistoryInterfacePersistor = $orderStatusHistoryInterfacePersistor;
        $this->orderStatusHistoryInterfaceSearchResultFactory = $orderStatusHistoryInterfaceSearchResultFactory;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
    }

    /**
     * load entity
     *
     * @param int $id
     * @return \Magento\Sales\Api\Data\OrderStatusHistoryInterface
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get($id)
    {
        if (!$id) {
            throw new \Magento\Framework\Exception\InputException('ID required');
        }
        if (!isset($this->registry[$id])) {
            $entity = $this->orderStatusHistoryInterfacePersistor->loadEntity($id);
            if (!$entity->getId()) {
                throw new \Magento\Framework\Exception\NoSuchEntityException('Requested entity doesn\'t exist');
            }
            $this->registry[$id] = $entity;
        }
        return $this->registry[$id];
    }

    /**
     * Register entity to create
     *
     * @param array $data
     * @return \Magento\Sales\Api\Data\OrderStatusHistoryInterface
     */
    public function create(\Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity)
    {
        return $this->orderStatusHistoryInterfacePersistor->registerNew($entity);
    }

    /**
     * Register entity to create
     *
     * @param array $data
     * @return \Magento\Sales\Api\Data\OrderStatusHistory\Repository
     */
    public function createFromArray(array $data)
    {
        return $this->orderStatusHistoryInterfacePersistor->registerFromArray($data);
    }

    /**
     * Find entities by criteria
     *
     * @param \Magento\Framework\Api\SearchCriteria $searchCriteria
     * @return \Magento\Sales\Api\Data\OrderStatusHistoryInterface[]
     */
    public function getList(\Magento\Framework\Api\SearchCriteria $searchCriteria)
    {
        $collection = $this->orderStatusHistoryInterfaceSearchResultFactory->create();
        $this->extensionAttributesJoinProcessor->process($collection);
        foreach ($searchCriteria->getFilterGroups() as $filterGroup) {
            foreach ($filterGroup->getFilters() as $filter) {
                $condition = $filter->getConditionType() ? $filter->getConditionType() : 'eq';
                $collection->addFieldToFilter($filter->getField(), [$condition => $filter->getValue()]);
            }
        }
        $collection->setCurPage($searchCriteria->getCurrentPage());
        $collection->setPageSize($searchCriteria->getPageSize());
        return $collection;
    }

    /**
     * Register entity to delete
     *
     * @param \Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity
     */
    public function remove(\Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity)
    {
        $this->orderStatusHistoryInterfacePersistor->registerDeleted($entity);
    }

    /**
     * Register entity to delete
     *
     * @param \Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity
     * @return bool
     */
    public function delete(\Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity)
    {
        $this->orderStatusHistoryInterfacePersistor->registerDeleted($entity);
        return $this->orderStatusHistoryInterfacePersistor->doPersistEntity($entity);
    }

    /**
     * Delete entity by Id
     *
     * @param int $id
     * @return bool
     */
    public function deleteById($id)
    {
        $entity = $this->get($id);
        $this->orderStatusHistoryInterfacePersistor->registerDeleted($entity);
        return $this->orderStatusHistoryInterfacePersistor->doPersistEntity($entity);
    }

    /**
     * Perform persist operations
     */
    public function flush()
    {
        $ids = $this->orderStatusHistoryInterfacePersistor->doPersist();
        foreach ($ids as $id) {
        unset($this->registry[$id]);
        }
    }

    /**
     * Perform persist operations for one entity
     *
     * @param \Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity
     * @return \Magento\Sales\Api\Data\OrderStatusHistoryInterface
     */
    public function save(\Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity)
    {
        $this->orderStatusHistoryInterfacePersistor->doPersistEntity($entity);
        return $entity;
    }
}
