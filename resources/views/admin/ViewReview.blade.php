<html>

<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paddy Farming System For Mon State</title>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
   <link rel="stylesheet" href="css/admin.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
 
 <style type="text/css">
      label
      {
          display: inline-block;
          
          width:200px;
          
          color:white;
          text-align: center;
      }
 
      .table{
            background-color: rgba(0, 0, 0, 0.5);
            width: 250px;
            height: 360px;
            border-radius: 5px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
      }
      .gg{
            background-image: url('photo/field.jpg');
            background-size: cover;
            position: absolute;
            top: 0;
            left: 12%;
            width: 88%;
            height: 120%;
      }

 </style>

</head>

<body>

@include('admin.nav')

@include('admin.sidebar')
 

<div class="container my-12 mx-auto px-4 md:px-12"
>
    <div class="flex flex-wrap -mx-1 lg:-mx-4">

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3"
        style="width:45%;
        display:block;margin-left:auto;
        margin-right:auto">

<!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg"
            style="background-color: #234f1e;
            height:35vh; width:80%;
            margin-left:40%">

       
                  
             

               
<h2 class="text-2xl" style="text-align: center;
color:white"><b>Total User</b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white"></p>
               

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3" >

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg"
            style="background-color: #234f1e;
            height:35vh; width:80%;
            margin-left:20%">

                
           
                <h2 class="text-2xl" style="text-align: center;
color:white"><b>Rating</b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white"></p>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

 <article class="overflow-hidden rounded-lg shadow-lg"
            style="background-color: #234f1e;
            height:35vh; width:75%;
            margin-left:40%">




   

    <h2 class="text-2xl" style="text-align: center;
color:white"><b>Total Rice Bettle</b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white"></p>

</article>
<!-- END Article -->

</div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
                                  <article class="overflow-hidden rounded-lg shadow-lg"
            style="background-color: #234f1e;
            height:35vh; width:80%;
            margin-left:20%">
        
                <h2 class="text-2xl" style="text-align: center;
color:white"><b>User Feedback</b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white"></p>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            
 <article class="overflow-hidden rounded-lg shadow-lg"
            style="background-color: #234f1e;
            height:35vh; width:75%;
            margin-left:40%">

          
                <h2 class="text-2xl" style="text-align: center;
color:white"><b>Total Paddy Type</b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white">5+</p>
         
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
<article class="overflow-hidden rounded-lg shadow-lg"
            style="background-color: #234f1e;
            height:35vh; width:80%;
            margin-left:20%">

           
                <h2 class="text-2xl" style="text-align: center;
color:white"><b></b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white"></p>
       
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

    </div>
</div> 
@include('admin.script')
</body>
</html>