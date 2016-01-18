<?php
namespace Magento\Integration\Model\IntegrationService;

/**
 * Interceptor class for @see \Magento\Integration\Model\IntegrationService
 */
class Interceptor extends \Magento\Integration\Model\IntegrationService implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Model\IntegrationFactory $integrationFactory, \Magento\Integration\Api\OauthServiceInterface $oauthService)
    {
        $this->___init();
        parent::__construct($integrationFactory, $oauthService);
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $integrationData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        if (!$pluginInfo) {
            return parent::create($integrationData);
        } else {
            return $this->___callPlugins('create', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function update(array $integrationData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        if (!$pluginInfo) {
            return parent::update($integrationData);
        } else {
            return $this->___callPlugins('update', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete($integrationId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($integrationId);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get($integrationId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        if (!$pluginInfo) {
            return parent::get($integrationId);
        } else {
            return $this->___callPlugins('get', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function findByName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findByName');
        if (!$pluginInfo) {
            return parent::findByName($name);
        } else {
            return $this->___callPlugins('findByName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function findByConsumerId($consumerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findByConsumerId');
        if (!$pluginInfo) {
            return parent::findByConsumerId($consumerId);
        } else {
            return $this->___callPlugins('findByConsumerId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function findActiveIntegrationByConsumerId($consumerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findActiveIntegrationByConsumerId');
        if (!$pluginInfo) {
            return parent::findActiveIntegrationByConsumerId($consumerId);
        } else {
            return $this->___callPlugins('findActiveIntegrationByConsumerId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectedResources($integrationId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectedResources');
        if (!$pluginInfo) {
            return parent::getSelectedResources($integrationId);
        } else {
            return $this->___callPlugins('getSelectedResources', func_get_args(), $pluginInfo);
        }
    }
}
