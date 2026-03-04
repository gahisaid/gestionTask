<?php
header("Content-Type: application/json");
// Simulation base de données
$tasks = [
    ["id" => 1, "title" => "Préparer rapport"],
    ["id" => 2, "title" => "Réunion équipe"]
];
$method = $_SERVER['REQUEST_METHOD'];
if ($method === "GET") {
    echo json_encode($tasks);
}
if ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $newTask = [
        "id" => rand(100, 999),
        "title" => $data["title"]
    ];
    echo json_encode($newTask);
}
