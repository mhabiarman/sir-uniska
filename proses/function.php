<?php
function getUserIP() {
  if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
  }
  $client  = @$_SERVER['HTTP_CLIENT_IP'];
  $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
  $remote  = $_SERVER['REMOTE_ADDR'];
  if(filter_var($client, FILTER_VALIDATE_IP)) {
    $ip = $client;
  }
  elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $ip = $forward;
  }
  else {
    $ip = $remote;
  }
  return $ip;
}
function get_client_browser() {
  $browser = '';
  if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
    $browser = 'Netscape';
  else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
    $browser = 'Firefox';
  else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
    $browser = 'Chrome';
  else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
    $browser = 'Opera';
  else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
    $browser = 'Internet Explorer';
  else
    $browser = 'Other';
  return $browser;
}
function tglIndonesia($str) {
  $tr = trim($str);
  $str = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
  return $str;
}
function timeSince($original) {
  $chunks = array(array(60 * 60 * 24 * 365, 'tahun'), array(60 * 60 * 24 * 30, 'bulan'), array(60 * 60 * 24 * 7, 'minggu'), array(60 * 60 * 24, 'hari'), array(60 * 60, 'jam'), array(60, 'menit'));

  $today = time();
  $since = $today - $original;

  if($since > 604800) {
    $print = date("M jS", $original);
    if($since > 31536000) {
      $print .= ", ".date("Y", $original);
    }
    return $print;
  }
  for($i = 0, $j = count($chunks); $i < $j; $i++) {
    $seconds = $chunks[$i][0];
    $name = $chunks[$i][1];
    if(($count = floor($since / $seconds)) != 0) {
      break;
    }
  }
  $print = ($count == 1) ? '1 '.$name : "$count {$name}";
  return $print.' yang lalu';
}
function penyebut($nilai) {
  $nilai = abs($nilai);
  $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  $temp = "";
  if ($nilai < 12) {
    $temp = " ". $huruf[$nilai];
  } else if ($nilai <20) {
    $temp = penyebut($nilai - 10). " belas";
  } else if ($nilai < 100) {
    $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
  } else if ($nilai < 200) {
    $temp = " seratus" . penyebut($nilai - 100);
  } else if ($nilai < 1000) {
    $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
  } else if ($nilai < 2000) {
    $temp = " seribu" . penyebut($nilai - 1000);
  } else if ($nilai < 1000000) {
    $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
  } else if ($nilai < 1000000000) {
    $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
  } else if ($nilai < 1000000000000) {
    $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
  } else if ($nilai < 1000000000000000) {
    $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
  }     
  return $temp;
}

function terbilang($nilai) {
  if($nilai<0) {
    $hasil = "minus ". trim(penyebut($nilai));
  } else {
    $hasil = trim(penyebut($nilai));
  }         
  return $hasil;
}
?>