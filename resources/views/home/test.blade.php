<!DOCTYPE html>
<html>
<head>
    <title>test Laravel Page</title>
</head>
<body>

<h1>laravel testt</h1>
<p>This is a paragraph.</p>
ıd no : {{$id}}
name: {{$name}}
<?php
        echo "ıd number:",$id;
        echo  "<br> name:",$name;

?>
<a href="{{route('home')}}">ana sayfa</a>


</body>
</html>
