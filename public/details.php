<?php

require_once __DIR__ . '/../config/twig.php';
$contactEmail = 'contactEmail';
echo $twig->render('details.html.twig', ['contactEmail' => $contactEmail]);