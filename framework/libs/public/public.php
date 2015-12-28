<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-28
 * Time: 16:11
 * opendir  返回某个目录的资源句柄
 * readdir  返回某个资源句柄下的全部文件
 * is_file  判断是否文件
 * is_dir   判断是否为文件夹
 * closedir 关闭资源句柄
 */


function readdir($path){
    $handle = opendir($path);
}
