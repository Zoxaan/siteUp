<?php include "header.php"; ?>
<?php
// Подключение к базе данных
$servername = "localhost";
$username = "zoxan";
$password = "123";
$dbname = "textovarorg";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
    exit;
}

// Получение количества зарегистрированных пользователей
$stmt = $db->query("SELECT COUNT(*) AS total_users FROM users");
$total_users = $stmt->fetchColumn();

// Получение количества товаров
$stmt = $db->query("SELECT COUNT(*) AS total_products FROM products");
$total_products = $stmt->fetchColumn();

// Получение количества услуг
$stmt = $db->query("SELECT COUNT(*) AS total_services FROM services");
$total_services = $stmt->fetchColumn();
?>

<style>
    .dropdown-menu .dropdown-item {
        color: #770000;
    }
    .dropdown-menu .dropdown-item:hover {
        background-color: #f2f2f2;
    }
</style>

<body>
<div class="container">
    <h2 class="text-center mt-5">Admin Panel</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-auto">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Просмотр
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="view_users.php">Просмотреть зарегистрированных пользователей (<?php echo $total_users; ?>)</a></li>
                    <li><a class="dropdown-item" href="view_products.php">Просмотреть товары (<?php echo $total_products; ?>)</a></li>
                    <li><a class="dropdown-item" href="view_services.php">Просмотреть услуги (<?php echo $total_services; ?>)</a></li>
                </ul>
            </div>
        </div>

        <div class="col-auto">
            <div class="dropdown" style="margin-left: 10px;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Добавить
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="add_product.php">Добавить товар</a></li>
                    <li><a class="dropdown-item" href="add_service.php">Добавить услугу</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
