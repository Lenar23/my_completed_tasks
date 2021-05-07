<?
namespace Core;

class View
{
public function render(Page $page) {
	return $this->renderLayout($page, $this->renderView());
}

private function renderLayout(Page $page, $content) {
	$layoutPath = $_SERVER['DOCUMENT_ROOT'] . "/project/layouts/{$page->layputs}.php";
    if (file_exists($layoutPath)) {
       ob_start();
	   $title = $page->title;
	   include $layoutPath;
	   return ob_get_clean();
	}		
}

private function renderView(Page $page) {
	$viewPath = $_SERVER['DOCUMENT_ROOT'] . "/project/config/{$page->view}.php";
    if (file_exists($viewPath)) {
        ob_start();
		extract($page->data); 
		include $viewPath;
		return ob_get_clean();
	}		
}
}	