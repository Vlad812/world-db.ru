
    <style>

        h2 {
            color: #77490d;
        }

    </style>

    <h1>World DB - Userguide</h1>

    <h2>Введение</h2>

    <p>За основу приложения взята учебная база данных (Example Databases - world database)
        с официального сайта mysql (<a href="https://dev.mysql.com/doc/index-other.html" target="_blank">https://dev.mysql.com/doc/index-other.html </a>)

    <p>По сути приложение является графическим интерфейсом для просмотра данных. </p>

    <p><strong>! Данные в БД являются устаревшими !</strong></p>

    <h2>Возможности</h2>
    <ul>
        <li>ajax переключение режимов представления данных - Таблица / Карточки.</li>
        <li>возможность фильтрации данных (на страницах: "Страны" , "Города").</li>
        <li>ajax подгрузка списков для фильтров.</li>
        <li>ajax обработка фильтра.</li>
        <li>Пагинация.</li>
        <li>Выбор количества отображаемых данных.</li>
        <li>адаптивный дизайн.</li>
    </ul>

    <h2>Используемые технологии</h2>

    <p> Backend: <strong>PHP Фреймворк Kohana v3.3 / MySQL 5.6</strong></p>

    <p> Frontend:<strong> Bootstrap 3, JQuery 3.1.1</strong></p>

    <h2>Установка на локальную машину</h2>

    <p>Требования: PHP 5.6+ / MySQL 5.6</p>

    <p>Дамп БД: <strong>файл world_db.sql</strong></p>

    <p>Настройка соединения c БД: <strong>www/app/config/database.php</strong></p>

    <p>По умолчанию в настройках установлены: username = 'root', password = ' '</p>

    <h2>Обзор</h2>

    <p> Серверный код отвечающий за логику приложения находится в <strong>app/classes</strong></p>

    <p>js код приложения <strong>public/js/main.js</strong></p>

    <p> frontend библиотеки в public/assets</p>

