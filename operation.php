<?php



function add(int $nb1, int $nb2): int
{
    $resulat = $nb1 + $nb2;
    return $resulat;
};

function substract(int $nb1, int $nb2): int
{
    $resulat = $nb1 - $nb2;
    return $resulat;
};

function multiply(int $nb1, int $nb2): int
{
    $resulat = $nb1 * $nb2;
    return $resulat;
};

function divide(int $nb1, int $nb2): ?int
{
    $resulat = $nb1 / $nb2;
    return $resulat;
};

function modulo(int $nb1, int $nb2): ?int
{
    $resulat = $nb1 % $nb2;
    return $resulat;
};
