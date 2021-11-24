// Xu ly ajax ton tai ten dot khuyen mai
$(document).ready(function(){
    $("#name").keyup(function(){
        $.ajax({
            type: "POST",
            url: "../admin/QLKM/ajaxkm.php",
            data: {
                "name":$("#name").val(),
            },
            success: function(data) {
                $("#error").html(data);
                $("#error").css({"transform":"translateY(-10px)","color":"red"});
                if(data.length > 0) {
                    $("#addbtn").attr("disabled",true);
                    $("#addbtn").css({"cursor":"not-allowed","opacity":0.3});
                }
                else {
                    $("#addbtn").attr("disabled",false);
                    $("#addbtn").css({"cursor":"pointer","opacity":0.9});
                }
            }
        })
    });
// Xu ly ajax ton tai ten danh muc
    $("#name").keyup(function(){
        $.ajax({
            type: "POST",
            url: "../admin/QLDM/ajaxdm.php",
            data: {
                "name":$("#name").val(),
            },
            success: function(data) {
                $(".error").html(data);
                //$(".error").css({"transform":"translateY(-10px)","color":"red"});
                if(data.length > 0) {
                    $("#btn_suadm").attr("disabled",true);
                    $("#btn_suadm").css({"cursor":"not-allowed","opacity":0.3});
                }
                else {
                    $("#btn_suadm").attr("disabled",false);
                    $("#btn_suadm").css({"cursor":"pointer","opacity":0.9});
                }
            }
        })
    });
    // Xu ly ajax ton tai ten bai đăng
    $("#name").keyup(function(){
        $.ajax({
            type: "POST",
            url: "../admin/QLBĐ/ajaxBĐ.php",
            data: {
                "name":$("#name").val(),
            },
            success: function(data) {
                $(".error").html(data);
                $(".error").css({"transform":"translateY(-2px)","color":"red"});
                if(data.length > 0) {
                    $("#btn_BĐ").attr("disabled",true);
                    $("#btn_BĐ").css({"cursor":"not-allowed","opacity":0.3});
                }
                else {
                    $("#btn_BĐ").attr("disabled",false);
                    $("#btn_BĐ").css({"cursor":"pointer","opacity":0.9});
                }
            }
        })
    });

    // Xu ly ajax ton tai ten nhà cung cấp
    $("#name-ncc").keyup(function(){
        $.ajax({
            type: "POST",
            url: "../admin/QLNCC/ajaxncc.php",
            data: {
                "name":$("#name-ncc").val(),
            },
            success: function(data) {
                $(".error").html(data);
                if(data.length > 0) {
                    $("#btn_suadm").attr("disabled",true);
                    $("#btn_suadm").css({"cursor":"not-allowed","opacity":0.3});
                }
                else {
                    $("#btn_suadm").attr("disabled",false);
                    $("#btn_suadm").css({"cursor":"pointer","opacity":0.9});
                }
            }
        })
    });
});
