<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="src\styles.css">
</header>
<h2 class="header">HEADER</h2>
</header>
<?php
include_once "bootstrap.php";
$parentDir = dirname($_SERVER['REQUEST_URI'], 1);
print("<nav>");
print("<a href='$parentDir/admin'>Admin</a>&nbsp&nbsp");
print("<a  target='_blank' href='$parentDir'>View website</a>&nbsp&nbsp");
print("<a href='action=logout'>Logout</a>&nbsp&nbsp");
print("</nav>");
print("<br>");
print("<br>");
print("<form action='' method='POST'>");
print("<label for='title'>Title:</label><br>");
print("<input required name='title' id='title' type='text'><br>");
print("<label for='content'>Content:</label><br>");
print("<textarea maxlength='4294967295' required id='content' name='content'></textarea><br><br>");
print("<input value='Create page' type='submit'>");
print("</form>");

if (isset($_POST['title']) and isset($_POST['content'])) {
    $newPage = new Models\Page();
    $newPage->setTitle($_POST['title']);
    $newPage->setContent($_POST['content']);
    $entityManager->persist($newPage);
    $entityManager->flush();
    header('Location: ' . $parentDir . '/admin');
}

?>
</footer>
<h2 class="header">FOOTER</h2>
</footer>

<div class="logout"><a href="action=logout">Click here to logout</a></div>