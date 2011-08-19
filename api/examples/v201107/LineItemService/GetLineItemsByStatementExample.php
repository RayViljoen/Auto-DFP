<?php
/**
 * This example gets all line items for the given order. The statement
 * retrieves up to the maximum page size limit of 500. To create line items,
 * run CreateLineItemsExample.php.
 *
 * Tags: LineItemService
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

  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', 'v201107');

  // Set the ID of the order to get line items from.
  $orderId = (float) 'INSERT_ORDER_ID_HERE';

  // Create bind variables.
  $vars =
      MapUtils::GetMapEntries(array('orderId' => new NumberValue($orderId)));

  // Create a statement to only select line items from a given order.
  $filterStatement =
      new Statement("WHERE orderId = :orderId LIMIT 500", $vars);

  // Get line items by statement.
  $page = $lineItemService->getLineItemsByStatement($filterStatement);

  // Display results.
  if (isset($page->results)) {
    $i = $page->startIndex;
    foreach ($page->results as $lineItem) {
      print $i . ') Line item with ID "'
          . $lineItem->id . '", belonging to order ID "'
          . $lineItem->orderId . '", and name "' . $lineItem->name
          . "\" was found.\n";
      $i++;
    }
  }

  print 'Number of results found: ' . $page->totalResultSetSize . "\n";
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}
