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

class ThriftHiveMetastore_create_table_with_constraints_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'tbl',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\metastore\Table',
        ),
        2 => array(
            'var' => 'primaryKeys',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLPrimaryKey',
                ),
        ),
        3 => array(
            'var' => 'foreignKeys',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLForeignKey',
                ),
        ),
        4 => array(
            'var' => 'uniqueConstraints',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLUniqueConstraint',
                ),
        ),
        5 => array(
            'var' => 'notNullConstraints',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLNotNullConstraint',
                ),
        ),
        6 => array(
            'var' => 'defaultConstraints',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLDefaultConstraint',
                ),
        ),
        7 => array(
            'var' => 'checkConstraints',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLCheckConstraint',
                ),
        ),
    );

    /**
     * @var \metastore\Table
     */
    public $tbl = null;
    /**
     * @var \metastore\SQLPrimaryKey[]
     */
    public $primaryKeys = null;
    /**
     * @var \metastore\SQLForeignKey[]
     */
    public $foreignKeys = null;
    /**
     * @var \metastore\SQLUniqueConstraint[]
     */
    public $uniqueConstraints = null;
    /**
     * @var \metastore\SQLNotNullConstraint[]
     */
    public $notNullConstraints = null;
    /**
     * @var \metastore\SQLDefaultConstraint[]
     */
    public $defaultConstraints = null;
    /**
     * @var \metastore\SQLCheckConstraint[]
     */
    public $checkConstraints = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['tbl'])) {
                $this->tbl = $vals['tbl'];
            }
            if (isset($vals['primaryKeys'])) {
                $this->primaryKeys = $vals['primaryKeys'];
            }
            if (isset($vals['foreignKeys'])) {
                $this->foreignKeys = $vals['foreignKeys'];
            }
            if (isset($vals['uniqueConstraints'])) {
                $this->uniqueConstraints = $vals['uniqueConstraints'];
            }
            if (isset($vals['notNullConstraints'])) {
                $this->notNullConstraints = $vals['notNullConstraints'];
            }
            if (isset($vals['defaultConstraints'])) {
                $this->defaultConstraints = $vals['defaultConstraints'];
            }
            if (isset($vals['checkConstraints'])) {
                $this->checkConstraints = $vals['checkConstraints'];
            }
        }
    }

    public function getName()
    {
        return 'ThriftHiveMetastore_create_table_with_constraints_args';
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
                    if ($ftype == TType::STRUCT) {
                        $this->tbl = new \metastore\Table();
                        $xfer += $this->tbl->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->primaryKeys = array();
                        $_size1390 = 0;
                        $_etype1393 = 0;
                        $xfer += $input->readListBegin($_etype1393, $_size1390);
                        for ($_i1394 = 0; $_i1394 < $_size1390; ++$_i1394) {
                            $elem1395 = null;
                            $elem1395 = new \metastore\SQLPrimaryKey();
                            $xfer += $elem1395->read($input);
                            $this->primaryKeys []= $elem1395;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->foreignKeys = array();
                        $_size1396 = 0;
                        $_etype1399 = 0;
                        $xfer += $input->readListBegin($_etype1399, $_size1396);
                        for ($_i1400 = 0; $_i1400 < $_size1396; ++$_i1400) {
                            $elem1401 = null;
                            $elem1401 = new \metastore\SQLForeignKey();
                            $xfer += $elem1401->read($input);
                            $this->foreignKeys []= $elem1401;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::LST) {
                        $this->uniqueConstraints = array();
                        $_size1402 = 0;
                        $_etype1405 = 0;
                        $xfer += $input->readListBegin($_etype1405, $_size1402);
                        for ($_i1406 = 0; $_i1406 < $_size1402; ++$_i1406) {
                            $elem1407 = null;
                            $elem1407 = new \metastore\SQLUniqueConstraint();
                            $xfer += $elem1407->read($input);
                            $this->uniqueConstraints []= $elem1407;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::LST) {
                        $this->notNullConstraints = array();
                        $_size1408 = 0;
                        $_etype1411 = 0;
                        $xfer += $input->readListBegin($_etype1411, $_size1408);
                        for ($_i1412 = 0; $_i1412 < $_size1408; ++$_i1412) {
                            $elem1413 = null;
                            $elem1413 = new \metastore\SQLNotNullConstraint();
                            $xfer += $elem1413->read($input);
                            $this->notNullConstraints []= $elem1413;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::LST) {
                        $this->defaultConstraints = array();
                        $_size1414 = 0;
                        $_etype1417 = 0;
                        $xfer += $input->readListBegin($_etype1417, $_size1414);
                        for ($_i1418 = 0; $_i1418 < $_size1414; ++$_i1418) {
                            $elem1419 = null;
                            $elem1419 = new \metastore\SQLDefaultConstraint();
                            $xfer += $elem1419->read($input);
                            $this->defaultConstraints []= $elem1419;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::LST) {
                        $this->checkConstraints = array();
                        $_size1420 = 0;
                        $_etype1423 = 0;
                        $xfer += $input->readListBegin($_etype1423, $_size1420);
                        for ($_i1424 = 0; $_i1424 < $_size1420; ++$_i1424) {
                            $elem1425 = null;
                            $elem1425 = new \metastore\SQLCheckConstraint();
                            $xfer += $elem1425->read($input);
                            $this->checkConstraints []= $elem1425;
                        }
                        $xfer += $input->readListEnd();
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
        $xfer += $output->writeStructBegin('ThriftHiveMetastore_create_table_with_constraints_args');
        if ($this->tbl !== null) {
            if (!is_object($this->tbl)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('tbl', TType::STRUCT, 1);
            $xfer += $this->tbl->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->primaryKeys !== null) {
            if (!is_array($this->primaryKeys)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('primaryKeys', TType::LST, 2);
            $output->writeListBegin(TType::STRUCT, count($this->primaryKeys));
            foreach ($this->primaryKeys as $iter1426) {
                $xfer += $iter1426->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->foreignKeys !== null) {
            if (!is_array($this->foreignKeys)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('foreignKeys', TType::LST, 3);
            $output->writeListBegin(TType::STRUCT, count($this->foreignKeys));
            foreach ($this->foreignKeys as $iter1427) {
                $xfer += $iter1427->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->uniqueConstraints !== null) {
            if (!is_array($this->uniqueConstraints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('uniqueConstraints', TType::LST, 4);
            $output->writeListBegin(TType::STRUCT, count($this->uniqueConstraints));
            foreach ($this->uniqueConstraints as $iter1428) {
                $xfer += $iter1428->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->notNullConstraints !== null) {
            if (!is_array($this->notNullConstraints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('notNullConstraints', TType::LST, 5);
            $output->writeListBegin(TType::STRUCT, count($this->notNullConstraints));
            foreach ($this->notNullConstraints as $iter1429) {
                $xfer += $iter1429->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->defaultConstraints !== null) {
            if (!is_array($this->defaultConstraints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('defaultConstraints', TType::LST, 6);
            $output->writeListBegin(TType::STRUCT, count($this->defaultConstraints));
            foreach ($this->defaultConstraints as $iter1430) {
                $xfer += $iter1430->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->checkConstraints !== null) {
            if (!is_array($this->checkConstraints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('checkConstraints', TType::LST, 7);
            $output->writeListBegin(TType::STRUCT, count($this->checkConstraints));
            foreach ($this->checkConstraints as $iter1431) {
                $xfer += $iter1431->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
