<?php
/**
 * Created by PhpStorm.
 * User: stokesy
 * Date: 07/04/16
 * Time: 14:39
 */
/* This code maps the requested URL (Contained in $_SERVER['PATH_INFO']) to the right
ech instruction. It is a very very primitive router. */

switch($_SERVER['PATH_INFO']){
    case '/':

        echo 'This is the about page';

        break;

    default:

        echo 'Not Found';

}