$('#guardar').on('click',function(){
	// alert('prueba');
	
	guardaryeditar();
 })
 
 function guardaryeditar(e)
 {
	
	e.preventDefault();//No se activará la acción predeterminada del evento
	//$("#guardar").prop("disabled",true);
	if ("#formulario" == "") {
		alert("ojoooo");
	 }
	 var formData = new FormData($("#formulario")[0]);
	
	 console.log(formData) 
	
	 $.ajax({
		 url: "http://localhost/proyectofinal/controller/usuario.php?op=Create",
		 type: "POST",
		 data: formData,
		 contentType: false,
		 processData: false,
    
		 success: function(datos)
		 {                    
			  /* bootbox.alert(datos);	          
			   mostrarform(false);
			   tabla.ajax.reload();*/
			   alert("exitooo")
		 }
 
	 });
	 
 }

 
 