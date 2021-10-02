<head>
    <style> #donor1 {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#donor1 td, #donor1 th {
  border: 1px solid #ddd;
  padding: 8px;
}

#donor1 tr:nth-child(even){background-color: #f2f2f2;}

#donor1 tr:hover {background-color: #ddd;}

#donor1 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4bc714;
  color: white;
}

.btn{
  background-color: #428713;
  font-family: Arial, Helvetica, sans-serif;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
@if (session('status'))
    <div class="alert alert-success" id="clickme" >
        {{ session('status') }}
    </div>
@endif

<table class="table" id="donor1">
<tr>
    <th>id</th>
    <th>food Item</th>
    <th>Best Untill</th>
    <th>Donor Name </th>
    <th>Address </th>
    <th>Contact Number </th>
    <th colspan="3">Actions</th>
</tr>
@foreach($data as $item)

    <tr>
        <td>{{$item->id}} </td>
        <td>{{$item->food_item}} </td>
        <td>{{$item->best_untill}} </td>
        <td> {{$item->user_name}} </td>
        <td> {{$item->address}} </td>
        <td> {{$item->contact}} </td>

        <td><a href="/donor/food/edit/{{$item->id}}"><button class="btn">Edit</button></a></td>
        <form method="POST" action="/donor/food/delete/{{$item->id}}">
        @csrf
        @method('delete')
        <td><input class="btn" type="submit" value="Delete"></td>
        </form>



    </tr>

@endforeach
</table>
<a href="/donor/food/create" class="btn" >Add Food</a>
<a href="/home" class="btn" >Homepage</a>