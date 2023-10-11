<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paddy Farming System For Mon State</title>
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body{
      margin: 0;
      padding: 0;
      background-image: url("https://greenway.sgp1.digitaloceanspaces.com/post_covers/6498faf8f9dc21bac6493028c21144ab.jpg");
      /* background-repeat: no-repeat; */
      background-size: cover;
    }
    #sike{
      border: 1px solid gray;
      padding: 22px;
      border-radius: 20px;
      margin-top: 100px;    background-color: rgba(0, 0, 0, 0.3);
    }
  h1{
    margin-bottom: 20px;
    font-size: 22px;
  }
  form{
    width:100%;

  }
  </style>

</head>

<body>
@include('home.nav')

  <div class="max-w-md mx-auto" id="sike">
  
  @if($errors->any())
            
            <div style="margin-top:7%" ><div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert"
            
            style="width:85%;background-color:green;
            color:white">
  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium">
  {{$errors}}
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
    </svg>
  </button>
</div></div>
@endif
    <form action="{{url("CalculateBudget/$data->id")}}" method="post">
    @csrf
     <b><h1 align="center" class="text-xl">Please Tell me your acres and budget</h1></b><br>
      <div class="mb-4">
        <label for="number1" class="block text-gray-700 font-semibold mb-2">Enter Your Budget:</label>
        <input type="text" id="number1" name="budget" class="w-full px-4 py-2 border rounded-lg focus:outline-none 
        focus:border-blue-500 transition duration-300" required>
      </div>

      <div class="mb-4">
        <label for="number2" class="block text-gray-700 
        font-semibold mb-2">Enter Your Acres:</label>
        <input type="text" id="number2" name="acre" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 transition duration-300" required>
      </div>

      <button type="submit" class="bg-green-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
        Submit
      </button>
    </form>
  </div>
</body>

</
