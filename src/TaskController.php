<?php
/**
 * Clase TaskController - Gestiona las operaciones de las tareas.
 *
 * @package App\Controllers
 */

namespace App\Controllers;

use App\Models\Task;

class TaskController {
    /** @var Task[] Lista de tareas en memoria */
    private $tasks = [];

    /**
     * Añade una nueva tarea a la lista.
     *
     * @param string $title Título de la tarea.
     * @return Task La tarea creada.
     */
    public function addTask($title) {
        $id = count($this->tasks) + 1;
        $task = new Task($id, $title);
        $this->tasks[] = $task;
        return $task;
    }

    /**
     * Obtiene todas las tareas registradas.
     *
     * @return Task[]
     */
    public function getAllTasks() {
        return $this->tasks;
    }

    /**
     * Busca una tarea por su ID.
     *
     * @param int $id ID a buscar.
     * @return Task|null La tarea encontrada o null si no existe.
     */
    public function getTaskById($id) {
        foreach ($this->tasks as $task) {
            if ($task->getId() === $id) {
                return $task;
            }
        }
        return null;
    }
}
