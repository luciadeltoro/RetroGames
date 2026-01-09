# RetroGame Hub
Trabajo realizado por Lucía del Toro López y Luis Capel Velázquez.
Proyecto Laravel que muestra un listado de videojuegos retro con fichas individuales y carátulas. Cada juego se presenta en tarjetas con imágenes, y al hacer clic se muestra la información completa del juego.

---

## Tecnologías utilizadas

- **Backend:** Laravel 12 (PHP 8+)
- **Frontend:** Blade, TailwindCSS, Vite
- **Base de datos:** SQLite por defecto (opcional MySQL)
- **Control de versiones:** Git
- **Gestión de dependencias:** Composer (PHP), npm (Node)

---

## Clonación del proyecto

Clonar el repositorio:

```bash
git clone https://github.com/luciadeltoro/RetroGames.git RetroGames
cd RetroGames
```

---

## Configuración del proyecto
### 1. Instalar dependencias PHP con Composer
```bash
composer install
```

### 2. Copiar .env.example a .env
```bash
cp .env.example .env
```

### 3. Crear una base de datos en MySQL e iniciar XAMPP
```bash
CREATE DATABASE IF NOT EXISTS retrogames;
```

### 4. Modificar .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307 //Poner el puerto que necesites
DB_DATABASE=retrogames
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Ejecutar migraciones
```bash
php artisan migrate
```

### 6. Generar clave de Laravel
```bash
php artisan key:generate
```

### 7. Instalar dependencias Node y Vite/Tailwind
```bash
npm install
```

### 8. Compilar assets con Vite
```bash
npm run build
```

### 9. Levantar servidor de Laravel
```bash
php artisan serve
```

### 10. En caso de que sea necesario limpiar caché
```bash
php artisan config:cache
php artisan route:cache
php artisan view:clear
```


