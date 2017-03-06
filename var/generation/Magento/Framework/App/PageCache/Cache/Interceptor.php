<?php
namespace Magento\Framework\App\PageCache\Cache;

/**
 * Interceptor class for @see \Magento\Framework\App\PageCache\Cache
 */
class Interceptor extends \Magento\Framework\App\PageCache\Cache implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Cache\Frontend\Pool $frontendPool)
    {
        $this->___init();
        parent::__construct($frontendPool);
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontend');
        if (!$pluginInfo) {
            return parent::getFrontend();
        } else {
            return $this->___callPlugins('getFrontend', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function load($identifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        if (!$pluginInfo) {
            return parent::load($identifier);
        } else {
            return $this->___callPlugins('load', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save($data, $identifier, $tags = array(), $lifeTime = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($data, $identifier, $tags, $lifeTime);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function remove($identifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'remove');
        if (!$pluginInfo) {
            return parent::remove($identifier);
        } else {
            return $this->___callPlugins('remove', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clean($tags = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clean');
        if (!$pluginInfo) {
            return parent::clean($tags);
        } else {
            return $this->___callPlugins('clean', func_get_args(), $pluginInfo);
        }
    }
}
