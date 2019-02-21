<!doctype html>
<html lang="ru">
<head>
    <meta charset="windows-1251>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Логин</title>
</head>
<body>
<!--параметр action указывает форме, на какой файл отправить её данные, параметр method отвечает за метод через который будут пересылаться данные формы в указанный в параметре action файл.
В параметре method можно ставить get или post соответственно принимать данные из формы мы будем при помощи этих глобальных массивов $_GET и $_POST в зависимости от того что мы укажем в этом поле
 -->
<form action="checkform.php" method="post">
    <div>
        <b>Name: </b>
<!--        input это тэг текстового поля в параметре type мы можем указать некоторые значение такие как: text, password, email, submit, button и так далее -->
<!--        параметр name отвечает за то, какое название перемемнной будет в глобальном массиве $_GET-->
        <input type="text" name="name">
    </div>
    <div>
        <b>LastName: </b>
        <input type="text" name="password">
    </div>
    <div>
<!--        параметр type со значением submit превратит текстовое поле в кнопку-->
        <input type="submit" value="send">
    </div>
</form>
</body>
</html>

