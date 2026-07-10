function ProjectStore() {
    var formData = new FormData(document.getElementById("Project"));
    axios({
        method: "post",
        url: "../ProjectStore",
        data: formData,
        headers: {
            "Content-Type": "multipart/form-data",
        },
    })
        .then(function (response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
            //carga pdf- csv - excel
            datatable_load();
            alert("Registrado Correctamente");
        })
        .catch(function (response) {
            //handle error
            console.log(response);
        });
}

function ProjectEdit(id) {
    var formData = new FormData(document.getElementById("Project"));
    formData.append("id", id);

    axios({
        method: "post",
        url: "../ProjectEdit",
        data: formData,
        headers: {
            "Content-Type": "multipart/form-data",
        },
    })
        .then(function (response) {
            const data = response.data || {};
            const subProjects = data.subProjects || [];

            // Asignación de datos al formulario
            Project.id.value = data["id"];
            Project.title.value = data["title"];
            Project.description.value = data["description"];
            Project.detail.value = data["detail"];
            Project.location.value = data["location"];
            Project.land.value = data["land"];
            Project.land_count.value = data["land_count"];

            Project.country.value = data["country"];

            // Manejo de la imagen principal
            if (data["image_1"] != null) {
                Project.foto.src = "../resource/" + data["image_1"];
            } else {
                Project.foto.src = "https://placehold.co/150";
            }
            // Manejo de mapas (map_1 y map_2)
            for (let i = 1; i <= 2; i++) {
                let mapField = "mapPreview_" + i;
                let mapInput = document.getElementById(mapField);
                if (data["map_" + i] != null) {
                    mapInput.src = "../resource/" + data["map_" + i];
                } else {
                    mapInput.src = "https://placehold.co/150";
                }
            }
            // Manejo de fotos adicionales desde subProjects
            for (let i = 1; i <= 20; i++) {
                let photoField = "photoPreview_" + i;
                let photoInput = document.getElementById(photoField);
                const subProject = subProjects[i - 1] || {};
                if (photoInput && subProject.photo != null) {
                    photoInput.src = "../resource/" + subProject.photo;
                } else {
                    if (photoInput) {
                        photoInput.src = "https://placehold.co/150";
                    }
                }
            }

            // Manejo de videos (video_1 a video_10)
            for (let i = 1; i <= 10; i++) {
                let videoField = "video_" + i;
                if (response.data[videoField] != null) {
                    Project[videoField].value = response.data[videoField];
                } else {
                    Project[videoField].value = "";
                }
            }

            for (let i = 1; i <= 20; i++) {
                const subProjectField = "subproject_" + i;
                const subProjectImageField = "subProjectImagePreview_" + i;
                const subProject = subProjects[i - 1] || {};
                const subProjectInput = Project[subProjectField];
                const subProjectImagePreview =
                    document.getElementById(subProjectImageField);

                if (subProjectInput) {
                    subProjectInput.value = subProject.name || "";
                }

                if (subProjectImagePreview) {
                    if (subProject.image != null) {
                        subProjectImagePreview.src =
                            "../resource/" + subProject.image;
                    } else {
                        subProjectImagePreview.src = "https://placehold.co/150";
                    }
                }
            }

            // Manejo de turistas y sus imágenes (tourist_1 a tourist_6 y tourist_image_1 a tourist_image_6)
            for (let i = 1; i <= 6; i++) {
                let touristField = "tourist_" + i;
                let touristImageField = "touristImagePreview_" + i;
                let touristImagePreview =
                    document.getElementById(touristImageField);

                if (data[touristField] != null) {
                    Project[touristField].value = data[touristField];
                } else {
                    Project[touristField].value = "";
                }

                if (data["tourist_image_" + i] != null) {
                    touristImagePreview.src =
                        "../resource/" + data["tourist_image_" + i];
                } else {
                    touristImagePreview.src = "https://placehold.co/150";
                }
            }
        })
        .catch(function (response) {
            // Manejo de errores
            console.log(response);
        });
}

function ProjectUpdate() {
    var formData = new FormData(document.getElementById("Project"));
    axios({
        method: "post",
        url: "../ProjectUpdate",
        data: formData,
        headers: {
            "Content-Type": "multipart/form-data",
        },
    })
        .then(function (response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
            //carga pdf- csv - excel
            datatable_load();
            alert("Modificado Correctamente");
        })
        .catch(function (response) {
            //handle error
            console.log(response);
        });
}

function ProjectDestroy(id) {
    if (confirm("¿Quieres eliminar este registro?")) {
        var formData = new FormData(document.getElementById("Project"));
        formData.append("id", id);
        axios({
            method: "post",
            url: "../ProjectDestroy",
            data: formData,
            headers: {
                "Content-Type": "multipart/form-data",
            },
        })
            .then(function (response) {
                //handle success
                var contentdiv = document.getElementById("mycontent");
                contentdiv.innerHTML = response.data;
                //carga pdf- csv - excel
                datatable_load();
                alert("Eliminado Correctamente");
            })
            .catch(function (response) {
                //handle error
                console.log(response);
            });
    }
}
