<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource that represents a person's email address.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Email</code>
 */
class Email extends \Google\Protobuf\Internal\Message
{
    /**
     * The usage of the email address. For example, SCHOOL, WORK, PERSONAL.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.ContactInfoUsage usage = 1;</code>
     */
    protected $usage = 0;
    /**
     * Email address.
     * Number of characters allowed is 4,000.
     *
     * Generated from protobuf field <code>string email_address = 2;</code>
     */
    protected $email_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $usage
     *           The usage of the email address. For example, SCHOOL, WORK, PERSONAL.
     *     @type string $email_address
     *           Email address.
     *           Number of characters allowed is 4,000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Profile::initOnce();
        parent::__construct($data);
    }

    /**
     * The usage of the email address. For example, SCHOOL, WORK, PERSONAL.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.ContactInfoUsage usage = 1;</code>
     * @return int
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * The usage of the email address. For example, SCHOOL, WORK, PERSONAL.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.ContactInfoUsage usage = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUsage($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\ContactInfoUsage::class);
        $this->usage = $var;

        return $this;
    }

    /**
     * Email address.
     * Number of characters allowed is 4,000.
     *
     * Generated from protobuf field <code>string email_address = 2;</code>
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    /**
     * Email address.
     * Number of characters allowed is 4,000.
     *
     * Generated from protobuf field <code>string email_address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_address = $var;

        return $this;
    }

}

