<?php
namespace Magento\Framework\App\Request\Http;

/**
 * Proxy class for @see \Magento\Framework\App\Request\Http
 */
class Proxy extends \Magento\Framework\App\Request\Http
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
     * @var \Magento\Framework\App\Request\Http
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\App\\Request\\Http', $shared = true)
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
     * @return \Magento\Framework\App\Request\Http
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
    public function getOriginalPathInfo()
    {
        return $this->_getSubject()->getOriginalPathInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function setPathInfo($pathInfo = null)
    {
        return $this->_getSubject()->setPathInfo($pathInfo);
    }

    /**
     * {@inheritdoc}
     */
    public function isDirectAccessFrontendName($code)
    {
        return $this->_getSubject()->isDirectAccessFrontendName($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath()
    {
        return $this->_getSubject()->getBasePath();
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontName()
    {
        return $this->_getSubject()->getFrontName();
    }

    /**
     * {@inheritdoc}
     */
    public function setRouteName($route)
    {
        return $this->_getSubject()->setRouteName($route);
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteName()
    {
        return $this->_getSubject()->getRouteName();
    }

    /**
     * {@inheritdoc}
     */
    public function setControllerModule($module)
    {
        return $this->_getSubject()->setControllerModule($module);
    }

    /**
     * {@inheritdoc}
     */
    public function getControllerModule()
    {
        return $this->_getSubject()->getControllerModule();
    }

    /**
     * {@inheritdoc}
     */
    public function initForward()
    {
        return $this->_getSubject()->initForward();
    }

    /**
     * {@inheritdoc}
     */
    public function getBeforeForwardInfo($name = null)
    {
        return $this->_getSubject()->getBeforeForwardInfo($name);
    }

    /**
     * {@inheritdoc}
     */
    public function isAjax()
    {
        return $this->_getSubject()->isAjax();
    }

    /**
     * {@inheritdoc}
     */
    public function getDistroBaseUrl()
    {
        return $this->_getSubject()->getDistroBaseUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getFullActionName($delimiter = '_')
    {
        return $this->_getSubject()->getFullActionName($delimiter);
    }

    /**
     * {@inheritdoc}
     */
    public function isSecure()
    {
        return $this->_getSubject()->isSecure();
    }

    /**
     * {@inheritdoc}
     */
    public function isSafeMethod()
    {
        return $this->_getSubject()->isSafeMethod();
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        return $this->_getSubject()->getModuleName();
    }

    /**
     * {@inheritdoc}
     */
    public function setModuleName($value)
    {
        return $this->_getSubject()->setModuleName($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getControllerName()
    {
        return $this->_getSubject()->getControllerName();
    }

    /**
     * {@inheritdoc}
     */
    public function setControllerName($value)
    {
        return $this->_getSubject()->setControllerName($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionName()
    {
        return $this->_getSubject()->getActionName();
    }

    /**
     * {@inheritdoc}
     */
    public function setActionName($value)
    {
        return $this->_getSubject()->setActionName($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getPathInfo()
    {
        return $this->_getSubject()->getPathInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestString()
    {
        return $this->_getSubject()->getRequestString();
    }

    /**
     * {@inheritdoc}
     */
    public function getAlias($name)
    {
        return $this->_getSubject()->getAlias($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setAlias($name, $target)
    {
        return $this->_getSubject()->setAlias($name, $target);
    }

    /**
     * {@inheritdoc}
     */
    public function getParam($key, $default = null)
    {
        return $this->_getSubject()->getParam($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setParam($key, $value)
    {
        return $this->_getSubject()->setParam($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getParams()
    {
        return $this->_getSubject()->getParams();
    }

    /**
     * {@inheritdoc}
     */
    public function setParams(array $array)
    {
        return $this->_getSubject()->setParams($array);
    }

    /**
     * {@inheritdoc}
     */
    public function clearParams()
    {
        return $this->_getSubject()->clearParams();
    }

    /**
     * {@inheritdoc}
     */
    public function getScheme()
    {
        return $this->_getSubject()->getScheme();
    }

    /**
     * {@inheritdoc}
     */
    public function setDispatched($flag = true)
    {
        return $this->_getSubject()->setDispatched($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function isDispatched()
    {
        return $this->_getSubject()->isDispatched();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookie($name = null, $default = null)
    {
        return $this->_getSubject()->getCookie($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getServerValue($name = null, $default = null)
    {
        return $this->_getSubject()->getServerValue($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getQueryValue($name = null, $default = null)
    {
        return $this->_getSubject()->getQueryValue($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setQueryValue($name, $value = null)
    {
        return $this->_getSubject()->setQueryValue($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getPostValue($name = null, $default = null)
    {
        return $this->_getSubject()->getPostValue($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setPostValue($name, $value = null)
    {
        return $this->_getSubject()->setPostValue($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function __get($key)
    {
        return $this->_getSubject()->__get($key);
    }

    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
        return $this->_getSubject()->get($key);
    }

    /**
     * {@inheritdoc}
     */
    public function __isset($key)
    {
        return $this->_getSubject()->__isset($key);
    }

    /**
     * {@inheritdoc}
     */
    public function has($key)
    {
        return $this->_getSubject()->has($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeader($name, $default = false)
    {
        return $this->_getSubject()->getHeader($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getHttpHost($trimPort = true)
    {
        return $this->_getSubject()->getHttpHost($trimPort);
    }

    /**
     * {@inheritdoc}
     */
    public function getClientIp($checkProxy = true)
    {
        return $this->_getSubject()->getClientIp($checkProxy);
    }

    /**
     * {@inheritdoc}
     */
    public function getUserParams()
    {
        return $this->_getSubject()->getUserParams();
    }

    /**
     * {@inheritdoc}
     */
    public function getUserParam($key, $default = null)
    {
        return $this->_getSubject()->getUserParam($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setRequestUri($requestUri = null)
    {
        return $this->_getSubject()->setRequestUri($requestUri);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl()
    {
        return $this->_getSubject()->getBaseUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function isForwarded()
    {
        return $this->_getSubject()->isForwarded();
    }

    /**
     * {@inheritdoc}
     */
    public function setForwarded($forwarded)
    {
        return $this->_getSubject()->setForwarded($forwarded);
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return $this->_getSubject()->getContent();
    }

    /**
     * {@inheritdoc}
     */
    public function setCookies($cookie)
    {
        return $this->_getSubject()->setCookies($cookie);
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestUri()
    {
        return $this->_getSubject()->getRequestUri();
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseUrl($baseUrl)
    {
        return $this->_getSubject()->setBaseUrl($baseUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function setBasePath($basePath)
    {
        return $this->_getSubject()->setBasePath($basePath);
    }

    /**
     * {@inheritdoc}
     */
    public function setServer(\Zend\Stdlib\ParametersInterface $server)
    {
        return $this->_getSubject()->setServer($server);
    }

    /**
     * {@inheritdoc}
     */
    public function getServer($name = null, $default = null)
    {
        return $this->_getSubject()->getServer($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setEnv(\Zend\Stdlib\ParametersInterface $env)
    {
        return $this->_getSubject()->setEnv($env);
    }

    /**
     * {@inheritdoc}
     */
    public function getEnv($name = null, $default = null)
    {
        return $this->_getSubject()->getEnv($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setMethod($method)
    {
        return $this->_getSubject()->setMethod($method);
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return $this->_getSubject()->getMethod();
    }

    /**
     * {@inheritdoc}
     */
    public function setUri($uri)
    {
        return $this->_getSubject()->setUri($uri);
    }

    /**
     * {@inheritdoc}
     */
    public function getUri()
    {
        return $this->_getSubject()->getUri();
    }

    /**
     * {@inheritdoc}
     */
    public function getUriString()
    {
        return $this->_getSubject()->getUriString();
    }

    /**
     * {@inheritdoc}
     */
    public function setQuery(\Zend\Stdlib\ParametersInterface $query)
    {
        return $this->_getSubject()->setQuery($query);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuery($name = null, $default = null)
    {
        return $this->_getSubject()->getQuery($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setPost(\Zend\Stdlib\ParametersInterface $post)
    {
        return $this->_getSubject()->setPost($post);
    }

    /**
     * {@inheritdoc}
     */
    public function getPost($name = null, $default = null)
    {
        return $this->_getSubject()->getPost($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setFiles(\Zend\Stdlib\ParametersInterface $files)
    {
        return $this->_getSubject()->setFiles($files);
    }

    /**
     * {@inheritdoc}
     */
    public function getFiles($name = null, $default = null)
    {
        return $this->_getSubject()->getFiles($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders($name = null, $default = false)
    {
        return $this->_getSubject()->getHeaders($name, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function isOptions()
    {
        return $this->_getSubject()->isOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function isPropFind()
    {
        return $this->_getSubject()->isPropFind();
    }

    /**
     * {@inheritdoc}
     */
    public function isGet()
    {
        return $this->_getSubject()->isGet();
    }

    /**
     * {@inheritdoc}
     */
    public function isHead()
    {
        return $this->_getSubject()->isHead();
    }

    /**
     * {@inheritdoc}
     */
    public function isPost()
    {
        return $this->_getSubject()->isPost();
    }

    /**
     * {@inheritdoc}
     */
    public function isPut()
    {
        return $this->_getSubject()->isPut();
    }

    /**
     * {@inheritdoc}
     */
    public function isDelete()
    {
        return $this->_getSubject()->isDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function isTrace()
    {
        return $this->_getSubject()->isTrace();
    }

    /**
     * {@inheritdoc}
     */
    public function isConnect()
    {
        return $this->_getSubject()->isConnect();
    }

    /**
     * {@inheritdoc}
     */
    public function isPatch()
    {
        return $this->_getSubject()->isPatch();
    }

    /**
     * {@inheritdoc}
     */
    public function isXmlHttpRequest()
    {
        return $this->_getSubject()->isXmlHttpRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function isFlashRequest()
    {
        return $this->_getSubject()->isFlashRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function renderRequestLine()
    {
        return $this->_getSubject()->renderRequestLine();
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
    public function getAllowCustomMethods()
    {
        return $this->_getSubject()->getAllowCustomMethods();
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowCustomMethods($strictMethods)
    {
        return $this->_getSubject()->setAllowCustomMethods($strictMethods);
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
    public function getVersion()
    {
        return $this->_getSubject()->getVersion();
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
}
