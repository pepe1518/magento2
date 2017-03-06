<?php
namespace Magento\CatalogInventory\Api\StockStateInterface;

/**
 * Proxy class for @see \Magento\CatalogInventory\Api\StockStateInterface
 */
class Proxy implements \Magento\CatalogInventory\Api\StockStateInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Magento\CatalogInventory\Api\StockStateInterface
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\CatalogInventory\\Api\\StockStateInterface', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return array('_subject', '_isShared');
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Magento\CatalogInventory\Api\StockStateInterface
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function verifyStock($productId, $scopeId = null)
    {
        return $this->_getSubject()->verifyStock($productId, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function verifyNotification($productId, $scopeId = null)
    {
        return $this->_getSubject()->verifyNotification($productId, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function checkQuoteItemQty($productId, $itemQty, $qtyToCheck, $origQty, $scopeId = null)
    {
        return $this->_getSubject()->checkQuoteItemQty($productId, $itemQty, $qtyToCheck, $origQty, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function checkQty($productId, $qty, $scopeId = null)
    {
        return $this->_getSubject()->checkQty($productId, $qty, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function suggestQty($productId, $qty, $scopeId = null)
    {
        return $this->_getSubject()->suggestQty($productId, $qty, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStockQty($productId, $scopeId = null)
    {
        return $this->_getSubject()->getStockQty($productId, $scopeId);
    }
}
