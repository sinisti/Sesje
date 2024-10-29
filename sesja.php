<?php
session_name('sesje');
session_start();
session_destroy();
echo $_SESSION['user'];