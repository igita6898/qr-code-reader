<?php
include __DIR__.'/vendor/autoload.php';
$file_name = 'qr_record.txt';

if( !isset( $argv[1])) exit('请输入二维码文件所在目录'. PHP_EOL);
$dir = $argv[1]; // 要获取文件列表的目录路径

// 使用 scandir() 函数获取指定目录下的所有文件和子目录
$file_list = scandir($dir);
// 循环遍历文件列表并输出每个文件和子目录的名称
foreach($file_list as $file) {
    if($file != '.' && $file != '..') {
        echo '文件名: '. $file . PHP_EOL . '文件内容:' . PHP_EOL;
        $qrcode = new \Zxing\QrReader($dir . DIRECTORY_SEPARATOR . $file);  //图片路径
        $text = $qrcode->text(); //返回识别后的文本
        echo $text . PHP_EOL;
//        file_put_contents($file_name, $text . PHP_EOL,FILE_APPEND);
    }
}

