<!doctype html>
<html lang="ru">
<head>
    <meta charset="windows-1251>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>�����</title>
</head>
<body>
<!--�������� action ��������� �����, �� ����� ���� ��������� � ������, �������� method �������� �� ����� ����� ������� ����� ������������ ������ ����� � ��������� � ��������� action ����.
� ��������� method ����� ������� get ��� post �������������� ��������� ������ �� ����� �� ����� ��� ������ ���� ���������� �������� $_GET � $_POST � ����������� �� ���� ��� �� ������ � ���� ����
 -->
<form action="checkform.php" method="post">
    <div>
        <b>Name: </b>
<!--        input ��� ��� ���������� ���� � ��������� type �� ����� ������� ��������� �������� ����� ���: text, password, email, submit, button � ��� ����� -->
<!--        �������� name �������� �� ��, ����� �������� ����������� ����� � ���������� ������� $_GET-->
        <input type="text" name="name">
    </div>
    <div>
        <b>LastName: </b>
        <input type="text" name="password">
    </div>
    <div>
<!--        �������� type �� ��������� submit ��������� ��������� ���� � ������-->
        <input type="submit" value="send">
    </div>
</form>
</body>
</html>

