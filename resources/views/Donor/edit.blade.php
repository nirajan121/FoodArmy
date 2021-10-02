@php
$user=auth()->user();

@endphp
<head>
  <style>
.btn1{
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
.btn2{
  background-color: #EB0202;
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
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  font-family: Arial, Helvetica, sans-serif;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-family: Arial, Helvetica, sans-serif;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form-group1 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.form-group {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.form-group2 {
  float: left;
  width: 75%;
  margin-top: 6px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .form-group, .form-group2, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
 


  </style>
</head>
<div class="container">
  <form action="/donor/food/edit/{{$data->id}}" method="POST">
 @csrf
  <div class="row">
    <div class="col-25">
      <label>Food Item</label>
    </div>
    <div class="col-75">
      <input type="text" value="{{$data->food_item}}"  name="food_item" placeholder="Name of Food" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Best Untill</label>
    </div>
    <div class="col-75">
      <input type="text" value="{{$data->best_untill}}" placeholder="Enter Expiery Date" name="best_untill" required>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label>Address</label>
    </div>
    <div class="col-75">
      <input type="text" value="{{$data->address}}" placeholder="Your Complete Address" name="address" required>
    </div>
  </div>
 <div class="row">
    <div class="col-25">
      <label>Contact</label>
    </div>
    <div class="col-75">
      <input type="text" value="{{$data->contact}}" name="contact" placeholder="Your Contact Number" required >
    </div>
  </div>
  <button type="submit" class="btn1">Update</button>
      </form>
      <div style="margin-top:10px">
      <a href="/donor">
      <button class="btn2">Cancel</button></a></div>
    </div>
          </div>
    
        </div>
</div>
 