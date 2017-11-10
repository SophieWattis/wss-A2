<html>
  <head>
    <title>Screen</title>
  </head>
  <body>
    <?php
      $width = $_POST["width"];
      $height = $_POST["height"];
      $browser = $_SERVER['HTTP_USER_AGENT'];
;
    ?>
    <h3>
      <?php
        echo "Your browser is: $browser";
      ?>
    </h3>
    <h3>
      <?php
        echo "You are using a screen resolution of: $width x $height";
      ?>
    </h3>
  </body>
</html>