<?php

namespace TontiLagunaPrime;

class TextSave implements Saver
{
    public function save(string $stringToWrite)
    {
        $filePath = "example.txt";

        // Проверяем существование файла
        if (!file_exists($filePath)) {
            // Если файл не существует, создаем его
            touch($filePath);
        }

        // Дописываем строку в файл, используя параметр FILE_APPEND
        file_put_contents($filePath, $stringToWrite . "\n", FILE_APPEND);

        // Проверяем успешность операции записи
        if (file_exists($filePath)) {
            return true;
        } else {
            return false;
        }
    }
}
