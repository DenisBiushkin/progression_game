# Арифметическая Прогрессия - Консольная Игра

## Описание

Добро пожаловать в игру "Арифметическая прогрессия"! В этой игре вам предстоит угадать пропущенное число в последовательности чисел, образующей арифметическую прогрессию.

## Как установить 

### С помощью GIT

1. Клонируйте репозиторий:
   ```sh
   git clone https://github.com/DenisBiushkin/progression_game
   ```
2. Перейдите в папку проекта:
   ```sh
   cd progression_game
   ```
3. Установите зависимости через Composer:
   ```sh
   composer install
   ```
   
### С помощью сomposer

Установите одельный пакет 
   ```sh
   composer require denisbiushkin/progression
   ```

---
## Как запустить игру

Запустите dev сервер в терминале:
```sh
php -S localhost:3000 -t public
```

Передейдите по на http://localhost:3000/


---
## Правила игры

1. Вам будет показана последовательность из 10 чисел, образующая арифметическую прогрессию.
2. Одно случайное число в этой последовательности заменено на "..".
3. Ваша задача — ввести правильное число, которое должно стоять на месте "..".
4. Если ваш ответ верный, программа поздравит вас.
5. Если ответ неверный, программа покажет правильное число и всю прогрессию.

---

## Инормация
- [ссылка на packagist](https://packagist.org/packages/denisbiushkin/progression)
- [ссылка на Git](https://github.com/DenisBiushkin/progression_game)


## Требования
- PHP 8.0+
- Composer



