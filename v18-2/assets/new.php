<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>blog | edit </title>
</head>

<body>
<h1> 文件上传 </h1>
<!-- 注意与下面的区别 <form action="save.php" method="post"
enctype="application/x-www-form-urlencoded"  > -->
<form enctype="multipart/form-data" action="save.php" method="post">

  文件标题：<input name="title" type="text" />　　<br/>
  文件：<input name="upload" type="file" />           <br/>

  <input type="submit" value="上传文件" />
</form>

</body>

