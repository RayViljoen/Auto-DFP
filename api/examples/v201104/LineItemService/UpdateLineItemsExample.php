<?php
/**
 * This example updates the delivery rate of all line items up to the first
 * 500. To determine which line items exist, run GetAllLineItemsExample.php.
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

  // Get the LineItemService.
  $lineItemService = $user->GetLineItemService('v201104');

  // Set the ID of the order to get line items from.
  $orderId = (float) 'INSERT_ORDER_ID_HERE';

  // Create a statement to get line items with even delivery rates.
  $filterStatement =
      new Statement("WHERE deliveryRateType = 'EVENLY' and orderId = "
          . $orderId . ' LIMIT 500');

  // Get line items by statement.
  $page = $lineItemService->getLineItemsByStatement($filterStatement);

  if (isset($page->results)) {
    $lineItems = $page->results;

    // Remove archived line items.
    array_filter($lineItems,
        create_function('$lineItem', 'return !$lineItem->isArchived;'));

    // Update each local line item object by changing its delivery rate.
    foreach ($lineItems as $lineItem) {
      $lineItem->deliveryRateType = 'AS_FAST_AS_POSSIBLE';
    }

    // Update the line items on the server.
    $lineItems = $lineItemService->updateLineItems($lineItems);

    // Display results.
    if (isset($lineItems)) {
      foreach ($lineItems as $lineItem) {
        print 'A line item with ID "'
            . $lineItem->id . '", belonging to order ID "'
            . $lineItem->orderId . '", name "' . $lineItem->name
            . '", and delivery rate "' . $lineItem->deliveryRateType
            . "\" was updated.\n";
      }
    } else {
      print "No line items updated.\n";
    }
  } else {
    print "No line items found to update.\n";
  }
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}
