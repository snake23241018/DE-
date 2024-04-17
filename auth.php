<?php
if (isset($_COOKIE['Email_Cookie'])) {
  header('Location: http://de.votkpromtech.ru/scripts/auth_button.php');
  
} else{
echo   
  '<!DOCTYPE html>
  <html lang="ru">
  
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="/css/style.css" rel="stylesheet" />
  <title>Авторизация</title>
  </head>
  
  <body>
  <form class="form" id="auth" method="post" action="/scripts/auth_button.php">
  <div class="form__field">
  <input name="email" placeholder="Электронная почта" title="Укажите эл.почту в формате login@site.ru" />
  <span class="form__error">
  Укажите эл.почту в формате login@site.ru
  </span>
  </div>
  <div class="form__field">
  <input name="password" type="password" placeholder="Пароль" title="!!!!!" />
  <span class="form__error">
  Введите пароль, состоящий из не менее чем 6 символов
  </span>
  </div>
  <div>
  <input class="auth_button" value="Войти" type="submit" />
  </div>
  <div>
  <a href="http://de.votkpromtech.ru/reg.html">Нет аккаунта, хочу зарегистрироваться</a>
  </div>
  </form>
  </body>
  
  </html>
  </script>';
}