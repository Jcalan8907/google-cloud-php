<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [Datastore.RunQuery][google.datastore.v1.Datastore.RunQuery].
 *
 * Generated from protobuf message <code>google.datastore.v1.RunQueryResponse</code>
 */
class RunQueryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A batch of query results (always present).
     *
     * Generated from protobuf field <code>.google.datastore.v1.QueryResultBatch batch = 1;</code>
     */
    protected $batch = null;
    /**
     * The parsed form of the `GqlQuery` from the request, if it was set.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Query query = 2;</code>
     */
    protected $query = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastore\V1\QueryResultBatch $batch
     *           A batch of query results (always present).
     *     @type \Google\Cloud\Datastore\V1\Query $query
     *           The parsed form of the `GqlQuery` from the request, if it was set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * A batch of query results (always present).
     *
     * Generated from protobuf field <code>.google.datastore.v1.QueryResultBatch batch = 1;</code>
     * @return \Google\Cloud\Datastore\V1\QueryResultBatch
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * A batch of query results (always present).
     *
     * Generated from protobuf field <code>.google.datastore.v1.QueryResultBatch batch = 1;</code>
     * @param \Google\Cloud\Datastore\V1\QueryResultBatch $var
     * @return $this
     */
    public function setBatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\QueryResultBatch::class);
        $this->batch = $var;

        return $this;
    }

    /**
     * The parsed form of the `GqlQuery` from the request, if it was set.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Query query = 2;</code>
     * @return \Google\Cloud\Datastore\V1\Query
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * The parsed form of the `GqlQuery` from the request, if it was set.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Query query = 2;</code>
     * @param \Google\Cloud\Datastore\V1\Query $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\Query::class);
        $this->query = $var;

        return $this;
    }

}

