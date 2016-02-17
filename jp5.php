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
        $name = '이고잉';
        print('안녕하세요. 저는 '.$name.'입니다. 만나서 반갑습니다. 제 이름이 '.$name.'인 이유는 ...입니다. 다음에 또 '.$name.'을 찾아주세요.');
      ?>
      <h2>JavaScript</h2>
      <script>
        var name = '이고잉';
        document.write('안녕하세요. 저는 '+name+'입니다. 만나서 반갑습니다. 제 이름이 '+name+'인 이유는 ...입니다. 다음에 또 '+name+'을 찾아주세요.');
      </script>
  </body>
</html>
