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
    public function testMinuteSimple3ShouldReturnYYY0(){

        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->testMinute2emeLigne(3);

        $this->assertEquals("YYY0",$actual);


    }
    public function testMinuteSimple4ShouldReturnYYYY(){

        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->testMinute2emeLigne(4);

        $this->assertEquals("YYYY",$actual);


    }
    public function testMinuteSimple16ShouldReturnY000(){

        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->testMinute2emeLigne(16);

        $this->assertEquals("Y000",$actual);


    }
    public function testMinuteSimple17ShouldReturnYY00(){

        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->testMinute2emeLigne(17);

        $this->assertEquals("YY00",$actual);


    }
    public function testMinuteSimple17ShouldReturnYYY0(){

        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->testMinute2emeLigne(18);

        $this->assertEquals("YYY0",$actual);


    }
    public function testMinuteSimple19ShouldReturnYYYY(){

        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->testMinute2emeLigne(19);

        $this->assertEquals("YYYY",$actual);


    }
    public function testMinuteBloc5PlusPetitQue5ShouldReturn00000000000(){

        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->testMinuteBloc5(1);

        $this->assertEquals("00000000000",$actual);


    }


}
