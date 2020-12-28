
    
<?php




//connect database
$conn = mysqli_connect("localhost","root","","injection-machine");

//check connection

if(!$conn)
{
    echo 'connect erorr'. mysqli_connect_error(); }

$run=$stop=$quantity="";


// sql query to fetch last one row 
$sql2 ='SELECT * FROM tablel ORDER BY ID desc LIMIT 1';

 // make query & get result
$result = mysqli_query($conn,$sql2);

// fetch data 
$dir = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($dir as $dirc){
if ($dirc['stop'] == 'OFF')
        {
         echo "<h1>OFF</h1>";
        }
    elseif ($dirc['quantity'] == 'quantity')
        {
         echo "<h1>quantity</h1>";
        }
    elseif ($dirc['run'] == 'ON')
        {
         echo "<h1>ON</h1>";
        }

}

//free result from memory
mysqli_free_result($result);


mysqli_close($conn);



    ?>