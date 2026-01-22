<?php
/**
 * Clase Task - Representa una tarea en el sistema.
 *
 * @package App\Models
 * @author Antigravity
 * @version 1.0.0
 */

namespace App\Models;

class Task {
    /** @var int ID único de la tarea */
    private $id;
    /** @var string Título de la tarea */
    private $title;
    /** @var bool Estado de la tarea (completada o no) */
    private $completed;

    /**
     * Constructor de la clase Task.
     *
     * @param int $id ID de la tarea.
     * @param string $title Título descriptivo.
     * @param bool $completed Estado inicial.
     */
    public function __construct($id, $title, $completed = false) {
        $this->id = $id;
        $this->title = $title;
        $this->completed = $completed;
    }

    /**
     * Obtiene el ID de la tarea.
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Establece el título de la tarea.
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Marca la tarea como completada.
     *
     * @return void
     */
    public function complete() {
        $this->completed = true;
    }

    /**
     * Verifica si la tarea está completada.
     *
     * @return bool
     */
    public function isCompleted() {
        return $this->completed;
    }
}
