<?php
namespace phpsoft\piglatin;
/**
 * Created by PhpStorm.
 * User: playground
 * Date: 25/05/2017
 * Time: 01:21
 */


class Helper
{
    /**
     * @var array
     */
    public static $consonant = [
        'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'
    ];


    /**
     * @var array
     */
    public static $combinations = [
        'ci', 'dge', 'gu', 'qu', 'si', 'su', 'ti', 'ya', 'ye', 'yi', 'yo', 'yu'
    ];


    /**
     * @var array
     */
    public static $vowel = [
        'a', 'e', 'i', 'o', 'u'
    ];


    /**
     * @var string
     */
    public static $vowelending = 'ay';


    /**
     * @param $string
     * @return bool
     */
    public static function startConsonant($string)
    {
        $word = strtolower($string);
        $letter = $word[0];

        if ($letter == 'y') {
            return in_array(substr($word, 0, 2), self::$combinations);
        }

        return in_array($letter, self::$consonant);
    }


    /**
     * @param $string
     * @return bool
     */
    public static function startVowel($string)
    {
        $word = strtolower($string);
        $letter = $word[0];

        if ($letter == 'y') {
            return !in_array(substr($word, 1, 1), self::$vowel);
        }

        return in_array($letter, self::$vowel);
    }


    /**
     * @param $word
     * @return string
     */
    public static function getWordBeginning($word)
    {
        $word = strtolower($word);
        foreach (array_merge(self::$combinations, self::$consonant) as $combination) {
            if (strpos($word, $combination) === 0) {
                return $combination . self::getBeginning(substr($word, strlen($combination)));
            }
        }
    }
}
