@props(['blog'])
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="TemplateMo">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

       
        {{-- can't apply uswords() --}}
        {{-- <title>{{ $blog->title  ?? 'Stand CSS Blog by TemplateMo'}}</title>  --}}

        <title>{{ isset($blog->title) ? ucwords($blog->title) : 'Stand CSS Blog by TemplateMo' }}</title>



        {{-- @if ($blog->title)
          <title>{{$blog->title}}</title>
        @else  
          <title>Stand CSS Blog by TemplateMo</title>
        @endif --}}

        <!-- Bootstrap core CSS -->
        {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
        <link rel="stylesheet" href="assets/css/owl.css"> --}}

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('blog/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{ asset('blog/assets/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/css/templatemo-stand-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/assets/css/owl.css') }}">

    </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <x-ccomponents.preloader /> 
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <x-ccomponents.navbar />
      
      <!-- Page Content -->
    <!-- Banner Starts Here -->
    
    <!-- Banner Ends Here -->

    
        

          {{$slot}}
            
            
              
         

          
    

    <x-ccomponents.footer />
  
      <!-- Bootstrap core JavaScript -->
      {{-- <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
      <!-- Additional Scripts -->
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/owl.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/isotope.js"></script>
      <script src="assets/js/accordions.js"></script> --}}

      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('blog/vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('blog/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

      <!-- Additional Scripts -->
      <script src="{{ asset('blog/assets/js/custom.js') }}"></script>
      <script src="{{ asset('blog/assets/js/owl.js') }}"></script>
      <script src="{{ asset('blog/assets/js/slick.js') }}"></script>
      <script src="{{ asset('blog/assets/js/isotope.js') }}"></script>
      <script src="{{ asset('blog/assets/js/accordions.js') }}"></script>

  
      <script language = "text/Javascript"> 
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
      </script>
    </body>
</html>
