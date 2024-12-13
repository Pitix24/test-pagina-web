
function ImageStore() {
    var formData = new FormData(document.getElementById("Image"));
    axios({
            method: 'post',
            url: '../ImageStore',
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

function ImageEdit(id) {
    var formData = new FormData(document.getElementById("Image"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: '../ImageEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            image.id.value=response.data["id"];
            image.title.value=response.data["title"];
            image.description.value=response.data["description"];
            image.detail.value=response.data["detail"];
            image.fotografia.src ="../resource/"+ response.data["image_1"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function ImageUpdate() {
    var formData = new FormData(document.getElementById("Image"));
    axios({
            method: 'post',
            url: '../ImageUpdate',
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

function ImageDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("Image"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: '../ImageDestroy',
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

function ImageShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: '../ImageShow',
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
