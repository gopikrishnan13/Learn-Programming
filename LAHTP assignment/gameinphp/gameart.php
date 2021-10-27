<?php
function titleart()
{
    ($myfile = fopen("titleart.txt", "r")) or
        die("Unable to open title bannerart:");
    while (!feof($myfile)) {
        print "\033[32m" . fgetc($myfile) . "\033[0m";
    }
    fclose($myfile);
}
function resultart($result)
{
    ($myfile = fopen("resultart.txt", "r")) or
        die("Unable to open title resultart:");
    while (!feof($myfile)) {
        $read = fgetc($myfile);
        if ($read == "X") {
            //$read=$result;
            print "\033[32m" . $result . "\033[0m";
        } else {
            print "\033[32m" . $read . "\033[0m";
        }
    }
    fclose($myfile);
}
function exitart()
{
    ($myfile = fopen("exitart.txt", "r")) or
        die("Unable to open title exitart:");
    while (!feof($myfile)) {
        print "\033[93m" . fgetc($myfile) . "\033[0m";
    }
    fclose($myfile);
}
function help()
{
    ($myfile = fopen("help.txt", "r")) or
        die("Unable to open title bannerart:");
    while (!feof($myfile)) {
        print(fgetc($myfile));
    }
    fclose($myfile);
}
?>

