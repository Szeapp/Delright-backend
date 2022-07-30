<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\ShipmentModel;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A precedence rule between two events (each event is the pickup or the
 * delivery of a shipment): the "second" event has to start at least
 * `offset_duration` after "first" has started.
 * Several precedences can refer to the same (or related) events, e.g.,
 * "pickup of B happens after delivery of A" and "pickup of C happens after
 * pickup of B".
 * Furthermore, precedences only apply when both shipments are performed and
 * are otherwise ignored.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.ShipmentModel.PrecedenceRule</code>
 */
class PrecedenceRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Shipment index of the "first" event. This field must be specified.
     *
     * Generated from protobuf field <code>optional int32 first_index = 1;</code>
     */
    private $first_index = null;
    /**
     * Indicates if the "first" event is a delivery.
     *
     * Generated from protobuf field <code>bool first_is_delivery = 3;</code>
     */
    private $first_is_delivery = false;
    /**
     * Shipment index of the "second" event. This field must be specified.
     *
     * Generated from protobuf field <code>optional int32 second_index = 2;</code>
     */
    private $second_index = null;
    /**
     * Indicates if the "second" event is a delivery.
     *
     * Generated from protobuf field <code>bool second_is_delivery = 4;</code>
     */
    private $second_is_delivery = false;
    /**
     * The offset between the "first" and "second" event. It can be negative.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration offset_duration = 5;</code>
     */
    private $offset_duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $first_index
     *           Shipment index of the "first" event. This field must be specified.
     *     @type bool $first_is_delivery
     *           Indicates if the "first" event is a delivery.
     *     @type int $second_index
     *           Shipment index of the "second" event. This field must be specified.
     *     @type bool $second_is_delivery
     *           Indicates if the "second" event is a delivery.
     *     @type \Google\Protobuf\Duration $offset_duration
     *           The offset between the "first" and "second" event. It can be negative.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Shipment index of the "first" event. This field must be specified.
     *
     * Generated from protobuf field <code>optional int32 first_index = 1;</code>
     * @return int
     */
    public function getFirstIndex()
    {
        return isset($this->first_index) ? $this->first_index : 0;
    }

    public function hasFirstIndex()
    {
        return isset($this->first_index);
    }

    public function clearFirstIndex()
    {
        unset($this->first_index);
    }

    /**
     * Shipment index of the "first" event. This field must be specified.
     *
     * Generated from protobuf field <code>optional int32 first_index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFirstIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->first_index = $var;

        return $this;
    }

    /**
     * Indicates if the "first" event is a delivery.
     *
     * Generated from protobuf field <code>bool first_is_delivery = 3;</code>
     * @return bool
     */
    public function getFirstIsDelivery()
    {
        return $this->first_is_delivery;
    }

    /**
     * Indicates if the "first" event is a delivery.
     *
     * Generated from protobuf field <code>bool first_is_delivery = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFirstIsDelivery($var)
    {
        GPBUtil::checkBool($var);
        $this->first_is_delivery = $var;

        return $this;
    }

    /**
     * Shipment index of the "second" event. This field must be specified.
     *
     * Generated from protobuf field <code>optional int32 second_index = 2;</code>
     * @return int
     */
    public function getSecondIndex()
    {
        return isset($this->second_index) ? $this->second_index : 0;
    }

    public function hasSecondIndex()
    {
        return isset($this->second_index);
    }

    public function clearSecondIndex()
    {
        unset($this->second_index);
    }

    /**
     * Shipment index of the "second" event. This field must be specified.
     *
     * Generated from protobuf field <code>optional int32 second_index = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSecondIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->second_index = $var;

        return $this;
    }

    /**
     * Indicates if the "second" event is a delivery.
     *
     * Generated from protobuf field <code>bool second_is_delivery = 4;</code>
     * @return bool
     */
    public function getSecondIsDelivery()
    {
        return $this->second_is_delivery;
    }

    /**
     * Indicates if the "second" event is a delivery.
     *
     * Generated from protobuf field <code>bool second_is_delivery = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSecondIsDelivery($var)
    {
        GPBUtil::checkBool($var);
        $this->second_is_delivery = $var;

        return $this;
    }

    /**
     * The offset between the "first" and "second" event. It can be negative.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration offset_duration = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getOffsetDuration()
    {
        return $this->offset_duration;
    }

    public function hasOffsetDuration()
    {
        return isset($this->offset_duration);
    }

    public function clearOffsetDuration()
    {
        unset($this->offset_duration);
    }

    /**
     * The offset between the "first" and "second" event. It can be negative.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration offset_duration = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setOffsetDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->offset_duration = $var;

        return $this;
    }

}

