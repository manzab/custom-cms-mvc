<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="src\styles.css">

</header><h2 class="header">HEADER</h2></header>

<?php

include_once "bootstrap.php";
print("<nav>");
$pages = $entityManager->getRepository('Models\Page')->findAll();
foreach ($pages as $s)
print("<a href='?p=" . $s->getId(). "'>" . $s->getTitle() . "</a>&nbsp&nbsp");
print("</nav>");
?>

</footer><h2 class="header">FOOTER</h2></footer>
