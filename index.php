<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.slidecontainer {
  width: 100%;
}


.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #0EA4BB;
  cursor: pointer;
}


</style>
</head>
<body>

<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('mynewdb1',$conn) or die("unable to connect to database"); 
?>   

<table style="width:100%">
  <tr>
  <th>Engine 1 </th>
    <th><input type="range" min="1" max="100" value="50" class="slider" id="myRange"></th>
   </tr> 
    <tr>
  <th>Engine 2 </th>
    <th><input type="range" min="1" max="100" value="50" class="slider" id="myRange"></th>
   </tr> 
    <tr>
  <th>Engine 3 </th>
    <th><input type="range" min="1" max="100" value="50" class="slider" id="myRange"></th>
   </tr> 
    <tr>
  <th>Engine 4 </th>
    <th><input type="range" min="1" max="100" value="50" class="slider" id="myRange"></th>
   </tr> 
    <tr>
  <th>Engine 5 </th>
    <th><input type="range" min="1" max="100" value="50" class="slider" id="myRange"></th>
   </tr> 
    <tr>
  <th>Engine 6 </th>
    <th><input type="range" min="1" max="100" value="50" class="slider" id="myRange"></th>
   </tr> 
    <tr>
  <th>								  <th>
    <th>							</th>
   </tr> 
   <tr>
  <th>								  <th>
    <th>							</th>
   </tr> 
   <tr>
  <th><button type="button">Save	</button></th>
  <th><button type="button">Run</button></th>
   </tr> 
   
   </table>
	

</body>
</html>
