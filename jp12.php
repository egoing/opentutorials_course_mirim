<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h1>배열+반복문</h1>
      <h2>PHP</h2>
      <?php
      $students = ['이고잉', '최진혁', '최유빈', '한이람', '한이은'];
      $i = 0;
      while($i < count($students)) {
          print("<li>{$students[$i]}</li>");
          $i = $i + 1;
      }
      ?>
      <h2>JavaScript</h2>
      <script>
      var students = ['이고잉', '최진혁', '최유빈', '한이람', '한이은'];
      var i = 0;
      while(i < students.length){
        document.write("<li>"+students[i]+"</li>");
        i = i + 1;
      }
      </script>
  </body>
</html>
