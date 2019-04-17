<?php
     $conn=mysqli_connect('localhost','root','');
     mysqli_select_db($conn,'student');
     if(isset($_REQUEST['sub']))
     {
         $name=$_REQUEST['name'];
         $lname=$_REQUEST['lname'];
         $fname=$_REQUEST['fname'];
         $mname=$_REQUEST['mname'];
         $e=$_REQUEST['email'];
         $pass=$_REQUEST['pass'];
         $cpass=$_REQUEST['cpass'];
         $date=$_REQUEST['date'];
         $gen=$_REQUEST['Gender'];
         //$adde=$_REQUEST['add'];
         $pin=$_REQUEST['pin'];
         $coun=$_REQUEST['coun'];
         $cour=$_REQUEST['Course'];
         $exam=$_REQUEST['exam'];
         $board=$_REQUEST['board'];
         $per=$_REQUEST['per'];
         $year=$_REQUEST['year'];
         //$e=$_REQUEST['email'];

         if($cpass==$pass)
          {
            $sql="INSERT INTO register(FirstName,LastName,FatherName,MotherName,Email,Pass,DOB,Gender,Pincode,Country,Course) values('$name','$lname','$fname','$mname','$e','$pass','$date','$gen','$pin','$coun','$cour')";
            $query=mysqli_query($conn,$sql);
            echo "Inserted";
            
            if($sql != false)
             { 
                $c="Select ID from register where FirstName='".$_REQUEST['name']."' and FatherName='".$_REQUEST['fname']."' ";
                $d=mysqli_query($conn,$c);
                
               // $r=mysqli_num_rows($c);
                if($res=mysqli_fetch_array($d))
                {
                if($c != False)
                 {
                   $sql1="INSERT INTO tblcourse_detail(Id,Examination,Board,Percentage,Year) values('".$res['ID']."','$exam','$board','$per','$year')";
                   $query1=mysqli_query($conn,$sql1);
                   echo "Inserted";
                 }      
                }
             }
            echo 'Success';
          }
        else 
          {
              echo "Not Inserted";
              echo '<script>window.location.href="Registration Form.php?task=fail"</script>';
          }
     }
?>