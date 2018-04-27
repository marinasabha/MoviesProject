<html lang="en">


<head>

  <title>Laravel 5 - Dynamic autocomplete search using select2 JS Ajax</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</head>


<body>

<div class="container">


  <h2>Laravel</h2>

  <br/>
  <ul class="nav navbar-nav navbar-right">
    <!-- Search Box -->
      <li>
        <div>
          <form type="GET" action="/search" >
            <input class="search-box" name="term" id="search-box" type="text" placeholder="Search" />
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
    </div>
  </li>

  <select class="itemName form-control" style="width:500px" name="itemName"></select>


</div>


<script type="text/javascript">


$('.itemName').select2({

placeholder: 'Select an item',

ajax: {

url:window.location + 'api/search?q='+ $('.key').val(),

dataType: 'json',

delay: 250,

processResults: function (data) {

  return {

    results:  $.map(data, function (item) {

          return {

              text: item.TITLE,

              id: item.YEAR

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
