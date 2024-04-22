<?php

if(isset($_GET['disconnect'])) administratorDisconnect();

if(isset($_GET['update'])&&ctype_digit($_GET['update'])){

    $id = (int) $_GET['update'];

