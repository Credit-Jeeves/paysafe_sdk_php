<?php

namespace Paysafe\AccountManagement;

/**
 * Class MerchantAccount
 * @package Paysafe\AccountManagement
 *
 * @property string $id
 * @property string $status
 * @property string $merchantId
 * @property string $name
 * @property string $currency
 * @property string $region
 * @property string $legalEntity
 * @property string $productCode
 * @property string $category
 * @property string $phone
 * @property string $yearlyVolumeRange
 * @property integer $averageTransactionAmount
 * @property \Paysafe\AccountManagement\MerchantDescriptor $merchantDescriptor
 * @property \Paysafe\AccountManagement\CaAccountDetails $caAccountDetails
 * @property \Paysafe\AccountManagement\UsAccountDetails $usAccountDetails
 */
class MerchantAccount extends \Paysafe\JSONObject implements \Paysafe\Pageable {

    public static function getPageableArrayKey() {
        return "merchantAccoant";
    }

    protected static $fieldTypes = array(
        'id' => 'string',
        'status' => 'string',
        'merchantId' => 'string',
        'name' => 'string',
        'currency' => 'string',
        'region' => 'string',
        'legalEntity' => 'string',
        'productCode' => 'string',
        'category' => 'string',
        'phone' => 'string',
        'yearlyVolumeRange' => 'string',
        'averageTransactionAmount' => 'int',
        'merchantDescriptor' => '\Paysafe\AccountManagement\MerchantDescriptor',
        'caAccountDetails' => '\Paysafe\AccountManagement\CaAccountDetails',
        'usAccountDetails' => '\Paysafe\AccountManagement\UsAccountDetails',
    );
}
