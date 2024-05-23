<?php
  $nome = "Bonieky";

  $nomeCompleto = $nome; 
  $nomeCompleto .= isset($sobrenome) ? $sobrenome : "";
  $nomeCompleto .= $sobrenome ?? "";

  echo $nomeCompleto;