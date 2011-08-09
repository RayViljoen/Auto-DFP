<?php
/**
 * Contains all client objects for the InventoryService service.
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
 * @subpackage v201010
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda <eric.koleda@google.com>
 */

/** Required classes. **/
require_once dirname(__FILE__) . "/../Lib/DfpSoapClient.php";

if (!class_exists("Size", FALSE)) {
/**
 * Represents the dimensions of AdUnits, LineItems and Creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("Size_StringMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type Size
 * and value of type String.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class Size_StringMapEntry {
  /**
   * @access public
   * @var Size
   */
  public $key;

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
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Size_StringMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    if(get_parent_class('Size_StringMapEntry')) parent::__construct();
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("SoapResponseHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API responses.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("AdSenseSettings", FALSE)) {
/**
 * Contains the AdSense configuration for an {@link AdUnit}.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdSenseSettings {
  /**
   * @access public
   * @var boolean
   */
  public $adSenseEnabled;

  /**
   * @access public
   * @var string
   */
  public $borderColor;

  /**
   * @access public
   * @var string
   */
  public $titleColor;

  /**
   * @access public
   * @var string
   */
  public $backgroundColor;

  /**
   * @access public
   * @var string
   */
  public $textColor;

  /**
   * @access public
   * @var string
   */
  public $urlColor;

  /**
   * @access public
   * @var tnsAdSenseSettingsAdType
   */
  public $adType;

  /**
   * @access public
   * @var tnsAdSenseSettingsBorderStyle
   */
  public $borderStyle;

  /**
   * @access public
   * @var tnsAdSenseSettingsFontFamily
   */
  public $fontFamily;

  /**
   * @access public
   * @var tnsAdSenseSettingsFontSize
   */
  public $fontSize;

  /**
   * @access public
   * @var Size_StringMapEntry[]
   */
  public $afcFormats;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSenseSettings";
  }

  public function __construct($adSenseEnabled = NULL, $borderColor = NULL, $titleColor = NULL, $backgroundColor = NULL, $textColor = NULL, $urlColor = NULL, $adType = NULL, $borderStyle = NULL, $fontFamily = NULL, $fontSize = NULL, $afcFormats = NULL) {
    if(get_parent_class('AdSenseSettings')) parent::__construct();
    $this->adSenseEnabled = $adSenseEnabled;
    $this->borderColor = $borderColor;
    $this->titleColor = $titleColor;
    $this->backgroundColor = $backgroundColor;
    $this->textColor = $textColor;
    $this->urlColor = $urlColor;
    $this->adType = $adType;
    $this->borderStyle = $borderStyle;
    $this->fontFamily = $fontFamily;
    $this->fontSize = $fontSize;
    $this->afcFormats = $afcFormats;
  }
}}

if (!class_exists("AdSenseSettingsInheritedProperty", FALSE)) {
/**
 * The property of the AdUnit that specifies how and from where the
 * AdSenseSettings are inherited.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdSenseSettingsInheritedProperty {
  /**
   * @access public
   * @var AdSenseSettings
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSenseSettingsInheritedProperty";
  }

  public function __construct($value = NULL) {
    if(get_parent_class('AdSenseSettingsInheritedProperty')) parent::__construct();
    $this->value = $value;
  }
}}

if (!class_exists("AdUnitAction", FALSE)) {
/**
 * Represents the actions that can be performed on {@link AdUnit} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdUnitAction {
  /**
   * @access public
   * @var string
   */
  public $AdUnitActionType;

  private $_parameterMap = array (
    "AdUnitAction.Type" => "AdUnitActionType",
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
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnitAction";
  }

  public function __construct($AdUnitActionType = NULL) {
    if(get_parent_class('AdUnitAction')) parent::__construct();
    $this->AdUnitActionType = $AdUnitActionType;
  }
}}

if (!class_exists("Param", FALSE)) {
/**
 * Represents a bind variable's value for a PQL {@link Statement}.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class Param {
  /**
   * @access public
   * @var string
   */
  public $ParamType;

  private $_parameterMap = array (
    "Param.Type" => "ParamType",
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
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Param";
  }

  public function __construct($ParamType = NULL) {
    if(get_parent_class('Param')) parent::__construct();
    $this->ParamType = $ParamType;
  }
}}

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class SoapRequestHeader {
  /**
   * @access public
   * @var string
   */
  public $authToken;

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
   * @var string
   */
  public $oAuthToken;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapRequestHeader";
  }

  public function __construct($authToken = NULL, $networkCode = NULL, $applicationName = NULL, $oAuthToken = NULL) {
    if(get_parent_class('SoapRequestHeader')) parent::__construct();
    $this->authToken = $authToken;
    $this->networkCode = $networkCode;
    $this->applicationName = $applicationName;
    $this->oAuthToken = $oAuthToken;
  }
}}

if (!class_exists("String_ParamMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type String
 * and value of type Param.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class String_ParamMapEntry {
  /**
   * @access public
   * @var string
   */
  public $key;

  /**
   * @access public
   * @var Param
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "String_ParamMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    if(get_parent_class('String_ParamMapEntry')) parent::__construct();
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("AdUnit", FALSE)) {
/**
 * An {@code AdUnit} represents a chunk of identified inventory for the
 * publisher. It contains all the settings that need to be associated with
 * inventory in order to serve ads to it. An {@code AdUnit} can also be the
 * parent of other ad units in the inventory hierarchy.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdUnit {
  /**
   * @access public
   * @var string
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $parentId;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var string
   */
  public $description;

  /**
   * @access public
   * @var tnsAdUnitTargetWindow
   */
  public $targetWindow;

  /**
   * @access public
   * @var tnsInventoryStatus
   */
  public $status;

  /**
   * @access public
   * @var string
   */
  public $adUnitCode;

  /**
   * @access public
   * @var Size[]
   */
  public $sizes;

  /**
   * @access public
   * @var boolean
   */
  public $explicitlyTargeted;

  /**
   * @access public
   * @var AdSenseSettingsInheritedProperty
   */
  public $inheritedAdSenseSettings;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnit";
  }

  public function __construct($id = NULL, $parentId = NULL, $name = NULL, $description = NULL, $targetWindow = NULL, $status = NULL, $adUnitCode = NULL, $sizes = NULL, $explicitlyTargeted = NULL, $inheritedAdSenseSettings = NULL) {
    if(get_parent_class('AdUnit')) parent::__construct();
    $this->id = $id;
    $this->parentId = $parentId;
    $this->name = $name;
    $this->description = $description;
    $this->targetWindow = $targetWindow;
    $this->status = $status;
    $this->adUnitCode = $adUnitCode;
    $this->sizes = $sizes;
    $this->explicitlyTargeted = $explicitlyTargeted;
    $this->inheritedAdSenseSettings = $inheritedAdSenseSettings;
  }
}}

if (!class_exists("AdUnitPage", FALSE)) {
/**
 * Captures a page of {@link AdUnit} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdUnitPage {
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
   * @var AdUnit[]
   */
  public $results;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnitPage";
  }

  public function __construct($totalResultSetSize = NULL, $startIndex = NULL, $results = NULL) {
    if(get_parent_class('AdUnitPage')) parent::__construct();
    $this->totalResultSetSize = $totalResultSetSize;
    $this->startIndex = $startIndex;
    $this->results = $results;
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
 */
class Statement {
  /**
   * @access public
   * @var string
   */
  public $query;

  /**
   * @access public
   * @var String_ParamMapEntry[]
   */
  public $params;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Statement";
  }

  public function __construct($query = NULL, $params = NULL) {
    if(get_parent_class('Statement')) parent::__construct();
    $this->query = $query;
    $this->params = $params;
  }
}}

if (!class_exists("AdSenseSettingsAdType", FALSE)) {
/**
 * Specifies the type of ads that can be served through this {@link AdUnit}.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdSenseSettingsAdType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSenseSettings.AdType";
  }

  public function __construct() {
    if(get_parent_class('AdSenseSettingsAdType')) parent::__construct();
  }
}}

if (!class_exists("AdSenseSettingsBorderStyle", FALSE)) {
/**
 * Describes the border of the HTML elements used to surround an ad
 * displayed by the {@link AdUnit}.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdSenseSettingsBorderStyle {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSenseSettings.BorderStyle";
  }

  public function __construct() {
    if(get_parent_class('AdSenseSettingsBorderStyle')) parent::__construct();
  }
}}

if (!class_exists("AdSenseSettingsFontFamily", FALSE)) {
/**
 * List of all possible font families.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdSenseSettingsFontFamily {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSenseSettings.FontFamily";
  }

  public function __construct() {
    if(get_parent_class('AdSenseSettingsFontFamily')) parent::__construct();
  }
}}

if (!class_exists("AdSenseSettingsFontSize", FALSE)) {
/**
 * List of all possible font sizes the user can choose.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdSenseSettingsFontSize {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSenseSettings.FontSize";
  }

  public function __construct() {
    if(get_parent_class('AdSenseSettingsFontSize')) parent::__construct();
  }
}}

if (!class_exists("AdUnitAfcSizeErrorReason", FALSE)) {
/**
 * The supplied Afc size is not valid.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdUnitAfcSizeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * forward slashes, commas, exclamations, left angle brackets, and colons
 * are allowed.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdUnitCodeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("AdUnitTargetWindow", FALSE)) {
/**
 * Corresponds to an HTML link's {@code target} attribute.
 * 
 * @see <a href="http://www.w3.org/TR/html401/present/frames.html#adef-target">
 * HTML Target Information</a>
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdUnitTargetWindow {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnit.TargetWindow";
  }

  public function __construct() {
    if(get_parent_class('AdUnitTargetWindow')) parent::__construct();
  }
}}

if (!class_exists("AdUnitHierarchyErrorReason", FALSE)) {
/**
 * The depth of the {@link AdUnit} in the inventory hierarchy is greater
 * than is allowed. The maximum allowed depth is two below the effective
 * root ad unit for Premium accounts and one level below effective root ad
 * unit for Small Business accounts.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdUnitHierarchyErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnitHierarchyError.Reason";
  }

  public function __construct() {
    if(get_parent_class('AdUnitHierarchyErrorReason')) parent::__construct();
  }
}}

if (!class_exists("ApiVersionErrorReason", FALSE)) {
/**
 * Indicates that the operation is not allowed in the version the request
 * was made in.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class ApiVersionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
 */
class AuthenticationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
 */
class CommonErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("FrequencyCapErrorReason", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class FrequencyCapErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FrequencyCapError.Reason";
  }

  public function __construct() {
    if(get_parent_class('FrequencyCapErrorReason')) parent::__construct();
  }
}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * The single reason for the internal API error.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class InternalApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("InventoryStatus", FALSE)) {
/**
 * Represents the status of objects that represent inventory - ad units and
 * placements.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class InventoryStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InventoryStatus";
  }

  public function __construct() {
    if(get_parent_class('InventoryStatus')) parent::__construct();
  }
}}

if (!class_exists("InventoryUnitErrorReason", FALSE)) {
/**
 * Possible reasons for the error.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class InventoryUnitErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("NotNullErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class NotNullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
 */
class NullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
 */
class ParseErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
 */
class PermissionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("PublisherQueryLanguageContextErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class PublisherQueryLanguageContextErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageContextError.Reason";
  }

  public function __construct() {
    if(get_parent_class('PublisherQueryLanguageContextErrorReason')) parent::__construct();
  }
}}

if (!class_exists("PublisherQueryLanguageSyntaxErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class PublisherQueryLanguageSyntaxErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageSyntaxError.Reason";
  }

  public function __construct() {
    if(get_parent_class('PublisherQueryLanguageSyntaxErrorReason')) parent::__construct();
  }
}}

if (!class_exists("QuotaErrorReason", FALSE)) {
/**
 * The number of requests made per second is too high and has exceeded the
 * allowable limit. Please wait before trying your request again. If you see
 * this error often, try increasing the wait time between requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class QuotaErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("RegExErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class RegExErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("RequiredErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class RequiredErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
 */
class ServerErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
 */
class StatementErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("createAdUnit", FALSE)) {
/**
 * Creates a new {@link AdUnit}.
 * 
 * The following fields are required:
 * <ul>
 * <li>{@link AdUnit#name}</li>
 * <li>{@link AdUnit#parentId}</li>
 * </ul>
 * 
 * @param adUnit the ad unit to create
 * @return the new ad unit with its ID set
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class createAdUnit {
  /**
   * @access public
   * @var AdUnit
   */
  public $adUnit;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($adUnit = NULL) {
    if(get_parent_class('createAdUnit')) parent::__construct();
    $this->adUnit = $adUnit;
  }
}}

if (!class_exists("createAdUnitResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class createAdUnitResponse {
  /**
   * @access public
   * @var AdUnit
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('createAdUnitResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("createAdUnits", FALSE)) {
/**
 * Creates new {@link AdUnit} objects.
 * 
 * @param adUnits the ad units to create
 * @return the created ad units, with their IDs filled in
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class createAdUnits {
  /**
   * @access public
   * @var AdUnit[]
   */
  public $adUnits;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($adUnits = NULL) {
    if(get_parent_class('createAdUnits')) parent::__construct();
    $this->adUnits = $adUnits;
  }
}}

if (!class_exists("createAdUnitsResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class createAdUnitsResponse {
  /**
   * @access public
   * @var AdUnit[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('createAdUnitsResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("getAdUnit", FALSE)) {
/**
 * Returns the {@link AdUnit} uniquely identified by the given ID.
 * 
 * @param adUnitId ID of the ad unit, which must already exist
 * @return the {@code AdUnit} uniquely identified by the given ID
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class getAdUnit {
  /**
   * @access public
   * @var string
   */
  public $adUnitId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($adUnitId = NULL) {
    if(get_parent_class('getAdUnit')) parent::__construct();
    $this->adUnitId = $adUnitId;
  }
}}

if (!class_exists("getAdUnitResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class getAdUnitResponse {
  /**
   * @access public
   * @var AdUnit
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('getAdUnitResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("getAdUnitsByStatement", FALSE)) {
/**
 * Gets a {@link AdUnitPage} of {@link AdUnit} objects that satisfy the given
 * {@link Statement#query}. The following fields are supported for filtering:
 * 
 * <table>
 * <tr>
 * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
 * </tr>
 * <tr>
 * <td>{@code adUnitCode}</td>
 * <td>{@link AdUnit#adUnitCode}</td>
 * </tr>
 * <tr>
 * <td>{@code id}</td>
 * <td>{@link AdUnit#id}</td>
 * </tr>
 * <tr>
 * <td>{@code name}</td>
 * <td>{@link AdUnit#name}</td>
 * </tr>
 * <tr>
 * <td>{@code parentId}</td>
 * <td>{@link AdUnit#parentId}</td>
 * </tr>
 * <tr>
 * <td>{@code status}</td>
 * <td>{@link AdUnit#status}</td>
 * </tr>
 * </table>
 * 
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of ad units
 * @return the ad units that match the given filter
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class getAdUnitsByStatement {
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
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($filterStatement = NULL) {
    if(get_parent_class('getAdUnitsByStatement')) parent::__construct();
    $this->filterStatement = $filterStatement;
  }
}}

if (!class_exists("getAdUnitsByStatementResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class getAdUnitsByStatementResponse {
  /**
   * @access public
   * @var AdUnitPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('getAdUnitsByStatementResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("performAdUnitAction", FALSE)) {
/**
 * Performs actions on {@link AdUnit} objects that match the given
 * {@link Statement#query}.
 * 
 * @param adUnitAction the action to perform
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of ad units
 * @return the result of the action performed
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class performAdUnitAction {
  /**
   * @access public
   * @var AdUnitAction
   */
  public $adUnitAction;

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
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($adUnitAction = NULL, $filterStatement = NULL) {
    if(get_parent_class('performAdUnitAction')) parent::__construct();
    $this->adUnitAction = $adUnitAction;
    $this->filterStatement = $filterStatement;
  }
}}

if (!class_exists("performAdUnitActionResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class performAdUnitActionResponse {
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
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('performAdUnitActionResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("updateAdUnit", FALSE)) {
/**
 * Updates the specified {@link AdUnit}.
 * 
 * @param adUnit the ad unit to update
 * @return the updated ad unit
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class updateAdUnit {
  /**
   * @access public
   * @var AdUnit
   */
  public $adUnit;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($adUnit = NULL) {
    if(get_parent_class('updateAdUnit')) parent::__construct();
    $this->adUnit = $adUnit;
  }
}}

if (!class_exists("updateAdUnitResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class updateAdUnitResponse {
  /**
   * @access public
   * @var AdUnit
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('updateAdUnitResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("updateAdUnits", FALSE)) {
/**
 * Updates the specified {@link AdUnit} objects.
 * 
 * @param adUnits the ad units to update
 * @return the updated ad units
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class updateAdUnits {
  /**
   * @access public
   * @var AdUnit[]
   */
  public $adUnits;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($adUnits = NULL) {
    if(get_parent_class('updateAdUnits')) parent::__construct();
    $this->adUnits = $adUnits;
  }
}}

if (!class_exists("updateAdUnitsResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class updateAdUnitsResponse {
  /**
   * @access public
   * @var AdUnit[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('updateAdUnitsResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("ActivateAdUnits", FALSE)) {
/**
 * The action used for activating {@link AdUnit} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class ActivateAdUnits extends AdUnitAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ActivateAdUnits";
  }

  public function __construct($AdUnitActionType = NULL) {
    if(get_parent_class('ActivateAdUnits')) parent::__construct();
    $this->AdUnitActionType = $AdUnitActionType;
  }
}}

if (!class_exists("AdUnitAfcSizeError", FALSE)) {
/**
 * Caused by supplying sizes that are not compatible with the Afc sizes.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("AdUnitHierarchyError", FALSE)) {
/**
 * Caused by creating an {@link AdUnit} object with an invalid hierarchy.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AdUnitHierarchyError extends ApiError {
  /**
   * @access public
   * @var tnsAdUnitHierarchyErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnitHierarchyError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('AdUnitHierarchyError')) parent::__construct();
    $this->reason = $reason;
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("ArchiveAdUnits", FALSE)) {
/**
 * The action used for archiving {@link AdUnit} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class ArchiveAdUnits extends AdUnitAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ArchiveAdUnits";
  }

  public function __construct($AdUnitActionType = NULL) {
    if(get_parent_class('ArchiveAdUnits')) parent::__construct();
    $this->AdUnitActionType = $AdUnitActionType;
  }
}}

if (!class_exists("AssignAdUnitsToPlacement", FALSE)) {
/**
 * The action used for assigning a group of {@link AdUnit} objects to a
 * {@link Placement}.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class AssignAdUnitsToPlacement extends AdUnitAction {
  /**
   * @access public
   * @var integer
   */
  public $placementId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AssignAdUnitsToPlacement";
  }

  public function __construct($placementId = NULL, $AdUnitActionType = NULL) {
    if(get_parent_class('AssignAdUnitsToPlacement')) parent::__construct();
    $this->placementId = $placementId;
    $this->AdUnitActionType = $AdUnitActionType;
  }
}}

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * An error for an exception that occurred when authenticating.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("CommonError", FALSE)) {
/**
 * A place for common errors that can be used across services.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("DeactivateAdUnits", FALSE)) {
/**
 * The action used for deactivating {@link AdUnit} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class DeactivateAdUnits extends AdUnitAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeactivateAdUnits";
  }

  public function __construct($AdUnitActionType = NULL) {
    if(get_parent_class('DeactivateAdUnits')) parent::__construct();
    $this->AdUnitActionType = $AdUnitActionType;
  }
}}

if (!class_exists("DoubleParam", FALSE)) {
/**
 * Contains a {@code Double} bind variable's value for a PQL {@link Statement}.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class DoubleParam extends Param {
  /**
   * @access public
   * @var double
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DoubleParam";
  }

  public function __construct($value = NULL, $ParamType = NULL) {
    if(get_parent_class('DoubleParam')) parent::__construct();
    $this->value = $value;
    $this->ParamType = $ParamType;
  }
}}

if (!class_exists("FrequencyCapError", FALSE)) {
/**
 * Lists all errors associated with frequency caps.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class FrequencyCapError extends ApiError {
  /**
   * @access public
   * @var tnsFrequencyCapErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FrequencyCapError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('FrequencyCapError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("InternalApiError", FALSE)) {
/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("InventoryUnitError", FALSE)) {
/**
 * Lists the generic errors associated with {@link AdUnit} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("LongParam", FALSE)) {
/**
 * Contains a {@code Long} bind variable's value for a PQL {@link Statement}.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class LongParam extends Param {
  /**
   * @access public
   * @var integer
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LongParam";
  }

  public function __construct($value = NULL, $ParamType = NULL) {
    if(get_parent_class('LongParam')) parent::__construct();
    $this->value = $value;
    $this->ParamType = $ParamType;
  }
}}

if (!class_exists("NotNullError", FALSE)) {
/**
 * Caused by supplying a null value for an attribute that cannot be null.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("ParseError", FALSE)) {
/**
 * Lists errors related to parsing.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("PublisherQueryLanguageContextError", FALSE)) {
/**
 * An error that occurs while executing a PQL query contained in
 * a {@link Statement} object.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class PublisherQueryLanguageContextError extends ApiError {
  /**
   * @access public
   * @var tnsPublisherQueryLanguageContextErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageContextError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('PublisherQueryLanguageContextError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("PublisherQueryLanguageSyntaxError", FALSE)) {
/**
 * An error that occurs while parsing a PQL query contained in a
 * {@link Statement} object.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class PublisherQueryLanguageSyntaxError extends ApiError {
  /**
   * @access public
   * @var tnsPublisherQueryLanguageSyntaxErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageSyntaxError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('PublisherQueryLanguageSyntaxError')) parent::__construct();
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("RegExError", FALSE)) {
/**
 * Caused by supplying a value for an object attribute that does not conform
 * to a documented valid regular expression.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("RequiredError", FALSE)) {
/**
 * Errors due to missing required field.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("StringParam", FALSE)) {
/**
 * Contains a string bind variable's value for a PQL {@link Statement}.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class StringParam extends Param {
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
    return "https://www.google.com/apis/ads/publisher/v201010";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringParam";
  }

  public function __construct($value = NULL, $ParamType = NULL) {
    if(get_parent_class('StringParam')) parent::__construct();
    $this->value = $value;
    $this->ParamType = $ParamType;
  }
}}

if (!class_exists("TypeError", FALSE)) {
/**
 * An error for a field which is an invalid type.
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 */
class TypeError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
 */
class UniqueError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201010";
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
 * @subpackage v201010
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
    return "https://www.google.com/apis/ads/publisher/v201010";
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

if (!class_exists("InventoryService", FALSE)) {
/**
 * InventoryService
 * @package GoogleApiAdsDfp
 * @subpackage v201010
 * @author WSDLInterpreter
 */
class InventoryService extends DfpSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "DateTime" => "DfpDateTime",
    "Location" => "DfpLocation",
    "OAuth" => "DfpOAuth",
    "ActivateAdUnits" => "ActivateAdUnits",
    "AdUnitAction" => "AdUnitAction",
    "AdUnitAfcSizeError" => "AdUnitAfcSizeError",
    "ApiError" => "ApiError",
    "AdUnitCodeError" => "AdUnitCodeError",
    "AdUnitHierarchyError" => "AdUnitHierarchyError",
    "ApiVersionError" => "ApiVersionError",
    "ArchiveAdUnits" => "ArchiveAdUnits",
    "AssignAdUnitsToPlacement" => "AssignAdUnitsToPlacement",
    "AuthenticationError" => "AuthenticationError",
    "CommonError" => "CommonError",
    "DeactivateAdUnits" => "DeactivateAdUnits",
    "DoubleParam" => "DoubleParam",
    "Param" => "Param",
    "FrequencyCapError" => "FrequencyCapError",
    "InternalApiError" => "InternalApiError",
    "InventoryUnitError" => "InventoryUnitError",
    "LongParam" => "LongParam",
    "NotNullError" => "NotNullError",
    "NullError" => "NullError",
    "ParseError" => "ParseError",
    "PermissionError" => "PermissionError",
    "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
    "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
    "QuotaError" => "QuotaError",
    "RegExError" => "RegExError",
    "RequiredError" => "RequiredError",
    "ServerError" => "ServerError",
    "Size" => "Size",
    "Size_StringMapEntry" => "Size_StringMapEntry",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StatementError" => "StatementError",
    "StringParam" => "StringParam",
    "TypeError" => "TypeError",
    "UniqueError" => "UniqueError",
    "UpdateResult" => "UpdateResult",
    "AdSenseSettings" => "AdSenseSettings",
    "AdSenseSettingsInheritedProperty" => "AdSenseSettingsInheritedProperty",
    "SoapRequestHeader" => "SoapRequestHeader",
    "String_ParamMapEntry" => "String_ParamMapEntry",
    "AdUnit" => "AdUnit",
    "AdUnitPage" => "AdUnitPage",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "Statement" => "Statement",
    "AdSenseSettings.AdType" => "AdSenseSettingsAdType",
    "AdSenseSettings.BorderStyle" => "AdSenseSettingsBorderStyle",
    "AdSenseSettings.FontFamily" => "AdSenseSettingsFontFamily",
    "AdSenseSettings.FontSize" => "AdSenseSettingsFontSize",
    "AdUnitAfcSizeError.Reason" => "AdUnitAfcSizeErrorReason",
    "AdUnitCodeError.Reason" => "AdUnitCodeErrorReason",
    "AdUnit.TargetWindow" => "AdUnitTargetWindow",
    "AdUnitHierarchyError.Reason" => "AdUnitHierarchyErrorReason",
    "ApiVersionError.Reason" => "ApiVersionErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "CommonError.Reason" => "CommonErrorReason",
    "FrequencyCapError.Reason" => "FrequencyCapErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "InventoryStatus" => "InventoryStatus",
    "InventoryUnitError.Reason" => "InventoryUnitErrorReason",
    "NotNullError.Reason" => "NotNullErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "ParseError.Reason" => "ParseErrorReason",
    "PermissionError.Reason" => "PermissionErrorReason",
    "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
    "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RegExError.Reason" => "RegExErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "ServerError.Reason" => "ServerErrorReason",
    "StatementError.Reason" => "StatementErrorReason",
    "createAdUnit" => "createAdUnit",
    "createAdUnitResponse" => "createAdUnitResponse",
    "createAdUnits" => "createAdUnits",
    "createAdUnitsResponse" => "createAdUnitsResponse",
    "getAdUnit" => "getAdUnit",
    "getAdUnitResponse" => "getAdUnitResponse",
    "getAdUnitsByStatement" => "getAdUnitsByStatement",
    "getAdUnitsByStatementResponse" => "getAdUnitsByStatementResponse",
    "performAdUnitAction" => "performAdUnitAction",
    "performAdUnitActionResponse" => "performAdUnitActionResponse",
    "updateAdUnit" => "updateAdUnit",
    "updateAdUnitResponse" => "updateAdUnitResponse",
    "updateAdUnits" => "updateAdUnits",
    "updateAdUnitsResponse" => "updateAdUnitsResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://sandbox.google.com/apis/ads/publisher/v201010/InventoryService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = InventoryService::$classmap;
    parent::__construct($wsdl, $options, $user, 'InventoryService', 'https://www.google.com/apis/ads/publisher/v201010');
  }

  /**
   * Creates a new {@link AdUnit}.
   * 
   * The following fields are required:
   * <ul>
   * <li>{@link AdUnit#name}</li>
   * <li>{@link AdUnit#parentId}</li>
   * </ul>
   * 
   * @param adUnit the ad unit to create
   * @return the new ad unit with its ID set
   */
  public function createAdUnit($adUnit) {
    $arg = new createAdUnit($adUnit);
    $result = $this->__soapCall("createAdUnit", array($arg));
    return $result->rval;
  }


  /**
   * Creates new {@link AdUnit} objects.
   * 
   * @param adUnits the ad units to create
   * @return the created ad units, with their IDs filled in
   */
  public function createAdUnits($adUnits) {
    $arg = new createAdUnits($adUnits);
    $result = $this->__soapCall("createAdUnits", array($arg));
    return $result->rval;
  }


  /**
   * Returns the {@link AdUnit} uniquely identified by the given ID.
   * 
   * @param adUnitId ID of the ad unit, which must already exist
   * @return the {@code AdUnit} uniquely identified by the given ID
   */
  public function getAdUnit($adUnitId) {
    $arg = new getAdUnit($adUnitId);
    $result = $this->__soapCall("getAdUnit", array($arg));
    return $result->rval;
  }


  /**
   * Gets a {@link AdUnitPage} of {@link AdUnit} objects that satisfy the given
   * {@link Statement#query}. The following fields are supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code adUnitCode}</td>
   * <td>{@link AdUnit#adUnitCode}</td>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link AdUnit#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link AdUnit#name}</td>
   * </tr>
   * <tr>
   * <td>{@code parentId}</td>
   * <td>{@link AdUnit#parentId}</td>
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@link AdUnit#status}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of ad units
   * @return the ad units that match the given filter
   */
  public function getAdUnitsByStatement($filterStatement) {
    $arg = new getAdUnitsByStatement($filterStatement);
    $result = $this->__soapCall("getAdUnitsByStatement", array($arg));
    return $result->rval;
  }


  /**
   * Performs actions on {@link AdUnit} objects that match the given
   * {@link Statement#query}.
   * 
   * @param adUnitAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of ad units
   * @return the result of the action performed
   */
  public function performAdUnitAction($adUnitAction, $filterStatement) {
    $arg = new performAdUnitAction($adUnitAction, $filterStatement);
    $result = $this->__soapCall("performAdUnitAction", array($arg));
    return $result->rval;
  }


  /**
   * Updates the specified {@link AdUnit}.
   * 
   * @param adUnit the ad unit to update
   * @return the updated ad unit
   */
  public function updateAdUnit($adUnit) {
    $arg = new updateAdUnit($adUnit);
    $result = $this->__soapCall("updateAdUnit", array($arg));
    return $result->rval;
  }


  /**
   * Updates the specified {@link AdUnit} objects.
   * 
   * @param adUnits the ad units to update
   * @return the updated ad units
   */
  public function updateAdUnits($adUnits) {
    $arg = new updateAdUnits($adUnits);
    $result = $this->__soapCall("updateAdUnits", array($arg));
    return $result->rval;
  }


}}

?>