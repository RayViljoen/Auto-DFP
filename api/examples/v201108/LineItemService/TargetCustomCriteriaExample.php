<?php
/**
 * This example updates a line item to add custom criteria targeting. To
 * determine which line items exist, run GetAllLineItemsExample.php. To
 * determine which custom targeting keys and values exist, run
 * GetAllCustomTargetingKeysAndValuesExample.php.
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

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', 'v201108');

  $lineItemId = (float) 'INSERT_LINE_ITEM_ID_HERE';
  $customCriteriaIds1 = array((float) "INSERT_CUSTOM_TARGETING_KEY_ID_HERE",
      (float) "INSERT_CUSTOM_TARGETING_VALUE_ID_HERE");
  $customCriteriaIds2 = array((float) "INSERT_CUSTOM_TARGETING_KEY_ID_HERE",
      (float) "INSERT_CUSTOM_TARGETING_VALUE_ID_HERE");
  $customCriteriaIds3 = array((float) "INSERT_CUSTOM_TARGETING_KEY_ID_HERE",
      (float) "INSERT_CUSTOM_TARGETING_VALUE_ID_HERE");

  // Create custom criteria.
  $customCriteria1 = new CustomCriteria();
  $customCriteria1->keyId = $customCriteriaIds1[0];
  $customCriteria1->valueIds = array($customCriteriaIds1[1]);
  $customCriteria1->operator = 'IS';

  $customCriteria2 = new CustomCriteria();
  $customCriteria2->keyId = $customCriteriaIds2[0];
  $customCriteria2->valueIds = array($customCriteriaIds2[1]);
  $customCriteria2->operator = 'IS_NOT';

  $customCriteria3 = new CustomCriteria();
  $customCriteria3->keyId = $customCriteriaIds3[0];
  $customCriteria3->valueIds = array($customCriteriaIds3[1]);
  $customCriteria3->operator = 'IS';


  // Create the custom criteria set that will resemble:
  //
  // ($customCriteria1.key == $customCriteria1.value OR
  //     ($customCriteria2.key != $customCriteria2.value AND
  //         $customCriteria3.key == $customCriteria3.value))
  $topCustomCriteriaSet = new CustomCriteriaSet();
  $topCustomCriteriaSet->logicalOperator = 'OR';

  $subCustomCriteriaSet = new CustomCriteriaSet();
  $subCustomCriteriaSet->logicalOperator = 'AND';
  $subCustomCriteriaSet->children = array($customCriteria2, $customCriteria3);
  $topCustomCriteriaSet->children =
      array($customCriteria1, $subCustomCriteriaSet);

  // Set the custom criteria targeting on the line item.
  $lineItem = $lineItemService->getLineItem($lineItemId);
  $lineItem->targeting->customTargeting = $topCustomCriteriaSet;

  // Update the line items on the server.
  $lineItem = $lineItemService->updateLineItem($lineItem);

  // Display results.
  if (isset($lineItem)) {
    printf("Line item with ID '%.0f' updated with custom criteria targeting:\n",
        $lineItem->id);
    print_r($lineItem->targeting->customTargeting);
  } else {
    print "No line items updated.\n";
  }
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}
