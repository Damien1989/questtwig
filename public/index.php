<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require '../vendor/autoload.php';
require 'products.php';


$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);







