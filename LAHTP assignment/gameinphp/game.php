<?php
    include ("gameart.php");//include  a art files
    titleart();// to print title art 
    $building; //inazalized a build array
    $x=8;
    $y=8;
    $z=0;
    set_building($x,$y,$z);
    while(1){
        echo "\n--------------------------------------------------------------\n";
        echo "\033[33m";
        echo "1.Change the building size --default size is (8X8):\n";
        echo "2.See buleprint of buliding\n";
        echo "3.Land the choper\n";
        echo "4.Reset\n";
        echo "5.See how many people you save\n";
        echo "6.Help\n";
        echo"\033[0m";
        echo "\033[31m999.exit../ \033[0m\n";
        echo "-------------------------------------------------------------\n";
        $n=(int)readline("Entre your option: ");
        switch($n){
            case 1:set_size();
            break;
            case 2:map($x,$y);
            break;
            case 3:landchoper();
            break;
            case 4:{
                    $x=8;
                    $y=8;
                    set_building($x,$y,$z);
                    //set_size(8,8,0);
                    echo "\033[35mReset sucessfully:)\033[0m";
                    break;
            }
            case 5:{
                    //$result=hostage($x,$y);
                    resultart($result=hostage($x,$y));
                    break;
            }
            case 6:help();
            break;
            case 999:{
                popen('cls', 'w');//to clear a last all outputs and exit
                unset($n);
                exitart();
                exit();
            }
            break;
            default:echo "\033[31mINVALID OPTION'S\033[31m\n";
            break;
        }
    }    
?>
<?php
    function set_building($x,$y,$z){
        global $building;
        for ($i = 1; $i <=$x; ++$i) {
            for($j=1;$j<=$y;$j++){
             $building[$i][$j] = $z;
            }
        }
    }

    function map($x,$y){
        global $building;
        for ($i = 1; $i<=$x;++$i) {
            for($j=1;$j<=$y;$j++){
            $building[$i][$j]==0?print("\033[35m".$building[$i][$j].' '."\033[0m"):print("\033[32m".$building[$i][$j].' '."\033[0m");
            }
            echo "\n";
        }
    }

    function set_size(){
        global $x,$y;
        echo "\033[34mEntre X axis value:\nEntre Y axis value:\n";
        $x=(int)readline();
        $y=(int)readline();
        if($x<1&&$y<1){
            echo "\033[31mGive a value greater than '0'\033[31m\n";
            set_size();
        }
        echo "\033[33m--Your entre size is ".$x.'X'.$y."\n1.Confiram\n2.Change again\n\033[0m";
            $n=(int)readline();
            if($n==1){
                set_building($x,$y,0);
                echo "\033[33mBuilding size set sucessfully../\033[0m\n";
                unset($n);
            }else if($n==2)
                set_size();
            else{
                echo"INVALID OPTION'S\n";
                set_size();
            }
    }

    function landchoper(){
        global $x;
        global $y;
        $x1;
        $y1;
        $choper_count=100;
        echo "\033[33mIf you want to add more chopper? --You have $choper_count choper\033[34m \n1.Yes\n2.No\033[0m\n";
        $n=(int)readline();
        if($n==1){
            $choper_count=(int)readline("Entre greter than 100 choper: ");
            if($choper_count<100){
            echo"\n\033[31mYou entre the less than 100 choper so choper set to 100\033[31m \n";
            $choper_count=$choper_count<=100?100:$choper_count;
            }
        }elseif($n==2);
        else echo "\033[31mINVALID OPTION --default choper is set $choper_count\033[0m\n";
        unset($n);
        $choper=(int)readline("Entre how many choper you want to be land ?\n");
        if($choper<1||$choper>100){
            echo "\n\033[31mInvalid Option!\033[0m\n";
            echo "\n\033[31mChoper value must greaterthan 1 & lesthan 100..--default value is set as 1\033[0m\n";
            $choper=1;
    }   
        for($i=1;$i<=$choper;$i++){
            echo "\n\033[95mwhrer you want to land the choper -$i ? --input (x,y axis) --like(3,5)\033[0m\n";
            $x1[$i]=(int)readline("x:");
            $y1[$i]=(int)readline("y:");
            if((($x1[$i]>$x)||($x1[$i]<0))||(($y1[$i]<0)||($y1[$i]>$y))){
                echo "\033[31mMind it your buliding size! is ($x X $y) --invaild option's\n\033[0m\n";
                $choper=0;
                return -1;
            }
        }  
        unset($i);
            echo "\033[34myou entre's landmark is :\n";
            echo "\tX\t|\tY\t\n";
            $count=(sizeof($x1)>=sizeof($y1))?sizeof($x1):sizeof($y1);
             for($i=1;$i<=$count;$i++){
                echo "\t$x1[$i]\t|\t$y1[$i]\t\n";
             }
        unset($i);
        echo "\033[0m";
        $n=(int)readline("1.Yeah!\n2.Change again\n");
        if($n==1){
            unset($n);
            set_xy($x1,$y1);
        }
        elseif($n==2)
            landchoper();
        else{
            echo "\033[31mINVALID OPTION\033[0m";
            landchoper();
        }
    
    } 


    function set_xy($x1,$y1){
        global $x;
        global $y;
        global $building;
        foreach($x1 as $valuex){
            for($i=1;$i<=$x;$i++){
                $building[$valuex][$i]=1;
            }
        }
        foreach($y1 as $valuey){
            for($i=1;$i<=$x;$i++){
                $building[$i][$valuey]=1;
            }
        }
}

    function hostage($x,$y){
        global $building;
        $shostage=0;
        for ($i = 1; $i<=$x;++$i) {
            for($j=1;$j<=$y;$j++){
                $shostage+=$building[$i][$j]==1?1:0;
            }
        } 
        return $shostage;
    }
?>