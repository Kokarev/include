<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 19.09.2018
 * Time: 12:23
 */


$link = mysqli_connect('groot.nikstep.com.ua:81','grootssh', 'R2-D2BackendMMXXVIII', 'c28db');
//$link = mysqli_connect('localhost','grootssh', 'R2-D2BackendMMXXVIII', 'c28db');
if(mysqli_connect_errno())

{
    echo 'ошибка подключения к базе данных ('.mysqli_connect_errno() . '): '.mysqli_connect_error();
    exit();
}
