<?php

function is_active(string $routeName)
{
    if (request()->segment(2) !== null && request()->segment(2) == $routeName) {
        return 'active';
    } else if (request()->segment(1) !== null && request()->segment(1) == $routeName && request()->segment(2) == null) {
        return 'active';
    } else {
        return '';
    }
}

function getYoutubeId($url)
{
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',$url, $match);
    if (isset($match[1])) {
        return $match[1];
    } else {
        return null;
    }
}

function slug(string $name)
{
   return strtolower(trim(str_replace(' ','_', $name))) ;
}

