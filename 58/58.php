<?php
	interface iFile
	{
		public function __construct($filePath);
		
		public function getPath(); // путь к файлу
		public function getDir();  // папка файла
		public function getName(); // имя файла
		public function getExt();  // расширение файла
		public function getSize(); // размер файла
		
		public function getText();          // получает текст файла
		public function setText($text);     // устанавливает текст файла
		public function appendText($text);  // добавляет текст в конец файла
		
		public function copy($copyPath);    // копирует файл
		public function delete();           // удаляет файл
		public function rename($newName);   // переименовывает файл
		public function replace($newPath);  // перемещает файл
	}
	
	class File
	{
		private $filePath;
		
		public function __construct($filePath) {
			
			$this->filePath = $filePath;
		}
		
		public function getPath() {
			return $this->filePath;
		}
		public function getDir() {
			preg_match_all('#/([a-zA-Z0-9._-]+)/[a-zA-Z0-9._-]+\.[a-z]{2,4}$#', $_SERVER['DOCUMENT_ROOT'] . '/php_oop_oldcode/58/' . $this->filePath, $matches);
			return $matches[1][0];
		}
		
		public function getName() {
			preg_match_all('#/([a-zA-Z0-9._-]+)\.[a-z]{2,4}$#', $_SERVER['DOCUMENT_ROOT'] . '/' . $this->filePath, $matches);
			return $matches[1][0];
		}
		
		public function getExt() {
			preg_match_all('#\.([a-z]{2,4})$#', $this->filePath, $matches);
			return $matches[1][0];
		}
		
		public function getSize() {
			return filesize($this->filePath); 
		}
		
		public function getText() {
            return file_get_contents($this->filePath);
		}	

        public function setText($text) {
            file_put_contents($this->filePath, $text);
		}

        public function appendText($text) {
			file_put_contents($this->filePath, $this->getText() . $text);
		}

        public function copy($copyPath) {
            copy($this->filePath, $copyPath);
		}	

        public function delete() {
            unlink($this->getName() . '.' . $this->getExt());
		}

        public function rename($newName) {
			
             rename($this->filePath, $newName);
		}

        public function replace($newPath) {
             rename($this->filePath, $newPath);
		}			
	}
	file_put_contents('test.txt', '123');
	//$filePath = $_SERVER['DOCUMENT_ROOT'] . ' /php_oop_oldcode/58/test.txt';
	$filePath = 'test.txt';
	$file = new File($filePath);
	
	echo $file->getPath();
	echo '<br>';
	echo $file->getDir();
	echo '<br>';
	echo $file->getName();
	echo '<br>';
	echo $file->getExt();
	echo '<br>';
	echo $file->getSize();
	echo '<br>';
	echo $file->getText();
	$file->setText('Lenar');
	echo '<br>';
	echo $file->getText();
	$file->appendText('kdjhngkjd');
	echo '<br>';
	echo $file->getText();
	//$file->delete();
	$file->copy('copy.txt');
	//$file->rename('test1.txt');
	$file->replace('1/test.txt');
?>