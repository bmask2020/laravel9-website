$(document).ready(function(){


    $('#cImage').on('change', function(e){

        var reader = new FileReader();

        reader.onload = function(e) {

            $('#showImag').attr('src', e.target.result);

        }

        reader.readAsDataURL(e.target.files[0]);

    });
    // alert('good');

});