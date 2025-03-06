<?php
    $cookies = $_COOKIE['site'];
    unset($cookies['layout']);

    setcookie("site[color]", $cookies['color'], time() + (60 * 60 * 24 * 60), "/");
    setcookie("site[font]", $cookies['font'], time() + (60 * 60 * 24 * 60), "/");

    echo "Cookie 'layout' removed successfully!";
