<html>


<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

   <link rel="stylesheet" href="css/show.css">
   <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
 
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>

@include('home.nav')

<h2 class="text-3xl"
style="text-align: center;
color:green">ဗဟုသုတဆိုင်ရာဆောင်းပါးများ</h2>
<div style="margin: 45px;">

@foreach($knowledge as $knowledges)

<a href="{{url("knowledge_detail/$knowledges->id")}}" class="flex flex-col items-center bg-white border border-green-200 rounded-lg shadow md:flex-row md:max-w-xxl hover:bg-green-100 dark:border-green-700 dark:bg-green-800 dark:hover:bg-green-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="knowledge_images/{{$knowledges->image}}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{$knowledges->title}}
        </h5>
       
    </div>
</a><br>
@endforeach


