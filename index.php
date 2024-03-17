<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POFFIZADANIE3</title>
    <link rel="stylesheet" href="main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-material@1.0.1/icheck-material.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-material@1.0.1/icheck-material-custom.min.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
    <div class="osnova">
        <div class="wrap1 lh-lg font-monospace">




            <form action="register.php" method="POST" id="form" class="row g-3 needs-validation">
                <h3 id="form" class="text-center">Форма</h3>




                <div class="col-auto">
                    <label for="validationCustom01" class="form-label">Фамилия Имя Отчество:</label>
                    <input type="text" placeholder="ФИО" class="form-control rounded-pill" name="login" value=""
                        required="" />
                    <div class="valid-feedback">Looks good!</div>
                </div>





                <div class="col-auto">
                    <label for="validationCustomUsername" class="form-label">Телефон:
                    </label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control rounded-pill" placeholder="Введите ваш номер" name="tel"
                            id="validationCustomUsername" aria-describedby="inputGroupPrepend" required="" />
                        <div class="invalid-feedback"></div>
                    </div>
                </div>





                <div class="col-auto">
                    <label for="validationCustomUsername" class="form-label">E-mail:
                    </label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control rounded-pill" placeholder="Введите ваш E-mail"
                            name="e-mail" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
                            required="" />
                        <div class="invalid-feedback"></div>
                    </div>
                </div>





                <div class="col-auto">
                    <label>
                        Дата рождения:<br />
                        <input name="field-date" class="form-control rounded-pill" placeholder="2004-07-14" type="date"
                            name="date" required="" />
                    </label>
                </div>





                <div class="col-auto">
                    <p>Выберите ваш пол:<br /></p>
                    <div class="form-check icheck-material-orange">
                        <input class="form-check-input" type="radio" id="someRadioId1" name="someGroupName"
                            required="" />
                        <label class="form-check-label" for="someRadioId1">Женский</label>
                    </div>
                    <div class="form-check icheck-material-orange">
                        <input class="form-check-input" type="radio" id="someRadioId2" name="someGroupName" />
                        <label class="form-check-label" for="someRadioId2">Мужской</label>
                    </div>
                </div>






                <div class="col-auto">
                    <label for="validationCustom04" class="form-label">Любимый язык программирования</label>
                    <select class="form-select rounded-pill" id="validationCustom04" required="" multiple name="vibor">
                        <option selected="" disabled="" value="">Выберете</option>
                        <option value="Значение1">Pascal</option>
                        <option value="Значение2">C</option>
                        <option value="Значение3">C++</option>
                        <option value="Значение4">JavaScript</option>
                        <option value="Значение5">PHP</option>
                        <option value="Значение6">Python</option>
                        <option value="Значение7">Java</option>
                        <option value="Значение8">Haskel</option>
                        <option value="Значение9">Clojure</option>
                        <option value="Значение10">Prolog</option>
                        <option value="Значение11">Scala</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>




                <div class="col-auto">
                    <label>
                        Биография:<br />
                        <textarea name="field-name-2" class="form-control rounded-pill"
                            placeholder="Напишите свою биографию" required="" name="bio"></textarea>
                    </label>
                </div>





                <div class="col-auto">
                    С контрактом:
                    <div class="form-check icheck-material-orange">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required=""
                            name="check" />
                        <label class="form-check-label" for="invalidCheck">
                            Ознакомлен (а)
                        </label>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>





                <div class="col-auto">
                    <button class="custom-btn btn-1">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>