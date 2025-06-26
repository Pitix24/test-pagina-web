<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Bus;
use App\Models\Project; // Asegúrate de importar el modelo Project
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Book = Book::orderBy('id', 'DESC')->get();
        return view('Book.Book', compact('Book'));
    }
    public function indexPublic()
    {
        $Book = Book::all();
        $projects =Project::all(); // Obtener todos los proyectos
        return view('Book.BookPublic', compact('Book', 'projects'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Book = Book::orderBy('id', 'DESC')->get();
        return view('Book.Booktable', compact('Book'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePublic(Request $request)
    {



try {
    Log::info('📩 Iniciando proceso de reclamo para el correo: ' . $request->email);

    $Book_one = Book::where('email', '=', $request->email)->where('state', '<>', 'Finalizado')->first();

    // if ($Book_one) {
    //     Log::info('🟡 Ya existe un reclamo en curso para este correo: ' . $request->email);
    //     return $Book_one;
    // } else {
        $Book = new Book();
        $Book->firstname = $request->firstname;
        $Book->lastname = $request->lastname;
        $Book->names = $request->names;
        $Book->address = $request->address;
        $Book->document_type = $request->document_type;
        $Book->document_number = $request->document_number;
        $Book->phone = $request->code_country . $request->phone;
        $Book->email = $request->email;
        $Book->claim_type = $request->claim_type;
        $Book->claimed_amount = $request->claimed_amount;
        $Book->currency_type = $request->currency_type;
        $Book->office_address = $request->office_address;
        $Book->product_or_service_description = $request->product_or_service_description;
        $Book->complaint_type = $request->complaint_type;
        $Book->complaint_details = $request->complaint_details;
        $Book->complaint_request = $request->complaint_request;
        $Book->project = $request->project; // Asignar el proyecto seleccionado
        $Book->manzana_lote = $request->manzana_lote; // As
        $Book->state = 'Pendiente';
        $Book->save();

        $Book->ticket = 'TCK-' . str_pad($Book->id, 6, '0', STR_PAD_LEFT);
        $Book->save();

        Log::info('✅ Reclamo guardado. Intentando enviar correo a: ' . $Book->email);

        // Mail::send('email.book-confirmation', [
        //     'book' => $Book
        // ], function ($message) use ($Book) {
        //     $message->to($Book->email)
        //             ->subject('📄 Confirmación de Reclamo N.º ' . $Book->ticket)
        //             ->cc('reclamacionesweb@aybarsac.com')
        //             ->from('notificaciones@aybarcorp.com', 'Aybar Corp');
        // });
         Bus::dispatch(fn() => $this->notify($Book->id));
        Log::info('📬 Correo enviado correctamente a: ' . $Book->email);

        return $Book;
  //  }
} catch (\Exception $e) {
    Log::error('🔥 Error en el proceso de reclamo: ' . $e->getMessage());
    return 'Error al enviar el correo: ' . $e->getMessage();
}

        // Guardar en la base de datos
    }

    // // Ejecutar en segundo plano la notificación a informes
    // Bus::dispatch(fn() => $this->notify($Book->id));
    /**
     * Display the specified resource.
     */
    public function notify($id)
    {
        try {
            // Obtener el registro del libro de reclamaciones
            $Book = Book::findOrFail($id);

            // Enviar la notificación a informes
                 Mail::send('email.book-confirmation', [
            'book' => $Book
        ], function ($message) use ($Book) {
            $message->to($Book->email)
                    ->subject('📄 Confirmación de Reclamo N.º ' . $Book->ticket)
                    ->cc('reclamacionesweb@aybarsac.com')
                    ->from('notificaciones@aybarcorp.com', 'Aybar Corp');
        });

            return response()->json(['message' => 'Notificación enviada a informes'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al enviar el correo: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $Book = Book::find($request->id);
        return $Book;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Book = Book::find($request->id);
        $Book->state = $request->state;
        $Book->message = $request->message;

        $email = $Book->email;
        if ($request->file('file_1') != null) {
            $Book->file_1 = fileStore($request->file('file_1'), 'resource');
        }
        if ($request->file('file_2') != null) {
            $Book->file_2 = fileStore($request->file('file_2'), 'resource');
        }
        Mail::raw(
            "Estimado/a $Book->name,

        📩 $Book->message.

        🎟️ *Número de Ticket:* $Book->ticket
        🎟️ *Estado:* $Book->state

        📎
        " .
                (!empty($Book->file_1) ? env('APP_URL') . asset('resource/' . $Book->file_1) : '') .
                "
        " .
                (!empty($Book->file_2) ? env('APP_URL') . asset('resource/' . $Book->file_2) : '') .
                "

        Atentamente,
        El equipo de Aybar Corp",
            function ($message) use ($email) {
                $message->to($email)->subject('Revisión de Reclamo - Aybar Corp')->cc('reclamacionesweb@aybarsac.com')->from('notificaciones@aybarcorp.com', 'Aybar Corp');
            },
        );

        $Book->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $Book = Book::find($request->id);
        return $Book->delete();
    }
}
