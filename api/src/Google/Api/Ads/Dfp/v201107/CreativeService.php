<?php
/**
 * Contains all client objects for the CreativeService service.
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
 * @subpackage v201107
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("AppliedLabel", FALSE)) {
/**
 * Represents a {@link Label} that can be applied to an entity. To negate an
 * inherited label, create an {@code AppliedLabel} with {@code labelId} as the
 * inherited label's ID and {@code isNegated} set to true.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class AppliedLabel {
  /**
   * @access public
   * @var integer
   */
  public $labelId;

  /**
   * @access public
   * @var boolean
   */
  public $isNegated;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AppliedLabel";
  }

  public function __construct($labelId = NULL, $isNegated = NULL) {
    if(get_parent_class('AppliedLabel')) parent::__construct();
    $this->labelId = $labelId;
    $this->isNegated = $isNegated;
  }
}}

if (!class_exists("Authentication", FALSE)) {
/**
 * A representation of the authentication protocols that can be used.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("CreativeAssetMacroError", FALSE)) {
/**
 * Lists all errors associated with creative asset macros.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class CreativeAssetMacroError extends ApiError {
  /**
   * @access public
   * @var tnsCreativeAssetMacroErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeAssetMacroError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('CreativeAssetMacroError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("Creative", FALSE)) {
/**
 * A {@code Creative} represents the media for the ad being served.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class Creative {
  /**
   * @access public
   * @var integer
   */
  public $advertiserId;

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
   * @var Size
   */
  public $size;

  /**
   * @access public
   * @var string
   */
  public $previewUrl;

  /**
   * @access public
   * @var AppliedLabel[]
   */
  public $appliedLabels;

  /**
   * @access public
   * @var string
   */
  public $CreativeType;

  private $_parameterMap = array (
    "Creative.Type" => "CreativeType",
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
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Creative";
  }

  public function __construct($advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('Creative')) parent::__construct();
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("CreativeError", FALSE)) {
/**
 * Lists all errors associated with creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class CreativeError extends ApiError {
  /**
   * @access public
   * @var tnsCreativeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('CreativeError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CreativePage", FALSE)) {
/**
 * Captures a page of {@link Creative} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class CreativePage {
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
   * @var Creative[]
   */
  public $results;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativePage";
  }

  public function __construct($totalResultSetSize = NULL, $startIndex = NULL, $results = NULL) {
    if(get_parent_class('CreativePage')) parent::__construct();
    $this->totalResultSetSize = $totalResultSetSize;
    $this->startIndex = $startIndex;
    $this->results = $results;
  }
}}

if (!class_exists("CustomCreativeError", FALSE)) {
/**
 * Lists all errors associated with custom creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class CustomCreativeError extends ApiError {
  /**
   * @access public
   * @var tnsCustomCreativeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCreativeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('CustomCreativeError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("FileError", FALSE)) {
/**
 * A list of all errors to be used for problems related to files.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class FileError extends ApiError {
  /**
   * @access public
   * @var tnsFileErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FileError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('FileError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("HasDestinationUrlCreative", FALSE)) {
/**
 * A {@code Creative} that has a destination url
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class HasDestinationUrlCreative extends Creative {
  /**
   * @access public
   * @var string
   */
  public $destinationUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "HasDestinationUrlCreative";
  }

  public function __construct($destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('HasDestinationUrlCreative')) parent::__construct();
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ImageError", FALSE)) {
/**
 * Lists all errors associated with images.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class ImageError extends ApiError {
  /**
   * @access public
   * @var tnsImageErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('ImageError')) parent::__construct();
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("InvalidUrlError", FALSE)) {
/**
 * Lists all errors associated with URLs.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class InvalidUrlError extends ApiError {
  /**
   * @access public
   * @var tnsInvalidUrlErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InvalidUrlError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('InvalidUrlError')) parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LabelEntityAssociationError", FALSE)) {
/**
 * Errors specific to creating label entity associations.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class LabelEntityAssociationError extends ApiError {
  /**
   * @access public
   * @var tnsLabelEntityAssociationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LabelEntityAssociationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('LabelEntityAssociationError')) parent::__construct();
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("QuotaError", FALSE)) {
/**
 * Describes a client-side error on which a user is attempting
 * to perform an action to which they have no quota remaining.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("RequiredSizeError", FALSE)) {
/**
 * A list of all errors to be used for validating {@link Size}.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class RequiredSizeError extends ApiError {
  /**
   * @access public
   * @var tnsRequiredSizeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredSizeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    if(get_parent_class('RequiredSizeError')) parent::__construct();
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("StatementError", FALSE)) {
/**
 * An error that occurs while parsing {@link Statement} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("String_ValueMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type String
 * and value of type Value.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("ThirdPartyCreative", FALSE)) {
/**
 * A {@code Creative} that is served by a 3rd-party vendor.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class ThirdPartyCreative extends Creative {
  /**
   * @access public
   * @var string
   */
  public $snippet;

  /**
   * @access public
   * @var string
   */
  public $expandedSnippet;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ThirdPartyCreative";
  }

  public function __construct($snippet = NULL, $expandedSnippet = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('ThirdPartyCreative')) parent::__construct();
    $this->snippet = $snippet;
    $this->expandedSnippet = $expandedSnippet;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("TypeError", FALSE)) {
/**
 * An error for a field which is an invalid type.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class TypeError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
 */
class UniqueError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("Value", FALSE)) {
/**
 * {@code Value} represents a value.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("ApiVersionErrorReason", FALSE)) {
/**
 * Indicates that the operation is not allowed in the version the request
 * was made in.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class ApiVersionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
 */
class AuthenticationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
 */
class CommonErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("CreativeAssetMacroErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class CreativeAssetMacroErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeAssetMacroError.Reason";
  }

  public function __construct() {
    if(get_parent_class('CreativeAssetMacroErrorReason')) parent::__construct();
  }
}}

if (!class_exists("CreativeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class CreativeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeError.Reason";
  }

  public function __construct() {
    if(get_parent_class('CreativeErrorReason')) parent::__construct();
  }
}}

if (!class_exists("CustomCreativeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class CustomCreativeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCreativeError.Reason";
  }

  public function __construct() {
    if(get_parent_class('CustomCreativeErrorReason')) parent::__construct();
  }
}}

if (!class_exists("FileErrorReason", FALSE)) {
/**
 * The provided byte array is empty.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class FileErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FileError.Reason";
  }

  public function __construct() {
    if(get_parent_class('FileErrorReason')) parent::__construct();
  }
}}

if (!class_exists("ImageErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class ImageErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageError.Reason";
  }

  public function __construct() {
    if(get_parent_class('ImageErrorReason')) parent::__construct();
  }
}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * The single reason for the internal API error.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class InternalApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("InvalidUrlErrorReason", FALSE)) {
/**
 * The URL contains invalid characters.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class InvalidUrlErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InvalidUrlError.Reason";
  }

  public function __construct() {
    if(get_parent_class('InvalidUrlErrorReason')) parent::__construct();
  }
}}

if (!class_exists("LabelEntityAssociationErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class LabelEntityAssociationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LabelEntityAssociationError.Reason";
  }

  public function __construct() {
    if(get_parent_class('LabelEntityAssociationErrorReason')) parent::__construct();
  }
}}

if (!class_exists("NotNullErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class NotNullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
 */
class NullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
 */
class ParseErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("QuotaErrorReason", FALSE)) {
/**
 * The number of requests made per second is too high and has exceeded the
 * allowable limit. Please wait before trying your request again. If you see
 * this error often, try increasing the wait time between requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class QuotaErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
 */
class RequiredErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("RequiredSizeErrorReason", FALSE)) {
/**
 * {@link Creative#size} or {@link LineItemSummary#creativeSizes} is
 * missing.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class RequiredSizeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredSizeError.Reason";
  }

  public function __construct() {
    if(get_parent_class('RequiredSizeErrorReason')) parent::__construct();
  }
}}

if (!class_exists("ServerErrorReason", FALSE)) {
/**
 * Describes reasons for server errors
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class ServerErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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
 * @subpackage v201107
 */
class StatementErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("createCreative", FALSE)) {
/**
 * Creates a new {@link Creative}.
 * 
 * The following fields are required along with the required fields of the
 * sub-class:
 * <ul>
 * <li>{@link Creative#advertiserId}</li>
 * <li>{@link Creative#name}</li>
 * <li>{@link Creative#size}</li>
 * </ul>
 * 
 * @param creative the creative to create
 * @return the new creative with its ID set
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class createCreative {
  /**
   * @access public
   * @var Creative
   */
  public $creative;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($creative = NULL) {
    if(get_parent_class('createCreative')) parent::__construct();
    $this->creative = $creative;
  }
}}

if (!class_exists("createCreativeResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class createCreativeResponse {
  /**
   * @access public
   * @var Creative
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('createCreativeResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("createCreatives", FALSE)) {
/**
 * Creates new {@link Creative} objects.
 * 
 * @param creatives the creatives to create
 * @return the created creatives with their IDs filled in
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class createCreatives {
  /**
   * @access public
   * @var Creative[]
   */
  public $creatives;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($creatives = NULL) {
    if(get_parent_class('createCreatives')) parent::__construct();
    $this->creatives = $creatives;
  }
}}

if (!class_exists("createCreativesResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class createCreativesResponse {
  /**
   * @access public
   * @var Creative[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('createCreativesResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("getCreative", FALSE)) {
/**
 * Returns the {@link Creative} uniquely identified by the given ID.
 * 
 * @param creativeId the ID of the creative, which must already exist
 * @return the {@code Creative} uniquely identified by the given ID
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class getCreative {
  /**
   * @access public
   * @var integer
   */
  public $creativeId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($creativeId = NULL) {
    if(get_parent_class('getCreative')) parent::__construct();
    $this->creativeId = $creativeId;
  }
}}

if (!class_exists("getCreativeResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class getCreativeResponse {
  /**
   * @access public
   * @var Creative
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('getCreativeResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("getCreativesByStatement", FALSE)) {
/**
 * Gets a {@link CreativePage} of {@link Creative} objects that satisfy the
 * given {@link Statement#query}. The following fields are supported for
 * filtering:
 * 
 * <table>
 * <tr>
 * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
 * </tr>
 * <tr>
 * <td>{@code id}</td>
 * <td>{@link Creative#id}</td>
 * </tr>
 * <tr>
 * <td>{@code name}</td>
 * <td>{@link Creative#name}</td>
 * </tr>
 * <tr>
 * <td>{@code advertiserId}</td>
 * <td>{@link Creative#advertiserId}</td>
 * </tr>
 * <tr>
 * <td>{@code width}</td>
 * <td>{@link Creative#size}</td>
 * </tr>
 * <tr>
 * <td>{@code height}</td>
 * <td>{@link Creative#size}</td>
 * </tr>
 * </table>
 * 
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of creatives
 * @return the creatives that match the given filter
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class getCreativesByStatement {
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
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($filterStatement = NULL) {
    if(get_parent_class('getCreativesByStatement')) parent::__construct();
    $this->filterStatement = $filterStatement;
  }
}}

if (!class_exists("getCreativesByStatementResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class getCreativesByStatementResponse {
  /**
   * @access public
   * @var CreativePage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('getCreativesByStatementResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("updateCreative", FALSE)) {
/**
 * Updates the specified {@link Creative}.
 * 
 * @param creative the creative to update
 * @return the updated creative
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class updateCreative {
  /**
   * @access public
   * @var Creative
   */
  public $creative;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($creative = NULL) {
    if(get_parent_class('updateCreative')) parent::__construct();
    $this->creative = $creative;
  }
}}

if (!class_exists("updateCreativeResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class updateCreativeResponse {
  /**
   * @access public
   * @var Creative
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('updateCreativeResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("updateCreatives", FALSE)) {
/**
 * Updates the specified {@link Creative} objects.
 * 
 * @param creatives the creatives to update
 * @return the updated creatives
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class updateCreatives {
  /**
   * @access public
   * @var Creative[]
   */
  public $creatives;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($creatives = NULL) {
    if(get_parent_class('updateCreatives')) parent::__construct();
    $this->creatives = $creatives;
  }
}}

if (!class_exists("updateCreativesResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class updateCreativesResponse {
  /**
   * @access public
   * @var Creative[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('updateCreativesResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

if (!class_exists("ApiException", FALSE)) {
/**
 * Exception class for holding a list of service errors.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("BaseFlashCreative", FALSE)) {
/**
 * A base type for creatives that display a Flash-based ad. If the Flash ad
 * cannot load, a fallback image is displayed instead.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class BaseFlashCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $flashName;

  /**
   * @access public
   * @var base64Binary
   */
  public $flashByteArray;

  /**
   * @access public
   * @var string
   */
  public $fallbackImageName;

  /**
   * @access public
   * @var base64Binary
   */
  public $fallbackImageByteArray;

  /**
   * @access public
   * @var boolean
   */
  public $overrideSize;

  /**
   * @access public
   * @var boolean
   */
  public $clickTagRequired;

  /**
   * @access public
   * @var string
   */
  public $fallbackPreviewUrl;

  /**
   * @access public
   * @var Size
   */
  public $flashAssetSize;

  /**
   * @access public
   * @var Size
   */
  public $fallbackAssetSize;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseFlashCreative";
  }

  public function __construct($flashName = NULL, $flashByteArray = NULL, $fallbackImageName = NULL, $fallbackImageByteArray = NULL, $overrideSize = NULL, $clickTagRequired = NULL, $fallbackPreviewUrl = NULL, $flashAssetSize = NULL, $fallbackAssetSize = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('BaseFlashCreative')) parent::__construct();
    $this->flashName = $flashName;
    $this->flashByteArray = $flashByteArray;
    $this->fallbackImageName = $fallbackImageName;
    $this->fallbackImageByteArray = $fallbackImageByteArray;
    $this->overrideSize = $overrideSize;
    $this->clickTagRequired = $clickTagRequired;
    $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    $this->flashAssetSize = $flashAssetSize;
    $this->fallbackAssetSize = $fallbackAssetSize;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BaseFlashRedirectCreative", FALSE)) {
/**
 * The base type for creatives that load a Flash asset from a specified URL.
 * If the remote flash asset cannot be served, a fallback image is used at an
 * alternate URL.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class BaseFlashRedirectCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $flashUrl;

  /**
   * @access public
   * @var string
   */
  public $fallbackUrl;

  /**
   * @access public
   * @var string
   */
  public $fallbackPreviewUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseFlashRedirectCreative";
  }

  public function __construct($flashUrl = NULL, $fallbackUrl = NULL, $fallbackPreviewUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('BaseFlashRedirectCreative')) parent::__construct();
    $this->flashUrl = $flashUrl;
    $this->fallbackUrl = $fallbackUrl;
    $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BaseImageCreative", FALSE)) {
/**
 * The base type for creatives that display an image.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class BaseImageCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $imageName;

  /**
   * @access public
   * @var base64Binary
   */
  public $imageByteArray;

  /**
   * @access public
   * @var boolean
   */
  public $overrideSize;

  /**
   * @access public
   * @var Size
   */
  public $assetSize;

  /**
   * @access public
   * @var string
   */
  public $imageUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseImageCreative";
  }

  public function __construct($imageName = NULL, $imageByteArray = NULL, $overrideSize = NULL, $assetSize = NULL, $imageUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('BaseImageCreative')) parent::__construct();
    $this->imageName = $imageName;
    $this->imageByteArray = $imageByteArray;
    $this->overrideSize = $overrideSize;
    $this->assetSize = $assetSize;
    $this->imageUrl = $imageUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BaseImageRedirectCreative", FALSE)) {
/**
 * The base type for creatives that load an image asset from a specified URL.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class BaseImageRedirectCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $imageUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseImageRedirectCreative";
  }

  public function __construct($imageUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('BaseImageRedirectCreative')) parent::__construct();
    $this->imageUrl = $imageUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BooleanValue", FALSE)) {
/**
 * Contains a boolean value.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("ClickTrackingCreative", FALSE)) {
/**
 * A creative that is used for tracking clicks on ads that are served directly
 * from the customers' web servers or media servers.
 * NOTE: The size attribute is not used for click tracking creative and it will
 * not be persisted upon save.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class ClickTrackingCreative extends Creative {
  /**
   * @access public
   * @var string
   */
  public $clickTrackingUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClickTrackingCreative";
  }

  public function __construct($clickTrackingUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('ClickTrackingCreative')) parent::__construct();
    $this->clickTrackingUrl = $clickTrackingUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("FlashCreative", FALSE)) {
/**
 * A {@code Creative} that displays a Flash-based ad. If the Flash ad cannot
 * load, a fallback image is displayed instead.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class FlashCreative extends BaseFlashCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FlashCreative";
  }

  public function __construct($flashName = NULL, $flashByteArray = NULL, $fallbackImageName = NULL, $fallbackImageByteArray = NULL, $overrideSize = NULL, $clickTagRequired = NULL, $fallbackPreviewUrl = NULL, $flashAssetSize = NULL, $fallbackAssetSize = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('FlashCreative')) parent::__construct();
    $this->flashName = $flashName;
    $this->flashByteArray = $flashByteArray;
    $this->fallbackImageName = $fallbackImageName;
    $this->fallbackImageByteArray = $fallbackImageByteArray;
    $this->overrideSize = $overrideSize;
    $this->clickTagRequired = $clickTagRequired;
    $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    $this->flashAssetSize = $flashAssetSize;
    $this->fallbackAssetSize = $fallbackAssetSize;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("FlashRedirectCreative", FALSE)) {
/**
 * A {@code Creative} that loads a Flash asset from a specified URL. If the
 * remote flash asset cannot be served, a fallback image is used at an
 * alternate URL.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class FlashRedirectCreative extends BaseFlashRedirectCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FlashRedirectCreative";
  }

  public function __construct($flashUrl = NULL, $fallbackUrl = NULL, $fallbackPreviewUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('FlashRedirectCreative')) parent::__construct();
    $this->flashUrl = $flashUrl;
    $this->fallbackUrl = $fallbackUrl;
    $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ImageCreative", FALSE)) {
/**
 * A {@code Creative} that displays an image.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class ImageCreative extends BaseImageCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageCreative";
  }

  public function __construct($imageName = NULL, $imageByteArray = NULL, $overrideSize = NULL, $assetSize = NULL, $imageUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('ImageCreative')) parent::__construct();
    $this->imageName = $imageName;
    $this->imageByteArray = $imageByteArray;
    $this->overrideSize = $overrideSize;
    $this->assetSize = $assetSize;
    $this->imageUrl = $imageUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ImageRedirectCreative", FALSE)) {
/**
 * A {@code Creative} that loads an image asset from a specified URL.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 */
class ImageRedirectCreative extends BaseImageRedirectCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201107";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageRedirectCreative";
  }

  public function __construct($imageUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $CreativeType = NULL) {
    if(get_parent_class('ImageRedirectCreative')) parent::__construct();
    $this->imageUrl = $imageUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("NumberValue", FALSE)) {
/**
 * Contains a numeric value.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("TextValue", FALSE)) {
/**
 * Contains a string value.
 * @package GoogleApiAdsDfp
 * @subpackage v201107
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
    return "https://www.google.com/apis/ads/publisher/v201107";
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

if (!class_exists("CreativeService", FALSE)) {
/**
 * CreativeService
 * @package GoogleApiAdsDfp
 * @subpackage v201107
 * @author WSDLInterpreter
 */
class CreativeService extends DfpSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "DateTime" => "DfpDateTime",
    "Location" => "DfpLocation",
    "OAuth" => "DfpOAuth",
    "ApiError" => "ApiError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "ApiVersionError" => "ApiVersionError",
    "AppliedLabel" => "AppliedLabel",
    "Authentication" => "Authentication",
    "AuthenticationError" => "AuthenticationError",
    "BaseFlashCreative" => "BaseFlashCreative",
    "HasDestinationUrlCreative" => "HasDestinationUrlCreative",
    "BaseFlashRedirectCreative" => "BaseFlashRedirectCreative",
    "BaseImageCreative" => "BaseImageCreative",
    "BaseImageRedirectCreative" => "BaseImageRedirectCreative",
    "BooleanValue" => "BooleanValue",
    "Value" => "Value",
    "ClickTrackingCreative" => "ClickTrackingCreative",
    "Creative" => "Creative",
    "ClientLogin" => "ClientLogin",
    "CommonError" => "CommonError",
    "CreativeAssetMacroError" => "CreativeAssetMacroError",
    "CreativeError" => "CreativeError",
    "CreativePage" => "CreativePage",
    "CustomCreativeError" => "CustomCreativeError",
    "FileError" => "FileError",
    "FlashCreative" => "FlashCreative",
    "FlashRedirectCreative" => "FlashRedirectCreative",
    "ImageCreative" => "ImageCreative",
    "ImageError" => "ImageError",
    "ImageRedirectCreative" => "ImageRedirectCreative",
    "InternalApiError" => "InternalApiError",
    "InvalidUrlError" => "InvalidUrlError",
    "LabelEntityAssociationError" => "LabelEntityAssociationError",
    "NotNullError" => "NotNullError",
    "NullError" => "NullError",
    "NumberValue" => "NumberValue",
    "ParseError" => "ParseError",
    "QuotaError" => "QuotaError",
    "RequiredError" => "RequiredError",
    "RequiredSizeError" => "RequiredSizeError",
    "ServerError" => "ServerError",
    "Size" => "Size",
    "SoapRequestHeader" => "SoapRequestHeader",
    "SoapResponseHeader" => "SoapResponseHeader",
    "Statement" => "Statement",
    "StatementError" => "StatementError",
    "String_ValueMapEntry" => "String_ValueMapEntry",
    "TextValue" => "TextValue",
    "ThirdPartyCreative" => "ThirdPartyCreative",
    "TypeError" => "TypeError",
    "UniqueError" => "UniqueError",
    "ApiVersionError.Reason" => "ApiVersionErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "CommonError.Reason" => "CommonErrorReason",
    "CreativeAssetMacroError.Reason" => "CreativeAssetMacroErrorReason",
    "CreativeError.Reason" => "CreativeErrorReason",
    "CustomCreativeError.Reason" => "CustomCreativeErrorReason",
    "FileError.Reason" => "FileErrorReason",
    "ImageError.Reason" => "ImageErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
    "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
    "NotNullError.Reason" => "NotNullErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "ParseError.Reason" => "ParseErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "RequiredSizeError.Reason" => "RequiredSizeErrorReason",
    "ServerError.Reason" => "ServerErrorReason",
    "StatementError.Reason" => "StatementErrorReason",
    "createCreative" => "createCreative",
    "createCreativeResponse" => "createCreativeResponse",
    "createCreatives" => "createCreatives",
    "createCreativesResponse" => "createCreativesResponse",
    "getCreative" => "getCreative",
    "getCreativeResponse" => "getCreativeResponse",
    "getCreativesByStatement" => "getCreativesByStatement",
    "getCreativesByStatementResponse" => "getCreativesByStatementResponse",
    "updateCreative" => "updateCreative",
    "updateCreativeResponse" => "updateCreativeResponse",
    "updateCreatives" => "updateCreatives",
    "updateCreativesResponse" => "updateCreativesResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://sandbox.google.com/apis/ads/publisher/v201107/CreativeService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = CreativeService::$classmap;
    parent::__construct($wsdl, $options, $user, 'CreativeService', 'https://www.google.com/apis/ads/publisher/v201107');
  }

  /**
   * Creates a new {@link Creative}.
   * 
   * The following fields are required along with the required fields of the
   * sub-class:
   * <ul>
   * <li>{@link Creative#advertiserId}</li>
   * <li>{@link Creative#name}</li>
   * <li>{@link Creative#size}</li>
   * </ul>
   * 
   * @param creative the creative to create
   * @return the new creative with its ID set
   */
  public function createCreative($creative) {
    $arg = new createCreative($creative);
    $result = $this->__soapCall("createCreative", array($arg));
    return $result->rval;
  }


  /**
   * Creates new {@link Creative} objects.
   * 
   * @param creatives the creatives to create
   * @return the created creatives with their IDs filled in
   */
  public function createCreatives($creatives) {
    $arg = new createCreatives($creatives);
    $result = $this->__soapCall("createCreatives", array($arg));
    return $result->rval;
  }


  /**
   * Returns the {@link Creative} uniquely identified by the given ID.
   * 
   * @param creativeId the ID of the creative, which must already exist
   * @return the {@code Creative} uniquely identified by the given ID
   */
  public function getCreative($creativeId) {
    $arg = new getCreative($creativeId);
    $result = $this->__soapCall("getCreative", array($arg));
    return $result->rval;
  }


  /**
   * Gets a {@link CreativePage} of {@link Creative} objects that satisfy the
   * given {@link Statement#query}. The following fields are supported for
   * filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link Creative#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link Creative#name}</td>
   * </tr>
   * <tr>
   * <td>{@code advertiserId}</td>
   * <td>{@link Creative#advertiserId}</td>
   * </tr>
   * <tr>
   * <td>{@code width}</td>
   * <td>{@link Creative#size}</td>
   * </tr>
   * <tr>
   * <td>{@code height}</td>
   * <td>{@link Creative#size}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of creatives
   * @return the creatives that match the given filter
   */
  public function getCreativesByStatement($filterStatement) {
    $arg = new getCreativesByStatement($filterStatement);
    $result = $this->__soapCall("getCreativesByStatement", array($arg));
    return $result->rval;
  }


  /**
   * Updates the specified {@link Creative}.
   * 
   * @param creative the creative to update
   * @return the updated creative
   */
  public function updateCreative($creative) {
    $arg = new updateCreative($creative);
    $result = $this->__soapCall("updateCreative", array($arg));
    return $result->rval;
  }


  /**
   * Updates the specified {@link Creative} objects.
   * 
   * @param creatives the creatives to update
   * @return the updated creatives
   */
  public function updateCreatives($creatives) {
    $arg = new updateCreatives($creatives);
    $result = $this->__soapCall("updateCreatives", array($arg));
    return $result->rval;
  }


}}

?>