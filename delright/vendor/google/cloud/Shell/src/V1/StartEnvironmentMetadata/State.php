<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/shell/v1/cloudshell.proto

namespace Google\Cloud\Shell\V1\StartEnvironmentMetadata;

use UnexpectedValueException;

/**
 * Possible states an environment might transition between during startup.
 * These states are not normally actionable by clients, but may be used to
 * show a progress message to the user. An environment won't necessarily go
 * through all of these states when starting. More states are likely to be
 * added in the future.
 *
 * Protobuf type <code>google.cloud.shell.v1.StartEnvironmentMetadata.State</code>
 */
class State
{
    /**
     * The environment's start state is unknown.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The environment is in the process of being started, but no additional
     * details are available.
     *
     * Generated from protobuf enum <code>STARTING = 1;</code>
     */
    const STARTING = 1;
    /**
     * Startup is waiting for the user's disk to be unarchived. This can happen
     * when the user returns to Cloud Shell after not having used it for a
     * while, and suggests that startup will take longer than normal.
     *
     * Generated from protobuf enum <code>UNARCHIVING_DISK = 2;</code>
     */
    const UNARCHIVING_DISK = 2;
    /**
     * Startup is waiting for compute resources to be assigned to the
     * environment. This should normally happen very quickly, but an environment
     * might stay in this state for an extended period of time if the system is
     * experiencing heavy load.
     *
     * Generated from protobuf enum <code>AWAITING_COMPUTE_RESOURCES = 4;</code>
     */
    const AWAITING_COMPUTE_RESOURCES = 4;
    /**
     * Startup has completed. If the start operation was successful, the user
     * should be able to establish an SSH connection to their environment.
     * Otherwise, the operation will contain details of the failure.
     *
     * Generated from protobuf enum <code>FINISHED = 3;</code>
     */
    const FINISHED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::STARTING => 'STARTING',
        self::UNARCHIVING_DISK => 'UNARCHIVING_DISK',
        self::AWAITING_COMPUTE_RESOURCES => 'AWAITING_COMPUTE_RESOURCES',
        self::FINISHED => 'FINISHED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Shell\V1\StartEnvironmentMetadata_State::class);
