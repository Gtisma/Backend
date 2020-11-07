<?php

namespace App\Domain\Models\ModelTraits;

trait GetsTableName
{
    public static function getTableName()
    {
        return (new self())->getTable();
    }
}