<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <form class="d-flex col-md-4 p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="inp">
        <button type="submit" class="btn btn-outline-success" id="bind">Search</button>
      </form>
  <div class="p" id="p">

  </div>
  <div class="p" id="b">

  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

<script>
  $(document).ready(function(){
    // $("#bind").click(function(e){
    //   e.preventDefault();
    //   var a = $('#inp').val();
    //   console.log(a);
    //   $.ajax({
    //      url: "data.php",
    //      type: "POST",
    //      data : {bind:a },
    //      success: function(data) {
    //        console.log(data);
    //        $("#p").html(data);
    //      }
    //    });
    // });
    $("#b").load("load.php");

    $("#inp").keyup(function(){
      var a = $('#inp').val();
      
      $.ajax({
         url: "data.php",
         type: "POST",
         data : {bind:a },
         success: function(data) {
           console.log(data);
           $("#p").html(data);
           $("#b").hide();
         }
       });
    });



    });

    
</script>