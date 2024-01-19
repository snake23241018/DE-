<!DOCTYPE html>
<html>

<head>
    <title>Регистрация</title>
    <meta charset="UTF-8">
    <link href="/css/style.scss" rel="stylesheet">
</head>

<body>
    
    <script>
        function reg_button() {
            window.print(sdfsdfsdf);
        }
    </script>

    <form class="form" id="registration" method="post" onsubmit="reg_button()">
        <div>
            <div class="form__field">
                <input name="email" type="email" placeholder="Электронная почта" title="Укажите эл.почту в формате login@site.ru">
                <span class="form__error">
                    Укажите эл.почту в формате login@site.ru
                </span>
            </div>
            
            <div class="form__field">
                <input name="login" type="text" pattern="[A-Za-z]{5,15}" placeholder="Имя пользователя" title="Укажите свой логин, состоящий из 5-15 символов (допускается использование только латиницы)">
                <span class="form__error">
                    Укажите свой логин, состоящий из 5-15 символов (допускается использование только латиницы)
                </span>
            </div>
            
            <div class="form__field">
                <input name="password" type="password" minlength="6" placeholder="Пароль" title="!!!!!">
                <span class="form__error">
                    Введите пароль, состоящий из не менее чем 6 символов 
                </span>
            </div>
            
            <div class="form__field">
                <input name="FIO" type="text" placeholder="Фамилия Имя Отчество">
                <span class="form__error">
                    Укажите ФИО, разделяя пробелами
                </span>
            </div>
            
            <div class="form__field">
                <input name="phone" type="tel" placeholder="+7 ___ ___ __ __" pattern="+7 [\+]\d{1}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}" minlength="12" maxlength="12">
                <span class="form__error">
                    Укажите номер телефона в формате +7 (XXX) XXX-XX-XX
                </span>
            </div>
            <div>
                <button id="reg_button" name="registration" type="submit">
                    Зарегистрироваться
                </button>
                
                <button id="auth_button" type="button" href="/auth.html">
                    Уже есть аккаунт
                </button>
            </div>
        </div>
    </form>
</body>
</html>
<!-- FIO
    pattern="[А-Яа-яЁё]*?\s[А-Яа-яЁё]*?\s[А-Яа-яЁё]*"
-->