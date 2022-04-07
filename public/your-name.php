<?php

require '../app/Manager/RandomNicksManager.php';
$RandomNicksManager = new RandomNicksManager();
$keys = $RandomNicksManager->getRandom();
$message = 'YOUR NAME IS';

if(!empty($_POST['submit']))
{
    header("Refresh:0");
}
require 'template/your-name.tpl.php'; 

