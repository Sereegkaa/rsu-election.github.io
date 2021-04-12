<?php session_start(); ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
    <link rel="stylesheet" href="css/mobile.css?<?php echo time();?>">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="icon" href="favicon.ico">
    <title>Голосование</title>
</head>
<body>
<div class="main">
    <h1>Голосование</h1>
    <div class="window window1">
        <?php
        if (isset($_SESSION['token'])) {
            $lol = file_get_contents('https://accounts.google.com/o/oauth2/revoke?token=' . $_SESSION['token']);
        }
        $params = array(
            'client_id' => '551666372858-crl1qm1vitgnkjsj1j2pu9ck366mk2ui.apps.googleusercontent.com',
            'redirect_uri' => 'https://choice-rsu.ru/election',
            'response_type' => 'code',
            'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
            'state' => '123'
        );
        $url = 'https://accounts.google.com/o/oauth2/auth?' . urldecode(http_build_query($params));
        if (time() < 1607410800) {
            $url = '/';
        }
        echo '<form action="' . $url . '" method="post">';
        ?>
        <h2>Выборы председателя общежития №5 РГУ им. А.Н. Косыгина</h2>
        <?php if ($url == '/') {
            echo '<button class="btn btn-lg btn-primary btn-block" onclick="" type="submit">Голосование пока закрыто</button>';
        } else {
            echo '<button class="btn btn-lg btn-primary btn-block" onclick="lol()" type="submit">Авторизоваться через Google</button>';
        } ?>
        <p>Для голосования доступны <b>только корпоративные почты</b> Российского Государственного Университета им. А.Н.
            Косыгина</p>
        </form>
    </div>
</div>
</body>
</html>