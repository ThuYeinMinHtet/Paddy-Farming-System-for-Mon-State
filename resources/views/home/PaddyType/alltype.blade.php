<html>



<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

   <link rel="stylesheet" href="css/show.css">
   <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
 
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>

body{
  background-color: lightgreen;
}
</style>

</head>

<body>

@include('home.nav')


  
<h2 class="text-3xl"

style="text-align: center;">Paddy In Mon State</h2>

          


<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
@foreach($data as $datas)   
<div>
        <img class="h-auto max-w-full rounded-lg" src="http://localhost:8000/photo/{{$datas->image}}" alt="">
    </div>
   @endforeach
</div>


</body>

</html>