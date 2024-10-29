<?php
session_name('sesje');
session_start();
$_SESSION['user'] = 'THE TOWN INSIDE ME';
echo $_SESSION['user'];