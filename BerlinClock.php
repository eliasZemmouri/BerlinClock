<?php
class BerlinClock
{
//Step1 minuteSimple
    public function testMinute2emeLigne($minute){
        if(strlen($minute)>1){
            $minute=substr($minute,1);
        }
        if($minute >= 5){
            $minute=$minute-5;
        }

        if($minute==0) {
            return "0000";
        }
        else if($minute==1) {
            return "Y000";
        }
        else if ($minute==2) {
            return "YY00";
        }
        else if ($minute==3) {
            return "YYY0";
        }
        else {
            return "YYYY";
        }
    }
    //Step2 minutePar5

    public function testMinuteBloc5($minute){

        $value="";

        $count=$minute/5;

        if($count < 1){
            return "00000000000";
        }
        for( $i=1; $i<=$count; $i++){

            if(!($i%3)){
                $value .= "R";
            }else{
                $value .= "Y";
            }

        }
        for( $i=$count; $i<11; $i++){

            $value .= "0";

        }

        return $value;

    }
    //Step3 heureSimple
    public function testHeureDeuxiemeligne($hour2){
        if(strlen($hour2)>1){
            $hour2=substr($hour2,1);
        }
        if($hour2 >= 5){
            $hour2=$hour2-5;
        }

        if($hour2==0) {
            return "0000";
        }
        else if($hour2==1){
            return "R000";
        }
        else if ($hour2==2){
            return "RR00";
        }
        else if ($hour2==3){
            return "RRR0";
        }
        else {
            return "RRRR";
        }


    }



}

?>