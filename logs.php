<?php
$output = shell_exec('sudo /usr/bin/tail -n 300 /var/log/svxlink | grep -v "Distortion detected"');

if ($output) {
    echo nl2br(htmlspecialchars($output));
} else {
    echo "Brak danych lub problem z uprawnieniami (sudo).";
}
?>