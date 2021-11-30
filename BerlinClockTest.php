<?php


use PHPUnit\Framework\TestCase;
require 'BerlinClock.php';
class BerlinClockTest extends TestCase
{
    public function testMinuteSimplePlusPetitQue1ShouldReturn0000(){

        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->testMinute2emeLigne(0);

        $this->assertEquals("0000",$actual);


    }

    public function testMinuteSimple1ShouldReturnY000(){

        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->testMinute2emeLigne(1);

        $this->assertEquals("Y000",$actual);


    }
    public function testMinuteSimple2ShouldReturnYY00(){

        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->testMinute2emeLigne(2);

        $this->assertEquals("YY00",$actual);


    }
}
