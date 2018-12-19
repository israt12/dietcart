<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       

    
      </ul>
    </div>
  </div>
</nav>

	<h2>Edit Product</h2>
	<div class="container">
	<a href="/product" style="background-color: black; color: white;" class="btn">Back</a>
	<br/>
	<br/>
	<form method="post" action="/product/{{$pro->productId}}">
	{{csrf_field()}}
		<input type="hidden" name="pid" value="{{$pro->productId}}">
		<input type="hidden" name="_method" value="put">
		<table>
			
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="pname" value="{{$pro->productName}}"></td>
			</tr>
			<tr>
				<td>Product Unit</td>
				<td><input type="text" name="punit" value="{{$pro->productUnit}}"></td>
			</tr>
			<tr>
				<td>Product Price</td>
				<td><input type="text" name="pprice" value="{{$pro->productPrice}}"></td>
			</tr>
			<tr>
				<td>Product Description</td>
				<td><input type="text" name="pdescription" value="{{$pro->productDescription}}"></td>
			</tr>
			<tr>
				<td>Product Image</td>
				<td><img src="../../pic/{{$pro->productImage}}" style="height: 150px; width: 150px;border-radius:25%;" /></br><input type="file" name="pimage" value="{{$pro->productImage}}"></td>
			</tr>
			<tr>
				<td>Product Catagory</td>
				<td><input type="text" name="pcatagory" value="{{$pro->productCatagory}}"></td>
			</tr>
			<tr>
				<td>Product Type</td>
				<td><input type="text" name="ptype" value="{{$pro->productType}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input style="background-color: black; color: white;" class="btn" type="submit" value="Update"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>