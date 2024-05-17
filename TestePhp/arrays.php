<?php 
  $bolo1 = [
    "açucar",
    "farinha de trigo",
    "ovo",
    "leite",
    "fermento em pó"];

  $bolo2 = [
    "vasilha",
    "agua morna"
    ...$bolo1;
    "corante";
  ];

  $lista1 = ["binieky", "pedro", "joão"];
  $lista2 = ["patricia", "fabricia", "melissa"];
  $lista3 = [...$lista1, ...$lista2];

  print_r($lista3);