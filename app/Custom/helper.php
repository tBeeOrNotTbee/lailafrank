<?php namespace App\Custom;

class helper
{
    public static function discountProcess($disc, $type, $total)
    {
        $finalTotal = [];
        if ($type == '$'){
            $finalTotal[0] = $total - $disc;
            $finalTotal[1] = $disc;
        }else if ($type == '%') {
            $toRest = ($disc * $total) / 100;
            $finalTotal[0] = $total - $toRest;
            $finalTotal[1] = $toRest;
        }
        
        return $finalTotal;
    }
}