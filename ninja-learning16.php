<?php 
 // file system - part 1 
 // php can communicate with files on our computer or in a server 
// simple way to read file 

// $quotes = readfile('readme.txt');
// echo $quotes;

$file = 'readme.txt';

if (file_exists($file)) {
    
    echo readfile($file) . '<br />'; // read file

    copy($file, 'quotes.txt'); // copy file 

    echo realpath($file) . '<br />'; // absolute path

    echo filesize($file) . '<br />'; // file size 

    rename($file, 'test.txt'); // rename file 

} else {
   echo 'file does not exist';
}

// make directory 
mkdir('quotes');
?>
<!DOCTYPE html>
