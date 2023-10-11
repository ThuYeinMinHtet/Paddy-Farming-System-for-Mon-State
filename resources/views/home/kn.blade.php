<html>


<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

@include('home.nav')

<br>

<img src="http://localhost:8000/knowledge_images/{{$knowledge->image}}"
style="width: 500px;height:45vh;
display:block;margin-left:auto;margin-right:auto">
<p class="text-lg"
style="margin: 22px;text-align:justify">{{$knowledge->body}}<br>
{{$knowledge->article}}<br>
{{$knowledge->ref}}


</p>




</body>
</html>