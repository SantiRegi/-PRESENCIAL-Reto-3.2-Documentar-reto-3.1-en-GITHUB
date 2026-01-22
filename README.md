# Reto 3.1: Documentación de Proyecto PHP

Este proyecto consiste en una pequeña API de gestión de tareas desarrollada en PHP, diseñada para demostrar el uso de estándares de documentación profesional mediante **PHPDoc** y la generación automática de documentación técnica con **phpDocumentor**.

## 📋 Características
- **Modelo de Datos**: Clase `Task` para representar tareas con ID, título y estado.
- **Controlador**: Clase `TaskController` para la lógica de gestión (añadir, listar y buscar tareas).
- **Documentación Estándar**: Uso de etiquetas PHPDoc para describir clases, métodos y parámetros.
- **Generación Automática**: Documentación técnica en HTML generada dinámicamente.

## 📁 Estructura del Proyecto
```text
.
├── src/
│   ├── Task.php            # Clase Modelo
│   └── TaskController.php  # Clase Controlador
├── docs/                   # Documentación HTML autogenerada
├── index.php               # Punto de entrada de la aplicación
└── README.md               # Documentación del repositorio
```

## 🚀 Instalación y Uso

### Requisitos
- PHP 7.4 o superior (recomendado XAMPP para entorno local).

### Pasos para ejecutar
1. Clona este repositorio o descarga los archivos.
2. Coloca los archivos en tu servidor local (ej. `htdocs` en XAMPP).
3. Accede a `index.php` a través del navegador para ver la respuesta JSON de la API.

## 📖 Documentación Técnica
La documentación detallada del proyecto se encuentra en la carpeta `/docs`. Para visualizarla:
1. Navega a la carpeta `docs/`.
2. Abre el archivo `index.html` en tu navegador preferido.

### PHPDocumentor
Para generar esta documentación se utilizó el siguiente comando (empleando el `.phar` oficial):
```bash
php phpDocumentor.phar -d src -t docs
```

## ✒️ Autor
- **SantiRegi** - [GitHub](https://github.com/SantiRegi)

---
*Este proyecto es parte del Reto 3.2 de la asignatura de DWES (Desarrollo Web en Entorno Servidor).*
