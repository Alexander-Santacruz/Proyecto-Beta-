# Instrucciones de Instalación - Proyecto Laravel

## Problema Detectado
El firewall de Avast está bloqueando las conexiones SSL de Composer, impidiendo descargar las dependencias.

## Soluciones

### Opción 1: Desabilitar Avast temporalmente (Recomendado)
1. Abre **Avast**
2. Busca la opción de **Firewall** o **Protección de Red**
3. **Desabilita temporalmente** el firewall
4. Ejecuta el script `install.bat`
5. Una vez completado, reactiva el firewall

### Opción 2: Excluir Composer del Firewall
1. Abre **Avast**
2. Ve a **Configuración** → **Firewall**
3. Busca **Excepciones** o **Aplicaciones permitidas**
4. Agrega `C:\Users\Personal\AppData\Local\Composer` a la lista
5. Ejecuta el script `install.bat`

### Opción 3: Instalación Manual
```powershell
cd c:\Users\Personal\Downloads\larav3223899-master\larav3223899-master

# Instalar dependencias de PHP
composer install --ignore-platform-reqs

# Instalar dependencias de Node.js
npm install

# Ejecutar servidor
php artisan serve
```

## Una vez Resuelto el Problema

### Para iniciar el servidor:
```bash
php artisan serve
```

El servidor estará disponible en: `http://localhost:8000`

### Para compilar assets (CSS/JS):
```bash
npm run dev
```

## Configuración de Base de Datos
Por defecto usa MySQL. Actualiza el archivo `.env` con tus credenciales:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

## Estado Actual
✅ Código corregido y subido a GitHub
✅ Archivo .env configurado
⏳ Pendiente: Instalar dependencias (resolver problema del firewall)

