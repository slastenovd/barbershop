<?php

$to = 'kristina-hairstylist@mail.ru'; // кому пишем письмо
$to2 = 'nosenko.kristina.76@mail.ru'; // кому пишем письмо
$to3 = 'slastenovd@mail.ru'; // кому пишем письмо

// Отправка СМС
# @to - номер получателя, например: 79221111111 
# @msg - сообщение в кодировке windows-1251 
# @login - логин на веб-сервисе websms.ru 
# @password - пароль на веб-сервисе websms.ru 
 
function send_sms($to, $msg, $login, $password) 
{ 
    $u = 'http://www.websms.ru/http_in5.asp'; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, 
    'Http_username='.urlencode($login).'&Http_password='.urlencode($password).'&Phone_list='.$to.'&Message='.urlencode($msg)); 
    curl_setopt($ch, CURLOPT_URL, $u); 
    $u = trim(curl_exec($ch)); 
    curl_close($ch); 
    preg_match("/message_id\s*=\s*[0-9]+/i", $u, $arr_id ); 
    $id = preg_replace("/message_id\s*=\s*/i", "", @strval($arr_id[0]) ); 
    return $id; 
}  

switch ($_REQUEST['action']) {
    case 'send_message':
        $subject = 'Письмо с сайта kristina-hairstylist.ru';
        $message = 'Привет Кристина! Тебе отправили письмо с твоего сайта.'. "\r\n" .
            'Имя: '.htmlspecialchars($_REQUEST['contactname']). "\r\n" .
            'Тема: '.htmlspecialchars($_REQUEST['contactsubject']). "\r\n" .
            'Контактная информация: '.htmlspecialchars($_REQUEST['contactemail']). "\r\n" .
            'Сообщение: '.htmlspecialchars($_REQUEST['contactmessage']);
        $headers = 'From: order@kristina-hairstylist.ru' . "\r\n" .
            'Reply-To: order@kristina-hairstylist.ru' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if(isset($to2)){ mail($to2, $subject, $message, $headers);}
        if(isset($to3)){ mail($to3, $subject, $message, $headers);}

        if( mail($to, $subject, $message, $headers) ){
            $result['status']='success';
        } else {
            $result['status']='error';
        }

        echo json_encode($result);
        break;
    
    case 'appointment':
        $subject = 'Запись на стрижку с сайта kristina-hairstylist.ru';
        $message = 'Привет Кристина! К тебе записались на стрижку с твоего сайта.'. "\r\n" .
            'Имя: '.htmlspecialchars($_REQUEST['contactname']). "\r\n" .
            'Предпочитаемая дата: '.htmlspecialchars($_REQUEST['date']). "\r\n" .
            'Телефон: '.htmlspecialchars($_REQUEST['phone']). "\r\n" .
            'Сообщение: '.htmlspecialchars($_REQUEST['contactmessage']);
        $headers = 'From: order@kristina-hairstylist.ru' . "\r\n" .
            'Reply-To: order@kristina-hairstylist.ru' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if(isset($to2)){ mail($to2, $subject, $message, $headers);}
        if(isset($to3)){ mail($to3, $subject, $message, $headers);}

        if( mail($to, $subject, $message, $headers) ){
            $result['status']='success';
        } else {
            $result['status']='error';
        }
        // send_sms(79622976146, 'hello ds', 'ds_dimka', '');     
        echo json_encode($result);
        break;
    
    case 'subscribe':
        $subject = 'Подписка с сайта kristina-hairstylist.ru';
        $message = 'Привет Кристина! Кто-то подписался на твою новостную рассылку.'. "\r\n" .
            'почта: '.htmlspecialchars($_REQUEST['email']);
        $headers = 'From: order@kristina-hairstylist.ru' . "\r\n" .
            'Reply-To: order@kristina-hairstylist.ru' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if(isset($to2)){ mail($to2, $subject, $message, $headers);}
        if(isset($to3)){ mail($to3, $subject, $message, $headers);}

        if( mail($to, $subject, $message, $headers) ){
            $result['status']='success';
        } else {
            $result['status']='error';
        }

        echo json_encode($result);
        break;

    default:
        break;
}

?>