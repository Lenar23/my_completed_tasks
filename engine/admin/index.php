<?php
include '../elems/init.php';

if(!empty($_SESSION['auth'])){
function showPageTable($link){
$query = "SELECT id, url, title, date FROM pages WHERE url!=404";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for($data = [];$row = mysqli_fetch_assoc($result);$data[] = $row);

$content = "<table>
<tr>
<th>title</th><th>url</th><th>date</th><th>edit</th><th>delete</th>
</tr>";
foreach($data as $page){
	$content .= "<tr>
<td>{$page['title']}</td><td>{$page['url']}</td><td>{$page['date']}</td><td><a href=\"edit.php?id={$page['id']}\">edit</a></td><td><a href=\"?del={$page['id']}\">delete</a></td>
	</tr>"; 
}
$content .= "</table>";

$title = 'admin main page';	
include 'elems/layout.php';

}

function deletePage($link){
  if(isset($_GET['del'])){
	 $del = $_GET['del'];
	 $query = "DELETE FROM pages WHERE id='$del'";
     mysqli_query($link, $query) or die(mysqli_error($link));
	 $_SESSION['message'] = ['text' => 'Page successfully deleted', 'status' => 'success'];
	 header('Location: /admin/'); die();
   }
}

deletePage($link);	
showPageTable($link);
}else{
 header('Location: /admin/login.php'); die();
}