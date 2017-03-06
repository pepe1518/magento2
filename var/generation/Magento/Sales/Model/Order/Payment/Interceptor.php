<?php
namespace Magento\Sales\Model\Order\Payment;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Payment
 */
class Interceptor extends \Magento\Sales\Model\Order\Payment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Payment\Helper\Data $paymentData, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Sales\Model\Order\CreditmemoFactory $creditmemoFactory, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Sales\Api\TransactionRepositoryInterface $transactionRepository, \Magento\Sales\Model\Order\Payment\Transaction\ManagerInterface $transactionManager, \Magento\Sales\Model\Order\Payment\Transaction\BuilderInterface $transactionBuilder, \Magento\Sales\Model\Order\Payment\Processor $paymentProcessor, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $paymentData, $encryptor, $creditmemoFactory, $priceCurrency, $transactionRepository, $transactionManager, $transactionBuilder, $paymentProcessor, $orderRepository, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder(\Magento\Sales\Model\Order $order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrder');
        if (!$pluginInfo) {
            return parent::setOrder($order);
        } else {
            return $this->___callPlugins('setOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrder');
        if (!$pluginInfo) {
            return parent::getOrder();
        } else {
            return $this->___callPlugins('getOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTransactionId($transactionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTransactionId');
        if (!$pluginInfo) {
            return parent::setTransactionId($transactionId);
        } else {
            return $this->___callPlugins('setTransactionId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTransactionId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTransactionId');
        if (!$pluginInfo) {
            return parent::getTransactionId();
        } else {
            return $this->___callPlugins('getTransactionId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsTransactionClosed($isClosed)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsTransactionClosed');
        if (!$pluginInfo) {
            return parent::setIsTransactionClosed($isClosed);
        } else {
            return $this->___callPlugins('setIsTransactionClosed', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentTransactionId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentTransactionId');
        if (!$pluginInfo) {
            return parent::getParentTransactionId();
        } else {
            return $this->___callPlugins('getParentTransactionId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canCapture()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCapture');
        if (!$pluginInfo) {
            return parent::canCapture();
        } else {
            return $this->___callPlugins('canCapture', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canRefund()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRefund');
        if (!$pluginInfo) {
            return parent::canRefund();
        } else {
            return $this->___callPlugins('canRefund', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canRefundPartialPerInvoice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRefundPartialPerInvoice');
        if (!$pluginInfo) {
            return parent::canRefundPartialPerInvoice();
        } else {
            return $this->___callPlugins('canRefundPartialPerInvoice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canCapturePartial()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCapturePartial');
        if (!$pluginInfo) {
            return parent::canCapturePartial();
        } else {
            return $this->___callPlugins('canCapturePartial', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function place()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'place');
        if (!$pluginInfo) {
            return parent::place();
        } else {
            return $this->___callPlugins('place', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function capture($invoice = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'capture');
        if (!$pluginInfo) {
            return parent::capture($invoice);
        } else {
            return $this->___callPlugins('capture', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function registerCaptureNotification($amount, $skipFraudDetection = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerCaptureNotification');
        if (!$pluginInfo) {
            return parent::registerCaptureNotification($amount, $skipFraudDetection);
        } else {
            return $this->___callPlugins('registerCaptureNotification', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function registerAuthorizationNotification($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerAuthorizationNotification');
        if (!$pluginInfo) {
            return parent::registerAuthorizationNotification($amount);
        } else {
            return $this->___callPlugins('registerAuthorizationNotification', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function pay($invoice)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'pay');
        if (!$pluginInfo) {
            return parent::pay($invoice);
        } else {
            return $this->___callPlugins('pay', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function cancelInvoice($invoice)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cancelInvoice');
        if (!$pluginInfo) {
            return parent::cancelInvoice($invoice);
        } else {
            return $this->___callPlugins('cancelInvoice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canVoid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canVoid');
        if (!$pluginInfo) {
            return parent::canVoid();
        } else {
            return $this->___callPlugins('canVoid', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function void(\Magento\Framework\DataObject $document)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'void');
        if (!$pluginInfo) {
            return parent::void($document);
        } else {
            return $this->___callPlugins('void', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function registerVoidNotification($amount = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerVoidNotification');
        if (!$pluginInfo) {
            return parent::registerVoidNotification($amount);
        } else {
            return $this->___callPlugins('registerVoidNotification', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCreditmemo(\Magento\Sales\Model\Order\Creditmemo $creditmemo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCreditmemo');
        if (!$pluginInfo) {
            return parent::setCreditmemo($creditmemo);
        } else {
            return $this->___callPlugins('setCreditmemo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCreditmemo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreditmemo');
        if (!$pluginInfo) {
            return parent::getCreditmemo();
        } else {
            return $this->___callPlugins('getCreditmemo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function refund($creditmemo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'refund');
        if (!$pluginInfo) {
            return parent::refund($creditmemo);
        } else {
            return $this->___callPlugins('refund', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function registerRefundNotification($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerRefundNotification');
        if (!$pluginInfo) {
            return parent::registerRefundNotification($amount);
        } else {
            return $this->___callPlugins('registerRefundNotification', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function cancelCreditmemo($creditmemo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cancelCreditmemo');
        if (!$pluginInfo) {
            return parent::cancelCreditmemo($creditmemo);
        } else {
            return $this->___callPlugins('cancelCreditmemo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function cancel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cancel');
        if (!$pluginInfo) {
            return parent::cancel();
        } else {
            return $this->___callPlugins('cancel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canReviewPayment()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canReviewPayment');
        if (!$pluginInfo) {
            return parent::canReviewPayment();
        } else {
            return $this->___callPlugins('canReviewPayment', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canFetchTransactionInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canFetchTransactionInfo');
        if (!$pluginInfo) {
            return parent::canFetchTransactionInfo();
        } else {
            return $this->___callPlugins('canFetchTransactionInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function accept()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'accept');
        if (!$pluginInfo) {
            return parent::accept();
        } else {
            return $this->___callPlugins('accept', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deny($isOnline = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deny');
        if (!$pluginInfo) {
            return parent::deny($isOnline);
        } else {
            return $this->___callPlugins('deny', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function update($isOnline = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        if (!$pluginInfo) {
            return parent::update($isOnline);
        } else {
            return $this->___callPlugins('update', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function authorize($isOnline, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authorize');
        if (!$pluginInfo) {
            return parent::authorize($isOnline, $amount);
        } else {
            return $this->___callPlugins('authorize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addTransaction($type, $salesDocument = null, $failSafe = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTransaction');
        if (!$pluginInfo) {
            return parent::addTransaction($type, $salesDocument, $failSafe);
        } else {
            return $this->___callPlugins('addTransaction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addTransactionCommentsToOrder($transaction, $message)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTransactionCommentsToOrder');
        if (!$pluginInfo) {
            return parent::addTransactionCommentsToOrder($transaction, $message);
        } else {
            return $this->___callPlugins('addTransactionCommentsToOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function importTransactionInfo(\Magento\Sales\Model\Order\Payment\Transaction $transactionTo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importTransactionInfo');
        if (!$pluginInfo) {
            return parent::importTransactionInfo($transactionTo);
        } else {
            return $this->___callPlugins('importTransactionInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prependMessage($messagePrependTo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prependMessage');
        if (!$pluginInfo) {
            return parent::prependMessage($messagePrependTo);
        } else {
            return $this->___callPlugins('prependMessage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatAmount($amount, $asFloat = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatAmount');
        if (!$pluginInfo) {
            return parent::formatAmount($amount, $asFloat);
        } else {
            return $this->___callPlugins('formatAmount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatPrice($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatPrice');
        if (!$pluginInfo) {
            return parent::formatPrice($amount);
        } else {
            return $this->___callPlugins('formatPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorizationTransaction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAuthorizationTransaction');
        if (!$pluginInfo) {
            return parent::getAuthorizationTransaction();
        } else {
            return $this->___callPlugins('getAuthorizationTransaction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCaptureFinal($amountToCapture)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCaptureFinal');
        if (!$pluginInfo) {
            return parent::isCaptureFinal($amountToCapture);
        } else {
            return $this->___callPlugins('isCaptureFinal', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSameCurrency()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSameCurrency');
        if (!$pluginInfo) {
            return parent::isSameCurrency();
        } else {
            return $this->___callPlugins('isSameCurrency', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTransactionAdditionalInfo($key, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTransactionAdditionalInfo');
        if (!$pluginInfo) {
            return parent::setTransactionAdditionalInfo($key, $value);
        } else {
            return $this->___callPlugins('setTransactionAdditionalInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTransactionAdditionalInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTransactionAdditionalInfo');
        if (!$pluginInfo) {
            return parent::getTransactionAdditionalInfo();
        } else {
            return $this->___callPlugins('getTransactionAdditionalInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetTransactionAdditionalInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetTransactionAdditionalInfo');
        if (!$pluginInfo) {
            return parent::resetTransactionAdditionalInfo();
        } else {
            return $this->___callPlugins('resetTransactionAdditionalInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAccountStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAccountStatus');
        if (!$pluginInfo) {
            return parent::getAccountStatus();
        } else {
            return $this->___callPlugins('getAccountStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalData');
        if (!$pluginInfo) {
            return parent::getAdditionalData();
        } else {
            return $this->___callPlugins('getAdditionalData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAddressStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddressStatus');
        if (!$pluginInfo) {
            return parent::getAddressStatus();
        } else {
            return $this->___callPlugins('getAddressStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountAuthorized()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountAuthorized');
        if (!$pluginInfo) {
            return parent::getAmountAuthorized();
        } else {
            return $this->___callPlugins('getAmountAuthorized', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountCanceled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountCanceled');
        if (!$pluginInfo) {
            return parent::getAmountCanceled();
        } else {
            return $this->___callPlugins('getAmountCanceled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountOrdered()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountOrdered');
        if (!$pluginInfo) {
            return parent::getAmountOrdered();
        } else {
            return $this->___callPlugins('getAmountOrdered', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountPaid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountPaid');
        if (!$pluginInfo) {
            return parent::getAmountPaid();
        } else {
            return $this->___callPlugins('getAmountPaid', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountRefunded');
        if (!$pluginInfo) {
            return parent::getAmountRefunded();
        } else {
            return $this->___callPlugins('getAmountRefunded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAnetTransMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAnetTransMethod');
        if (!$pluginInfo) {
            return parent::getAnetTransMethod();
        } else {
            return $this->___callPlugins('getAnetTransMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountAuthorized()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountAuthorized');
        if (!$pluginInfo) {
            return parent::getBaseAmountAuthorized();
        } else {
            return $this->___callPlugins('getBaseAmountAuthorized', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountCanceled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountCanceled');
        if (!$pluginInfo) {
            return parent::getBaseAmountCanceled();
        } else {
            return $this->___callPlugins('getBaseAmountCanceled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountOrdered()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountOrdered');
        if (!$pluginInfo) {
            return parent::getBaseAmountOrdered();
        } else {
            return $this->___callPlugins('getBaseAmountOrdered', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountPaid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountPaid');
        if (!$pluginInfo) {
            return parent::getBaseAmountPaid();
        } else {
            return $this->___callPlugins('getBaseAmountPaid', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountPaidOnline()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountPaidOnline');
        if (!$pluginInfo) {
            return parent::getBaseAmountPaidOnline();
        } else {
            return $this->___callPlugins('getBaseAmountPaidOnline', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountRefunded');
        if (!$pluginInfo) {
            return parent::getBaseAmountRefunded();
        } else {
            return $this->___callPlugins('getBaseAmountRefunded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountRefundedOnline()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountRefundedOnline');
        if (!$pluginInfo) {
            return parent::getBaseAmountRefundedOnline();
        } else {
            return $this->___callPlugins('getBaseAmountRefundedOnline', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseShippingAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseShippingAmount');
        if (!$pluginInfo) {
            return parent::getBaseShippingAmount();
        } else {
            return $this->___callPlugins('getBaseShippingAmount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseShippingCaptured()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseShippingCaptured');
        if (!$pluginInfo) {
            return parent::getBaseShippingCaptured();
        } else {
            return $this->___callPlugins('getBaseShippingCaptured', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseShippingRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseShippingRefunded');
        if (!$pluginInfo) {
            return parent::getBaseShippingRefunded();
        } else {
            return $this->___callPlugins('getBaseShippingRefunded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcApproval()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcApproval');
        if (!$pluginInfo) {
            return parent::getCcApproval();
        } else {
            return $this->___callPlugins('getCcApproval', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcAvsStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcAvsStatus');
        if (!$pluginInfo) {
            return parent::getCcAvsStatus();
        } else {
            return $this->___callPlugins('getCcAvsStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcCidStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcCidStatus');
        if (!$pluginInfo) {
            return parent::getCcCidStatus();
        } else {
            return $this->___callPlugins('getCcCidStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcDebugRequestBody()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcDebugRequestBody');
        if (!$pluginInfo) {
            return parent::getCcDebugRequestBody();
        } else {
            return $this->___callPlugins('getCcDebugRequestBody', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcDebugResponseBody()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcDebugResponseBody');
        if (!$pluginInfo) {
            return parent::getCcDebugResponseBody();
        } else {
            return $this->___callPlugins('getCcDebugResponseBody', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcDebugResponseSerialized()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcDebugResponseSerialized');
        if (!$pluginInfo) {
            return parent::getCcDebugResponseSerialized();
        } else {
            return $this->___callPlugins('getCcDebugResponseSerialized', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcExpMonth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcExpMonth');
        if (!$pluginInfo) {
            return parent::getCcExpMonth();
        } else {
            return $this->___callPlugins('getCcExpMonth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcExpYear()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcExpYear');
        if (!$pluginInfo) {
            return parent::getCcExpYear();
        } else {
            return $this->___callPlugins('getCcExpYear', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcLast4()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcLast4');
        if (!$pluginInfo) {
            return parent::getCcLast4();
        } else {
            return $this->___callPlugins('getCcLast4', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcNumberEnc()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcNumberEnc');
        if (!$pluginInfo) {
            return parent::getCcNumberEnc();
        } else {
            return $this->___callPlugins('getCcNumberEnc', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcOwner()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcOwner');
        if (!$pluginInfo) {
            return parent::getCcOwner();
        } else {
            return $this->___callPlugins('getCcOwner', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcSecureVerify()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcSecureVerify');
        if (!$pluginInfo) {
            return parent::getCcSecureVerify();
        } else {
            return $this->___callPlugins('getCcSecureVerify', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcSsIssue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcSsIssue');
        if (!$pluginInfo) {
            return parent::getCcSsIssue();
        } else {
            return $this->___callPlugins('getCcSsIssue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcSsStartMonth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcSsStartMonth');
        if (!$pluginInfo) {
            return parent::getCcSsStartMonth();
        } else {
            return $this->___callPlugins('getCcSsStartMonth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcSsStartYear()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcSsStartYear');
        if (!$pluginInfo) {
            return parent::getCcSsStartYear();
        } else {
            return $this->___callPlugins('getCcSsStartYear', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcStatus');
        if (!$pluginInfo) {
            return parent::getCcStatus();
        } else {
            return $this->___callPlugins('getCcStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcStatusDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcStatusDescription');
        if (!$pluginInfo) {
            return parent::getCcStatusDescription();
        } else {
            return $this->___callPlugins('getCcStatusDescription', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcTransId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcTransId');
        if (!$pluginInfo) {
            return parent::getCcTransId();
        } else {
            return $this->___callPlugins('getCcTransId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCcType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcType');
        if (!$pluginInfo) {
            return parent::getCcType();
        } else {
            return $this->___callPlugins('getCcType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEcheckAccountName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEcheckAccountName');
        if (!$pluginInfo) {
            return parent::getEcheckAccountName();
        } else {
            return $this->___callPlugins('getEcheckAccountName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEcheckAccountType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEcheckAccountType');
        if (!$pluginInfo) {
            return parent::getEcheckAccountType();
        } else {
            return $this->___callPlugins('getEcheckAccountType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEcheckBankName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEcheckBankName');
        if (!$pluginInfo) {
            return parent::getEcheckBankName();
        } else {
            return $this->___callPlugins('getEcheckBankName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEcheckRoutingNumber()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEcheckRoutingNumber');
        if (!$pluginInfo) {
            return parent::getEcheckRoutingNumber();
        } else {
            return $this->___callPlugins('getEcheckRoutingNumber', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEcheckType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEcheckType');
        if (!$pluginInfo) {
            return parent::getEcheckType();
        } else {
            return $this->___callPlugins('getEcheckType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastTransId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastTransId');
        if (!$pluginInfo) {
            return parent::getLastTransId();
        } else {
            return $this->___callPlugins('getLastTransId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMethod');
        if (!$pluginInfo) {
            return parent::getMethod();
        } else {
            return $this->___callPlugins('getMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentId');
        if (!$pluginInfo) {
            return parent::getParentId();
        } else {
            return $this->___callPlugins('getParentId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPoNumber()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPoNumber');
        if (!$pluginInfo) {
            return parent::getPoNumber();
        } else {
            return $this->___callPlugins('getPoNumber', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProtectionEligibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProtectionEligibility');
        if (!$pluginInfo) {
            return parent::getProtectionEligibility();
        } else {
            return $this->___callPlugins('getProtectionEligibility', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQuotePaymentId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuotePaymentId');
        if (!$pluginInfo) {
            return parent::getQuotePaymentId();
        } else {
            return $this->___callPlugins('getQuotePaymentId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingAmount');
        if (!$pluginInfo) {
            return parent::getShippingAmount();
        } else {
            return $this->___callPlugins('getShippingAmount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingCaptured()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingCaptured');
        if (!$pluginInfo) {
            return parent::getShippingCaptured();
        } else {
            return $this->___callPlugins('getShippingCaptured', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingRefunded');
        if (!$pluginInfo) {
            return parent::getShippingRefunded();
        } else {
            return $this->___callPlugins('getShippingRefunded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setParentId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParentId');
        if (!$pluginInfo) {
            return parent::setParentId($id);
        } else {
            return $this->___callPlugins('setParentId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseShippingCaptured($baseShippingCaptured)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseShippingCaptured');
        if (!$pluginInfo) {
            return parent::setBaseShippingCaptured($baseShippingCaptured);
        } else {
            return $this->___callPlugins('setBaseShippingCaptured', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingCaptured($shippingCaptured)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingCaptured');
        if (!$pluginInfo) {
            return parent::setShippingCaptured($shippingCaptured);
        } else {
            return $this->___callPlugins('setShippingCaptured', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountRefunded($amountRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountRefunded');
        if (!$pluginInfo) {
            return parent::setAmountRefunded($amountRefunded);
        } else {
            return $this->___callPlugins('setAmountRefunded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountPaid($baseAmountPaid)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountPaid');
        if (!$pluginInfo) {
            return parent::setBaseAmountPaid($baseAmountPaid);
        } else {
            return $this->___callPlugins('setBaseAmountPaid', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountCanceled($amountCanceled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountCanceled');
        if (!$pluginInfo) {
            return parent::setAmountCanceled($amountCanceled);
        } else {
            return $this->___callPlugins('setAmountCanceled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountAuthorized($baseAmountAuthorized)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountAuthorized');
        if (!$pluginInfo) {
            return parent::setBaseAmountAuthorized($baseAmountAuthorized);
        } else {
            return $this->___callPlugins('setBaseAmountAuthorized', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountPaidOnline($baseAmountPaidOnline)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountPaidOnline');
        if (!$pluginInfo) {
            return parent::setBaseAmountPaidOnline($baseAmountPaidOnline);
        } else {
            return $this->___callPlugins('setBaseAmountPaidOnline', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountRefundedOnline($baseAmountRefundedOnline)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountRefundedOnline');
        if (!$pluginInfo) {
            return parent::setBaseAmountRefundedOnline($baseAmountRefundedOnline);
        } else {
            return $this->___callPlugins('setBaseAmountRefundedOnline', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseShippingAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseShippingAmount');
        if (!$pluginInfo) {
            return parent::setBaseShippingAmount($amount);
        } else {
            return $this->___callPlugins('setBaseShippingAmount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingAmount');
        if (!$pluginInfo) {
            return parent::setShippingAmount($amount);
        } else {
            return $this->___callPlugins('setShippingAmount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountPaid($amountPaid)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountPaid');
        if (!$pluginInfo) {
            return parent::setAmountPaid($amountPaid);
        } else {
            return $this->___callPlugins('setAmountPaid', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountAuthorized($amountAuthorized)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountAuthorized');
        if (!$pluginInfo) {
            return parent::setAmountAuthorized($amountAuthorized);
        } else {
            return $this->___callPlugins('setAmountAuthorized', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountOrdered($baseAmountOrdered)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountOrdered');
        if (!$pluginInfo) {
            return parent::setBaseAmountOrdered($baseAmountOrdered);
        } else {
            return $this->___callPlugins('setBaseAmountOrdered', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseShippingRefunded($baseShippingRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseShippingRefunded');
        if (!$pluginInfo) {
            return parent::setBaseShippingRefunded($baseShippingRefunded);
        } else {
            return $this->___callPlugins('setBaseShippingRefunded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingRefunded($shippingRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingRefunded');
        if (!$pluginInfo) {
            return parent::setShippingRefunded($shippingRefunded);
        } else {
            return $this->___callPlugins('setShippingRefunded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountRefunded($baseAmountRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountRefunded');
        if (!$pluginInfo) {
            return parent::setBaseAmountRefunded($baseAmountRefunded);
        } else {
            return $this->___callPlugins('setBaseAmountRefunded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountOrdered($amountOrdered)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountOrdered');
        if (!$pluginInfo) {
            return parent::setAmountOrdered($amountOrdered);
        } else {
            return $this->___callPlugins('setAmountOrdered', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountCanceled($baseAmountCanceled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountCanceled');
        if (!$pluginInfo) {
            return parent::setBaseAmountCanceled($baseAmountCanceled);
        } else {
            return $this->___callPlugins('setBaseAmountCanceled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setQuotePaymentId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuotePaymentId');
        if (!$pluginInfo) {
            return parent::setQuotePaymentId($id);
        } else {
            return $this->___callPlugins('setQuotePaymentId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalData($additionalData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAdditionalData');
        if (!$pluginInfo) {
            return parent::setAdditionalData($additionalData);
        } else {
            return $this->___callPlugins('setAdditionalData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcExpMonth($ccExpMonth)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcExpMonth');
        if (!$pluginInfo) {
            return parent::setCcExpMonth($ccExpMonth);
        } else {
            return $this->___callPlugins('setCcExpMonth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcSsStartYear($ccSsStartYear)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcSsStartYear');
        if (!$pluginInfo) {
            return parent::setCcSsStartYear($ccSsStartYear);
        } else {
            return $this->___callPlugins('setCcSsStartYear', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEcheckBankName($echeckBankName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEcheckBankName');
        if (!$pluginInfo) {
            return parent::setEcheckBankName($echeckBankName);
        } else {
            return $this->___callPlugins('setEcheckBankName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMethod($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMethod');
        if (!$pluginInfo) {
            return parent::setMethod($method);
        } else {
            return $this->___callPlugins('setMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcDebugRequestBody($ccDebugRequestBody)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcDebugRequestBody');
        if (!$pluginInfo) {
            return parent::setCcDebugRequestBody($ccDebugRequestBody);
        } else {
            return $this->___callPlugins('setCcDebugRequestBody', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcSecureVerify($ccSecureVerify)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcSecureVerify');
        if (!$pluginInfo) {
            return parent::setCcSecureVerify($ccSecureVerify);
        } else {
            return $this->___callPlugins('setCcSecureVerify', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setProtectionEligibility($protectionEligibility)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProtectionEligibility');
        if (!$pluginInfo) {
            return parent::setProtectionEligibility($protectionEligibility);
        } else {
            return $this->___callPlugins('setProtectionEligibility', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcApproval($ccApproval)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcApproval');
        if (!$pluginInfo) {
            return parent::setCcApproval($ccApproval);
        } else {
            return $this->___callPlugins('setCcApproval', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcLast4($ccLast4)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcLast4');
        if (!$pluginInfo) {
            return parent::setCcLast4($ccLast4);
        } else {
            return $this->___callPlugins('setCcLast4', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcStatusDescription($description)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcStatusDescription');
        if (!$pluginInfo) {
            return parent::setCcStatusDescription($description);
        } else {
            return $this->___callPlugins('setCcStatusDescription', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEcheckType($echeckType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEcheckType');
        if (!$pluginInfo) {
            return parent::setEcheckType($echeckType);
        } else {
            return $this->___callPlugins('setEcheckType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcDebugResponseSerialized($ccDebugResponseSerialized)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcDebugResponseSerialized');
        if (!$pluginInfo) {
            return parent::setCcDebugResponseSerialized($ccDebugResponseSerialized);
        } else {
            return $this->___callPlugins('setCcDebugResponseSerialized', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcSsStartMonth($ccSsStartMonth)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcSsStartMonth');
        if (!$pluginInfo) {
            return parent::setCcSsStartMonth($ccSsStartMonth);
        } else {
            return $this->___callPlugins('setCcSsStartMonth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEcheckAccountType($echeckAccountType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEcheckAccountType');
        if (!$pluginInfo) {
            return parent::setEcheckAccountType($echeckAccountType);
        } else {
            return $this->___callPlugins('setEcheckAccountType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setLastTransId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLastTransId');
        if (!$pluginInfo) {
            return parent::setLastTransId($id);
        } else {
            return $this->___callPlugins('setLastTransId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcCidStatus($ccCidStatus)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcCidStatus');
        if (!$pluginInfo) {
            return parent::setCcCidStatus($ccCidStatus);
        } else {
            return $this->___callPlugins('setCcCidStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcOwner($ccOwner)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcOwner');
        if (!$pluginInfo) {
            return parent::setCcOwner($ccOwner);
        } else {
            return $this->___callPlugins('setCcOwner', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcType($ccType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcType');
        if (!$pluginInfo) {
            return parent::setCcType($ccType);
        } else {
            return $this->___callPlugins('setCcType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPoNumber($poNumber)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPoNumber');
        if (!$pluginInfo) {
            return parent::setPoNumber($poNumber);
        } else {
            return $this->___callPlugins('setPoNumber', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcExpYear($ccExpYear)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcExpYear');
        if (!$pluginInfo) {
            return parent::setCcExpYear($ccExpYear);
        } else {
            return $this->___callPlugins('setCcExpYear', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcStatus($ccStatus)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcStatus');
        if (!$pluginInfo) {
            return parent::setCcStatus($ccStatus);
        } else {
            return $this->___callPlugins('setCcStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEcheckRoutingNumber($echeckRoutingNumber)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEcheckRoutingNumber');
        if (!$pluginInfo) {
            return parent::setEcheckRoutingNumber($echeckRoutingNumber);
        } else {
            return $this->___callPlugins('setEcheckRoutingNumber', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountStatus($accountStatus)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAccountStatus');
        if (!$pluginInfo) {
            return parent::setAccountStatus($accountStatus);
        } else {
            return $this->___callPlugins('setAccountStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAnetTransMethod($anetTransMethod)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAnetTransMethod');
        if (!$pluginInfo) {
            return parent::setAnetTransMethod($anetTransMethod);
        } else {
            return $this->___callPlugins('setAnetTransMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcDebugResponseBody($ccDebugResponseBody)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcDebugResponseBody');
        if (!$pluginInfo) {
            return parent::setCcDebugResponseBody($ccDebugResponseBody);
        } else {
            return $this->___callPlugins('setCcDebugResponseBody', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcSsIssue($ccSsIssue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcSsIssue');
        if (!$pluginInfo) {
            return parent::setCcSsIssue($ccSsIssue);
        } else {
            return $this->___callPlugins('setCcSsIssue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEcheckAccountName($echeckAccountName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEcheckAccountName');
        if (!$pluginInfo) {
            return parent::setEcheckAccountName($echeckAccountName);
        } else {
            return $this->___callPlugins('setEcheckAccountName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcAvsStatus($ccAvsStatus)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcAvsStatus');
        if (!$pluginInfo) {
            return parent::setCcAvsStatus($ccAvsStatus);
        } else {
            return $this->___callPlugins('setCcAvsStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcNumberEnc($ccNumberEnc)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcNumberEnc');
        if (!$pluginInfo) {
            return parent::setCcNumberEnc($ccNumberEnc);
        } else {
            return $this->___callPlugins('setCcNumberEnc', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCcTransId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcTransId');
        if (!$pluginInfo) {
            return parent::setCcTransId($id);
        } else {
            return $this->___callPlugins('setCcTransId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAddressStatus($addressStatus)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAddressStatus');
        if (!$pluginInfo) {
            return parent::setAddressStatus($addressStatus);
        } else {
            return $this->___callPlugins('setAddressStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExtensionAttributes');
        if (!$pluginInfo) {
            return parent::getExtensionAttributes();
        } else {
            return $this->___callPlugins('getExtensionAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setExtensionAttributes(\Magento\Sales\Api\Data\OrderPaymentExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        if (!$pluginInfo) {
            return parent::setExtensionAttributes($extensionAttributes);
        } else {
            return $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsTransactionPending($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsTransactionPending');
        if (!$pluginInfo) {
            return parent::setIsTransactionPending($flag);
        } else {
            return $this->___callPlugins('setIsTransactionPending', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsTransactionPending()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsTransactionPending');
        if (!$pluginInfo) {
            return parent::getIsTransactionPending();
        } else {
            return $this->___callPlugins('getIsTransactionPending', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsFraudDetected($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsFraudDetected');
        if (!$pluginInfo) {
            return parent::setIsFraudDetected($flag);
        } else {
            return $this->___callPlugins('setIsFraudDetected', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsFraudDetected()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsFraudDetected');
        if (!$pluginInfo) {
            return parent::getIsFraudDetected();
        } else {
            return $this->___callPlugins('getIsFraudDetected', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setShouldCloseParentTransaction($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShouldCloseParentTransaction');
        if (!$pluginInfo) {
            return parent::setShouldCloseParentTransaction($flag);
        } else {
            return $this->___callPlugins('setShouldCloseParentTransaction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getShouldCloseParentTransaction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShouldCloseParentTransaction');
        if (!$pluginInfo) {
            return parent::getShouldCloseParentTransaction();
        } else {
            return $this->___callPlugins('getShouldCloseParentTransaction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $index);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMethodInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMethodInstance');
        if (!$pluginInfo) {
            return parent::getMethodInstance();
        } else {
            return $this->___callPlugins('getMethodInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function encrypt($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'encrypt');
        if (!$pluginInfo) {
            return parent::encrypt($data);
        } else {
            return $this->___callPlugins('encrypt', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function decrypt($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'decrypt');
        if (!$pluginInfo) {
            return parent::decrypt($data);
        } else {
            return $this->___callPlugins('decrypt', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalInformation($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAdditionalInformation');
        if (!$pluginInfo) {
            return parent::setAdditionalInformation($key, $value);
        } else {
            return $this->___callPlugins('setAdditionalInformation', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalInformation($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalInformation');
        if (!$pluginInfo) {
            return parent::getAdditionalInformation($key);
        } else {
            return $this->___callPlugins('getAdditionalInformation', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsAdditionalInformation($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsAdditionalInformation');
        if (!$pluginInfo) {
            return parent::unsAdditionalInformation($key);
        } else {
            return $this->___callPlugins('unsAdditionalInformation', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasAdditionalInformation($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasAdditionalInformation');
        if (!$pluginInfo) {
            return parent::hasAdditionalInformation($key);
        } else {
            return $this->___callPlugins('hasAdditionalInformation', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEventObject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventObject');
        if (!$pluginInfo) {
            return parent::getEventObject();
        } else {
            return $this->___callPlugins('getEventObject', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributes');
        if (!$pluginInfo) {
            return parent::getCustomAttributes();
        } else {
            return $this->___callPlugins('getCustomAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttribute');
        if (!$pluginInfo) {
            return parent::getCustomAttribute($attributeCode);
        } else {
            return $this->___callPlugins('getCustomAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttributes(array $attributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttributes');
        if (!$pluginInfo) {
            return parent::setCustomAttributes($attributes);
        } else {
            return $this->___callPlugins('setCustomAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttribute($attributeCode, $attributeValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttribute');
        if (!$pluginInfo) {
            return parent::setCustomAttribute($attributeCode, $attributeValue);
        } else {
            return $this->___callPlugins('setCustomAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($key, $value);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        if (!$pluginInfo) {
            return parent::unsetData($key);
        } else {
            return $this->___callPlugins('unsetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        if (!$pluginInfo) {
            return parent::setId($value);
        } else {
            return $this->___callPlugins('setId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIdFieldName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIdFieldName');
        if (!$pluginInfo) {
            return parent::setIdFieldName($name);
        } else {
            return $this->___callPlugins('setIdFieldName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        if (!$pluginInfo) {
            return parent::getIdFieldName();
        } else {
            return $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        if (!$pluginInfo) {
            return parent::getId();
        } else {
            return $this->___callPlugins('getId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDeleted($isDeleted = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDeleted');
        if (!$pluginInfo) {
            return parent::isDeleted($isDeleted);
        } else {
            return $this->___callPlugins('isDeleted', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanges');
        if (!$pluginInfo) {
            return parent::hasDataChanges();
        } else {
            return $this->___callPlugins('hasDataChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataChanges($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataChanges');
        if (!$pluginInfo) {
            return parent::setDataChanges($value);
        } else {
            return $this->___callPlugins('setDataChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrigData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrigData');
        if (!$pluginInfo) {
            return parent::getOrigData($key);
        } else {
            return $this->___callPlugins('getOrigData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setOrigData($key = null, $data = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrigData');
        if (!$pluginInfo) {
            return parent::setOrigData($key, $data);
        } else {
            return $this->___callPlugins('setOrigData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dataHasChangedFor($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dataHasChangedFor');
        if (!$pluginInfo) {
            return parent::dataHasChangedFor($field);
        } else {
            return $this->___callPlugins('dataHasChangedFor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceName');
        if (!$pluginInfo) {
            return parent::getResourceName();
        } else {
            return $this->___callPlugins('getResourceName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceCollection');
        if (!$pluginInfo) {
            return parent::getResourceCollection();
        } else {
            return $this->___callPlugins('getResourceCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        if (!$pluginInfo) {
            return parent::getCollection();
        } else {
            return $this->___callPlugins('getCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function load($modelId, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        if (!$pluginInfo) {
            return parent::load($modelId, $field);
        } else {
            return $this->___callPlugins('load', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        if (!$pluginInfo) {
            return parent::afterLoad();
        } else {
            return $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSaveAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSaveAllowed');
        if (!$pluginInfo) {
            return parent::isSaveAllowed();
        } else {
            return $this->___callPlugins('isSaveAllowed', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHasDataChanges($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHasDataChanges');
        if (!$pluginInfo) {
            return parent::setHasDataChanges($flag);
        } else {
            return $this->___callPlugins('setHasDataChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save();
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterCommitCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterCommitCallback');
        if (!$pluginInfo) {
            return parent::afterCommitCallback();
        } else {
            return $this->___callPlugins('afterCommitCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isObjectNew($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isObjectNew');
        if (!$pluginInfo) {
            return parent::isObjectNew($flag);
        } else {
            return $this->___callPlugins('isObjectNew', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        if (!$pluginInfo) {
            return parent::beforeSave();
        } else {
            return $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateBeforeSave');
        if (!$pluginInfo) {
            return parent::validateBeforeSave();
        } else {
            return $this->___callPlugins('validateBeforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheTags');
        if (!$pluginInfo) {
            return parent::getCacheTags();
        } else {
            return $this->___callPlugins('getCacheTags', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function cleanModelCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanModelCache');
        if (!$pluginInfo) {
            return parent::cleanModelCache();
        } else {
            return $this->___callPlugins('cleanModelCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete();
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        if (!$pluginInfo) {
            return parent::beforeDelete();
        } else {
            return $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        if (!$pluginInfo) {
            return parent::afterDelete();
        } else {
            return $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterDeleteCommit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDeleteCommit');
        if (!$pluginInfo) {
            return parent::afterDeleteCommit();
        } else {
            return $this->___callPlugins('afterDeleteCommit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResource');
        if (!$pluginInfo) {
            return parent::getResource();
        } else {
            return $this->___callPlugins('getResource', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityId');
        if (!$pluginInfo) {
            return parent::getEntityId();
        } else {
            return $this->___callPlugins('getEntityId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityId($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityId');
        if (!$pluginInfo) {
            return parent::setEntityId($entityId);
        } else {
            return $this->___callPlugins('setEntityId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clearInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearInstance');
        if (!$pluginInfo) {
            return parent::clearInstance();
        } else {
            return $this->___callPlugins('clearInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoredData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoredData');
        if (!$pluginInfo) {
            return parent::getStoredData();
        } else {
            return $this->___callPlugins('getStoredData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEventPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventPrefix');
        if (!$pluginInfo) {
            return parent::getEventPrefix();
        } else {
            return $this->___callPlugins('getEventPrefix', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        if (!$pluginInfo) {
            return parent::addData($arr);
        } else {
            return $this->___callPlugins('addData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        if (!$pluginInfo) {
            return parent::getDataByPath($path);
        } else {
            return $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        if (!$pluginInfo) {
            return parent::getDataByKey($key);
        } else {
            return $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        if (!$pluginInfo) {
            return parent::setDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        if (!$pluginInfo) {
            return parent::getDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        if (!$pluginInfo) {
            return parent::hasData($key);
        } else {
            return $this->___callPlugins('hasData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($keys);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        if (!$pluginInfo) {
            return parent::convertToArray($keys);
        } else {
            return $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = array(), $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = array(), $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        if (!$pluginInfo) {
            return parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        if (!$pluginInfo) {
            return parent::toJson($keys);
        } else {
            return $this->___callPlugins('toJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        if (!$pluginInfo) {
            return parent::convertToJson($keys);
        } else {
            return $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString($format);
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        if (!$pluginInfo) {
            return parent::isEmpty();
        } else {
            return $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = array(), $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        if (!$pluginInfo) {
            return parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
        } else {
            return $this->___callPlugins('serialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($data, $objects);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        if (!$pluginInfo) {
            return parent::offsetSet($offset, $value);
        } else {
            return $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        if (!$pluginInfo) {
            return parent::offsetExists($offset);
        } else {
            return $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        if (!$pluginInfo) {
            return parent::offsetUnset($offset);
        } else {
            return $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        if (!$pluginInfo) {
            return parent::offsetGet($offset);
        } else {
            return $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo);
        }
    }
}
