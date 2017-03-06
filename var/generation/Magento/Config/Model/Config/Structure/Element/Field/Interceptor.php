<?php
namespace Magento\Config\Model\Config\Structure\Element\Field;

/**
 * Interceptor class for @see \Magento\Config\Model\Config\Structure\Element\Field
 */
class Interceptor extends \Magento\Config\Model\Config\Structure\Element\Field implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Module\Manager $moduleManager, \Magento\Config\Model\Config\BackendFactory $backendFactory, \Magento\Config\Model\Config\SourceFactory $sourceFactory, \Magento\Config\Model\Config\CommentFactory $commentFactory, \Magento\Framework\View\Element\BlockFactory $blockFactory, \Magento\Config\Model\Config\Structure\Element\Dependency\Mapper $dependencyMapper)
    {
        $this->___init();
        parent::__construct($storeManager, $moduleManager, $backendFactory, $sourceFactory, $commentFactory, $blockFactory, $dependencyMapper);
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel($labelPrefix = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLabel');
        if (!$pluginInfo) {
            return parent::getLabel($labelPrefix);
        } else {
            return $this->___callPlugins('getLabel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHint()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHint');
        if (!$pluginInfo) {
            return parent::getHint();
        } else {
            return $this->___callPlugins('getHint', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getComment($currentValue = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getComment');
        if (!$pluginInfo) {
            return parent::getComment($currentValue);
        } else {
            return $this->___callPlugins('getComment', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTooltip()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTooltip');
        if (!$pluginInfo) {
            return parent::getTooltip();
        } else {
            return $this->___callPlugins('getTooltip', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getType');
        if (!$pluginInfo) {
            return parent::getType();
        } else {
            return $this->___callPlugins('getType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredGroups($fieldPrefix = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequiredGroups');
        if (!$pluginInfo) {
            return parent::getRequiredGroups($fieldPrefix);
        } else {
            return $this->___callPlugins('getRequiredGroups', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredFields($fieldPrefix = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequiredFields');
        if (!$pluginInfo) {
            return parent::getRequiredFields($fieldPrefix);
        } else {
            return $this->___callPlugins('getRequiredFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendClass');
        if (!$pluginInfo) {
            return parent::getFrontendClass();
        } else {
            return $this->___callPlugins('getFrontendClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasBackendModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasBackendModel');
        if (!$pluginInfo) {
            return parent::hasBackendModel();
        } else {
            return $this->___callPlugins('hasBackendModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBackendModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackendModel');
        if (!$pluginInfo) {
            return parent::getBackendModel();
        } else {
            return $this->___callPlugins('getBackendModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSectionId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSectionId');
        if (!$pluginInfo) {
            return parent::getSectionId();
        } else {
            return $this->___callPlugins('getSectionId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupPath');
        if (!$pluginInfo) {
            return parent::getGroupPath();
        } else {
            return $this->___callPlugins('getGroupPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigPath');
        if (!$pluginInfo) {
            return parent::getConfigPath();
        } else {
            return $this->___callPlugins('getConfigPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function showInDefault()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'showInDefault');
        if (!$pluginInfo) {
            return parent::showInDefault();
        } else {
            return $this->___callPlugins('showInDefault', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function showInWebsite()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'showInWebsite');
        if (!$pluginInfo) {
            return parent::showInWebsite();
        } else {
            return $this->___callPlugins('showInWebsite', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function showInStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'showInStore');
        if (!$pluginInfo) {
            return parent::showInStore();
        } else {
            return $this->___callPlugins('showInStore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function populateInput($formField)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'populateInput');
        if (!$pluginInfo) {
            return parent::populateInput($formField);
        } else {
            return $this->___callPlugins('populateInput', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasValidation()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasValidation');
        if (!$pluginInfo) {
            return parent::hasValidation();
        } else {
            return $this->___callPlugins('hasValidation', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValidation()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidation');
        if (!$pluginInfo) {
            return parent::getValidation();
        } else {
            return $this->___callPlugins('getValidation', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canBeEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canBeEmpty');
        if (!$pluginInfo) {
            return parent::canBeEmpty();
        } else {
            return $this->___callPlugins('canBeEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasSourceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasSourceModel');
        if (!$pluginInfo) {
            return parent::hasSourceModel();
        } else {
            return $this->___callPlugins('hasSourceModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasOptions');
        if (!$pluginInfo) {
            return parent::hasOptions();
        } else {
            return $this->___callPlugins('hasOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        if (!$pluginInfo) {
            return parent::getOptions();
        } else {
            return $this->___callPlugins('getOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies($fieldPrefix, $storeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDependencies');
        if (!$pluginInfo) {
            return parent::getDependencies($fieldPrefix, $storeCode);
        } else {
            return $this->___callPlugins('getDependencies', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isAdvanced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAdvanced');
        if (!$pluginInfo) {
            return parent::isAdvanced();
        } else {
            return $this->___callPlugins('isAdvanced', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData(array $data, $scope)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($data, $scope);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData();
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        if (!$pluginInfo) {
            return parent::getId();
        } else {
            return $this->___callPlugins('getId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendModel');
        if (!$pluginInfo) {
            return parent::getFrontendModel();
        } else {
            return $this->___callPlugins('getFrontendModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        if (!$pluginInfo) {
            return parent::getAttribute($key);
        } else {
            return $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isVisible()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVisible');
        if (!$pluginInfo) {
            return parent::isVisible();
        } else {
            return $this->___callPlugins('isVisible', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getClass');
        if (!$pluginInfo) {
            return parent::getClass();
        } else {
            return $this->___callPlugins('getClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPath($fieldPrefix = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPath');
        if (!$pluginInfo) {
            return parent::getPath($fieldPrefix);
        } else {
            return $this->___callPlugins('getPath', func_get_args(), $pluginInfo);
        }
    }
}
