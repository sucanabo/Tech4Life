<script src="{{asset('layout_user/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('layout_user/vendor/bootstrap-4.5.3-dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('layout_user/vendor/ckeditor5-build-classic/ckeditor.js')}}"></script>
    <script src="{{asset('layout_user/js/main.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script>
                function showMyImage(fileInput) { 
                    var files = fileInput.files; 
                    for (var i = 0; i < files.length; i++) {   
                    var file = files[i]; 
                    var imageType = /image.*/;  
                    if (!file.type.match(imageType)) { 
                    continue; 
                    }   
                    var img=document.getElementById("thumbnil");    
                    img.file = file;  
                    var reader = new FileReader(); 
                    reader.onload = (function(aImg) { 
                    return function(e) { 
                        aImg.src = e.target.result; 
                    }; 
                    })(img); 
                    reader.readAsDataURL(file); 
                    }  
                    } 
            </script>           