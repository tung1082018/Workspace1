<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Bài 1: Giới thiệu về Javscript & Thư viện Jquery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js" ></script>
        <style>
            #test-img{
                height: 75px;
                width: 75px;
                padding: 3px;
                border: 1px solid #ccc;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="img-wrapper">
            <input type="file" name="file[]" /><br/>
            <img id="test-img" src="" />
        </div>
        <script>
            $('input[type="file"]').on('change', function () {
                var currentImg = this;
                var fileData = currentImg.files[0];
                var formĐata = new FormData();
                formĐata.append('file', fileData);
                var ajax = new XMLHttpRequest();
                ajax.onreadystatechange = function () {
                    if (ajax.status == 200 && ajax.readyState == 4) {
                        var imgPath = ajax.responseText;
                        $('#test-img').attr('src',imgPath);
                    }
                }
                ajax.open("POST", 'upload.php', true);
                ajax.send(formĐata);
            });
        </script>
    </body>
</html>
