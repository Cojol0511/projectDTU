<!-- 
    Author Name     : Doan Kim Tuan
    Author Email    : Doantuan21101999@hmail.com 
 -->


 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mona</title>

  <base href="{{asset('')}}">

  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/1fa75c7674.js" crossorigin="anonymous"></script>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="source/css/owl.carousel.min.css">
  <link rel="stylesheet" href="source/css/owl.theme.default.min.css">

  <!--  Custom style -->
  <link rel="stylesheet" href="source/css/style.css">
  <!-- <link rel="stylesheet" href="./CDIO/introduce.css">   -->

  <style>
    .beta-dropdown {
    display: none;
}


 </style>

  <!-- Jquery -->
  
</head>

<body>

@include('header') 

@yield('content')
   
@include('footer')








  <!-- owl carousel js -->
  <script src="source/js/owl.carousel.min.js"></script>

  <script src="source/js/jquery-341.min.js"></script>
  <!-- Custom js -->
  <script src="source/js/main.js"></script>


  <script>
    function AddCart(id){
      $.ajax({
        url: 'Add-Cart/'+id,
        type: 'GET',
      }).done(function(response) {
        console.log(response);
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
      });
    }
  </script>
</body>

</html>