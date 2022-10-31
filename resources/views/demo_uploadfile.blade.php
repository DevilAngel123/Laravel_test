<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method  ="post" action ="{{url('postFile')}}" enctype="multipart/form-data">
        @crsf
        <input type ="file " name = "myFile" id="myFile">
        <input type = "submit">
    </form>
</body>
</html>