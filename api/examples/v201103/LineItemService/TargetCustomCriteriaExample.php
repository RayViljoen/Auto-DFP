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
 * @subpackage v201103
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
  $lineItemService = $user->GetLineItemService('v201103');

  $lineItemId = (float) 'INSERT_LINE_ITEM_ID_HERE';
  $keyId1 = (float) 'INSERT_FREE_FORM_CUSTOM_TARGETING_KEY_ID_HERE';
  $keyId2 = (float) 'INSERT_FREE_FORM_CUSTOM_TARGETING_KEY_ID_HERE';

  // Create the free-form custom criteria for targeting 'toyota'.
  $toyotaValue = new CustomTargetingValue();
  $toyotaValue->name = 'toyota';
  $toyotaValue->matchType = 'EXACT';

  $toyotaCriteria = new FreeFormCustomCriteria();
  $toyotaCriteria->keyId = $keyId1;
  $toyotaCriteria->values = array($toyotaValue);
  $toyotaCriteria->operator = 'IS';

  // Create the free-form custom criteria for targeting 'honda'.
  $hondaValue = new CustomTargetingValue();
  $hondaValue->name = 'honda';
  $hondaValue->matchType = 'EXACT';

  $hondaCriteria = new FreeFormCustomCriteria();
  $hondaCriteria->keyId = $keyId1;
  $hondaCriteria->values = array($hondaValue);
  $hondaCriteria->operator = 'IS_NOT';

  // Create the free-form custom criteria for targeting 'ford'.
  $fordValue = new CustomTargetingValue();
  $fordValue->name = 'ford';
  $fordValue->matchType = 'EXACT';

  $fordCriteria = new FreeFormCustomCriteria();
  $fordCriteria->keyId = $keyId2;
  $fordCriteria->values = array($fordValue);
  $fordCriteria->operator = 'IS';

  // Create the custom criteria set that will resemble:
  // (key1 == toyota OR (key1 != honda AND key2 == ford))
  $subSet = new CustomCriteriaSet();
  $subSet->logicalOperator = 'AND';
  $subSet->children = array($hondaCriteria, $fordCriteria);

  $topSet = new CustomCriteriaSet();
  $topSet->logicalOperator = 'OR';
  $topSet->children = array($toyotaCriteria, $subSet);

  // Set the custom criteria targeting on the line item.
  $lineItem = $lineItemService->getLineItem($lineItemId);
  $lineItem->targeting->customTargeting = $topSet;

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
