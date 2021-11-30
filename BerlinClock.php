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




}

?>