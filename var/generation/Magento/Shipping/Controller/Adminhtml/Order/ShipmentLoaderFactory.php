<?php
namespace Magento\Shipping\Controller\Adminhtml\Order;

/**
 * Factory class for @see
 * \Magento\Shipping\Controller\Adminhtml\Order\ShipmentLoader
 */
class ShipmentLoaderFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Shipping\\Controller\\Adminhtml\\Order\\ShipmentLoader')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\Shipping\Controller\Adminhtml\Order\ShipmentLoader
     */
    public function create(array $data = array())
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
