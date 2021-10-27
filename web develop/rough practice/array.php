<?php
    $array;
    set_building(8,8,0);
    //xaxis();
    map(8,8);
?>

<?php
function set_building($x,$y,$z){
        global $array;
    for ($i = 1; $i <=$x; ++$i) {
        for($j=1;$j<=$y;$j++){
         $array[$i][$j] = $z;
        }
    }
    //return $aray;
}

function map($x,$y){
    global $array;
    for ($i = 1; $i<=$x;++$i) {
        for($j=1;$j<=$y;$j++){
            echo  $array[$i][$j].'   ';
        }
        echo "<br/>";
    }
}
    function xaxis(){
        global $array;
        for($i=1;$i<=8;$i++){
            $array[3][$i]=1;
        }
    }
?>