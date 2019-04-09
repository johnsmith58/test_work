
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        .err-phone{
            color: red;
            background-color: blue;
        }
    </style>
</head>
<body>
    <div class="container1">
    <div class="attendence-container">
        <div class="container">
        <label class="err-name">Name</label>
        <input type="text" class="input-data name" data-confirm="name"><br>
        </div>

        <div class="container">
        <span class="err-phone"></span>
        <label class="err-phonenumber">Phone Number</label>
        <input type="text" class="input-data phone-number" id="test" data-confirm="phone-number"><br>
        </div>

        <div class="container">
        <label class="err-email">Email</label>
        <input type="text" class="input-data email" data-confirm="email"><br>
        </div>

        <div class="container">
        <label class="err-address">Address</label>
        <input type="text" class="input-data address" data-confirm="address"><br>
        </div>
        <input type="text" id="testk">
        <br>
        <button class="btn-submit">Submit</button>
        
    </div>
    <br><br><br><br>
    <div class="confirm">
        <div class="container">
            <label>Name</label>
            <label class="name"></label>
        </div>

        <div class="container">
            <label>Phone Number</label>
            <label class="phone-number"></label>
        </div>

        <div class="container">
            <label>Email</label>
            <label class="email"></label>
        </div>

        <div class="container">
            <label>Address</label>
            <label class="address"></label>
        </div>
    </div>
    </div>

    <script>

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
};


        $(document).ready(function(){

            var _parent = $(".attendence-container");
            var _parentcon = $(".confirm");
            var _parentcon1 = $(".container1");
           
            // $(function() {

            //     var keyCode = 
            //         {
            //             0 : '48',
            //             1 : '49',
            //             2 : '50',
            //             3 : '51',
            //             4 : '52',
            //             5 : '53',
            //             6 : '54',
            //             7 : '55',
            //             8 : '56',
            //             9 : '57'
            //             // + : '43',
            //             // - : '45'
            // };
            


                    
                
                $("#testk").keypress(function(e) {
                    if (e.which !== 0) {
                        console.log(e.keyCode);
                    }
                });

                // var regExp = /[a-z]/i;
                // $('#test').on('keydown keyup', function(e) {
                //     var value = String.fromCharCode(e.which) || e.key;

                //     // No letters
                //     if (regExp.test(value)) {
                //     e.preventDefault();
                //     return false;
                //     }
                //     });
                // });

                //key code
                $("#test").keyup(function(event) {
                    var availableKeys = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 43, 45]; // ".", ",", ";"
                    if (availableKeys.indexOf(event.which) != -1) {
                        event.preventDefault();
                        return false;
                    }else{
                        _parent.find('.err-phonenumber').text("invalid formart");
                    }
                });

              




                _parent.find(".btn-submit").click(function(){

                var name = _parent.find(".name").val();
                var phonenumber = _parent.find(".phone-number").val();
                var address = _parent.find(".address").val();
                var email = _parent.find(".email").val();
                
                
                if(name == ''){

                _parent.find('.err-name').text("not have!!");

                }

                if(phonenumber == ''){

                _parent.find('.err-phonenumber').text("not have!!");

                }else if(phonenumber.length < 10) {
                    _parent.find('.err-phonenumber').text("not much!!");
                }

                
               

                if(!validateEmail(email)){
                    _parent.find('.err-email').text("not email format!!");
                }

                if(address == ''){

                _parent.find('.err-address').text("not have!!");

                }

                $(".container1 .attendence-container .input-data").each(function(key, val){
                    _parentcon.find("." + $(val).attr('data-confirm')).text($(val).val());
                });

            });
            });
            
       
    </script>
</body>
</html>