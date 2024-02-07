import Dropzone from "dropzone";

Dropzone.autoDiscover = false;


const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage : "Sube la imagen",
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiples : false,
    init: function(){
        if(document.querySelector('[name="imagen"').value.trim()){
            const imagenProducto = {};
            imagenProducto.size = 1234;
            imagenProducto.name = document.querySelector('[name="imagen"]').value;
            this.options.addedfile.call(this,imagenProducto);
            this.options.thumbnail.call(this,imagenProducto,`/uploads/${imagenProducto.name}`);
        

            imagenProducto.previewElement.classList.add("dz-success","dz-complete");
        }

    },
});


dropzone.on("success",function(file,response){
    document.querySelector('[name="imagen"]').value = response.imagen;
});
dropzone.on("removedfile",function(){
    document.querySelector('[name="imagen]').value = "";
});