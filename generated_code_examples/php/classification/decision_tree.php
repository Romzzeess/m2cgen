<?php
function score(array $input) {
    $var0 = array();
    if ($input[2] <= 2.449999988079071) {
        $var0 = array(1.0, 0.0, 0.0);
    } else {
        if ($input[3] <= 1.75) {
            if ($input[2] <= 4.950000047683716) {
                if ($input[3] <= 1.6500000357627869) {
                    $var0 = array(0.0, 1.0, 0.0);
                } else {
                    $var0 = array(0.0, 0.0, 1.0);
                }
            } else {
                $var0 = array(0.0, 0.3333333333333333, 0.6666666666666666);
            }
        } else {
            $var0 = array(0.0, 0.021739130434782608, 0.9782608695652174);
        }
    }
    return $var0;
}
