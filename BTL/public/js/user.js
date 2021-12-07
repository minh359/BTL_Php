$(document).ready(function(){
    $('#create_user').click(function(){
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
    $('#update_user').click(function(){
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
            
        });const url1=new URL('http://localhost:808/BTL/Admin/UserTable/1')
            window.history.pushState({},'',url1);
    });
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $('#create_novel').click(function () {
        var name        = $('#name').val();
        var description = $('#description').val();
        var avatar      = $('#avatar').val();
        var state       = $('#state').val();
        var post_date   = $('#postdate').val();
        var author_id   = $('#author_id option:selected').val();
        var category_id = $('#category_id option:selected').val();
        alert(name+description+avatar+state+post_date+author_id+category_id);
        $.ajax({
            url: 'http://localhost:808/BTL/Api/CreateNovel',
            type: 'POST',
            dataType: "json",
            data: {
                 name:name,
                 description  :  description ,
                 avatar       :  avatar      ,
                 state        :  state       ,
                 post_date    :  post_date   ,
                 author_id    :  author_id   ,
                 category_id  :  category_id ,
            },
            success: function () {
                alert("Thêm thành công");
            },
            error: function (e, status, jqXH) {
                alert("có lỗi");
            }
        });
    });

    $('#update_novel').click(function () {
        var id = $('#id').val();
        var name = $('#name').val();
        var description = $('#description').val();
        var avatar = $('#avatar').val();
        var state = $('#state').val();
        var post_date = $('#postdate').val();
        var author_id = $('#author').val();
        var category_id = $('#category').val();
        $.ajax({
            url: 'http://localhost:808/BTL/Api/UpdateNovel',
            type: 'POST',
            dataType: "json",
            data: {
                id           :  id,
                name         :  name,
                description  :  description,
                avatar       :  avatar,
                state        :  state,
                post_date    :  post_date,
                author_id    :  author_id,
                category_id  :  category_id,
            },
            success: function () {
                alert("Thêm thành công");
            },
            error: function (e, status, jqXH) {
                alert("có lỗi");
            }
        });
    });
    ////////////////////////////////////////////////////////////////////////////////////////////////

    $('#create_chapter').click(function () {
        var chapter_number  = $('#chapter_number').val();
        var image           = $('#image').val();
        var content         = $('#content').val();
        var novel_id        = $('#novel_id').val();
        $.ajax({
            url: 'http://localhost:808/BTL/Api/CreateChapter',
            type: 'POST',
            dataType: "json",
            data: {
                chapter_number  :  chapter_number   ,
                image           :  image            ,
                content         :  content          ,
                novel_id        :  novel_id         ,
            },
            success: function () {
                alert("Thêm thành công");
            },
            error: function (e, status, jqXH) {
                alert("có lỗi");
            }
        });
    });

    $('#update_chapter').click(function () {
        var id = $('#id').val();
        var chapter_number = $('#chapter_number').val();
        var image = $('#image').val();
        var content = $('#content').val();
        var novel_id = $('#novel_id').val();
        $.ajax({
            url: 'http://localhost:808/BTL/Api/UpdateChapter',
            type: 'POST',
            dataType: "json",
            data: {
                id              :  id,
                chapter_number  :  chapter_number,
                image           :  image,
                content         :  content,
                novel_id        :  novel_id,
            },
            success: function () {
                alert("Thêm thành công");
            },
            error: function (e, status, jqXH) {
                alert("có lỗi");
            }
        });
    });
    ////////////////////////////////////////////////////////////////////////////////////////////////
    $('#create_author').click(function () {
        var name = $('#name').val();
        $.ajax({
            url: 'http://localhost:808/BTL/Api/CreateAuthor',
            type: 'POST',
            dataType: "json",
            data: {
                name  :  name,
            },
            success: function () {
                alert("Thêm thành công");
            },
            error: function (e, status, jqXH) {
                alert("có lỗi");
            }
        });
    });

    $('#update_author').click(function () {
        var id = $('#id').val();
        var name = $('#name').val();
        $.ajax({
            url: 'http://localhost:808/BTL/Api/UpdateAuthor',
            type: 'POST',
            dataType: "json",
            data: {
                id    :   id,
                name  :  name,

            },
            success: function () {
                alert("Thêm thành công");
            },
            error: function (e, status, jqXH) {
                alert("có lỗi");
            }
        });
    });
    ////////////////////////////////////////////////////////////////////////////////////////////////
    $('#create_category').click(function () {
        var name = $('#name').val();
        var description = $('#description').val();
        $.ajax({
            url: 'http://localhost:808/BTL/Api/CreateCategory',
            type: 'POST',
            dataType: "json",
            data: {
                name  :  name,
                description:description,
            },
            success: function () {
                alert("Thêm thành công");
            },
            error: function (e, status, jqXH) {
                alert("có lỗi");
            }
        });
    });

    $('#update_category').click(function () {
        var name = $('#name').val();
        var id = $('#id').val();
        var description = $('#description').val();
        $.ajax({
            url: 'http://localhost:808/BTL/Api/UpdateCategory',
            type: 'POST',
            dataType: "json",
            data: {
                id    : id,
                name  :  name,
                description:description,
            },
            success: function () {
                alert("Thêm thành công");
            },
            error: function (e, status, jqXH) {
                alert("có lỗi");
            }
        });
    });
});
