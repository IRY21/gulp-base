<script type="text/javascript" src="../js/im-js.js"></script>
<div class="ImCallback">
    <p class="ImCallback-Title"><?=$_GET['zag1'];?></p>
    <p class="ImCallback-Subtitle"><?=$_GET['zag2'];?></p>
    <form class="ImCallback-Form FormSection" id="form10" data-reachgoal="main-form">
        <input
                placeholder="Введите ваше имя"
                name="name"
                class="ImCallback-Input FormSection-Input"
                data-validator="letters"
                data-required
        />
        <input
                type="tel"
                name="phone"
                class="ImCallback-Input FormSection-Input masked-phone1"
                placeholder="+7 (___) ___-__-__"
                data-validator="regexp"
                data-validator-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                data-required

        />
        <input name="head_mess" type="hidden" value="<?=$_GET['headmess'];?>">
        <input name="page_id" type="hidden" value="<?=$_GET['page_id'];?>">
        <button class="contact-form__btn form-section__btn Btn">
            <?=$_GET['btn_text'];?>
        </button>
    </form>
    <div class='ImCallback-FormSpecText ProcessingPersonalDataText'>
        Заполняя эту форму, вы даете согласие на<br>
        <a href="/im-blocks/politic.php" class="ProcessingPersonalDataText-Link fancybox.ajax">
            обработку ваших персональных данных
        </a>
    </div>
</div>