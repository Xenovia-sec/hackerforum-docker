<?php
function definitely_not_vulnerable($string){
    $i=0;
    while ($i <= strlen($string)) {
        $string =str_replace( array( "../", "..\"" ), "", $string );
        $string =str_replace( array( "..", ".." ), "", $string );
        $i++;
    }
    return $string;

}
if (isset($_GET['db'])){
    include(definitely_not_vulnerable($_GET['db']));
}
?>
