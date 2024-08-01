<?php

namespace Elfeffe\TextStat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elfeffe\TextStat\TextStat
 */
class TextStat extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Elfeffe\TextStat\TextStat::class;
    }
}
