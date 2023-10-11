<html>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paddy Farming System For Mon State</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

   <link rel="stylesheet" href="css/show.css">
   <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
 
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

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

       
                    <img alt="Placeholder" 
                    class="block h-auto w-full" 
                    src="https://cdn-icons-png.flaticon.com/512/8009/8009906.png"
                    style="display:block;
                    margin-left:auto;
                    margin-right:auto;
                    width:75px;
                    margin-top:45px">
             

               
<h2 class="text-2xl" style="text-align: center;
color:white"><b>Total User</b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white">{{count($user)}}</p>
               

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

                
            <img alt="Placeholder" class="block h-auto w-full" src="https://cdn-icons-png.flaticon.com/512/2195/2195441.png"
            style="display:block;
                    margin-left:auto;
                    margin-right:auto;
                    width:75px;
                    margin-top:45px">

                <h2 class="text-2xl" style="text-align: center;
color:white"><b>Rating</b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white">{{$avstar}}</p>

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


<img alt="Placeholder" class="block h-auto w-full" src="https://cdn-icons-png.flaticon.com/512/235/235428.png"
            style="display:block;
                    margin-left:auto;
                    margin-right:auto;
                    width:70px;
                    margin-top:45px">

   

    <h2 class="text-2xl" style="text-align: center;
color:white"><b>Total Rice Bettle</b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white">{{count($paddybug)}}</p>

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
            <img alt="Placeholder" class="block h-auto w-full" src="https://cdn-icons-png.flaticon.com/512/8437/8437051.png"
            style="display:block;
                    margin-left:auto;
                    margin-right:auto;
                    width:75px;
                    margin-top:45px">
                <h2 class="text-2xl" style="text-align: center;
color:white"><b>User Feedback</b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white">{{count($review)}}</p>

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

            <img alt="Placeholder" class="block h-auto w-full" src="https://cdn-icons-png.flaticon.com/512/2689/2689534.png"
            style="display:block;
                    margin-left:auto;
                    margin-right:auto;
                    width:75px;
                    margin-top:45px">
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

            <img alt="Placeholder" class="block h-auto w-full" src="photo/pre%20(2).png"
            style="display:block;
                    margin-left:auto;
                    margin-right:auto;
                    width:75px;
                    margin-top:45px">
                <h2 class="text-2xl" style="text-align: center;
color:white"><b>Knowledge Sharing</b></h2>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white">{{count($knowledge)}}</p>
       
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

    </div>
</div>
</body>
</html>