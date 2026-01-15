<?php


$raw = file_get_contents("php://input");
$data = json_decode($raw, true);

if (!$data) {
  http_response_code(400);
  exit("Bad payload");
}

// jednoduchá ochrana
$time = date("c");
$ip   = $_SERVER["REMOTE_ADDR"] ?? "";
$url  = substr($data["url"] ?? "", 0, 300);
$ref  = substr($data["ref"] ?? "", 0, 300);
$ua   = substr($data["ua"] ?? "", 0, 200);

// složka logs/
$dir = __DIR__ . "/logs";
if (!is_dir($dir)) {
  mkdir($dir, 0775, true);
}

// soubor visits.csv
$file = $dir . "/visits.csv";

// zápis do CSV se zámkem
$fp = fopen($file, "a");
if ($fp) {
  flock($fp, LOCK_EX);

  // jeden řádek = jedna návštěva
  fputcsv($fp, [$time, $ip, $url, $ref, $ua], ";");

  flock($fp, LOCK_UN);
  fclose($fp);
}

http_response_code(204);
