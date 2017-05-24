<?php
namespace andriytest\PigLatin;

/**
 * Created by PhpStorm.
 * User: Andriy
 * Date: 24/05/2017
 * Time: 21:08
 */
class PigLatin
{

    public function __construct()
    {
        echo "got here!!!";

    }


    public function translateFraze($input)
    {

        $return = '';

        $wordList = explode(' ', $input);

        foreach($wordList as $word){
            /*if(parent::startVowel($word)){
                $return .= preg_replace($this->vowel, "$1$2'".$_CONF['vowelending'], $word);
            }elseif(parent::startConsonant($word)){
                $return .= preg_replace($this->consonant, "$2-$1ay", $word);
            }elseif(parent::startOther($word)){
                $return .= preg_replace($this->other, "$2-$1ay", $word);
            }
            */

            $return .= $this->translateWord($word)." ";
        }

        return $return;
    }


    public function translateWord($word)
    {
        $first_pig_latin = preg_replace('#^([^aeiou]+)([aeiou]+)(.*)#', '$2$3$1ay', $word);
        $result_pig_latin = preg_replace('#(^[aeiou].*)#', '$1way', $first_pig_latin);
        return $result_pig_latin;
    }

}