<?php
session_start();
$_SESSION.destroy();
header("Location: pages/bejelentkezes.html");