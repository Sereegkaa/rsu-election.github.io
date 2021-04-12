<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <script type="text/javascript" src="jquery.min.js"></script>
    <link rel="stylesheet" href="css/res.css?v2">
    <title>Голосование</title>
    <style>
        .donut-chart.chart1 .slice.two {
            -webkit-transform: rotate(200deg);
            transform: rotate(200deg);
        }

        .donut-chart.chart2 .slice.two {
            -webkit-transform: rotate(110deg);
            transform: rotate(110deg);
        }
    </style>
</head>
<body>
<div class="main">
    <h1>Результаты голосования</h1>
    <div class="window">


        <div class="inst">
            <h3>Институт Мехатроники и <br>Информационных Технологий</h3>
            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p1" src="img/имиит2.jpg">
                    </div>
                </div>
                <h4>Александров Никита<br>55,76%</h4>
            </div>

            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p2" src="img/имиит1.jpg">
                    </div>
                </div>
                <h4>Елсукова Мария<br>44,24%</h4>
            </div>
            <p>Воздержалось: 8</p>
        </div>


        <div class="inst">
            <h3>Институт Химических Технологий и <br>Промышленной Экологии</h3>
            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p1" src="img/ихтипэ1.jpg">
                    </div>
                </div>
                <h4>Артёмов Алексей<br>58,57%</h4>
            </div>

            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p2" src="img/ихтипэ2.jpg">
                    </div>
                </div>
                <h4>Лёвина Анна<br>41,43%</h4>
            </div>
            <p>Воздержалось: 2</p>
        </div>


        <div class="inst">
            <h3>Технологический Институт <br>Легкой Промышленности</h3>
            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p2" src="img/тилп1.jpg">
                    </div>
                </div>
                <h4>Культина Анастасия<br>32,94%</h4>
            </div>

            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p1" src="img/тилп2.jpg">
                    </div>
                </div>
                <h4>Чубарова Анастасия<br>67,06%</h4>
            </div>
            <p>Воздержалось: 4</p>
        </div>


        <div class="inst">
            <h3>Институт Экономики<br>и Менеджмента</h3>
            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p1" src="img/иэим1.jpg">
                    </div>
                </div>
                <h4>Радионов Николай<br>63,93%</h4>
            </div>

            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p2" src="img/иэим2.jpg">
                    </div>
                </div>
                <h4>Рыбкина Елизавета<br>36,06%</h4>
            </div>
            <p>Воздержалось: 5</p>
        </div>


        <div class="inst">
            <h3>Текстильный<br>Институт</h3>
            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p1" src="img/ти1.jpg">
                    </div>
                </div>
                <h4>Шаблицкая Анастасия<br>60,44%</h4>
            </div>

            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p2" src="img/ти2.jpg">
                    </div>
                </div>
                <h4>Ишбулатова Карина<br>39,56%</h4>
            </div>
            <p>Воздержалось: 3</p>
        </div>


        <div class="inst">
            <h3>Колледж<br>РГУ им. А.Н. Косыгина</h3>
            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p1" src="img/колледж1.jpg">
                    </div>
                </div>
                <h4>Никандрова Диана<br>53,70%</h4>
            </div>

            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p2" src="img/колледж2.jpg">
                    </div>
                </div>
                <h4>Новосёлова Софья<br>46,27%</h4>
            </div>
            <p>Воздержалось: 5</p>
        </div>
    </div>
    <div class="window">
        <div class="inst">
            <h3>Институт<br>Дизайна</h3>
            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p1" src="img/ид1.jpg">
                    </div>
                </div>
                <h4>Сарайкина Наташа<br>72,30%</h4>
            </div>
        </div>


        <div class="inst">
            <h3>Институт<br>Искусств</h3>
            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p1" src="img/ии1.jpg">
                    </div>
                </div>
                <h4>Волынкина Александра<br>77,37%</h4>
            </div>
        </div>


        <div class="inst">
            <h3>Академия<br>имени Маймонида</h3>
            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p1" src="img/академия1.jpg">
                    </div>
                </div>
                <h4>Шрамов Юрий<br>90%</h4>
            </div>
        </div>


        <div class="inst">
            <h3>Институт<br>Социальной Инженерии</h3>
            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p2" src="img/иси1.jpg">
                    </div>
                </div>
                <h4>Бедина Екатерина<br>8,67%</h4>
            </div>

            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p2" src="img/иси2.jpg">
                    </div>
                </div>
                <h4>Козлова Лидия<br>44,09%</h4>
            </div>

            <div class="cand">
                <div class="card">
                    <div class="pie">
                        <img class="p1" src="img/иси3.jpg">
                    </div>
                </div>
                <h4>Хамраева Влада<br>44,55%</h4>
            </div>
            <p>Воздержалось: 6</p>
        </div>


    </div>
</div>
</body>
</html>