<?php
include_once "src/views/header.php";
include_once "bootstrap.php";

print("<nav>");
$pages = $entityManager->getRepository('Models\Page')->findAll();
foreach ($pages as $s)
print("<a href='?p=" . $s->getId(). "'>" . $s->getTitle() . "</a>&nbsp&nbsp");
print("</nav>");

include_once "src/views/footer.php";
?>