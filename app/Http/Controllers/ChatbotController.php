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

        // Validar que el mensaje no esté vacío
        if (empty($userInput)) {
            return response()->json([
                'reply' => 'Por favor, ingresa un mensaje válido.',
            ], 400);
        }

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
                    'model' => 'ft:gpt-4o-mini-2024-07-18:personal::AlcZGD1v', // Especifica el modelo a usar
                    'temperature' => 1, // Respuestas consistentes
                    'messages' => [
                        [
                            "role" => "system",
                            "content" => "Eres un asistente especializado en cursos de programación. Responde únicamente con información relacionada a los cursos y sus precios."
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
            $reply = $result['choices'][0]['message']['content'] ?? 'No se obtuvo respuesta del modelo.';

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
