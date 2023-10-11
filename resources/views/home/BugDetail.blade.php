<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="show.css">
    <title>စပါးဖျက်ပိုးများ</title>
    <style>
        img{
            margin-left: 30px;
        }
        p{
            font-size: 12px;
        }
       .prc{
        height: 45vh;
        margin:45px ;
        display:block;
        margin-left:auto;
        margin-right:auto
        
       }
       body{
           background: lavenderblush;
       }
    </style>
</head>

<body>
   
   @include('home.nav')
   
   <br><br>
   
   <div style="margin: 22px;">
   <h2 class="text-2xl"
   style="text-align:center;
   color:green">{{$data->name}}</h2>
   <br>    <br>

  

   <div class="flex flex-col sm:flex-row"
>
  <div class="w-full sm:w-1/2"
   style="
   border-radius:5px">
  <br>
      <img src="http://localhost:8000/bugs_images/{{$data->image}}" alt="Poe" 
    style="width:80%;height: 55vh;
    display: block; margin-left: auto;
    margin-right: auto;
    border-radius:5px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
  </div>
  <div class="w-full sm:w-1/2"
  style="margin-left:12px">
      <p style="text-align: justify;"
    class="text-lg">
      <p style="font-style: italic ; text-align:right"class="text-lg"> Article : {{$data->article}}</p> 
   <p style="font-style: italic ; text-align:right"class="text-lg"> Last Updated In : {{$data->updated_at->diffForHumans()}}</p>
    
    
   <br>
    {{$data->body}}
    </p> 
    <h3 class="text-2xl">
      ကာကွယ်နည်း</h3>  
    <p style="text-align: justify;"
    class="text-lg">
{{$data->pervention_method}}<br>
<br>
    </p>
  </div>
</div>

            <br>

    <h3 class="text-2xl"
    style="color:green;
    text-align:center"
    >
        ပိုးသတ်ဆေးအသုံးပြုနည်း</h3>

     

      
<br>

      
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
 @foreach($data->pesticides as $pest)
  <div style="background-color:lightgreen">
               <a href="" >
  <img src="http://localhost:8000/pesticide_image/{{$pest->image}}"   style="width:50%"class="prc">
  
        <p class="text-lg"
        style="text-align:center;
        margin-bottom:12px">{{$pest->name}}      </p>
  
</a>  
  </div>

  @endforeach
</div>

</body>
</html> 