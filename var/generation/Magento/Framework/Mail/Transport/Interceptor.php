<?php
namespace Magento\Framework\Mail\Transport;

/**
 * Interceptor class for @see \Magento\Framework\Mail\Transport
 */
class Interceptor extends \Magento\Framework\Mail\Transport implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mail\MessageInterface $message, $parameters = null)
    {
        $this->___init();
        parent::__construct($message, $parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function sendMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendMessage');
        if (!$pluginInfo) {
            return parent::sendMessage();
        } else {
            return $this->___callPlugins('sendMessage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function _sendMail()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_sendMail');
        if (!$pluginInfo) {
            return parent::_sendMail();
        } else {
            return $this->___callPlugins('_sendMail', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function _handleMailErrors($errno, $errstr, $errfile = null, $errline = null, array $errcontext = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_handleMailErrors');
        if (!$pluginInfo) {
            return parent::_handleMailErrors($errno, $errstr, $errfile, $errline, $errcontext);
        } else {
            return $this->___callPlugins('_handleMailErrors', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function send(\Zend_Mail $mail)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'send');
        if (!$pluginInfo) {
            return parent::send($mail);
        } else {
            return $this->___callPlugins('send', func_get_args(), $pluginInfo);
        }
    }
}
