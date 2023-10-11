<html>



<head>  
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
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
.text-2xl{
  color: green;
  text-align: center;
}
body{
  background-color: white;
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
<h2 class="text-2xl">{{$data->name}}</h2>
<br>
<div class="flex  flex-wrap"style="background-color:lavender"
>
  <div class="w-1/2  p-4"style="background-color:">


  <img src="http://localhost:8000/pesticide_image/{{$pest->image}}" class="bvdd">


  <br>

  <h2   style="text-align: center;color:green"
  
  
  class="text-xl">{{$pest->name}}</h2>

  <p style="text-align: center;">
            <form action="{{url("CalculateOnPest/total/$data->id/$pest->id")}}" method="get">
  <div class="w-64 mx-auto">
  <label class="block mb-2 font-bold text-green-600" for="inputField"
  style="text-align: center;">Enter your Acre:</label>
  <input 
    class="w-full px-4 py-2 border border-green-400 rounded-md focus:ring focus:ring-green-200 focus:border-green-500"
    type="text" 
    id="inputField" 
    name="acre" 
    placeholder="Type here..."
  /><br>
<br>

  <button class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-bold rounded-md focus:outline-none focus:ring focus:ring-green-200 focus:ring-opacity-50"
  style="display: block;
  margin-left:auto;
  margin-right:auto">
Calculate
</button>

</div>
</form>




</p>
  </div>
  <div class="w-1/2 p-4">
    
  <h2 class="text-2xl">
  <b>အသေးစိတ်ဖော်ပြချက်</b></h2>
<br>
  <div class="grid grid-cols-2 ">
  <div>
ဆေးအမည်</div>

  <div> {{$pest->name}}</div>
</div>
<br>
<div class="grid grid-cols-2 ">
  <div>
  အသုံးပြုရမည့်ပုံစံ</div>

  <div>  {{$pest->use_message}}</div>

</div>
<div class="grid grid-cols-2 ">
  <div>
  သုံးစွဲ၍ရသောသီးနှံ</div>

  <div>            {{$pest->use_vegetable}}</div>
</div>

<br>
<div class="grid grid-cols-2 ">
  <div>
  ဆေးနှုန်းထား</div>

  <div>        {{$pest->use_amount}}</div>
</div>

<br>
<div class="grid grid-cols-2 ">
  <div>
  အဓိကအကျိုးကျေးဇူးများ</div>

  <div>        
    
  <ul>
<li>         {{$pest->use_advantage}}</li>
</div>
</div>




  </div>
</div>


<br>

 
</body>
</html>