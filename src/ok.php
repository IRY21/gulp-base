<?
session_start();

function mail_send($name_from,$email_from,$name_to,$email_to,$data_charset,$send_charset,$subject,$body)
{
/*$name_from, // имя отправителя
$email_from, // email отправителя
$name_to, // имя получателя
$email_to, // email получателя
$data_charset, // кодировка переданных данных
$send_charset, // кодировка письма
$subject, // тема письма
$body // текст письма
*/
$to=mail_mime_header_encode($name_to, $data_charset, $send_charset).' <'.$email_to.'>';
$subject = mail_mime_header_encode($subject, $data_charset, $send_charset);
$from =  mail_mime_header_encode($name_from, $data_charset, $send_charset).' <'.$email_from.'>';
if($data_charset != $send_charset)
    {
    $body=iconv($data_charset, $send_charset, $body);
      }
$headers="From: $from\r\n";
$headers.="Content-type: text/html; charset=$send_charset\r\n";
return mail($to, $subject, $body, $headers);
}
//Кодировка для заголовков письма
function mail_mime_header_encode($str, $data_charset, $send_charset)
{
if($data_charset != $send_charset)
    {
    $str=iconv($data_charset, $send_charset, $str);
      }
return '=?'.$send_charset.'?B?'.base64_encode($str).'?=';
}  

// Функция отправки смс
/*include_once('php_func/SmsaeroApi.class.php');
function send_sms($phone, $text)
{
	$smsaero_api = new SmsaeroApi('','', ''); // Пароль не в md5
	$smsaero_api->send($phone, $text, false, 0, 3); // Отправка одного сообщения
}*/

if(count($_POST))
{

    $uploadfilename = '';  // Создаем переменную
    if($_FILES)
    {
        if($_FILES["file"]["size"] < 1024*100*1024) // Размер файла не превышает сто мегабайт
        {
            // Проверяем загружен ли файл
            if(is_uploaded_file($_FILES["file"]["tmp_name"]))
            {
                $ext = substr($_FILES['file']['name'], 1 + strrpos($_FILES['file']['name'], ".")); // Расширение файла
                if($ext=='php')
                    exit();
                $uploadfilename = time()."_".rand(10000, 99999).".".$ext;
                // Если файл загружен успешно, перемещаем его
                // из временной директории в конечную
                move_uploaded_file($_FILES["file"]["tmp_name"], "file/".$uploadfilename);
            } else {
                echo("Ошибка загрузки файла");
            }
        }
    }
	
	$ab_test = intval($_SESSION['ab_var1']);
	$head_mess = addslashes(htmlspecialchars(trim($_POST['head_mess'])));
	$name = addslashes(htmlspecialchars(trim($_POST['name'])));
	$phone = addslashes(htmlspecialchars(trim($_POST['phone'])));
	$email = addslashes(htmlspecialchars(trim($_POST['email'])));
	
	$utm_source = addslashes(trim(strip_tags($_SESSION['utm_source'])));
	$utm_medium = addslashes(trim(strip_tags($_SESSION['utm_medium'])));
	$utm_campaign = addslashes(trim(strip_tags($_SESSION['utm_campaign'])));
	$utm_term = addslashes(trim(strip_tags($_SESSION['utm_term'])));
	$utm_content = addslashes(trim(strip_tags($_SESSION['utm_content'])));

    if(!empty($price))
        $body_form = "<b>Utm_source: </b>".$utm_source."<b>utm_term: </b>".$utm_term."<b>Форма: </b>".$head_mess."<br><b>Имя: </b> ".$name." <br><b>Телефон</b>: ".$phone." <br><b>Цена</b>: ".$price;
    else if($head_mess=='Отзыв')
        $body_form = "<b>Utm_source: </b>".$utm_source."<b>utm_term: </b>".$utm_term."<b>Форма: </b>".$head_mess."<br><b>Имя: </b> ".$name." <br><b>Телефон</b>: ".$phone." <br><b>Отзыв</b>: ".$feedback." <br>Файл: http://".$_SERVER['SERVER_NAME']."/file/".$uploadfilename;
    else if($head_mess=='Калькулятор')
        $body_form = "<b>Utm_source: </b>".$utm_source."<b>utm_term: </b>".$utm_term."<b>Форма: </b>".$head_mess." <br><b>Телефон</b>: ".$phone." <br><b>Количество решеток</b>: ".$count." <br><b>Название города или населенного пункта</b>: ".$city." <br><b>Как вы желаете получить расчет?</b>: ".$calcCallback." <br><b>Дополнительные опции</b>: ".$optionSetup.",".$optionColor;
    else
        $body_form = "<b>Utm_source: </b>".$utm_source."<b>utm_term: </b>".$utm_term."<b>Форма: </b>".$head_mess."<br><b>Имя: </b> ".$name." <br><b>Телефон</b>: ".$phone;


    /* отправка на почту */
	mail_send("", "noreply@".$_SERVER['SERVER_NAME'], "Администратор","","utf-8","utf-8", "Новая заявка с сайта ".date("d.m.Y"),$body_form);
	
	
	/* Сохранение внутри БАЗЫ EXCELL GROUP */
	$mesmessage = Array();
	if(!empty($utm_source))
		$mesmessage["utm_source"] = $utm_source;
	if(!empty($utm_medium))
		$mesmessage["utm_medium"] = $utm_medium;
	if(!empty($utm_campaign))
		$mesmessage["utm_campaign"] = $utm_campaign;
	if(!empty($utm_term))
		$mesmessage["utm_term"] = $utm_term;
	if(!empty($utm_content))
		$mesmessage["utm_content"] = $utm_content;
	if(!empty($ab_test)) 
		$mesmessage["ab_test"] = $ab_test;
	if(!empty($head_mess)) 
		$mesmessage["head_mess"] = $head_mess;
	if(!empty($name))
		$mesmessage["name"] = $name;
	if(!empty($phone))
		$mesmessage["phone"] = $phone;
	if(!empty($email))
		$mesmessage["email"] = $email;
		
	
	if( $curl = curl_init() ) {
		curl_setopt($curl, CURLOPT_URL, 'http://leads.denlam.ru/inboxer');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $mesmessage);
		curl_setopt($curl, CURLOPT_REFERER, 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); 
		$out = curl_exec($curl);
		curl_close($curl);
	}
	/* Сохранение внутри БАЗЫ EXCELL GROUP */

    echo "
    <div class=\"ImThanks-Title\">
        Спасибо!
    </div>
    <div class=\"ImThanks-Subtitle\">
        Ваше сообщение было отправлено успешно.
    </div>
    <button type=\"button\" class=\"ImThanks-Btn Btn\" id=\"fancyClose\" onclick=\"$.fancybox.close()\">Закрыть</button>
	";

    exit();
}
?>