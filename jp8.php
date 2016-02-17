<!DOCTYPE html>
<html>
  <head><meta charset="utf-8"></head>
  <body>
      <h1>조건문의 활용(JS)</h1>
      <h2>JavaScript</h2>
      <script>
        var password=prompt('Password?');
        //만약에 사용자가 입력한 값이 111111이라면
        if(password=='111111') {
          // 안녕하세요. 주인님을 출력해.
          document.write('어서오세요 주인님 ^^');
        } else {
          //만약 아니라면
          alert('뉘슈?');
        }
      </script>
  </body>
</html>
