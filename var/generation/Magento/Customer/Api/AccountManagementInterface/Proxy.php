<?php
namespace Magento\Customer\Api\AccountManagementInterface;

/**
 * Proxy class for @see \Magento\Customer\Api\AccountManagementInterface
 */
class Proxy implements \Magento\Customer\Api\AccountManagementInterface
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
     * @var \Magento\Customer\Api\AccountManagementInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Customer\\Api\\AccountManagementInterface', $shared = true)
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
     * @return \Magento\Customer\Api\AccountManagementInterface
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
    public function createAccount(\Magento\Customer\Api\Data\CustomerInterface $customer, $password = null, $redirectUrl = '')
    {
        return $this->_getSubject()->createAccount($customer, $password, $redirectUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function createAccountWithPasswordHash(\Magento\Customer\Api\Data\CustomerInterface $customer, $hash, $redirectUrl = '')
    {
        return $this->_getSubject()->createAccountWithPasswordHash($customer, $hash, $redirectUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\Customer\Api\Data\CustomerInterface $customer)
    {
        return $this->_getSubject()->validate($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function isReadonly($customerId)
    {
        return $this->_getSubject()->isReadonly($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function activate($email, $confirmationKey)
    {
        return $this->_getSubject()->activate($email, $confirmationKey);
    }

    /**
     * {@inheritdoc}
     */
    public function activateById($customerId, $confirmationKey)
    {
        return $this->_getSubject()->activateById($customerId, $confirmationKey);
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate($email, $password)
    {
        return $this->_getSubject()->authenticate($email, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function changePassword($email, $currentPassword, $newPassword)
    {
        return $this->_getSubject()->changePassword($email, $currentPassword, $newPassword);
    }

    /**
     * {@inheritdoc}
     */
    public function changePasswordById($customerId, $currentPassword, $newPassword)
    {
        return $this->_getSubject()->changePasswordById($customerId, $currentPassword, $newPassword);
    }

    /**
     * {@inheritdoc}
     */
    public function initiatePasswordReset($email, $template, $websiteId = null)
    {
        return $this->_getSubject()->initiatePasswordReset($email, $template, $websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function resetPassword($email, $resetToken, $newPassword)
    {
        return $this->_getSubject()->resetPassword($email, $resetToken, $newPassword);
    }

    /**
     * {@inheritdoc}
     */
    public function validateResetPasswordLinkToken($customerId, $resetPasswordLinkToken)
    {
        return $this->_getSubject()->validateResetPasswordLinkToken($customerId, $resetPasswordLinkToken);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfirmationStatus($customerId)
    {
        return $this->_getSubject()->getConfirmationStatus($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function resendConfirmation($email, $websiteId, $redirectUrl = '')
    {
        return $this->_getSubject()->resendConfirmation($email, $websiteId, $redirectUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmailAvailable($customerEmail, $websiteId = null)
    {
        return $this->_getSubject()->isEmailAvailable($customerEmail, $websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function isCustomerInStore($customerWebsiteId, $storeId)
    {
        return $this->_getSubject()->isCustomerInStore($customerWebsiteId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultBillingAddress($customerId)
    {
        return $this->_getSubject()->getDefaultBillingAddress($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultShippingAddress($customerId)
    {
        return $this->_getSubject()->getDefaultShippingAddress($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function getPasswordHash($password)
    {
        return $this->_getSubject()->getPasswordHash($password);
    }
}
