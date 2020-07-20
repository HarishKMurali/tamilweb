<?php
require 'config.php';
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <br>

<style>
body {background-image:url("img/tamil.jpg");
    background-size: cover;
    background-position: center;
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
<h2>Thirukkural Puzzles</h2>
<div class="row" style="margin-top:25px;">
<div class="col-md-4"></div>
<div class="col-md-4">
<?php
            $sql="select sno from kural";
            $result = $con->query($sql);

            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {?>
                    <div style="background-color:white; margin-top: 3px; text-align:center;">
                    
                    <a href="question_page.php?no=<?php echo $row["sno"]?>">
                    
                    <h4><?php  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thirukkural-".$row["sno"]?></h4>
                    </a>
                    </div>
                    <?php
                }
            }
            else 
            {
                echo "0 results";
            }
          ?>
          </div>
          </div>
<div class="butt">
<button onclick="goBack()" class="site-btn header-btn">Go back</button>
</div>
</body>
<script>
function goBack() {
  window.history.back();
}
</script>
</html>
