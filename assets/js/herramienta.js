var herramienta={};

herramienta.saluda=function(){
	alert("Hola, soy Herramienta");

};
herramienta.nombre="Toolcito";
herramienta.getNombre=function(){
	alert("Soy"+herramienta.nombre);

herramienta.input=function(lugar){
	$elemento=$("<div>").attr("class",
		"form-group").appeend(
	$("<label>").attr({"for":"_","class":
	"col-sm-2 control-label"}).text("Nombre")
	);
		$("body").empty().appeend($elemento);
}
};
//<script ....src="........... herramienta.js"><...>
//<script ....src="........... asincrono.js"><...>

//	$(



//		);
 