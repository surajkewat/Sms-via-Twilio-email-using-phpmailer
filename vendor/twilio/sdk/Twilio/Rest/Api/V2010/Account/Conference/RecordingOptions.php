<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Conference;

use Twilio\Options;
use Twilio\Values;

abstract class RecordingOptions {
    /**
     * @param string $pauseBehavior Whether to record or not during the pause
     *                              period.
     * @return UpdateRecordingOptions Options builder
     */
    public static function update($pauseBehavior = Values::NONE) {
        return new UpdateRecordingOptions($pauseBehavior);
    }

    /**
     * @param string $dateCreatedBefore Filter by date created
     * @param string $dateCreated Filter by date created
     * @param string $dateCreatedAfter Filter by date created
     * @return ReadRecordingOptions Options builder
     */
    public static function read($dateCreatedBefore = Values::NONE, $dateCreated = Values::NONE, $dateCreatedAfter = Values::NONE) {
        return new ReadRecordingOptions($dateCreatedBefore, $dateCreated, $dateCreatedAfter);
    }
}

class UpdateRecordingOptions extends Options {
    /**
     * @param string $pauseBehavior Whether to record or not during the pause
     *                              period.
     */
    public function __construct($pauseBehavior = Values::NONE) {
        $this->options['pauseBehavior'] = $pauseBehavior;
    }

    /**
     * Only applicable when setting Status parameter to `paused`. Possible values: `skip` or `silence`. `skip` will result in no recording at all during the pause period. `silence` will replace the actual audio of the call with silence during the pause period.  Defaults to `silence`
     * 
     * @param string $pauseBehavior Whether to record or not during the pause
     *                              period.
     * @return $this Fluent Builder
     */
    public function setPauseBehavior($pauseBehavior) {
        $this->options['pauseBehavior'] = $pauseBehavior;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.UpdateRecordingOptions ' . implode(' ', $options) . ']';
    }
}

class ReadRecordingOptions extends Options {
    /**
     * @param string $dateCreatedBefore Filter by date created
     * @param string $dateCreated Filter by date created
     * @param string $dateCreatedAfter Filter by date created
     */
    public function __construct($dateCreatedBefore = Values::NONE, $dateCreated = Values::NONE, $dateCreatedAfter = Values::NONE) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
    }

    /**
     * Only show recordings created on the given date. Should be formatted as `YYYY-MM-DD`. You can also specify inequality, such as `DateCreated<=YYYY-MM-DD` for recordings generated at or before midnight on a date, and `DateCreated>=YYYY-MM-DD` for recordings generated at or after midnight on a date.
     * 
     * @param string $dateCreatedBefore Filter by date created
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore($dateCreatedBefore) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Only show recordings created on the given date. Should be formatted as `YYYY-MM-DD`. You can also specify inequality, such as `DateCreated<=YYYY-MM-DD` for recordings generated at or before midnight on a date, and `DateCreated>=YYYY-MM-DD` for recordings generated at or after midnight on a date.
     * 
     * @param string $dateCreated Filter by date created
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated) {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * Only show recordings created on the given date. Should be formatted as `YYYY-MM-DD`. You can also specify inequality, such as `DateCreated<=YYYY-MM-DD` for recordings generated at or before midnight on a date, and `DateCreated>=YYYY-MM-DD` for recordings generated at or after midnight on a date.
     * 
     * @param string $dateCreatedAfter Filter by date created
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter($dateCreatedAfter) {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.ReadRecordingOptions ' . implode(' ', $options) . ']';
    }
}