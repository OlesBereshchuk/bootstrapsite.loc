$( document ).ready(function() {
    /*AJAX FORM*/
    $('#myform').submit(function () {
        $.ajax({
            type:"POST",
            url:"../templates/form.php",
            data:$(this).serialize()
        }).done(function (data) {
            alert(data);
        });
        return false;
    });

    /*AJAX SEARCH*/

    $(function(){
        $("#search").keyup(function(){
            var search = $("#search").val();
            $.ajax({
                type: "POST",
                url: "gethint.php",
                data: {"search": search},
                cache: false,
                success: function(response){
                    $("#txtHint").html(response);
                }
            });
            return false;
        });
    });

    /*AJAX COMMENTS*/
    // $('#commentBtn').click( function () {
    //     var $commentblc = $('#commentBlock');
    //     if ($commentblc.css('display')!='block'){
    //         $commentblc.show();
    //     }else{
    //         $commentblc.hide();
    //     }
    // });



    $('#send').click(function (e) {
        var param1 = $('#author').val();
        var param2 = $('#message').val();
        if(param1 !='' && param2 != ''){
            $.ajax({
                url:"SendCom.php",
                method:"POST",
                data:{author:param1,message:param2},
                dataType:"JSON",
                success:function (data) {
                    if (data!="0"){
                        alert("Коментар додано!");
                    }else{
                        alert("Uvu!");
                    }
                }
            })
        }else{
            alert("Error!");
        }

    });

    $('#send').click(function () {
        var count = 1;
       $('#commentBlock').load("last-comments.php",{
           check:count
       });
    });
    
    $('.del').click(function (e) {
        var qustion = confirm('Удалить?');
        if(qustion == true) {
            e.preventDefault();
            var id_comment = $(this).attr('data-id');
            //var last_id = id_comment.charAt(16) + id_comment.charAt(17) + id_comment.charAt(18);
            if (id_comment != '') {
                $.ajax({
                    url: "SendCom.php",
                    method: "GET",
                    data: {id_del_com:id_comment},
                    dataType: "JSON",
                    success: function (answ_id) {
                        console.log(answ_id);
                    }
                })
            } else {
                alert("НАХУЙ!");
            }
        }else {
            console.log("ти пыдар!");
        }
    });




});