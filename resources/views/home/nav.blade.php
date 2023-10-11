

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paddy Farming System For Mon State</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

   <link rel="stylesheet" href="css/show.css">
   <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
   <style>
    .navbg{


background-color: white;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
    </style>
</head>
<body>





<nav class="navbg">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
    <a href="" class="flex items-center">
        <img src="http://localhost:8000/photo/lll.png" class="h-8 mr-3" alt="Flowbite Logo" 
        style="width: 100px;height:55px;
        position:absolute;

        left:0"/>
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
        style="color: #198450;
        margin-left:90px"> Paddy Farming System For Mon State</span>
    </a>

    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col  md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0  ">
        <li>
        <a href="{{url('/')}}" class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
          style="color: #198450">Home</a>
        </li>
        <li>
          <a href="{{url('/about_us')}}" class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
          style="color: #198450">About Us</a>
        </li>
        <li>
          <a href="{{url('/knowledge')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
          
          
          style="color:  #198450;">Knowledge</a>
        </li>
        <li>
          <a href="{{url('weather')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
          
          style="color:  #198450;">Weather</a>
        </li>
        <li>
          <a href="{{url('contact')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
          
          style="color: #198450;">Contact Us</a>
        </li>
        @if(Route::has('login'))
        
        @auth
        
         <li>
          <a href="{{url("myfeedback")}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
          
          style="color: #198450;">Feedback</a>
        </li>   

                                        

    
    <div class="flex items-center md:order-2">
      <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="photos/logo.png"
         alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white">{{Auth::user()->name}}</span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{Auth::user()->email}}</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">

          <li>
    <a class="text-white-700 block px-4 py-2 text-sm" 
    style="color:white"
    id="menu-item-0" role="menuitem" tabindex="-1"  
    href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
          </li>
        </ul>
      </div>

                                     
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
  
                                    </form>
                                </div>
                                </div>
                            </li>
           
        @else
        
        <li>
          <a href="{{route('login')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
          
          style="color: #198450;">Login</a>
        </li>
        <li>
          <a href="{{route('register')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
          
          style="color: #198450;">Register</a>
        </li>
        
        @endauth
        
        @endif
      </ul>
    </div>
  </div>
</nav>



    

</body>
</html>