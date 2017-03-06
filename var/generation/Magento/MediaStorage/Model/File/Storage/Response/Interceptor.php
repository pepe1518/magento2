<?php
namespace Magento\MediaStorage\Model\File\Storage\Response;

/**
 * Interceptor class for @see \Magento\MediaStorage\Model\File\Storage\Response
 */
class Interceptor extends \Magento\MediaStorage\Model\File\Storage\Response implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\Http\Context $context, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Framework\File\Transfer\Adapter\Http $transferAdapter)
    {
        $this->___init();
        parent::__construct($request, $cookieManager, $cookieMetadataFactory, $context, $dateTime, $transferAdapter);
    }

    /**
     * {@inheritdoc}
     */
    public function sendResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendResponse');
        if (!$pluginInfo) {
            return parent::sendResponse();
        } else {
            return $this->___callPlugins('sendResponse', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFilePath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFilePath');
        if (!$pluginInfo) {
            return parent::setFilePath($path);
        } else {
            return $this->___callPlugins('setFilePath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setXFrameOptions($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setXFrameOptions');
        if (!$pluginInfo) {
            return parent::setXFrameOptions($value);
        } else {
            return $this->___callPlugins('setXFrameOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function sendVary()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendVary');
        if (!$pluginInfo) {
            return parent::sendVary();
        } else {
            return $this->___callPlugins('sendVary', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPublicHeaders($ttl)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPublicHeaders');
        if (!$pluginInfo) {
            return parent::setPublicHeaders($ttl);
        } else {
            return $this->___callPlugins('setPublicHeaders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPrivateHeaders($ttl)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPrivateHeaders');
        if (!$pluginInfo) {
            return parent::setPrivateHeaders($ttl);
        } else {
            return $this->___callPlugins('setPrivateHeaders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setNoCacheHeaders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNoCacheHeaders');
        if (!$pluginInfo) {
            return parent::setNoCacheHeaders();
        } else {
            return $this->___callPlugins('setNoCacheHeaders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function representJson($content)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'representJson');
        if (!$pluginInfo) {
            return parent::representJson($content);
        } else {
            return $this->___callPlugins('representJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHeader($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHeader');
        if (!$pluginInfo) {
            return parent::getHeader($name);
        } else {
            return $this->___callPlugins('getHeader', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function appendBody($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'appendBody');
        if (!$pluginInfo) {
            return parent::appendBody($value);
        } else {
            return $this->___callPlugins('appendBody', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBody');
        if (!$pluginInfo) {
            return parent::setBody($value);
        } else {
            return $this->___callPlugins('setBody', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clearBody()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearBody');
        if (!$pluginInfo) {
            return parent::clearBody();
        } else {
            return $this->___callPlugins('clearBody', func_get_args(), $pluginInfo);
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
    public function clearHeader($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearHeader');
        if (!$pluginInfo) {
            return parent::clearHeader($name);
        } else {
            return $this->___callPlugins('clearHeader', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clearHeaders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearHeaders');
        if (!$pluginInfo) {
            return parent::clearHeaders();
        } else {
            return $this->___callPlugins('clearHeaders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setRedirect($url, $code = 302)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRedirect');
        if (!$pluginInfo) {
            return parent::setRedirect($url, $code);
        } else {
            return $this->___callPlugins('setRedirect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHttpResponseCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHttpResponseCode');
        if (!$pluginInfo) {
            return parent::setHttpResponseCode($code);
        } else {
            return $this->___callPlugins('setHttpResponseCode', func_get_args(), $pluginInfo);
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
    public function getHttpResponseCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHttpResponseCode');
        if (!$pluginInfo) {
            return parent::getHttpResponseCode();
        } else {
            return $this->___callPlugins('getHttpResponseCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isRedirect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRedirect');
        if (!$pluginInfo) {
            return parent::isRedirect();
        } else {
            return $this->___callPlugins('isRedirect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVersion');
        if (!$pluginInfo) {
            return parent::getVersion();
        } else {
            return $this->___callPlugins('getVersion', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function headersSent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'headersSent');
        if (!$pluginInfo) {
            return parent::headersSent();
        } else {
            return $this->___callPlugins('headersSent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function contentSent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'contentSent');
        if (!$pluginInfo) {
            return parent::contentSent();
        } else {
            return $this->___callPlugins('contentSent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function sendHeaders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendHeaders');
        if (!$pluginInfo) {
            return parent::sendHeaders();
        } else {
            return $this->___callPlugins('sendHeaders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function sendContent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendContent');
        if (!$pluginInfo) {
            return parent::sendContent();
        } else {
            return $this->___callPlugins('sendContent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function send()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'send');
        if (!$pluginInfo) {
            return parent::send();
        } else {
            return $this->___callPlugins('send', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookie()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookie');
        if (!$pluginInfo) {
            return parent::getCookie();
        } else {
            return $this->___callPlugins('getCookie', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStatusCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStatusCode');
        if (!$pluginInfo) {
            return parent::setStatusCode($code);
        } else {
            return $this->___callPlugins('setStatusCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatusCode');
        if (!$pluginInfo) {
            return parent::getStatusCode();
        } else {
            return $this->___callPlugins('getStatusCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomStatusCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomStatusCode');
        if (!$pluginInfo) {
            return parent::setCustomStatusCode($code);
        } else {
            return $this->___callPlugins('setCustomStatusCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setReasonPhrase($reasonPhrase)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setReasonPhrase');
        if (!$pluginInfo) {
            return parent::setReasonPhrase($reasonPhrase);
        } else {
            return $this->___callPlugins('setReasonPhrase', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReasonPhrase()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReasonPhrase');
        if (!$pluginInfo) {
            return parent::getReasonPhrase();
        } else {
            return $this->___callPlugins('getReasonPhrase', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBody');
        if (!$pluginInfo) {
            return parent::getBody();
        } else {
            return $this->___callPlugins('getBody', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isClientError()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isClientError');
        if (!$pluginInfo) {
            return parent::isClientError();
        } else {
            return $this->___callPlugins('isClientError', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isForbidden()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isForbidden');
        if (!$pluginInfo) {
            return parent::isForbidden();
        } else {
            return $this->___callPlugins('isForbidden', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInformational()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInformational');
        if (!$pluginInfo) {
            return parent::isInformational();
        } else {
            return $this->___callPlugins('isInformational', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isNotFound()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isNotFound');
        if (!$pluginInfo) {
            return parent::isNotFound();
        } else {
            return $this->___callPlugins('isNotFound', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOk()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOk');
        if (!$pluginInfo) {
            return parent::isOk();
        } else {
            return $this->___callPlugins('isOk', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isServerError()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isServerError');
        if (!$pluginInfo) {
            return parent::isServerError();
        } else {
            return $this->___callPlugins('isServerError', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSuccess()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSuccess');
        if (!$pluginInfo) {
            return parent::isSuccess();
        } else {
            return $this->___callPlugins('isSuccess', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderStatusLine()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderStatusLine');
        if (!$pluginInfo) {
            return parent::renderStatusLine();
        } else {
            return $this->___callPlugins('renderStatusLine', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString();
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setVersion($version)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVersion');
        if (!$pluginInfo) {
            return parent::setVersion($version);
        } else {
            return $this->___callPlugins('setVersion', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHeaders(\Zend\Http\Headers $headers)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHeaders');
        if (!$pluginInfo) {
            return parent::setHeaders($headers);
        } else {
            return $this->___callPlugins('setHeaders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHeaders');
        if (!$pluginInfo) {
            return parent::getHeaders();
        } else {
            return $this->___callPlugins('getHeaders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__toString');
        if (!$pluginInfo) {
            return parent::__toString();
        } else {
            return $this->___callPlugins('__toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMetadata($spec, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMetadata');
        if (!$pluginInfo) {
            return parent::setMetadata($spec, $value);
        } else {
            return $this->___callPlugins('setMetadata', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata($key = null, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMetadata');
        if (!$pluginInfo) {
            return parent::getMetadata($key, $default);
        } else {
            return $this->___callPlugins('getMetadata', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setContent($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setContent');
        if (!$pluginInfo) {
            return parent::setContent($value);
        } else {
            return $this->___callPlugins('setContent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContent');
        if (!$pluginInfo) {
            return parent::getContent();
        } else {
            return $this->___callPlugins('getContent', func_get_args(), $pluginInfo);
        }
    }
}
