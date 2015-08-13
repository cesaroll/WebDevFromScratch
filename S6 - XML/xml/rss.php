<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
     
<?php
   
function getFeed($url) {
    
   $x = simplexml_load_file($url);

   echo "<ul>";
  
   foreach($x->channel->item as $entry){
       
       echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
       
    }
       
    echo "</ul>";
       
}

echo getFeed("http://rss.cnn.com/rss/edition.rss");
    
?>

    </body>
</html>