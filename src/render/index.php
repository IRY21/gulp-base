<?
session_start();

if(!empty($_GET['utm_source']))
    $_SESSION['utm_source'] = $_GET['utm_source'];
if(!empty($_GET['utm_medium']))
    $_SESSION['utm_medium'] = $_GET['utm_medium'];
if(!empty($_GET['utm_campaign']))
    $_SESSION['utm_campaign'] = $_GET['utm_campaign'];
if(!empty($_GET['utm_term']))
    $_SESSION['utm_term'] = $_GET['utm_term'];
if(!empty($_GET['utm_content']))
    $_SESSION['utm_content'] = $_GET['utm_content'];

$phone = "8 (962) 520-63-78";
?>
    <!doctype html>
    <html lang="ru">
    <head>

        <meta charset="utf-8">

        <title>Title</title>
        <meta name="description" content="">

        <? include ("template/all/head.php")?>

        <link rel="stylesheet" href="/css/index.css">
    </head>

    <!--

        cities - Города

        //services - Услуги

        electrical-lab - Электролаборатория
        adjustment-rza - Наладка РЗА
        electrical-install - Электромонтаж
        test-protective-equipment - Испытания средств защиты
        verification-gas-detectors - Поверка газосигнализаторов
        thermal-imaging - Тепловизионное обследование
        maintenance - Техническое обслуживание
        technical-examination - Техосвидетельствование электрооборудования


        contact - Контакты

    -->
<body> <!--Defmenu_open-->

<main class="Home">

    <? include ("template/all/Header.php")?>

    <a class="Btn FancyBtn Btn_disable"
       data-fancybox
       data-type="ajax"
       data-src="/im-blocks/imassage.php?headmess=<?=urlencode("Главная форма");?>&zag1=<?=urlencode("Заявка на консультацию менеджера");?>&zag2=<?=urlencode("Перезвоним в течение 5 минут");?>&reachgoal=main_form&btn_text=<?=urlencode('Получить консультацию');?>&page_id=<?=urlencode($page_id);?>"
       href="javascript:;">
        Узнать подробнее
    </a>

    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequuntur culpa id minima mollitia
        quisquam quod sequi veritatis! Ad aliquam animi aut debitis, facilis harum minima neque reiciendis vitae
        voluptate?
    </div>
    <div>Amet animi aspernatur at culpa ea eos, explicabo facere impedit iusto, modi necessitatibus nemo non optio
        perferendis porro quaerat sint sit vel vitae voluptates? Aspernatur at consequuntur itaque mollitia nulla?
    </div>
    <div>A aliquid amet aperiam assumenda aut corporis dicta est eum illum ipsum minima molestias mollitia nam
        officiis omnis perspiciatis porro qui, quibusdam quis ratione repudiandae rerum sunt vel vitae voluptate!
    </div>
    <div>A, aliquid cumque, deleniti dicta et facere, incidunt ipsam minus modi nisi possimus quidem tenetur ut?
        Adipisci deleniti deserunt quos sequi vitae. Delectus eveniet, laudantium necessitatibus possimus
        praesentium reprehenderit repudiandae?
    </div>
    <? include ("template/all/Footer.php")?>
</main>

<? include ("template/all/bot-scripts.php")?>