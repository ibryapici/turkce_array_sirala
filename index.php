<?php
/**
*
*  Array içindeki Türkçe Kelimeleri
*  Alfabetik olarak sýralamaya yarar
*  @kaynak : http://www.php.web.tr/index.php?page=4-6
*  @tarih  : 16/9/2013
*
*/
function turkce_sirala($a, $b) {
    $turkce = array('ç' => 'c', 'ð' => 'g', 'ý' => 'i', 'ö' => 'o',
    'þ' => 's', 'ü' => 'u', 'Ç' => 'C', 'Ð' => 'G',
    'Ý' => 'I', 'Ö' => 'O', 'Þ' => 'S', 'Ü' => 'U');

    $a = preg_replace("/(ý|ð|ü|þ|ö|ç|Ð|Ü|Þ|Ý|Ö|Ç)/e", "\$turkce['\\1'].'~'", $a);
    $b = preg_replace("/(ý|ð|ü|þ|ö|ç|Ð|Ü|Þ|Ý|Ö|Ç)/e", "\$turkce['\\1'].'~'", $b);

    if ($a == $b)
      return 0;

      return ($a < $b) ? -1 : 1;
}

function tr_sort(&$dizi) {
    return usort($dizi, "turkce_sirala");
}


?>