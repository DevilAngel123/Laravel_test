
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    

<div class="card shadow mb-4">

<div class="card-header py-3">

<h6 class="m-0 font-weight-bold text-primary">Category</h6>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead>

<tr>

<th>STT</th>

<th>Name</th>

<th>Description</th>

<th>Chỉnh sửa</th>

</tr>

</thead>

<tbody>

@foreach($categories as $key => $value)

<tr>

<td>{{ $key+1 }}</td>

<td>{{ $value->category_name }}</td>

<td>{{ $value->category_description}}</td>

<td>

<a href="{{asset('category/edit/'.$value->category_id)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>

<a href="{{asset('category/delete/'.$value->category_id)}}" onclick="return confirm('Do you wanna delete this?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

</div>


</body>
</html>