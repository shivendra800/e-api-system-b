<?php


if(isset($_POST['ac_no']))
{
    $ac_no = $_POST['ac_no'];
 
 $select=mysqli_query($con,"SELECT LAN_NO,UMRN,mob_No_,branch_code,Branch_Name FROM nach_branch_data WHERE LAN_NO='$ac_no' ");
$data=mysqli_fetch_array($select);
if(!empty($data['UMRN'])){
   $umr = $data['UMRN'];
}else{
    $umr = "UMR Number Not Attached With A/C"; 
}
if(!empty($data['mob_No_'])){
   $mobile = $data['mob_No_'];
}else{
    $mobile = "Mobile Number Not Attached With A/C"; 
}
if($select){
// Encoding array in JSON format
echo json_encode(array( 'umr_no' =>$umr,
                        'branch_code' => $data['Branch_Name'],
                        'mob_No_' => $mobile
                            ));

  }else{
      echo "Data not found";
  }
}
?>
 