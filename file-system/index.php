<?php 
//Create directory
  // mkdir('test');
//Rename directory
  // rename('test', 'my_folder');
//Delete directory
  // rmdir('my_folder');
//Read files and folders inside directory
$files = scandir('./');
echo "<pre>";
var_dump($files);
echo "<pre>";
//file_get_contents, file_put_contents
// echo file_get_contents('lorem.txt');
file_put_contents('text.txt', 'hello new text');

//https://www.php.net/manual/en/book.filesystem.php
//file_exists
//is_dir
//filemtime
//filesize
//disk_free_space
//file
?>

<?php 
echo __DIR__."<br>";
echo __FILE__;
echo "<pre>";
var_dump(pathinfo(__FILE__));
var_dump(dirname(__FILE__));
echo "</pre>";



?>


<button>

  <a href="https://www.php.net/manual/en/book.filesystem.php" target="_blank">File system</a>

</button>