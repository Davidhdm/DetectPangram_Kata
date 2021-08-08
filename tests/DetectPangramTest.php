<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\DetectPangram;

class DetectPangramTest extends TestCase
{
  public function test_Sentence_Is_a_Pangram()
  {
    $detectPangram = new DetectPangram();
    $sentence = 'The quick brown fox jumps over the lazy dog';
    /* $sentence = 'abcdefghijklmnopqrstuvwxy'; */
    $result = $detectPangram->isPangram($sentence);

    $this->assertTrue($result);
  }
}

?>