<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<META http-equiv=Content-Type content="text/html; charset=UTF-8">
<html>
<head>
 <link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body class="adm">
<div class="auth">
    <span style="padding-left: 15px;">Вход в администраторскую панель:</span>
<form action="/admin/auth" method="post">
    Логин:&nbsp; &nbsp;<input type="text" name="name"><br><br>
    Пароль: <input type="password" name="pass"><br><br>

    <input type="submit" value="Войти" style="width: 100px;margin-left: 54px"><br><br>

</form>
</div>
</body>
</html>

