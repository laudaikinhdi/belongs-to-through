<?php

namespace Znck\Eloquent\Traits;

/**
 * @phpstan-ignore trait.unused
 */
trait HasTableAlias
{
    /** @inheritDoc */
    public function qualifyColumn($column)
    {
        if (str_contains($column, '.')) {
            return $column;
        }

        $table = $this->getTable();

        if (str_contains($table, ' as ')) {
            $table = explode(' as ', $table)[1];
        }

        return $table.'.'.$column;
    }
}
