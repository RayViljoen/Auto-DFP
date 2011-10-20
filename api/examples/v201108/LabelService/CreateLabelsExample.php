<?php
/**
 * This example creates new labels. To determine which labels exist, run
 * GetAllLabelsExample.php. This feature is only available to DFP premium
 * solution networks.
 *
 * Tags: LabelService
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

  // Get the LabelService.
  $labelService = $user->GetService('LabelService', 'v201108');

  // Create an array to store local label objects.
  $labels = array();

  for ($i = 0; $i < 5; $i++) {
    $label = new Label();
    $label->name = 'Label #' . uniqid();
    $label->type = 'COMPETITIVE_EXCLUSION';
    $labels[] = $label;
  }

  // Create the $labels on the server.
  $labels = $labelService->createLabels($labels);


  // Display results.
  if (isset($labels)) {
    foreach ($labels as $label) {
      printf("A label with ID '%s', name '%s', and type '%s' was created.\n",
          $label->id, $label->name, $label->type);
    }
  } else {
    print "No labels created.";
  }
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}
