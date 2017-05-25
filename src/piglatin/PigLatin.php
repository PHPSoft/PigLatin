<?php
namespace phpsoft\piglatin;

/**
 * Created by PhpStorm.
 * User: Andriy
 * Date: 24/05/2017
 * Time: 21:08
 */

use phpsoft\piglatin\Helper;

class PigLatin
{

    /**
     * @param String $input
     * @return string
     */
    public function translateFraze($input)
    {
        $return = '';

        $wordList = explode(' ', $input);

        foreach ($wordList as $word) {

            if (Helper::startVowel($word)) {
                $return .= '\'w';
            }
            elseif (Helper::startConsonant($word)) {

                $consonants = Helper::getWordBeginning($word);
                $rest       = substr($word, strlen($consonants));
                $return    .= ($rest ? $rest . '-' : NULL) . $consonants;
            }

            $return .= $word. 'ay';
        }
        return $return;
    }

}