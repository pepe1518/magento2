<?php
namespace Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Product;

/**
 * Factory class for @see
 * \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Product\Collection
 */
class CollectionFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return
     * \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Product\Collection
     */
    public function create(array $data = array())
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
