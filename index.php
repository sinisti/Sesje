<?php
session_name('sesje');
session_start();
$_SESSION['user'] = 'test';
echo $_SESSION['user'];