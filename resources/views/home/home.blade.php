<html>

<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paddy Farming System for Mon State</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

   <link rel="stylesheet" href="css/show.css">
   <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
 
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js">
    </script>
    <style>
      .carousel-container {
  width: 1100px;
  margin: 50px auto;
  position: relative;


}
@media (max-width: 768px) {
  .carousel-container {
    width: 95%;
  }
}
.inner-carousel {
  width: 100%;

  overflow: hidden;
}
.track {
  display: inline-flex;
  height: 80%;
  transition: transform 0.2s ease-in-out;
}
.card-container {
  width: 275px;
  height: 200px;
  flex-shrink: 0;
  padding-right: 10px;
}
@media (max-width: 768px) {
  .card-container {
    width: 184px;
  }
}
.card {
  width: 100%;
  height:30vh;
  /*display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;*/
  background-position: center bottom;
  background-size: center;
  background-repeat: no-repeat;
  border-radius: 2px;
}
.card1 {
  background-image: url("https://cdn.pixabay.com/photo/2018/08/21/23/29/fog-3622519_960_720.jpg");
}
.card2 {
  background-image: url("https://cdn.pixabay.com/photo/2016/11/14/04/45/elephant-1822636_960_720.jpg");
}

.nav button {
  position: absolute;
  top: 40%;
  transform: translatey(-50%);
  width: 60px;
  height: 60px;
  border-radius: 50%;
  outline: none;
  border: 1px solid #000;
  cursor: pointer;
}
.nav .prev {
  left: -30px;
  display: none;
}
.nav .prev.show {
  display: block;
}
.nav .next {
  right: -30px;
}
.nav .next.hide {
  display: none;
}
.gr{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width:80%;
}@media only screen and (max-width: 600px){
  .gr{
    top: 55%;
  }
}

      </style>
  
</head> 
<body>

@include('home.nav')


 
@include('home.slideshow')





@include('home.intropart')
 
<br><br><br><br>
<br><br>

@include('home.service') 
<br><br><br>
<br><br><br><br><br><br><br><br><br>

 
@include('home.review') 
<script>

$(document).on("scroll", function() {
  var pageTop = $(document).scrollTop();
  var pageBottom = pageTop + $(window).height();
  var tags = $(".tag");

  for (var i = 0; i < tags.length; i++) {
    var tag = tags[i];

    if ($(tag).position().top < pageBottom) {
      $(tag).addClass("visible");
    } else {
      $(tag).removeClass("visible");
    }
  }
});


    </script>
</body>
</html>