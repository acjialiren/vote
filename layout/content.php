<?php

$page = isset($_GET['p']) ? $_GET['p'] : 'results';

include("pages/$page.php");