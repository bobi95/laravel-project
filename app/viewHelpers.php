<?php

function isPage($path, $strict = false) {
    if (!$strict) {
        $path . '*';
    }
    return Request::is($path);
}

function isRoute($name) {
    return \Request::route()->getName() === $name;
}

function getOrDefault($arg, $default) {
    return isset($arg) ? $arg : $default;
}