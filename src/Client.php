<?php

namespace TontiLagunaPrime;

class Client {
    public static function send($url, $params) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url. http_build_query($params),
            CURLOPT_RETURNTRANSFER => true, // Возвращаем результат в виде строки
            CURLOPT_FOLLOWLOCATION => true, // Следовать редиректам
            CURLOPT_HTTPGET => true, // Выполнить GET-запрос
        ));

        // Выполняем запрос, получаем ответ и сохраняем его
        $response = curl_exec($curl);

        // Проверяем на наличие ошибок
        if ($response === false) {
            $error = curl_error($curl);
            // Обработка ошибки...
            return $error;
        } else {
            // Обработка успешного ответа...
            return $response;
        }

        // Закрываем соединение
        curl_close($curl);
    }
}