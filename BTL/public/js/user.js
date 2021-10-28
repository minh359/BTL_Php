$(document).ready(function(){
    $('#create').click(function(){
        var un=$('#username').val();
        var pass=$('#password').val();
        var name=$('#name').val();
        var dob=$('#dob').val();
        var email=$('#email').val();
        $.ajax({
            url: 'http://localhost:808/BTL/Api/CreateUser',
            type: 'POST',
            dataType: "json",
            data: {
                username:un,
                password:pass,
                name:name,
                dob:dob,
                email:email,
            },
            success: function () {
                    alert("Thêm thành công");
            },
            error: function (e, status, jqXH) {
                alert("có lỗi");
            }
        });
    });
    $('#update').click(function(){
        var un=$('#username').val();
        var pass=$('#password').val();
        var name=$('#name').val();
        var dob=$('#dob').val();
        var email=$('#email').val();
        $.ajax({
            url: 'http://localhost:808/BTL/Api/UpdateUser',
            type: 'POST',
            dataType: "json",
            data: {
                //chỉnh sửa việc update password. nên thêm 1 ô checkbox,nếu check thì sửa pass, ko thì giữ nguyên pass do có mã hóa md5
                username:un,
                password:pass,
                name:name,
                dob:dob,
                email:email,
            },
            success: function () {
                    alert("Sửa thành công");
            },
            error: function (e, status, jqXH) {
                alert("có lỗi");
            }
        });
    });
});