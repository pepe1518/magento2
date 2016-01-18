<?php
namespace Magento\Sales\Api\Data;

/**
 * Persistor class for @see \Magento\Sales\Api\Data\OrderStatusHistoryInterface
 */
class OrderStatusHistoryInterfacePersistor
{
    /**
     * Entity factory
     *
     * @var \Magento\Sales\Api\Data\OrderStatusHistoryInterfaceFactory
     */
    protected $orderStatusHistoryInterfaceFactory = null;

    /**
     * Resource model
     *
     * @var \Magento\Sales\Model\Spi\OrderStatusHistoryResourceInterface
     */
    protected $orderStatusHistoryInterfaceResource = null;

    /**
     * Application Resource
     *
     * @var \Magento\Framework\App\ResourceConnection
     */
    protected $resource = null;

    /**
     * Database Adapter
     *
     * @var \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected $connection = null;

    /**
     * @var array
     */
    protected $entitiesPool = array(
        
    );

    /**
     * @var array
     */
    protected $stack = array(
        
    );

    /**
     * Persistor constructor
     *
     * @param \Magento\Sales\Model\Spi\OrderStatusHistoryResourceInterface
     * $orderStatusHistoryInterfaceResource
     * @param \Magento\Sales\Api\Data\OrderStatusHistoryInterfaceFactory
     * $orderStatusHistoryInterfaceFactory
     * @param \Magento\Framework\App\ResourceConnection $resource
     */
    public function __construct(\Magento\Sales\Model\Spi\OrderStatusHistoryResourceInterface $orderStatusHistoryInterfaceResource, \Magento\Sales\Api\Data\OrderStatusHistoryInterfaceFactory $orderStatusHistoryInterfaceFactory, \Magento\Framework\App\ResourceConnection $resource)
    {
        $this->orderStatusHistoryInterfaceResource = $orderStatusHistoryInterfaceResource;
        $this->orderStatusHistoryInterfaceFactory = $orderStatusHistoryInterfaceFactory;
        $this->resource = $resource;
    }

    /**
     * Returns Adapter interface
     *
     * @return array \Magento\Framework\DB\Adapter\AdapterInterface
     */
    public function getConnection()
    {
        if (!$this->connection) {
            $this->connection = $this->resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
        }
        return $this->connection;
    }

    /**
     * Load entity by key
     *
     * @param int $key
     * @return \Magento\Sales\Api\Data\OrderStatusHistoryInterfacePersistor $entity
     */
    public function loadEntity($key)
    {
        $entity = $this->orderStatusHistoryInterfaceFactory->create()->load($key);
        return $entity;
    }

    /**
     * Register entity to delete
     *
     * @param \Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity
     */
    public function registerDeleted(\Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity)
    {
        $hash = spl_object_hash($entity);array_push($this->stack, $hash);$this->entitiesPool[$hash] = [    'entity' => $entity,    'action' => 'removed'];
    }

    /**
     * Register entity to create
     *
     * @param \Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity
     */
    public function registerNew(\Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity)
    {
        $hash = spl_object_hash($entity);
        $data = [
        'entity' => $entity,
        'action' => 'created'
        ];
        array_push($this->stack, $hash);
        $this->entitiesPool[$hash] = $data;
    }

    /**
     * Register entity to create
     *
     * @param array $data
     * @param \Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity
     */
    public function registerFromArray(array $data)
    {
        $entity = $this->orderStatusHistoryInterfaceFactory->create(['data' => $data]);
        $this->registerNew($entity);
        return $entity;
    }

    /**
     * Perform persist operation
     *
     * @param int $items
     * @return array
     */
    public function doPersist($items = 0)
    {
        $ids = [];
        $this->getConnection()->beginTransaction();
        try {
            do {
                $hash = array_pop($this->stack);
                if (isset($this->entitiesPool[$hash])) {
                    $data = $this->entitiesPool[$hash];
                    if ($data['action'] == 'created') {
                        $this->orderStatusHistoryInterfaceResource->save($data['entity']);
                        $ids[] = $data['entity']->getId();
                    } else {
                        $ids[] = $data['entity']->getId();
                        $this->orderStatusHistoryInterfaceResource->delete($data['removed']);
                    }
                }
                unset($this->entitiesPool[$hash]);
                $items--;
            } while (!empty($this->entitiesPool) || $items === 0);
            $this->getConnection()->commit();
            return $ids;
        } catch (\Exception $e) {
            $this->getConnection()->rollback();
            throw $e;
        }
    }

    /**
     * Persist entity
     *
     * @param \Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity
     */
    public function doPersistEntity(\Magento\Sales\Api\Data\OrderStatusHistoryInterface $entity)
    {
        $hash = spl_object_hash($entity);
        if (isset($this->entitiesPool[$hash])) {
        $tempStack = $this->stack;
        array_flip($tempStack);
        unset($tempStack[$hash]);
        $this->stack = array_flip($tempStack);
        unset($this->entitiesPool[$hash]);
        }
        $this->registerNew($entity);
        return $this->doPersist(1);
    }
}
