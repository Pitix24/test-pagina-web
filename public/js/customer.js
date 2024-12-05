function CustomerCreate() {

    axios({
            method: 'post',
            url: 'CustomerCreate',
         //   data: formData,
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


        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
function CustomerStore() {
    var formData = new FormData(document.getElementById("Customer"));
    axios({
            method: 'post',
            url: 'CustomerStore',
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
                url: "CustomerDestroy",
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
function CustomerImportGoogle() {

    var formData = new FormData(document.getElementById("Customer"));
        formData.append("id_sheet", document.getElementById("id_sheet").value);
        formData.append("range", document.getElementById("range").value);
        axios({
                method: 'post',
                url: "CustomerImportGoogle",
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
              alert('Importado Correctamente');
              window.location.reload();
            })
            .catch(function(response) {
                //handle error
              //  console.log(response);
              alert('Ocurrió un error al importar, verifíque los datos');
            });

}
function CustomerEdit(id) {
    var formData = new FormData(document.getElementById("Customer"));
    formData.append("id", id);
    axios({
            method: 'post',
            url: 'CustomerEdit',
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

            if(response.data["photo"]!=null){

                Customer.fotografia.src ="imageCustomers/"+ response.data["photo"];
            }
            else{
                Customer.fotografia.src ="https://placehold.co/150";
            }
            Customer.email.value = response.data["email"];
            Customer.cellphone.value = response.data["cellphone"];


            if (response.data["sex"]=="M") {
                document.getElementById('M').checked=true;
            }
            else{
                document.getElementById('F').checked=true;
            }
         var datebirth =  response.data["datebirth"];
         Customer.month.value  = parseInt(datebirth.substr(5,2)) ;
         Customer.day.value  = parseInt(datebirth.substr(8,2)) ;
         Customer.year.value  = parseInt(datebirth.substr(0,4)) ;

         Customer.role.value=    response.data["roles_"][0]["name"];



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
            url: 'CustomerUpdate',
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

function CustomerShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'CustomerShow',
            data: formData,
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel
                 datatable_load();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}



function CustomerUpdateProfile() {
   
    var formData = new FormData(document.getElementById("Customer"));
    axios({
            method: 'post',
            url: 'CustomerUpdateProfile',
            data: formData,
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data;
         alert('Modificado correctamente');
         window.location.reload();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}


function CustomerRoleStore() {
    var formData = new FormData(document.getElementById("Customer_role"));
    axios({
            method: 'post',
            url: 'CustomerRoleStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent_detail");
            contentdiv.innerHTML = response.data;
            CustomerCreate();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
function CustomerRoleEdit(id) {
    var formData = new FormData(document.getElementById("Customer_role"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'CustomerRoleEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent_detail");
            contentdiv.innerHTML = response.data;
            Customer_role.id.value=id;
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
function CustomerRoleDestroy(role_name,id) {
    if(confirm("¿Quieres eliminar este registro?")){
        var formData = new FormData(document.getElementById("Customer_role"));
        formData.append("id",id);
        formData.append("role_name",role_name);
        axios({
                method: 'post',
                url: 'CustomerRoleDestroy',
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(function(response) {
                //handle success
                var contentdiv = document.getElementById("mycontent_detail");
                contentdiv.innerHTML = response.data;
                //actualizamos la tabla
                CustomerCreate();
            })
            .catch(function(response) {
                //handle error
                console.log(response);
            });
    }


}

