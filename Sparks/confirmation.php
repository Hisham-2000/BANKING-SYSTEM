<?php
  if(isset($_POST['submit']))
  {
      include 'connection.php';
      $from=$_POST['from'];
      $to=$_POST['to'];
      $amount=$_POST['amount'];
      $status=0;
      if($amount<=0)
      {
        echo "<script type='text/javascript'>";
        echo "alert('Invalid Amount!')";
        echo "</script>";   
      }
      else
      {
          $sql="SELECT * FROM `customer` WHERE Id=$from";
          $query=$conn->query($sql);
          $sqlfrom=mysqli_fetch_array($query);
          $sql="SELECT * FROM `customer` WHERE Id=$to";
          $query=$conn->query($sql);
          $sqlto=mysqli_fetch_array($query);
          if($amount>$sqlfrom['Balance'])
          {
              echo "<script type='text/javascript'>";
              echo "alert('Insufficent Balance')";
              echo "</script>";
          }
          else{
             $newbalance=$sqlfrom['Balance']-$amount;
             $sql="UPDATE `customer` SET Balance=$newbalance WHERE Id=$from";
             $query=$conn->query($sql);

             $newbalance=$sqlto['Balance']+$amount;
             $sql="UPDATE `customer` SET Balance=$newbalance WHERE Id=$to";
             $query=$conn->query($sql);
             if($query){
                echo "<script type='text/javascript'>";
                echo "alert('Transfer Successful')";
                echo "</script>";
             }
             
             $sender=$sqlfrom['Name'];
             $receiver=$sqlto['Name'];
             $sql="INSERT INTO `transaction` (`Sender`, `Receiver`, `Amount`) VALUES ( '$sender', '$receiver', '$amount')";
             $query=$conn->query($sql);
             $status=1;
          }
      }

  }
if($status==1)
{
    echo " <style>
           .failed
           {
               margin-left: 33%;
               margin-top: 10%;
           }</style>";  
           
    echo   "<img class='failed' src='img\Yes.jpg' height='40%'width='30%'> "; 
}
else{
    echo " <style>
             .failed
             {
                 margin-left: 22%;
                 margin-top: 10%;
             }</style>";

    echo "<img class='failed' src='img\No.png'>";       
}

header('Refresh: 3; URL=index.html');  
?>