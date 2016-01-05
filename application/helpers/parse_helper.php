<?php

function Parse_Data($data,$p1,$p2){
    $data=" ".$data;
    $hasil="";
    $awal=strpos($data,$p1);
    if($awal!=""){
    $akhir=strpos(strstr($data,$p1),$p2);
        if($akhir!=""){
        $hasil=substr($data,$awal+strlen($p1),$akhir-strlen($p1));
        }
    }
    return $hasil; 
}

function to_currency($number)
{
    if($number >= 0)
    {
        return 'Rp. '.number_format($number, 0, ',', '.');
    }
    else
    {
        return 'Rp. '.number_format(abs($number), 0, ',', '.');
    }
}

function bilangan($number)
{
    if($number > 0)
    {
        return number_format($number, 0, ',', '.');
    }
    else
    {
        return '0';
    }
}
function rupiah($number)
{
    if ($number==0) return '-';
    return to_currency($number);
}
function umur($usia) {     
    $year = date("Y", strtotime($usia));
    $month = date("m", strtotime($usia));
    $day = date("d", strtotime($usia));
    $birthday = strtotime($year.'-'.$month.'-'.$day);
    $current_time = time();
    $curr['month'] = date('n', $current_time);
    $curr['lastmonth'] = $curr['month'] - 1;
    $curr['year'] = date('Y', $current_time);
    $curr['lastyear'] = $curr['year'] - 1;
    $curr['day'] = date('j', $current_time);

    $diff = $current_time - $birthday;
    $age['years'] = intval($diff/31556926);
    $diff = $diff - (31556926 * $age['years']);
    if($curr['month'] > $month) {
    	$age['months'] = $curr['month'] - $month;
    if($curr['day'] < $day) {
    	$age['months']--;
    	$month_temp = strtotime($curr['year'].'-'.$curr['lastmonth'].'-'.$day);
    } else {
    	$month_temp = strtotime($curr['year'].'-'.$curr['month'].'-'.$day);
    }
    	$diff = $current_time - $month_temp;
    } elseif($curr['month'] == $month) {
    if($curr['day'] >= $day) {
    	$age['months'] = 0;
    } else {
    	$age['months'] = 11;
    	$month_temp = strtotime($curr['year'].'-'.$curr['lastmonth'].'-'.$day);
    	$diff = $current_time - $month_temp;
    }
    } else {
    	$age['months'] = $curr['month'] - $month + 12;
    if($curr['day'] < $day) {
    	$age['months']--;
    	$month_temp = strtotime($curr['year'].'-'.$curr['lastmonth'].'-'.$day);
    } else {
    	$month_temp = strtotime($curr['year'].'-'.$curr['month'].'-'.$day);
    }
    	$diff = $current_time - $month_temp;
    }

    $age['days'] = intval($diff/86400);
    $diff = $diff - (86400 * $age['days']);

    $age['hours'] = intval($diff/3600);
    $diff = $diff - (3600 * $age['hours']);

    $age['minutes'] = intval($diff/60);
    $diff = $diff - (60 * $age['minutes']);

    $age['seconds'] = $diff;

    return $age['years'];

}

function to_pdf($html, $filename='', $stream=TRUE) 
{
    require_once(APPPATH."libraries/dompdf/dompdf_config.inc.php");
    
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf");
    } else {
        return $dompdf->output();
    }
}

function cetak_report($html,$out)
{
	if ($out=='pdf')
		to_pdf($html,'Report'.rand(100,1000));
	else
		echo $html;

}

function nomor_pasien($id)
{
	return sprintf("%05d",$id); 
}

function nama_bulan($i)
{
    $bulan = array(
        'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'
    );

    return $bulan[$i-1];
}

function bulan_romawi($i)
{
    $bulan = array(
        'I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII'
    );

    return $bulan[$i-1];
}

function tanggal($tanggal)
{
return date('d',strtotime($tanggal)).'  '.nama_bulan(date('m',strtotime($tanggal))).' '.date('Y',strtotime($tanggal));
	  			
}

function t($v)
{
    if ((int)$v==0)
        return "-";
    return (int)$v;

}

function tahun_akademik($str){
	$r = substr($str, -1);
	$t = substr($str,0, -1);
	if($r==1)
		return $t.' GANJIL';
	else
		return $t.' GENAP';

}

function beda_tanggal($start,$end = false) {
    if(!$end) { $end = date('Y-m-d'); }
    return round((strtotime($start)-strtotime($end))/86400);
}
