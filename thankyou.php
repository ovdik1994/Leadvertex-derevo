<?php
function send_the_order($post)
{
    $params = [
        'phone' => $post['phone'],
        'fio' => $post['fio'],
        'ip' => $_SERVER['REMOTE_ADDR'],
        'utm_term' => $post['utm_term'],
        'utm_source' => $post['utm_source'],
        'utm_medium' => $post['utm_medium'],
        'utm_campaign' => $post['utm_campaign'],
        'utm_content' => $post['utm_content'],
        'timezone' => (int)$post['timezone'],
        'country' => 'RU',
    ];
    $url = 'https://domashnie-derevia.leadvertex.ru/api/webmaster/v2/addOrder.html?webmasterID=144&token=m3xdXbRW0RRrMrsC';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_exec($ch);
    curl_close($ch);

    include 'confirm.php';
}

if (!empty($_POST['phone'])) {
    send_the_order($_REQUEST);
}
// else{
//     echo "Ошибка! Попробуйте еще раз!"
// }
 
?>