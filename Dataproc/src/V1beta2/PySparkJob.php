<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/jobs.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud Dataproc job for running
 * [Apache
 * PySpark](https://spark.apache.org/docs/0.9.0/python-programming-guide.html)
 * applications on YARN.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.PySparkJob</code>
 */
class PySparkJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The HCFS URI of the main Python file to use as the driver. Must
     * be a .py file.
     *
     * Generated from protobuf field <code>string main_python_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $main_python_file_uri = '';
    /**
     * Optional. The arguments to pass to the driver.  Do not include arguments,
     * such as `--conf`, that can be set as job properties, since a collision may
     * occur that causes an incorrect job submission.
     *
     * Generated from protobuf field <code>repeated string args = 2;</code>
     */
    private $args;
    /**
     * Optional. HCFS file URIs of Python files to pass to the PySpark
     * framework. Supported file types: .py, .egg, and .zip.
     *
     * Generated from protobuf field <code>repeated string python_file_uris = 3;</code>
     */
    private $python_file_uris;
    /**
     * Optional. HCFS URIs of jar files to add to the CLASSPATHs of the
     * Python driver and tasks.
     *
     * Generated from protobuf field <code>repeated string jar_file_uris = 4;</code>
     */
    private $jar_file_uris;
    /**
     * Optional. HCFS URIs of files to be copied to the working directory of
     * Python drivers and distributed tasks. Useful for naively parallel tasks.
     *
     * Generated from protobuf field <code>repeated string file_uris = 5;</code>
     */
    private $file_uris;
    /**
     * Optional. HCFS URIs of archives to be extracted in the working directory of
     * .jar, .tar, .tar.gz, .tgz, and .zip.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 6;</code>
     */
    private $archive_uris;
    /**
     * Optional. A mapping of property names to values, used to configure PySpark.
     * Properties that conflict with values set by the Cloud Dataproc API may be
     * overwritten. Can include properties set in
     * /etc/spark/conf/spark-defaults.conf and classes in user code.
     *
     * Generated from protobuf field <code>map<string, string> properties = 7;</code>
     */
    private $properties;
    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.LoggingConfig logging_config = 8;</code>
     */
    protected $logging_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $main_python_file_uri
     *           Required. The HCFS URI of the main Python file to use as the driver. Must
     *           be a .py file.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $args
     *           Optional. The arguments to pass to the driver.  Do not include arguments,
     *           such as `--conf`, that can be set as job properties, since a collision may
     *           occur that causes an incorrect job submission.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $python_file_uris
     *           Optional. HCFS file URIs of Python files to pass to the PySpark
     *           framework. Supported file types: .py, .egg, and .zip.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $jar_file_uris
     *           Optional. HCFS URIs of jar files to add to the CLASSPATHs of the
     *           Python driver and tasks.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $file_uris
     *           Optional. HCFS URIs of files to be copied to the working directory of
     *           Python drivers and distributed tasks. Useful for naively parallel tasks.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $archive_uris
     *           Optional. HCFS URIs of archives to be extracted in the working directory of
     *           .jar, .tar, .tar.gz, .tgz, and .zip.
     *     @type array|\Google\Protobuf\Internal\MapField $properties
     *           Optional. A mapping of property names to values, used to configure PySpark.
     *           Properties that conflict with values set by the Cloud Dataproc API may be
     *           overwritten. Can include properties set in
     *           /etc/spark/conf/spark-defaults.conf and classes in user code.
     *     @type \Google\Cloud\Dataproc\V1beta2\LoggingConfig $logging_config
     *           Optional. The runtime log config for job execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The HCFS URI of the main Python file to use as the driver. Must
     * be a .py file.
     *
     * Generated from protobuf field <code>string main_python_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMainPythonFileUri()
    {
        return $this->main_python_file_uri;
    }

    /**
     * Required. The HCFS URI of the main Python file to use as the driver. Must
     * be a .py file.
     *
     * Generated from protobuf field <code>string main_python_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMainPythonFileUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->main_python_file_uri = $var;

        return $this;
    }

    /**
     * Optional. The arguments to pass to the driver.  Do not include arguments,
     * such as `--conf`, that can be set as job properties, since a collision may
     * occur that causes an incorrect job submission.
     *
     * Generated from protobuf field <code>repeated string args = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Optional. The arguments to pass to the driver.  Do not include arguments,
     * such as `--conf`, that can be set as job properties, since a collision may
     * occur that causes an incorrect job submission.
     *
     * Generated from protobuf field <code>repeated string args = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * Optional. HCFS file URIs of Python files to pass to the PySpark
     * framework. Supported file types: .py, .egg, and .zip.
     *
     * Generated from protobuf field <code>repeated string python_file_uris = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPythonFileUris()
    {
        return $this->python_file_uris;
    }

    /**
     * Optional. HCFS file URIs of Python files to pass to the PySpark
     * framework. Supported file types: .py, .egg, and .zip.
     *
     * Generated from protobuf field <code>repeated string python_file_uris = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPythonFileUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->python_file_uris = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of jar files to add to the CLASSPATHs of the
     * Python driver and tasks.
     *
     * Generated from protobuf field <code>repeated string jar_file_uris = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJarFileUris()
    {
        return $this->jar_file_uris;
    }

    /**
     * Optional. HCFS URIs of jar files to add to the CLASSPATHs of the
     * Python driver and tasks.
     *
     * Generated from protobuf field <code>repeated string jar_file_uris = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJarFileUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->jar_file_uris = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of files to be copied to the working directory of
     * Python drivers and distributed tasks. Useful for naively parallel tasks.
     *
     * Generated from protobuf field <code>repeated string file_uris = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileUris()
    {
        return $this->file_uris;
    }

    /**
     * Optional. HCFS URIs of files to be copied to the working directory of
     * Python drivers and distributed tasks. Useful for naively parallel tasks.
     *
     * Generated from protobuf field <code>repeated string file_uris = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->file_uris = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of archives to be extracted in the working directory of
     * .jar, .tar, .tar.gz, .tgz, and .zip.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArchiveUris()
    {
        return $this->archive_uris;
    }

    /**
     * Optional. HCFS URIs of archives to be extracted in the working directory of
     * .jar, .tar, .tar.gz, .tgz, and .zip.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArchiveUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->archive_uris = $arr;

        return $this;
    }

    /**
     * Optional. A mapping of property names to values, used to configure PySpark.
     * Properties that conflict with values set by the Cloud Dataproc API may be
     * overwritten. Can include properties set in
     * /etc/spark/conf/spark-defaults.conf and classes in user code.
     *
     * Generated from protobuf field <code>map<string, string> properties = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Optional. A mapping of property names to values, used to configure PySpark.
     * Properties that conflict with values set by the Cloud Dataproc API may be
     * overwritten. Can include properties set in
     * /etc/spark/conf/spark-defaults.conf and classes in user code.
     *
     * Generated from protobuf field <code>map<string, string> properties = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->properties = $arr;

        return $this;
    }

    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.LoggingConfig logging_config = 8;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\LoggingConfig
     */
    public function getLoggingConfig()
    {
        return $this->logging_config;
    }

    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.LoggingConfig logging_config = 8;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\LoggingConfig $var
     * @return $this
     */
    public function setLoggingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\LoggingConfig::class);
        $this->logging_config = $var;

        return $this;
    }

}

