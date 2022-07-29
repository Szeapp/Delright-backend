<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/scan_run_warning_trace.proto

namespace Google\Cloud\WebSecurityScanner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output only.
 * Defines a warning trace message for ScanRun. Warning traces provide customers
 * with useful information that helps make the scanning process more effective.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.ScanRunWarningTrace</code>
 */
class ScanRunWarningTrace extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates the warning code.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanRunWarningTrace.Code code = 1;</code>
     */
    private $code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           Indicates the warning code.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanRunWarningTrace::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates the warning code.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanRunWarningTrace.Code code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Indicates the warning code.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanRunWarningTrace.Code code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanRunWarningTrace\Code::class);
        $this->code = $var;

        return $this;
    }

}
