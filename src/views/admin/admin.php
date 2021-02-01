<?php
include_once "src/views/header.php";
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

include_once "src/views/footer.php";
?>

<div class="logout"><a href="action=logout">Click here to logout</a></div>


