<script src="{{asset('layout_admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('layout_admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('layout_admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- apps -->
<!-- apps -->
<script src="{{asset('layout_admin/dist/js/app-style-switcher.js')}}"></script>
<script src="{{asset('layout_admin/dist/js/feather.min.js')}}"></script>
<script src="{{asset('layout_admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('layout_admin/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('layout_admin/dist/js/custom.min.js')}}"></script>
<script src="{{asset('layout_admin/ckeditor.js')}}"></script>
<!--This page JavaScript -->
<script src="{{asset('layout_admin/assets/extra-libs/c3/d3.min.js')}}"></script>
<script src="{{asset('layout_admin/assets/extra-libs/c3/c3.min.js')}}"></script>
<script src="{{asset('layout_admin/assets/libs/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('layout_admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('layout_admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('layout_admin/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('layout_admin/dist/js/pages/dashboards/dashboard1.min.js')}}"></script>
<script>
    ClassicEditor
            .create(document.querySelector('#editor'), {

                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'indent',
                        'outdent',
                        '|',
                        'imageUpload',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',
                        'undo',
                        'redo'
                    ]
                },
                language: 'en',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                },
                licenseKey: '',

            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
                console.warn('Build id: cu1qudh25bkr-8o65j7c6blw0');
                console.error(error);
            });</script>
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