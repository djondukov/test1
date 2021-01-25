<?php
/* ВАШИ НАСТРОЙКИ КОДА */
$order = [
    // Обязательные параметры
    'key' => 'k_Bi31hvf1PuNwnB3OzsItfJ1LuTO9pC7iyv', // Ваш API-ключ
    'name' => $_REQUEST['name'], // Имя клиента из формы заказа
    'phone' => $_REQUEST['phone'], // Телефон клиента из формы заказа
    'country' => 'UA', // Код страны (в формате двух символов)
    'offer_id' => 444, // ID оффера
    'products' => 458, // ID субоффера

    // Необязательные параметры
    'utm_source' => $_SESSION['utms']['utm_source'] ?? null, // utm_source
    'utm_content' => $_SESSION['utms']['utm_content'] ?? null, // utm_content
    'utm_campaign' => $_SESSION['utms']['utm_campaign'] ?? null, // utm_campaign
    'utm_medium' => $_SESSION['utms']['utm_medium'] ?? null, // utm_medium
    'utm_term' => $_SESSION['utms']['utm_term'] ?? null, // utm_term
];

/* НЕ МЕНЯТЬ ЭТУ ЧАСТЬ КОДА */
$order['uniqid'] = uniqid();
$order['date_created'] = date('Y-m-d H:i:s');
$order['ip'] = $_SERVER['REMOTE_ADDR'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://crm.7leads.xyz/index.php?r=api/order/index');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $order);
$out = curl_exec($curl);
curl_close($curl);
$order['result_str'] = $out;
$arr = json_decode($out, true);
$order['error'] = $arr['error'];
$order['order_id'] = (!empty($arr['order_id'])) ? $arr['order_id'] : 0;

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://connect.wowsale.info/backup.php');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $order);
$out = curl_exec($curl);
curl_close($curl);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Спасибо за заказ</title> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <article>
        <h1 style="font-size: 46px;color: green;text-align: center;">
            Спасибо за заказ
        </h1>
    </article>
    
</body>
</html>
