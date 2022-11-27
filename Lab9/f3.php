<?php
$json = '{
    "book": {
        "name": "Harry Potter and the Goblet of Fire",
        "author": "J. K. Rowling",
        "year": 2000,
        "characters": ["Harry Potter", "Hermione Granger", "Ron Weasley"],
        "genre": "Fantasy Fiction",
        "price": {
            "paperback": "$10.40", "hardcover": "$20.32", "kindle": "4.11"
        }
    }
}';

$arr = json_decode($json, true);
print($arr["book"]["name"]);
print "<br>";

$arr = json_decode($json);
print_r($arr->book->name);
