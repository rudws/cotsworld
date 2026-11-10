<?php
require_once __DIR__ . '/functions.php';
$pageTitle = isset($pageTitle) && is_string($pageTitle) ? $pageTitle : 'Cotswold Aero Hire';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle) ?> | Cotswold Aero Hire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="index.php">Cotswold Aero Hire</a>
    </div>
</nav>
<main class="container py-5">