<?php

    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\Configuracion\RolController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Configuracion\EntidadController;

    /*
    |--------------------------------------------------------------------------
    | Ruta principal
    |--------------------------------------------------------------------------
    */
    Route::redirect('/', '/login');



    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');



    /*
    |--------------------------------------------------------------------------
    | Perfil
    |--------------------------------------------------------------------------
    */
    Route::middleware('auth')->group(function () {

        Route::get('/profile', [ProfileController::class, 'edit'])
            ->name('profile.edit');

        Route::patch('/profile', [ProfileController::class, 'update'])
            ->name('profile.update');

        Route::delete('/profile', [ProfileController::class, 'destroy'])
            ->name('profile.destroy');

    });



    /*
    |--------------------------------------------------------------------------
    | Configuración
    |--------------------------------------------------------------------------
    */
    Route::middleware(['auth'])
        ->prefix('configuracion')
        ->name('configuracion.')
        ->group(function () {

            /*
            |--------------------------------------------------------------------------
            | Roles
            |--------------------------------------------------------------------------
            */

            Route::prefix('roles')
                ->name('roles.')
                ->group(function () {

                    // Dashboard
                    Route::get('/', [RolController::class, 'index'])
                        ->name('index');

                    // Listado
                    Route::get('/listar', [RolController::class, 'listar'])
                        ->name('listar');

                    // Crear
                    Route::get('/crear', [RolController::class, 'create'])
                        ->name('create');

                    // Guardar
                    Route::post('/', [RolController::class, 'store'])
                        ->name('store');

                    // Detalle
                    Route::get('/{rol}', [RolController::class, 'show'])
                        ->name('show');

                    // Editar
                    Route::get('/{rol}/editar', [RolController::class, 'edit'])
                        ->name('edit');

                    // Actualizar
                    Route::put('/{rol}', [RolController::class, 'update'])
                        ->name('update');

                });



            /*
            |--------------------------------------------------------------------------
            | ENTIDADES
            |--------------------------------------------------------------------------
            */

            Route::prefix('configuracion/entidades')
                ->name('entidades.')
                ->group(function () {

                    Route::get('/', [EntidadController::class, 'listar'])
                        ->name('listar');

                    Route::get('/crear', [EntidadController::class, 'create'])
                        ->name('create');

                    Route::post('/', [EntidadController::class, 'store'])
                        ->name('store');

                    Route::get('/{entidad}/detalle', [EntidadController::class, 'detalle'])
                        ->name('detalle');

                    Route::get('/{entidad}/editar', [EntidadController::class, 'edit'])
                        ->name('edit');

                    Route::put('/{entidad}', [EntidadController::class, 'update'])
                        ->name('update');

                    Route::get('/{entidad}/estado', [EntidadController::class, 'editarEstado'])
                        ->name('estado');

                    Route::patch('/{entidad}/estado', [EntidadController::class, 'actualizarEstado'])
                        ->name('actualizarEstado');

                });


        });

require __DIR__.'/auth.php';