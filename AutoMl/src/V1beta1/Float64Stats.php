<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/data_stats.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data statistics of a series of FLOAT64 values.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.Float64Stats</code>
 */
class Float64Stats extends \Google\Protobuf\Internal\Message
{
    /**
     * The mean of the series.
     *
     * Generated from protobuf field <code>double mean = 1;</code>
     */
    protected $mean = 0.0;
    /**
     * The standard deviation of the series.
     *
     * Generated from protobuf field <code>double standard_deviation = 2;</code>
     */
    protected $standard_deviation = 0.0;
    /**
     * Ordered from 0 to k k-quantile values of the data series of n values.
     * The value at index i is, approximately, the i*n/k-th smallest value in the
     * series; for i = 0 and i = k these are, respectively, the min and max
     * values.
     *
     * Generated from protobuf field <code>repeated double quantiles = 3;</code>
     */
    private $quantiles;
    /**
     * Histogram buckets of the data series. Sorted by the min value of the
     * bucket, ascendingly, and the number of the buckets is dynamically
     * generated. The buckets are non-overlapping and completely cover whole
     * FLOAT64 range with min of first bucket being `"-Infinity"`, and max of
     * the last one being `"Infinity"`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.Float64Stats.HistogramBucket histogram_buckets = 4;</code>
     */
    private $histogram_buckets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $mean
     *           The mean of the series.
     *     @type float $standard_deviation
     *           The standard deviation of the series.
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $quantiles
     *           Ordered from 0 to k k-quantile values of the data series of n values.
     *           The value at index i is, approximately, the i*n/k-th smallest value in the
     *           series; for i = 0 and i = k these are, respectively, the min and max
     *           values.
     *     @type \Google\Cloud\AutoMl\V1beta1\Float64Stats\HistogramBucket[]|\Google\Protobuf\Internal\RepeatedField $histogram_buckets
     *           Histogram buckets of the data series. Sorted by the min value of the
     *           bucket, ascendingly, and the number of the buckets is dynamically
     *           generated. The buckets are non-overlapping and completely cover whole
     *           FLOAT64 range with min of first bucket being `"-Infinity"`, and max of
     *           the last one being `"Infinity"`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\DataStats::initOnce();
        parent::__construct($data);
    }

    /**
     * The mean of the series.
     *
     * Generated from protobuf field <code>double mean = 1;</code>
     * @return float
     */
    public function getMean()
    {
        return $this->mean;
    }

    /**
     * The mean of the series.
     *
     * Generated from protobuf field <code>double mean = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setMean($var)
    {
        GPBUtil::checkDouble($var);
        $this->mean = $var;

        return $this;
    }

    /**
     * The standard deviation of the series.
     *
     * Generated from protobuf field <code>double standard_deviation = 2;</code>
     * @return float
     */
    public function getStandardDeviation()
    {
        return $this->standard_deviation;
    }

    /**
     * The standard deviation of the series.
     *
     * Generated from protobuf field <code>double standard_deviation = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setStandardDeviation($var)
    {
        GPBUtil::checkDouble($var);
        $this->standard_deviation = $var;

        return $this;
    }

    /**
     * Ordered from 0 to k k-quantile values of the data series of n values.
     * The value at index i is, approximately, the i*n/k-th smallest value in the
     * series; for i = 0 and i = k these are, respectively, the min and max
     * values.
     *
     * Generated from protobuf field <code>repeated double quantiles = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuantiles()
    {
        return $this->quantiles;
    }

    /**
     * Ordered from 0 to k k-quantile values of the data series of n values.
     * The value at index i is, approximately, the i*n/k-th smallest value in the
     * series; for i = 0 and i = k these are, respectively, the min and max
     * values.
     *
     * Generated from protobuf field <code>repeated double quantiles = 3;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuantiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->quantiles = $arr;

        return $this;
    }

    /**
     * Histogram buckets of the data series. Sorted by the min value of the
     * bucket, ascendingly, and the number of the buckets is dynamically
     * generated. The buckets are non-overlapping and completely cover whole
     * FLOAT64 range with min of first bucket being `"-Infinity"`, and max of
     * the last one being `"Infinity"`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.Float64Stats.HistogramBucket histogram_buckets = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHistogramBuckets()
    {
        return $this->histogram_buckets;
    }

    /**
     * Histogram buckets of the data series. Sorted by the min value of the
     * bucket, ascendingly, and the number of the buckets is dynamically
     * generated. The buckets are non-overlapping and completely cover whole
     * FLOAT64 range with min of first bucket being `"-Infinity"`, and max of
     * the last one being `"Infinity"`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.Float64Stats.HistogramBucket histogram_buckets = 4;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\Float64Stats\HistogramBucket[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHistogramBuckets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1beta1\Float64Stats\HistogramBucket::class);
        $this->histogram_buckets = $arr;

        return $this;
    }

}

