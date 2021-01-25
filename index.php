<?php
include_once "bootstrap.php";

$request = $_SERVER['REQUEST_URI'];
$rootUrl = "/sprint3";
$parentDir = dirname($_SERVER['REQUEST_URI'], 1);

switch ($request) {
    case $rootUrl . '/':
        require __DIR__ . '/src/views/user/index.php';
        break;
    case $rootUrl . '':
        require __DIR__ . '/src/views/user/index.php';
        break;
    case $rootUrl . '/admin':
        require __DIR__ . '/src/views/admin/login.php';
        break;
    case $rootUrl . '/addPage':
        require __DIR__ . '/src/views/admin/addPage.php';
        break;
    case $rootUrl . '/action=logout':
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['logged_in']);
        header("Location: $rootUrl/admin");
        break;
    case $_SESSION['logged_in'] == true:
        require __DIR__ . '/src/views/admin/admin.php';
        break;
    case isset($_GET['p']) and $_GET['p'] != "":
        require  __DIR__ . '/src/views/user/content.php';
        break;
    case isset($_POST['title']) and isset($_POST['content']):
        require __DIR__ . '/src/views/admin/admin.php';
        break;
    case isset($_GET['edit']):
        require __DIR__ . '/src/views/admin/editPage.php';
        break;
    case isset($_GET['delete']):
        $deletedPage = $entityManager->find('Models\Page', $_GET['delete']);
        $entityManager->remove($deletedPage);
        $entityManager->flush();
        header('Location: ' . $rootUrl . '/admin');
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/user/404.php';
        break;
}
