<?php
$date = new \DateTime("first day of this month");
// Primeiro dia do mês
echo $date->format("d/m/Y")."<br />";
// Primeira segunda da semana do primeiro dia do mês
echo $date->modify( 'monday this week' )->format("d/m/Y")."<br />";
// Primeira sexta da semana do primeiro dia do mês
echo $date->modify( 'friday this week' )->format("d/m/Y")."<br />";

// Data de agora
$date = new \DateTime("now");
echo $date->format("d/m/Y")."<br />";
// Primeira segunda 
echo $date->modify( 'monday this week' )->format("d/m/Y")."<br />";
// Primeira sexta
echo $date->modify( 'friday this week' )->format("d/m/Y")."<br />";



?>