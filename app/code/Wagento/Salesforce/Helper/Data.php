<?php
namespace Wagento\Salesforce\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\Cache\Frontend\Adapter\Zend;
use \exacttarget\fuelsdkphp\ET_Client;

class Data extends AbstractHelper {
    protected $_scopeConfig;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;

    }

    public function getWsConnetcion() {
        $wsconnection = false;
        $wsUrl = 'https://webservice.exacttarget.com/etframework.wsdl'; // change for admin
        try {
            $client = new \ET_Client();
            $this->client->CreateWSDL($wsUrl);
            $swconnection = true;
        }catch (\SoapFault $e) {
            throw new Exception($e->getMessage());
            $wsConnection = false;
        }
        return $wsconnection;
    }

    private function getConnection() {
        $wsConnection = false;
        $wsUrl = 'https://webservice.exacttarget.com/etframework.wsdl'; // change for admin
        try {
            $wsConnection = true;
            $options = array(
                'soap_version' => SOAP_1_1
            );
            $serviceArgs = array("id"=>1);
            $wsConnection = new \Zend\Soap\Client($wsUrl, $options);
            $wsConnection->getSoapClient();
        }catch (\SoapFault $e) {
            $wsConnection = false;
        }
        return $wsConnection();
    }

}