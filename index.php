<?php
/**
 * Archivo principal de la API de Tareas.
 *
 * Este archivo inicializa el controlador y simula algunas operaciones.
 *
 * @author Antigravity
 * @license MIT
 */

require_once 'src/Task.php';
require_once 'src/TaskController.php';

use AppControllersTaskController;

$controller = new TaskController();

$controller->addTask("Aprender PHP");
$controller->addTask("Documentar con PHPDocumentor");

$tasks = $controller->getAllTasks();

header('Content-Type: application/json');
echo json_encode($tasks);
