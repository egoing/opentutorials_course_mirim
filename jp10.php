<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h1>PHP VS JavaScript</h1>
      <h2>PHP</h2>
      <?php
      $i = 0;
      while($i < 3){
        print("Hello world{$i}<br>");
        $i = $i + 1;
      }
      ?>
      <h2>JavaScript</h2>
      <script>
      var i = 0;
      while(i < 3){
        document.write("Hello world"+i+"<br>");
        i = i + 1;
      }
      </script>
  </body>
</html>
