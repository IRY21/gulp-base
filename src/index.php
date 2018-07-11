@@include('template/all/head.php')
<main class="Home DefmenuWrapper">
    <div class="DefmenuContainer">
        <div class="DefmenuOverlay"></div>
        @@include('template/all/header.php')
        <!--<div class='ProcessingPersonalDataText'>
            Заполняя эту форму, вы даете согласие на<br>
            <a href="/im-blocks/politic.php" class="ProcessingPersonalDataText-Link fancybox.ajax">
                обработку ваших персональных данных
            </a>
        </div>-->
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

        <form id="form1" data-reachgoal="main-form">
            <input
                    name="name"
                    class="Input"
                    data-validator="letters"
            />
            <input
                    type="tel"
                    name="phone"
                    class="Input masked-phone"
                    placeholder="+7 (___) ___-__-__"
                    data-validator="regexp"
                    data-validator-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
            />
            <textarea
                    class="FormSection-Textarea"
                    name="appeal-text"
                    data-validator="empty"
                    data-required
            ></textarea>
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
            <input name="head_mess" type="hidden" value="">
            <input name="page_id" type="hidden" value="<?=$page_id;?>">
            <button class="Btn">
                Получить консультацию
            </button>
        </form>

        <button class="Btn FancyBtn fancybox.ajax"  href="/im-blocks/imassage.php?headmess=<?=urlencode("Главная форма");?>&zag1=<?=urlencode("Заявка на консультацию менеджера");?>&zag2=<?=urlencode("Перезвоним в течение 5 минут");?>&reachgoal=main_form&btn_text=<?=urlencode('Получить консультацию');?>&page_id=<?=urlencode($page_id);?>">
            Получить промо-код
        </button>

        @@include('template/all/footer.php')
    </div>
</main>
