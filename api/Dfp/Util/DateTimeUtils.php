<?php
/**
 * A utility class to for converting PHP DateTime objects to DfpDateTime
 * objects.
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

/**
 * A utility class to simplify the use of DfpDateTime objects.
 */
class DateTimeUtils {
  /**
   * The DateTimeUtils class is not meant to have any instances.
   * @access private
   */
  private function __construct() {}

  /**
   * Converts a PHP DateTime to a DfpDateTime.
   * @param DateTime $dateTime a PHP DateTime object
   * @return DfpDateTime a DfpDateTime object
   */
  public static function GetDfpDateTime(DateTime $dateTime) {
    $result = new DfpDateTime();
    $result->date = new Date();
    $result->date->year = (int) $dateTime->format('Y');
    $result->date->month = (int) $dateTime->format('m');
    $result->date->day = (int) $dateTime->format('d');
    $result->hour = (int) $dateTime->format('H');
    $result->minute = (int) $dateTime->format('i');
    $result->second = (int) $dateTime->format('s');
    return $result;
  }

  /**
   * Converts a DfpDateTime to a PHP DateTime.
   * @param DfpDateTime $dfpDateTime a DfpDateTime object
   * @return DateTime a PHP DateTime object
   */
  public static function GetDateTime(DfpDateTime $dfpDateTime,
      string $timezone = NULL) {
    $dateTimeString = sprintf("%d-%d-%dT%d:%d:%d", $dfpDateTime->date->year,
        $dfpDateTime->date->month, $dfpDateTime->date->day, $dfpDateTime->hour,
        $dfpDateTime->minute, $dfpDateTime->second);
    if (isset($timezone)) {
      return new DateTime($dateTimeString, new DateTimeZone($timezone));
    } else {
      return new DateTime($dateTimeString);
    }
  }
}
