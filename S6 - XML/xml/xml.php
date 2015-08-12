<?php

$x = simplexml_load_file('dom.xml');

//Display Title in first Book:

echo "<p>" . $x->book[0]->title[0] . "</p>";
echo "<p>" . $x->book[0]->year[0] . "</p><br/>";

//foreach loop

foreach($x->book as $book) {
 
    echo "<p><b>Book title:</b> " . $book->title . "</p>" .
         "<p><b>Author:</b> " . $book->author . "</p>" .
         "<p><b>Year:</b> " . $book->year . "</p>" .
         "<p><b>Price:</b> " . $book->price . "</p><br />";
}

?>