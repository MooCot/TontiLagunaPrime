<?php

namespace TontiLagunaPrime;

class File {
    public static function test(string $stringToWrite) {

        // Путь к файлу, в который нужно записать строку
        $filePath = "example.txt";

        // Записываем строку в файл
        file_put_contents($filePath, $stringToWrite);

        // Проверяем успешность операции записи
        if (file_exists($filePath)) {
            echo "Строка успешно записана в файл.";
        } else {
            echo "Ошибка при записи строки в файл.";
        }
    }
}