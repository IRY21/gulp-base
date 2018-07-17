@@include('template/all/head.php')
<main class="Home DefmenuWrapper">
    <div class="DefmenuContainer">
        <div class="DefmenuOverlay"></div>
        @@include('template/all/header.php')

        <div class='ProcessingPersonalDataText'>
            Заполняя эту форму, вы даете согласие на<br>
            <a href="/im-blocks/politic.php" class="ProcessingPersonalDataText-Link fancybox.ajax">
                обработку ваших персональных данных
            </a>
        </div>

        <div class="DefmenuBtn-Container_fixed">
            <button class="DefmenuBtn">
                <span class="DefmenuBtn-Line"></span>
                <span class="DefmenuBtn-Line"></span>
                <span class="DefmenuBtn-Line"></span>
            </button>
        </div>

        <label class="Checkbox Checkbox_theme_switch">
            <input type="checkbox" class="Checkbox-Control">
            <span class="Checkbox-Slider Checkbox-Round"></span>
        </label>

        <input type="text" class="Input">

        <select class="Select ">
            <option value="Дом">Дом</option>
            <option value="Дом">Дом</option>
            <option value="Дом">Дом</option>
            <option value="Дом">Дом</option>
            <option value="Дом">Дом</option>
        </select>

        <select class="Select Select_theme_arrow">
            <option value="Дом">Дом</option>
            <option value="Дом">Дом</option>
            <option value="Дом">Дом</option>
            <option value="Дом">Дом</option>
            <option value="Дом">Дом</option>
        </select>

        <div class="ProcessingPersonalDataText FormSlider-ProcessingPersonalDataText">
            Ваши данные используются только для ответа на обращение.
            Нажимая кнопку вы даете согласие
            на
            <a href="/im-blocks/politic.php" class="ProcessingPersonalDataText-Link fancybox.ajax">
                обработку персональных данных
            </a>
        </div>

        <form class="Form" id="form1" data-reachgoal="main-form">
            <div class="Form-Row">
                <input
                        name="name"
                        class="Input"
                        data-validator="letters"
                />
            </div>
            <div class="Form-Row">
                <input
                        type="tel"
                        name="phone"
                        class="Input masked-phone"
                        placeholder="+7 (___) ___-__-__"
                        data-validator="regexp"
                        data-validator-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                />
            </div>
            <div class="Form-Row">
                <textarea
                        class="FormSection-Textarea"
                        name="appeal-text"
                        data-validator="empty"
                        data-required
                ></textarea>
            </div>
            <div class="Form-Row">
                <select class="FormSection-Select"
                        name="break-type"
                        data-validator="empty"
                        data-required
                >
                    <option value="">Выберите тип поломки</option>
                    <option value="Благодарность">Благодарность</option>
                    <option value="Отзыв о чистоте лифта">Отзыв о чистоте лифта</option>
                    <option value="Отзыв по работе лифта">Отзыв по работе лифта</option>
                </select>
            </div>
            <div class="Form-Row">
                <button class="Btn">
                    Получить консультацию
                </button>
            </div>
            <input name="head_mess" type="hidden" value="">
            <input name="page_id" type="hidden" value="<?=$page_id;?>">
        </form>

        <form class="Form" id="form2" data-reachgoal="main-form">
            <div class="Form-Controls">
                <div class="Form-Row">
                    <label class="Input Input_theme_line ContactForm-Input">
                        <span class="Label ContactForm-Label">Имя:</span>
                        <input
                                placeholder="Введите ваше имя"
                                name="name"
                                class="Input-Control ContactForm-InputControl"
                                data-validator="number"
                        />
                    </label>
                    <label class="Input Input_theme_line ContactForm-Input">
                        <span class="Label ContactForm-Label">Имя:</span>
                        <input
                                placeholder="Введите ваше имя"
                                name="name"
                                class="Input-Control ContactForm-InputControl"
                                data-validator="letters"
                        />
                    </label>
                </div>
                <div class="Form-Row">
                    <label class="Input Input_theme_line ContactForm-Input">
                        <span class="Label ContactForm-Label">Телефон:</span>
                        <input
                                type="tel"
                                name="phone"
                                class="Input-Control ContactForm-InputControl MaskedPhone"
                                placeholder="+7 (___) ___-__-__"
                                data-validator="regexp"
                                data-validator-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                data-required
                        />
                    </label>
                </div>
                <div class="Form-Row">
                    <label for="textarea" class="Label">Вопрос:</label>
                    <textarea cols="60" rows="3" id="textarea"
                              class="Textarea Form-Textarea"
                              name="textarea"
                              data-validator="length"
                              data-validator-min="0"
                              data-validator-max="10"
                    ></textarea>
                </div>
                <div class="Form-Row">
                    <button class="Btn Form-Btn">
                        Отправить
                    </button>
                </div>
                <input name="head_mess" type="hidden" value="Вопрос">
                <input
                        name="intibot"
                        type="hidden"
                        value=""
                        data-validator="intibot"
                />
            </div>
            <div class="Form-Thx FormThx" style="display: block;">
                <p class="FormThx-Thx">Спасибо за&nbsp;обращение в&nbsp;Stairslight</p>
                <p class="FormThx-Callback">
                    <span class="Icon icon-form_ok"></span>
                    <span class="FormThx-Callback-Text">
                                    Мы позвоним вам в&nbsp;ближайшее время
                                </span>
                </p>
                <div class="FormSection-Row">
                    <div class='ContactForm-FormSpecText'>
                        Нажимая на&nbsp;кнопку «Отправить», вы&nbsp;даете<br>
                        <a href="" class="ContactForm-FormSpecText-Link">
                            согласие на&nbsp;обработку персональных данных.
                        </a>
                    </div>
                    <button class="Btn FormSection-Btn Btn_disable">
                        Отправить
                    </button>
                </div>
                <a href="" target="_blank" class="ContactForm-Link">
                    Политика конфеденциальности
                </a>
            </div>
        </form>

        <button class="Btn FancyBtn fancybox.ajax"  href="/im-blocks/imassage.php?headmess=<?=urlencode("Главная форма");?>&zag1=<?=urlencode("Заявка на консультацию менеджера");?>&zag2=<?=urlencode("Перезвоним в течение 5 минут");?>&reachgoal=main_form&btn_text=<?=urlencode('Получить консультацию');?>&page_id=<?=urlencode($page_id);?>">
            Получить промо-код
        </button>

        <div class="Accordion">
            <div class="Accordion-Item">
                <div class="Accordion-Title">Тепловизионное обследование</div>
                <div class="Accordion-Content">
                    text
                </div>
            </div>
        </div>

        @@include('template/all/footer.php')
    </div>
</main>
