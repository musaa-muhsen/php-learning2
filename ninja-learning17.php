<?php 
// file system - part 2 // this way we are using a function put into a variable which can be configured to deal with the file 

$file = 'readme2.txt';


// opening a file for reading 
$handle = fopen($file, 'a+'); // r = for reading only, writing to the end of the file // f stands for filename and The fopen() function opens a file or URL.

//echo $handle;

// read the file 
// echo fread($handle, filesize($file));
// echo fread($handle, 112);

// read a single line // stands for "filename get single"
//echo fgets($handle); // get the first line 
//echo fgets($handle); // get the second line 


//read a single character 
echo fgetc($handle);
echo fgetc($handle);

// writing to a file
fwrite($handle, "\nEverything popular is wrong" );// \n = new line 

fclose($handle); //The fclose() function closes an open file. // Note: The file must have been opened by fopen() or fsockopen().

unlink($file);

?>