<?php 
// ternary operators 
$score = 50;
$val = $score > 40 ? 'u the best' : 'not so';
//echo $val. "<br />";

// superglobals 
// syntax is doller sign,underscore,word in capital and it's an array 
//Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
//$_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server. There is no guarantee that every web server will provide any of these; servers may omit some, or provide others not listed here. That said, a large number of these variables are accounted for in the CGI/1.1 specification, so you should be able to expect those.
echo $_SERVER['SERVER_NAME'] . "<br />"; // localhost is the answer because we're using that serve our files 
echo $_SERVER['REQUEST_METHOD'] . '<br />'; // GET
echo $_SERVER['SCRIPT_FILENAME'] . '<br />'; // /Applications/MAMP/htdocs/net-ninja-learning-2/ninja-learning13.php
echo $_SERVER['PHP_SELF'] . '<br />'; // get the current path from localhost // this one is quite useful when using forms and can used to dynimcally add the form action etc 
// so have the action be the current page 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>