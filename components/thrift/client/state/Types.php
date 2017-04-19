<?php
namespace state;

/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class Client {
  static $_TSPEC;

  /**
   * @var string
   */
  public $tid = null;
  /**
   * @var string
   */
  public $uid = null;
  /**
   * @var string
   */
  public $sid = null;
  /**
   * @var string
   */
  public $cid = null;
  /**
   * @var string
   */
  public $tag = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'tid',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'uid',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'sid',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'cid',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'tag',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['tid'])) {
        $this->tid = $vals['tid'];
      }
      if (isset($vals['uid'])) {
        $this->uid = $vals['uid'];
      }
      if (isset($vals['sid'])) {
        $this->sid = $vals['sid'];
      }
      if (isset($vals['cid'])) {
        $this->cid = $vals['cid'];
      }
      if (isset($vals['tag'])) {
        $this->tag = $vals['tag'];
      }
    }
  }

  public function getName() {
    return 'Client';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->tid);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->uid);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sid);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->cid);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->tag);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Client');
    if ($this->tid !== null) {
      $xfer += $output->writeFieldBegin('tid', TType::STRING, 1);
      $xfer += $output->writeString($this->tid);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->uid !== null) {
      $xfer += $output->writeFieldBegin('uid', TType::STRING, 2);
      $xfer += $output->writeString($this->uid);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sid !== null) {
      $xfer += $output->writeFieldBegin('sid', TType::STRING, 3);
      $xfer += $output->writeString($this->sid);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->cid !== null) {
      $xfer += $output->writeFieldBegin('cid', TType::STRING, 4);
      $xfer += $output->writeString($this->cid);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tag !== null) {
      $xfer += $output->writeFieldBegin('tag', TType::STRING, 5);
      $xfer += $output->writeString($this->tag);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

