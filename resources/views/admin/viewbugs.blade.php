<html>

<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paddy Farming System in Mon State</title>
  
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
 
      table{
           
         
         
            border-radius: 5px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            width: 5px;
      }

      tr,td,th{
        width: 44px;
      }
     .comple{
position: absolute;top: 15%;left: 25%;width: 70%;
     }
     body{
      background-color: lavenderblush;
     }
 </style>

</head>

<body>

@include('admin.nav')

@include('admin.sidebar')



@if(session()->has('message'))
<div class="">
{{session()->get('message')}}
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

@endif
    <table class="text-sm text-left text-gray-500 dark:text-gray-400
    comple">
        <thead class="text-xs text-white-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"style="background-color:#03c04a;
        color:white">
            <tr style="background-color:#03c04a;
        color:white">
                <th 
                style="background-color:#03c04a;
        color:white"
                scope="col" class="px-6 py-3">
              Article name
                </th>
                <th scope="col" class="px-6 py-3">
                 Title
                </th>
                <th scope="col" class="px-6 py-3"
                style="text-align: center;">
              Image
                </th>
            
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="px-6 py-3"
                style="">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($bugs as $bug)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$bug->article}}
                </th>
                <td class="px-6 py-4">
                {{$bug->name}}
                </td>
                <td class="px-6 py-4">
                 <img src="http://localhost:8000/bugs_images/{{$bug->image}}"
                 style="width: 100%;display:block;
                 margin-left:auto;
                 margin-right:auto;
                 height:52px">
                </td>
       
                <td class="px-6 py-4 text-right">
                    <a href="{{url('updatebug',$bug->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Update</a>
                </td>


                <td class="px-6 py-4 text-right">
                    <a href="{{url('deletebug',$bug->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>

        </tbody>            @endforeach
    </table>
</div>

</div>
@include('admin.script')
</body>
</html>