<?php
$dir     = __DIR__;
$docRoot = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']));
$dirUrl  = str_replace('\\', '/', realpath($dir));
$baseUrl = str_replace($docRoot, '', $dirUrl);  // 得到 /子目录 形式

$files = scandir($dir);

echo "<ol>";
foreach ($files as $entry) {
    if ($entry === '.' || $entry === '..') continue;
    if ($entry === basename(__FILE__)) continue;

    $full = $dir . DIRECTORY_SEPARATOR . $entry;
    if (!is_file($full)) continue;

    $url  = $baseUrl . '/' . rawurlencode($entry);
    $text = htmlspecialchars($entry, ENT_QUOTES, 'UTF-8');

    echo "<li><a href=\"{$url}\">{$text}</a></li>";
}
echo "</ol>";
?>