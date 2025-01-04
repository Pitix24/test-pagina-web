<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat del Thread</title>
    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Agregar un token CSRF para la seguridad de Laravel -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Chat del Thread</h1>
    
    <form id="sendMessageForm">
        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" rows="4" cols="50" placeholder="Escribe tu mensaje aquí"></textarea>
        <br>
        <button type="submit">Enviar Mensaje</button>
    </form>

    <div id="messages">
        <h3>Mensajes del Thread:</h3>
        <ul id="messagesList">
            <!-- Aquí se cargarán los mensajes del thread -->
        </ul>
    </div>

    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Función para obtener los mensajes del thread
        function fetchMessages() {
            axios.get('/get-thread-messages', {
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Token CSRF para proteger la solicitud
                }
            })
            .then(response => {
                const messages = response.data.messages.data || []; // Obtén los mensajes del thread
                const messagesList = document.getElementById('messagesList');
                messagesList.innerHTML = ''; // Limpia la lista actual

                messages.forEach(msg => {
                    const li = document.createElement('li');
                    li.textContent = `${msg.role === 'user' ? 'Tú' : 'Bot'}: ${msg.content[0].text.value}`;
                    messagesList.appendChild(li);
                });
            })
            .catch(error => {
                console.error("Error al obtener los mensajes:", error.response?.data || error.message);
                alert("Hubo un error al cargar los mensajes del thread. Inténtalo de nuevo.");
            });
        }

        // Cargar mensajes al cargar la página
        window.onload = fetchMessages;

        // Función para enviar un mensaje
        document.getElementById('sendMessageForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevenir recarga de la página

            const message = document.getElementById('message').value;

            // Validar que el mensaje no esté vacío
            if (!message.trim()) {
                alert("Por favor, escribe un mensaje.");
                return;
            }

            // Enviar el mensaje al servidor
            axios.post('/send-message', { message: message }, {
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            })
            .then(response => {
                // Limpiar el campo de texto y recargar mensajes
                document.getElementById('message').value = '';
                fetchMessages();
            })
            .catch(error => {
                console.error("Error al enviar el mensaje:", error.response?.data || error.message);
                alert("Hubo un error al enviar tu mensaje. Inténtalo de nuevo.");
            });
        });
    </script>
</body>
</html>
