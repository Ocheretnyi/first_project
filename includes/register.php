<script type="text/javascript">
    function show(state){

        document.getElementById('window').style.display = state;
        document.getElementById('wrap').style.display = state;
    }
</script>
<!-- Задний прозрачный фон-->
<div onclick="show('none')" id="wrap"></div>

<!-- Само окно-->

<div id="window">
    <form action="save_user.php" method="post">
        <input type="text" class="form-control" placeholder="Придумайте логин" name="login" id="new-user-login">
        <input type="text" class="form-control" placeholder="Введите свою фамилия" name="first_name" id="user-first-name">
        <input type="text" class="form-control" placeholder="Введите своё имя" name="secondName" id="user-second-name">
        <input type="text" class="form-control" placeholder="Введите E-mail" name="user_E_mail" id="user-Email">
        <input type="text" class="form-control" placeholder="Введите пароль" name="password" id="new-user-password">
        <input type="text" class="form-control" placeholder="Введите свой номер телефона">
        Укажите стать:<br>
        <input type="radio" name="sex" value="Мужской">Мужской<br>
        <input type="radio" name="sex" value="Женский">Женский<br>
        <input type="text" class="form-control" placeholder="Введите страну" name="country" id="user-country">
        <input type="text" class="form-control" placeholder="Введите город" name="city" id="user-city">
        <button class="btn btn-block" name="register">Зарегистрироваться</button>
    </form>
</div>
<div class="navbar-form">
    <input type="submit" class="btn btn-success" right onclick="show('block')" name="regist" value="РЕГИСТРАЦИЯ">
</div>