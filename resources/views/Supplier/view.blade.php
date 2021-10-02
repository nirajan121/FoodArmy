<head>
    <style>
        #supplier {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#supplier td, #supplier th {
  border: 1px solid #ddd;
  padding: 8px;
}

#supplier tr:nth-child(even){background-color: #f2f2f2;}

#supplier tr:hover {background-color: #ddd;}

#supplier th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4bc714;
  color: white;
}
</style>
</head>
<table class="table" id="supplier">
<tr>
    <th>id</th>
    <th>food Item</th>
    <th>Best Untill</th>
    <th>Donor Name </th>
    <th>Address </th>
    <th>Contact Number </th>
</tr>
@foreach($data as $item)

    <tr>
        <td>{{$item->id}} </td>
        <td>{{$item->food_item}} </td>
        <td>{{$item->best_untill}} </td>
        <td>{{$item->user_name}} </td>
        <td>{{$item->address}} </td>
        <td>{{$item->contact}} </td>

    



    </tr>

@endforeach
</table>