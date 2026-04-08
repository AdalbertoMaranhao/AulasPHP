<?php
$nome = $_POST["nome"];

header('Location: /resposta.php?nome=' . $nome);
