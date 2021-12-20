<?php

const host = "localhost";
const user = "root";
const password = "";
const db = "db_login";

$pdo = new PDO("mysql:dbname=".db."; host=".host,user,password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

