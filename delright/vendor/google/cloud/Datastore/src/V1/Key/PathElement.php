<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/entity.proto

namespace Google\Cloud\Datastore\V1\Key;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A (kind, ID/name) pair used to construct a key path.
 * If either name or ID is set, the element is complete.
 * If neither is set, the element is incomplete.
 *
 * Generated from protobuf message <code>google.datastore.v1.Key.PathElement</code>
 */
class PathElement extends \Google\Protobuf\Internal\Message
{
    /**
     * The kind of the entity.
     * A kind matching regex `__.*__` is reserved/read-only.
     * A kind must not contain more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    protected $id_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           The kind of the entity.
     *           A kind matching regex `__.*__` is reserved/read-only.
     *           A kind must not contain more than 1500 bytes when UTF-8 encoded.
     *           Cannot be `""`.
     *     @type int|string $id
     *           The auto-allocated ID of the entity.
     *           Never equal to zero. Values less than zero are discouraged and may not
     *           be supported in the future.
     *     @type string $name
     *           The name of the entity.
     *           A name matching regex `__.*__` is reserved/read-only.
     *           A name must not be more than 1500 bytes when UTF-8 encoded.
     *           Cannot be `""`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Entity::initOnce();
        parent::__construct($data);
    }

    /**
     * The kind of the entity.
     * A kind matching regex `__.*__` is reserved/read-only.
     * A kind must not contain more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The kind of the entity.
     * A kind matching regex `__.*__` is reserved/read-only.
     * A kind must not contain more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The auto-allocated ID of the entity.
     * Never equal to zero. Values less than zero are discouraged and may not
     * be supported in the future.
     *
     * Generated from protobuf field <code>int64 id = 2;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->readOneof(2);
    }

    public function hasId()
    {
        return $this->hasOneof(2);
    }

    /**
     * The auto-allocated ID of the entity.
     * Never equal to zero. Values less than zero are discouraged and may not
     * be supported in the future.
     *
     * Generated from protobuf field <code>int64 id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The name of the entity.
     * A name matching regex `__.*__` is reserved/read-only.
     * A name must not be more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->readOneof(3);
    }

    public function hasName()
    {
        return $this->hasOneof(3);
    }

    /**
     * The name of the entity.
     * A name matching regex `__.*__` is reserved/read-only.
     * A name must not be more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getIdType()
    {
        return $this->whichOneof("id_type");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PathElement::class, \Google\Cloud\Datastore\V1\Key_PathElement::class);
