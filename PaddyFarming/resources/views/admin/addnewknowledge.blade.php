<html>

<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paddy Farming System For Mon State</title>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
   <link rel="stylesheet" href="css/admin.css">

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
            background-color: rgba(0, 0, 0, 0.3);
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
              tr{
              
              }
 </style>

</head>

<body>

@include('admin.nav')

@include('admin.sidebar')

 
  <div class="container-fluid page-body-wrapper" style="">  
            <div class="container" align="center" style="padding-top:80px">
                                 

            <div class="gg">
            
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
                  <form action="{{url('/upload_knowledge')}}" method="post" enctype="multipart/form-data">
           @csrf
               <br><br><br><br>   
                   <h1 class="text-3xl"><b> Add New Knowledge Post </b></h1>
                  <br>
                  <table class="table">
                        <tr><td>
                         <div>
                            <label>Article</label></td>
                            <td> <div class="mb-4">
      
      <input name="article" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Article Name" style="width:80%">
    </div>
                         </div></td></tr>
                         
                         <tr><td>
                         <div>
                            <label>Reference</label></td>
                            <td> <div class="mb-4">
      
      <input name="ref" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Article Name" style="width:80%">
    </div>
                         </div></td></tr>
                        <tr><td>
                            <label>Title</label></td>
                            <td><div class="mb-4">
      
      <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="title" style="width:80%" required>
    </div>
                         </div>
                         </div></td></tr>
                        <tr><td><label>Body</label></td>
                        <td><textarea name="body" placeholder="Write Enter the Body Text" rows="5"  cols="2" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 "></textarea>
                                                   </div></td></tr>  <br>            
                        <tr><td><label>Post Image</label></td> 
                        <td>  <input type="file" name="file">
                         </td>  </tr>
                        <tr><td colspan="2" align="center">
                        <br><button 
                        
                                 style="background-color:yellow"
                        
                        type="submit" class="focus:outline-none text-black bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                         </div></td></tr>
                  </table>
                  
                  </form>
            </div>
            </div>
      </div>
 
@include('admin.script')
</body>
</html>