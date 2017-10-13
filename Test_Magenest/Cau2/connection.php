<?php
$link = mysqli_connect("localhost","root","","php_test2") or die ('Không thể kết nối tới database');
mysqli_query($link,"SET NAMES 'UTF8'");