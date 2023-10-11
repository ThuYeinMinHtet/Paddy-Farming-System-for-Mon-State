<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full  border-r border-gray-200 sm:translate-x-0 side" aria-label="Sidebar"
style="
     background-color: #378b29;
    background-image: linear-gradient(315deg, #378b29 0%, #74d680 74%);">
   <div class="h-full px-3 pb-4 overflow-y-auto aside">
      <ul class="space-y-2 font-medium">
         <li>
            <button class="flex items-center p-2  rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 tablinks" onclick="openCity(event,'i')">
             
            
</button>
         </li>
         <li>
            <a href="{{url('/home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  tablinks "
            onclick="openCity(event, 'Add Items')">
              
               <span class="flex-1 ml-3 whitespace-nowrap"
style="color:#2b371b"
>Home</span>
              
            </a>
         </li>
         <li>
            <a href="{{url('/addNewKnowledge')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white 
            tablinks"
            onclick="openCity(event, 'Inbox')">
              
              <span class="flex-1 ml-3 whitespace-nowrap"
style="color:#2b371b">Add New Knowledge Post</span>
              
            </a>
         </li>
         
           <li>
            <a href="{{url('/admin/viewKnowledge')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white 
            tablinks"
            onclick="openCity(event, 'Inbox')">
              
              <span class="flex-1 ml-3 whitespace-nowrap"
style="color:#2b371b">View Knowledge Post</span>
              
            </a>
         </li>
         
          <li>
            <a href="{{url('/addNewPaddyBugs')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white h
            tablinks"
            onclick="openCity(event, 'Products')">
            
             <span class="flex-1 ml-3 whitespace-nowrap"
               style="color:#2b371b">Add New Paddy Bugs</span>
            </a>
         </li>
         
         <li>
            <a href="{{url('/admin/ViewPaddyBugs')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white
            tablinks"
            onclick="openCity(event, 'Add items')">
             
               <span class="flex-1 ml-3 whitespace-nowrap"
style="color:#2b371b">View PaddyBugs</span>
            </a>
         </li>
        
         
         <li>
            <a href="{{url('/addNewPesticide')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white 
            tablinks"
            onclick="openCity(event, 'Products')">
            
             <span class="flex-1 ml-3 whitespace-nowrap"
             style="color:#2b371b"  >Add New Pesticides</span>
            </a>
         </li>
         
                  <li>
            <a href="{{url('/admin/ViewPesticide')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white
            tablinks"
            onclick="openCity(event, 'Products')">
            
             <span class="flex-1 ml-3 whitespace-nowrap"style="color:#2b371b"
               >View Pesticides</span>
            </a>
         </li>


         
           <li>
            <a href="{{url('/admin/viewReview')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white
            tablinks"
            onclick="openCity(event, 'Products')">
            
             <span class="flex-1 ml-3 whitespace-nowrap"style="color:#2b371b"
               >View User Review</span>
            </a>
         </li>
      </ul>
   </div>
</aside>