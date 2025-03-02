<?php

require ('function.php');
$token =token_file();
$_SESSION['token']=$token;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<title>Order Ticke & The weather</title>
    
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>


    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1" >
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>Order Ticket for <em>direction</em>:</h4>
                                <form  action="run.php" method="post" autocompelet="Off">
                                    <div class="row">

                                    <div class="col-md-6">
                                            
                                                <label for="name">name :</label>
                                                <input  type="text" class="form-control  " name="name" id="name" placeholder="name" autocompelet="Off">
                                            
                                        </div>

                                        <div class="col-md-6">
                                           
                                                <label for="phone"> phone:</label>
                                                <input type="phone" class="form-control "  name="phone" id="phone" placeholder="phone" autocompelet="Off">
                                          
                                        </div>


                                        <div class="col-md-6">   
                                                <label for="from">From:</label>
                                                <select class="form-control" name='from' id='form'>
                                                    <option value="">Select a location...</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="India">India</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                </select>
                                            
                                        </div>
                                        <div class="col-md-6">
                                                <label for="to">To:</label>
                                                <select class="form-control" name='to' id='to'>
                                                    <option value="">Select a location...</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Hong Kong">HongKong</option>
                                                    <option value="India">India</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                </select>
                                           
                                        </div>

                                        <div class="col-md-6">
                                            
                                                <label for="departure">Departure date:</label>
                                                <input  type="date" class="form-control " name="deparure" id="deparure" placeholder="Select date..." autocompelet="Off">
                                            
                                        </div>
                                        <div class="col-md-6">
                                           
                                                <label for="return">Return date:</label>
                                                <input type="date" class="form-control "  name="return" id="return" placeholder="Select date..." autocompelet="Off">
                                           
                                        </div>

                                        
                                        <div class="col-md-6">
                                            <div class="radio-select">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="round">Round</label>
                                                        <input type="radio" name="trip" id="trip" value="round" autocompelet="Off">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="oneway">Oneway</label>
                                                        <input type="radio" name="trip" id="trip" value="one-way" autocompelet="Off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                        <input type="hidden" class="form-control"   name="token" id="token" value="<?php echo  $token; ?>"/>
                                        </div>


                                        <div class="col-md-6">
                                            <fieldset>
                                                <button type="submit" name="form" id="form"  class="btn">Order Ticket Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>


<?php

if(isset($_SESSION['weather'])){

    $api=$_SESSION['weather'];
    unset($_SESSION['weather']);
}


?>
<span style="float:right; margin-right:450px; padding-top:10px; color:red; font-size:20px;">The weather</span>
    <div class="tabs-content"  style="margin-top: 50px;">
        <div class="container-fluid">
           
                <div class="wrapper">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="weather-content">
                            <div class="row">
                              
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <section  class="weathergroup">
                                            <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6" >
                                            <div class="weather-item">         
                                            <form  action="run.php" method="post" >
                                            <div class="row">
                                        
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                             
                                                <select class="form-control " name='weather' id='weather'  >
                                                    <option value="" >Select a location...</option>
                                                    <option value="iran">Iran</option>
                                                    <option value="sanandaj">sanandaj</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="India">India</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                </select>
                                           
                                        </div>

                                    

                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" >
                                            
                                        <button type="submit" name="show" id="show"  class="btn col-lg-12 col-sm-12 col-md-12 col-xs-12" style="margin-top: 20px;  float:left;" >the Weather</button>
                                           
                                        </div>
                                    </div>
                                </form>                
                                </div>
                                </div>
                                      

                                                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6" >
                                                    <div class="weather-item">

                                                        <h6><?php  echo   $api->name; ?></h6>
                                                        <span style="margin-bottom: 30px;;">station: <?php  echo   $api->weather[0]->description; ?></span>
                                                        <span style="margin-bottom: 20px;;">temp: <?php  echo   $api->main->temp; ?></span>
                                                        <span style="margin-bottom: 20px;;">humidity: <?php  echo   $api->main->humidity; ?></span>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

    
    <section style="margin-top: 50px;">
    <footer >
        <div class="container-fluid">
            <div class="row">
            
                <div class="col-md-12">
                    <p>Copyright </p>
                </div>
            </div>
        </div>
    </footer>

</section>
    


</body>
</html>