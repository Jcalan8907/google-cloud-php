<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The workflow node.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.WorkflowNode</code>
 */
class WorkflowNode extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the node.
     *
     * Generated from protobuf field <code>string step_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $step_id = '';
    /**
     * Output only. Node's prerequisite nodes.
     *
     * Generated from protobuf field <code>repeated string prerequisite_step_ids = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $prerequisite_step_ids;
    /**
     * Output only. The job id; populated after the node enters RUNNING state.
     *
     * Generated from protobuf field <code>string job_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $job_id = '';
    /**
     * Output only. The node state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowNode.NodeState state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The error detail.
     *
     * Generated from protobuf field <code>string error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $step_id
     *           Output only. The name of the node.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $prerequisite_step_ids
     *           Output only. Node's prerequisite nodes.
     *     @type string $job_id
     *           Output only. The job id; populated after the node enters RUNNING state.
     *     @type int $state
     *           Output only. The node state.
     *     @type string $error
     *           Output only. The error detail.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the node.
     *
     * Generated from protobuf field <code>string step_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStepId()
    {
        return $this->step_id;
    }

    /**
     * Output only. The name of the node.
     *
     * Generated from protobuf field <code>string step_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStepId($var)
    {
        GPBUtil::checkString($var, True);
        $this->step_id = $var;

        return $this;
    }

    /**
     * Output only. Node's prerequisite nodes.
     *
     * Generated from protobuf field <code>repeated string prerequisite_step_ids = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrerequisiteStepIds()
    {
        return $this->prerequisite_step_ids;
    }

    /**
     * Output only. Node's prerequisite nodes.
     *
     * Generated from protobuf field <code>repeated string prerequisite_step_ids = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrerequisiteStepIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->prerequisite_step_ids = $arr;

        return $this;
    }

    /**
     * Output only. The job id; populated after the node enters RUNNING state.
     *
     * Generated from protobuf field <code>string job_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Output only. The job id; populated after the node enters RUNNING state.
     *
     * Generated from protobuf field <code>string job_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * Output only. The node state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowNode.NodeState state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The node state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowNode.NodeState state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1beta2\WorkflowNode_NodeState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The error detail.
     *
     * Generated from protobuf field <code>string error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Output only. The error detail.
     *
     * Generated from protobuf field <code>string error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}

