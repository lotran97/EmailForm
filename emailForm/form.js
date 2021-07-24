$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var confemail = $("#email2").val();
    var message = $("#msg").val();
 
    $.ajax({
        type: "POST",
        url: "process.php",
        data: "name=" + name + "&email=" + email + "$confirmation="+ confemail + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    document.getElementById('success').style.display = "block";
}











function validateForm()                                    
{ 


    var name = document.querySelector('#name');               
    var email = document.querySelector('#email');
    var confemail = document.querySelector('#email2');    
    var message = document.querySelector('#msg'); 
   
    if (name.value == "")                                  
    { 
        document.getElementById('errorname').innerHTML="Veuillez entrez un nom valide";  
        name.focus(); 
        return false; 
    }else{
        document.getElementById('errorname').innerHTML="";  
    }
       
    if (email.value == "")                                   
    { 
        document.getElementById('erroremail').innerHTML="Veuillez entrez une adresse mail valide"; 
        email.focus(); 
        return false; 
    }else{
        document.getElementById('erroremail').innerHTML="";  
    }

    if (email.value !== confemail.value)
    {
        document.getElementById('erroremail2').innerHTML="Les emails ne sont pas identiques";  
        confemail.focus();
        return false 
    }else{
        document.getElementById('erroremail2').innerHTML="";
    }
   
    if (message.value == "")                           
    {
        document.getElementById('errormsg').innerHTML="Veuillez entrez un message valide"; 
        message.focus(); 
        return false; 
    }else{
        document.getElementById('errormsg').innerHTML="";  
    }
   
    document.getElementById('success').style.display = "block";
    return true; 
    
}
