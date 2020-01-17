<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/data_items.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message that describes dimension of a document.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.DocumentDimensions</code>
 */
class DocumentDimensions extends \Google\Protobuf\Internal\Message
{
    /**
     * Unit of the dimension.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DocumentDimensions.DocumentDimensionUnit unit = 1;</code>
     */
    protected $unit = 0;
    /**
     * Width value of the document, works together with the unit.
     *
     * Generated from protobuf field <code>float width = 2;</code>
     */
    protected $width = 0.0;
    /**
     * Height value of the document, works together with the unit.
     *
     * Generated from protobuf field <code>float height = 3;</code>
     */
    protected $height = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $unit
     *           Unit of the dimension.
     *     @type float $width
     *           Width value of the document, works together with the unit.
     *     @type float $height
     *           Height value of the document, works together with the unit.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\DataItems::initOnce();
        parent::__construct($data);
    }

    /**
     * Unit of the dimension.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DocumentDimensions.DocumentDimensionUnit unit = 1;</code>
     * @return int
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Unit of the dimension.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DocumentDimensions.DocumentDimensionUnit unit = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AutoMl\V1beta1\DocumentDimensions_DocumentDimensionUnit::class);
        $this->unit = $var;

        return $this;
    }

    /**
     * Width value of the document, works together with the unit.
     *
     * Generated from protobuf field <code>float width = 2;</code>
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Width value of the document, works together with the unit.
     *
     * Generated from protobuf field <code>float width = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkFloat($var);
        $this->width = $var;

        return $this;
    }

    /**
     * Height value of the document, works together with the unit.
     *
     * Generated from protobuf field <code>float height = 3;</code>
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Height value of the document, works together with the unit.
     *
     * Generated from protobuf field <code>float height = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->height = $var;

        return $this;
    }

}

