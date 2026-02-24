<form action="#" class="stform" data-entity="corp-page-form">
    <div class="formcols__item">
        <div class="formcols__input">
            <div class="custom-select">
                <select name="service" class="required">
                    <option value="" selected>Выберите услугу *</option>
                    <option value="slmService$2302309">Digital скоринг</option>
                    <option value="slmService$2302303">Fraud скоринг</option>
                    <option value="slmService$2297520">Верификация данных заявителей</option>
                    <option value="slmService$2297509">Национальный кредитный бюллетень</option>
                    <option value="slmService$2297501">НБКИ-AFS</option>
                    <option value="slmService$236518701">BI аналитика НБКИ</option>
                    <option value="slmService$2297502">Отчет «Анализ долговой нагрузки частных заемщиков»</option>
                    <option value="slmService$2297508">Отчеты «Бенчмаркинг»</option>
                    <option value="slmService$2297505">Отчеты «Бенчмаркинг.Взыскание»</option>
                    <option value="slmService$2297507">Отчеты «Винтажный анализ»</option>
                    <option value="slmService$2297504">Отчеты «Поведенческий анализ заемщика после получения отказа»</option>
                    <option value="slmService$2297515">Передача кредитных историй</option>
                    <option value="slmService$2513606">Персональный кредитный рейтинг</option>
                    <option value="slmService$2297529">Получение кредитных отчетов</option>
                    <option value="slmService$2297538">Сигнальные кредитные отчеты</option>
                    <option value="slmService$2302308">Скоринг бюро для выдачи кредита/займа</option>
                    <option value="slmService$2302305">Скоринг бюро для управления портфелем</option>
                    <option value="slmService$2302304">Скоринг МСБ</option>
                    <option value="slmService$78324402">Прочее</option>
                </select>
            </div>
            <div class="error_text" style="display: none;"></div>
        </div>
    </div>
    <div class="formcols__item">
        <div class="formcols__input">
            <input type="text" name="company" value="" minlength="2" class="forminput" placeholder="Организация *" >
            <div class="error_text"></div>
        </div>
    </div>
    <div class="formcols__items">
        <div class="formcols__item">
            <div class="formcols__input">
                <input name="inn" type="text" value="" class="forminput" placeholder="ИНН">
                <div class="error_text"></div>
            </div>
        </div>
        <div class="formcols__item">
            <div class="formcols__input">
                <input name="code" value="" type="text"  class="forminput" placeholder="Код участника">
                <div class="error_text"></div>
            </div>
        </div>
    </div>
    <!-- /.formcols__items -->
    <div class="formcols__item">
        <div class="formcols__input">
            <input name="fio" type="text" value="" minlength="2" class="forminput" placeholder="Фамилия, имя и&nbsp;отчество *" >
            <div class="error_text"></div>
        </div>
    </div>
    <div class="formcols__items">
        <div class="formcols__item">
            <div class="formcols__input">
                <input name="email" type="email" value="" minlength="2" class="forminput" placeholder="Электронная почта *" >
                <div class="error_text"></div>
            </div>
        </div>
        <div class="formcols__item">
            <div class="formcols__input">
                <input name="phone" value="" type="tel" class="forminput" placeholder="Мобильный телефон *" minlength="11">
                <div class="error_text"></div>
            </div>
        </div>
    </div>
    <!-- /.formcols__items -->
    <div class="formcols__item">
        <div class="formcols__input">
            <textarea name="comm" rows="5" class="forminput" placeholder="Текст сообщения"></textarea>
            <div class="error_text"></div>
        </div>
    </div>
    <div class="pagerow">
        <div class="buttoncaption">
            <div class="buttoncaption__button">
                <input type="submit" class="btn btn_main btn_main_default" value="Отправить">
            </div>
            <div class="buttoncaption__caption">
                <div class="check-block check-block_big" style="max-width: 350px;">
                    <input type="checkbox" id="idCorpCheck">
                    <label for="idCorpCheck">Я соглашаюсь на&nbsp;обработку АО «НБКИ» моих персональных данных</label>
                    <div class="error_text"></div>
                </div>
            </div>
        </div>
    </div>
</form>
