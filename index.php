<?php
/**
*
*  Array i�indeki T�rk�e Kelimeleri
*  Alfabetik olarak s�ralamaya yarar
*  @kaynak : http://www.php.web.tr/index.php?page=4-6
*  @tarih  : 16/9/2013
*
*/
function turkce_sirala($a, $b) {
    $turkce = array('�' => 'c', '�' => 'g', '�' => 'i', '�' => 'o',
    '�' => 's', '�' => 'u', '�' => 'C', '�' => 'G',
    '�' => 'I', '�' => 'O', '�' => 'S', '�' => 'U');

    $a = preg_replace("/(�|�|�|�|�|�|�|�|�|�|�|�)/e", "\$turkce['\\1'].'~'", $a);
    $b = preg_replace("/(�|�|�|�|�|�|�|�|�|�|�|�)/e", "\$turkce['\\1'].'~'", $b);

    if ($a == $b)
      return 0;

      return ($a < $b) ? -1 : 1;
}

function tr_sort(&$dizi) {
    return usort($dizi, "turkce_sirala");
}


?>