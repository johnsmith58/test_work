function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

$(document).ready(function(){

    var _parent = $(".attendence-container");
    var _parentcon = $(".confirm");
    var _parentcon1 = $(".container1");
    
    _parent.find(".add-ph-btn").click(function(){
        var phItem = _parent.find(".clonephonenum").clone().appendTo('.phone-container').removeClass('clonephonenum').css("display", "block");
        phItem.find('.del-btn').bind('click', function(){
            this.closest('.phone-item').remove();
        });
        phItem.find('.phone-number').bind('keyup', function(){
            var _this = this;
            $(this).closest('.phone-item').find('.err-phonenumber').text("Phone Number");
            
            var acceptChars = [ '+', '-', '#' ];
            var numberVal = $(this).val();
            $.each(numberVal.split(''), function(key, val){
                // var invalid =  _parent.closest('.err-phone').find('.err-phonenumber');
                if(parseInt(val) >= 0 && parseInt(val) <= 9 ){
                    $(this).closest('.phone-item').find('.err-phonenumber').text("format");

                } else if(acceptChars.indexOf(val) == -1) {
                   
                    // _parent.find('.err-phonenumber').text("invalid format!!");
                    $(_this).closest('.phone-item').find('.err-phonenumber').text("invaild format!!");
                    // _parent.find('.phone-number').addClass('error');
                    
                }
            });
        });
    });
    
      

    // _parent.find('.phone-item .del-btn').click(function(){
    //     alert("Delete");
    // });
      
    //validate chars
    // $("#test").keyup(function(event) {

    //     _parent.find('.err-phonenumber').text("Phone Number");
        
    //     var acceptChars = [ '+', '-', '#' ];
    //     var numberVal = $("#test").val();
    //     $.each(numberVal.split(''), function(key, val){
    //         if(parseInt(val) >= 0 && parseInt(val) <= 9 ){

    //         } else if(acceptChars.indexOf(val) == -1) {
    //             _parent.find('.err-phonenumber').text("invalid formart");
    //             _parent.find('.phone-number').addClass('error');
    //         }
    //     });

    // });

    $('#testk').on('keydown keyup', function(e) {
        var defineChars = [ 'a', 'b', 'c', 'd'];
        var defineVal = $("#testk").val();
        $.each(defineVal.split(''), function(key, val){
            // console.log(defineVal.split(''));
            if(defineChars.indexOf(val) == -1){
                console.log("no");
            }
        })
    });

   
   
    
    _parent.find(".btn-submit").click(function(){

        var name = _parent.find(".name").val();
        var phonenumber = _parent.find(".phone-number").val();
        var address = _parent.find(".address").val();
        var email = _parent.find(".email").val();
        
        
        if(name == ''){
            _parent.find('.err-name').text("not have!!");
            _parent.find('.name').addClass('error');
        }

        // if(phonenumber == ''){
        //     _parent.find('.err-phonenumber').text("not have!!");
        //     _parent.find('.phone-number').addClass('error');

        // }else if(phonenumber.length < 10) {
        //     _parent.find('.err-phonenumber').text("not much!!");
        // }

        if(email == ''){
            _parent.find('.err-email').text("not email format!!");
        } else if(!isEmail(email)) {
            _parent.find('.err-email').text("is invalid format");
            _parent.find('.email').addClass('error');
        }

        if(address == ''){
            _parent.find('.err-address').text("not have!!");
        }

        // check erro confirm
        // if(_parent.find('.input-data.error').length > 0) return false;
        
        
        // output resutl

        
        // var phit = _parent.find('.phone-container .input-data').attr('data-confirm').val();
        // console.log(phit);
        $(".container1 .attendence-container .input-data").each(function(key, val){
        
            _parentcon.find("." + $(val).attr('data-confirm')).text($(val).val());
           
        });

        $(".container1 .attendence-container .phone-item").each(function(key, val){
            
            if(!$(val).hasClass('clonephonenum')){
                var phNo = $(val).find('.ph-no').val();
                var phType = $(val).find('.ph-type').val();
                
                // if(phType === 0){
                //     console.log("kldfjg");
                // }
                // var checkPhType = function(){
                //     if(phType == 0){
                //         return "Home";
                //     }else{
                //         return "Work";
                //     };
                // };
                // if __phType__ == "__main__":
                
                
                // when one if condition has that is useful
                $('.phone-list').append(phNo + ' ( ' + ((phType == 0)? 'Home':'Work') + ' ) ' + "<br>");
            }
        });


        $(".container1").addClass('success');

    });
});