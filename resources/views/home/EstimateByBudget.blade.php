<html>



<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
   <style>

body{
    background-image: url("https://t3.ftcdn.net/jpg/01/23/23/70/360_F_123237023_ACOOa5bD0mRRP5T1SsVUEDviZbCa13L1.jpg");
    background-size: cover;

}
</style>
</head>


<body>
   @include('home.nav')

   
   
<a href="{{url('/calculate')}}" class="flex flex-col items-center bg-white border border-wihte-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-white-100 dark:border-white-700 dark:bg-white-800 "
style="position: absolute;
left:25%;
top:20%;
background-color:lavenderblush">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg
    
    vocher" src="http://localhost:8000/pesticide_image/{{$pest->image}}"
    
style="height:35vh"
    
    alt="">
    <div class="flex flex-col justify-between p-4 leading-normal"
    style="margin-left: 30px;">
        <h5 class="mb-2 text-xl tracking-tight
        text-green-700 ">


ဆေးအမည်-     {{$pest->name}}

        </h5>
        <p class="mb-3 font-normal text-green-700 dark:text-black-400"
        style="text-align: justify;">
အသုံးပြုနိုင်သောပိုး-     {{$data->name}}
<br>



တစ်ဘူးစျေးနှုန်း-        {{$pest->price}} MMK

<br>
ဆေးဖြန်းလိုသည့်လယ်ဧက-{{$acre}}<br>


အသုံးပြုလိုသည့်ဘတ်ဂျက်စျေးနှုန်း- {{(int)$budget}} MMK

<br>
အနည်းဆုံးကျသင်မည့်စျေးနှုန်း- {{(int)$req}} MMK  
<br><br>

 
<button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">OK</button>
                       



        </p>
    </div>
</a>



  

</body>
</html>