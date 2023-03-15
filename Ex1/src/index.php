<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE["user"]))
    {
        echo("<h1>You are not login yet. Redirecting to login page.</h1>");
        sleep(3);
        echo("<meta http-equiv=\"Refresh\" content=\"2; url=login.html\">");
        //exit(header("Location: login.html"));
    }
    else
        echo("<h1>Welcome, ".$_COOKIE['user']."</h1>");
        echo("<a href=\"javascript:void(0);\" onclick=\"deleteAllCookies();\" >Log Out</a>");

    ?> 
    
</body>
<script>
function deleteAllCookies() 
{
    const cookies = document.cookie.split(";");

    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i];
        const eqPos = cookie.indexOf("=");
        const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
    window.location.href= "index.php";
}
</script>
</html>