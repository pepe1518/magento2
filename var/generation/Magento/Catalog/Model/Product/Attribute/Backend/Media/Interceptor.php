<?php
namespace Magento\Catalog\Model\Product\Attribute\Backend\Media;

/**
 * Interceptor class for @see
 * \Magento\Catalog\Model\Product\Attribute\Backend\Media
 */
class Interceptor extends \Magento\Catalog\Model\Product\Attribute\Backend\Media implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\ProductFactory $productFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Catalog\Model\Product\Media\Config $mediaConfig, \Magento\Framework\Filesystem $filesystem, \Magento\Catalog\Model\ResourceModel\Product\Attribute\Backend\Media $resourceProductAttribute)
    {
        $this->___init();
        parent::__construct($productFactory, $eventManager, $fileStorageDb, $jsonHelper, $mediaConfig, $filesystem, $resourceProductAttribute);
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        if (!$pluginInfo) {
            return parent::afterLoad($object);
        } else {
            return $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        if (!$pluginInfo) {
            return parent::beforeSave($object);
        } else {
            return $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave($object);
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($object);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addImage(\Magento\Catalog\Model\Product $product, $file, $mediaAttribute = null, $move = false, $exclude = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addImage');
        if (!$pluginInfo) {
            return parent::addImage($product, $file, $mediaAttribute, $move, $exclude);
        } else {
            return $this->___callPlugins('addImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateImage(\Magento\Catalog\Model\Product $product, $file, $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateImage');
        if (!$pluginInfo) {
            return parent::updateImage($product, $file, $data);
        } else {
            return $this->___callPlugins('updateImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeImage(\Magento\Catalog\Model\Product $product, $file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeImage');
        if (!$pluginInfo) {
            return parent::removeImage($product, $file);
        } else {
            return $this->___callPlugins('removeImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImage(\Magento\Catalog\Model\Product $product, $file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $file);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clearMediaAttribute(\Magento\Catalog\Model\Product $product, $mediaAttribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearMediaAttribute');
        if (!$pluginInfo) {
            return parent::clearMediaAttribute($product, $mediaAttribute);
        } else {
            return $this->___callPlugins('clearMediaAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMediaAttribute(\Magento\Catalog\Model\Product $product, $mediaAttribute, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMediaAttribute');
        if (!$pluginInfo) {
            return parent::setMediaAttribute($product, $mediaAttribute, $value);
        } else {
            return $this->___callPlugins('setMediaAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function duplicateImageFromTmp($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'duplicateImageFromTmp');
        if (!$pluginInfo) {
            return parent::duplicateImageFromTmp($file);
        } else {
            return $this->___callPlugins('duplicateImageFromTmp', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAffectedFields($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAffectedFields');
        if (!$pluginInfo) {
            return parent::getAffectedFields($object);
        } else {
            return $this->___callPlugins('getAffectedFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isScalar()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScalar');
        if (!$pluginInfo) {
            return parent::isScalar();
        } else {
            return $this->___callPlugins('isScalar', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        if (!$pluginInfo) {
            return parent::setAttribute($attribute);
        } else {
            return $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        if (!$pluginInfo) {
            return parent::getAttribute();
        } else {
            return $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo);
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
    public function isStatic()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isStatic');
        if (!$pluginInfo) {
            return parent::isStatic();
        } else {
            return $this->___callPlugins('isStatic', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        if (!$pluginInfo) {
            return parent::getTable();
        } else {
            return $this->___callPlugins('getTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityIdField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityIdField');
        if (!$pluginInfo) {
            return parent::getEntityIdField();
        } else {
            return $this->___callPlugins('getEntityIdField', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setValueId($valueId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setValueId');
        if (!$pluginInfo) {
            return parent::setValueId($valueId);
        } else {
            return $this->___callPlugins('setValueId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityValueId($entity, $valueId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityValueId');
        if (!$pluginInfo) {
            return parent::setEntityValueId($entity, $valueId);
        } else {
            return $this->___callPlugins('setEntityValueId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValueId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueId');
        if (!$pluginInfo) {
            return parent::getValueId();
        } else {
            return $this->___callPlugins('getValueId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityValueId($entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityValueId');
        if (!$pluginInfo) {
            return parent::getEntityValueId($entity);
        } else {
            return $this->___callPlugins('getEntityValueId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultValue');
        if (!$pluginInfo) {
            return parent::getDefaultValue();
        } else {
            return $this->___callPlugins('getDefaultValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        if (!$pluginInfo) {
            return parent::beforeDelete($object);
        } else {
            return $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        if (!$pluginInfo) {
            return parent::afterDelete($object);
        } else {
            return $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo);
        }
    }
}
