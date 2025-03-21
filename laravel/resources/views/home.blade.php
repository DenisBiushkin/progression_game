<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/script.js') }}"></script>
    <body>

    <header>
        <h1>Игра Прогрессия</h1>
    </header>

    <div class="container">
        <section id="game-history">
            <h2>История Игр</h2>
            <button id="reload-games-button" class="btn">Обновить историю</button>
            <table id="games-table">
                <thead>
                <tr>
                    <th>Игрок</th>
                    <th>Дата игры</th>
                    <th>Пропущенное число</th>
                    <th>Результат</th>
                    <th>Ответ игрока</th>
                </tr>
                </thead>
                <tbody id="games-list"></tbody>
            </table>
        </section>

        <section id="game-details" style="display: none;">
            <h2>Детали игры</h2>
            <div id="game-details-content"></div>
        </section>

        <section id="play-game">
            <h2>Начать новую игру</h2>
            <label for="player_name">Имя игрока:</label>
            <input type="text" id="player_name" placeholder="Введите имя игрока" class="input-field">
            <button id="play-button" class="btn">Начать игру</button>
        </section>

        <section id="game-status">
            <h2>Статус Игры</h2>
            <div id="progression" class="progression"></div>
            <input type="number" id="answer-input" class="input-field" placeholder="Введите число для ответа">
            <button id="check-answer-button" class="btn">Проверить ответ</button>
            <p id="game-result"></p>
        </section>
    </div>

{{--    <script src="script.js"></script>--}}
    </body>
</html>

