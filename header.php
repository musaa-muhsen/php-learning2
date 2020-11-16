<?php 
// need this to use session
session_start();

//overriding the superglobal variable value 
$_SESSION['name'] = 'yoshi';
//? query string has a key/value pair so ?name=tom&...
// this can be seen at filename/header.php?noname
if($_SERVER['QUERY_STRING'] == 'noname'){
   // stop this variable from running 
   unset($_SESSION['name']);
   //session_unset(); // free all session variables 
}

//  Null Coalescing ?? back up if what is needed does'nt exist or work 
$name = $_SESSION['name'] ?? 'Guest';
echo $name;

// get/detect cookie // An associative array of variables passed to the current script via HTTP Cookies.
$gender = $_COOKIE['gender'] ?? 'Unknown';
print_r($_COOKIE); //Array ( [gender] => male [PHPSESSID] => suo45tj0sgt571qc4t6t0kr463 ) //PHPSESSID is an auto generated session cookie by the server which contains a random long number which is given out by the server itself.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello <?php echo  htmlspecialchars($name); ?></p>
    <p><?php echo htmlspecialchars($gender); ?></p>
</body>
</html>