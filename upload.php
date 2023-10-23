<?php
// 获取上传文件的信息
$fileInfo = $_FILES["file"];
$fileName = $fileInfo["name"];
$fileTmpName = $fileInfo["tmp_name"];
$fileSize = $fileInfo["size"];
$fileError = $fileInfo["error"];

// 将文件移动到目标目录
$uploadDir = "/var/www/html/uploads/"; // 目标目录
$uploadPath = $uploadDir . $fileName;
move_uploaded_file($fileTmpName, $uploadPath);

// 打印上传结果
echo "文件已成功上传到：" . $uploadPath;
?>