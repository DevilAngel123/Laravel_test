<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form role ="form" action="" method="post">

        @csrf
        
        <label>Name</label>
        
        <input class="form-control" name="category_name" value ="{{$cate->category_name}}">
        
        <label>Description</label>
        
        <input class="form-control" name="category_description" value ="{{$cate->description}}">
        
        <button type="submit" class="btn btn-success">Submit Button</button>
        
        <button type="reset" class="btn btn-primary">Reset Button</button>
    </form>
</body>
</html>