<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Aybar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para el botón flotante */
        #chatbot-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        #chatbot-button img {
            width: 30px;
            height: 30px;
        }

        /* Estilo para la ventana de chat */
        #chatbot-window {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 300px;
            height: 400px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            overflow: hidden;
        }

        #chatbot-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        #chat-box {
            flex: 1;
            padding: 10px;
            overflow-y: scroll;
            border-top: 1px solid #ddd;
        }

        #chat-input {
            display: flex;
            border-top: 1px solid #ddd;
        }

        #user-input {
            flex: 1;
            border: none;
            padding: 10px;
        }

        #send-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Botón flotante -->
    <div id="chatbot-button" onclick="toggleChat()">
        <img src="https://cdn-icons-png.flaticon.com/512/4712/4712101.png" alt="Chatbot">
    </div>

    <!-- Ventana de Chat -->
    <div id="chatbot-window">
        <div id="chatbot-header">Chatbot Aybar</div>
        <div id="chat-box">
            aaaaaaaaaaaaaaaaaaaaaaaaaaa
            <div><strong>Bot:</strong> Hola</div>
        </div>
        <div id="chat-input">
            <input type="text" id="user-input" placeholder="Escribe tu mensaje..." class="form-control" onkeydown="handleKeyPress(event)">
            <button id="send-button" onclick="sendMessage()">Enviar</button>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // Función para alternar la visibilidad de la ventana de chat
        function toggleChat() {
            const chatWindow = document.getElementById('chatbot-window');
            chatWindow.style.display = chatWindow.style.display === 'none' || chatWindow.style.display === '' ? 'flex' : 'none';
        }

        // Función para enviar mensajes al chatbot
        async function sendMessage() {
            const input = document.getElementById('user-input').value;
            const chatBox = document.getElementById('chat-box');

            if (input.trim() === '') return; // Evitar mensajes vacíos

            // Mostrar el mensaje del usuario en el chat
            chatBox.innerHTML += `<div><strong>Tú:</strong> ${input}</div>`;
            document.getElementById('user-input').value = ''; // Limpiar el campo de entrada

            try {
                const response = await axios.post('/chatPost', { message: input });
                const reply = response.data.reply;

                // Mostrar la respuesta del chatbot en el chat
                chatBox.innerHTML += `<div><strong>Bot:</strong> ${reply}</div>`;
            } catch (error) {
                chatBox.innerHTML += `<div><strong>Bot:</strong> Error al procesar la solicitud.</div>`;
            }

            // Desplazar el scroll hacia abajo automáticamente
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        // Función para manejar el evento de presionar Enter
        function handleKeyPress(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        }
    </script>
</body>
</html>
