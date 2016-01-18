<?php
namespace Magento\Framework\View\Layout;

/**
 * Interceptor class for @see \Magento\Framework\View\Layout
 */
class Interceptor extends \Magento\Framework\View\Layout implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Layout\ProcessorFactory $processorFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\View\Layout\Data\Structure $structure, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\View\Design\Theme\ResolverInterface $themeResolver, \Magento\Framework\View\Layout\ReaderPool $readerPool, \Magento\Framework\View\Layout\GeneratorPool $generatorPool, \Magento\Framework\Cache\FrontendInterface $cache, \Magento\Framework\View\Layout\Reader\ContextFactory $readerContextFactory, \Magento\Framework\View\Layout\Generator\ContextFactory $generatorContextFactory, \Magento\Framework\App\State $appState, \Psr\Log\LoggerInterface $logger, $cacheable = true)
    {
        $this->___init();
        parent::__construct($processorFactory, $eventManager, $structure, $messageManager, $themeResolver, $readerPool, $generatorPool, $cache, $readerContextFactory, $generatorContextFactory, $appState, $logger, $cacheable);
    }

    /**
     * {@inheritdoc}
     */
    public function setGeneratorPool(\Magento\Framework\View\Layout\GeneratorPool $generatorPool)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGeneratorPool');
        if (!$pluginInfo) {
            return parent::setGeneratorPool($generatorPool);
        } else {
            return $this->___callPlugins('setGeneratorPool', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBuilder(\Magento\Framework\View\Layout\BuilderInterface $builder)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBuilder');
        if (!$pluginInfo) {
            return parent::setBuilder($builder);
        } else {
            return $this->___callPlugins('setBuilder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function publicBuild()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'publicBuild');
        if (!$pluginInfo) {
            return parent::publicBuild();
        } else {
            return $this->___callPlugins('publicBuild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpdate');
        if (!$pluginInfo) {
            return parent::getUpdate();
        } else {
            return $this->___callPlugins('getUpdate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function generateXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateXml');
        if (!$pluginInfo) {
            return parent::generateXml();
        } else {
            return $this->___callPlugins('generateXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function generateElements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateElements');
        if (!$pluginInfo) {
            return parent::generateElements();
        } else {
            return $this->___callPlugins('generateElements', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlock($parentName, $alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildBlock');
        if (!$pluginInfo) {
            return parent::getChildBlock($parentName, $alias);
        } else {
            return $this->___callPlugins('getChildBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setChild($parentName, $elementName, $alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setChild');
        if (!$pluginInfo) {
            return parent::setChild($parentName, $elementName, $alias);
        } else {
            return $this->___callPlugins('setChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reorderChild($parentName, $childName, $offsetOrSibling, $after = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reorderChild');
        if (!$pluginInfo) {
            return parent::reorderChild($parentName, $childName, $offsetOrSibling, $after);
        } else {
            return $this->___callPlugins('reorderChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChild($parentName, $alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChild');
        if (!$pluginInfo) {
            return parent::unsetChild($parentName, $alias);
        } else {
            return $this->___callPlugins('unsetChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildNames($parentName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildNames');
        if (!$pluginInfo) {
            return parent::getChildNames($parentName);
        } else {
            return $this->___callPlugins('getChildNames', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlocks($parentName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildBlocks');
        if (!$pluginInfo) {
            return parent::getChildBlocks($parentName);
        } else {
            return $this->___callPlugins('getChildBlocks', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildName($parentName, $alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildName');
        if (!$pluginInfo) {
            return parent::getChildName($parentName, $alias);
        } else {
            return $this->___callPlugins('getChildName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderElement($name, $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderElement');
        if (!$pluginInfo) {
            return parent::renderElement($name, $useCache);
        } else {
            return $this->___callPlugins('renderElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderNonCachedElement($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderNonCachedElement');
        if (!$pluginInfo) {
            return parent::renderNonCachedElement($name);
        } else {
            return $this->___callPlugins('renderNonCachedElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addToParentGroup($blockName, $parentGroupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addToParentGroup');
        if (!$pluginInfo) {
            return parent::addToParentGroup($blockName, $parentGroupName);
        } else {
            return $this->___callPlugins('addToParentGroup', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupChildNames($blockName, $groupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupChildNames');
        if (!$pluginInfo) {
            return parent::getGroupChildNames($blockName, $groupName);
        } else {
            return $this->___callPlugins('getGroupChildNames', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasElement($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasElement');
        if (!$pluginInfo) {
            return parent::hasElement($name);
        } else {
            return $this->___callPlugins('hasElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getElementProperty($name, $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementProperty');
        if (!$pluginInfo) {
            return parent::getElementProperty($name, $attribute);
        } else {
            return $this->___callPlugins('getElementProperty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isBlock($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isBlock');
        if (!$pluginInfo) {
            return parent::isBlock($name);
        } else {
            return $this->___callPlugins('isBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isUiComponent($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isUiComponent');
        if (!$pluginInfo) {
            return parent::isUiComponent($name);
        } else {
            return $this->___callPlugins('isUiComponent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isContainer($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isContainer');
        if (!$pluginInfo) {
            return parent::isContainer($name);
        } else {
            return $this->___callPlugins('isContainer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isManipulationAllowed($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isManipulationAllowed');
        if (!$pluginInfo) {
            return parent::isManipulationAllowed($name);
        } else {
            return $this->___callPlugins('isManipulationAllowed', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBlock($name, $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBlock');
        if (!$pluginInfo) {
            return parent::setBlock($name, $block);
        } else {
            return $this->___callPlugins('setBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetElement($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetElement');
        if (!$pluginInfo) {
            return parent::unsetElement($name);
        } else {
            return $this->___callPlugins('unsetElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createBlock($type, $name = '', array $arguments = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createBlock');
        if (!$pluginInfo) {
            return parent::createBlock($type, $name, $arguments);
        } else {
            return $this->___callPlugins('createBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addBlock($block, $name = '', $parent = '', $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBlock');
        if (!$pluginInfo) {
            return parent::addBlock($block, $name, $parent, $alias);
        } else {
            return $this->___callPlugins('addBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addContainer($name, $label, array $options = array(), $parent = '', $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addContainer');
        if (!$pluginInfo) {
            return parent::addContainer($name, $label, $options, $parent, $alias);
        } else {
            return $this->___callPlugins('addContainer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renameElement($oldName, $newName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renameElement');
        if (!$pluginInfo) {
            return parent::renameElement($oldName, $newName);
        } else {
            return $this->___callPlugins('renameElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllBlocks()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllBlocks');
        if (!$pluginInfo) {
            return parent::getAllBlocks();
        } else {
            return $this->___callPlugins('getAllBlocks', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBlock($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlock');
        if (!$pluginInfo) {
            return parent::getBlock($name);
        } else {
            return $this->___callPlugins('getBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUiComponent($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUiComponent');
        if (!$pluginInfo) {
            return parent::getUiComponent($name);
        } else {
            return $this->___callPlugins('getUiComponent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentName($childName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentName');
        if (!$pluginInfo) {
            return parent::getParentName($childName);
        } else {
            return $this->___callPlugins('getParentName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getElementAlias($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementAlias');
        if (!$pluginInfo) {
            return parent::getElementAlias($name);
        } else {
            return $this->___callPlugins('getElementAlias', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addOutputElement($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOutputElement');
        if (!$pluginInfo) {
            return parent::addOutputElement($name);
        } else {
            return $this->___callPlugins('addOutputElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeOutputElement($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeOutputElement');
        if (!$pluginInfo) {
            return parent::removeOutputElement($name);
        } else {
            return $this->___callPlugins('removeOutputElement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOutput()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOutput');
        if (!$pluginInfo) {
            return parent::getOutput();
        } else {
            return $this->___callPlugins('getOutput', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMessagesBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMessagesBlock');
        if (!$pluginInfo) {
            return parent::getMessagesBlock();
        } else {
            return $this->___callPlugins('getMessagesBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockSingleton($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlockSingleton');
        if (!$pluginInfo) {
            return parent::getBlockSingleton($type);
        } else {
            return $this->___callPlugins('getBlockSingleton', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addAdjustableRenderer($namespace, $staticType, $dynamicType, $type, $template, $data = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAdjustableRenderer');
        if (!$pluginInfo) {
            return parent::addAdjustableRenderer($namespace, $staticType, $dynamicType, $type, $template, $data);
        } else {
            return $this->___callPlugins('addAdjustableRenderer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRendererOptions($namespace, $staticType, $dynamicType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRendererOptions');
        if (!$pluginInfo) {
            return parent::getRendererOptions($namespace, $staticType, $dynamicType);
        } else {
            return $this->___callPlugins('getRendererOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeRenderer($namespace, $staticType, $dynamicType, $data = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRenderer');
        if (!$pluginInfo) {
            return parent::executeRenderer($namespace, $staticType, $dynamicType, $data);
        } else {
            return $this->___callPlugins('executeRenderer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function initMessages($messageGroups = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initMessages');
        if (!$pluginInfo) {
            return parent::initMessages($messageGroups);
        } else {
            return $this->___callPlugins('initMessages', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCacheable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCacheable');
        if (!$pluginInfo) {
            return parent::isCacheable();
        } else {
            return $this->___callPlugins('isCacheable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isPrivate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPrivate');
        if (!$pluginInfo) {
            return parent::isPrivate();
        } else {
            return $this->___callPlugins('isPrivate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsPrivate($isPrivate = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsPrivate');
        if (!$pluginInfo) {
            return parent::setIsPrivate($isPrivate);
        } else {
            return $this->___callPlugins('setIsPrivate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReaderContext()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReaderContext');
        if (!$pluginInfo) {
            return parent::getReaderContext();
        } else {
            return $this->___callPlugins('getReaderContext', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setXml(\Magento\Framework\Simplexml\Element $node)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setXml');
        if (!$pluginInfo) {
            return parent::setXml($node);
        } else {
            return $this->___callPlugins('setXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNode($path = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNode');
        if (!$pluginInfo) {
            return parent::getNode($path);
        } else {
            return $this->___callPlugins('getNode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getXpath($xpath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getXpath');
        if (!$pluginInfo) {
            return parent::getXpath($xpath);
        } else {
            return $this->___callPlugins('getXpath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCache($cache)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCache');
        if (!$pluginInfo) {
            return parent::setCache($cache);
        } else {
            return $this->___callPlugins('setCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCache');
        if (!$pluginInfo) {
            return parent::getCache();
        } else {
            return $this->___callPlugins('getCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCacheSaved($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCacheSaved');
        if (!$pluginInfo) {
            return parent::setCacheSaved($flag);
        } else {
            return $this->___callPlugins('setCacheSaved', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheSaved()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheSaved');
        if (!$pluginInfo) {
            return parent::getCacheSaved();
        } else {
            return $this->___callPlugins('getCacheSaved', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCacheId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCacheId');
        if (!$pluginInfo) {
            return parent::setCacheId($id);
        } else {
            return $this->___callPlugins('setCacheId', func_get_args(), $pluginInfo);
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

    /**
     * {@inheritdoc}
     */
    public function setCacheTags($tags)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCacheTags');
        if (!$pluginInfo) {
            return parent::setCacheTags($tags);
        } else {
            return $this->___callPlugins('setCacheTags', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheTags');
        if (!$pluginInfo) {
            return parent::getCacheTags();
        } else {
            return $this->___callPlugins('getCacheTags', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCacheLifetime($lifetime)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCacheLifetime');
        if (!$pluginInfo) {
            return parent::setCacheLifetime($lifetime);
        } else {
            return $this->___callPlugins('setCacheLifetime', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheLifetime()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheLifetime');
        if (!$pluginInfo) {
            return parent::getCacheLifetime();
        } else {
            return $this->___callPlugins('getCacheLifetime', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCacheChecksum($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCacheChecksum');
        if (!$pluginInfo) {
            return parent::setCacheChecksum($data);
        } else {
            return $this->___callPlugins('setCacheChecksum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateCacheChecksum($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateCacheChecksum');
        if (!$pluginInfo) {
            return parent::updateCacheChecksum($data);
        } else {
            return $this->___callPlugins('updateCacheChecksum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheChecksum()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheChecksum');
        if (!$pluginInfo) {
            return parent::getCacheChecksum();
        } else {
            return $this->___callPlugins('getCacheChecksum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheChecksumId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheChecksumId');
        if (!$pluginInfo) {
            return parent::getCacheChecksumId();
        } else {
            return $this->___callPlugins('getCacheChecksumId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchCacheChecksum()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchCacheChecksum');
        if (!$pluginInfo) {
            return parent::fetchCacheChecksum();
        } else {
            return $this->___callPlugins('fetchCacheChecksum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateCacheChecksum()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateCacheChecksum');
        if (!$pluginInfo) {
            return parent::validateCacheChecksum();
        } else {
            return $this->___callPlugins('validateCacheChecksum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadCache');
        if (!$pluginInfo) {
            return parent::loadCache();
        } else {
            return $this->___callPlugins('loadCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveCache($tags = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveCache');
        if (!$pluginInfo) {
            return parent::saveCache($tags);
        } else {
            return $this->___callPlugins('saveCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getXmlString()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getXmlString');
        if (!$pluginInfo) {
            return parent::getXmlString();
        } else {
            return $this->___callPlugins('getXmlString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeCache');
        if (!$pluginInfo) {
            return parent::removeCache();
        } else {
            return $this->___callPlugins('removeCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadFile($filePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadFile');
        if (!$pluginInfo) {
            return parent::loadFile($filePath);
        } else {
            return $this->___callPlugins('loadFile', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadString($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadString');
        if (!$pluginInfo) {
            return parent::loadString($string);
        } else {
            return $this->___callPlugins('loadString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadDom(\DOMNode $dom)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadDom');
        if (!$pluginInfo) {
            return parent::loadDom($dom);
        } else {
            return $this->___callPlugins('loadDom', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setNode($path, $value, $overwrite = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNode');
        if (!$pluginInfo) {
            return parent::setNode($path, $value, $overwrite);
        } else {
            return $this->___callPlugins('setNode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function applyExtends()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'applyExtends');
        if (!$pluginInfo) {
            return parent::applyExtends();
        } else {
            return $this->___callPlugins('applyExtends', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processFileData($text)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processFileData');
        if (!$pluginInfo) {
            return parent::processFileData($text);
        } else {
            return $this->___callPlugins('processFileData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function extend(\Magento\Framework\Simplexml\Config $config, $overwrite = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'extend');
        if (!$pluginInfo) {
            return parent::extend($config, $overwrite);
        } else {
            return $this->___callPlugins('extend', func_get_args(), $pluginInfo);
        }
    }
}
