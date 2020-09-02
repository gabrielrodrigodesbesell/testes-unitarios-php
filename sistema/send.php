<?php
!is_dir('contatos')?mkdir('contatos'):null;
$file = fopen('contatos/'.md5(uniqid()).'.json', 'a');
fwrite($file, json_encode($_POST));
echo 'Enviado com sucesso';