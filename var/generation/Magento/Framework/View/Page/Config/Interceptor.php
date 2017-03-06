<?php
namespace Magento\Framework\View\Page\Config;

/**
 * Interceptor class for @see \Magento\Framework\View\Page\Config
 */
class Interceptor extends \Magento\Framework\View\Page\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\View\Asset\GroupedCollection $pageAssets, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\Page\FaviconInterface $favicon, \Magento\Framework\View\Page\Title $title, \Magento\Framework\Locale\ResolverInterface $localeResolver)
    {
        $this->___init();
        parent::__construct($assetRepo, $pageAssets, $scopeConfig, $favicon, $title, $localeResolver);
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
    public function getTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTitle');
        if (!$pluginInfo) {
            return parent::getTitle();
        } else {
            return $this->___callPlugins('getTitle', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMetadata($name, $content)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMetadata');
        if (!$pluginInfo) {
            return parent::setMetadata($name, $content);
        } else {
            return $this->___callPlugins('setMetadata', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMetadata');
        if (!$pluginInfo) {
            return parent::getMetadata();
        } else {
            return $this->___callPlugins('getMetadata', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setContentType($contentType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setContentType');
        if (!$pluginInfo) {
            return parent::setContentType($contentType);
        } else {
            return $this->___callPlugins('setContentType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getContentType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContentType');
        if (!$pluginInfo) {
            return parent::getContentType();
        } else {
            return $this->___callPlugins('getContentType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMediaType($mediaType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMediaType');
        if (!$pluginInfo) {
            return parent::setMediaType($mediaType);
        } else {
            return $this->___callPlugins('setMediaType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaType');
        if (!$pluginInfo) {
            return parent::getMediaType();
        } else {
            return $this->___callPlugins('getMediaType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCharset($charset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCharset');
        if (!$pluginInfo) {
            return parent::setCharset($charset);
        } else {
            return $this->___callPlugins('setCharset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCharset()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCharset');
        if (!$pluginInfo) {
            return parent::getCharset();
        } else {
            return $this->___callPlugins('getCharset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDescription');
        if (!$pluginInfo) {
            return parent::setDescription($description);
        } else {
            return $this->___callPlugins('setDescription', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDescription');
        if (!$pluginInfo) {
            return parent::getDescription();
        } else {
            return $this->___callPlugins('getDescription', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setKeywords($keywords)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setKeywords');
        if (!$pluginInfo) {
            return parent::setKeywords($keywords);
        } else {
            return $this->___callPlugins('setKeywords', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getKeywords()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getKeywords');
        if (!$pluginInfo) {
            return parent::getKeywords();
        } else {
            return $this->___callPlugins('getKeywords', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setRobots($robots)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRobots');
        if (!$pluginInfo) {
            return parent::setRobots($robots);
        } else {
            return $this->___callPlugins('setRobots', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRobots()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRobots');
        if (!$pluginInfo) {
            return parent::getRobots();
        } else {
            return $this->___callPlugins('getRobots', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAssetCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAssetCollection');
        if (!$pluginInfo) {
            return parent::getAssetCollection();
        } else {
            return $this->___callPlugins('getAssetCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addPageAsset($file, array $properties = array(), $name = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPageAsset');
        if (!$pluginInfo) {
            return parent::addPageAsset($file, $properties, $name);
        } else {
            return $this->___callPlugins('addPageAsset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addRemotePageAsset($url, $contentType, array $properties = array(), $name = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addRemotePageAsset');
        if (!$pluginInfo) {
            return parent::addRemotePageAsset($url, $contentType, $properties, $name);
        } else {
            return $this->___callPlugins('addRemotePageAsset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addRss($title, $href)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addRss');
        if (!$pluginInfo) {
            return parent::addRss($title, $href);
        } else {
            return $this->___callPlugins('addRss', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addBodyClass($className)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBodyClass');
        if (!$pluginInfo) {
            return parent::addBodyClass($className);
        } else {
            return $this->___callPlugins('addBodyClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setElementAttribute($elementType, $attribute, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setElementAttribute');
        if (!$pluginInfo) {
            return parent::setElementAttribute($elementType, $attribute, $value);
        } else {
            return $this->___callPlugins('setElementAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getElementAttribute($elementType, $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementAttribute');
        if (!$pluginInfo) {
            return parent::getElementAttribute($elementType, $attribute);
        } else {
            return $this->___callPlugins('getElementAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getElementAttributes($elementType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementAttributes');
        if (!$pluginInfo) {
            return parent::getElementAttributes($elementType);
        } else {
            return $this->___callPlugins('getElementAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPageLayout($handle)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPageLayout');
        if (!$pluginInfo) {
            return parent::setPageLayout($handle);
        } else {
            return $this->___callPlugins('setPageLayout', func_get_args(), $pluginInfo);
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
    public function getFaviconFile()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFaviconFile');
        if (!$pluginInfo) {
            return parent::getFaviconFile();
        } else {
            return $this->___callPlugins('getFaviconFile', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultFavicon()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultFavicon');
        if (!$pluginInfo) {
            return parent::getDefaultFavicon();
        } else {
            return $this->___callPlugins('getDefaultFavicon', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIncludes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIncludes');
        if (!$pluginInfo) {
            return parent::getIncludes();
        } else {
            return $this->___callPlugins('getIncludes', func_get_args(), $pluginInfo);
        }
    }
}
