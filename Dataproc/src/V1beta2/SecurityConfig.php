<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Security related configuration, including encryption, Kerberos, etc.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.SecurityConfig</code>
 */
class SecurityConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Kerberos related configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.KerberosConfig kerberos_config = 1;</code>
     */
    protected $kerberos_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataproc\V1beta2\KerberosConfig $kerberos_config
     *           Kerberos related configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Kerberos related configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.KerberosConfig kerberos_config = 1;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\KerberosConfig
     */
    public function getKerberosConfig()
    {
        return $this->kerberos_config;
    }

    /**
     * Kerberos related configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.KerberosConfig kerberos_config = 1;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\KerberosConfig $var
     * @return $this
     */
    public function setKerberosConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\KerberosConfig::class);
        $this->kerberos_config = $var;

        return $this;
    }

}

