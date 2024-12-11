
function CustomerStore() {
    var formData = new FormData(document.getElementById("Customer"));
    axios({
            method: 'post',
            url: '../CustomerStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel
              
            datatable_load();
                 alert('Registrado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function CustomerDestroy(id) {
    if (confirm("Esta seguro de Eliminar?")) {
        var formData = new FormData(document.getElementById("Customer"));
        formData.append("id", id);
        axios({
                method: 'post',
                url: "../../CustomerDestroy",
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(function(response) {
                //handle success
                var contentdiv = document.getElementById("mycontent");
                contentdiv.innerHTML = response.data;
                     //carga pdf- csv - excel
                     datatable_load();
              alert('Eliminado Correctamente');
            })
            .catch(function(response) {
                //handle error
                console.log(response);
            });
    }
}

function CustomerEdit(id) {
    var formData = new FormData(document.getElementById("Customer"));
    formData.append("id", id);
    axios({
            method: 'post',
            url: '../CustomerEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            Customer.id.value = response.data["id"];
            Customer.dni.value = response.data["dni"];
            Customer.firstname.value = response.data["firstname"];
            Customer.lastname.value = response.data["lastname"];
            Customer.names.value = response.data["names"];

           
          
            Customer.cellphone.value = response.data["cellphone"];

            Customer.message.value = response.data["message"];
           
         



        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function CustomerUpdate() {
    var formData = new FormData(document.getElementById("Customer"));
    axios({
            method: 'post',
            url: '../CustomerUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel
                 datatable_load();
                 alert('Modificado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

