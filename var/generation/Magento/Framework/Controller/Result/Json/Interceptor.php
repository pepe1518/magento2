<?php
namespace Magento\Framework\Controller\Result\Json;

/**
 * Interceptor class for @see \Magento\Framework\Controller\Result\Json
 */
class Interceptor extends \Magento\Framework\Controller\Result\Json implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Translate\InlineInterface $translateInline)
    {
        $this->___init();
        parent::__construct($translateInline);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($data, $cycleCheck = false, $options = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($data, $cycleCheck, $options);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setJsonData($jsonData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setJsonData');
        if (!$pluginInfo) {
            return parent::setJsonData($jsonData);
        } else {
            return $this->___callPlugins('setJsonData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHttpResponseCode($httpCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHttpResponseCode');
        if (!$pluginInfo) {
            return parent::setHttpResponseCode($httpCode);
        } else {
            return $this->___callPlugins('setHttpResponseCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHeader($name, $value, $replace = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHeader');
        if (!$pluginInfo) {
            return parent::setHeader($name, $value, $replace);
        } else {
            return $this->___callPlugins('setHeader', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStatusHeader($httpCode, $version = null, $phrase = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStatusHeader');
        if (!$pluginInfo) {
            return parent::setStatusHeader($httpCode, $version, $phrase);
        } else {
            return $this->___callPlugins('setStatusHeader', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderResult(\Magento\Framework\App\ResponseInterface $response)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderResult');
        if (!$pluginInfo) {
            return parent::renderResult($response);
        } else {
            return $this->___callPlugins('renderResult', func_get_args(), $pluginInfo);
        }
    }
}
