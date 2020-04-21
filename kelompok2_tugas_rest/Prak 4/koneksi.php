<?php
// Koneksi ke Database
$link = mysql_connect('localhost', 'root', 'mysql') or die('Could not
connect: ' . mysql_error());
mysql_select_db('book') or die('Could not select database');
