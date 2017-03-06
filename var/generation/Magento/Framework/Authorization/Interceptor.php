<?php
namespace Magento\Framework\Authorization;

/**
 * Interceptor class for @see \Magento\Framework\Authorization
 */
class Interceptor extends \Magento\Framework\Authorization implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Authorization\PolicyInterface $aclPolicy, \Magento\Framework\Authorization\RoleLocatorInterface $roleLocator)
    {
        $this->___init();
        parent::__construct($aclPolicy, $roleLocator);
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed($resource, $privilege = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowed');
        if (!$pluginInfo) {
            return parent::isAllowed($resource, $privilege);
        } else {
            return $this->___callPlugins('isAllowed', func_get_args(), $pluginInfo);
        }
    }
}
