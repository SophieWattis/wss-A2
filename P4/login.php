<?php
2 session_start();
3 if($_SESSION['login'] != "OK")
4 {
5 header('Location: login.php');
6 exit();
7 }
8 ?>
9
10 <html>
11
12 <head>
13 <title>Protected Web Page</title>
14 </head>
15
16 <body>
17 <h1>Protected Web Page</h1>
18
19 <?php
20 echo "<p>You have successfully logged in!</p>";
21 echo "<p>Your username is: ";
22 echo $_SESSION['username'];
23 echo "<br/>";
24 echo "Your password is: ";
25 echo $_SESSION['password'];
26 echo "</p>"
27 ?>
28
29 </body>
30
31 </html>