<?php
namespace Magento\MediaStorage\Model\File\Storage\File;

/**
 * Proxy class for @see \Magento\MediaStorage\Model\File\Storage\File
 */
class Proxy extends \Magento\MediaStorage\Model\File\Storage\File
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
     * @var \Magento\MediaStorage\Model\File\Storage\File
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\MediaStorage\\Model\\File\\Storage\\File', $shared = true)
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
     * @return \Magento\MediaStorage\Model\File\Storage\File
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
    public function init()
    {
        return $this->_getSubject()->init();
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageName()
    {
        return $this->_getSubject()->getStorageName();
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageData()
    {
        return $this->_getSubject()->getStorageData();
    }

    /**
     * {@inheritdoc}
     */
    public function hasErrors()
    {
        return $this->_getSubject()->hasErrors();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return $this->_getSubject()->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function collectData($offset = 0, $count = 100, $type = 'files')
    {
        return $this->_getSubject()->collectData($offset, $count, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigConnectionName()
    {
        return $this->_getSubject()->getConfigConnectionName();
    }

    /**
     * {@inheritdoc}
     */
    public function getConnectionName()
    {
        return $this->_getSubject()->getConnectionName();
    }

    /**
     * {@inheritdoc}
     */
    public function exportDirectories($offset = 0, $count = 100)
    {
        return $this->_getSubject()->exportDirectories($offset, $count);
    }

    /**
     * {@inheritdoc}
     */
    public function exportFiles($offset = 0, $count = 1)
    {
        return $this->_getSubject()->exportFiles($offset, $count);
    }

    /**
     * {@inheritdoc}
     */
    public function import($data, $callback)
    {
        return $this->_getSubject()->import($data, $callback);
    }

    /**
     * {@inheritdoc}
     */
    public function importDirectories($dirs)
    {
        return $this->_getSubject()->importDirectories($dirs);
    }

    /**
     * {@inheritdoc}
     */
    public function importFiles($files)
    {
        return $this->_getSubject()->importFiles($files);
    }

    /**
     * {@inheritdoc}
     */
    public function saveDir($dir)
    {
        return $this->_getSubject()->saveDir($dir);
    }

    /**
     * {@inheritdoc}
     */
    public function saveFile($file, $overwrite = true)
    {
        return $this->_getSubject()->saveFile($file, $overwrite);
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaBaseDirectory()
    {
        return $this->_getSubject()->getMediaBaseDirectory();
    }
}
