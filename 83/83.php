<?php

	class FileManipulator
	{
		public function create($filePath)
		{
			 file_put_contents($filePath, '111');    // создает файл
		}
		
		public function delete($filePath)
		{
			unlink($filePath);// удаляет файл
		}
		
		public function copy($filePath, $copyPath)
		{
			copy($filePath, $copyPath);// копирует файл
		}
		
		public function rename($filePath, $newName)
		{
			rename($filePath, $newName);// переименовывает файл
			                            // вторым параметром принимает новое имя файла (только имя, не путь)
		}
		
		public function replace($filePath, $newPath)
		{
			rename($filePath, $newPath);// перемещает файл
		}
		
		public function weigh($filePath)
		{
			return filesize($filePath);// узнает размер файла
		}
	}
	
	$file = new FileManipulator;
	$file->create('test.txt');
	$file->copy('test.txt', 'test2.txt')
?>
