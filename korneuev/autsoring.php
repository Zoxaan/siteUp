<?php include "header.php"; ?>
<style>
    .company-info {
        padding: 50px 0;
    }

    .company-info h2 {
        color: #3b7a57; /* Цвет заголовка */
    }

    .company-info p {
        font-size: 18px;
        position: relative;
        padding-left: 20px;
    }

    .company-info p::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 10px;
        height: 10px;
        background-color: #00853d; /* Зеленый цвет */
        border-radius: 50%;
    }

    .company-info img {
        width: 35%;
        max-width: 100%;
        height: auto;
    }
</style>
<body>
<div class="container">
    <div class="company-info">
        <h2>Решения для офиса</h2>
        <p>
            Обслуживание компьютеров (рабочие станции, ноутбуки, моноблоки)</br>
            Обслуживание офисной техники (МФУ, принтеры, сканеры, телефонные аппараты, ИБП)</br>
            Обслуживание и администрирование программного обеспечения</br>
            Обслуживание серверного оборудования (серверы и системы хранения данных)</br>
            Администрирование серверного программного обеспечения и сервисов (ip телефония, электронная почта, терминальный доступ, виртуализация, резервное копирование, восстановление данных и т.д.)</br>
            Обслуживание сетевого оборудования (коммутаторы, маршрутизаторы, межсетевые экраны)</br>
        </p>
        <h2>Решения для торговых точек</h2>
        <p>
            Кассовые узлы</br>
            Весовое оборудование</br>
            Упаковщики</br>
            Сервера</br>
            Тонкие клиенты и рабочие станции</br>
            Видеонаблюдение</br>
            Системы контроля доступа</br>
            Беспроводные сети</br>
            Монтаж СКС</br>
            Пусконаладочные работы новых объектов предприятия</br>
            IP телефония</br>
        </p>
        <h2>Три преимущества ИТ аутсорсинга от «Принтэко»:</h2>

        <p>
            Большой штат квалифицированных специалистов в разных областях ИТ (администраторы баз данных, специалисты в области сетевых технологий, свой штат программистов и web-разработчиков).</br>
            ИТ аутсорсинг от «ПРИНТЭКО» это несколько линий технической поддержки работающей для вас 24/7 365 дней в году.</br>
            Наши цены приятно удивят вас, содержание такого штата квалифицированных специалистов достаточно дорого, цена ИТ аутсорсинга от «ПРИНТЭКО» примерно равна зарплате системного администратора, квалификации соответствующей сложности вашей ИТ инфраструктуры, только без отпусков и больничных.</br>
        </p>
        <div class="row mt-3">
            <div class="col-md-12 text-left">
                <a href="company.php" class="btn btn-success">Заказать услугу</a>
            </div>
        </div>
    </div>
    </div>

<?php include "foter.php"; ?>
