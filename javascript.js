$("#loginform").submit(function(event){
    event.preventDefault();
    var datapost = $(this).serializeArray();
    
    $.ajax({
        url: "login.php",
        type: "POST" ,
        data: datapost ,
        success: function(data){
            if(data == "success"){
                window.location ="duplicateindex.php";
            }else{
                $('#loginmessage').html(data);
            }
            },
                
                error:function(){
                    $("#loginmessage").html("<div class='alert alert-danger'>There was a problem with the Ajax call. </div>");
                }
        
    });
});