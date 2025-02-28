<?php
for ($i = 1; $i <= 100 ; $i ++) { 
    switch ($i) {
        case $i % 15 == 0:
            echo "Hackademy \n";
            break;
        case $i % 3 == 0:
            echo " Php \n";
            break;
        case $i % 5 == 0:
            echo "JS \n";
            break;
        
        default:
            echo "$i \n";
            break;
    }
}