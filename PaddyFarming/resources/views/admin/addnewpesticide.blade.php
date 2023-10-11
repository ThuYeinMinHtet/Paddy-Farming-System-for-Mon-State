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
 
  <div class="container-fluid page-body-wrapper" style="">  
            <div class="container" align="center" style="padding-top:80px">

               @if(session()->has('message'))
            
            <div style="margin-top:7%" ><div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert"
            
            style="width:45%;background-color:green;
            color:white">
  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium">
  {{session()->get('message')}}
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
    </svg>
  </button>
</div></div>
@endif
         <form action="{{url('upload_pesticides/$pesticide->id')}}"  method="get">
        @csrf
            <div class="grid md:grid-cols-2 gap-4 justify-center items-center h-screen gg">
    <div class=" p-4" style="margin-left: 20%;
    margin-top:2%">
      <!-- Content for the left column -->
       
      <p><div class="w-full max-w-sm">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
    
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none 
      border-2 border-gray-200 rounded w-full py-2 px-4 
      text-gray-700 leading-tight focus:outline-none 
      focus:bg-white focus:border-green-500" 
      id="inline-full-name" type="text" value="" name="name"
      placeholder="Name">
    </div>



    
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none 
      border-2 border-gray-200 rounded w-full py-2 
      px-4 text-gray-700 leading-tight 
      focus:outline-none focus:bg-white focus:border-green-500" 
      id="inline-full-name" type="text"  name="message"
      placeholder="Enter Your Usage Message">
    </div>


  </div>

    









  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
  
    </div>
    <div class="md:w-1/3">
      <input class="bg-gray-200 appearance-none border-2 
      border-gray-200 rounded w-full py-2 px-4 
      text-gray-700 leading-tight focus:outline-none 
      focus:bg-white focus:border-green-500"  name="max"
      id="inline-full-name" type="number" value=""
      placeholder="Enter Maximum Use">
    </div>&nbsp;&nbsp;
    <div class="md:w-1/3">
      <input class="bg-gray-200 appearance-none border-2 
      border-gray-200 rounded w-full py-2 px-4 
      text-gray-700 leading-tight focus:outline-none 
      focus:bg-white focus:border-green-500" name="min"
      id="inline-full-name" type="number" value=""
      placeholder="Enter Minimum Use"
      >
    </div>

  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
   
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 
      border-gray-200 rounded w-full py-2 px-4 text-gray-700 
      leading-tight focus:outline-none focus:bg-white 
      focus:border-green-500" id="inline-full-name" name="uamount" 
      type="text" value="" placeholder="Usable Amount per acre">
    </div>



    
  </div>
      <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
     
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 
      border-gray-200 rounded w-full py-2 px-4 text-gray-700 
      leading-tight focus:outline-none focus:bg-white 
      focus:border-green-500" id="inline-full-name"  name="uvegetable"
      type="text" value="" placeholder="Usable Vegetable">
    </div>


  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
   
    </div>
            <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none 
      border-2 border-gray-200 rounded w-full py-2 px-4 
      text-gray-700 leading-tight focus:outline-none 
      focus:bg-white focus:border-green-500"   name="file"
      id="inline-full-name" type="file" value="">
    </div>


    
  </div>



  
  </div></p>
    </div>
    <div class=" p-4" style="">
      <!-- Content for the right column -->
   
      <div class="w-full max-w-sm">








  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">

    </div>
    
     <div class="md:w-2/3">
    <select id="selectBox" name="bug" class="w-full p-2 border border-gray-300 rounded-md">
        <option value=""> Effective Paddy Bugs</option>
        @foreach($bug as $bugs)
        <option value="{{$bugs->id}}">{{$bugs->name}}</option>
        @endforeach
      </select>
    </div>



    
  </div>




  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
    
    </div>
    <div class="md:w-1/3">
      <input name="amount" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="inline-full-name" type="text" value="Amount">
    </div>&nbsp;&nbsp;
    <div class="md:w-1/3">
    <select id="selectBox" name="type" class="w-full p-2 border border-gray-300 rounded-md">
        <option value="">Type</option>
        <option value="GG">GG</option>
        <option value="CC">CC</option>
      </select>
    </div>


    
  </div>

    

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
    
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 
      border-gray-200 rounded w-full py-2 px-4 text-gray-700 
      leading-tight focus:outline-none focus:bg-white 
      focus:border-green-500" id="inline-full-name"  name="price"
      type="number" value="" placeholder="Enter the price">
    </div>
  </div>
    <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
   
    </div>
    <div class="md:w-2/3">
    <textarea id="textareaInput" name="advantage" class="w-full p-2 bg-gray-200  focus:bg-white bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500
    border border-gray-300 rounded-md" placeholder="Enter the advantage of its use" rows="4"></textarea>
    </div>



    
  </div>
  <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
  style="background-color: green;">Add</button>
    
  </div>

      </div>
    </div>


  </div> 
                            </form>
  
            </div>
            </div>
      </div>
 
@include('admin.script')
</body>
</html>