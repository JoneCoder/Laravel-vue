<?php

namespace App\classes;
class Series
{
    public function createSeries(){
        $numbers = (object)$_POST;
        $startingNum = $numbers->startingNum;
        $endingNum = $numbers->endingNum;
        $choice = $numbers->choice;
        $result = '';
        if($startingNum < $endingNum){
            for ($i = $startingNum; $i <= $endingNum; $i++){
                if($choice == 1 && $i % 2 != 0){
                    if ($i == $endingNum){
                        $result .= $i.'.';
                    }else{
                        $result .= $i.', ';
                    }
                }else if($choice == 2 && $i % 2 == 0){
                    if ($i == $endingNum){
                        $result .= $i.'.';
                    }else{
                        $result .= $i.', ';
                    }
                }
             
        }
        }else{
            for ($i = $startingNum; $i >= $endingNum; $i--){
            if($choice == 1 && $i % 2 != 0){
                    if ($i == $endingNum){
                        $result .= $i.'.';
                    }else{
                        $result .= $i.', ';
                    }
                }else if($choice == 2 && $i % 2 == 0){
                    if ($i == $endingNum){
                        $result .= $i.'.';
                    }else{
                        $result .= $i.', ';
                    }
                }
             
        }
        }
        
        return $result;
    }

    public function findWordCharacter(){
        $data = (object)$_POST;
        $stringData = $data->givenString;

        $totalWord = str_word_count($stringData);
        $totalChar = strlen($stringData);

        $totalCount['total_word'] = $totalWord;
        $totalCount['total_char'] = $totalChar;
        return $totalCount;
    }
}