var as = document.getElementById("as");
if(as!=""){
    var as = document.getElementById("as").value;
    console.log(as);
    if(as<5 ){
        swal("Negative!", "Contact a doctor!", "error");
    }else if(as>5){
        swal("Positive!", "Contact a doctor!", "error");
    }else if(as==6){
        swal("Positive!", "Contact a doctor!", "error");
    }else if(as<7 ){
        swal("Positive!", "Contact a doctor!", "error");
    }
    
}
    
    
function validation(){
    var age = document.getElementById("age").value;
    var tempa = document.getElementById("tempa").value;
    if(age==""){
        swal("Calculation Failed!", "Please enter age!", "error");
        return false;
    }
    if(tempa==""){
        swal("Calculation Failed!", "Please enter temparater!", "error");
        return false;
    }
}


