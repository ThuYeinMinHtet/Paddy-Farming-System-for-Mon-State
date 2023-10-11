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


  


           <div class="container mx-auto"
           style="margin-top:4%"
           style="background-color: lightgreen;">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
>


@foreach($feedback as $feedbacks)
     <div class="flex justify-center 
     text-6xl border-2  p-6 
     "  style="background-color:lavenderblush;
     width:100%">

     <div class="relative w-96 flex-col
        bg-clip-border text-gray-700 ">
  <div class="relative mx-4 -mt-6 h-56 
  overflow-hidden  text-2xl
  
    text-white  shadow-blue-gray-500/40"
    style="color: black;text-align:center">
    {{$feedbacks->user->name}}
    <br>


    <div class="flex items-center space-x-1" style="
    margin-left:120px;
    
  ">
        @for($i=0;$i<$feedbacks->star;$i++)
    <svg class="w-4 h-4 text-yellow-300" 
    
    
   
    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    @endfor
  

  
</div>

<br>
   <p> {{$feedbacks->message}}</p>
  </div>


</div>
        
     
           
                </div>

    
    @endforeach 

     </div></div>

</body>

</html>