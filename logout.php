<?php
/**
 * Created by PhpStorm.
 * User: Najwa
 * Date: 4/26/2019
 * Time: 7:06 PM
 */
session_start();
session_destroy();
header('location:login.html');
