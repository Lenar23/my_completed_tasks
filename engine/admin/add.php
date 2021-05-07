<?php
include '../elems/init.php';

if(!empty($_SESSION['auth'])){
function getPage(){
	$title = 'admin add page';
	if(isset($_POST['title']) and isset($_POST['url']) and isset($_POST['text'])){
		$title = mysqli_real_escape_string($link, $_POST['title']);
		$url = mysqli_real_escape_string($link, $_POST['url']);
		$text = mysqli_real_escape_string($link, $_POST['text']);
	}
		else{
			$title = '';
			$url = '';
			$text = '';
		}
	  ob_start();
	  include 'elems/form.php';
	  $content = ob_get_clean();
include 'elems/layout.php';
}

function addPage($link){
	if(isset($_POST['title']) and isset($_POST['url']) and isset($_POST['text'])){
		$title = mysqli_real_escape_string($link, $_POST['title']);
		$url = mysqli_real_escape_string($link, $_POST['url']);
		$text = mysqli_real_escape_string($link, $_POST['text']);
		$time = date('Y-m-d H:i:s');
		$query = "SELECT COUNT(*) as count FROM pages WHERE url='$url'";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		$isPage = mysqli_fetch_assoc($result)['count'];
		if($isPage){
		 $_SESSION['message'] = ['text' => 'Page with this url exists', 'status' => 'error'];
		}else{
		 $query = "INSERT INTO pages (title, url, text, date) VALUES ('$title', '$url', '$text', '$time')";
		 mysqli_query($link, $query) or die(mysqli_error($link));
		 $_SESSION['message'] = ['text' => 'Page successfully added', 'status' => 'success'];
		 header('Location: /admin/'); die();
		}
	}else{
		return '';
	}
		
}
addPage($link);
getPage();
}else{
 header('Location: /admin/login.php'); die();
}