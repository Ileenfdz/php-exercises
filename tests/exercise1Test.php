<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Exercise1;
class RnaTranscriptionTest extends TestCase{

    //     //Given - Inicialización de la clase
    //     //When - Llamada a las funciones que se quieran usar, dandole sus parámetros 
    //     //Then - assert de  el resultado esperado y el que se optiene
    //

    public function testFixedTests() {
        $this->assertEquals(true, solution("samurai", "ai"));
        $this->assertEquals(false, solution("sumo", "omo"));
        $this->assertEquals(true, solution("ninja", "ja"));
        $this->assertEquals(true, solution("sensei", "i"));
        $this->assertEquals(false, solution("samurai", "ra"));
        $this->assertEquals(false, solution("abc", "abcd"));
        $this->assertEquals(true, solution("abc", "abc"));
        $this->assertEquals(true, solution("abcabc", "bc"));
        $this->assertEquals(false, solution('ails', 'fails'));
        $this->assertEquals(true, solution('fails', 'ails'));
        $this->assertEquals(false, solution('this', 'fails'));
        $this->assertEquals(true, solution('yes this will pass', ''));
        $this->assertEquals(false, solution('this will not pass', '`^$<>()[]*|'));
        $this->assertEquals(false, solution("abc\n", 'abc'), 'Watch out for \n in the end');
      }
}