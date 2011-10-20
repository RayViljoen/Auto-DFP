<?php
/**
 * Contains all client objects for the ForecastService service.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsDfp
 * @subpackage v201103
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda <eric.koleda@google.com>
 */

/** Required classes. **/
require_once dirname(__FILE__) . "/../Lib/DfpSoapClient.php";

if (!class_exists("ApiError", FALSE)) {
/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ApiError {
  /**
   * @access public
   * @var string
   */
  public $fieldPath;

  /**
   * @access public
   * @var string
   */
  public $trigger;

  /**
   * @access public
   * @var string
   */
  public $errorString;

  /**
   * @access public
   * @var string
   */
  public $ApiErrorType;

  private $_parameterMap = array (
    "ApiError.Type" => "ApiErrorType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('ApiError')) parent::__construct();
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ApiVersionError", FALSE)) {
/**
 * Errors related to the usage of API versions.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ApiVersionError extends ApiError {
  /**
   * @access public
   * @var tnsApiVersionErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiVersionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('ApiVersionError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ApplicationException", FALSE)) {
/**
 * Base class for exceptions.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ApplicationException {
  /**
   * @access public
   * @var string
   */
  public $message;

  /**
   * @access public
   * @var string
   */
  public $ApplicationExceptionType;

  private $_parameterMap = array (
    "ApplicationException.Type" => "ApplicationExceptionType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApplicationException";
  }

  public function __construct($message = NULL, $ApplicationExceptionType = NULL) {
    if(get_parent_class('ApplicationException')) parent::__construct();
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }
}}

if (!class_exists("Authentication", FALSE)) {
/**
 * A representation of the authentication protocols that can be used.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class Authentication {
  /**
   * @access public
   * @var string
   */
  public $AuthenticationType;

  private $_parameterMap = array (
    "Authentication.Type" => "AuthenticationType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Authentication";
  }

  public function __construct($AuthenticationType = NULL) {
    if(get_parent_class('Authentication')) parent::__construct();
    $this->AuthenticationType = $AuthenticationType;
  }
}}

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * An error for an exception that occurred when authenticating.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class AuthenticationError extends ApiError {
  /**
   * @access public
   * @var tnsAuthenticationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthenticationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('AuthenticationError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ClientLogin", FALSE)) {
/**
 * The credentials for the {@code ClientLogin} API authentication protocol.
 * 
 * See {@link http://code.google.com/apis/accounts/docs/AuthForInstalledApps.html}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ClientLogin extends Authentication {
  /**
   * @access public
   * @var string
   */
  public $token;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClientLogin";
  }

  public function __construct($token = NULL, $AuthenticationType = NULL) {
    if(get_parent_class('ClientLogin')) parent::__construct();
    $this->token = $token;
    $this->AuthenticationType = $AuthenticationType;
  }
}}

if (!class_exists("CommonError", FALSE)) {
/**
 * A place for common errors that can be used across services.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CommonError extends ApiError {
  /**
   * @access public
   * @var tnsCommonErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CommonError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('CommonError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CustomCriteriaNode", FALSE)) {
/**
 * A {@link CustomCriteriaNode} is a node in the custom targeting tree. A custom
 * criteria node can either be a {@link CustomCriteriaSet} (a non-leaf node) or
 * a {@link CustomCriteria} (a leaf node). The custom criteria targeting tree is
 * subject to the rules defined on {@link Targeting#customTargeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CustomCriteriaNode {
  /**
   * @access public
   * @var string
   */
  public $CustomCriteriaNodeType;

  private $_parameterMap = array (
    "CustomCriteriaNode.Type" => "CustomCriteriaNodeType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteriaNode";
  }

  public function __construct($CustomCriteriaNodeType = NULL) {
    if(get_parent_class('CustomCriteriaNode')) parent::__construct();
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }
}}

if (!class_exists("CustomTargetingValue", FALSE)) {
/**
 * {@code CustomTargetingValue} represents a value used for custom targeting.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CustomTargetingValue {
  /**
   * @access public
   * @var integer
   */
  public $customTargetingKeyId;

  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var string
   */
  public $displayName;

  /**
   * @access public
   * @var tnsCustomTargetingValueMatchType
   */
  public $matchType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingValue";
  }

  public function __construct($customTargetingKeyId = NULL, $id = NULL, $name = NULL, $displayName = NULL, $matchType = NULL) {
    if(get_parent_class('CustomTargetingValue')) parent::__construct();
    $this->customTargetingKeyId = $customTargetingKeyId;
    $this->id = $id;
    $this->name = $name;
    $this->displayName = $displayName;
    $this->matchType = $matchType;
  }
}}

if (!class_exists("Date", FALSE)) {
/**
 * Represents a date.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class Date {
  /**
   * @access public
   * @var integer
   */
  public $year;

  /**
   * @access public
   * @var integer
   */
  public $month;

  /**
   * @access public
   * @var integer
   */
  public $day;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Date";
  }

  public function __construct($year = NULL, $month = NULL, $day = NULL) {
    if(get_parent_class('Date')) parent::__construct();
    $this->year = $year;
    $this->month = $month;
    $this->day = $day;
  }
}}

if (!class_exists("DfpDateTime", FALSE)) {
/**
 * Represents a date combined with the time of day.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class DfpDateTime {
  /**
   * @access public
   * @var Date
   */
  public $date;

  /**
   * @access public
   * @var integer
   */
  public $hour;

  /**
   * @access public
   * @var integer
   */
  public $minute;

  /**
   * @access public
   * @var integer
   */
  public $second;

  /**
   * @access public
   * @var string
   */
  public $timeZoneID;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateTime";
  }

  public function __construct($date = NULL, $hour = NULL, $minute = NULL, $second = NULL, $timeZoneID = NULL) {
    if(get_parent_class('DfpDateTime')) parent::__construct();
    $this->date = $date;
    $this->hour = $hour;
    $this->minute = $minute;
    $this->second = $second;
    $this->timeZoneID = $timeZoneID;
  }
}}

if (!class_exists("DayPart", FALSE)) {
/**
 * {@code DayPart} represents a time-period within a day of the week which is
 * targeted by a {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class DayPart {
  /**
   * @access public
   * @var tnsDayOfWeek
   */
  public $dayOfWeek;

  /**
   * @access public
   * @var TimeOfDay
   */
  public $startTime;

  /**
   * @access public
   * @var TimeOfDay
   */
  public $endTime;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DayPart";
  }

  public function __construct($dayOfWeek = NULL, $startTime = NULL, $endTime = NULL) {
    if(get_parent_class('DayPart')) parent::__construct();
    $this->dayOfWeek = $dayOfWeek;
    $this->startTime = $startTime;
    $this->endTime = $endTime;
  }
}}

if (!class_exists("DayPartTargeting", FALSE)) {
/**
 * Modify the delivery times of line items for particular days of the week. By
 * default, line items are served at all days and times.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class DayPartTargeting {
  /**
   * @access public
   * @var DayPart[]
   */
  public $dayParts;

  /**
   * @access public
   * @var tnsDeliveryTimeZone
   */
  public $timeZone;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DayPartTargeting";
  }

  public function __construct($dayParts = NULL, $timeZone = NULL) {
    if(get_parent_class('DayPartTargeting')) parent::__construct();
    $this->dayParts = $dayParts;
    $this->timeZone = $timeZone;
  }
}}

if (!class_exists("DeliveryData", FALSE)) {
/**
 * Holds the number of clicks or impressions, determined by
 * {@link LineItemSummary#costType}, delivered for a single line item for the
 * last 7 days
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class DeliveryData {
  /**
   * @access public
   * @var integer[]
   */
  public $units;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeliveryData";
  }

  public function __construct($units = NULL) {
    if(get_parent_class('DeliveryData')) parent::__construct();
    $this->units = $units;
  }
}}

if (!class_exists("DeliveryIndicator", FALSE)) {
/**
 * Indicates the delivery performance of the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class DeliveryIndicator {
  /**
   * @access public
   * @var double
   */
  public $expectedDeliveryPercentage;

  /**
   * @access public
   * @var double
   */
  public $actualDeliveryPercentage;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeliveryIndicator";
  }

  public function __construct($expectedDeliveryPercentage = NULL, $actualDeliveryPercentage = NULL) {
    if(get_parent_class('DeliveryIndicator')) parent::__construct();
    $this->expectedDeliveryPercentage = $expectedDeliveryPercentage;
    $this->actualDeliveryPercentage = $actualDeliveryPercentage;
  }
}}

if (!class_exists("Forecast", FALSE)) {
/**
 * Describes predicted inventory availability for a line item with the specified
 * properties.
 * 
 * <p>Inventory has three threshold values along a line of possible inventory.
 * From least to most, these are:
 * 
 * <ul>
 * <li>Available units -- How many units can be booked without affecting any
 * other line items. Booking more than this number can overbook lower or equal
 * priority line items.
 * <li>Possible units -- How many units can be booked without affecting any
 * higher priority line items. Booking more than this number can overbook
 * higher priority line items.
 * <li>Matched (forecast) units -- How many units satisfy all specified
 * criteria.
 * </ul>
 * 
 * <p>The term "<em>can</em> overbook" is used, because if more impressions are
 * served than are predicted, the extra available inventory might enable all
 * inventory guarantees to be met without overbooking.
 * 
 * <p><img src="http://chart.apis.google.com/chart?chxl=0:|Available|Possible|Matched (forecast)&chxp=0,20,60,100&chxs=0,000000,11.5,0,t,676767&chxtc=0,10&chxt=x&chs=440x75&cht=bhs&chco=D4F8AD,FFF15C,FC5D5D&chd=t:20|40|40&chp=0,0.05&chm=tNo+overbooking,000000,0,0,10,1,:-75|tOverbook+lower+priority,000000,0,0,10,1,:20|tOverbook+higher+priority,000000,0,0,10,1,:175"/>
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class Forecast {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var integer
   */
  public $orderId;

  /**
   * @access public
   * @var tnsUnitType
   */
  public $unitType;

  /**
   * @access public
   * @var integer
   */
  public $availableUnits;

  /**
   * @access public
   * @var integer
   */
  public $deliveredUnits;

  /**
   * @access public
   * @var integer
   */
  public $matchedUnits;

  /**
   * @access public
   * @var integer
   */
  public $possibleUnits;

  /**
   * @access public
   * @var integer
   */
  public $reservedUnits;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Forecast";
  }

  public function __construct($id = NULL, $orderId = NULL, $unitType = NULL, $availableUnits = NULL, $deliveredUnits = NULL, $matchedUnits = NULL, $possibleUnits = NULL, $reservedUnits = NULL) {
    if(get_parent_class('Forecast')) parent::__construct();
    $this->id = $id;
    $this->orderId = $orderId;
    $this->unitType = $unitType;
    $this->availableUnits = $availableUnits;
    $this->deliveredUnits = $deliveredUnits;
    $this->matchedUnits = $matchedUnits;
    $this->possibleUnits = $possibleUnits;
    $this->reservedUnits = $reservedUnits;
  }
}}

if (!class_exists("ForecastError", FALSE)) {
/**
 * Errors that can result from a forecast request.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ForecastError extends ApiError {
  /**
   * @access public
   * @var tnsForecastErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ForecastError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('ForecastError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("FrequencyCap", FALSE)) {
/**
 * Represents a limit on the number of times a single viewer can be exposed to
 * the same {@link LineItem} in a specified time period.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class FrequencyCap {
  /**
   * @access public
   * @var integer
   */
  public $maxImpressions;

  /**
   * @access public
   * @var tnsTimeUnit
   */
  public $timeUnit;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FrequencyCap";
  }

  public function __construct($maxImpressions = NULL, $timeUnit = NULL) {
    if(get_parent_class('FrequencyCap')) parent::__construct();
    $this->maxImpressions = $maxImpressions;
    $this->timeUnit = $timeUnit;
  }
}}

if (!class_exists("GeoTargeting", FALSE)) {
/**
 * Provides line items the ability to target geographical locations. By default,
 * line items target all countries and their subdivisions. With geographical
 * targeting, you can target line items to specific countries, regions, metro
 * areas, and cities. You can also exclude the same.
 * <p>
 * The following rules apply for geographical targeting:
 * </p>
 * <ul>
 * <li>You cannot target and exclude the same location</li>
 * <li>You cannot target a child whose parent has been excluded. So if the state
 * of Illinois has been excluded, then you cannot target Chicago</li>
 * <li>You must not target a location if you are also targeting its parent.
 * So if you are targeting New York City, you must not have the state of New
 * York as one of the targeted locations</li>
 * </ul>
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class GeoTargeting {
  /**
   * @access public
   * @var Location[]
   */
  public $targetedLocations;

  /**
   * @access public
   * @var Location[]
   */
  public $excludedLocations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "GeoTargeting";
  }

  public function __construct($targetedLocations = NULL, $excludedLocations = NULL) {
    if(get_parent_class('GeoTargeting')) parent::__construct();
    $this->targetedLocations = $targetedLocations;
    $this->excludedLocations = $excludedLocations;
  }
}}

if (!class_exists("InternalApiError", FALSE)) {
/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class InternalApiError extends ApiError {
  /**
   * @access public
   * @var tnsInternalApiErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalApiError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('InternalApiError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("InventoryTargeting", FALSE)) {
/**
 * Contains criteria for targeting Inventory.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class InventoryTargeting {
  /**
   * @access public
   * @var string[]
   */
  public $targetedAdUnitIds;

  /**
   * @access public
   * @var string[]
   */
  public $excludedAdUnitIds;

  /**
   * @access public
   * @var integer[]
   */
  public $targetedPlacementIds;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InventoryTargeting";
  }

  public function __construct($targetedAdUnitIds = NULL, $excludedAdUnitIds = NULL, $targetedPlacementIds = NULL) {
    if(get_parent_class('InventoryTargeting')) parent::__construct();
    $this->targetedAdUnitIds = $targetedAdUnitIds;
    $this->excludedAdUnitIds = $excludedAdUnitIds;
    $this->targetedPlacementIds = $targetedPlacementIds;
  }
}}

if (!class_exists("InventoryTargetingError", FALSE)) {
/**
 * Lists all inventory errors caused by associating a line item with a targeting
 * expression.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class InventoryTargetingError extends ApiError {
  /**
   * @access public
   * @var tnsInventoryTargetingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InventoryTargetingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('InventoryTargetingError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("InventoryUnitError", FALSE)) {
/**
 * Lists the generic errors associated with {@link AdUnit} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class InventoryUnitError extends ApiError {
  /**
   * @access public
   * @var tnsInventoryUnitErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InventoryUnitError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('InventoryUnitError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LineItemFlightDateError", FALSE)) {
/**
 * Lists all errors associated with LineItem start and end dates.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class LineItemFlightDateError extends ApiError {
  /**
   * @access public
   * @var tnsLineItemFlightDateErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemFlightDateError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('LineItemFlightDateError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LineItemOperationError", FALSE)) {
/**
 * Lists all errors for executing operations on line items
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class LineItemOperationError extends ApiError {
  /**
   * @access public
   * @var tnsLineItemOperationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemOperationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('LineItemOperationError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LineItemSummary", FALSE)) {
/**
 * The {@code LineItemSummary} represents the base class from which a {@code
 * LineItem} is derived.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class LineItemSummary {
  /**
   * @access public
   * @var integer
   */
  public $orderId;

  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var string
   */
  public $orderName;

  /**
   * @access public
   * @var DateTime
   */
  public $startDateTime;

  /**
   * @access public
   * @var tnsStartDateTimeType
   */
  public $startDateTimeType;

  /**
   * @access public
   * @var DateTime
   */
  public $endDateTime;

  /**
   * @access public
   * @var boolean
   */
  public $unlimitedEndDateTime;

  /**
   * @access public
   * @var tnsCreativeRotationType
   */
  public $creativeRotationType;

  /**
   * @access public
   * @var tnsDeliveryRateType
   */
  public $deliveryRateType;

  /**
   * @access public
   * @var tnsRoadblockingType
   */
  public $roadblockingType;

  /**
   * @access public
   * @var FrequencyCap[]
   */
  public $frequencyCaps;

  /**
   * @access public
   * @var tnsLineItemType
   */
  public $lineItemType;

  /**
   * @access public
   * @var tnsUnitType
   */
  public $unitType;

  /**
   * @access public
   * @var tnsLineItemSummaryDuration
   */
  public $duration;

  /**
   * @access public
   * @var integer
   */
  public $unitsBought;

  /**
   * @access public
   * @var Money
   */
  public $costPerUnit;

  /**
   * @access public
   * @var Money
   */
  public $valueCostPerUnit;

  /**
   * @access public
   * @var tnsCostType
   */
  public $costType;

  /**
   * @access public
   * @var tnsLineItemDiscountType
   */
  public $discountType;

  /**
   * @access public
   * @var double
   */
  public $discount;

  /**
   * @access public
   * @var Size[]
   */
  public $creativeSizes;

  /**
   * @access public
   * @var boolean
   */
  public $allowOverbook;

  /**
   * @access public
   * @var Stats
   */
  public $stats;

  /**
   * @access public
   * @var DeliveryIndicator
   */
  public $deliveryIndicator;

  /**
   * @access public
   * @var DeliveryData
   */
  public $deliveryData;

  /**
   * @access public
   * @var Money
   */
  public $budget;

  /**
   * @access public
   * @var tnsComputedStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsLineItemSummaryReservationStatus
   */
  public $reservationStatus;

  /**
   * @access public
   * @var boolean
   */
  public $isArchived;

  /**
   * @access public
   * @var string
   */
  public $LineItemSummaryType;

  private $_parameterMap = array (
    "LineItemSummary.Type" => "LineItemSummaryType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemSummary";
  }

  public function __construct($orderId = NULL, $id = NULL, $name = NULL, $orderName = NULL, $startDateTime = NULL, $startDateTimeType = NULL, $endDateTime = NULL, $unlimitedEndDateTime = NULL, $creativeRotationType = NULL, $deliveryRateType = NULL, $roadblockingType = NULL, $frequencyCaps = NULL, $lineItemType = NULL, $unitType = NULL, $duration = NULL, $unitsBought = NULL, $costPerUnit = NULL, $valueCostPerUnit = NULL, $costType = NULL, $discountType = NULL, $discount = NULL, $creativeSizes = NULL, $allowOverbook = NULL, $stats = NULL, $deliveryIndicator = NULL, $deliveryData = NULL, $budget = NULL, $status = NULL, $reservationStatus = NULL, $isArchived = NULL, $LineItemSummaryType = NULL) {
    if(get_parent_class('LineItemSummary')) parent::__construct();
    $this->orderId = $orderId;
    $this->id = $id;
    $this->name = $name;
    $this->orderName = $orderName;
    $this->startDateTime = $startDateTime;
    $this->startDateTimeType = $startDateTimeType;
    $this->endDateTime = $endDateTime;
    $this->unlimitedEndDateTime = $unlimitedEndDateTime;
    $this->creativeRotationType = $creativeRotationType;
    $this->deliveryRateType = $deliveryRateType;
    $this->roadblockingType = $roadblockingType;
    $this->frequencyCaps = $frequencyCaps;
    $this->lineItemType = $lineItemType;
    $this->unitType = $unitType;
    $this->duration = $duration;
    $this->unitsBought = $unitsBought;
    $this->costPerUnit = $costPerUnit;
    $this->valueCostPerUnit = $valueCostPerUnit;
    $this->costType = $costType;
    $this->discountType = $discountType;
    $this->discount = $discount;
    $this->creativeSizes = $creativeSizes;
    $this->allowOverbook = $allowOverbook;
    $this->stats = $stats;
    $this->deliveryIndicator = $deliveryIndicator;
    $this->deliveryData = $deliveryData;
    $this->budget = $budget;
    $this->status = $status;
    $this->reservationStatus = $reservationStatus;
    $this->isArchived = $isArchived;
    $this->LineItemSummaryType = $LineItemSummaryType;
  }
}}

if (!class_exists("DfpLocation", FALSE)) {
/**
 * A {@link Location} represents a geographical entity that can be targeted. If
 * a location type is not available because of the API version you are using,
 * the location will be represented as just the base class, otherwise it will be
 * sub-classed correctly.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class DfpLocation {
  /**
   * @access public
   * @var string
   */
  public $LocationType;

  private $_parameterMap = array (
    "Location.Type" => "LocationType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Location";
  }

  public function __construct($LocationType = NULL) {
    if(get_parent_class('DfpLocation')) parent::__construct();
    $this->LocationType = $LocationType;
  }
}}

if (!class_exists("MetroLocation", FALSE)) {
/**
 * Represents a metropolitan area for geographical targeting. Currently,
 * metropolitan areas only within the United States can be targeted.
 * <p>
 * Since {@code v201104}, fields of this class are ignored on input. Instead
 * {@link Location} should be used and the {@link Location#id} field should be
 * set.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class MetroLocation extends DfpLocation {
  /**
   * @access public
   * @var string
   */
  public $metroCode;

  /**
   * @access public
   * @var string
   */
  public $countryCode;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MetroLocation";
  }

  public function __construct($metroCode = NULL, $countryCode = NULL, $LocationType = NULL) {
    if(get_parent_class('MetroLocation')) parent::__construct();
    $this->metroCode = $metroCode;
    $this->countryCode = $countryCode;
    $this->LocationType = $LocationType;
  }
}}

if (!class_exists("Money", FALSE)) {
/**
 * Represents a money amount.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class Money {
  /**
   * @access public
   * @var string
   */
  public $currencyCode;

  /**
   * @access public
   * @var integer
   */
  public $microAmount;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Money";
  }

  public function __construct($currencyCode = NULL, $microAmount = NULL) {
    if(get_parent_class('Money')) parent::__construct();
    $this->currencyCode = $currencyCode;
    $this->microAmount = $microAmount;
  }
}}

if (!class_exists("NotNullError", FALSE)) {
/**
 * Caused by supplying a null value for an attribute that cannot be null.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class NotNullError extends ApiError {
  /**
   * @access public
   * @var tnsNotNullErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotNullError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('NotNullError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("NullError", FALSE)) {
/**
 * Caused by supplying a non-null value for an attribute that should be null.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class NullError extends ApiError {
  /**
   * @access public
   * @var tnsNullErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NullError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('NullError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DfpOAuth", FALSE)) {
/**
 * The credentials for the {@code OAuth} authentication protocol.
 * 
 * See {@link http://oauth.net/}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class DfpOAuth extends Authentication {
  /**
   * @access public
   * @var string
   */
  public $parameters;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OAuth";
  }

  public function __construct($parameters = NULL, $AuthenticationType = NULL) {
    if(get_parent_class('DfpOAuth')) parent::__construct();
    $this->parameters = $parameters;
    $this->AuthenticationType = $AuthenticationType;
  }
}}

if (!class_exists("OrderError", FALSE)) {
/**
 * Lists all errors associated with orders.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class OrderError extends ApiError {
  /**
   * @access public
   * @var tnsOrderErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OrderError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('OrderError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ParseError", FALSE)) {
/**
 * Lists errors related to parsing.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ParseError extends ApiError {
  /**
   * @access public
   * @var tnsParseErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ParseError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('ParseError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("PermissionError", FALSE)) {
/**
 * Errors related to incorrect permission.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class PermissionError extends ApiError {
  /**
   * @access public
   * @var tnsPermissionErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PermissionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('PermissionError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("QuotaError", FALSE)) {
/**
 * Describes a client-side error on which a user is attempting
 * to perform an action to which they have no quota remaining.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class QuotaError extends ApiError {
  /**
   * @access public
   * @var tnsQuotaErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QuotaError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('QuotaError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RangeError", FALSE)) {
/**
 * A list of all errors associated with the Range constraint.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RangeError extends ApiError {
  /**
   * @access public
   * @var tnsRangeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RangeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('RangeError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RegExError", FALSE)) {
/**
 * Caused by supplying a value for an object attribute that does not conform
 * to a documented valid regular expression.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RegExError extends ApiError {
  /**
   * @access public
   * @var tnsRegExErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RegExError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('RegExError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RegionLocation", FALSE)) {
/**
 * Represents a principal subdivision (eg. province or state) of a country for
 * geographical targeting.
 * <p>
 * Since {@code v201104}, fields of this class are ignored on input. Instead
 * {@link Location} should be used and the {@link Location#id} field should be
 * set.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RegionLocation extends DfpLocation {
  /**
   * @access public
   * @var string
   */
  public $regionCode;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RegionLocation";
  }

  public function __construct($regionCode = NULL, $LocationType = NULL) {
    if(get_parent_class('RegionLocation')) parent::__construct();
    $this->regionCode = $regionCode;
    $this->LocationType = $LocationType;
  }
}}

if (!class_exists("RequiredCollectionError", FALSE)) {
/**
 * A list of all errors to be used for validating sizes of collections.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RequiredCollectionError extends ApiError {
  /**
   * @access public
   * @var tnsRequiredCollectionErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredCollectionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('RequiredCollectionError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RequiredError", FALSE)) {
/**
 * Errors due to missing required field.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RequiredError extends ApiError {
  /**
   * @access public
   * @var tnsRequiredErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('RequiredError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RequiredNumberError", FALSE)) {
/**
 * A list of all errors to be used in conjunction with required number
 * validators.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RequiredNumberError extends ApiError {
  /**
   * @access public
   * @var tnsRequiredNumberErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredNumberError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('RequiredNumberError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ReservationDetailsError", FALSE)) {
/**
 * Lists all errors associated with LineItem's reservation details.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ReservationDetailsError extends ApiError {
  /**
   * @access public
   * @var tnsReservationDetailsErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReservationDetailsError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('ReservationDetailsError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ServerError", FALSE)) {
/**
 * Errors related to the server.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ServerError extends ApiError {
  /**
   * @access public
   * @var tnsServerErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ServerError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('ServerError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("Size", FALSE)) {
/**
 * Represents the dimensions of AdUnits, LineItems and Creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class Size {
  /**
   * @access public
   * @var integer
   */
  public $width;

  /**
   * @access public
   * @var integer
   */
  public $height;

  /**
   * @access public
   * @var boolean
   */
  public $isAspectRatio;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Size";
  }

  public function __construct($width = NULL, $height = NULL, $isAspectRatio = NULL) {
    if(get_parent_class('Size')) parent::__construct();
    $this->width = $width;
    $this->height = $height;
    $this->isAspectRatio = $isAspectRatio;
  }
}}

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class SoapRequestHeader {
  /**
   * @access public
   * @var string
   */
  public $networkCode;

  /**
   * @access public
   * @var string
   */
  public $applicationName;

  /**
   * @access public
   * @var Authentication
   */
  public $authentication;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapRequestHeader";
  }

  public function __construct($networkCode = NULL, $applicationName = NULL, $authentication = NULL) {
    if(get_parent_class('SoapRequestHeader')) parent::__construct();
    $this->networkCode = $networkCode;
    $this->applicationName = $applicationName;
    $this->authentication = $authentication;
  }
}}

if (!class_exists("SoapResponseHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API responses.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class SoapResponseHeader {
  /**
   * @access public
   * @var string
   */
  public $requestId;

  /**
   * @access public
   * @var integer
   */
  public $responseTime;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapResponseHeader";
  }

  public function __construct($requestId = NULL, $responseTime = NULL) {
    if(get_parent_class('SoapResponseHeader')) parent::__construct();
    $this->requestId = $requestId;
    $this->responseTime = $responseTime;
  }
}}

if (!class_exists("StatementError", FALSE)) {
/**
 * An error that occurs while parsing {@link Statement} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class StatementError extends ApiError {
  /**
   * @access public
   * @var tnsStatementErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatementError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('StatementError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("Stats", FALSE)) {
/**
 * {@code Stats} contains trafficking statistics for {@link LineItem} and
 * {@link LineItemCreativeAssociation} objects
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class Stats {
  /**
   * @access public
   * @var integer
   */
  public $impressionsDelivered;

  /**
   * @access public
   * @var integer
   */
  public $clicksDelivered;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Stats";
  }

  public function __construct($impressionsDelivered = NULL, $clicksDelivered = NULL) {
    if(get_parent_class('Stats')) parent::__construct();
    $this->impressionsDelivered = $impressionsDelivered;
    $this->clicksDelivered = $clicksDelivered;
  }
}}

if (!class_exists("Targeting", FALSE)) {
/**
 * Contains targeting criteria for {@link LineItem} objects. See
 * {@link LineItem#targeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class Targeting {
  /**
   * @access public
   * @var GeoTargeting
   */
  public $geoTargeting;

  /**
   * @access public
   * @var InventoryTargeting
   */
  public $inventoryTargeting;

  /**
   * @access public
   * @var DayPartTargeting
   */
  public $dayPartTargeting;

  /**
   * @access public
   * @var CustomCriteriaSet
   */
  public $customTargeting;

  /**
   * @access public
   * @var UserDomainTargeting
   */
  public $userDomainTargeting;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Targeting";
  }

  public function __construct($geoTargeting = NULL, $inventoryTargeting = NULL, $dayPartTargeting = NULL, $customTargeting = NULL, $userDomainTargeting = NULL) {
    if(get_parent_class('Targeting')) parent::__construct();
    $this->geoTargeting = $geoTargeting;
    $this->inventoryTargeting = $inventoryTargeting;
    $this->dayPartTargeting = $dayPartTargeting;
    $this->customTargeting = $customTargeting;
    $this->userDomainTargeting = $userDomainTargeting;
  }
}}

if (!class_exists("TimeOfDay", FALSE)) {
/**
 * Represents a specific time in a day.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class TimeOfDay {
  /**
   * @access public
   * @var integer
   */
  public $hour;

  /**
   * @access public
   * @var tnsMinuteOfHour
   */
  public $minute;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TimeOfDay";
  }

  public function __construct($hour = NULL, $minute = NULL) {
    if(get_parent_class('TimeOfDay')) parent::__construct();
    $this->hour = $hour;
    $this->minute = $minute;
  }
}}

if (!class_exists("TypeError", FALSE)) {
/**
 * An error for a field which is an invalid type.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class TypeError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TypeError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('TypeError')) parent::__construct();
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("UniqueError", FALSE)) {
/**
 * An error for a field which must satisfy a uniqueness constraint
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class UniqueError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UniqueError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('UniqueError')) parent::__construct();
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("UserDomainTargeting", FALSE)) {
/**
 * Provides line items the ability to target or exclude users visiting their
 * websites from a list of domains or subdomains.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class UserDomainTargeting {
  /**
   * @access public
   * @var string[]
   */
  public $domains;

  /**
   * @access public
   * @var boolean
   */
  public $targeted;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UserDomainTargeting";
  }

  public function __construct($domains = NULL, $targeted = NULL) {
    if(get_parent_class('UserDomainTargeting')) parent::__construct();
    $this->domains = $domains;
    $this->targeted = $targeted;
  }
}}

if (!class_exists("AdUnitAfcSizeErrorReason", FALSE)) {
/**
 * The supplied Afc size is not valid.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class AdUnitAfcSizeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnitAfcSizeError.Reason";
  }

  public function __construct() {
    if(get_parent_class('AdUnitAfcSizeErrorReason')) parent::__construct();
  }
}}

if (!class_exists("AdUnitCodeErrorReason", FALSE)) {
/**
 * For {@link AdUnit#adUnitCode}, only alpha-numeric characters,
 * underscores, hyphens, periods, asterisks, double quotes, back slashes,
 * forward slashes, exclamations, left angle brackets, colons and
 * parentheses are allowed.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class AdUnitCodeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnitCodeError.Reason";
  }

  public function __construct() {
    if(get_parent_class('AdUnitCodeErrorReason')) parent::__construct();
  }
}}

if (!class_exists("ApiVersionErrorReason", FALSE)) {
/**
 * Indicates that the operation is not allowed in the version the request
 * was made in.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ApiVersionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiVersionError.Reason";
  }

  public function __construct() {
    if(get_parent_class('ApiVersionErrorReason')) parent::__construct();
  }
}}

if (!class_exists("AuthenticationErrorReason", FALSE)) {
/**
 * The SOAP message contains a request header with an ambiguous definition
 * of the authentication header fields. This means either the {@code
 * authToken} and {@code oAuthToken} fields were both null or both were
 * specified. Exactly one value should be specified with each request.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class AuthenticationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthenticationError.Reason";
  }

  public function __construct() {
    if(get_parent_class('AuthenticationErrorReason')) parent::__construct();
  }
}}

if (!class_exists("CommonErrorReason", FALSE)) {
/**
 * Describes reasons for common errors
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CommonErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CommonError.Reason";
  }

  public function __construct() {
    if(get_parent_class('CommonErrorReason')) parent::__construct();
  }
}}

if (!class_exists("ComputedStatus", FALSE)) {
/**
 * Describes the computed {@link LineItem} status that is derived from the
 * current state of the line item.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ComputedStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ComputedStatus";
  }

  public function __construct() {
    if(get_parent_class('ComputedStatus')) parent::__construct();
  }
}}

if (!class_exists("CostType", FALSE)) {
/**
 * Describes the {@link LineItem} actions that are billable.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CostType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CostType";
  }

  public function __construct() {
    if(get_parent_class('CostType')) parent::__construct();
  }
}}

if (!class_exists("CreativeRotationType", FALSE)) {
/**
 * The strategy to use for displaying multiple {@link Creative} objects that are
 * associated with a {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CreativeRotationType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeRotationType";
  }

  public function __construct() {
    if(get_parent_class('CreativeRotationType')) parent::__construct();
  }
}}

if (!class_exists("CustomCriteriaComparisonOperator", FALSE)) {
/**
 * Specifies the available comparison operators.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CustomCriteriaComparisonOperator {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteria.ComparisonOperator";
  }

  public function __construct() {
    if(get_parent_class('CustomCriteriaComparisonOperator')) parent::__construct();
  }
}}

if (!class_exists("CustomCriteriaSetLogicalOperator", FALSE)) {
/**
 * Specifies the available logical operators.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CustomCriteriaSetLogicalOperator {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteriaSet.LogicalOperator";
  }

  public function __construct() {
    if(get_parent_class('CustomCriteriaSetLogicalOperator')) parent::__construct();
  }
}}

if (!class_exists("CustomTargetingValueMatchType", FALSE)) {
/**
 * Represents the ways in which {@link CustomTargetingValue#name} strings will
 * be matched with ad requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CustomTargetingValueMatchType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingValue.MatchType";
  }

  public function __construct() {
    if(get_parent_class('CustomTargetingValueMatchType')) parent::__construct();
  }
}}

if (!class_exists("DayOfWeek", FALSE)) {
/**
 * Days of the week.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class DayOfWeek {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DayOfWeek";
  }

  public function __construct() {
    if(get_parent_class('DayOfWeek')) parent::__construct();
  }
}}

if (!class_exists("DeliveryTimeZone", FALSE)) {
/**
 * Represents the time zone to be used for {@link DayPartTargeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class DeliveryTimeZone {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeliveryTimeZone";
  }

  public function __construct() {
    if(get_parent_class('DeliveryTimeZone')) parent::__construct();
  }
}}

if (!class_exists("DeliveryRateType", FALSE)) {
/**
 * Possible delivery rates for a {@link LineItem}, which dictate the manner in
 * which they are served.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class DeliveryRateType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeliveryRateType";
  }

  public function __construct() {
    if(get_parent_class('DeliveryRateType')) parent::__construct();
  }
}}

if (!class_exists("ForecastErrorReason", FALSE)) {
/**
 * Reason why a forecast could not be retrieved.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ForecastErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ForecastError.Reason";
  }

  public function __construct() {
    if(get_parent_class('ForecastErrorReason')) parent::__construct();
  }
}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * The single reason for the internal API error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class InternalApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalApiError.Reason";
  }

  public function __construct() {
    if(get_parent_class('InternalApiErrorReason')) parent::__construct();
  }
}}

if (!class_exists("InventoryTargetingErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class InventoryTargetingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InventoryTargetingError.Reason";
  }

  public function __construct() {
    if(get_parent_class('InventoryTargetingErrorReason')) parent::__construct();
  }
}}

if (!class_exists("InventoryUnitErrorReason", FALSE)) {
/**
 * Possible reasons for the error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class InventoryUnitErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InventoryUnitError.Reason";
  }

  public function __construct() {
    if(get_parent_class('InventoryUnitErrorReason')) parent::__construct();
  }
}}

if (!class_exists("LineItemDiscountType", FALSE)) {
/**
 * Describes the possible discount types on the cost of booking a
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class LineItemDiscountType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemDiscountType";
  }

  public function __construct() {
    if(get_parent_class('LineItemDiscountType')) parent::__construct();
  }
}}

if (!class_exists("LineItemFlightDateErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class LineItemFlightDateErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemFlightDateError.Reason";
  }

  public function __construct() {
    if(get_parent_class('LineItemFlightDateErrorReason')) parent::__construct();
  }
}}

if (!class_exists("LineItemOperationErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class LineItemOperationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemOperationError.Reason";
  }

  public function __construct() {
    if(get_parent_class('LineItemOperationErrorReason')) parent::__construct();
  }
}}

if (!class_exists("LineItemSummaryDuration", FALSE)) {
/**
 * Specifies the time period used for limiting the number of ads served for a
 * {@link LineItem}. For valid and default values of duration for each line
 * item type, see {@link LineItemSummary#duration}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class LineItemSummaryDuration {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemSummary.Duration";
  }

  public function __construct() {
    if(get_parent_class('LineItemSummaryDuration')) parent::__construct();
  }
}}

if (!class_exists("LineItemSummaryReservationStatus", FALSE)) {
/**
 * Specifies the reservation status of the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class LineItemSummaryReservationStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemSummary.ReservationStatus";
  }

  public function __construct() {
    if(get_parent_class('LineItemSummaryReservationStatus')) parent::__construct();
  }
}}

if (!class_exists("LineItemType", FALSE)) {
/**
 * {@code LineItemType} indicates the priority of a {@link LineItem}, determined
 * by the way in which impressions are reserved to be served for it.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class LineItemType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemType";
  }

  public function __construct() {
    if(get_parent_class('LineItemType')) parent::__construct();
  }
}}

if (!class_exists("MinuteOfHour", FALSE)) {
/**
 * Minutes in an hour. Currently, only 0, 15, 30, and 45 are supported. This
 * field is required.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class MinuteOfHour {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MinuteOfHour";
  }

  public function __construct() {
    if(get_parent_class('MinuteOfHour')) parent::__construct();
  }
}}

if (!class_exists("NotNullErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class NotNullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotNullError.Reason";
  }

  public function __construct() {
    if(get_parent_class('NotNullErrorReason')) parent::__construct();
  }
}}

if (!class_exists("NullErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class NullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NullError.Reason";
  }

  public function __construct() {
    if(get_parent_class('NullErrorReason')) parent::__construct();
  }
}}

if (!class_exists("OrderErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class OrderErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OrderError.Reason";
  }

  public function __construct() {
    if(get_parent_class('OrderErrorReason')) parent::__construct();
  }
}}

if (!class_exists("ParseErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ParseErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ParseError.Reason";
  }

  public function __construct() {
    if(get_parent_class('ParseErrorReason')) parent::__construct();
  }
}}

if (!class_exists("PermissionErrorReason", FALSE)) {
/**
 * Describes reasons for permission errors.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class PermissionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PermissionError.Reason";
  }

  public function __construct() {
    if(get_parent_class('PermissionErrorReason')) parent::__construct();
  }
}}

if (!class_exists("QuotaErrorReason", FALSE)) {
/**
 * The number of requests made per second is too high and has exceeded the
 * allowable limit. Please wait before trying your request again. If you see
 * this error often, try increasing the wait time between requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class QuotaErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QuotaError.Reason";
  }

  public function __construct() {
    if(get_parent_class('QuotaErrorReason')) parent::__construct();
  }
}}

if (!class_exists("RangeErrorReason", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RangeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RangeError.Reason";
  }

  public function __construct() {
    if(get_parent_class('RangeErrorReason')) parent::__construct();
  }
}}

if (!class_exists("RegExErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RegExErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RegExError.Reason";
  }

  public function __construct() {
    if(get_parent_class('RegExErrorReason')) parent::__construct();
  }
}}

if (!class_exists("RequiredCollectionErrorReason", FALSE)) {
/**
 * A required collection is missing.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RequiredCollectionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredCollectionError.Reason";
  }

  public function __construct() {
    if(get_parent_class('RequiredCollectionErrorReason')) parent::__construct();
  }
}}

if (!class_exists("RequiredErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RequiredErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredError.Reason";
  }

  public function __construct() {
    if(get_parent_class('RequiredErrorReason')) parent::__construct();
  }
}}

if (!class_exists("RequiredNumberErrorReason", FALSE)) {
/**
 * Describes reasons for a number to be invalid.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RequiredNumberErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredNumberError.Reason";
  }

  public function __construct() {
    if(get_parent_class('RequiredNumberErrorReason')) parent::__construct();
  }
}}

if (!class_exists("ReservationDetailsErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ReservationDetailsErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReservationDetailsError.Reason";
  }

  public function __construct() {
    if(get_parent_class('ReservationDetailsErrorReason')) parent::__construct();
  }
}}

if (!class_exists("RoadblockingType", FALSE)) {
/**
 * Describes the roadblocking types.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class RoadblockingType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RoadblockingType";
  }

  public function __construct() {
    if(get_parent_class('RoadblockingType')) parent::__construct();
  }
}}

if (!class_exists("ServerErrorReason", FALSE)) {
/**
 * Describes reasons for server errors
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ServerErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ServerError.Reason";
  }

  public function __construct() {
    if(get_parent_class('ServerErrorReason')) parent::__construct();
  }
}}

if (!class_exists("StartDateTimeType", FALSE)) {
/**
 * Specifies the start type to use for an entity with a start date time field.
 * For example, a {@link LineItem} or {@link LineItemCreativeAssociation}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class StartDateTimeType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StartDateTimeType";
  }

  public function __construct() {
    if(get_parent_class('StartDateTimeType')) parent::__construct();
  }
}}

if (!class_exists("StatementErrorReason", FALSE)) {
/**
 * A bind variable has not been bound to a value.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class StatementErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatementError.Reason";
  }

  public function __construct() {
    if(get_parent_class('StatementErrorReason')) parent::__construct();
  }
}}

if (!class_exists("TimeUnit", FALSE)) {
/**
 * Represent the possible time units for frequency capping.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class TimeUnit {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TimeUnit";
  }

  public function __construct() {
    if(get_parent_class('TimeUnit')) parent::__construct();
  }
}}

if (!class_exists("UnitType", FALSE)) {
/**
 * Indicates the type of unit used for defining a reservation. The
 * {@link CostType} can differ from the {@link UnitType} - an
 * ad can have an impression goal, but be billed by its click. Usually
 * {@link CostType} and {@link UnitType} will refer to the
 * same unit.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class UnitType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UnitType";
  }

  public function __construct() {
    if(get_parent_class('UnitType')) parent::__construct();
  }
}}

if (!class_exists("getForecast", FALSE)) {
/**
 * Gets a {@link Forecast} on a prospective {@link LineItem} object. Valid
 * values for {@link LineItem#lineItemType} are
 * {@link LineItemType#SPONSORSHIP} and {@link LineItemType#STANDARD}. Other
 * values will result in
 * {@link ReservationDetailsError.Reason#LINE_ITEM_TYPE_NOT_ALLOWED}.
 * 
 * @param lineItem the target of the forecast. Must be a prospective line item
 * that has not yet been booked in the system. i.e. {@link LineItem#id}
 * must be null.
 * @return the forecasted traffic estimates
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class getForecast {
  /**
   * @access public
   * @var LineItem
   */
  public $lineItem;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($lineItem = NULL) {
    if(get_parent_class('getForecast')) parent::__construct();
    $this->lineItem = $lineItem;
  }
}}

if (!class_exists("getForecastResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class getForecastResponse {
  /**
   * @access public
   * @var Forecast
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('getForecastResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("getForecastById", FALSE)) {
/**
 * Gets a {@link Forecast} for an existing {@link LineItem} object. Only
 * line items having type {@link LineItemType#SPONSORSHIP} or
 * {@link LineItemType#STANDARD} are valid. Other types will result in
 * {@link ReservationDetailsError.Reason#LINE_ITEM_TYPE_NOT_ALLOWED}.
 * 
 * @param lineItemId the ID of a {@link LineItem} to run the forecast on.
 * @return the forecasted traffic estimates
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class getForecastById {
  /**
   * @access public
   * @var integer
   */
  public $lineItemId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($lineItemId = NULL) {
    if(get_parent_class('getForecastById')) parent::__construct();
    $this->lineItemId = $lineItemId;
  }
}}

if (!class_exists("getForecastByIdResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class getForecastByIdResponse {
  /**
   * @access public
   * @var Forecast
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('getForecastByIdResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("AdUnitAfcSizeError", FALSE)) {
/**
 * Caused by supplying sizes that are not compatible with the Afc sizes.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class AdUnitAfcSizeError extends ApiError {
  /**
   * @access public
   * @var tnsAdUnitAfcSizeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnitAfcSizeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('AdUnitAfcSizeError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("AdUnitCodeError", FALSE)) {
/**
 * Lists the generic errors associated with {@link AdUnit#adUnitCode}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class AdUnitCodeError extends ApiError {
  /**
   * @access public
   * @var tnsAdUnitCodeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnitCodeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('AdUnitCodeError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ApiException", FALSE)) {
/**
 * Exception class for holding a list of service errors.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class ApiException extends ApplicationException {
  /**
   * @access public
   * @var ApiError[]
   */
  public $errors;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiException";
  }

  public function __construct($errors = NULL, $message = NULL, $ApplicationExceptionType = NULL) {
    if(get_parent_class('ApiException')) parent::__construct();
    $this->errors = $errors;
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }
}}

if (!class_exists("CityLocation", FALSE)) {
/**
 * Represents a city for geographical targeting.
 * <p>
 * Since {@code v201104}, fields of this class are ignored on input. Instead
 * {@link Location} should be used and the {@link Location#id} field should be
 * set.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CityLocation extends DfpLocation {
  /**
   * @access public
   * @var string
   */
  public $cityName;

  /**
   * @access public
   * @var string
   */
  public $regionCode;

  /**
   * @access public
   * @var string
   */
  public $countryCode;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CityLocation";
  }

  public function __construct($cityName = NULL, $regionCode = NULL, $countryCode = NULL, $LocationType = NULL) {
    if(get_parent_class('CityLocation')) parent::__construct();
    $this->cityName = $cityName;
    $this->regionCode = $regionCode;
    $this->countryCode = $countryCode;
    $this->LocationType = $LocationType;
  }
}}

if (!class_exists("CountryLocation", FALSE)) {
/**
 * Represents a country for geographical targeting.
 * <p>
 * Since {@code v201104}, fields of this class are ignored on input. Instead
 * {@link Location} should be used and the {@link Location#id} field should be
 * set.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CountryLocation extends DfpLocation {
  /**
   * @access public
   * @var string
   */
  public $countryCode;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CountryLocation";
  }

  public function __construct($countryCode = NULL, $LocationType = NULL) {
    if(get_parent_class('CountryLocation')) parent::__construct();
    $this->countryCode = $countryCode;
    $this->LocationType = $LocationType;
  }
}}

if (!class_exists("CustomCriteria", FALSE)) {
/**
 * A {@link CustomCriteria} object is used to perform custom criteria targeting
 * on custom targeting keys of type {@link CustomTargetingKey.Type#PREDEFINED}
 * or {@link CustomTargetingKey.Type#FREEFORM}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CustomCriteria extends CustomCriteriaNode {
  /**
   * @access public
   * @var integer
   */
  public $keyId;

  /**
   * @access public
   * @var tnsCustomCriteriaComparisonOperator
   */
  public $operator;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteria";
  }

  public function __construct($keyId = NULL, $operator = NULL, $CustomCriteriaNodeType = NULL) {
    if(get_parent_class('CustomCriteria')) parent::__construct();
    $this->keyId = $keyId;
    $this->operator = $operator;
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }
}}

if (!class_exists("CustomCriteriaSet", FALSE)) {
/**
 * A {@link CustomCriteriaSet} comprises of a set of {@link CustomCriteriaNode}
 * objects combined by the
 * {@link CustomCriteriaSet.LogicalOperator#logicalOperator}. The custom
 * criteria targeting tree is subject to the rules defined on
 * {@link Targeting#customTargeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class CustomCriteriaSet extends CustomCriteriaNode {
  /**
   * @access public
   * @var tnsCustomCriteriaSetLogicalOperator
   */
  public $logicalOperator;

  /**
   * @access public
   * @var CustomCriteriaNode[]
   */
  public $children;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteriaSet";
  }

  public function __construct($logicalOperator = NULL, $children = NULL, $CustomCriteriaNodeType = NULL) {
    if(get_parent_class('CustomCriteriaSet')) parent::__construct();
    $this->logicalOperator = $logicalOperator;
    $this->children = $children;
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }
}}

if (!class_exists("FreeFormCustomCriteria", FALSE)) {
/**
 * A {@link FreeFormCustomCriteria} object is used to perform custom criteria
 * targeting on custom targeting keys of type
 * {@link CustomTargetingKey.Type#FREEFORM}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class FreeFormCustomCriteria extends CustomCriteria {
  /**
   * @access public
   * @var CustomTargetingValue[]
   */
  public $values;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FreeFormCustomCriteria";
  }

  public function __construct($values = NULL, $keyId = NULL, $operator = NULL, $CustomCriteriaNodeType = NULL) {
    if(get_parent_class('FreeFormCustomCriteria')) parent::__construct();
    $this->values = $values;
    $this->keyId = $keyId;
    $this->operator = $operator;
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }
}}

if (!class_exists("LineItem", FALSE)) {
/**
 * {@code LineItem} is an advertiser's commitment to purchase a specific number
 * of ad impressions, clicks, or time.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class LineItem extends LineItemSummary {
  /**
   * @access public
   * @var Targeting
   */
  public $targeting;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItem";
  }

  public function __construct($targeting = NULL, $orderId = NULL, $id = NULL, $name = NULL, $orderName = NULL, $startDateTime = NULL, $startDateTimeType = NULL, $endDateTime = NULL, $unlimitedEndDateTime = NULL, $creativeRotationType = NULL, $deliveryRateType = NULL, $roadblockingType = NULL, $frequencyCaps = NULL, $lineItemType = NULL, $unitType = NULL, $duration = NULL, $unitsBought = NULL, $costPerUnit = NULL, $valueCostPerUnit = NULL, $costType = NULL, $discountType = NULL, $discount = NULL, $creativeSizes = NULL, $allowOverbook = NULL, $stats = NULL, $deliveryIndicator = NULL, $deliveryData = NULL, $budget = NULL, $status = NULL, $reservationStatus = NULL, $isArchived = NULL, $LineItemSummaryType = NULL) {
    if(get_parent_class('LineItem')) parent::__construct();
    $this->targeting = $targeting;
    $this->orderId = $orderId;
    $this->id = $id;
    $this->name = $name;
    $this->orderName = $orderName;
    $this->startDateTime = $startDateTime;
    $this->startDateTimeType = $startDateTimeType;
    $this->endDateTime = $endDateTime;
    $this->unlimitedEndDateTime = $unlimitedEndDateTime;
    $this->creativeRotationType = $creativeRotationType;
    $this->deliveryRateType = $deliveryRateType;
    $this->roadblockingType = $roadblockingType;
    $this->frequencyCaps = $frequencyCaps;
    $this->lineItemType = $lineItemType;
    $this->unitType = $unitType;
    $this->duration = $duration;
    $this->unitsBought = $unitsBought;
    $this->costPerUnit = $costPerUnit;
    $this->valueCostPerUnit = $valueCostPerUnit;
    $this->costType = $costType;
    $this->discountType = $discountType;
    $this->discount = $discount;
    $this->creativeSizes = $creativeSizes;
    $this->allowOverbook = $allowOverbook;
    $this->stats = $stats;
    $this->deliveryIndicator = $deliveryIndicator;
    $this->deliveryData = $deliveryData;
    $this->budget = $budget;
    $this->status = $status;
    $this->reservationStatus = $reservationStatus;
    $this->isArchived = $isArchived;
    $this->LineItemSummaryType = $LineItemSummaryType;
  }
}}

if (!class_exists("PredefinedCustomCriteria", FALSE)) {
/**
 * A {@link PredefinedCustomCriteria} object is used to perform custom criteria
 * targeting on custom targeting keys of type
 * {@link CustomTargetingKey.Type#PREDEFINED}.
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 */
class PredefinedCustomCriteria extends CustomCriteria {
  /**
   * @access public
   * @var integer[]
   */
  public $valueIds;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201103";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PredefinedCustomCriteria";
  }

  public function __construct($valueIds = NULL, $keyId = NULL, $operator = NULL, $CustomCriteriaNodeType = NULL) {
    if(get_parent_class('PredefinedCustomCriteria')) parent::__construct();
    $this->valueIds = $valueIds;
    $this->keyId = $keyId;
    $this->operator = $operator;
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }
}}

if (!class_exists("ForecastService", FALSE)) {
/**
 * ForecastService
 * @package GoogleApiAdsDfp
 * @subpackage v201103
 * @author WSDLInterpreter
 */
class ForecastService extends DfpSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "DateTime" => "DfpDateTime",
    "Location" => "DfpLocation",
    "OAuth" => "DfpOAuth",
    "AdUnitAfcSizeError" => "AdUnitAfcSizeError",
    "ApiError" => "ApiError",
    "AdUnitCodeError" => "AdUnitCodeError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "ApiVersionError" => "ApiVersionError",
    "Authentication" => "Authentication",
    "AuthenticationError" => "AuthenticationError",
    "CityLocation" => "CityLocation",
    "ClientLogin" => "ClientLogin",
    "CommonError" => "CommonError",
    "CountryLocation" => "CountryLocation",
    "CustomCriteria" => "CustomCriteria",
    "CustomCriteriaNode" => "CustomCriteriaNode",
    "CustomCriteriaSet" => "CustomCriteriaSet",
    "CustomTargetingValue" => "CustomTargetingValue",
    "Date" => "Date",
    "DayPart" => "DayPart",
    "DayPartTargeting" => "DayPartTargeting",
    "DeliveryData" => "DeliveryData",
    "DeliveryIndicator" => "DeliveryIndicator",
    "Forecast" => "Forecast",
    "ForecastError" => "ForecastError",
    "FreeFormCustomCriteria" => "FreeFormCustomCriteria",
    "FrequencyCap" => "FrequencyCap",
    "GeoTargeting" => "GeoTargeting",
    "InternalApiError" => "InternalApiError",
    "InventoryTargeting" => "InventoryTargeting",
    "InventoryTargetingError" => "InventoryTargetingError",
    "InventoryUnitError" => "InventoryUnitError",
    "LineItem" => "LineItem",
    "LineItemSummary" => "LineItemSummary",
    "LineItemFlightDateError" => "LineItemFlightDateError",
    "LineItemOperationError" => "LineItemOperationError",
    "MetroLocation" => "MetroLocation",
    "Money" => "Money",
    "NotNullError" => "NotNullError",
    "NullError" => "NullError",
    "OrderError" => "OrderError",
    "ParseError" => "ParseError",
    "PermissionError" => "PermissionError",
    "PredefinedCustomCriteria" => "PredefinedCustomCriteria",
    "QuotaError" => "QuotaError",
    "RangeError" => "RangeError",
    "RegExError" => "RegExError",
    "RegionLocation" => "RegionLocation",
    "RequiredCollectionError" => "RequiredCollectionError",
    "RequiredError" => "RequiredError",
    "RequiredNumberError" => "RequiredNumberError",
    "ReservationDetailsError" => "ReservationDetailsError",
    "ServerError" => "ServerError",
    "Size" => "Size",
    "SoapRequestHeader" => "SoapRequestHeader",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StatementError" => "StatementError",
    "Stats" => "Stats",
    "Targeting" => "Targeting",
    "TimeOfDay" => "TimeOfDay",
    "TypeError" => "TypeError",
    "UniqueError" => "UniqueError",
    "UserDomainTargeting" => "UserDomainTargeting",
    "AdUnitAfcSizeError.Reason" => "AdUnitAfcSizeErrorReason",
    "AdUnitCodeError.Reason" => "AdUnitCodeErrorReason",
    "ApiVersionError.Reason" => "ApiVersionErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "CommonError.Reason" => "CommonErrorReason",
    "ComputedStatus" => "ComputedStatus",
    "CostType" => "CostType",
    "CreativeRotationType" => "CreativeRotationType",
    "CustomCriteria.ComparisonOperator" => "CustomCriteriaComparisonOperator",
    "CustomCriteriaSet.LogicalOperator" => "CustomCriteriaSetLogicalOperator",
    "CustomTargetingValue.MatchType" => "CustomTargetingValueMatchType",
    "DayOfWeek" => "DayOfWeek",
    "DeliveryTimeZone" => "DeliveryTimeZone",
    "DeliveryRateType" => "DeliveryRateType",
    "ForecastError.Reason" => "ForecastErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
    "InventoryUnitError.Reason" => "InventoryUnitErrorReason",
    "LineItemDiscountType" => "LineItemDiscountType",
    "LineItemFlightDateError.Reason" => "LineItemFlightDateErrorReason",
    "LineItemOperationError.Reason" => "LineItemOperationErrorReason",
    "LineItemSummary.Duration" => "LineItemSummaryDuration",
    "LineItemSummary.ReservationStatus" => "LineItemSummaryReservationStatus",
    "LineItemType" => "LineItemType",
    "MinuteOfHour" => "MinuteOfHour",
    "NotNullError.Reason" => "NotNullErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OrderError.Reason" => "OrderErrorReason",
    "ParseError.Reason" => "ParseErrorReason",
    "PermissionError.Reason" => "PermissionErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RegExError.Reason" => "RegExErrorReason",
    "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
    "ReservationDetailsError.Reason" => "ReservationDetailsErrorReason",
    "RoadblockingType" => "RoadblockingType",
    "ServerError.Reason" => "ServerErrorReason",
    "StartDateTimeType" => "StartDateTimeType",
    "StatementError.Reason" => "StatementErrorReason",
    "TimeUnit" => "TimeUnit",
    "UnitType" => "UnitType",
    "getForecast" => "getForecast",
    "getForecastResponse" => "getForecastResponse",
    "getForecastById" => "getForecastById",
    "getForecastByIdResponse" => "getForecastByIdResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://sandbox.google.com/apis/ads/publisher/v201103/ForecastService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = ForecastService::$classmap;
    parent::__construct($wsdl, $options, $user, 'ForecastService', 'https://www.google.com/apis/ads/publisher/v201103');
  }

  /**
   * Gets a {@link Forecast} on a prospective {@link LineItem} object. Valid
   * values for {@link LineItem#lineItemType} are
   * {@link LineItemType#SPONSORSHIP} and {@link LineItemType#STANDARD}. Other
   * values will result in
   * {@link ReservationDetailsError.Reason#LINE_ITEM_TYPE_NOT_ALLOWED}.
   * 
   * @param lineItem the target of the forecast. Must be a prospective line item
   * that has not yet been booked in the system. i.e. {@link LineItem#id}
   * must be null.
   * @return the forecasted traffic estimates
   */
  public function getForecast($lineItem) {
    $arg = new getForecast($lineItem);
    $result = $this->__soapCall("getForecast", array($arg));
    return $result->rval;
  }


  /**
   * Gets a {@link Forecast} for an existing {@link LineItem} object. Only
   * line items having type {@link LineItemType#SPONSORSHIP} or
   * {@link LineItemType#STANDARD} are valid. Other types will result in
   * {@link ReservationDetailsError.Reason#LINE_ITEM_TYPE_NOT_ALLOWED}.
   * 
   * @param lineItemId the ID of a {@link LineItem} to run the forecast on.
   * @return the forecasted traffic estimates
   */
  public function getForecastById($lineItemId) {
    $arg = new getForecastById($lineItemId);
    $result = $this->__soapCall("getForecastById", array($arg));
    return $result->rval;
  }


}}

?>