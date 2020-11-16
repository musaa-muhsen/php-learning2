
<?php

/* another the way to persist data is to use cookies this time it's stored on the clients computer 
and not on the server. Cookies store data on your computer in the form of cookies and that data is meant to enhance your 
experience on the website it's data that might be used between different pages as you browse maybe 
to identify if you've been on a particular page before or maybe added an item to your basket before.
Now a lot of people prefer sessions over cookies and in some cases that is better because you're keeping 
the data hidden on the server rather than on a user's computer so for sensitive data especially 
sessions could be considered safer but cookies do also have their uses and they can be useful in other 
cases such as content marketing to users based on past behavior on the website or something like that
for example a guy going to an  e-commerce websites for clothing looks at guys clothes if we drop a cookie 
on the persons computer the next time he visits if we detect that cookie we can gear our different products 
towards him so showing similar items that he's looked at before on the home page so that's the use of cookies. 
*/
// cookie for gender 
if (isset($_POST['submit'])) {
    // cookies syntax = setcookie(name, value, expire, path, domain, secure, httponly);
// 86400 is the seconds in the day time() from now for a day 
// if used twice it can be overwritten 
// expire after 30 days (86400 * 30)
    setcookie('gender' , $_POST['gender'], time() + 86400); // this is going to be set on the users computer now 
    
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

    <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
        <input type="text" name="name">
        <select name="gender">
          <option value="male">male</option>
          <option value="female">female</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>