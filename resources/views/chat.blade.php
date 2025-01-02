<div class="container my-5">
    <h1 class="text-center">Chatbot Aybar</h1>
    <div id="chat-box" style="height: 400px; overflow-y: scroll; border: 1px solid #ccc; padding: 10px;"></div>
    <textarea id="user-input" class="form-control mt-3" placeholder="Escribe tu mensaje..."></textarea>
    <button class="btn btn-primary mt-3" onclick="sendMessage()">Enviar</button>
</div>

<script src="{{asset('js/axios.min.js')}}"></script>
<script>
    async function sendMessage() {
        const input = document.getElementById('user-input').value;
        const chatBox = document.getElementById('chat-box');
        chatBox.innerHTML += `<div><strong>Tú:</strong> ${input}</div>`;

        try {
            const response = await axios.post('/chatPost', { message: input });
            const reply = response.data.reply;
            chatBox.innerHTML += `<div><strong>Bot:</strong> ${reply}</div>`;
        } catch (error) {
            chatBox.innerHTML += `<div><strong>Bot:</strong> Error al procesar la solicitud.</div>`;
        }

        document.getElementById('user-input').value = '';
    }
</script>
