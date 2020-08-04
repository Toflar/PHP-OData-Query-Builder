<?php

namespace ODataQueryBuilder\Helpers;

use ODataQueryBuilder\ODataQueryBuilder;

class SimpleFilterBuilder
{

    private $oDataQueryBuilder;
    private $leftOperand;
    private $andOr;


    public function __construct(ODataQueryBuilder $queryBuilder, string $leftOperand, string $andOr)
    {
        $this->oDataQueryBuilder = $queryBuilder;
        $this->leftOperand = $leftOperand;
        $this->andOr = $andOr;
    }

    public function equals($rightOperand): ODataQueryBuilder
    {
        $rightOperand = OperandFormatter::format($rightOperand);

        $this->oDataQueryBuilder->addFilterString($this->leftOperand . ' eq ' . $rightOperand, $this->andOr);

        return $this->oDataQueryBuilder;
    }

    public function notEquals($rightOperand): ODataQueryBuilder
    {
        $rightOperand = OperandFormatter::format($rightOperand);

        $this->oDataQueryBuilder->addFilterString($this->leftOperand . ' ne ' . $rightOperand, $this->andOr);

        return $this->oDataQueryBuilder;
    }

    public function greaterThan($rightOperand): ODataQueryBuilder
    {
        $rightOperand = OperandFormatter::format($rightOperand);

        $this->oDataQueryBuilder->addFilterString($this->leftOperand . ' gt ' . $rightOperand, $this->andOr);

        return $this->oDataQueryBuilder;
    }

    public function greaterThanOrEqual($rightOperand): ODataQueryBuilder
    {
        $rightOperand = OperandFormatter::format($rightOperand);

        $this->oDataQueryBuilder->addFilterString($this->leftOperand . ' ge ' . $rightOperand, $this->andOr);

        return $this->oDataQueryBuilder;
    }

    public function lessThan($rightOperand): ODataQueryBuilder
    {
        $rightOperand = OperandFormatter::format($rightOperand);

        $this->oDataQueryBuilder->addFilterString($this->leftOperand . ' lt ' . $rightOperand, $this->andOr);

        return $this->oDataQueryBuilder;
    }

    public function lessThanOrEqual($rightOperand): ODataQueryBuilder
    {
        $rightOperand = OperandFormatter::format($rightOperand);

        $this->oDataQueryBuilder->addFilterString($this->leftOperand . ' le ' . $rightOperand, $this->andOr);

        return $this->oDataQueryBuilder;
    }
}