# Laravel 13 Web Application Boilerplate

Este es un repositorio plantilla (Boilerplate) diseñado como estructura base para el desarrollo rápido de aplicaciones web. Cuenta con una arquitectura moderna, un panel de administración limpio y un sistema de control de accesos ya configurado.

## 🛠️ Stack Tecnológico

*   **Framework:** Laravel 13 (Requiere PHP 8.3+)
*   **Panel Administrativo:** AdminLTE 4
*   **Framework Frontend:** Bootstrap 5
*   **Generador de Código:** Ibex CRUD Generator
*   **Seguridad:** Sistema de Roles y Permisos (Spatie / Custom)

## 🚀 Requisitos Previos

Asegúrate de tener instalado en tu entorno local:
*   PHP >= 8.3
*   Composer
*   Node.js & NPM
*   Servidor de Base de Datos (SQLite3)

## 💻 Instalación y Configuración Local

Sigue estos pasos para clonar e inicializar el proyecto desde cero:

### 1. Clonar el repositorio
```bash
git clone <URL_DE_TU_REPOSITORIO> mi-nuevo-proyecto
cd mi-nuevo-proyecto
```

### 2. Instalar dependencias de PHP y JavaScript
```bash
composer install
npm install
```

### 3. Configurar variables de entorno
Copia el archivo de ejemplo y configura tus credenciales de base de datos:
```bash
cp .env.example .env
```
*Abre el archivo `.env` y edita las líneas `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD`.*

### 4. Generar la clave de la aplicación
```bash
php artisan key:generate
```

### 5. Ejecutar migraciones y Seeders
Crea las tablas base junto con los roles y usuarios por defecto:
```bash
php artisan migrate --seed
```

### 6. Compilar assets del Frontend
```bash
npm run dev
```

### 7. Iniciar el servidor local
```bash
php artisan serve
```
Accede a la aplicación a través de `http://127.0.0.1:8000`.

## 🗂️ Características Incluidas
*   **Autenticación Completa:** Login, registro y recuperación de contraseñas adaptado a AdminLTE 4.
*   **Middleware de Roles:** Rutas protegidas según el rol del usuario asignado.
*   **Vistas Base:** Layouts de Bootstrap 5 listos para usar y extender mediante componentes Blade.
*   **Generación de Módulos:** Comando listo de Ibex CRUD para acelerar el desarrollo de nuevos modelos.
