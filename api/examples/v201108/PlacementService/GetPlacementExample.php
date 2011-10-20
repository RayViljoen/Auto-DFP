<?php
/**
 * This example gets a placement by its ID. To determine which placements
 * exist, run GetAllPlacementsExample.php.
 *
 * Tags: PlacementService
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

  // Get the PlacementService.
  $placementService = $user->GetService('PlacementService', 'v201108');

  // Set the ID of the placement to get.
  $placementId = (float) 'INSERT_PLACEMENT_ID_HERE';

  // Get the placement.
  $placement = $placementService->getPlacement($placementId);

  // Display results.
  if (isset($placement)) {
    print 'Placement with ID "' . $placement->id
        . '", name "' . $placement->name
        . '", and status "' . $placement->status . "\" was found.\n";
  } else {
    print "No placement found for this ID.\n";
  }
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}
