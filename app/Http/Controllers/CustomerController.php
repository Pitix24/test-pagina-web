<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Project;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Notifications\CustomerNotification;
class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Customer = Customer::orderBy('id','DESC')->get();
        $Project = Project::orderBy('id','DESC')->get();
        return view('Customer.Customer', compact('Customer',"Project"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Customer = Customer::orderBy('id','DESC')->get();
        return view('Customer.Customertable', compact('Customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Customer = new Customer;
        $Customer->firstname = $request->firstname;
        $Customer->lastname = $request->lastname;
        $Customer->names = $request->names;
        $Customer->dni = $request->dni;
        $Customer->message = $request->message;
        $Customer->project_id = $request->project_id;
        $Customer->cellphone = $request->cellphone;
        $Customer->save();
        return $this->create();
    }



public function storePublic(Request $request)
{
    $request->validate([
        'code_country' => 'required|string|max:5',
        'message' => 'nullable|string',
    ]);

    if (
        !$request->filled('names') && !$request->filled('names_2') ||
        !$request->filled('dni') && !$request->filled('dni_2') ||
        !$request->filled('project_id') && !$request->filled('project_id_2') ||
        !$request->filled('cellphone') && !$request->filled('cellphone_2')
    ) {
        return response()->json([
            'error' => 'Faltan datos obligatorios: nombres, DNI, proyecto o celular'
        ], 422);
    }

    $Customer = new Customer;

    $Customer->names = $request->input('names') ?? $request->input('names_2');
    $Customer->dni = $request->input('dni') ?? $request->input('dni_2');
    $Customer->project_id = $request->input('project_id') ?? $request->input('project_id_2');
    $cell = $request->input('cellphone') ?? $request->input('cellphone_2');
    $Customer->cellphone = $request->input('code_country') . $cell;
    $Customer->message = $request->input('message') ?? $request->input('message_2');

    // 🧾 Log de todos los datos recibidos
    Log::info('📝 Registro de nuevo cliente desde formulario público', [
        'names' => $Customer->names,
        'dni' => $Customer->dni,
        'project_id' => $Customer->project_id,
        'cellphone' => $Customer->cellphone,
        'message' => $Customer->message,
    ]);

    // 📨 Enviar correo con la vista HTML
    Mail::send('email.customer-notification', [
        'Customer' => $Customer
    ], function ($message) use ($Customer) {
        $message->to('webpageadmin@aybarcorp.com')
            ->cc('consultasweb@aybarsac.com')
            ->subject('🟢 Nuevo Cliente:  ME GUSTARÍA CONVERSAR CON UN ASESOR')
            ->from('webpageadmin@aybarcorp.com', env('APP_NAME'));
    });

    $Customer->save();

    return response()->json(['message' => '✅ Cliente registrado y notificado por correo']);
}

    public function ProjectList()
    {
       $Project = Project::orderBy('id','DESC')
       ->where("title","like","Nuevo Huaral")
       ->orWhere("title","like","Gran Valle")
       ->orWhere("title","like","Palmilla sur")->get()
       ;
        return $Project;
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $Customer = Customer::find($request->id);
        return $Customer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Customer =  Customer::find($request->id);
        $Customer->firstname = $request->firstname;
        $Customer->lastname = $request->lastname;
        $Customer->names = $request->names;
        $Customer->dni = $request->dni;
        $Customer->message = $request->message;
        $Customer->project_id = $request->project_id;
        $Customer->cellphone = $request->cellphone;
        $Customer->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Customer::find($request->id)->delete();
        return $this->create();
    }
}
