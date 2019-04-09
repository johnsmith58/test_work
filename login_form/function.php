<script>

// ele = DOM
// e = pointer location
// Detect if Cursor Position inside Element
// Usage : detect-cursor="1"
function isInArea(ele, e){
    
    var xAxis = e.pageX;
    var yAxis = e.pageY;
    
    var eleTop = $(ele).offset().top;
    var eleLeft = $(ele).offset().left;

    var eleWidth =  $(ele).width();
    var eleHeight =  $(ele).height();

    if(xAxis > eleLeft && xAxis < eleLeft + eleWidth && yAxis > eleTop && yAxis < eleTop + eleHeight){
        return true;
    } else {
        return false;
    }
}

$(document).ready(function(){

    $(document).mousemove(function(e){

        var inArea = false;

        $("[detect-cursor='1']").each(function(key, val){
            if(isInArea(val, e)){
                inArea = true;
            }
        });

        if(!inArea){
            cursor_title.innerHTML = "";
        } else {
            cursor_title.innerHTML = "Please Check Your Password!";
        }
        
    });

});


//match input value
document.getElementById("myForm").submit = function() {Validate()};

		function Validate() {


	        var password = document.getElementById("password");
	        var confirmPassword = document.getElementById("confirm_password");
            //get name value
            var name = document.getElementById("name").value;
            //get password value
            var password1 = document.getElementById("password").value;
            // result for innerHTML
            var result = "<h1>Confirm Your Password.</h1>" + "Name =" + name + "<br>" + "Password =" + password1;
            
            //form input password & confirm_password check
	        if (password.value != confirmPassword.value) {
                //addClass
				password.classList.add("error");
                //removeClass with setTimeout
                setTimeout(RemoveClass, 1000);
                function RemoveClass() {
                    password.classList.remove("error");
            }
                }else{
                    form_input.innerHTML = result;
                }
                
            }

             // Usage : detect-cursor="1"
             function isInArea(ele, e){
                
                var xAxis = e.pageX;
                var yAxis = e.pageY;
                
                var eleTop = $(ele).offset().top;
                var eleLeft = $(ele).offset().left;

                var eleWidth =  $(ele).width();
                var eleHeight =  $(ele).height();

                if(xAxis > eleLeft && xAxis < eleLeft + eleWidth && yAxis > eleTop && yAxis < eleTop + eleHeight){
                    return true;
                } else {
                    return false;
                }
            }

            $(document).ready(function(){
                $(document).mousemove(function(e){
                    var inArea = false;

                    $("[detect-cursor='1']").each(function(key, val){
                        if(isInArea(val, e)){
                            inArea = true;
                            // document.title = 'In Red Block';
                        }
                        if(!inArea){
                        console.log("sdf");
                    } else {
                        document.title = 'Inside Blocks';
                    }
                    });
                })
            });

</script>