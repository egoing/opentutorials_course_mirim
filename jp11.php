<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h1>배열</h1>
      <h2>PHP</h2>
      <?php
      $students = ['이고잉', '최진혁', '최유빈'];
      print($students[0]);
      print($students[1]);
      print($students[2]);
      print(count($students));
      ?>
      <h2>JavaScript</h2>
      <script>
      var students = ['이고잉', '최진혁', '최유빈'];
      document.write(students[0]);
      document.write(students[1]);
      document.write(students[2]);
      document.write(students.length);

      </script>
  </body>
</html>
