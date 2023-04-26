<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>10.04.2023</title>
</head>


<body>
    <form action="sendMail.php" method="POST"> <!--Этот файл будет принимать данные на стороне сервера-->
      <div><input type="text" name="user_name"></div><!--чтоб на стороне сервера принять данные даем атрибут name-->
      <div><input type="submit"></div>
    </form>
</body>

</html>