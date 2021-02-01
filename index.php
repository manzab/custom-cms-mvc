<?php
include_once "bootstrap.php";

function getPath($request)
{
    $path = explode('/', $request);
    return $path[count($path) - 1];
}

$request = $_SERVER['REQUEST_URI'];
$root_url = getPath($request);

switch ($request) {
    case $root_url == '/':
        require __DIR__ . '/src/views/user/index.php';
        break;
    case $root_url == '':
        require __DIR__ . '/src/views/user/index.php';
        break;
    case $root_url ==  'admin':
        require __DIR__ . '/src/views/admin/login.php';
        break;
    case $root_url ==  'addPage':
        require __DIR__ . '/src/views/admin/addPage.php';
        break;
    case $root_url ==  'action=logout':
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['logged_in']);
        require __DIR__ . '/src/views/admin/login.php';
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
        require __DIR__ . '/src/views/admin/login.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/user/404.php';
        break;
}
