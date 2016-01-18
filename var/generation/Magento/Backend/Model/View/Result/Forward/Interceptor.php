<?php
namespace Magento\Backend\Model\View\Result\Forward;

/**
 * Interceptor class for @see \Magento\Backend\Model\View\Result\Forward
 */
class Interceptor extends \Magento\Backend\Model\View\Result\Forward implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Backend\Model\Session $session, \Magento\Framework\App\ActionFlag $actionFlag)
    {
        $this->___init();
        parent::__construct($request, $session, $actionFlag);
    }

    /**
     * {@inheritdoc}
     */
    public function forward($action)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'forward');
        if (!$pluginInfo) {
            return parent::forward($action);
        } else {
            return $this->___callPlugins('forward', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setModule($module)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setModule');
        if (!$pluginInfo) {
            return parent::setModule($module);
        } else {
            return $this->___callPlugins('setModule', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setController($controller)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setController');
        if (!$pluginInfo) {
            return parent::setController($controller);
        } else {
            return $this->___callPlugins('setController', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setParams(array $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParams');
        if (!$pluginInfo) {
            return parent::setParams($params);
        } else {
            return $this->___callPlugins('setParams', func_get_args(), $pluginInfo);
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
