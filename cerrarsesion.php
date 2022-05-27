<?php
session_start();
session_destroy();
header('Location:formValidar.php');