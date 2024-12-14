<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\RegistryDetailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index']);








Auth::routes();

   //USUARIOS
   Route::get('/', [App\Http\Controllers\Home_demoController::class, 'home']);
   Route::get('nosotros', [App\Http\Controllers\Home_demoController::class, 'us']);
   Route::get('proyectos', [App\Http\Controllers\Home_demoController::class, 'project']);
   Route::get('blog', [App\Http\Controllers\Home_demoController::class, 'blog']);
   Route::get('contacto', [App\Http\Controllers\Home_demoController::class, 'contact']);


   Route::get('ProjectList', [App\Http\Controllers\CustomerController::class, 'ProjectList']);
   Route::post('CustomerStorePublic', [App\Http\Controllers\CustomerController::class, 'storePublic']);
   
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/////////////////////////////////////////




Route::group(['middleware' => ['role:Coordinación|Administrador|Socio Comercial']], function () {
    //
    Route::get('/sistema', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');




    Route::get('Coach', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');
    Route::get('/Coordinación', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');
    Route::get('/Administrador', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');

    
    Route::get('admin/clientes', [App\Http\Controllers\CustomerController::class, 'index']);
    Route::post('CustomerStore', [App\Http\Controllers\CustomerController::class, 'store']);
    Route::post('CustomerDestroy', [App\Http\Controllers\CustomerController::class, 'destroy']);
    Route::post('CustomerEdit', [App\Http\Controllers\CustomerController::class, 'edit']);
    Route::post('CustomerUpdate', [App\Http\Controllers\CustomerController::class, 'update']);

    Route::get('admin/imagenes', [App\Http\Controllers\ImageController::class, 'index']);
    Route::post('ImageStore', [App\Http\Controllers\ImageController::class, 'store']);
    Route::post('ImageDestroy', [App\Http\Controllers\ImageController::class, 'destroy']);
    Route::post('ImageEdit', [App\Http\Controllers\ImageController::class, 'edit']);
    Route::post('ImageUpdate', [App\Http\Controllers\ImageController::class, 'update']);
  

    Route::get('admin/secciones', [App\Http\Controllers\SectionController::class, 'index']);
    Route::post('SectionCreate', [App\Http\Controllers\SectionController::class, 'create']);
    Route::post('SectionStore', [App\Http\Controllers\SectionController::class, 'store']);
    Route::post('SectionDestroy', [App\Http\Controllers\SectionController::class, 'destroy']);
    Route::post('SectionEdit', [App\Http\Controllers\SectionController::class, 'edit']);
    Route::post('SectionUpdate', [App\Http\Controllers\SectionController::class, 'update']);
    Route::post('SectionUpdateDinamic', [App\Http\Controllers\SectionController::class, 'updateDinamic']);

    Route::get('admin/proyectos', [App\Http\Controllers\ProjectController::class, 'index']);
    Route::post('ProjectCreate', [App\Http\Controllers\ProjectController::class, 'create']);
    Route::post('ProjectStore', [App\Http\Controllers\ProjectController::class, 'store']);
    Route::post('ProjectDestroy', [App\Http\Controllers\ProjectController::class, 'destroy']);
    Route::post('ProjectEdit', [App\Http\Controllers\ProjectController::class, 'edit']);
    Route::post('ProjectUpdate', [App\Http\Controllers\ProjectController::class, 'update']);


   //ADMINISTRATIVO
    Route::get('home_edit/plantilla', [App\Http\Controllers\Home_edit::class, 'template']);
    Route::get('home_edit/inicio', [App\Http\Controllers\Home_edit::class, 'home']);
    Route::get('home_edit/nosotros', [App\Http\Controllers\Home_edit::class, 'us']);
    Route::get('home_edit/proyectos', [App\Http\Controllers\Home_edit::class, 'project']);
    Route::get('home_edit/blog', [App\Http\Controllers\Home_edit::class, 'blog']);
    Route::get('home_edit/contacto', [App\Http\Controllers\Home_edit::class, 'contact']);
 
 
    // Route::get('home_edit/plantilla', function () {
    //     return view('home_edit.template');
    // });
    // Route::get('home_edit/nosotros', function () {
    //     return view('home_edit.us');
    // });

    // Route::get('home_edit/proyectos', function () {
    //     return view('home_edit.project');
    // });
    // Route::get('home_edit/blog', function () {
    //     return view('home_edit.blog');
    // });
    // Route::get('home_edit/contacto', function () {
    //     return view('home_edit.contact');
    // });








    Route::resource("admin/blog", App\Http\Controllers\TopicController::class);
    Route::post('topicStore', [App\Http\Controllers\TopicController::class, 'store']);
    Route::post('topicEdit', [App\Http\Controllers\TopicController::class, 'edit']);
    Route::post('topicUpdate', [App\Http\Controllers\TopicController::class, 'update']);
    Route::post('topicDestroy', [App\Http\Controllers\TopicController::class, 'destroy']);
    Route::post('topicShow', [App\Http\Controllers\TopicController::class, 'show']);




    Route::get('blog/{blog_description}', [App\Http\Controllers\TopicController::class, 'report']);


    Route::resource("admin/categorias", App\Http\Controllers\CategoryController::class);
    Route::post('categoryStore', [App\Http\Controllers\CategoryController::class, 'store']);
    Route::post('categoryEdit', [App\Http\Controllers\CategoryController::class, 'edit']);
    Route::post('categoryUpdate', [App\Http\Controllers\CategoryController::class, 'update']);
    Route::post('categoryDestroy', [App\Http\Controllers\CategoryController::class, 'destroy']);
    Route::post('categoryShow', [App\Http\Controllers\CategoryController::class, 'show']);


    Route::post('category_productDestroy', "ProductController@category_productDestroy");
    Route::post('category_productStore', "ProductController@category_productStore");
    Route::post('category_productEdit', "ProductController@category_productEdit");



    Route::resource('admin/usuarios', App\Http\Controllers\UserController::class);
    Route::post('userCreate', 'UserController@create');
    Route::post('userStore', [App\Http\Controllers\UserController::class, 'store']);
    Route::post('userDestroy', [App\Http\Controllers\UserController::class, 'destroy']);
    Route::post('userEdit', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('userUpdate', [App\Http\Controllers\UserController::class, 'update']);
    Route::post('userShow', [App\Http\Controllers\UserController::class, 'show']);
    Route::post('userUpdateProfile', [App\Http\Controllers\UserController::class, 'updateProfile']);
    // Route::post('userImportGoogle', [App\Http\Controllers\UserController::class, 'importGoogle'])->name("userImportGoogle");

    Route::post('UserRoleUpdate', [App\Http\Controllers\UserRoleController::class, 'update']);
    Route::post('UserRoleEdit', [App\Http\Controllers\UserRoleController::class, 'edit']);


    Route::resource("admin/roles", App\Http\Controllers\RoleController::class);
    Route::post('RoleStore', [App\Http\Controllers\RoleController::class, 'store']);
    Route::post('RoleEdit', [App\Http\Controllers\RoleController::class, 'edit']);
    Route::post('RoleUpdate', [App\Http\Controllers\RoleController::class, 'update']);
    Route::post('RoleDestroy', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::post('RoleShow', [App\Http\Controllers\RoleController::class, 'show']);

    Route::post('RolePermissionUpdate', [App\Http\Controllers\RolePermissionController::class, 'update']);
    Route::post('RolePermissionEdit', [App\Http\Controllers\RolePermissionController::class, 'edit']);
   



    Route::resource("tipos", App\Http\Controllers\TypeController::class);
    Route::post('typeStore', [App\Http\Controllers\TypeController::class, 'store']);
    Route::post('typeEdit', [App\Http\Controllers\TypeController::class, 'edit']);
    Route::post('typeUpdate', [App\Http\Controllers\TypeController::class, 'update']);
    Route::post('typeDestroy', [App\Http\Controllers\TypeController::class, 'destroy']);
    Route::post('typeShow', [App\Http\Controllers\TypeController::class, 'show']);







    // Route::get('qrcode', function () {
//      return QrCode::size(300)->generate('https://certificados.socialdata-peru.com/');
//  });

});


//// social media
Route::post('socialMediaShare', [App\Http\Controllers\SocialMediaController::class, 'share']);

//


Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);


Route::get('/auth/google', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle']);

use App\Models\User;


Route::get('/auth/google/callback', function () {
    try {
        //create a user using socialite driver google
        $user = Socialite::driver('google')->user();
        // if the user exits, use that user and login
        $finduser = User::where('email', $user->email)->first();
        if ($finduser) {
            //if the user exists, login and show dashboard
            Auth::login($finduser);
            return redirect('/home');
        } else {
            //user is not yet created, so create first
            $newUser = User::create([
                'names' => $user->name,
                'firstname' => '',
                'lastname' => '',
                'email' => $user->email,
                'google_id' => $user->id,
                'password' => Hash::make('onedigital123')
            ]);

            $newUser->save();
            //login as the new user
            Auth::login($newUser);
            $newUser->assignRole('Socio Comercial');
            //
            //  $newUser->createToken(request()->device_name)->plainTextToken ;
            // go to the dashboard
            return redirect('/home');
        }
        //catch exceptions
    } catch (Exception $e) {
        dd($e->getMessage());
    }

});

Route::controller(App\Http\Controllers\UserController::class)->group(function () {
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');

    Route::post('userImportGoogle', 'importGoogle');


});




//////////////////////////////////////////////////



Route::get('login/microsoft', function () {
    return Socialite::driver('microsoft')->redirect();
});

Route::get('login/microsoft/callback', function () {
    try {
        //create a user using socialite driver google
        $user = Socialite::driver('microsoft')->user();
        // if the user exits, use that user and login
        $finduser = User::where('email', $user->email)->first();
        if ($finduser) {
            //if the user exists, login and show dashboard
            Auth::login($finduser);
            return redirect('/home');
        } else {
            //user is not yet created, so create first
            $newUser = User::create([
                'names' => $user->name,
                'firstname' => '',
                'lastname' => '',
                'email' => $user->email,
                'google_id' => $user->id,
                'password' => Hash::make('onedigital123')
            ]);

            $newUser->save();
            //login as the new user
            Auth::login($newUser);
            $newUser->assignRole('Socio Comercial');
            //
            //  $newUser->createToken(request()->device_name)->plainTextToken ;
            // go to the dashboard
            return redirect('/home');
        }
        //catch exceptions
    } catch (Exception $e) {
        dd($e->getMessage());
    }
});


Route::get('google_sheet', [\App\Http\Controllers\GoogleSheetController::class, 'index']);





//925680958 936158747