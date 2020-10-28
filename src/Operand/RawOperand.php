<?php


namespace ODataQueryBuilder\Operand;


class RawOperand implements OperandInterface
{
    private $operand;

    public function __construct($operand)
    {
        $this->operand = $operand;
    }

    public function format(): string
    {
        return $this->operand;
    }
}