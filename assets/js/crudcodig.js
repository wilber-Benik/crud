//alert("hola JS");
//$(

	//function(){
		//alert("hola jquery");
	
$(
	function(){
		$("body").append(
			$("<h1>").text("Hola DOM"),
			$("<button>").attr("id","btnHola").text("Saluda")
		);
			$("#btnHola").on("clik",function(){
				alert("Hola DOM");
			});
	}

);