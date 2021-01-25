<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="src\styles.css">

</header><h2 class="header">HEADER</h2></header>

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
print("<h1>MANAGE PAGES</h1>");
print("<table>");
print("<thead>");
print("<th>Title</th>");
print("<th colspan='2'>Action</th>");
print("</thead>");
print("<tbody>");
$pages = $entityManager->getRepository('Models\Page')->findAll();
foreach ($pages as $s)
print("<tr>". "<td>" . $s->getTitle() . "</td>".  "<td><a href='?edit=". $s->getId()."'>Edit</a>&nbsp&nbsp". "<a href='?delete=".$s->getId()."'>Delete</a></td>". "</tr>");
print("</tbody>");
print("</table>");
print("<button><a href='addPage'>ADD PAGE<a/></button>");

?>
</footer><h2 class="header">FOOTER</h2></footer>

<div class="logout"><a href="action=logout">Click here to logout</a></div>


