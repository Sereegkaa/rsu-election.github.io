<?php
//session_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
if (!empty($_GET['code'])) {
    $params = array(
        'client_id' => '551666372858-crl1qm1vitgnkjsj1j2pu9ck366mk2ui.apps.googleusercontent.com',
        'client_secret' => 'kLJlXYornRg25jwucEc_4_eg',
        'redirect_uri' => 'https://choice-rsu.ru/election',
        'grant_type' => 'authorization_code',
        'code' => $_GET['code']
    );

    $ch = curl_init('https://accounts.google.com/o/oauth2/token');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $data = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($data, true);
    if (!empty($data['access_token'])) {
        $_SESSION['token'] = $data['access_token'];
        $params = array(
            'access_token' => $data['access_token'],
            'id_token' => $data['id_token'],
            'token_type' => 'Bearer',
            'expires_in' => 3599
        );

        $info = file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo?' . urldecode(http_build_query($params)));
        $info = json_decode($info, true);
    }
}
$email = $info['email'];
$name = $info['name'];
$host = 'localhost';
$user = 'a0493864_root';
$password = 'Apox51s42';
$db_name = 'a0493864_obch';
$conn = new mysqli($host, $user, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT inst FROM users WHERE mail='$email'";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $inst_true = $row["inst"];
    }
}
$sql = "SELECT id FROM votes WHERE email='$email'";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $vote = false;
    }
} else {
    $vote = true;
}
//print_r($_SESSION);
//echo '</br>';
//print_r($info);
//echo '</br>';
//echo 'inst-'.$inst.' true-'.$inst_true;
//echo '</br>';
//print_r($_COOKIE);
$close = false;
if (time() >= 1607439600) {
    $vote = false;
    $close = true;
}
$close = false;
$vote = true;
?>


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
    <link rel="icon" href="favicon.ico">
    <script>
        var t = 0;
        let timerId = setInterval(() => times(), 1000);

        function times() {
            var time = parseInt(new Date().getTime() / 1000);
            if (time == 1607439600) {
                $('button').remove();
                $('h4').remove();
                $('p').remove();
                if (t == 0) {
                    t = 1;
                    $('.window').append('<h4>Голосование окончено.<h4>');
                }
            }
        }
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <title>Голосование</title>
</head>
<body>
<div class="main">
    <h1>Голосование</h1>
    <div class="window">
        <div class="cand">
            <h5>Романова Анна</h5>
            <img src="img/anna.jpg" alt="anna">
            <?php if ($vote == true) {
                echo '<button value="1" class="btn-lg btn-1 btn-primary btn-block btn-cand">За</button>';
                echo '<button value="-1" class="btn-lg btn-2 btn-primary btn-block btn-cand">Против</button>';
            }
            ?>
        </div>
        <?php if ($vote == true) {
            echo '<button  class="btn-lg btn-n btn-primary btn-block">Воздержаться</button>';
        }
        ?>

        <?php if ($vote == true && $close == false): ?>
            <p>Проголосовать можно только один раз.</p>
        <?php elseif ($vote == false && $close == false): ?>
            <h4>Спасибо, Ваш голос учтён.</h4>
        <?php elseif ($close == true): ?>
            <h4>Голосование окончено.</h4>
        <?php else: ?>
            <h3>Вероятнее всего вы попытались войти не в свой институт или использовали не корпоративную
                почту.<br><br><a href="/">Войдите с верными данными.</a></h3>
        <?php endif ?>

    </div>
</div>
<script type="text/javascript">
    sessionStorage.clear();
    var name = "<?=$name;?>";
    var email = "<?=$email;?>";
    $(document).ready(function ($) {
        $('button').on('click', function (event) {
            $.post("/vote.php", {cand: this.value, name: name, email: email}, function (data) {
                console.log(data);
                $('button').remove();
                $('.main').append('<h2>Спасибо, Ваш голос учтён.</h2>');
            })
        });
    })
</script>
</body>
</html>