@echo off
REM Script para instalar dependencias de Laravel
echo Instalando dependencias con Composer...
composer install --ignore-platform-reqs

echo Instalando dependencias de Node.js...
npm install

echo Ejecutando migraciones de base de datos...
php artisan migrate

echo ¡Instalación completada!
echo Ejecuta el siguiente comando para iniciar el servidor:
echo php artisan serve
pause
