<?php

namespace App;

class DetectPangram
{
  public function isPangram($sentence)
  {
    $isPangram = true;

    $alphabet = array(
      'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
      'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    );

    $lowercaseSentence = strtolower($sentence);
    $splittedSentence = str_split($lowercaseSentence);
    
    foreach ($alphabet as $letter) {
      $letterExists = in_array($letter, $splittedSentence);

      if(!$letterExists){
        $isPangram = false;
        break;
      }
    }
    return $isPangram;
  }
}

?>