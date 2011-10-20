<?php
/**
 * This example gets all labels that are competitively excluded. The statement
 * retrieves up to the maximum page size limit of 500. To create labels, run
 * CreateLabelsExample.php. This feature is only available to DFP premium
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
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the LabelService.
  $labelService = $user->GetService('LabelService', 'v201108');

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('type' => new TextValue('COMPETITIVE_EXCLUSION')));

  // Create a statement to only select labels that are advertisers sorted
  // by name.
  $filterStatement =
      new Statement("WHERE type = :type ORDER BY name LIMIT 500", $vars);

  // Get labels by statement.
  $page = $labelService->getLabelsByStatement($filterStatement);

  // Display results.
  if (isset($page->results)) {
    $i = $page->startIndex;
    foreach ($page->results as $label) {
      printf("%d) Label with ID '%s', name '%s', and type '%s' was found.\n",
          $i, $label->id, $label->name, $label->type);
       $i++;
    }
  }

  print 'Number of results found: ' . $page->totalResultSetSize . "\n";
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}
