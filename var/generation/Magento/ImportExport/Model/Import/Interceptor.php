<?php
namespace Magento\ImportExport\Model\Import;

/**
 * Interceptor class for @see \Magento\ImportExport\Model\Import
 */
class Interceptor extends \Magento\ImportExport\Model\Import implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem $filesystem, \Magento\ImportExport\Helper\Data $importExportData, \Magento\Framework\App\Config\ScopeConfigInterface $coreConfig, \Magento\ImportExport\Model\Import\ConfigInterface $importConfig, \Magento\ImportExport\Model\Import\Entity\Factory $entityFactory, \Magento\ImportExport\Model\ResourceModel\Import\Data $importData, \Magento\ImportExport\Model\Export\Adapter\CsvFactory $csvFactory, \Magento\Framework\HTTP\Adapter\FileTransferFactory $httpFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\ImportExport\Model\Source\Import\Behavior\Factory $behaviorFactory, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\ImportExport\Model\History $importHistoryModel, \Magento\Framework\Stdlib\DateTime\DateTime $localeDate, array $data = array())
    {
        $this->___init();
        parent::__construct($logger, $filesystem, $importExportData, $coreConfig, $importConfig, $entityFactory, $importData, $csvFactory, $httpFactory, $uploaderFactory, $behaviorFactory, $indexerRegistry, $importHistoryModel, $localeDate, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getOperationResultMessages(\Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $validationResult)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperationResultMessages');
        if (!$pluginInfo) {
            return parent::getOperationResultMessages($validationResult);
        } else {
            return $this->___callPlugins('getOperationResultMessages', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataSourceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataSourceModel');
        if (!$pluginInfo) {
            return parent::getDataSourceModel();
        } else {
            return $this->___callPlugins('getDataSourceModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntity');
        if (!$pluginInfo) {
            return parent::getEntity();
        } else {
            return $this->___callPlugins('getEntity', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessedEntitiesCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProcessedEntitiesCount');
        if (!$pluginInfo) {
            return parent::getProcessedEntitiesCount();
        } else {
            return $this->___callPlugins('getProcessedEntitiesCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessedRowsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProcessedRowsCount');
        if (!$pluginInfo) {
            return parent::getProcessedRowsCount();
        } else {
            return $this->___callPlugins('getProcessedRowsCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWorkingDir()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWorkingDir');
        if (!$pluginInfo) {
            return parent::getWorkingDir();
        } else {
            return $this->___callPlugins('getWorkingDir', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function importSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importSource');
        if (!$pluginInfo) {
            return parent::importSource();
        } else {
            return $this->___callPlugins('importSource', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isImportAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isImportAllowed');
        if (!$pluginInfo) {
            return parent::isImportAllowed();
        } else {
            return $this->___callPlugins('isImportAllowed', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorAggregator()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getErrorAggregator');
        if (!$pluginInfo) {
            return parent::getErrorAggregator();
        } else {
            return $this->___callPlugins('getErrorAggregator', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function uploadSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'uploadSource');
        if (!$pluginInfo) {
            return parent::uploadSource();
        } else {
            return $this->___callPlugins('uploadSource', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateSource(\Magento\ImportExport\Model\Import\AbstractSource $source)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateSource');
        if (!$pluginInfo) {
            return parent::validateSource($source);
        } else {
            return $this->___callPlugins('validateSource', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function invalidateIndex()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'invalidateIndex');
        if (!$pluginInfo) {
            return parent::invalidateIndex();
        } else {
            return $this->___callPlugins('invalidateIndex', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityBehaviors()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityBehaviors');
        if (!$pluginInfo) {
            return parent::getEntityBehaviors();
        } else {
            return $this->___callPlugins('getEntityBehaviors', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUniqueEntityBehaviors()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUniqueEntityBehaviors');
        if (!$pluginInfo) {
            return parent::getUniqueEntityBehaviors();
        } else {
            return $this->___callPlugins('getUniqueEntityBehaviors', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isReportEntityType($entity = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isReportEntityType');
        if (!$pluginInfo) {
            return parent::isReportEntityType($entity);
        } else {
            return $this->___callPlugins('isReportEntityType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreatedItemsCount');
        if (!$pluginInfo) {
            return parent::getCreatedItemsCount();
        } else {
            return $this->___callPlugins('getCreatedItemsCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpdatedItemsCount');
        if (!$pluginInfo) {
            return parent::getUpdatedItemsCount();
        } else {
            return $this->___callPlugins('getUpdatedItemsCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDeletedItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDeletedItemsCount');
        if (!$pluginInfo) {
            return parent::getDeletedItemsCount();
        } else {
            return $this->___callPlugins('getDeletedItemsCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addLogComment($debugData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addLogComment');
        if (!$pluginInfo) {
            return parent::addLogComment($debugData);
        } else {
            return $this->___callPlugins('addLogComment', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatedLogTrace()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormatedLogTrace');
        if (!$pluginInfo) {
            return parent::getFormatedLogTrace();
        } else {
            return $this->___callPlugins('getFormatedLogTrace', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        if (!$pluginInfo) {
            return parent::addData($arr);
        } else {
            return $this->___callPlugins('addData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($key, $value);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        if (!$pluginInfo) {
            return parent::unsetData($key);
        } else {
            return $this->___callPlugins('unsetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $index);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        if (!$pluginInfo) {
            return parent::getDataByPath($path);
        } else {
            return $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        if (!$pluginInfo) {
            return parent::getDataByKey($key);
        } else {
            return $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        if (!$pluginInfo) {
            return parent::setDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        if (!$pluginInfo) {
            return parent::getDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        if (!$pluginInfo) {
            return parent::hasData($key);
        } else {
            return $this->___callPlugins('hasData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($keys);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        if (!$pluginInfo) {
            return parent::convertToArray($keys);
        } else {
            return $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = array(), $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = array(), $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        if (!$pluginInfo) {
            return parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        if (!$pluginInfo) {
            return parent::toJson($keys);
        } else {
            return $this->___callPlugins('toJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        if (!$pluginInfo) {
            return parent::convertToJson($keys);
        } else {
            return $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString($format);
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        if (!$pluginInfo) {
            return parent::isEmpty();
        } else {
            return $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = array(), $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        if (!$pluginInfo) {
            return parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
        } else {
            return $this->___callPlugins('serialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($data, $objects);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        if (!$pluginInfo) {
            return parent::offsetSet($offset, $value);
        } else {
            return $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        if (!$pluginInfo) {
            return parent::offsetExists($offset);
        } else {
            return $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        if (!$pluginInfo) {
            return parent::offsetUnset($offset);
        } else {
            return $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        if (!$pluginInfo) {
            return parent::offsetGet($offset);
        } else {
            return $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo);
        }
    }
}
