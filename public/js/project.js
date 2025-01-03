
function ProjectStore() {
    var formData = new FormData(document.getElementById("Project"));
    axios({
            method: 'post',
            url: '../ProjectStore',
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

function ProjectEdit(id) {
    var formData = new FormData(document.getElementById("Project"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: '../ProjectEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           
            Project.id.value=response.data["id"];
            Project.title.value=response.data["title"];
            Project.description.value=response.data["description"];
            Project.detail.value=response.data["detail"];
            Project.location.value=response.data["location"];
            Project.country.value=response.data["country"];
            if(response.data["image_1"]!=null){

                Project.fotografia.src ="../resource/"+ response.data["image_1"];
            }
            else{
                Project.fotografia.src ="https://placehold.co/150";
            }

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function ProjectUpdate() {
    var formData = new FormData(document.getElementById("Project"));
    axios({
            method: 'post',
            url: '../ProjectUpdate',
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

function ProjectDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("Project"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: '../ProjectDestroy',
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
