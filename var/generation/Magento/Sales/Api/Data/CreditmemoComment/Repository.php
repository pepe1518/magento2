<?php
namespace Magento\Sales\Api\Data\CreditmemoComment;

/**
 * Repository class for @see \Magento\Sales\Api\Data\CreditmemoCommentInterface
 */
class Repository implements \Magento\Sales\Api\CreditmemoCommentRepositoryInterface
{
    /**
     * creditmemoCommentInterfacePersistor
     *
     * @var \Magento\Sales\Api\Data\CreditmemoCommentInterfacePersistor
     */
    protected $creditmemoCommentInterfacePersistor = null;

    /**
     * Collection Factory
     *
     * @var \Magento\Sales\Api\Data\CreditmemoCommentSearchResultInterfaceFactory
     */
    protected $creditmemoCommentInterfaceSearchResultFactory = null;

    /**
     * \Magento\Sales\Api\Data\CreditmemoCommentInterface[]
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
     * @param \Magento\Sales\Api\Data\CreditmemoCommentInterface
     * $creditmemoCommentInterfacePersistor
     * @param \Magento\Sales\Api\Data\CreditmemoCommentSearchResultInterfaceFactory
     * $creditmemoCommentInterfaceSearchResultFactory
     * @param \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface
     * $extensionAttributesJoinProcessor
     */
    public function __construct(\Magento\Sales\Api\Data\CreditmemoCommentInterfacePersistor $creditmemoCommentInterfacePersistor, \Magento\Sales\Api\Data\CreditmemoCommentSearchResultInterfaceFactory $creditmemoCommentInterfaceSearchResultFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor)
    {
        $this->creditmemoCommentInterfacePersistor = $creditmemoCommentInterfacePersistor;
        $this->creditmemoCommentInterfaceSearchResultFactory = $creditmemoCommentInterfaceSearchResultFactory;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
    }

    /**
     * load entity
     *
     * @param int $id
     * @return \Magento\Sales\Api\Data\CreditmemoCommentInterface
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get($id)
    {
        if (!$id) {
            throw new \Magento\Framework\Exception\InputException('ID required');
        }
        if (!isset($this->registry[$id])) {
            $entity = $this->creditmemoCommentInterfacePersistor->loadEntity($id);
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
     * @return \Magento\Sales\Api\Data\CreditmemoCommentInterface
     */
    public function create(\Magento\Sales\Api\Data\CreditmemoCommentInterface $entity)
    {
        return $this->creditmemoCommentInterfacePersistor->registerNew($entity);
    }

    /**
     * Register entity to create
     *
     * @param array $data
     * @return \Magento\Sales\Api\Data\CreditmemoComment\Repository
     */
    public function createFromArray(array $data)
    {
        return $this->creditmemoCommentInterfacePersistor->registerFromArray($data);
    }

    /**
     * Find entities by criteria
     *
     * @param \Magento\Framework\Api\SearchCriteria $searchCriteria
     * @return \Magento\Sales\Api\Data\CreditmemoCommentInterface[]
     */
    public function getList(\Magento\Framework\Api\SearchCriteria $searchCriteria)
    {
        $collection = $this->creditmemoCommentInterfaceSearchResultFactory->create();
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
     * @param \Magento\Sales\Api\Data\CreditmemoCommentInterface $entity
     */
    public function remove(\Magento\Sales\Api\Data\CreditmemoCommentInterface $entity)
    {
        $this->creditmemoCommentInterfacePersistor->registerDeleted($entity);
    }

    /**
     * Register entity to delete
     *
     * @param \Magento\Sales\Api\Data\CreditmemoCommentInterface $entity
     * @return bool
     */
    public function delete(\Magento\Sales\Api\Data\CreditmemoCommentInterface $entity)
    {
        $this->creditmemoCommentInterfacePersistor->registerDeleted($entity);
        return $this->creditmemoCommentInterfacePersistor->doPersistEntity($entity);
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
        $this->creditmemoCommentInterfacePersistor->registerDeleted($entity);
        return $this->creditmemoCommentInterfacePersistor->doPersistEntity($entity);
    }

    /**
     * Perform persist operations
     */
    public function flush()
    {
        $ids = $this->creditmemoCommentInterfacePersistor->doPersist();
        foreach ($ids as $id) {
        unset($this->registry[$id]);
        }
    }

    /**
     * Perform persist operations for one entity
     *
     * @param \Magento\Sales\Api\Data\CreditmemoCommentInterface $entity
     * @return \Magento\Sales\Api\Data\CreditmemoCommentInterface
     */
    public function save(\Magento\Sales\Api\Data\CreditmemoCommentInterface $entity)
    {
        $this->creditmemoCommentInterfacePersistor->doPersistEntity($entity);
        return $entity;
    }
}
