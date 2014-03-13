<?php
// Here you can initialize variables that will for your tests

use Symfony\Component\Yaml\Parser;

$parsel = new Parser();
$parametr = $parsel->parse(file_get_contents(realpath('app/config/parameters.yml'))); 
$author = $parametr['parameters']['author'];
$author_mail = $parametr['parameters']['author_mail'];
