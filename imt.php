<?php 
function imt($weight, $height) {
    return $weight / ($height * $height);
}

function imt_class($imt) {
    if ($imt < 18.5) {
        return "Kekurangan Berat Badan";
    } elseif ($imt >= 18.5 && $imt <= 24.9) {
        return "Normal (Ideal)";
    } elseif ($imt >= 25 && $imt <= 29.9) {
        return "Kelebihan Berat Badan";
    } elseif ($imt >= 30) {
        return "Kegemukan (Obesitas)";
    }
}
?>