<!DOCTYPE html>
 <html lang="en">


<head>

  <title>Laravel 5 Ajax</title>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</head>


<body>


<div class="container">

   <select class="itemName form-control" style="width:500px;height:1000px" name="itemName"></select>

</div>
<script>
function formatData (data) {
        if (!data.image) { data.image == "marina.jpg"; }
        var $result= $(
            '<a href="/search"><span><img style="max-width:20px" src="'+ window.location +'storage/posters/'+ data.image +'"/>'+ data.text +'</span></a>'

        );
        return $result;
    };

    $('.itemName').select2({
        placeholder: 'Select an item',
        templateResult: formatData,
        templateSelection: formatData,
        ajax: {
            url: '/quick',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            text: item.TITLE,
                            image: item.IMAGEPATH,
                            id: item.ID
                        }
                    })
                };
            },
            cache: true
        }
    });
    </script>

</body>

</html>
