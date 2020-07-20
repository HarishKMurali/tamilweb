<?php
require 'config.php';
?>

<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <br>

<style>
body {background-image:url("img/Tamil_Language.jpg");
    background-size: cover;
    background-repeat: no-repeat;
color:white;}
h2{
    color:white;
}
.imgcontainer {
  text-align: center;
  margin: 10% 35% 2% 35%;
  position: relative;
}
.w3-container,.w3-panel{padding:0.05em 5em 16px 5em}
.w3-container:after
{content:"";display:table;clear:both}

                            #courses{
                                padding:15px;
                                  overflow: hidden;
                                  background-color: #f2f2f2;
                                  font-color:white;
                                  font-family: arial, sans-serif;
                            }

.butt{
    margin: 2% 35% 2% 35%;
}
.button {
  background-color: #4CAF50;
}
</style>

</head>

<body class="w3-container">
<h2>Thirukkural-<?php echo $_GET['no'];?></h2>
<div class="row" style="margin-top: 50px;">
<div class="col-md-1"></div>
<div class="col-md-4">
    

<?php
$no= $_GET['no'];
$sql="select questionimg from kural where sno=$no ";
$result=mysqli_query($con,$sql);
foreach($result as $row){
    $image = substr($row['questionimg'], 0);
    echo "<img src='".$image."' /><br />";
}
//echo '<img src="'.$row.'" alt="">';

//echo '<img src="img/bg1.jpg">';
?>
</div>

<div class="col-md-2">       </div>
<div class="col-md-4">    

<?php
$no= $_GET['no'];
$sql="select answerimg from kural where sno=$no ";
$result=mysqli_query($con,$sql);
foreach($result as $row){
    $image = substr($row['answerimg'], 0);
    echo "<img src='".$image."' /><br />";
}
//echo '<img src="'.$row.'" alt="">';

//echo '<img src="img/bg1.jpg">';
?>

</div>
</div>

<div class="butt" style="margin-top: 3px;">
<button onclick="goBack()" style='padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  margin:auto;
  display:block;
  font-weight: bold;'>Go Back</button>
  </div>

</body>
<script>
function goBack() {
  window.history.back();
}
</script>
</html>
