<?php

// -u <nome_usuario>
// -p <senha>
// depois do > é o nome do arquivo

exec('C:\xampp\mysql\bin\mysqldump -u root admin > bd_backup.sql');

// mysqldump
// C:\xampp\mysql\bin\mysqldump