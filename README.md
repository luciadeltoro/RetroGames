# 🎮 RetroGames – Laravel
Creado por Lucia del Toro Lopez, Luis Capel Velázquez.

Proyecto realizado en **Laravel** que muestra una lista de videojuegos retro y el detalle de cada uno de ellos.  
Los datos se gestionan de forma **estática desde el controlador**, simulando una base de datos.

Repositorio base del proyecto:  
https://github.com/luciadeltoro/RetroGames

---

## 🧩 Funcionalidad del proyecto

- Listado general de videojuegos
- Página de detalle individual de cada juego
- Rutas definidas en `web.php`
- Controlador que gestiona los datos de los juegos
- Vistas creadas con **Blade** y herencia de plantillas

---

## 🛠️ Tecnologías utilizadas

- **Laravel**
- **PHP**
- **Blade**
- **HTML5**
- **CSS**
- **Vite**
- **Git y GitHub**

---

## 🚀 Ejecución del proyecto en local

### 🔹 Requisitos previos

- PHP 8 o superior
- Composer
- Node.js y npm
- Servidor local (Herd, XAMPP, Laragon…)

---

### 🔹 Pasos para ejecutar el proyecto

1️⃣ Clonar el repositorio

git clone https://github.com/luciadeltoro/RetroGames.git
cd RetroGames

2️⃣ Instalar dependencias de PHP

composer install


3️⃣ Instalar dependencias de Node

npm install


4️⃣ Crear el archivo de entorno

copy .env.example .env


5️⃣ Generar la clave de la aplicación

php artisan key:generate


6️⃣ Compilar los recursos con Vite

npm run build


(O en desarrollo:)

npm run dev


7️⃣ Ejecutar el servidor

php artisan serve
