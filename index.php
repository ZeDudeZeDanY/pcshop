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

$app->get('/monitor', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM monitor');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

$app->get('/mouse', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM mouse');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

$app->get('/motherboard', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM motherboard');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

$app->get('/ram', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM ram');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

$app->get('/psu', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM psu');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

$app->get('/gpu', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM gpu');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

$app->get('/vendor_list', function (Request $request, Response $response, $args) use ($pdo){
    $stmt = $pdo->query('SELECT * FROM vendor_list');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader("Content-Type", "application/json");
    return $response;
});

//$app->get('/customer/{id}', function (Request $request, Response $response) use ($pdo) {
//    $route = $request->getAttribute('route');
//    $id = $route->getArgument('id');
//    return $id;
//});

//$app->get('/insert', function (Request $request, Response $response, $args) use ($pdo){
//    $pdo->query("INSERT INTO customer(fname, surname, phone, email) VALUES('Andrey', 'Otinov', '83221488228', 'otinovoleg@hubbabubba.com')");
//    $stmt = $pdo->query('SELECT * FROM customer');
//    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//    $response->getBody()->write(json_encode($data));
//    $response = $response->withHeader("Content-Type", "application/json");
//    return $response;
//});

$app->run();
