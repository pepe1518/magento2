<?php
namespace Magento\Framework\Webapi\Rest\Response;

/**
 * Proxy class for @see \Magento\Framework\Webapi\Rest\Response
 */
class Proxy extends \Magento\Framework\Webapi\Rest\Response
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Magento\Framework\Webapi\Rest\Response
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\Webapi\\Rest\\Response', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return array('_subject', '_isShared');
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Magento\Framework\Webapi\Rest\Response
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function sendResponse()
    {
        return $this->_getSubject()->sendResponse();
    }

    /**
     * {@inheritdoc}
     */
    public function prepareResponse($outputData = null)
    {
        return $this->_getSubject()->prepareResponse($outputData);
    }

    /**
     * {@inheritdoc}
     */
    public function setException($e)
    {
        return $this->_getSubject()->setException($e);
    }

    /**
     * {@inheritdoc}
     */
    public function isException()
    {
        return $this->_getSubject()->isException();
    }

    /**
     * {@inheritdoc}
     */
    public function getException()
    {
        return $this->_getSubject()->getException();
    }

    /**
     * {@inheritdoc}
     */
    public function hasExceptionOfType($type)
    {
        return $this->_getSubject()->hasExceptionOfType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function setMimeType($mimeType)
    {
        return $this->_getSubject()->setMimeType($mimeType);
    }

    /**
     * {@inheritdoc}
     */
    public function addMessage($message, $code, $params = array(), $type = 'error')
    {
        return $this->_getSubject()->addMessage($message, $code, $params, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function hasMessages()
    {
        return $this->_getSubject()->hasMessages();
    }

    /**
     * {@inheritdoc}
     */
    public function getMessages()
    {
        return $this->_getSubject()->getMessages();
    }

    /**
     * {@inheritdoc}
     */
    public function clearMessages()
    {
        return $this->_getSubject()->clearMessages();
    }

    /**
     * {@inheritdoc}
     */
    public function getHeader($name)
    {
        return $this->_getSubject()->getHeader($name);
    }

    /**
     * {@inheritdoc}
     */
    public function appendBody($value)
    {
        return $this->_getSubject()->appendBody($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($value)
    {
        return $this->_getSubject()->setBody($value);
    }

    /**
     * {@inheritdoc}
     */
    public function clearBody()
    {
        return $this->_getSubject()->clearBody();
    }

    /**
     * {@inheritdoc}
     */
    public function setHeader($name, $value, $replace = false)
    {
        return $this->_getSubject()->setHeader($name, $value, $replace);
    }

    /**
     * {@inheritdoc}
     */
    public function clearHeader($name)
    {
        return $this->_getSubject()->clearHeader($name);
    }

    /**
     * {@inheritdoc}
     */
    public function clearHeaders()
    {
        return $this->_getSubject()->clearHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function setRedirect($url, $code = 302)
    {
        return $this->_getSubject()->setRedirect($url, $code);
    }

    /**
     * {@inheritdoc}
     */
    public function setHttpResponseCode($code)
    {
        return $this->_getSubject()->setHttpResponseCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatusHeader($httpCode, $version = null, $phrase = null)
    {
        return $this->_getSubject()->setStatusHeader($httpCode, $version, $phrase);
    }

    /**
     * {@inheritdoc}
     */
    public function getHttpResponseCode()
    {
        return $this->_getSubject()->getHttpResponseCode();
    }

    /**
     * {@inheritdoc}
     */
    public function isRedirect()
    {
        return $this->_getSubject()->isRedirect();
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        return $this->_getSubject()->getVersion();
    }

    /**
     * {@inheritdoc}
     */
    public function headersSent()
    {
        return $this->_getSubject()->headersSent();
    }

    /**
     * {@inheritdoc}
     */
    public function contentSent()
    {
        return $this->_getSubject()->contentSent();
    }

    /**
     * {@inheritdoc}
     */
    public function sendHeaders()
    {
        return $this->_getSubject()->sendHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function sendContent()
    {
        return $this->_getSubject()->sendContent();
    }

    /**
     * {@inheritdoc}
     */
    public function send()
    {
        return $this->_getSubject()->send();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookie()
    {
        return $this->_getSubject()->getCookie();
    }

    /**
     * {@inheritdoc}
     */
    public function setStatusCode($code)
    {
        return $this->_getSubject()->setStatusCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusCode()
    {
        return $this->_getSubject()->getStatusCode();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomStatusCode($code)
    {
        return $this->_getSubject()->setCustomStatusCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function setReasonPhrase($reasonPhrase)
    {
        return $this->_getSubject()->setReasonPhrase($reasonPhrase);
    }

    /**
     * {@inheritdoc}
     */
    public function getReasonPhrase()
    {
        return $this->_getSubject()->getReasonPhrase();
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        return $this->_getSubject()->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function isClientError()
    {
        return $this->_getSubject()->isClientError();
    }

    /**
     * {@inheritdoc}
     */
    public function isForbidden()
    {
        return $this->_getSubject()->isForbidden();
    }

    /**
     * {@inheritdoc}
     */
    public function isInformational()
    {
        return $this->_getSubject()->isInformational();
    }

    /**
     * {@inheritdoc}
     */
    public function isNotFound()
    {
        return $this->_getSubject()->isNotFound();
    }

    /**
     * {@inheritdoc}
     */
    public function isOk()
    {
        return $this->_getSubject()->isOk();
    }

    /**
     * {@inheritdoc}
     */
    public function isServerError()
    {
        return $this->_getSubject()->isServerError();
    }

    /**
     * {@inheritdoc}
     */
    public function isSuccess()
    {
        return $this->_getSubject()->isSuccess();
    }

    /**
     * {@inheritdoc}
     */
    public function renderStatusLine()
    {
        return $this->_getSubject()->renderStatusLine();
    }

    /**
     * {@inheritdoc}
     */
    public function toString()
    {
        return $this->_getSubject()->toString();
    }

    /**
     * {@inheritdoc}
     */
    public function setVersion($version)
    {
        return $this->_getSubject()->setVersion($version);
    }

    /**
     * {@inheritdoc}
     */
    public function setHeaders(\Zend\Http\Headers $headers)
    {
        return $this->_getSubject()->setHeaders($headers);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        return $this->_getSubject()->getHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->_getSubject()->__toString();
    }

    /**
     * {@inheritdoc}
     */
    public function setMetadata($spec, $value = null)
    {
        return $this->_getSubject()->setMetadata($spec, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata($key = null, $default = null)
    {
        return $this->_getSubject()->getMetadata($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setContent($value)
    {
        return $this->_getSubject()->setContent($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return $this->_getSubject()->getContent();
    }
}
