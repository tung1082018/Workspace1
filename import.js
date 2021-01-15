$('input[type="file"]').on('change', function () {
                var currentImg = this;
                var fileData = currentImg.files[0];
                var formĐata = new FormData();
                FormData.append('file', fileData);
                var ajax = new XMLHttpRequest();
                ajax.onreadystatechange = function () {
                    if (ajax.status == 200 && ajax.readyState == 4) {
                        var imgPath = ajax.responseText;
                        $('#test-img').attr('src',imgPath);
                    }
                }
                ajax.open("POST", 'upload.php', true);
                ajax.send(formData);
            });
