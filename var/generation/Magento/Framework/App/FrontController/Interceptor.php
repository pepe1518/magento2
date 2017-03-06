<?php
namespace Magento\Framework\App\FrontController;

/**
 * Interceptor class for @see \Magento\Framework\App\FrontController
 */
class Interceptor extends \Magento\Framework\App\FrontController implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RouterList $routerList, \Magento\Framework\App\Response\Http $response)
    {
        $this->___init();
        parent::__construct($routerList, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
