<?php
namespace Magento\Framework\View\Model\Layout\Merge;

/**
 * Interceptor class for @see \Magento\Framework\View\Model\Layout\Merge
 */
class Interceptor extends \Magento\Framework\View\Model\Layout\Merge implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\DesignInterface $design, \Magento\Framework\Url\ScopeResolverInterface $scopeResolver, \Magento\Framework\View\File\CollectorInterface $fileSource, \Magento\Framework\View\File\CollectorInterface $pageLayoutFileSource, \Magento\Framework\App\State $appState, \Magento\Framework\Cache\FrontendInterface $cache, \Magento\Framework\View\Model\Layout\Update\Validator $validator, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem\File\ReadFactory $readFactory, \Magento\Framework\View\Design\ThemeInterface $theme = null, $cacheSuffix = '')
    {
        $this->___init();
        parent::__construct($design, $scopeResolver, $fileSource, $pageLayoutFileSource, $appState, $cache, $validator, $logger, $readFactory, $theme, $cacheSuffix);
    }

    /**
     * {@inheritdoc}
     */
    public function addUpdate($update)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUpdate');
        if (!$pluginInfo) {
            return parent::addUpdate($update);
        } else {
            return $this->___callPlugins('addUpdate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function asArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asArray');
        if (!$pluginInfo) {
            return parent::asArray();
        } else {
            return $this->___callPlugins('asArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function asString()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asString');
        if (!$pluginInfo) {
            return parent::asString();
        } else {
            return $this->___callPlugins('asString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addHandle($handleName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addHandle');
        if (!$pluginInfo) {
            return parent::addHandle($handleName);
        } else {
            return $this->___callPlugins('addHandle', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeHandle($handleName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeHandle');
        if (!$pluginInfo) {
            return parent::removeHandle($handleName);
        } else {
            return $this->___callPlugins('removeHandle', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHandles()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHandles');
        if (!$pluginInfo) {
            return parent::getHandles();
        } else {
            return $this->___callPlugins('getHandles', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addPageHandles(array $handlesToTry)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPageHandles');
        if (!$pluginInfo) {
            return parent::addPageHandles($handlesToTry);
        } else {
            return $this->___callPlugins('addPageHandles', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function pageHandleExists($handleName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'pageHandleExists');
        if (!$pluginInfo) {
            return parent::pageHandleExists($handleName);
        } else {
            return $this->___callPlugins('pageHandleExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPageLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageLayout');
        if (!$pluginInfo) {
            return parent::getPageLayout();
        } else {
            return $this->___callPlugins('getPageLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isLayoutDefined()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLayoutDefined');
        if (!$pluginInfo) {
            return parent::isLayoutDefined();
        } else {
            return $this->___callPlugins('isLayoutDefined', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPageHandles()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageHandles');
        if (!$pluginInfo) {
            return parent::getPageHandles();
        } else {
            return $this->___callPlugins('getPageHandles', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllDesignAbstractions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllDesignAbstractions');
        if (!$pluginInfo) {
            return parent::getAllDesignAbstractions();
        } else {
            return $this->___callPlugins('getAllDesignAbstractions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPageHandleType($handleName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageHandleType');
        if (!$pluginInfo) {
            return parent::getPageHandleType($handleName);
        } else {
            return $this->___callPlugins('getPageHandleType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function load($handles = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        if (!$pluginInfo) {
            return parent::load($handles);
        } else {
            return $this->___callPlugins('load', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function asSimplexml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asSimplexml');
        if (!$pluginInfo) {
            return parent::asSimplexml();
        } else {
            return $this->___callPlugins('asSimplexml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDbUpdateString($handle)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDbUpdateString');
        if (!$pluginInfo) {
            return parent::getDbUpdateString($handle);
        } else {
            return $this->___callPlugins('getDbUpdateString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFileLayoutUpdatesXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFileLayoutUpdatesXml');
        if (!$pluginInfo) {
            return parent::getFileLayoutUpdatesXml();
        } else {
            return $this->___callPlugins('getFileLayoutUpdatesXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getContainers()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContainers');
        if (!$pluginInfo) {
            return parent::getContainers();
        } else {
            return $this->___callPlugins('getContainers', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCustomerDesignAbstraction(array $abstraction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCustomerDesignAbstraction');
        if (!$pluginInfo) {
            return parent::isCustomerDesignAbstraction($abstraction);
        } else {
            return $this->___callPlugins('isCustomerDesignAbstraction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isPageLayoutDesignAbstraction(array $abstraction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPageLayoutDesignAbstraction');
        if (!$pluginInfo) {
            return parent::isPageLayoutDesignAbstraction($abstraction);
        } else {
            return $this->___callPlugins('isPageLayoutDesignAbstraction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTheme()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTheme');
        if (!$pluginInfo) {
            return parent::getTheme();
        } else {
            return $this->___callPlugins('getTheme', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getScope()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getScope');
        if (!$pluginInfo) {
            return parent::getScope();
        } else {
            return $this->___callPlugins('getScope', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheId');
        if (!$pluginInfo) {
            return parent::getCacheId();
        } else {
            return $this->___callPlugins('getCacheId', func_get_args(), $pluginInfo);
        }
    }
}
