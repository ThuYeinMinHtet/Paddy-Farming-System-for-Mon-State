
  <html>

<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paddy Farming System For Mon State</title>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

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
      .gg2{
            background-image: url('photo/field.jpg');
            background-size: cover;
            position: absolute;
            top: 0;
            left: 12%;
            width: 88%;
            height: 100%;             
      }
      body{
        background-color: lavenderblush;
        background-image: url("https://eruvaaka.com/wp-content/uploads/2022/02/360_F_270126696_YYgVKZWApksiyvureiN8UBuaBtfALCuk-1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
 </style>

</head>

<body>

@include('admin.nav')

@include('admin.sidebar')
 
  <div class="container-fluid page-body-wrapper" 
  
  style="background-color:lightgreen">  
            <div class="container" align="center"
             style="padding-top:80px;
             background-color:lightgreen"  
  >

             <div class="gg2">
                  <form action="{{url('editpest',$data->id)}}" method="post" enctype="multipart/form-data">
           @csrf
                        <br><br><br>
                  
                  <br>
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
      id="inline-full-name" type="text"  name="name"
      placeholder="Name" value="{{$data->name}}">
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
      placeholder="Enter Your Usage Message" value="{{$data->use_message}}">
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
      id="inline-full-name" type="number" value="{{$data->max}}"
      placeholder="Enter Maximum Use" >
    </div>&nbsp;&nbsp;
    <div class="md:w-1/3">
      <input class="bg-gray-200 appearance-none border-2 
      border-gray-200 rounded w-full py-2 px-4 
      text-gray-700 leading-tight focus:outline-none 
      focus:bg-white focus:border-green-500" name="min"
      id="inline-full-name" type="number" value="{{$data->min}}"
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
      type="text" value="{{$data->use_amount}}" placeholder="Usable Amount per acre">
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
      type="text" value="{{$data->use_vegetable}}" placeholder="Usable Vegetable">
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

             </div>
      <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
     
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 
      border-gray-200 rounded w-full py-2 px-4 text-gray-700 
      leading-tight focus:outline-none focus:bg-white 
      focus:border-green-500" id="inline-full-name"  name="paddybug"
      type="text" value="{{$data->paddy_bugs_id}}" placeholder="Effective Bugs">
    </div>

     </div>

  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
    
    </div>
    <div class="md:w-1/3">
      <input class="bg-gray-200 
      appearance-none border-2 border-gray-200 
      rounded w-full py-2 px-4 text-gray-700 leading-tight 
      focus:outline-none focus:bg-white focus:border-green-500" 
      id="inline-full-name" name="amount" type="text" value="{{$data->amount}}">
    </div>&nbsp;&nbsp;
    <div class="md:w-1/3">
    <select id="selectBox" name="type" class="w-full p-2 border border-gray-300 rounded-md">
        <option value="{{$data->type}}">{{$data->type}}</option>
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
      type="number" value="{{$data->price}}" placeholder="Enter the price">
    </div>
  </div>
    <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
   
    </div>
    <div class="md:w-2/3">
    <textarea id="textareaInput" name="advantage" 
    class="w-full p-2 bg-gray-200  
    focus:bg-white bg-gray-200 appearance-none border-2 
    border-gray-200 rounded w-full py-2 px-4 text-gray-700 
    leading-tight focus:outline-none focus:bg-white focus:border-green-500
    border border-gray-300 rounded-md" 
    placeholder="Enter the advantage of its use" rows="4">{{$data->use_advantage}}</textarea>
    </div>



    
  </div>
  <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
  style="background-color: green;">Add</button>
    
  </div>

      </div>
    

    
                  
                  </form>
            </div>
            </div>
      </div>
 
@include('admin.script')
</body>
</html>
