<?php

namespace Elfeffe\TextStat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static float flesch_reading_ease(string $text)
 * @method static float smog_index(string $text)
 * @method static float flesch_kincaid_grade(string $text)
 * @method static float coleman_liau_index(string $text)
 * @method static float automated_readability_index(string $text)
 * @method static float dale_chall_readability_score(string $text)
 * @method static int difficult_words(string $text)
 * @method static float linsear_write_formula(string $text)
 * @method static float gunning_fog(string $text)
 * @method static string text_standard(string $text, bool $float = false)
 * @method static float fernandez_huerta(string $text)
 * @method static float szigriszt_pazos(string $text)
 * @method static float gutierrez_polini(string $text)
 * @method static float crawford(string $text)
 * @method static float gulpease_index(string $text)
 * @method static float osman(string $text)
 * @method static int syllable_count(string $text, bool $lang = 'en_us')
 * @method static int lexicon_count(string $text, bool $removepunct = true)
 * @method static int sentence_count(string $text)
 * @method static array reading_time(string $text, int $wpm = 200)
 * @method static float consensus(string $text, bool $float = false)
 */
class TextStat extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Elfeffe\TextStat\TextStat::class;
    }
}
