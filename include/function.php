<?php 

function check_number($number){
    if($number % 2 == 0){
        $number_ktrgn = "Even"; 
    }
    else{
        $number_ktrgn = "Odd";
    }

    return $number_ktrgn;
}


function get_state($nric) {

$kod_negeri = substr($nric, 6,2);
$kod_jantina = substr($nric,11);
$tarikh_lahir = substr($nric,0,6); 

if (in_array($kod_negeri,array(01,21,22,23,24))) {
	$negeri = "Johor";
} elseif (in_array($kod_negeri,array(02,25,26,27))) {
	$negeri = "Kedah";
} elseif (in_array($kod_negeri,array(03,28,29))) {
	$negeri = "Kelantan";
} elseif (in_array($kod_negeri,array(04,30))) {
	$negeri = "Melaka";
} elseif (in_array($kod_negeri,array(05,31,59))) {
	$negeri = "Negeri Sembilan";
}
 else {
	$negeri = "Invalid";
}

return $negeri;
}



function get_jantina($nric) {

$kod_jantina = substr($nric,-1,1); 

 if($kod_jantina % 2 == 0){
        $ktrgn_jantina = "Female"; 
    }
    else{
         $ktrgn_jantina = "Male";
    }

return $ktrgn_jantina;
}

function get_dob($nric) {

	$tahun = substr($nric, 0, 2);
	$bulan = substr($nric, 2, 2);
	$hari = substr($nric, 4, 2);

	$dob = $tahun . "-" . $bulan . "-" . $hari;

$dob = date("d-M-Y", strtotime($dob));

return $dob;

}

?>