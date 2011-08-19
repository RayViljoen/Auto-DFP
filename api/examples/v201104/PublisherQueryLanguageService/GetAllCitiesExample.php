<?php
/**
 * This example gets all cities available to target.
 *
 * Tags: PublisherQueryLanguageService
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

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the PublisherQueryLanguageService.
  $pqlService = $user->GetPublisherQueryLanguageService('v201104');

  // Create statement to select all targetable cities.
  $selectStatement =
      new Statement('SELECT * FROM City WHERE targetable = true LIMIT 500');

  // Get all cities.
  // A limit of 500 is set here. You may want to page through such a large
  // result set.
  $resultSet = $pqlService->select($selectStatement);

  // Display results.
  if (isset($resultSet)) {
    $columnLabels = array_map(
        create_function('$columnType', 'return $columnType->labelName;'),
        $resultSet->columnTypes);
    printf("Columns are: %s\n", implode(', ', $columnLabels));
    $i = 0;
    foreach($resultSet->rows as $row) {
      $values = array_map(create_function('$value', 'return $value->value;'),
          $row->values);
      printf("%d) %s\n", $i, implode(', ', $values));
      $i++;
    }
  } else {
    print "No results returned.\n";
  }
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}
