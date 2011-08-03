<?php

/**
 * PrimeFactors (12Meses12Katas: Jul 2011)
 *
 * @author rmhdev
 */
class PrimeFactors {

    public static function generate($number){

        $result = array();
        $factor = 2;
        while ($number > 1) {
            while (($number % $factor) == 0){
                $result[] = $factor;
                $number /= $factor;
            }
            $factor++;
        }
        
        return $result;
    }

}
