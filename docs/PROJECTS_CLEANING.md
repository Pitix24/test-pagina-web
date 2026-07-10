### Fase 1: Ejecución y Migración de Datos

**1. Sube las nuevas tablas a la base de datos:**
Ejecuta las migraciones que creamos (las que tienen `sub_projects` y `sub_project_docs`).

```bash
php artisan migrate

```

**2. Traslada la información:**
Ejecuta el comando de Artisan que programaste para leer las 20 columnas y convertirlas en filas dentro de la nueva tabla.

```bash
php artisan app:migrate-subprojects-data

```

**3. Verificación de seguridad (¡Muy importante!):**
Abre tu **DBeaver**, haz clic derecho sobre tu base de datos y selecciona *Actualizar* (Refresh).

* Abre la tabla `sub_projects` y revisa la pestaña de "Datos".
* Asegúrate de que los nombres, imágenes y fotos de los subproyectos estén ahí, correctamente asociados a su respectivo `project_id`.

---

### Fase 2: El Paso 5 (Limpieza profunda de la tabla `projects`)

Si la información ya está a salvo en la tabla nueva, es hora de eliminar las 60 columnas "basura" de la tabla original. Vamos a hacerlo al estilo Laravel.

**1. Crea una nueva migración para borrar las columnas:**

```bash
php artisan make:migration drop_subproject_columns_from_projects_table

```

**2. Agrega este código a la nueva migración:**
Vamos a usar un bucle `for` para no tener que escribir las 60 columnas a mano. Abre el archivo que se acaba de crear y déjalo así:

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Hacemos un bucle del 1 al 20 para borrar las 60 columnas
            $columnsToDrop = [];
            
            for ($i = 1; $i <= 20; $i++) {
                $columnsToDrop[] = "subproject_$i";
                $columnsToDrop[] = "subproject_image_$i";
                $columnsToDrop[] = "photo_$i";
            }

            // Eliminamos todas las columnas de una sola vez
            $table->dropColumn($columnsToDrop);
        });
    }

    public function down(): void
    {
        // En caso de que necesites revertir la migración (rollback)
        Schema::table('projects', function (Blueprint $table) {
            for ($i = 1; $i <= 20; $i++) {
                $table->string("subproject_$i")->nullable();
                $table->string("subproject_image_$i")->nullable();
                $table->string("photo_$i")->nullable();
            }
        });
    }
};

```

**3. Ejecuta la limpieza:**
Guarda el archivo y corre el comando de migración:

```bash
php artisan migrate

```

¡Y listo! Si vas a DBeaver y actualizas la tabla `projects`, verás que ha adelgazado drásticamente y ahora tienes un diseño relacional limpio.

---

Como ahora la estructura cambió, las vistas de tu página web (archivos `.blade.php`) o tus Controladores que antes llamaban a variables como `$project->subproject_1` van a fallar. ¿Quieres que te muestre cómo adaptar tu código Frontend/Controlador para iterar sobre la nueva relación `$project->subProjects`?
