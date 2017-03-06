<?php
namespace Magento\ImportExport\Model\Import\ErrorProcessing;

/**
 * Factory class for @see
 * \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingError
 */
class ProcessingErrorFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\ImportExport\\Model\\Import\\ErrorProcessing\\ProcessingError')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingError
     */
    public function create(array $data = array())
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
