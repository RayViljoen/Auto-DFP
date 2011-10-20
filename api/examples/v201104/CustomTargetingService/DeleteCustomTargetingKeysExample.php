<?php
/**
 * This example deletes a custom targeting key by its name. To determine which
 * custom targeting keys exist, run
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
 * @subpackage v201104
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
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
  $customTargetingService = $user->GetCustomTargetingService('v201104');

  // Set the name of the custom targeting key to delete.
  $keyName = 'INSERT_CUSTOM_TARGETING_KEY_NAME_HERE';

  // Create statement text to only select custom targeting key by the given
  // name.
  $filterStatementText = 'WHERE name = :name';

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(array('name' => new TextValue($keyName)));

  $offset = 0;
  $keyIds = array();

  do {
    // Create statement to page through results.
    $filterStatement = new Statement($filterStatementText .
        ' LIMIT 500 OFFSET ' . $offset, $vars);

    // Get custom targeting keys by statement.
    $page = $customTargetingService->getCustomTargetingKeysByStatement(
        $filterStatement);

    if (isset($page->results)) {
      foreach ($page->results as $customTargetingKey) {
        $keyIds[] = $customTargetingKey->id;
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  printf("Number of custom targeting keys to be deleted: %d\n",
      sizeof($keyIds));

  if (sizeof($keyIds) > 0) {
    // Create action statement.
    $filterStatementText = sprintf('WHERE id IN (%s)', implode(',', $keyIds));
    $filterStatement = new Statement($filterStatementText);

    // Create action.
    $action = new DeleteCustomTargetingKeys();

    // Perform action.
    $result = $customTargetingService->performCustomTargetingKeyAction(
        $action, $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      printf("Number of custom targeting keys deleted: %d\n",
          $result->numChanges);
    } else {
      print "No custom targeting keys were deleted.\n";
    }
  }
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}
