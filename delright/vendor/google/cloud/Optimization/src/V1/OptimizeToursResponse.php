<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response after solving a tour optimization problem containing the routes
 * followed by each vehicle, the shipments which have been skipped and the
 * overall cost of the solution.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.OptimizeToursResponse</code>
 */
class OptimizeToursResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Routes computed for each vehicle; the i-th route corresponds to the i-th
     * vehicle in the model.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentRoute routes = 1;</code>
     */
    private $routes;
    /**
     * Copy of the [OptimizeToursRequest.label][google.cloud.optimization.v1.OptimizeToursRequest.label], if a label was specified in the
     * request.
     *
     * Generated from protobuf field <code>string request_label = 3;</code>
     */
    private $request_label = '';
    /**
     * The list of all shipments skipped.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.SkippedShipment skipped_shipments = 4;</code>
     */
    private $skipped_shipments;
    /**
     * List of all the validation errors that we were able to detect
     * independently. See the "MULTIPLE ERRORS" explanation for the
     * [OptimizeToursValidationError][google.cloud.optimization.v1.OptimizeToursValidationError] message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.OptimizeToursValidationError validation_errors = 5;</code>
     */
    private $validation_errors;
    /**
     * Duration, distance and usage metrics for this solution.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.OptimizeToursResponse.Metrics metrics = 6;</code>
     */
    private $metrics = null;
    /**
     * Deprecated: Use [Metrics.total_cost][] instead.
     * Total cost of the solution. This takes into account all costs: costs per
     * per hour and travel hour, fixed vehicle costs, unperformed shipment penalty
     * costs, global duration cost, etc.
     *
     * Generated from protobuf field <code>double total_cost = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $total_cost = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Optimization\V1\ShipmentRoute[]|\Google\Protobuf\Internal\RepeatedField $routes
     *           Routes computed for each vehicle; the i-th route corresponds to the i-th
     *           vehicle in the model.
     *     @type string $request_label
     *           Copy of the [OptimizeToursRequest.label][google.cloud.optimization.v1.OptimizeToursRequest.label], if a label was specified in the
     *           request.
     *     @type \Google\Cloud\Optimization\V1\SkippedShipment[]|\Google\Protobuf\Internal\RepeatedField $skipped_shipments
     *           The list of all shipments skipped.
     *     @type \Google\Cloud\Optimization\V1\OptimizeToursValidationError[]|\Google\Protobuf\Internal\RepeatedField $validation_errors
     *           List of all the validation errors that we were able to detect
     *           independently. See the "MULTIPLE ERRORS" explanation for the
     *           [OptimizeToursValidationError][google.cloud.optimization.v1.OptimizeToursValidationError] message.
     *     @type \Google\Cloud\Optimization\V1\OptimizeToursResponse\Metrics $metrics
     *           Duration, distance and usage metrics for this solution.
     *     @type float $total_cost
     *           Deprecated: Use [Metrics.total_cost][] instead.
     *           Total cost of the solution. This takes into account all costs: costs per
     *           per hour and travel hour, fixed vehicle costs, unperformed shipment penalty
     *           costs, global duration cost, etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Routes computed for each vehicle; the i-th route corresponds to the i-th
     * vehicle in the model.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentRoute routes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Routes computed for each vehicle; the i-th route corresponds to the i-th
     * vehicle in the model.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentRoute routes = 1;</code>
     * @param \Google\Cloud\Optimization\V1\ShipmentRoute[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoutes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\ShipmentRoute::class);
        $this->routes = $arr;

        return $this;
    }

    /**
     * Copy of the [OptimizeToursRequest.label][google.cloud.optimization.v1.OptimizeToursRequest.label], if a label was specified in the
     * request.
     *
     * Generated from protobuf field <code>string request_label = 3;</code>
     * @return string
     */
    public function getRequestLabel()
    {
        return $this->request_label;
    }

    /**
     * Copy of the [OptimizeToursRequest.label][google.cloud.optimization.v1.OptimizeToursRequest.label], if a label was specified in the
     * request.
     *
     * Generated from protobuf field <code>string request_label = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_label = $var;

        return $this;
    }

    /**
     * The list of all shipments skipped.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.SkippedShipment skipped_shipments = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSkippedShipments()
    {
        return $this->skipped_shipments;
    }

    /**
     * The list of all shipments skipped.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.SkippedShipment skipped_shipments = 4;</code>
     * @param \Google\Cloud\Optimization\V1\SkippedShipment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSkippedShipments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\SkippedShipment::class);
        $this->skipped_shipments = $arr;

        return $this;
    }

    /**
     * List of all the validation errors that we were able to detect
     * independently. See the "MULTIPLE ERRORS" explanation for the
     * [OptimizeToursValidationError][google.cloud.optimization.v1.OptimizeToursValidationError] message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.OptimizeToursValidationError validation_errors = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidationErrors()
    {
        return $this->validation_errors;
    }

    /**
     * List of all the validation errors that we were able to detect
     * independently. See the "MULTIPLE ERRORS" explanation for the
     * [OptimizeToursValidationError][google.cloud.optimization.v1.OptimizeToursValidationError] message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.OptimizeToursValidationError validation_errors = 5;</code>
     * @param \Google\Cloud\Optimization\V1\OptimizeToursValidationError[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidationErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\OptimizeToursValidationError::class);
        $this->validation_errors = $arr;

        return $this;
    }

    /**
     * Duration, distance and usage metrics for this solution.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.OptimizeToursResponse.Metrics metrics = 6;</code>
     * @return \Google\Cloud\Optimization\V1\OptimizeToursResponse\Metrics|null
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    public function hasMetrics()
    {
        return isset($this->metrics);
    }

    public function clearMetrics()
    {
        unset($this->metrics);
    }

    /**
     * Duration, distance and usage metrics for this solution.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.OptimizeToursResponse.Metrics metrics = 6;</code>
     * @param \Google\Cloud\Optimization\V1\OptimizeToursResponse\Metrics $var
     * @return $this
     */
    public function setMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Optimization\V1\OptimizeToursResponse\Metrics::class);
        $this->metrics = $var;

        return $this;
    }

    /**
     * Deprecated: Use [Metrics.total_cost][] instead.
     * Total cost of the solution. This takes into account all costs: costs per
     * per hour and travel hour, fixed vehicle costs, unperformed shipment penalty
     * costs, global duration cost, etc.
     *
     * Generated from protobuf field <code>double total_cost = 2 [deprecated = true];</code>
     * @return float
     * @deprecated
     */
    public function getTotalCost()
    {
        @trigger_error('total_cost is deprecated.', E_USER_DEPRECATED);
        return $this->total_cost;
    }

    /**
     * Deprecated: Use [Metrics.total_cost][] instead.
     * Total cost of the solution. This takes into account all costs: costs per
     * per hour and travel hour, fixed vehicle costs, unperformed shipment penalty
     * costs, global duration cost, etc.
     *
     * Generated from protobuf field <code>double total_cost = 2 [deprecated = true];</code>
     * @param float $var
     * @return $this
     * @deprecated
     */
    public function setTotalCost($var)
    {
        @trigger_error('total_cost is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkDouble($var);
        $this->total_cost = $var;

        return $this;
    }

}
