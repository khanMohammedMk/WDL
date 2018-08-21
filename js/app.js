
 $(function(){
 	$('#rollno').on('blur',function(){
 		if(!/(\d{2,3}((CO)|(DCO)|(EE)|(DEE)|(EX)|(DEX)|(ME)|(DME)|(CE)|(DCE)|(CES)|(DCES))\d{2,3})/i.test(this.value)){
 				alert("invalid rollno");
 				this.value="";
 				e.stopPropagation();
 				$(this).focus();
 		}

 		
 	});


 	$('#sname').on('blur',function(e){
 		if (/[^a-zA-Z ]/.test(e.key)) {
 			alert("invalid Name. Only alphabets are allowed");
 			this.value="";
 			$(this).focus();
 			return false;

 		}
 	});

 });


 	
 	