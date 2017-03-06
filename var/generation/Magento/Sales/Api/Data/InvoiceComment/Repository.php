<?php
namespace Magento\Sales\Api\Data\InvoiceComment;

/**
 * Repository class for @see \Magento\Sales\Api\Data\InvoiceCommentInterface
 */
class Repository implements \Magento\Sales\Api\InvoiceCommentRepositoryInterface
{
    /**
     * invoiceCommentInterfacePersistor
     *
     * @var \Magento\Sales\Api\Data\InvoiceCommentInterfacePersistor
     */
    protected $invoiceCommentInterfacePersistor = null;

    /**
     * Collection Factory
     *
     * @var \Magento\Sales\Api\Data\InvoiceCommentSearchResultInterfaceFactory
     */
    protected $invoiceCommentInterfaceSearchResultFactory = null;

    /**
     * \Magento\Sales\Api\Data\InvoiceCommentInterface[]
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
     * @param \Magento\Sales\Api\Data\InvoiceCommentInterface
     * $invoiceCommentInterfacePersistor
     * @param \Magento\Sales\Api\Data\InvoiceCommentSearchResultInterfaceFactory
     * $invoiceCommentInterfaceSearchResultFactory
     * @param \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface
     * $extensionAttributesJoinProcessor
     */
    public function __construct(\Magento\Sales\Api\Data\InvoiceCommentInterfacePersistor $invoiceCommentInterfacePersistor, \Magento\Sales\Api\Data\InvoiceCommentSearchResultInterfaceFactory $invoiceCommentInterfaceSearchResultFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor)
    {
        $this->invoiceCommentInterfacePersistor = $invoiceCommentInterfacePersistor;
        $this->invoiceCommentInterfaceSearchResultFactory = $invoiceCommentInterfaceSearchResultFactory;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
    }

    /**
     * load entity
     *
     * @param int $id
     * @return \Magento\Sales\Api\Data\InvoiceCommentInterface
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get($id)
    {
        if (!$id) {
            throw new \Magento\Framework\Exception\InputException('ID required');
        }
        if (!isset($this->registry[$id])) {
            $entity = $this->invoiceCommentInterfacePersistor->loadEntity($id);
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
     * @return \Magento\Sales\Api\Data\InvoiceCommentInterface
     */
    public function create(\Magento\Sales\Api\Data\InvoiceCommentInterface $entity)
    {
        return $this->invoiceCommentInterfacePersistor->registerNew($entity);
    }

    /**
     * Register entity to create
     *
     * @param array $data
     * @return \Magento\Sales\Api\Data\InvoiceComment\Repository
     */
    public function createFromArray(array $data)
    {
        return $this->invoiceCommentInterfacePersistor->registerFromArray($data);
    }

    /**
     * Find entities by criteria
     *
     * @param \Magento\Framework\Api\SearchCriteria $searchCriteria
     * @return \Magento\Sales\Api\Data\InvoiceCommentInterface[]
     */
    public function getList(\Magento\Framework\Api\SearchCriteria $searchCriteria)
    {
        $collection = $this->invoiceCommentInterfaceSearchResultFactory->create();
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
     * @param \Magento\Sales\Api\Data\InvoiceCommentInterface $entity
     */
    public function remove(\Magento\Sales\Api\Data\InvoiceCommentInterface $entity)
    {
        $this->invoiceCommentInterfacePersistor->registerDeleted($entity);
    }

    /**
     * Register entity to delete
     *
     * @param \Magento\Sales\Api\Data\InvoiceCommentInterface $entity
     * @return bool
     */
    public function delete(\Magento\Sales\Api\Data\InvoiceCommentInterface $entity)
    {
        $this->invoiceCommentInterfacePersistor->registerDeleted($entity);
        return $this->invoiceCommentInterfacePersistor->doPersistEntity($entity);
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
        $this->invoiceCommentInterfacePersistor->registerDeleted($entity);
        return $this->invoiceCommentInterfacePersistor->doPersistEntity($entity);
    }

    /**
     * Perform persist operations
     */
    public function flush()
    {
        $ids = $this->invoiceCommentInterfacePersistor->doPersist();
        foreach ($ids as $id) {
        unset($this->registry[$id]);
        }
    }

    /**
     * Perform persist operations for one entity
     *
     * @param \Magento\Sales\Api\Data\InvoiceCommentInterface $entity
     * @return \Magento\Sales\Api\Data\InvoiceCommentInterface
     */
    public function save(\Magento\Sales\Api\Data\InvoiceCommentInterface $entity)
    {
        $this->invoiceCommentInterfacePersistor->doPersistEntity($entity);
        return $entity;
    }
}
