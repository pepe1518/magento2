<?php
namespace Magento\Backend\Model\View\Result\Redirect;

/**
 * Interceptor class for @see \Magento\Backend\Model\View\Result\Redirect
 */
class Interceptor extends \Magento\Backend\Model\View\Result\Redirect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Response\RedirectInterface $redirect, \Magento\Backend\Model\UrlInterface $urlBuilder, \Magento\Backend\Model\Session $session, \Magento\Framework\App\ActionFlag $actionFlag)
    {
        $this->___init();
        parent::__construct($redirect, $urlBuilder, $session, $actionFlag);
    }

    /**
     * {@inheritdoc}
     */
    public function setRefererOrBaseUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRefererOrBaseUrl');
        if (!$pluginInfo) {
            return parent::setRefererOrBaseUrl();
        } else {
            return $this->___callPlugins('setRefererOrBaseUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setRefererUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRefererUrl');
        if (!$pluginInfo) {
            return parent::setRefererUrl();
        } else {
            return $this->___callPlugins('setRefererUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUrl($url)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUrl');
        if (!$pluginInfo) {
            return parent::setUrl($url);
        } else {
            return $this->___callPlugins('setUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPath($path, array $params = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPath');
        if (!$pluginInfo) {
            return parent::setPath($path, $params);
        } else {
            return $this->___callPlugins('setPath', func_get_args(), $pluginInfo);
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
