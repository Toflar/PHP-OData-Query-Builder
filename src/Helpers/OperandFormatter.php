<?php


namespace ODataQueryBuilder\Helpers;

use ODataQueryBuilder\Operand\OperandInterface;

class OperandFormatter
{
    /**
     * @param mixed $operand
     */
    public static function format($operand): string
    {
        if ($operand instanceof OperandInterface) {
            return $operand->format();
        }

        if ($operand instanceof \DateTime) {
            $operand->setTimezone(new \DateTimeZone('GMT'));
            return $operand->format('Y-m-d\TH:i:s\Z');
        }

        if (\is_string($operand)) {
            return '\'' . $operand . '\'';
        }

        if (\is_bool($operand)) {
            return $operand ? 'true' : 'false';
        }

        return $operand;
    }
}