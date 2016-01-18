<?php
namespace Magento\Catalog\Model\Indexer\Category\Product\Action\Full;

/**
 * Interceptor class for @see
 * \Magento\Catalog\Model\Indexer\Category\Product\Action\Full
 */
class Interceptor extends \Magento\Catalog\Model\Indexer\Category\Product\Action\Full implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Config $config)
    {
        $this->___init();
        parent::__construct($resource, $storeManager, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute();
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
