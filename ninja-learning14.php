<?php 
// sessions are for variable 
// session defination a period devoted to a particular activity.
// session is a superglobal it keep track of variables in different pages as the user goes to different pages on a website, and the session variables are stored on the server not on the users computer.  
// sessions is how we can use them to persist data from one page to another.
// The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
// by default sessions will last until we close the browser 
if (isset($_POST['submit'])) {
    // this starts a session and before we access any session variables or set them this has to be called to start the session
    session_start(); 
    // then we can access the session superglobal and add different variables to it 
    $_SESSION['name'] = $_POST['name']; // now we stored the text input 
   // echo $_SESSION['name']; echos on the same page 
 header('Location: header.php'); // redirect after submiting 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--  -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>