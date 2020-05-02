/* subiendo la foto del usuario */

$(".nuevaFoto").change(function(){
    var imagen = this.files[0];
    console.log(this.files);
    
    if(imagen["type"]!="image/png" && imagen['type']!="image/jpeg"){
        swal({
            title:"Error al subir la imagen",
            text:"la imagen debe estar en archivo JPG o PNG",
            type:"error",
            confirmButtonText:"Cerrar!"
        });
    }else if(imagen["size"]>4000000){
        swal({
            title:"Error al subir la imagen",
            text:"la imagen debe ser menor a 4 MB",
            type:"error",
            confirmButtonText:"Cerrar!"
        });
    }else{
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);
        
        $(datosImagen).on("load", function(event){
            $rutaImagen = event.target.result;
            $(".previsualizar").attr("src", $rutaImagen);
        })
    }
})