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

@foreach($data as $bug)
     <div class="flex justify-center 
     text-6xl border-2  p-6 
     "  style="background-color:lavenderblush;
     width:100%">

     <div class="relative w-96 flex-col
        bg-clip-border text-gray-700 ">
  <div class="relative mx-4 -mt-6 h-56 
  overflow-hidden  
  
    text-white  shadow-blue-gray-500/40">
    <br>
    <img
      src="bugs_images/{{$bug->image}}"
      alt="img-blur-shadow"
      layout="fill"   style="width:100%;
      height:35vh"
    />
  </div>
  <div class="p-6">
   
    <p class="" style="width:110%;
    height:35px">
    
{{$bug->name}}
    </p>
  </div>
  <div class="p-6 pt-0">
    <a href="/calculate_detail/chooseType/{{$bug->id}}">
    <button
      class="select-none rounded-lg bg-green-500 
      py-3 px-6 text-center align-middle font-sans 
      text-xs font-bold uppercase text-white shadow-md
       shadow-pink-500/20 transition-all 
       hover:shadow-lg hover:shadow-green-500/40 
       focus:opacity-[0.85] focus:shadow-none 
       active:opacity-[0.85] active:shadow-none 
       disabled:pointer-events-none disabled:opacity-50 
       disabled:shadow-none"
      type="button"
      data-ripple-light="true"
    >
      Read More
    </button>  </a>
  </div>
</div>
        
     
           
                </div>

    
    @endforeach 

     </div></div>

</body>

</html>