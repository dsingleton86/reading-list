<style type="text/css">
body{background-color:#000;}
</style>

<?php
// created by Darren Singleton https://darren.me
// https://github.com/dsingleton86/reading-list

define ('FILE', 'https://raw.githubusercontent.com/dsingleton86/reading-list/master/reading.md');

    $stream = fopen(FILE, "r");
    while(($line=fgets($stream))!==false) { 
        
        $lineItems = substr($line, strpos($str, '.') + 2);
        $lineItems = explode(';',$lineItems);
        $book = $lineItems[0];
        $splitTitleAuthor = explode(' by ', $book);
        $title = $splitTitleAuthor[0];
        $author = $splitTitleAuthor[1];
        $length = substr($lineItems[1], 0, -13);
        $dateRead = substr($lineItems[1], -12);
        $dateRead = substr($dateRead, 0, -2);

        $recommended = strpos($title, '**');
        if($recommended !== false){
            echo '⭐';
        }
        $title = str_replace('**', '', $title);
        
        
        echo '<font color="red">'.$title.'</font>
        <font color="orange">'.$author.'</font>
        <font color="green">'.$length.'</font>
        <font color="blue">'.$dateRead.'</font><br/>';
    }
?>