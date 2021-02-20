<?php
$str = "D'accordo!  e ora pippo dice \"ciao!\" ";
echo addslashes($str);
echo PHP_EOL . $str . PHP_EOL;


echo 'file_uploads = '.ini_get('file_uploads'). PHP_EOL;
echo 'upload_tmp_dir = '.ini_get('upload_tmp_dir'). PHP_EOL;
echo 'upload_max_filesize = '.ini_get('upload_max_filesize'). PHP_EOL;
echo 'max_file_uploads = '.ini_get('max_file_uploads'). PHP_EOL;
echo 'post_max_size = '.ini_get('post_max_size'). PHP_EOL;
echo 'memory_limit = '.ini_get('memory_limit'). PHP_EOL;




$filename = 'file_da_leggere.txt';
$file = @fopen($filename, 'r')
or exit("Impossibile aprire \"{$filename}\"");