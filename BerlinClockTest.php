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
        public function testMinuteBloc5ShouldReturnY0000000000(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(5);

            $this->assertEquals("Y0000000000",$actual);


        }
        public function testMinuteBloc10ShouldReturnYY000000000(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(10);

            $this->assertEquals("YY000000000",$actual);


        }
        public function testMinuteBloc15ShouldReturnYYR00000000(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(15);

            $this->assertEquals("YYR00000000",$actual);


        }
        public function testMinuteBloc20ShouldReturnYYRY0000000(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(20);

            $this->assertEquals("YYRY0000000",$actual);


        }
        public function testMinuteBloc25ShouldReturnYYRYY000000(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(25);

            $this->assertEquals("YYRYY000000",$actual);


        }
        public function testMinuteBloc30ShouldReturnYYRYYR00000(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(30);

            $this->assertEquals("YYRYYR00000",$actual);


        }
        public function testMinuteBloc30ShouldReturnYYRYYRY0000(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(35);

            $this->assertEquals("YYRYYRY0000",$actual);


        }
        public function testMinuteBloc40ShouldReturnYYRYYRYY000(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(40);

            $this->assertEquals("YYRYYRYY000",$actual);


        }
        public function testMinuteBloc45ShouldReturnYYRYYRYYR00(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(45);

            $this->assertEquals("YYRYYRYYR00",$actual);


        }
        public function testMinuteBloc50ShouldReturnYYRYYRYYRY0(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(50);

            $this->assertEquals("YYRYYRYYRY0",$actual);


        }
        public function testMinuteBloc55ShouldReturnYYRYYRYYRYY(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(55);

            $this->assertEquals("YYRYYRYYRYY",$actual);


        }
        public function testMinuteBloc18ShouldReturnYYR00000000(){

            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testMinuteBloc5(18);

            $this->assertEquals("YYR00000000",$actual);


        }
        public function testMinuteBloc24ShouldReturnYYRY0000000(){

            $berlinClock = new BerlinClock();


            $actual = $berlinClock ->testMinuteBloc5(24);

            $this->assertEquals("YYRY0000000",$actual);


        }
        public function testHeureDeuxiemelignePlusPetitQue1ShouldReturn0000(){
            $berlinClock = new BerlinClock();
            $actual = $berlinClock ->testHeureDeuxiemeligne(0);

            $this->assertEquals("0000",$actual);

        }
        public function testHeureDeuxiemeligne1ShouldReturnY000(){
            $berlinClock = new BerlinClock();
            $actual = $berlinClock ->testHeureDeuxiemeligne(1);

            $this->assertEquals("R000",$actual);

        }
        public function testHeureDeuxiemeligne2ShouldReturnYY00(){
            $berlinClock = new BerlinClock();
            $actual = $berlinClock ->testHeureDeuxiemeligne(2);

            $this->assertEquals("RR00",$actual);

        }
        public function testHeureDeuxiemeligne3ShouldReturnYYY0(){
            $berlinClock = new BerlinClock();
            $actual = $berlinClock ->testHeureDeuxiemeligne(3);

            $this->assertEquals("RRR0",$actual);

        }
        public function testHeureDeuxiemeligne4ShouldReturnYYYY(){
            $berlinClock = new BerlinClock();
            $actual = $berlinClock ->testHeureDeuxiemeligne(4);

            $this->assertEquals("RRRR",$actual);

        }
        public function testHeureDeuxiemeligne6ShouldReturnY000(){
            $berlinClock = new BerlinClock();
            $actual = $berlinClock ->testHeureDeuxiemeligne(6);

            $this->assertEquals("R000",$actual);

        }
        public function testHeureDeuxiemeligne7ShouldReturnYY00(){
            $berlinClock = new BerlinClock();
            $actual = $berlinClock ->testHeureDeuxiemeligne(7);

            $this->assertEquals("RR00",$actual);

        }
        public function testHeureDeuxiemeligne8ShouldReturnYYY0(){
            $berlinClock = new BerlinClock();
            $actual = $berlinClock ->testHeureDeuxiemeligne(8);

            $this->assertEquals("RRR0",$actual);

        }
        public function testHeureDeuxiemeligne9ShouldReturnYYYY(){
            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testHeureDeuxiemeligne(9);

            $this->assertEquals("RRRR",$actual);

        }
        public function testHeurePremiereLignePlusPetitQue5ShouldReturn0000(){
            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testHeurePremiereLigne(0);

            $this->assertEquals("0000",$actual);

        }
        public function testHeurePremiereLigne5ShouldReturnR000(){
            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testHeurePremiereLigne(5);

            $this->assertEquals("R000",$actual);

        }
        public function testHeurePremiereLigne10ShouldReturnRR00(){
            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testHeurePremiereLigne(10);

            $this->assertEquals("RR00",$actual);

        }
        public function testHeurePremiereLigne15ShouldReturnRRR0(){
            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testHeurePremiereLigne(15);

            $this->assertEquals("RRR0",$actual);

        }

        public function testHeurePremiereLigne3ShouldReturn0000(){
            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testHeurePremiereLigne(3);

            $this->assertEquals("0000",$actual);

        }

        public function testSecondePairShouldReturnR(){
            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testSeconde(2);

            $this->assertEquals("R",$actual);
        }

        public function testSecondeImpairShouldReturn0(){
            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testSeconde(1);

            $this->assertEquals("0",$actual);
        }

        public function testHorlogeEntiere(){
            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testHorlogeEntiere(15,46,58);

            $this -> assertEquals("R\nRRR0\n0000\nYYRYYRYYR00\nY000",$actual);


        }

        public function testHorlogeEntiereBis(){
            $berlinClock = new BerlinClock();

            $actual = $berlinClock ->testHorlogeEntiere(22,10,3);

            $this -> assertEquals("0\nRRRR\nRR00\nYY000000000\n0000",$actual);


        }



    }
