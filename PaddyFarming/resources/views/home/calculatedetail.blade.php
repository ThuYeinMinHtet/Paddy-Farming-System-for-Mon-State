<html>



<head>  
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
<style>
.bvdd{
  height: 45vh;
  margin-left: auto;
  margin-right: auto;
  display: block;
}
.mb-4{
    margin-left: auto;
  margin-right: auto;
  display: block;
}
</style>

</head>


<body>
@include('home.nav')
<h2 class="text-2xl"
style="text-align:center">{{$data->name}}</h2>
    
                 <br><br>                          
<div class="container mx-auto">

  <div
  
  style="background-color:"
   class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
 
    <!-- Column 1 -->
    @foreach($data->pesticides as $pest)
  
    <div class="bg-gray-100 p-4"  
  style="background-color:lightgreen">
      <a href="{{url("choice/calculateOnPest/acre/$data->id/$pest->id")}}">         

    <img src="http://localhost:8000/pesticide_image/{{$pest->image}}" class="bvdd">
    <label class="flex items-center space-x-2">    <br>

  <span class="text-gray-700
  text-lg"
>    {{$pest->name}}  </span>
</label>
    </a>
    </div>
    
                     @endforeach
    <!-- Column 2 -->
         
    <!-- Column 3 -->
         
    <!-- Column 4 -->



    
  </div>
</div>



</form>
</body>
</html>