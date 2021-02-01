<?php
include_once "src/views/header.php";
include_once "bootstrap.php";

$parentDir = dirname($_SERVER['REQUEST_URI'], 1);
$page = $entityManager->find('Models\Page', $_GET['edit']); // jei naudojame namespaceus
print("</pre><hr>");
print("<nav>");
print("<a href='$parentDir/admin'>Admin</a>&nbsp&nbsp");
print("<a  target='_blank' href='$parentDir'>View website</a>&nbsp&nbsp");
print("<a href='action=logout'>Logout</a>&nbsp&nbsp");
print("</nav>");
print("<br>");
print("<br>");
print("<form action='' method='POST'>");
print("<label for='title'>Title:</label><br>");
print("<input required name='newTitle' value='" . $page->getTitle() . "' id='title' type='text'><br>");
print("<label for='content'>Content:</label><br>");
print("<textarea maxlength='4294967295' required id='content' name='newContent'>" . $page->getContent() . "</textarea><br><br>");
print("<input value='Edit page' type='submit'>");
print("</form>");

if (isset($_POST['newTitle']) and isset($_POST['newContent'])) {
    $updated = $entityManager->find('Models\Page', $_GET['edit']);
    $updated->setTitle($_POST['newTitle']);
    $updated->setContent($_POST['newContent']);
    $entityManager->flush();
    header('Location: ' . $parentDir . '/admin');
}

include_once "src/views/footer.php";
?>

<div class="logout"><a href="action=logout">Click here to logout</a></div>