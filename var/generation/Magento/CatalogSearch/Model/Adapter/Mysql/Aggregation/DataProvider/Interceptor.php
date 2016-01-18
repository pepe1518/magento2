<?php
namespace Magento\CatalogSearch\Model\Adapter\Mysql\Aggregation\DataProvider;

/**
 * Interceptor class for @see
 * \Magento\CatalogSearch\Model\Adapter\Mysql\Aggregation\DataProvider
 */
class Interceptor extends \Magento\CatalogSearch\Model\Adapter\Mysql\Aggregation\DataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\App\ScopeResolverInterface $scopeResolver, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($eavConfig, $resource, $scopeResolver, $customerSession);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataSet(\Magento\Framework\Search\Request\BucketInterface $bucket, array $dimensions, \Magento\Framework\DB\Ddl\Table $entityIdsTable)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataSet');
        if (!$pluginInfo) {
            return parent::getDataSet($bucket, $dimensions, $entityIdsTable);
        } else {
            return $this->___callPlugins('getDataSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\DB\Select $select)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($select);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
