#php qr decoder 
> php识别二维码, 不需要安装扩展
### 安装
```
composer install
composer require zxing/qr-reader
```

### 使用
```
include __DIR__.'/vendor/autoload.php';

$qrcode = new \Zxing\QrReader('./qr.png');  //图片路径
$text = $qrcode->text(); //返回识别后的文本
echo $text;
```
### 命令行批量识别目录下的二维码文件内容
```
php run.php qrcode_files_dir
```


### 需要
```
PHP >= 5.3
GD Library
```
