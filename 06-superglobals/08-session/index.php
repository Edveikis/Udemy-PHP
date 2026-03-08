<?php

session_start();

$_SESSION['username'] = 'JohnDoe';

var_dump($_SESSION);