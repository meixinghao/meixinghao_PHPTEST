<html xmlns="http://www.w3.org/1999/html">
    <head><title>文件的上传与下载</title></head>
    <body>
        <form action="upload1.php" method="post" enctype="multipart/form-data">
            <!--设置上传文件的最大值，但是不能超过php配置文件中upload_max_filesize-->
            <input type="hidden" name="Max_FILE_SIZE" value="1000000">
            选择文件1：<input type="file" name="myfile[]"><br>
            选择文件2：<input type="file" name="myfile[]"><br>
            选择文件3：<input type="file" name="myfile[]"><br>
            <input type="submit" value="上传文件">
        </form>
    </body>
</html>

