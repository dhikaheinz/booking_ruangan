<!DOCTYPE html>
<html>
<body>

<?php
$dataTglMulai = "2023-06-19";
$dataTglSelesai = "2023-06-25";
$dbTglSelesai = "2023-06-19";

$dataExMulai = "09:40";
$dataExSelesai = "10:00";

$dbExMulai = "08:30";
$dbExSelesai = "10:30";

echo $inputMulai2 = strtotime($dataExMulai).'<br>';
echo $inputSelesai2 = strtotime($dataExSelesai).'<br>';
echo $dbMulai2 = strtotime($dbExMulai).'<br>';
echo $dbSelesai2 = strtotime($dbExSelesai).'<br>';

if ($inputMulai2 >= $dbMulai2 && $inputMulai2 <= $dbSelesai2) {
    echo 'depan dalam';
} else if ($inputSelesai2 >= $dbMulai2 && $inputSelesai2 <= $dbSelesai2) {
    echo 'akhir dalam';
} else if ($inputMulai2 >= $dbMulai2 && $inputMulai2 <= $dbSelesai2 && $inputSelesai2 >= $dbMulai2 && $inputSelesai2 <= $dbSelesai2){
    echo 'dalam dalam';
}
echo '<br>';

$inputMulai = DateTime::createFromFormat('h:i', $dataExMulai);
$inputSelesai = DateTime::createFromFormat('h:i', $dataExSelesai);
$dbMulai = DateTime::createFromFormat('h:i', $dbExMulai);
$dbSelesai = DateTime::createFromFormat('h:i', $dbExSelesai);

$inputTglMulai = DateTime::createFromFormat('Y-m-d', $dataTglMulai);
$inputTglSelesai = DateTime::createFromFormat('Y-m-d', $dataTglSelesai);
    
    echo $inputMulai->format('h:i').' Input Mulai';
    echo '<br>';
    echo $inputSelesai->format('h:i').' Input Selesai';
    echo '<br>';
    echo $dbMulai->format('h:i').' DB Mulai';
    echo '<br>';
    echo $dbSelesai->format('h:i').' DB Selesai';
    echo '<br>';
    echo '<br>';

    echo $inputMulai->format('h:i').' Input Mulai';
    echo '<br>';
    echo $inputSelesai->format('h:i').' Input Selesai';
    echo '<br>';
    echo $dbMulai->format('h:i').' DB Mulai';
    echo '<br>';
    echo $dbSelesai->format('h:i').' DB Selesai';
    echo '<br>';
    echo $inputTglMulai->format('d-m-Y').' Tgl Input Mulai';
    echo '<br>';
    echo $inputTglSelesai->format('d-m-Y').' Tgl Input Selesai';
    echo '<br>';echo '<br>';
    
    if ($inputMulai > $dbMulai && $inputMulai < $dbSelesai){
       	echo '(1) Gagal';
    }else if ($inputSelesai > $dbMulai && $inputSelesai < $dbSelesai){
    	echo '(2) Gagal';
    }else if ($inputMulai > $dbMulai && $inputMulai < $dbSelesai && 
    		$inputSelesai > $dbSelesai && $inputSelesai < $dbSelesai){
    	echo '(3) Gagal';
    }else{
    	echo '(4) Berhasil';
    }
    echo '<br>';echo '<br>';
    
    $convDateMulai = $inputTglMulai->format('Y-m-d');
    $convDateSelesai = $inputTglSelesai->format('Y-m-d');
    
    $tglDari = date_create($convDateMulai);
    $tglSampai = date_create($convDateSelesai);
    
    echo $convDateMulai.' convDateMulai';
    echo '<br>';
    print_r($tglDari);
    echo '<br>';echo '<br>';
    
    $diff = date_diff($tglDari, $tglSampai);
	$rangeTgl = $diff->format("%a");
	$rangeTglEnd = $rangeTgl + 1;
    echo $rangeTglEnd.' rangetgl';
    echo '<br>';echo '<br>';

    $dataTglMulai2 = date('Y-m-d', strtotime($dataTglMulai . "-1 days"));
    
    for ($i=0; $i < $rangeTglEnd; $i++) { 
        echo "<div>";
        echo $dataTglMulai2 = date('Y-m-d', strtotime($dataTglMulai2 . "+1 days"));
        echo "</div>";
    };

    // while(0==0)
    // {
        
    //     echo "<div>";
    //     echo $dataTglMulai = date('Y-m-d', strtotime($dataTglMulai . "+1 days"));
    //     echo "</div>";
    //     if($dataTglMulai==$dataTglSelesai)
    //     {
    //         break;
    //     }
        
    // };
    

?> 

</body>
</html>