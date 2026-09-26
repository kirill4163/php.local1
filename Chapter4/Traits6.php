<?php

// Трейт для хранения времени создания объекта
trait HasTimestamp
{
    // Время создания
    public DateTime $createdAt;

    // Конструктор трейта
    public function setCreatedAt(): void
    {
        $this->createdAt = new DateTime();
    }

    // Возвращает возраст объекта в секундах
    public function getAge(): int
    {
        return time() - $this->createdAt->getTimestamp();
    }
}

// Класс Post
class Post
{
    // Подключаем трейт
    use HasTimestamp;

    // Создаём пост
    public function __construct()
    {
        $this->setCreatedAt();
    }
}

// Создаём объект Post
$post = new Post();

// Выводим время создания
echo "Пост создан: " . $post->createdAt->format('Y-m-d H:i:s') . "<br>";

// Выводим возраст поста в секундах
echo "Возраст поста: " . $post->getAge() . " секунд";