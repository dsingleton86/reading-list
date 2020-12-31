<?php
// created by Darren Singleton https://darren.me
// https://github.com/dsingleton86/reading-list

define ('FILE', 'https://raw.githubusercontent.com/dsingleton86/reading-list/master/reading.md');

    $stream = fopen(FILE, "r");
    while(($line=fgets($stream))!==false) { 
        
        $lineItems = substr($line, strpos($str, '.') + 2);
        $lineItems = explode(';',$lineItems);
        $length = substr($lineItems[1], 0, -13);
        $dateRead = substr($lineItems[1], -12);
        $dateRead = substr($dateRead, 0, -2);
        
        echo '<font color="red">'.$lineItems[0].'</font>
        <font color="green">'.$length.'</font>
        <font color="blue">'.$dateRead.'</font><br/>';
    }
?>