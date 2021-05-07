<?php
namespace Core;

class Router
{
	//private $routes;
	
	public function getTrack($routes, $uri) {
		foreach ($routes as $route) {
			$pattern = $this->createPattern($route->path);
			if (preg_match($pattern, $uri, $params)) {
			$params = $this->clearParams($params);
			return new Track($route->controller, $route->action, $params)
		}
	}
	return new Track ('error', 'notFound');
	}
	
	private function createPattern($path) {
		return '#^' . preg_replace('#/:([^/]+)#', '/(?<$1>[^/]+)', $path) . '?/$#';
	}
	
	private function clearParams($params) {
		$result = [];
		foreach ($params as $k => $v) {
			if (!is_int($k)) {
				$result[$k] = $v;
			}
		}
		return $result;
	}
}