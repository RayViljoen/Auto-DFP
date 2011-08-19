<?php
/**
 * A collection of utility methods for working with reports.
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
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author     Eric Koleda <api.ekoleda@gmail.com>
 */

require_once dirname(__FILE__) . '/../../Common/Util/CurlUtils.php';

/**
 * A collection of utility methods for working with reports.
 */
class ReportUtils {
  /**
   * The ReportUtils class is not meant to have any instances.
   * @access private
   */
  private function __construct() {}

  /**
   * Downloads a report from a URL. If the filePath parameter is specified it
   * will be downloaded to the file at that path, otherwise it will be
   * downloaded to memory and be returned as a string.
   * @param float $downloadUrl the URL of the report download
   * @param string $filePath an optional path of a file to download the report
   *     to
   * @return mixed if $filePath isn't specified it will return the contents of
   *     the report, otherwise the size in bytes of the downloaded report
   */
  public static function DownloadReport($downloadUrl, $filePath = NULL) {
    $ch = CurlUtils::CreateSession($downloadUrl);
    if (isset($filePath)) {
      $file = fopen($filePath, 'w');
      curl_setopt($ch, CURLOPT_FILE, $file);
    } else {
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    }

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    $downloadSize = curl_getinfo($ch, CURLINFO_SIZE_DOWNLOAD);

    curl_close($ch);
    if (isset($file)) {
      fclose($file);
    }

    if ($httpCode != 200) {
      $message = sprintf('Invalid report download URL: %s', $downloadUrl);
      throw new InvalidArgumentException($message, $httpCode);
    }

    if (isset($filePath)) {
      return $downloadSize;
    } else {
      return $result;
    }
  }
}
