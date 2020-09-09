<?php
session_start();

require_once 'Subject.php';
require_once 'Observer.php';
$obj = unserialize($_SESSION['subject']);

$obj->updatePrices();


