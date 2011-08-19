<?php
/**
 * Contains all client objects for the CustomTargetingService service.
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
 * @subpackage v201104
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda <eric.koleda@google.com>
 */

/** Required classes. **/
require_once dirname(__FILE__) . "/../Lib/DfpSoapClient.php";

if (!class_exists("CustomTargetingKey", FALSE)) {
/**
 * {@code CustomTargetingKey} represents a key used for custom targeting.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class CustomTargetingKey {
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
   * @var tnsCustomTargetingKeyType
   */
  public $type;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingKey";
  }

  public function __construct($id = NULL, $name = NULL, $displayName = NULL, $type = NULL) {
    if(get_parent_class('CustomTargetingKey')) parent::__construct();
    $this->id = $id;
    $this->name = $name;
    $this->displayName = $displayName;
    $this->type = $type;
  }
}}

if (!class_exists("CustomTargetingKeyPage", FALSE)) {
/**
 * Captures a page of {@link CustomTargetingKey} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class CustomTargetingKeyPage {
  /**
   * @access public
   * @var integer
   */
  public $totalResultSetSize;

  /**
   * @access public
   * @var integer
   */
  public $startIndex;

  /**
   * @access public
   * @var CustomTargetingKey[]
   */
  public $results;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingKeyPage";
  }

  public function __construct($totalResultSetSize = NULL, $startIndex = NULL, $results = NULL) {
    if(get_parent_class('CustomTargetingKeyPage')) parent::__construct();
    $this->totalResultSetSize = $totalResultSetSize;
    $this->startIndex = $startIndex;
    $this->results = $results;
  }
}}

if (!class_exists("CustomTargetingValue", FALSE)) {
/**
 * {@code CustomTargetingValue} represents a value used for custom targeting.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("CustomTargetingValuePage", FALSE)) {
/**
 * Captures a page of {@link CustomTargetingValue} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class CustomTargetingValuePage {
  /**
   * @access public
   * @var integer
   */
  public $totalResultSetSize;

  /**
   * @access public
   * @var integer
   */
  public $startIndex;

  /**
   * @access public
   * @var CustomTargetingValue[]
   */
  public $results;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingValuePage";
  }

  public function __construct($totalResultSetSize = NULL, $startIndex = NULL, $results = NULL) {
    if(get_parent_class('CustomTargetingValuePage')) parent::__construct();
    $this->totalResultSetSize = $totalResultSetSize;
    $this->startIndex = $startIndex;
    $this->results = $results;
  }
}}

if (!class_exists("SoapResponseHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API responses.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("UpdateResult", FALSE)) {
/**
 * Represents the result of performing an action on objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class UpdateResult {
  /**
   * @access public
   * @var integer
   */
  public $numChanges;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UpdateResult";
  }

  public function __construct($numChanges = NULL) {
    if(get_parent_class('UpdateResult')) parent::__construct();
    $this->numChanges = $numChanges;
  }
}}

if (!class_exists("Value", FALSE)) {
/**
 * {@code Value} represents a value.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class Value {
  /**
   * @access public
   * @var string
   */
  public $ValueType;

  private $_parameterMap = array (
    "Value.Type" => "ValueType",
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
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Value";
  }

  public function __construct($ValueType = NULL) {
    if(get_parent_class('Value')) parent::__construct();
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("Authentication", FALSE)) {
/**
 * {@code Authentication} represents the authentication protocols that can be
 * used.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("CustomTargetingKeyAction", FALSE)) {
/**
 * Represents the actions that can be performed on {@link CustomTargetingKey}
 * objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class CustomTargetingKeyAction {
  /**
   * @access public
   * @var string
   */
  public $CustomTargetingKeyActionType;

  private $_parameterMap = array (
    "CustomTargetingKeyAction.Type" => "CustomTargetingKeyActionType",
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
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingKeyAction";
  }

  public function __construct($CustomTargetingKeyActionType = NULL) {
    if(get_parent_class('CustomTargetingKeyAction')) parent::__construct();
    $this->CustomTargetingKeyActionType = $CustomTargetingKeyActionType;
  }
}}

if (!class_exists("CustomTargetingValueAction", FALSE)) {
/**
 * Represents the actions that can be performed on {@link CustomTargetingValue}
 * objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class CustomTargetingValueAction {
  /**
   * @access public
   * @var string
   */
  public $CustomTargetingValueActionType;

  private $_parameterMap = array (
    "CustomTargetingValueAction.Type" => "CustomTargetingValueActionType",
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
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingValueAction";
  }

  public function __construct($CustomTargetingValueActionType = NULL) {
    if(get_parent_class('CustomTargetingValueAction')) parent::__construct();
    $this->CustomTargetingValueActionType = $CustomTargetingValueActionType;
  }
}}

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("String_ValueMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type String
 * and value of type Value.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class String_ValueMapEntry {
  /**
   * @access public
   * @var string
   */
  public $key;

  /**
   * @access public
   * @var Value
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "String_ValueMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    if(get_parent_class('String_ValueMapEntry')) parent::__construct();
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("ApiError", FALSE)) {
/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("ApplicationException", FALSE)) {
/**
 * Base class for exceptions.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("Statement", FALSE)) {
/**
 * Captures the {@code WHERE}, {@code ORDER BY} and {@code LIMIT} clauses of a
 * PQL query. Statements are typically used to retrieve objects of a predefined
 * domain type, which makes SELECT clause unnecessary.
 * <p>
 * An example query text might be {@code "WHERE status = 'ACTIVE' ORDER BY id
 * LIMIT 30"}.
 * </p>
 * <p>
 * Statements also support bind variables. These are substitutes for literals
 * and can be thought of as input parameters to a PQL query.
 * </p>
 * <p>
 * An example of such a query might be {@code "WHERE id = :idValue"}.
 * </p>
 * If using an API version newer than V201010, the value for the variable
 * idValue must then be set with an object of type {@link Value} and is one of
 * {@link NumberValue}, {@link TextValue} or {@link BooleanValue}.
 * <p>
 * If using an API version older than or equal to V201010, the value for the
 * variable idValue must then be set with an object of type {@link Param} and is
 * one of {@link DoubleParam}, {@link LongParam} or {@link StringParam}.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class Statement {
  /**
   * @access public
   * @var string
   */
  public $query;

  /**
   * @access public
   * @var String_ValueMapEntry[]
   */
  public $values;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Statement";
  }

  public function __construct($query = NULL, $values = NULL) {
    if(get_parent_class('Statement')) parent::__construct();
    $this->query = $query;
    $this->values = $values;
  }
}}

if (!class_exists("AuthenticationErrorReason", FALSE)) {
/**
 * The SOAP message contains a request header with an ambiguous definition
 * of the authentication header fields. This means either the {@code
 * authToken} and {@code oAuthToken} fields were both null or both were
 * specified. Exactly one value should be specified with each request.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class AuthenticationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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
 * @subpackage v201104
 */
class CommonErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("CustomTargetingErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class CustomTargetingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingError.Reason";
  }

  public function __construct() {
    if(get_parent_class('CustomTargetingErrorReason')) parent::__construct();
  }
}}

if (!class_exists("CustomTargetingKeyType", FALSE)) {
/**
 * Specifies the types for {@code CustomTargetingKey} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class CustomTargetingKeyType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingKey.Type";
  }

  public function __construct() {
    if(get_parent_class('CustomTargetingKeyType')) parent::__construct();
  }
}}

if (!class_exists("CustomTargetingValueMatchType", FALSE)) {
/**
 * Represents the ways in which {@link CustomTargetingValue#name} strings will
 * be matched with ad requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class CustomTargetingValueMatchType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * The single reason for the internal API error.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class InternalApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("NotNullErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class NotNullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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
 * The reasons for the validation error.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class NullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("ParseErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class ParseErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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
 * @subpackage v201104
 */
class PermissionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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
 * @subpackage v201104
 */
class QuotaErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("RequiredErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class RequiredErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("ServerErrorReason", FALSE)) {
/**
 * Describes reasons for server errors
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class ServerErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("StatementErrorReason", FALSE)) {
/**
 * A bind variable has not been bound to a value.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class StatementErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("createCustomTargetingKeys", FALSE)) {
/**
 * Creates new {@link CustomTargetingKey} objects.
 * 
 * The following fields are required:
 * <ul>
 * <li>{@link CustomTargetingKey#name}</li>
 * <li>{@link CustomTargetingKey#type}</li>
 * </ul>
 * 
 * @param keys the custom targeting keys to update
 * @return the updated custom targeting keys
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class createCustomTargetingKeys {
  /**
   * @access public
   * @var CustomTargetingKey[]
   */
  public $keys;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($keys = NULL) {
    if(get_parent_class('createCustomTargetingKeys')) parent::__construct();
    $this->keys = $keys;
  }
}}

if (!class_exists("createCustomTargetingKeysResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class createCustomTargetingKeysResponse {
  /**
   * @access public
   * @var CustomTargetingKey[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('createCustomTargetingKeysResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("createCustomTargetingValues", FALSE)) {
/**
 * Creates new {@link CustomTargetingValue} objects.
 * 
 * The following fields are required:
 * <ul>
 * <li>{@link CustomTargetingValue#customTargetingKeyId}</li>
 * <li>{@link CustomTargetingValue#name}</li>
 * </ul>
 * 
 * @param values the custom targeting values to update
 * @return the updated custom targeting keys
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class createCustomTargetingValues {
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
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($values = NULL) {
    if(get_parent_class('createCustomTargetingValues')) parent::__construct();
    $this->values = $values;
  }
}}

if (!class_exists("createCustomTargetingValuesResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class createCustomTargetingValuesResponse {
  /**
   * @access public
   * @var CustomTargetingValue[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('createCustomTargetingValuesResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("getCustomTargetingKeysByStatement", FALSE)) {
/**
 * Gets a {@link CustomTargetingKeyPage} of {@link CustomTargetingKey} objects
 * that satisfy the given {@link Statement#query}. The following fields are
 * supported for filtering:
 * 
 * <table>
 * <tr>
 * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
 * </tr>
 * <tr>
 * <tr>
 * <td>{@code id}</td>
 * <td>{@link CustomTargetingKey#id}</td>
 * </tr>
 * <tr>
 * <td>{@code name}</td>
 * <td>{@link CustomTargetingKey#name}</td>
 * </tr>
 * <tr>
 * <td>{@code displayName}</td>
 * <td>{@link CustomTargetingKey#displayName}</td>
 * </tr>
 * <tr>
 * <td>{@code type}</td>
 * <td>{@link CustomTargetingKey#type}</td>
 * </tr>
 * </table>
 * 
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of custom targeting keys
 * @return the custom targeting keys that match the given filter
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class getCustomTargetingKeysByStatement {
  /**
   * @access public
   * @var Statement
   */
  public $filterStatement;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($filterStatement = NULL) {
    if(get_parent_class('getCustomTargetingKeysByStatement')) parent::__construct();
    $this->filterStatement = $filterStatement;
  }
}}

if (!class_exists("getCustomTargetingKeysByStatementResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class getCustomTargetingKeysByStatementResponse {
  /**
   * @access public
   * @var CustomTargetingKeyPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('getCustomTargetingKeysByStatementResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("getCustomTargetingValuesByStatement", FALSE)) {
/**
 * Gets a {@link CustomTargetingValuePage} of {@link CustomTargetingValue}
 * objects that satisfy the given {@link Statement#query}.
 * <p>
 * The {@code WHERE} clause in the {@link Statement#query} must always contain
 * {@link CustomTargetingValue#customTargetingKeyId} as one of its columns in
 * a way that it is AND'ed with the rest of the query. So, if you want to
 * retrieve values for a known set of key ids, valid {@link Statement#query}
 * would look like:
 * </p>
 * <ol>
 * <li>
 * "WHERE customTargetingKeyId IN ('17','18','19')" retrieves all values that
 * are associated with keys having ids 17, 18, 19.
 * </li>
 * <li>
 * "WHERE customTargetingKeyId = '17' AND name = 'red'" retrieves values that
 * are associated with keys having id 17 and value name is 'red'.
 * </li>
 * </ol>
 * </p>
 * <p>
 * The following fields are supported for filtering:
 * </p>
 * <table>
 * <tr>
 * <th scope="col">PQL Property</th>
 * <th scope="col">Object Property</th>
 * </tr>
 * <tr>
 * <td>{@code id}</td>
 * <td>{@link CustomTargetingValue#id}</td>
 * </tr>
 * <tr>
 * <td>{@code customTargetingKeyId}</td>
 * <td>{@link CustomTargetingValue#customTargetingKeyId}</td>
 * </tr>
 * <tr>
 * <td>{@code name}</td>
 * <td>{@link CustomTargetingValue#name}</td>
 * </tr>
 * <tr>
 * <td>{@code displayName}</td>
 * <td>{@link CustomTargetingValue#displayName}</td>
 * </tr>
 * <tr>
 * <td>{@code matchType}</td>
 * <td>{@link CustomTargetingValue#matchType}</td>
 * </tr>
 * </table>
 * 
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of custom targeting values
 * @return the custom targeting values that match the given filter
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class getCustomTargetingValuesByStatement {
  /**
   * @access public
   * @var Statement
   */
  public $filterStatement;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($filterStatement = NULL) {
    if(get_parent_class('getCustomTargetingValuesByStatement')) parent::__construct();
    $this->filterStatement = $filterStatement;
  }
}}

if (!class_exists("getCustomTargetingValuesByStatementResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class getCustomTargetingValuesByStatementResponse {
  /**
   * @access public
   * @var CustomTargetingValuePage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('getCustomTargetingValuesByStatementResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("performCustomTargetingKeyAction", FALSE)) {
/**
 * Performs actions on {@link CustomTargetingKey} objects that match the given
 * {@link Statement#query}.
 * 
 * @param customTargetingKeyAction the action to perform
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of custom targeting keys
 * @return the result of the action performed
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class performCustomTargetingKeyAction {
  /**
   * @access public
   * @var CustomTargetingKeyAction
   */
  public $customTargetingKeyAction;

  /**
   * @access public
   * @var Statement
   */
  public $filterStatement;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($customTargetingKeyAction = NULL, $filterStatement = NULL) {
    if(get_parent_class('performCustomTargetingKeyAction')) parent::__construct();
    $this->customTargetingKeyAction = $customTargetingKeyAction;
    $this->filterStatement = $filterStatement;
  }
}}

if (!class_exists("performCustomTargetingKeyActionResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class performCustomTargetingKeyActionResponse {
  /**
   * @access public
   * @var UpdateResult
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('performCustomTargetingKeyActionResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("performCustomTargetingValueAction", FALSE)) {
/**
 * Performs actions on {@link CustomTargetingValue} objects that match the
 * given {@link Statement#query}.
 * 
 * @param customTargetingValueAction the action to perform
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of ad units
 * @return the result of the action performed
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class performCustomTargetingValueAction {
  /**
   * @access public
   * @var CustomTargetingValueAction
   */
  public $customTargetingValueAction;

  /**
   * @access public
   * @var Statement
   */
  public $filterStatement;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($customTargetingValueAction = NULL, $filterStatement = NULL) {
    if(get_parent_class('performCustomTargetingValueAction')) parent::__construct();
    $this->customTargetingValueAction = $customTargetingValueAction;
    $this->filterStatement = $filterStatement;
  }
}}

if (!class_exists("performCustomTargetingValueActionResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class performCustomTargetingValueActionResponse {
  /**
   * @access public
   * @var UpdateResult
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('performCustomTargetingValueActionResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("updateCustomTargetingKeys", FALSE)) {
/**
 * Updates the specified {@link CustomTargetingKey} objects.
 * 
 * @param keys the custom targeting keys to update
 * @return the updated custom targeting keys
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class updateCustomTargetingKeys {
  /**
   * @access public
   * @var CustomTargetingKey[]
   */
  public $keys;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($keys = NULL) {
    if(get_parent_class('updateCustomTargetingKeys')) parent::__construct();
    $this->keys = $keys;
  }
}}

if (!class_exists("updateCustomTargetingKeysResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class updateCustomTargetingKeysResponse {
  /**
   * @access public
   * @var CustomTargetingKey[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('updateCustomTargetingKeysResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("updateCustomTargetingValues", FALSE)) {
/**
 * Updates the specified {@link CustomTargetingValue} objects.
 * 
 * @param values the custom targeting values to update
 * @return the updated custom targeting values
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class updateCustomTargetingValues {
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
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($values = NULL) {
    if(get_parent_class('updateCustomTargetingValues')) parent::__construct();
    $this->values = $values;
  }
}}

if (!class_exists("updateCustomTargetingValuesResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class updateCustomTargetingValuesResponse {
  /**
   * @access public
   * @var CustomTargetingValue[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('updateCustomTargetingValuesResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * An error for an exception that occurred when authenticating.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("BooleanValue", FALSE)) {
/**
 * Contains a boolean value.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class BooleanValue extends Value {
  /**
   * @access public
   * @var boolean
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BooleanValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    if(get_parent_class('BooleanValue')) parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("ClientLogin", FALSE)) {
/**
 * The credentials for the {@code ClientLogin} API authentication protocol.
 * 
 * See {@link http://code.google.com/apis/accounts/docs/AuthForInstalledApps.html}.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("CustomTargetingError", FALSE)) {
/**
 * Lists all errors related to {@link CustomTargetingKey} and
 * {@link CustomTargetingValue} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class CustomTargetingError extends ApiError {
  /**
   * @access public
   * @var tnsCustomTargetingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('CustomTargetingError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DeleteCustomTargetingKeys", FALSE)) {
/**
 * Represents the delete action that can be performed on
 * {@link CustomTargetingKey} objects. Deleting a key will not delete the
 * {@link CustomTargetingValue} objects associated with it. Also, if a custom
 * targeting key that has been deleted is recreated, any previous custom
 * targeting values associated with it that were not deleted will continue to
 * exist.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class DeleteCustomTargetingKeys extends CustomTargetingKeyAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeleteCustomTargetingKeys";
  }

  public function __construct($CustomTargetingKeyActionType = NULL) {
    if(get_parent_class('DeleteCustomTargetingKeys')) parent::__construct();
    $this->CustomTargetingKeyActionType = $CustomTargetingKeyActionType;
  }
}}

if (!class_exists("DeleteCustomTargetingValues", FALSE)) {
/**
 * Represents the delete action that can be performed on
 * {@link CustomTargetingValue} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class DeleteCustomTargetingValues extends CustomTargetingValueAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeleteCustomTargetingValues";
  }

  public function __construct($CustomTargetingValueActionType = NULL) {
    if(get_parent_class('DeleteCustomTargetingValues')) parent::__construct();
    $this->CustomTargetingValueActionType = $CustomTargetingValueActionType;
  }
}}

if (!class_exists("InternalApiError", FALSE)) {
/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("NotNullError", FALSE)) {
/**
 * Caused by supplying a null value for an attribute that cannot be null.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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
 * Errors associated with contents not null constraint.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("NumberValue", FALSE)) {
/**
 * Contains a numeric value.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class NumberValue extends Value {
  /**
   * @access public
   * @var string
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NumberValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    if(get_parent_class('NumberValue')) parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("DfpOAuth", FALSE)) {
/**
 * The credentials for the {@code OAuth} authentication protocol.
 * 
 * See {@link http://oauth.net/}.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("ParseError", FALSE)) {
/**
 * Lists errors related to parsing.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("RequiredError", FALSE)) {
/**
 * Errors due to missing required field.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("ServerError", FALSE)) {
/**
 * Errors related to the server.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("StatementError", FALSE)) {
/**
 * An error that occurs while parsing {@link Statement} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("TextValue", FALSE)) {
/**
 * Contains a string value.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class TextValue extends Value {
  /**
   * @access public
   * @var string
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TextValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    if(get_parent_class('TextValue')) parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("TypeError", FALSE)) {
/**
 * An error for a field which is an invalid type.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 */
class TypeError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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
 * @subpackage v201104
 */
class UniqueError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("ApiException", FALSE)) {
/**
 * Exception class for holding a list of service errors.
 * @package GoogleApiAdsDfp
 * @subpackage v201104
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
    return "https://www.google.com/apis/ads/publisher/v201104";
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

if (!class_exists("CustomTargetingService", FALSE)) {
/**
 * CustomTargetingService
 * @package GoogleApiAdsDfp
 * @subpackage v201104
 * @author WSDLInterpreter
 */
class CustomTargetingService extends DfpSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "DateTime" => "DfpDateTime",
    "Location" => "DfpLocation",
    "OAuth" => "DfpOAuth",
    "AuthenticationError" => "AuthenticationError",
    "ApiError" => "ApiError",
    "BooleanValue" => "BooleanValue",
    "Value" => "Value",
    "ClientLogin" => "ClientLogin",
    "Authentication" => "Authentication",
    "CommonError" => "CommonError",
    "CustomTargetingError" => "CustomTargetingError",
    "CustomTargetingKey" => "CustomTargetingKey",
    "CustomTargetingKeyPage" => "CustomTargetingKeyPage",
    "CustomTargetingValue" => "CustomTargetingValue",
    "CustomTargetingValuePage" => "CustomTargetingValuePage",
    "DeleteCustomTargetingKeys" => "DeleteCustomTargetingKeys",
    "CustomTargetingKeyAction" => "CustomTargetingKeyAction",
    "DeleteCustomTargetingValues" => "DeleteCustomTargetingValues",
    "CustomTargetingValueAction" => "CustomTargetingValueAction",
    "InternalApiError" => "InternalApiError",
    "NotNullError" => "NotNullError",
    "NullError" => "NullError",
    "NumberValue" => "NumberValue",
    "ParseError" => "ParseError",
    "PermissionError" => "PermissionError",
    "QuotaError" => "QuotaError",
    "RequiredError" => "RequiredError",
    "ServerError" => "ServerError",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StatementError" => "StatementError",
    "TextValue" => "TextValue",
    "TypeError" => "TypeError",
    "UniqueError" => "UniqueError",
    "UpdateResult" => "UpdateResult",
    "SoapRequestHeader" => "SoapRequestHeader",
    "String_ValueMapEntry" => "String_ValueMapEntry",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "Statement" => "Statement",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "CommonError.Reason" => "CommonErrorReason",
    "CustomTargetingError.Reason" => "CustomTargetingErrorReason",
    "CustomTargetingKey.Type" => "CustomTargetingKeyType",
    "CustomTargetingValue.MatchType" => "CustomTargetingValueMatchType",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "NotNullError.Reason" => "NotNullErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "ParseError.Reason" => "ParseErrorReason",
    "PermissionError.Reason" => "PermissionErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "ServerError.Reason" => "ServerErrorReason",
    "StatementError.Reason" => "StatementErrorReason",
    "createCustomTargetingKeys" => "createCustomTargetingKeys",
    "createCustomTargetingKeysResponse" => "createCustomTargetingKeysResponse",
    "createCustomTargetingValues" => "createCustomTargetingValues",
    "createCustomTargetingValuesResponse" => "createCustomTargetingValuesResponse",
    "getCustomTargetingKeysByStatement" => "getCustomTargetingKeysByStatement",
    "getCustomTargetingKeysByStatementResponse" => "getCustomTargetingKeysByStatementResponse",
    "getCustomTargetingValuesByStatement" => "getCustomTargetingValuesByStatement",
    "getCustomTargetingValuesByStatementResponse" => "getCustomTargetingValuesByStatementResponse",
    "performCustomTargetingKeyAction" => "performCustomTargetingKeyAction",
    "performCustomTargetingKeyActionResponse" => "performCustomTargetingKeyActionResponse",
    "performCustomTargetingValueAction" => "performCustomTargetingValueAction",
    "performCustomTargetingValueActionResponse" => "performCustomTargetingValueActionResponse",
    "updateCustomTargetingKeys" => "updateCustomTargetingKeys",
    "updateCustomTargetingKeysResponse" => "updateCustomTargetingKeysResponse",
    "updateCustomTargetingValues" => "updateCustomTargetingValues",
    "updateCustomTargetingValuesResponse" => "updateCustomTargetingValuesResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://sandbox.google.com/apis/ads/publisher/v201104/CustomTargetingService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = CustomTargetingService::$classmap;
    parent::__construct($wsdl, $options, $user, 'CustomTargetingService', 'https://www.google.com/apis/ads/publisher/v201104');
  }

  /**
   * Creates new {@link CustomTargetingKey} objects.
   * 
   * The following fields are required:
   * <ul>
   * <li>{@link CustomTargetingKey#name}</li>
   * <li>{@link CustomTargetingKey#type}</li>
   * </ul>
   * 
   * @param keys the custom targeting keys to update
   * @return the updated custom targeting keys
   */
  public function createCustomTargetingKeys($keys) {
    $arg = new createCustomTargetingKeys($keys);
    $result = $this->__soapCall("createCustomTargetingKeys", array($arg));
    return $result->rval;
  }


  /**
   * Creates new {@link CustomTargetingValue} objects.
   * 
   * The following fields are required:
   * <ul>
   * <li>{@link CustomTargetingValue#customTargetingKeyId}</li>
   * <li>{@link CustomTargetingValue#name}</li>
   * </ul>
   * 
   * @param values the custom targeting values to update
   * @return the updated custom targeting keys
   */
  public function createCustomTargetingValues($values) {
    $arg = new createCustomTargetingValues($values);
    $result = $this->__soapCall("createCustomTargetingValues", array($arg));
    return $result->rval;
  }


  /**
   * Gets a {@link CustomTargetingKeyPage} of {@link CustomTargetingKey} objects
   * that satisfy the given {@link Statement#query}. The following fields are
   * supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link CustomTargetingKey#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link CustomTargetingKey#name}</td>
   * </tr>
   * <tr>
   * <td>{@code displayName}</td>
   * <td>{@link CustomTargetingKey#displayName}</td>
   * </tr>
   * <tr>
   * <td>{@code type}</td>
   * <td>{@link CustomTargetingKey#type}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of custom targeting keys
   * @return the custom targeting keys that match the given filter
   */
  public function getCustomTargetingKeysByStatement($filterStatement) {
    $arg = new getCustomTargetingKeysByStatement($filterStatement);
    $result = $this->__soapCall("getCustomTargetingKeysByStatement", array($arg));
    return $result->rval;
  }


  /**
   * Gets a {@link CustomTargetingValuePage} of {@link CustomTargetingValue}
   * objects that satisfy the given {@link Statement#query}.
   * <p>
   * The {@code WHERE} clause in the {@link Statement#query} must always contain
   * {@link CustomTargetingValue#customTargetingKeyId} as one of its columns in
   * a way that it is AND'ed with the rest of the query. So, if you want to
   * retrieve values for a known set of key ids, valid {@link Statement#query}
   * would look like:
   * </p>
   * <ol>
   * <li>
   * "WHERE customTargetingKeyId IN ('17','18','19')" retrieves all values that
   * are associated with keys having ids 17, 18, 19.
   * </li>
   * <li>
   * "WHERE customTargetingKeyId = '17' AND name = 'red'" retrieves values that
   * are associated with keys having id 17 and value name is 'red'.
   * </li>
   * </ol>
   * </p>
   * <p>
   * The following fields are supported for filtering:
   * </p>
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th>
   * <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link CustomTargetingValue#id}</td>
   * </tr>
   * <tr>
   * <td>{@code customTargetingKeyId}</td>
   * <td>{@link CustomTargetingValue#customTargetingKeyId}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link CustomTargetingValue#name}</td>
   * </tr>
   * <tr>
   * <td>{@code displayName}</td>
   * <td>{@link CustomTargetingValue#displayName}</td>
   * </tr>
   * <tr>
   * <td>{@code matchType}</td>
   * <td>{@link CustomTargetingValue#matchType}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of custom targeting values
   * @return the custom targeting values that match the given filter
   */
  public function getCustomTargetingValuesByStatement($filterStatement) {
    $arg = new getCustomTargetingValuesByStatement($filterStatement);
    $result = $this->__soapCall("getCustomTargetingValuesByStatement", array($arg));
    return $result->rval;
  }


  /**
   * Performs actions on {@link CustomTargetingKey} objects that match the given
   * {@link Statement#query}.
   * 
   * @param customTargetingKeyAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of custom targeting keys
   * @return the result of the action performed
   */
  public function performCustomTargetingKeyAction($customTargetingKeyAction, $filterStatement) {
    $arg = new performCustomTargetingKeyAction($customTargetingKeyAction, $filterStatement);
    $result = $this->__soapCall("performCustomTargetingKeyAction", array($arg));
    return $result->rval;
  }


  /**
   * Performs actions on {@link CustomTargetingValue} objects that match the
   * given {@link Statement#query}.
   * 
   * @param customTargetingValueAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of ad units
   * @return the result of the action performed
   */
  public function performCustomTargetingValueAction($customTargetingValueAction, $filterStatement) {
    $arg = new performCustomTargetingValueAction($customTargetingValueAction, $filterStatement);
    $result = $this->__soapCall("performCustomTargetingValueAction", array($arg));
    return $result->rval;
  }


  /**
   * Updates the specified {@link CustomTargetingKey} objects.
   * 
   * @param keys the custom targeting keys to update
   * @return the updated custom targeting keys
   */
  public function updateCustomTargetingKeys($keys) {
    $arg = new updateCustomTargetingKeys($keys);
    $result = $this->__soapCall("updateCustomTargetingKeys", array($arg));
    return $result->rval;
  }


  /**
   * Updates the specified {@link CustomTargetingValue} objects.
   * 
   * @param values the custom targeting values to update
   * @return the updated custom targeting values
   */
  public function updateCustomTargetingValues($values) {
    $arg = new updateCustomTargetingValues($values);
    $result = $this->__soapCall("updateCustomTargetingValues", array($arg));
    return $result->rval;
  }


}}

?>