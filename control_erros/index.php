Dentro do arquivo php.ini

procurar por error_reporting

display_errors = On - É o parâmetro que diz que se vai mostrar os erros ou não, no ambiente de produção é recomendado alterar para Off.

log_erros = On - É para registrar esses erros em algum lugar, recomendado deixar On tanto em desenvolvimento como em produção.

error_log = 'caminho../' - É aonde está especificado que vai ficar o arquivo de log, é recomendado colocar esse arquivo fora da pasta public no ambiente de produção.

<?php

//Irá ativar os erros direto do arquivo PHP
ini_set("display_errors", "On");