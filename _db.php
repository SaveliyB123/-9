<?php
$host = "postgresql://render_postgres_host_user:nAsi7wc6sMC1F2F3uk5QNJg9BQqzpyCl@dpg-d0n2gl95pdvs7387t2rg-a/render_postgres_host";
$port = 5432;
$username = "render_postgres_host_user";
$password = "nAsi7wc6sMC1F2F3uk5QNJg9BQqzpyCl";
$database = "render_postgres_host";

try {
    $db = new PDO("pgsql:host=$host;port=$port;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
