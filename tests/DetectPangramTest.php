<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\DetectPangram;

class DetectPangramTest extends TestCase
{
  public function test_Sentence_Is_a_Pangram()
  {
    $detectPangram = new DetectPangram();
    $sentence = 'test';
    $response = $detectPangram->isPangram($sentence);

    $this->assertFalse($response);
  }
}

?>