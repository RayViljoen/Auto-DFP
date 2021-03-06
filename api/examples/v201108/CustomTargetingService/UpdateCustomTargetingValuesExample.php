<?php
/**
 * This example updates the display name of each custom targeting value up to
 * the first 500. To determine which custom targeting keys exist, run
 * GetAllCustomTargetingKeysAndValuesExample.php.
 *
 * Tags: CustomTargetingService
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
 * @subpackage v201108
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal <api.arogal@gmail.com>
 * @author     Eric Koleda <api.ekoleda@gmail.com>
 */

error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CustomTargetingService.
  $customTargetingService = $user->GetService('CustomTargetingService', 'v201108');

  // Set the ID of the custom targeting key to get custom targeting values for.
  $valueId = (float) 'INSERT_CUSTOM_TARGETING_KEY_ID_HERE';

  // Create a statement to only select custom targeting values for a given key.
  $filterStatement = new Statement(
      'WHERE customTargetingKeyId = :keyId LIMIT 500',
      MapUtils::GetMapEntries(array('keyId' => new NumberValue($valueId))));

  // Get custom targeting keys by statement.
  $page = $customTargetingService->getCustomTargetingValuesByStatement(
      $filterStatement);

  if (isset($page->results)) {
    $values = $page->results;

    // Update each local custom targeting value object by changing its display
    // name.
    foreach ($values as $value) {
      if (empty($value->displayName)) {
        $value->displayName = $value->name;
      }
      $value->displayName .= ' (Deprecated)';
    }

    // Update the custom targeting values on the server.
    $values = $customTargetingService->updateCustomTargetingValues($values);

    // Display results.
    if (isset($values)) {
      foreach ($page->results as $value) {
        printf("Custom targeting value with ID '%.0f', name '%s', and " .
            "display name '%s' was updated.\n", $value->id, $value->name,
            $value->displayName);
      }
    } else {
      print "No custom targeting values updated.\n";
    }
  } else {
    print "No custom targeting values found to update.\n";
  }
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}
