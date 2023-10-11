<html>


<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myanmar paddy</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

   <link rel="stylesheet" href="show.css">
   <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKutYwaTZJCZLrDcKFjnaABTP54kyQeO8&amp;libraries=places,geometry"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
   <style>
.city{


    position: absolute;
    top: 15%;
    left:12%
}
.bug{
    background-color: rgba(0, 0, 0, 0.5);
    border: 1px solid white;
}
.bsf{


    background-color:rgba(0, 0, 0, 0.2);
    
}
 
 h1 {
     font-weight: 700;
}
 #time {
     font-size: 16px;
     font-weight: 300;
     color: black;
}
 #dis {
     height: 50px;
     background: #111 9;
     color: black;
     backdrop-filter: blur(5px);
}
 input[type=text] {
     position: absolute;
     bottom: 50%;
     width: 150px;
     height: 25px;
     border: 1px solid #111;
     border-radius: 4px;
     font-size: 16px;
     background-color: #fff 3;
     transition: width 0.4s ease-in-out;
     color: black;
}
 ::placeholder {
     color: black;
}
 input[type=text]:focus {
     width: 95%;
     background-color: #111 5;
     border-bottom: 1px;
}
 #loco {
     font-size: 10px;
     font-weight: 300;
     color: #aaa d;
}
 .fright {
     text-align: right;
}
 #loco-day {
     font-size: 16px;
     font-weight: 300;
     color: black;
}
 #location {
     margin-top: 3px;
     margin-bottom: 0;
     line-height: 15px;
     color: #fff;
}
 #city {
     text-align: center;
     font-size: 30px;
     font-weight: 700;
}
 #country {
     font-size: 24px;
     font-weight: 300;
     text-align: center;
}
 #day {
     font-size: 16px;
     font-weight: 300;
     color: #fff;
}
 #tval {
     float: right;
     margin-right: 5px;
}
 #temp {
     font-size: 40px;
     font-weight: 400;
}
 #sup {
     font-size: 18px;
     font-weight: 300;
     vertical-align: super;
}
 #cf {
     vertical-align: super;
     text-decoration: underline;
     text-decoration-style: solid;
}
 #unit {
     font-size: 24px;
     font-weight: 400;
     vertical-align: super;
}
 #cond {
     background: #000 0;
     text-align: right;
}
 #temp-cond {
     margin-top: 0;
     font-size: 22px;
     font-weight: 400;
     line-height: 15px;
}
 #min-max {
     font-weight: 300;
}
 #temp-icon {
     position: absolute;
     top: 0;
     left: 15px;
}
 a:hover {
     text-decoration: none;
}
 a:active {
     text-decoration: none;
}
 #wind {
     font-weight: 300;
}
 @-webkit-keyframes rotating 
/* Safari and Chrome */
 {
     from {
         -webkit-transform: rotate(0deg);
         -o-transform: rotate(0deg);
         transform: rotate(0deg);
    }
     to {
         -webkit-transform: rotate(360deg);
         -o-transform: rotate(360deg);
         transform: rotate(360deg);
    }
}
 .rotating {
     animation: rotating 5s linear infinite;
}
 #com_cir {
     position: absolute;
     width: 50px;
     height: 50px;
     border: 5px solid #aaa 4;
     border-radius: 50%;
}
 #com_arrow {
     position: absolute;
     -webkit-transform: rotate(0deg);
    /*transform:translate(-5%,-5%);
    */
     -moz-transform: rotate(0deg);
     -o-transform: rotate(0deg);
     transform: rotate(0deg);
     top: 0%;
     left: 47.5%;
     width: 2.5px;
     height: 100%;
}
/*background:#222;
*/
 #marker {
     position: absolute;
     width: 100%;
     height: 50%;
}
/*background:#aaa4;
*/
 .rot-deg {
     position: absolute;
     left: 0;
     top: 0;
}
 .wrapper {
     margin-top: 10%;
     overflow: hidden;
}
 .perc-border {
     position: absolute;
     left: 10%;
     bottom: 5px;
     width: 80%;
     height: 5px;
     border-radius: 50px;
     background: transparent;
     border: 1px solid #fff a;
}
 .perc-fill {
     position: absolute;
     height: 100%;
     width: 10%;
     background: #fff;
     border-radius: 50px;
}
 #uvTip {
     text-align: justify;
}
 .cc {
     border: 1px solid #fff 1;
     margin-right: 5px;
     background: rgba(0, 0, 0, 0.20);
     backdrop-filter: blur(5px);
     -webkit-backdrop-filter: blur(5px);
     border-radius: 7px;
}
 #srise, #sset, #mrise, #mset {
     text-transform: lowercase;
}
 .center {
     display: block;
     margin-left: auto;
     margin-right: auto;
     width: 50%;
}
 .chart-container {
     position: relative;
     margin: auto;
     height: 30vh;
     width: 98vw;
}
 .fleft {
     text-align: left;
}
 #ps {
     color: #fff 8;
}
.bg-orange-5001{
 
    background:skyblue
}
.nbgd{
    background-color: rgba(0, 0, 0, 0.2);
    width:100%
}
</style>
</head>

<body>

@include('home.nav')

<img class="h-auto max-w-full" src="https://img.freepik.com/premium-photo/beautiful-rice-field-landscape-with-mountains_104785-1363.jpg" alt="image description"
style="width: 100%;height:65vh; ">




<div class="city">

<div class="row" id="dis">
     <div id="search" class="col-sm-5" style="padding-bottom:0px;">
          <input class="" id="c_query" type="hidden" name="search" placeholder="Search City">
     </div>


</div>
<p id="location" class="ml-2"><span id="city" class="text-center "style="color:black"></span> <span id="country"style="color:black"></span></p>
<span id="loco" class="mt-0 mr-1">Local</span>
       <span id="loco-day" class="mt-0 mr-2"></span>

<p id="tval"><span id="temp" class="text-info">00</span>
          <span id="unit"><sup id="sup" style="color:white;">o</sup><a style="color:blue;" href="#" id="cf" onclick="cffc()">C</a></span></p>



          <div class="row mt-2" style="background:;">
        <div class="col-sm-8" style="padding-bottom:0px;">
          <p id="location" class="ml-2"><span id="city" class="text-center "style="color:black"></span>, <span id="country"style="color:black"></span></p>
        
        </div>
        
        <div class="col-sm-4" style="padding-bottom:0px;">  
          <p id="tval"><span id="temp" class="text-info"></span>
          <span id="unit"><sup id="sup" style="color:white;">o</sup><a style="color:white;" href="#" id="cf" onclick="cffc()"></a></span></p>
        </div>
      </div>
   
<!--   weather condition and high-low  -->
      <div class="row mt-0" style="margin-right:0px;
    ">
        <div class="col-md-3" style="padding:0;">

        </div><br>
        <div  id="cond" class="col-md-9" style="background:skyblue; padding:0;">
          <p class="mr-2" id="temp-cond" style=" padding:0;background:skyblue"></p>
          <p id="min-max" class="mr-2" style="background:skyblue; padding:0;"><span id="maxTemp">-</span><sup style="color:black;"> o</sup> / <span id="minTemp">-</span><sup style="color:black;"> o</sup></p>
        </div>
      </div>






</div>
<div class="bg-teal-700 h-64"
          
          style="width:100%">
  <div class="md:flex h-full items-stretch">
    <div class="bg-orange-5001 p-10 md:w-1/5">
    <div >    
    <div id="hx-0"></div>
       <img src="" id="temp-icon-h0"></img>
      <div id="temp-con-h0"></div></div>

    </div>
    <div class="bg-orange-5001 p-10 md:w-1/5">
    <div >    
    <div id="hx-1"></div>
       <img src="" id="temp-icon-h1"></img>
      <div id="temp-con-h1"></div></div>

    </div>
    <div class="bg-orange-5001 p-10 md:w-1/5"> <div id="hx-2"></div>
       <img src="" id="temp-icon-h2"></img>
      <div id="temp-con-h2"></div></div>
    <div class="bg-orange-5001 p-10 md:w-1/5"> <div id="hx-3"></div>
       <img src="" id="temp-icon-h3"></img>
      <div id="temp-con-h3"></div></div>
    <div class="bg-orange-5001 p-10 md:w-1/5"> <div id="hx-4"></div>
       <img src="" id="temp-icon-h4"></img>
      <div id="temp-con-h4"></div></div>
  </div>






  <div class="bsf">
<!-- detail Hourly graph -->
  <div class="chart-container"    style="color:white;
  background-color:white">
    <canvas id="chart"
    style="color:white; background-color:white"></canvas>
  </div>



  <div class="bg-teal-700 h-64"
  style="background-color:#198450;">
  <div class="md:flex h-full items-stretch">
    <div class=" p-10 md:w-1/4">

    <svg viewBox="0 0 512 512"  fill="white" class="ml-2 rotating" width="50" title="fan"
    
    style="display: block;
    margin-left:auto;
    margin-right:auto">
  <path d="M352.57 128c-28.09 0-54.09 4.52-77.06 12.86l12.41-123.11C289 7.31 279.81-1.18 269.33.13 189.63 10.13 128 77.64 128 159.43c0 28.09 4.52 54.09 12.86 77.06L17.75 224.08C7.31 223-1.18 232.19.13 242.67c10 79.7 77.51 141.33 159.3 141.33 28.09 0 54.09-4.52 77.06-12.86l-12.41 123.11c-1.05 10.43 8.11 18.93 18.59 17.62 79.7-10 141.33-77.51 141.33-159.3 0-28.09-4.52-54.09-12.86-77.06l123.11 12.41c10.44 1.05 18.93-8.11 17.62-18.59-10-79.7-77.51-141.33-159.3-141.33zM256 288a32 32 0 1 1 32-32 32 32 0 0 1-32 32z" />
          </svg>
        
            <div style="text-align: center;">
                    <h4 style="color:white;display:inline-block">လေတိုက်နှုန်း</h4>
                    <p><span id="wind-speed" style="color:white">--</span><span
                    style="color:white"> km/h</span></p>

            </div>
    </div>
    <div class=" p-10 md:w-1/4">




    <svg viewBox="0 0 512 512" width="50" title="car" class="mt-3" fill="white"
    style="text-align: center;display:block;
    margin-left:auto;
    margin-right:auto">
                        <path d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z" />                        
                    </svg>
                
<div style="text-align: center;">
                    <h4 style="color:white">မြူထူထပ်မှု</h4>
                    <span id="vis"style="color:white">--</span> <span style="color:white">km</span>




</div>








    </div>

    <div class=" p-10 md:w-1/4">



    <svg viewBox="0 0 512 512" width="45" title="" class="mt-4" fill="white"
    style="display: block;
    margin-left:auto;
    margin-right:auto">
  <path d="M205.22 22.09c-7.94-28.78-49.44-30.12-58.44 0C100.01 179.85 0 222.72 0 333.91 0 432.35 78.72 512 176 512s176-79.65 176-178.09c0-111.75-99.79-153.34-146.78-311.82zM176 448c-61.75 0-112-50.25-112-112 0-8.84 7.16-16 16-16s16 7.16 16 16c0 44.11 35.89 80 80 80 8.84 0 16 7.16 16 16s-7.16 16-16 16z" />
                            </svg>
                          
                          
                            <h4 style="color:white;
                            text-align:center">စိုထိုင်းဆ</h4>
                    <p
                    style=" text-align:center"><span id="humid"style="color:white">--</span><span style="color:white"> %</span></p>


    </div>

    <div class=" p-10 md:w-1/4">


    <svg viewBox="0 0 512 512" width="45" fill="white" title="cloud-rain" class="mt-4" style="display: block;
    margin-left:auto;
    margin-right:auto">
                        <path d="M416 128c-.6 0-1.1.2-1.6.2 1.1-5.2 1.6-10.6 1.6-16.2 0-44.2-35.8-80-80-80-24.6 0-46.3 11.3-61 28.8C256.4 24.8 219.3 0 176 0 114.1 0 64 50.1 64 112c0 7.3.8 14.3 2.1 21.2C27.8 145.8 0 181.5 0 224c0 53 43 96 96 96h320c53 0 96-43 96-96s-43-96-96-96zM88 374.2c-12.8 44.4-40 56.4-40 87.7 0 27.7 21.5 50.1 48 50.1s48-22.4 48-50.1c0-31.4-27.2-43.1-40-87.7-2.2-8.1-13.5-8.5-16 0zm160 0c-12.8 44.4-40 56.4-40 87.7 0 27.7 21.5 50.1 48 50.1s48-22.4 48-50.1c0-31.4-27.2-43.1-40-87.7-2.2-8.1-13.5-8.5-16 0zm160 0c-12.8 44.4-40 56.4-40 87.7 0 27.7 21.5 50.1 48 50.1s48-22.4 48-50.1c0-31.4-27.2-43.1-40-87.7-2.2-8.1-13.5-8.5-16 0z" />
                    </svg>
            
<div style="text-align: center;">
                    <h4 style="color:white">မိုးရွာနိုင်ခြေ</h4>
                    <p><span id="precip"style="color:white">--</span><span style="color:white"> mm</span></p></div>
    </div>
  </div>
</div>







<div class="bg-teal-700 h-64"style="display: block;
    margin-left:auto;
    margin-right:auto">
  <div class="md:flex h-full items-stretch">
    <div class="bg-orange-5001 p-10 md:w-1/2"style="display: block;
    margin-left:auto;
    margin-right:auto"><div class="col-sm-1"
    style="text-align: center;"></div>
    <div class="col-sm-5 cc"style="text-align: center;
    height:35vh;
    width:100%">

<div style="margin-top: 0px;">

      <div id="day-1" class="fleft"style="text-align: center;"></div>
      <div class="row">
        <span class="col-sm-8 fleft"style="text-align: center;">

        <img src="" class="col-sm-4 float-right" id="temp-icon-d1"
      style="width: 15%;
      margin-right:45px;
      position:absolute;
      left:65%;top:0%"></img>
          <p id="temp-d1"style="text-align: center;" ></p>
          <div style="text-align: center;">
          <span id="mx_td1"style="text-align: center;"></span><sup style="text-align: center;"> o</sup> / <span id="mn_td1"style="text-align: center;"></span><sup> o</sup>
        </span>
      </div>
      </div>
      <div id="wirs1" class="fleft"
      style="text-align: center;"></div>
    </div></div>
  </div>

    <div class="bg-orange-5001 p-10 md:w-1/2"style="display: block;
    margin-left:auto;
    margin-right:auto">
    
    <div class="col-sm-5 cc"style="text-align: center;
    height:35vh;
    width:100%">
      <div id="day-2" class="fleft"style="text-align: center;"></div>
    
    
     
    
      <div class="row">
      <img src="" class="col-sm-4 float-right" id="temp-icon-d2"
      style="width: 15%;
      margin-right:45px;
      position:absolute;
      left:65%;top:0%"></img>

      <div style="text-align: center;">
        <span class="col-sm-8 fleft"style="margin-top:6%">

      
          <p id="temp-d2" style="text-align: center;"></p>

       
          <span id="mx_td2"></span>
          
        
          
          <sup> o</sup> / <span id="mn_td2"></span><sup> o</sup>
        </span>
     
      </d>
      <div id="wirs2" class="fleft"style="text-align: center;"></div>
      </div>
    </div></div>
  </div>
</div>






 

<script>//--------set time and date
var myLineChart;
var dd, mm, mmw, yy, day_,day, h, m, s;
var days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

// doubleDigits()
function doubleDigits(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}
// system time
function realTime() {
  dd = doubleDigits(new Date().getDate());
  mm = new Date().getMonth();
  mmw = months[new Date().getMonth()];
  yy = new Date().getFullYear();
    day_= new Date().getDay();
  day = days[day_];
  h = doubleDigits(new Date().getHours());
  m = doubleDigits(new Date().getMinutes());
  s = doubleDigits(new Date().getSeconds());
  document.getElementById("loco-day").innerHTML = day+", "+ dd+" "+mmw+" "+yy;
  document.getElementById("time").innerHTML = h+" : "+m;
  //+": "+s;
}
setInterval(realTime, 1000);

//-------search city
var query;
var input = document.getElementById('c_query');

input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   query = input.value;
   //console.log(query);
   getWeather()
  }
});

function to24h(x, xm, y){
    x=parseInt(x);
    if(y=="AM" && x==12){
        x -=12;
        console.log(x, xm);
        return x,xm;
    }
    else if(y=="PM"){
        x +=12;
        console.log(x, xm);
        return x,xm;
    }
    console.log(x, xm);
    return x,xm;
}
var hDiff, mDiff
function hourDiff(xh1, xh2, xm1, xm2){
    xh1=parseInt(xh1);
    xh2=parseInt(xh2);
    xm1=parseInt(xm1);
    xm2=parseInt(xm2);
    if(xm2<xm1){
        xm2 +=60;
        hDiff = xh2-xh1;
        mDiff = xm2-xm1;
        console.log("sun will be visible for :"+hDiff+":"+mDiff);
        return hDiff,mDiff;
    }
    hDiff = xh2-xh1;
    mDiff = xm2-xm1;
    console.log("sun will be visible for :",hDiff+":"+mDiff);
    return hDiff,mDiff;
}


//------fetch data json

var city, country, c_local, c_day, c_date, c_mon, c_month, c_year, c_time, temp_c, temp_f, maxt_c, maxt_f, mint_c, mint_f, tmpi, tmpc, wind, wdir, wdeg, doR, hum, perct_fill, precip, flike, pressure, uv, vis, gust, srise, sset, srise24h, sset24h, sh, smn, sapm, sh1,sh2,sm1,sm2, sadur, mrise, mset, mrise24h, mset24h, madur, mh, mmn, mapm, mphase, mlumin;
var hx, hti, htc, ht_c, ht_f;
var ch=[];
var ct=[];
var d1, ti_d, tp_d, tod_min_c, tod_min_f, tod_max_c, tod_max_f, wir, wis, cor, cos, rp, sp;

function getWeather(){
    
    // $("#chart").remove();
    
  $.getJSON("https://api.weatherapi.com/v1/forecast.json?key=c5f994689f7546a2a02104844202812&q=Mawlamyine&days=3"
, function (data) {
    city = data.location.name;
    country = data.location.country;
    c_local = data.location.localtime;
    // c_day = c_local.substr();
    c_date = c_local.substr(8, 2);
    c_mon = parseInt(c_local.substr(5, 2));
    c_month = months[c_mon-1];
    c_year = c_local.substr(0, 4);
    c_time  = c_local.substr(c_local.length - 5);
    temp_c = data.current.temp_c;
    temp_f = data.current.temp_f;
    maxt_c = Math.ceil(data.forecast.forecastday[0].day.maxtemp_c);
    maxt_f = Math.ceil(data.forecast.forecastday[0].day.maxtemp_f);
    mint_c = Math.ceil(data.forecast.forecastday[0].day.mintemp_c);
    mint_f = Math.ceil(data.forecast.forecastday[0].day.mintemp_f);
    tmpi = data.current.condition.icon;
    tmpc = data.current.condition.text;
    wind = data.current.wind_kph;
    wdir = data.current.wind_dir;
    wdeg = data.current.wind_degree;
        doR = wdeg+"deg";
    hum = data.current.humidity;
        perct_fill = hum+"%";
    precip = data.current.precip_mm;
    pressure =data.current.pressure_mb;
    flikec = parseInt(data.current.feelslike_c);
    flikef = data.current.feelslike_f;
    uv = data.current.uv;
        vis = data.current.vis_km;
        gust = data.current.gust_kph;
    // astro
    srise = data.forecast.forecastday[0].astro.sunrise;
    sset = data.forecast.forecastday[0].astro.sunset;
    mrise = data.forecast.forecastday[0].astro.moonrise;
    mset = data.forecast.forecastday[0].astro.moonset;
    mphase = data.forecast.forecastday[0].astro.moon_phase;
    mlumin = data.forecast.forecastday[0].astro.moon_illumination;
        sapm = srise.substr(srise.length - 2);
        sh = srise.substr(0,2);
        smn = srise.substr(3,2);
        sh1 = sh;
        sm1 = smn;
        srise24h = to24h(sh, smn, sapm);
        sapm = sset.substr(sset.length - 2);
        sh = sset.substr(0,2);
        smn = sset.substr(3,2);
        sh2 = sh;
        sm2 = smn;
        sset24h = to24h(sh, smn, sapm);
        mapm = mrise.substr(mrise.length-2);
        mh = mrise.substr(0,2);
        mmn = mrise.substr(3,2);
        mrise24h = to24h(mh, mmn, mapm);
        mapm = mset.substr(mset.length - 2);
        mh = mset.substr(0,2);
        mmn = mset.substr(3,2);
        mset24h = to24h(mh, mmn, mapm);
        sadur;
        madur = mset-mrise;
        console.log(sadur, madur, sapm);
    
    $("#city").html(city);
    $("#country").html(country);
    //$('#c_day').html('');
    $('#c_date').html(c_date);
    $('#c_month').html(c_month);
    $('#c_year').html(c_year);
    $('#c_time').html(c_time);
    $("#temp").html(temp_c);
    $("#maxTemp").html(maxt_c);
    $("#minTemp").html(mint_c);
    $("#temp-icon").attr('src', tmpi);
    $("#temp-cond").html(tmpc);
    $("#wind-speed").html(wind);5
    $("#wind-dir").html(wdir);
    $("#wind-deg").html(wdeg);
        $("#com_arrow").css('transform','rotate('+doR+')');
        $("#com_arrow").css('-moz-transform','rotate('+doR+')');
        $("#com_arrow").css('-webkit-transform','rotate('+doR+')');
        $("#com_arrow").css('-o-transform','rotate('+doR+')');
    $("#humid").html(hum);
    $("#precip").html(precip);
    $("#pressure").html(pressure);
        $(".perc-fill").css('width',perct_fill);
    $("#feelsLike").html(flikec);
    $("#uv").html(uv);
        $("#vis").html(vis);
        $("#gust").html(gust);
    $("#srise").html(srise);
    $("#sset").html(sset);
    $("#mrise").html(mrise);
    $("#mset").html(mset);
    $("#mphase").html(mphase);
    $("#mlumin").html(mlumin);
// ---    Location day
        if(dd>c_date && mm==c_mon){
            console.log(dd, c_date,day);
            day=days[day_-1];
        $('#day').html(day);
        }
        else if(dd<c_date && m==c_mon){
            day=days[day_+1];
        $('#day').html(day);
        }
        else if(dd==c_date){
        $('#day').html(day);
        }
        
        var wsp;
        switch(true){
      case wind < 0:
//                 Calm
                wsp = 100;
                break;
            case wind < 6:
//                 Light Air
                wsp = 8;
                break;
            case wind < 12:
//                 Light Breeze
                wsp = 6;
                break;
            case wind < 20:
//                 Gentle Breeze
                wsp = 5;
                break;
            case wind < 29:
//                 Moderate Breeze
                wsp = 4;
                break;
            case wind < 39:
//                 Fresh Breeze
                wsp = 3;
                break;
            case wind < 50:
//                 Strong Breeze
                wsp = 2;
                break;
            case wind < 62:
//                 Near Gale
                wsp = 1.5;
                break;
            case wind < 75:
//                 Gale
                wsp = 1.2;
                break;
            case wind < 89:
//                 Severe Gale
                wsp = 1;
                break;
            case wind < 102:
//                 Strong Storm
                wsp = 0.75;
                break;
            case wind < 117:
//                 Violent Storm
                wsp = 0.5;
                break;
            case wind >= 118:
//                 Hurricane
                wsp = 0.3;
                break;
        }
        // $(".rotating").css('-webkit-animation', 'rotating '+wsp+'s linear infinite;');
        // $(".rotating").css('-moz-animation', 'rotating '+wsp+'s linear infinite;');
        // $(".rotating").css('-ms-animation', 'rotating '+wsp+'s linear infinite;');
        // console.log($(".rotating").css('animation', 'rotating 5s linear infinite;'));
        // $(".rotating").animate({animation :'rotating'+wsp+'s'},'linear','infinite');
      document.documentElement.style.setProperty('$wspeed', wsp);
        console.log(wsp);
    
    
    //------ daily forecast 2 days
    for(var n_day=1; n_day<=2; n_day++){
      d1 = data.forecast.forecastday[n_day].date;
      ti_d = data.forecast.forecastday[n_day].day.condition.icon;
      tp_d = data.forecast.forecastday[n_day].day.condition.text;
      tod_min_c = data.forecast.forecastday[n_day].day.mintemp_c;
      tod_min_f = data.forecast.forecastday[n_day].day.mintemp_f;
      tod_max_c = data.forecast.forecastday[n_day].day.maxtemp_c;
      tod_max_f = data.forecast.forecastday[n_day].day.maxtemp_f;
      wir = data.forecast.forecastday[n_day].day.daily_will_it_rain;
      cor = data.forecast.forecastday[n_day].day.daily_chance_of_rain;
      cos = data.forecast.forecastday[n_day].day.daily_chance_of_snow;
      if(wir){
        $("#wirs"+n_day).html("Chance of rain: "+cor+"%.");
      }
      
      $("#day-"+n_day).html(d1);
      $("#temp-icon-d"+n_day).attr('src', ti_d);
      $("#temp-d"+n_day).html(tp_d);
      $("#mx_td"+n_day).html(tod_max_c);
      $("#mn_td"+n_day).html(tod_min_c);
    }
    //--------Hourly forecast 5 hrs
   
    var j = parseInt(c_time.substr(0,2));
    var jj;
    var k = 0;
    var x = 0;
    if(j==23){
      jj=0;
    }
    else{
      jj=j+1;
    }
    for(var i=jj; i<=23; i++){
        hx = data.forecast.forecastday[x].hour[i].time;
        hx  = hx.substr(hx.length - 5);
        hti = data.forecast.forecastday[x].hour[i].condition.icon;
        htc = data.forecast.forecastday[x].hour[i].condition.text;
        ht_c = data.forecast.forecastday[x].hour[i].temp_c;
        ht_f = data.forecast.forecastday[x].hour[i].temp_f;
        $("#hx-"+k).html(hx);
        $("#temp-icon-h"+k).attr('src', hti);
        $("#temp-con-h"+k).html(htc);
        $("#temp-h"+k).html(ht_c);
        k += 1;
        // console.log(i, k);
        if(i==23 && k<=4){
          i=-1;
          x=1;
          // console.log("here");
        }        
    }
    
    //------- Hourly chart 24hrs
    for(var i=0; i<=23; i++){
      var h_t = data.forecast.forecastday[0].hour[i].time;
      var h_tc = data.forecast.forecastday[0].hour[i].temp_c;
      var h_tf = data.forecast.forecastday[0].hour[i].temp_f;
      h_t = h_t.substr(h_t.length - 5);
      
      ch.push(h_t);
      ct.push(h_tc);
      // console.log('chart',ch,ct)
    }
         //$('#chart-container').append('<canvas id="chart"><canvas>');
    getChart();
    //console.log('early',ch,ct)
    
    // console.log(d1, d2, d3, d4, d5, d6);
    // console.log(ti_d1, ti_d2, ti_d3, ti_d4, ti_d5, ti_d6);

  //-----uv index
    var uvLabel, uvColor, uvText;
    //console.log(uv);
    switch(true){
      case uv < 0:
        uvLabel = 'error';
        uvColor= "grey";
                uvText="Error";
        break;
      case uv < 3:
        uvLabel = "Low";
        uvColor= "green";
                uvText="Wear sunglasses on bright days. If you burn easily, cover up and use broad spectrum SPF 30+ sunscreen.";
        break;
      case uv < 6:
        uvLabel = "Moderate";
        uvColor= "yellow";
                uvText="Stay in shade near midday when the Sun is strongest. If outdoors, wear sun-protective clothing, a wide-brimmed hat, and UV-blocking sunglasses. Generously apply broad spectrum SPF 30+ sunscreen every 1.5 hours, even on cloudy days, and after swimming or sweating.";
        break;
      case uv < 8:
        uvLabel = "High";
        uvColor= "orange";
                uvText="Reduce time in the sun between 10 a.m. and 4 p.m. If outdoors, seek shade and wear sun-protective clothing, a wide-brimmed hat, and UV-blocking sunglasses. Generously apply broad spectrum SPF 30+ sunscreen every 1.5 hours, even on cloudy days, and after swimming or sweating.";
        break;
      case uv < 11:
        uvLabel = "Very High";
        uvColor= "red";
                uvText="Minimize sun exposure between 10 a.m. and 4 p.m. If outdoors, seek shade and wear sun-protective clothing, a wide-brimmed hat, and UV-blocking sunglasses. Generously apply broad spectrum SPF 30+ sunscreen every 1.5 hours, even on cloudy days, and after swimming or sweating.";
        break;
      default:
        uvLabel = "Extreme";
        uvColor= "violet";
                uvText="Try to avoid sun exposure between 10 a.m. and 4 p.m. If outdoors, seek shade and wear sun-protective clothing, a wide-brimmed hat, and UV-blocking sunglasses. Generously apply broad spectrum SPF 30+ sunscreen every 1.5 hours, even on cloudy days, and after swimming or sweating.";
    }
    // console.log(uvLabel, uvColor);
    $("#uvLabel").html(uvLabel);
    $("#uvTip").html(uvText);
    $("#uv").css("color", uvColor);
    $("#uvLabel").css("color", uvColor);
        
   
    
  });
    // getChart.clear();
  
}
// console.log(city, country, temp_c, d1);
// console.log(ch,ct);
function getChart(){
var data = {
  labels: ch,
  datasets: [{
    label: "Temp in deg",
    backgroundColor: "rgba(99,132,255,0.2)",
    borderColor: "rgba(99,132,255,1)",
    borderWidth: 2,
    hoverBackgroundColor: "rgba(255,99,132,0.4)",
    hoverBorderColor: "rgba(255,99,132,1)",
    data: ct,
  }]
};

    var options = {
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          stacked: false,
          gridLines: {
            display: true,
            color: "rgba(99,99,132,0.2)"
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      }
    };

    Chart.Line(chart, {
    //type: 'line',
    data: data,
    options: options
});
}






//cel to far
function cffc(){
  var tempint;
  var temp = document.getElementById('temp').innerHTML; if(document.getElementById('cf').innerHTML=="C"){
    // temp=doubleDigits((temp *9/5)+32);
    // console.log(temp_c, "lol");
    temp_f = parseInt(temp_f);
    flikef = parseInt(flikef);
    document.getElementById('temp').innerHTML =temp_f;
    document.getElementById('feelsLike').innerHTML =flikef;
    document.getElementById('maxTemp').innerHTML =maxt_f;
    document.getElementById('minTemp').innerHTML =mint_f;
    document.getElementById('cf').innerHTML ="F";
    
  }
   else if(document.getElementById('cf').innerHTML=="F"){
    // temp=doubleDigits((temp -32)*5/9);
    //var tempfix = temp_c.toFixed(2);
    temp_c = parseInt(temp_c);
    flikec = parseInt(flikec);
    document.getElementById('temp').innerHTML =temp_c;
    document.getElementById('feelsLike').innerHTML =flikec;
     document.getElementById('maxTemp').innerHTML =maxt_c;
    document.getElementById('minTemp').innerHTML =mint_c;
    document.getElementById('cf').innerHTML ="C";
   }
}


getWeather();
// x.innerHTML="Mumbai";
</script>



</body>
</html>