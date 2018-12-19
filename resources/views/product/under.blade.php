<!DOCTYPE html>
<html>
<head>
	<title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}" >
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
          <li><a  href="/logout">LogOut</a></li>
    
      </ul>
    </div>
  </div>
</nav>
	




	 <div class="container" style="width:1000px;">  
                <h3 align="center">Food for under weight</h3><br />  
                 @foreach($under as $u)
                <div class="col-md-3">  
                     <form method="post" >  
                          <div style="border:1px solid #333; height: 380px; background-color:#727276; border-radius:5px; padding:16px; margin-top:30px;" align="center">  
                               <img src="pic/{{$u->productImage}}" style="height: 150px; width: 150px;border-radius:25%;" /><br />  
                               <h4 style="color: white;" class="text-info">{{$u->productName}}</h4>
                               <h6 style="color: white;" class="text-info">{{$u->productUnit}}</h6>   
                               <h4 style="color: white;" class="text-info">৳{{$u->productPrice}}</h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="" />  
                               <input type="hidden" name="hidden_price" value="" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn " value="Add to Cart" />  
                          </div>  
                     </form>  
                </div> 

                @endforeach


                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered" style="border:1px solid #333;background-color:#727276; color: white;">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                         
                          <tr>  
                               <td>asdsad</td>  
                               <td>asdasds</td>  
                               <td>sadasd</td>  
                               <td>sdasdsadsa</td>  
                               <td><a href="#"><span class="text-info">Remove</span></a></td>  
                          </tr>  
                            
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">...</td>  
                               <td></td>  
                          </tr>  
                            
                     </table> 
                     <a href="../index.php"><button>CheckOut</button></a>  
                </div>
                </div>
</body>
</html>