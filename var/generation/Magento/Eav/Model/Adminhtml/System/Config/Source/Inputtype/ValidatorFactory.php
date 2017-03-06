<?php
namespace Magento\Eav\Model\Adminhtml\System\Config\Source\Inputtype;

/**
 * Factory class for @see
 * \Magento\Eav\Model\Adminhtml\System\Config\Source\Inputtype\Validator
 */
class ValidatorFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype\\Validator')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\Eav\Model\Adminhtml\System\Config\Source\Inputtype\Validator
     */
    public function create(array $data = array())
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
