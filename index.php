<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=shop', 'postgres', 'password123456');
$app = AppFactory::create();

$app->get('/customer', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM customer');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

$app->get('/cpu', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM cpu');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

$app->get('/ssd', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM ssd');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

$app->get('/hdd', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM hdd');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

//$app->get('/insert', function (Request $request, Response $response, $args) use ($pdo){
//    $pdo->query("INSERT INTO customer(fname, surname, phone, email) VALUES('Andrey', 'Otinov', '83221488228', 'otinovoleg@hubbabubba.com')");
//    $stmt = $pdo->query('SELECT * FROM customer');
//    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//    $response->getBody()->write(json_encode($data));
//    $response = $response->withHeader("Content-Type", "application/json");
//    return $response;
//});

$app->run();
