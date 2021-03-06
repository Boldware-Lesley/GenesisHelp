<?php

namespace PayPal\Test\Api;

use PayPal\Common\PayPalModel;
use PayPal\Api\PayoutSenderBatchHeader;

/**
 * Class PayoutSenderBatchHeader
 *
 * @package PayPal\Test\Home
 */
class PayoutSenderBatchHeaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Gets Json String of Object PayoutSenderBatchHeader
     * @return string
     */
    public static function getJson()
    {
        return '{"sender_batch_id":"TestSample","email_subject":"TestSample","recipient_type":"TestSample","batch_status":"TestSample"}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return PayoutSenderBatchHeader
     */
    public static function getObject()
    {
        return new PayoutSenderBatchHeader(self::getJson());
    }

    /**
     * Tests for Serialization and Deserialization Issues
     * @return PayoutSenderBatchHeader
     */
    public function testSerializationDeserialization()
    {
        $obj = new PayoutSenderBatchHeader(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getSenderBatchId());
        $this->assertNotNull($obj->getEmailSubject());
        $this->assertNotNull($obj->getRecipientType());
        $this->assertNotNull($obj->getBatchStatus());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param PayoutSenderBatchHeader $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getSenderBatchId(), "TestSample");
        $this->assertEquals($obj->getEmailSubject(), "TestSample");
        $this->assertEquals($obj->getRecipientType(), "TestSample");
        $this->assertEquals($obj->getBatchStatus(), "TestSample");
    }
}
