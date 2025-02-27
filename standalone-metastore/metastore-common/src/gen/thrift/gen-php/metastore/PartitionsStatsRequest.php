<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.16.0)
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

class PartitionsStatsRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'dbName',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'tblName',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'colNames',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        4 => array(
            'var' => 'partNames',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        5 => array(
            'var' => 'catName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'validWriteIdList',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'engine',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $dbName = null;
    /**
     * @var string
     */
    public $tblName = null;
    /**
     * @var string[]
     */
    public $colNames = null;
    /**
     * @var string[]
     */
    public $partNames = null;
    /**
     * @var string
     */
    public $catName = null;
    /**
     * @var string
     */
    public $validWriteIdList = null;
    /**
     * @var string
     */
    public $engine = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['dbName'])) {
                $this->dbName = $vals['dbName'];
            }
            if (isset($vals['tblName'])) {
                $this->tblName = $vals['tblName'];
            }
            if (isset($vals['colNames'])) {
                $this->colNames = $vals['colNames'];
            }
            if (isset($vals['partNames'])) {
                $this->partNames = $vals['partNames'];
            }
            if (isset($vals['catName'])) {
                $this->catName = $vals['catName'];
            }
            if (isset($vals['validWriteIdList'])) {
                $this->validWriteIdList = $vals['validWriteIdList'];
            }
            if (isset($vals['engine'])) {
                $this->engine = $vals['engine'];
            }
        }
    }

    public function getName()
    {
        return 'PartitionsStatsRequest';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->dbName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->tblName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->colNames = array();
                        $_size546 = 0;
                        $_etype549 = 0;
                        $xfer += $input->readListBegin($_etype549, $_size546);
                        for ($_i550 = 0; $_i550 < $_size546; ++$_i550) {
                            $elem551 = null;
                            $xfer += $input->readString($elem551);
                            $this->colNames []= $elem551;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::LST) {
                        $this->partNames = array();
                        $_size552 = 0;
                        $_etype555 = 0;
                        $xfer += $input->readListBegin($_etype555, $_size552);
                        for ($_i556 = 0; $_i556 < $_size552; ++$_i556) {
                            $elem557 = null;
                            $xfer += $input->readString($elem557);
                            $this->partNames []= $elem557;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->catName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->validWriteIdList);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->engine);
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('PartitionsStatsRequest');
        if ($this->dbName !== null) {
            $xfer += $output->writeFieldBegin('dbName', TType::STRING, 1);
            $xfer += $output->writeString($this->dbName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tblName !== null) {
            $xfer += $output->writeFieldBegin('tblName', TType::STRING, 2);
            $xfer += $output->writeString($this->tblName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->colNames !== null) {
            if (!is_array($this->colNames)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('colNames', TType::LST, 3);
            $output->writeListBegin(TType::STRING, count($this->colNames));
            foreach ($this->colNames as $iter558) {
                $xfer += $output->writeString($iter558);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->partNames !== null) {
            if (!is_array($this->partNames)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('partNames', TType::LST, 4);
            $output->writeListBegin(TType::STRING, count($this->partNames));
            foreach ($this->partNames as $iter559) {
                $xfer += $output->writeString($iter559);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->catName !== null) {
            $xfer += $output->writeFieldBegin('catName', TType::STRING, 5);
            $xfer += $output->writeString($this->catName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->validWriteIdList !== null) {
            $xfer += $output->writeFieldBegin('validWriteIdList', TType::STRING, 6);
            $xfer += $output->writeString($this->validWriteIdList);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->engine !== null) {
            $xfer += $output->writeFieldBegin('engine', TType::STRING, 7);
            $xfer += $output->writeString($this->engine);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
