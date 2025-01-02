<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chat'); // La vista del chatbot
    }

    public function chat(Request $request)
    {
        $apiKey = env('OPENAI_API_KEY'); // Obtiene la clave API desde el archivo .env
        $userInput = $request->input('message'); // Captura el mensaje del usuario desde la solicitud

        try {
            // Configuración del cliente HTTP
            $client = new Client();

            // Realizar la solicitud POST al endpoint de OpenAI
            $response = $client->post('https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => "Bearer $apiKey", // Clave API para autenticar
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'model' => 'gpt-4o-mini', // Especifica el modelo a usar
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => 'You are a helpful assistant.', // Configura el comportamiento general del asistente
                        ],
                        [
                            'role' => 'user',
                            'content' => $userInput, // Mensaje del usuario
                        ],
                    ],
                ],
            ]);

            // Decodificar la respuesta JSON
            $result = json_decode($response->getBody(), true);

            // Extraer el contenido generado por el modelo
            $reply = $result['choices'][0]['message']['content'] ?? 'No se obtuvo respuesta.';

            // Retornar la respuesta en formato JSON al cliente
            return response()->json([
                'reply' => $reply,
            ]);

        } catch (\Exception $e) {
            // Manejo de errores
            \Log::error('Error al procesar la solicitud: ' . $e->getMessage());

            return response()->json([
                'reply' => 'Error al procesar la solicitud: ' . $e->getMessage(),
            ], 500);
        }
    }
}
