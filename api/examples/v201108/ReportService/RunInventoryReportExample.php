<?php
/**
 * This example runs a report equal to the "Whole network report" on the DFP
 * website. To download the report see DownloadReportExample.php.
 *
 * Tags: ReportService
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

  // Get the ReportService.
  $reportService = $user->GetService('ReportService', 'v201108');

  // Create report job.
  $reportJob = new ReportJob();

  // Create report query.
  $reportQuery = new ReportQuery();
  $reportQuery->dateRangeType = 'LAST_WEEK';
  $reportQuery->dimensions = array('DATE');
  $reportQuery->columns = array('AD_SERVER_IMPRESSIONS', 'AD_SERVER_CLICKS',
      'ADSENSE_IMPRESSIONS', 'ADSENSE_CLICKS', 'TOTAL_IMPRESSIONS',
      'TOTAL_REVENUE');
  $reportJob->reportQuery = $reportQuery;

  // Run report job.
  $reportJob = $reportService->runReportJob($reportJob);

  do {
    printf("Report with ID '%d' is running.\n", $reportJob->id);
    sleep(30);
    // Get report job.
    $reportJob = $reportService->getReportJob($reportJob->id);
  } while ($reportJob->reportJobStatus == 'IN_PROGRESS');

  if ($reportJob->reportJobStatus == 'FAILED') {
    printf("Report job with ID '%d' failed to finish successfully.\n",
        $reportJob->id);
  } else {
    printf("Report job with ID '%d' completed successfully.\n", $reportJob->id);
  }
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}
