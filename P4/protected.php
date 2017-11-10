 <?php
2 $user = "";
3 $pass = "";
4 $validated = false;
5
6 if ($_POST)
7 {
8 $user = $_POST['username'];
9 $pass = $_POST['password'];
10 }
11
12 session_start();
13 if($user!=""&&$pass!="")
14 {
15 if($user=="jsmith"&&$pass=="letmein") $validated = true;
16 if($validated)
17 {
18 $_SESSION['login'] = "OK";
19 $_SESSION['username'] = $user;
20 $_SESSION['password'] = $pass;
21 header('Location: protected.php');
22 }
23 else
24 {
25 $_SESSION['login'] = "";
26 echo "Invalid username or password.";
27 }
28 }
29 else $_SESSION['login'] = "";
30 ?>
31
32 <html>
33 <head>
34 <title>Login Page</title>
35 </head>
36
37 <body>
38
39 <h1>Login Page</h1>
40
41 <p>Please enter your username and password:</p>
42
43 <form action="login.php" method="post">
44 <table>
45 <tr>
46 <td align="right">Username: </td>
47 <td><input size=\"20\" type="text" size="20" maxlength="15" name="username"></td>
48 </tr>
49 <tr>
50 <td align="right">Password: </td>
51 <td><input size=\"20\" type="password" size="20" maxlength="15" name="password"></td>
52 </tr>
53 <tr>
54 <td> </td>
55 <td colspan="2" align="left"><input type="submit" value="Login"></td>
56 </tr>
57 </table>
58 </form>
59 </body>
60 </html>