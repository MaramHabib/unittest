<?php  



class Factorial{
    public function Fact($number){
        if(!is_numeric($number)){

            return null;
        }

        if(is_float($number)){
            return null;
        }
        if($number<0){
            return null;
        }
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++){
        $factorial = $factorial * $i;
        }
        return $factorial;
    }
}
?>
 


