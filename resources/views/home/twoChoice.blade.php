<html>

<head>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>



   <style>
body{
    background-color: lavender;
    background-image: url('https://www.wallpapertip.com/wmimgs/18-181975_kerala-paddy-fields-walking-high-resolution-kerala-hd.jpg');
  
}
.cen{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 25%;
    margin-top: 12%;
}


/* CSS */
.button-41 {
  background-color: initial;
  background-image: linear-gradient(-180deg, #00D775, #00BD68);
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.1) 0 2px 4px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Inter,-apple-system,system-ui,Roboto,"Helvetica Neue",Arial,sans-serif;
  height: 55px;

  outline: 0;
  overflow: hidden;
  padding: 0 20px;
  pointer-events: auto;
  position: relative;
  text-align: center;
  touch-action: manipulation;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: top;
  white-space: nowrap;
  width: 100%;
  z-index: 9;
  border: 0;
}

.button-41:hover {
  background: #00bd68;
}
</style>
</head>

<body>

@include('home.nav')


<div class="cen">
<a href="{{url("choice/calculateOnPest/$data->id")}}">
<button class="button-41" role="button">ပိုးသတ်ဆေးနှင့်ဖြန်းလိုသည့်<br>လယ်ဧကတွက်ချက်ခြင်း</button>
</a><br><br>
<a href="{{url("choice/calculateOnBudget/$data->id")}}">
<button class="button-41" role="button">ဘက်ဂျတ်ပေါ်မူတည်ပြီသတ်ဆေးနှင့်ဖြန်းလိုသည့်<br>လယ်ဧကတွက်ချက်ခြင်း</button>
</a>
</div>




</body>
</html>