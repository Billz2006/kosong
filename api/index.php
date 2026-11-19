<?php
// Cek apakah PHP berjalan di Vercel
echo '<h2>PHP berjalan di Vercel</h2>';
echo 'Versi PHP: ' . PHP_VERSION . '<br>';
echo 'pdo_mysql: ' . (extension_loaded('pdo_mysql') ? 'ADA' : 'TIDAK ADA') . '<br>';
echo 'mysqli: ' . (extension_loaded('mysqli') ? 'ADA' : 'TIDAK ADA') . '<br><hr>';
phpinfo();
