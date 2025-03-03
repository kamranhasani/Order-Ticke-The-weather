<?php
require ('function.php');


//Order Ticket

if(isset($_POST['form'])){

      if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['from']) && !empty($_POST['to']) && !empty($_POST['deparure']) && !empty($_POST['return']) && !empty($_POST['trip'])&& !empty($_POST['token']) && (token_check($_POST['token']))==true){
  
        $name=clear($_POST['name']);
        $phone=clear($_POST['phone']);
        $from=clear($_POST['from']);
        $to=clear($_POST['to']);
        $deparure=clear($_POST['deparure']);
        $return=clear($_POST['return']);
        $trip=clear($_POST['trip']);

        $one='ticket_'.$name;

        $ticket=write_file($one.'.txt',$name,$phone,$from,$to,$deparure,$return,$trip);

      if($ticket){
    header('location:index.php');
}else{

    header('location:index.php');
}
}
else{
    header('location:index.php');
}
      }
    


//the weather

      if(isset($_POST['show'])){

        if(!empty($_POST['weather'])){

            $show=$_POST['weather'];

            $url='https://api.openweathermap.org/data/2.5/weather?q='.$show.'&appid={API KEY}'; //Get url ->https://openweathermap.org/

            $api=curl($url);
            
            //var_dump( $api);
            
            if($api){

                $_SESSION['weather']=$api;

                header('location:index.php');

            }else{

                header('location:index.php');
            }
           
        }else{

                header('location:index.php');

     } 

    }

?>
