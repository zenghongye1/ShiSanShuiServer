<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: event.proto

namespace Event;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>event.PushEvent</code>
 */
class PushEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.event.ServerEntity Me = 1;</code>
     */
    private $Me = null;
    /**
     * <pre>
     *上报的SEQ, 会透传回去
     * </pre>
     *
     * <code>int32 Seq = 2;</code>
     */
    private $Seq = 0;
    /**
     * <pre>
     *事件数组, json格式的字符串
     * </pre>
     *
     * <code>repeated string Events = 3;</code>
     */
    private $Events;

    public function __construct() {
        \GPBMetadata\Event::initOnce();
        parent::__construct();
    }

    /**
     * <code>.event.ServerEntity Me = 1;</code>
     */
    public function getMe()
    {
        return $this->Me;
    }

    /**
     * <code>.event.ServerEntity Me = 1;</code>
     */
    public function setMe(&$var)
    {
        GPBUtil::checkMessage($var, \Event\ServerEntity::class);
        $this->Me = $var;
    }

    /**
     * <pre>
     *上报的SEQ, 会透传回去
     * </pre>
     *
     * <code>int32 Seq = 2;</code>
     */
    public function getSeq()
    {
        return $this->Seq;
    }

    /**
     * <pre>
     *上报的SEQ, 会透传回去
     * </pre>
     *
     * <code>int32 Seq = 2;</code>
     */
    public function setSeq($var)
    {
        GPBUtil::checkInt32($var);
        $this->Seq = $var;
    }

    /**
     * <pre>
     *事件数组, json格式的字符串
     * </pre>
     *
     * <code>repeated string Events = 3;</code>
     */
    public function getEvents()
    {
        return $this->Events;
    }

    /**
     * <pre>
     *事件数组, json格式的字符串
     * </pre>
     *
     * <code>repeated string Events = 3;</code>
     */
    public function setEvents(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->Events = $arr;
    }

}

