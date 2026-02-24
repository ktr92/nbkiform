<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IFrame калькулятор</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container-sm">
            <h1>IFrame калькулятор</h1>
            <form name="calc" method="post" action="http://62.109.31.113/calc/ajax.php">
                <input type="hidden" name="action" value="calc" />
<!--                <div class="mb-3">
                    <label for="shipment_city_id" class="form-label">Город отправки</label>
                    <input type="text" name="shipment_city_id" class="form-control" id="shipment_city_id" aria-describedby="shipmentCityIdHelp">
                    <div id="shipmentCityIdHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>-->
                <div class="mb-3">
                    <label for="shipment_city_id" class="form-label">Город отправки</label>
                    <select type="text" name="shipment_city_id" class="form-select" id="shipment_city_id" aria-describedby="shipmentCityIdHelp" required></select>
                    <!--<div id="shipmentCityIdHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="shipment_intake" name="shipment_intake">
                    <label class="form-check-label" for="shipment_intake">Забрать с адреса</label>
                </div>
<!--                <div class="mb-3">
                    <label for="received_city_id" class="form-label">Город доставки</label>
                    <input type="text" class="form-control" id="received_city_id" aria-describedby="receivedCityIdHelp">
                    <div id="receivedCityIdHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>-->
                <div class="mb-3">
                    <label for="received_city_id" class="form-label">Город доставки</label>
                    <select type="text" name="received_city_id" class="form-select" id="received_city_id" aria-describedby="receivedCityIdHelp" disabled required></select>
                    <!--<div id="shipmentCityIdHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="received_intake" name="received_intake">
                    <label class="form-check-label" for="received_intake">Доставить до адреса</label>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label for="weight" class="form-label">Вес груза, кг</label>
                            <input type="text" class="form-control" id="weight" name="weight" required>
                        </div>
                        <div class="col-6">
                            <label for="volume" class="form-label">Объем груза, м3</label>
                            <input type="text" class="form-control" id="volume" name="volume" required>
                        </div>
                    </div>

                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="lathing" name="lathing">
                    <label class="form-check-label" for="lathing">Защитная упаковка</label>
                </div>
                <button type="submit" class="btn btn-primary">Рассчитать</button>
            </form>
            <div id="result" class="row" style="display: none;">
                <div id="auto" class="col-3">
                    &mdash; Авто
                    <ul class="success_result">
                        <li>Стоимость: <span class="price"></span>₽</li>
                        <li>Сроки: <span class="delivery_time"></span> дней</li>
                        <li>Страховка: <span class="insurance"></span>₽</li>
                        <li>
                            Дополнительные услуги:
                            <ul>
                                <li>Обрешетка: <span class="lathing"></span>₽</li>
                                <li>Маркировка: <span class="marking"></span>₽</li>
                            </ul>
                        </li>
                        <li style="font-weight: bold; font-size: 14pt">Всего: <span class="total"></span>₽</li>
                    </ul>
                    <span class="fail_result" style="display: none; margin-top: 20px; text-align: justify;">Данный способ доставки недоступен по выбранному направлению</span>
                </div>
                <div id="avia" class="col-3">
                    &mdash; Авиа
                    <ul class="success_result">
                        <li>Стоимость: <span class="price"></span>₽</li>
                        <li>Сроки: <span class="delivery_time"></span> дней</li>
                        <li>Страховка: <span class="insurance"></span>₽</li>
                        <li>
                            Дополнительные услуги:
                            <ul>
                                <li>Обрешетка: <span class="lathing"></span>₽</li>
                                <li>Маркировка: <span class="marking"></span>₽</li>
                            </ul>
                        </li>
                        <li style="font-weight: bold; font-size: 14pt">Всего: <span class="total"></span>₽</li>
                    </ul>
                    <span class="fail_result" style="display: none; margin-top: 20px; text-align: justify;">Данный способ доставки недоступен по выбранному направлению</span>
                </div>
                <div id="container" class="col-3">
                    &mdash; Контейнер
                    <ul class="success_result">
                        <li>Стоимость: <span class="price"></span>₽</li>
                        <li>Сроки: <span class="delivery_time"></span> дней</li>
                        <li>Страховка: <span class="insurance"></span>₽</li>
                        <li>
                            Дополнительные услуги:
                            <ul>
                                <li>Обрешетка: <span class="lathing"></span>₽</li>
                                <li>Маркировка: <span class="marking"></span>₽</li>
                            </ul>
                        </li>
                        <li style="font-weight: bold; font-size: 14pt">Всего: <span class="total"></span>₽</li>
                    </ul>
                    <span class="fail_result" style="display: none; margin-top: 20px; text-align: justify;">Данный способ доставки недоступен по выбранному направлению</span>
                </div>
                <div id="container2" class="col-3">
                    &mdash; Льготный
                    <ul class="success_result">
                        <li>Стоимость: <span class="price"></span>₽</li>
                        <li>Сроки: <span class="delivery_time"></span> дней</li>
                        <li>Страховка: <span class="insurance"></span>₽</li>
                        <li>
                            Дополнительные услуги:
                            <ul>
                                <li>Обрешетка: <span class="lathing"></span>₽</li>
                                <li>Маркировка: <span class="marking"></span>₽</li>
                            </ul>
                        </li>
                        <li style="font-weight: bold; font-size: 14pt">Всего: <span class="total"></span>₽</li>
                    </ul>
                    <span class="fail_result" style="display: none; margin-top: 20px; text-align: justify;">Данный способ доставки недоступен по выбранному направлению</span>
                </div>
                <div id="express" class="col-3">
                    &mdash; Экспресс
                    <ul class="success_result">
                        <li>Стоимость: <span class="price"></span>₽</li>
                        <li>Сроки: <span class="delivery_time"></span> дней</li>
                        <li>Страховка: <span class="insurance"></span>₽</li>
                        <li>
                            Дополнительные услуги:
                            <ul>
                                <li>Обрешетка: <span class="lathing"></span>₽</li>
                                <li>Маркировка: <span class="marking"></span>₽</li>
                            </ul>
                        </li>
                        <li style="font-weight: bold; font-size: 14pt">Всего: <span class="total"></span>₽</li>
                    </ul>
                    <span class="fail_result" style="display: none; margin-top: 20px; text-align: justify;">Данный способ доставки недоступен по выбранному направлению</span>
                </div>
                <div id="fairyboat" class="col-3">
                    &mdash; Паром
                    <ul class="success_result">
                        <li>Стоимость: <span class="price"></span>₽</li>
                        <li>Сроки: <span class="delivery_time"></span> дней</li>
                        <li>Страховка: <span class="insurance"></span>₽</li>
                        <li>
                            Дополнительные услуги:
                            <ul>
                                <li>Обрешетка: <span class="lathing"></span>₽</li>
                                <li>Маркировка: <span class="marking"></span>₽</li>
                            </ul>
                        </li>
                        <li style="font-weight: bold; font-size: 14pt">Всего: <span class="total"></span>₽</li>
                    </ul>
                    <span class="fail_result" style="display: none; margin-top: 20px; text-align: justify;">Данный способ доставки недоступен по выбранному направлению</span>
                </div>
                <div id="superexpreess" class="col-3">
                    &mdash; СуперЭкспресс
                    <ul class="success_result">
                        <li>Стоимость: <span class="price"></span>₽</li>
                        <li>Сроки: <span class="delivery_time"></span> дней</li>
                        <li>Страховка: <span class="insurance"></span>₽</li>
                        <li>
                            Дополнительные услуги:
                            <ul>
                                <li>Обрешетка: <span class="lathing"></span>₽</li>
                                <li>Маркировка: <span class="marking"></span>₽</li>
                            </ul>
                        </li>
                        <li style="font-weight: bold; font-size: 14pt">Всего: <span class="total"></span>₽</li>
                    </ul>
                    <span class="fail_result" style="display: none; margin-top: 20px; text-align: justify;">Данный способ доставки недоступен по выбранному направлению</span>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="http://62.109.31.113/calc/script.js"></script>
    </body>
</html>