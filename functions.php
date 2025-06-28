<?php


function dd($name)
{
  var_dump($name);
  die();
}


function isURI($url)
{
  return $_SERVER['REQUEST_URI'] == $url;
}
