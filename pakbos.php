
<?php date_default_timezone_set("Asia/Jakarta");
 error_reporting(0);
 set_time_limit(0);
 ini_set("memory_limit","-1");
 ini_set("output_buffering",0);
 ini_set("request_order","GP");
 ini_set("variables_order","EGPCS");
 ini_set("max_execution_time","-1");
 $versi="mod v 0.0.1";
 $cekVersi=file_get_contents("https://pastebin.com/raw/39eNBNxC");
 if($versi == $cekVersi){ echo "\033[31m:*moded by blogdroidt\n";
 ${"GLOBALS"}["curl"]="curl";
 ${"GLOBALS"}["webName1"]="http://faucetnarniacoin.online/";
 ${"GLOBALS"}["webName2"]="http://faucetnarniacoin.online/"; ${"GLOBALS"}["firstStart"]=date("Y-m-d H:i:s");
 ${"GLOBALS"}["arr"]=array();
 ${"GLOBALS"}["arr_time"]=array();
 ${"GLOBALS"}["auto_stop"]=array();
 for($y=0;
$y<1000;
$y++){ ${"GLOBALS"}["arr_time"][$y]=date("Y-m-d H:i:s");
 ${"GLOBALS"}["auto_stop"][$y]=0;
 } function cekURL(){ $file="linkfaucet.txt";
 $handle = fopen($file, "r");
 $temp="";
 if ($handle) { $arr=array();
 $ll=0;
 echo "Harap tunggu....\n";
 echo "\033[95m loading....:*\n";
 echo "\n================================";
 echo "\n==                            ==";
 echo "\n====                        ====";
 echo "\n======                    ======";
 echo "\n========                ========";
 echo "\n==========            ==========";
 echo "\n============        ============";
 echo "\n==============    ==============";
 echo "\n===============  ===============";
 echo "\n================================";
 while (($line = fgets($handle)) !== false) { $temp=trim($line);
 ${"GLOBALS"}["arr"][$ll]=$temp;
 $ll++;
 } fclose($handle);
 if($temp != ""){ return ${"GLOBALS"}["arr"];
 } } else { echo "Terjadi Error silaka liat blog : https://www.blogdroidt.tech\n";
 return "kosong";
 } } function checkCur($whatCur){ if (strpos($whatCur, 'POT') !== false) { return 'POT';
 }else if (strpos($whatCur, 'BTC') !== false) { return 'BTC';
 }else if (strpos($whatCur, 'BCH') !== false) { return 'BCH';
 }else if (strpos($whatCur, 'ETH') !== false) { return 'ETH';
 }else if (strpos($whatCur, 'BLK') !== false) { return 'BLK';
 }else if (strpos($whatCur, 'BTX') !== false) { return 'BTX';
 }else if (strpos($whatCur, 'DASH') !== false) { return 'DASH';
 }else if (strpos($whatCur, 'DOGE') !== false) { return 'DOGE';
 }else if (strpos($whatCur, 'LTC') !== false) { return 'LTC';
 }else if (strpos($whatCur, 'PPC') !== false) { return 'PPC';
 }else if (strpos($whatCur, 'XPM') !== false) { return 'XPM';
 } } function startClaim(){ $urlCek=cekURL();
 if($urlCek !="kosong"){ echo "\n";
 while (1){ $ll=0;
 $loopCek=1;
 foreach($urlCek as $item) { $url_exp=explode("||",trim($item));
 $whatCur=checkCur($url_exp[0]);
 $startTime = date("Y-m-d H:i:s");
 if($startTime > ${"GLOBALS"}["arr_time"][$ll]){ if($whatCur=="POT"){ $myCur="PAbUHXvjaUbe1FvyTxMQawK4tt8nMsogHc";
 }else if($whatCur=="BTC"){ $myCur="1JiLigaE13bYwP4nbGZfbhprX2DE6riT81";
 }else if($whatCur=="DOGE"){ $myCur="DJ8T7fdA3PTWVXXE8YFFcqbkmYsHfFSwQu";
 }else if($whatCur=="ETH"){ $myCur="0x53cc14f88758cd86deffdc5b7136304db897fba1";
 }else if($whatCur=="LTC"){ $myCur="LheKUwN1HGtmWqDscKZDQn4ww4vSvje77U";
 }else if($whatCur=="BCH"){ $myCur="1Pu9yFnosrfk5XpZTsfXDR5FkKw6Rdkcf9";
 }else if($whatCur=="BLK"){ $myCur="BCNdUpHNCW9XX3rsUrEisWjcWPjcuZy2pj";
 }else if($whatCur=="DASH"){ $myCur="XiSMh1N4HkpUmKU4F9LQHerSTKQyLhTdfv";
 }else if($whatCur=="PPC"){ $myCur="PU2d8fVq6b8YN4QbXj6YJswBH1md1ZXbRy";
 }else if($whatCur=="XPM"){ $myCur="AdWNgKa9a6yro5kanjcaM2PS5EwLBRdP7B";
 } $claiming=claim($url_exp[0]."&r=".$myCur."&rc=".$whatCur,$whatCur);
 if($claiming !=""){ echo $whatCur." ".$claiming." masuk pak booozz... :*\n";
 } $claiming=claim($url_exp[0]."&r=".$myCur."&rc=".$whatCur,$whatCur);
 if($claiming !=""){ echo $whatCur." ".$claiming." masuk lagi pak booozz... :*\n";
 } ${"GLOBALS"}["arr_time"][$ll] = date('Y-m-d H:i:s',strtotime('+'.((int)$url_exp[1]+10).' seconds',strtotime($startTime)));
 ${"GLOBALS"}["auto_stop"][$ll]++;
 $whatT=rand(150,300);
 if($whatT <= ${"GLOBALS"}["auto_stop"][$ll]){ $whatTT=rand(2,4);
 ${"GLOBALS"}["auto_stop"][$ll]=0;
 $delayAsli=(int)$url_exp[1];
 if($delayAsli > 60){ $berapaLama=(int)($delayAsli*((int)$whatTT/2));
 }else{ $berapaLama=(int)($delayAsli*(int)$whatTT);
 } echo "\nTerminal ".($ll+1)." Auto Stop:Menunggu ".$berapaLama." dtk\n";
 ${"GLOBALS"}["arr_time"][$ll] = date('Y-m-d H:i:s',strtotime('+'.$berapaLama.' seconds',strtotime($startTime)));
 }else{ ${"GLOBALS"}["auto_stop"][$ll]++;
 } } $ll++;
 } sleep(1);
 if($loopCek > 3600){ $loopCek=0;
 ${"GLOBALS"}["firstStart"]=date("Y-m-d H:i:s");
 echo "\nCheck running ".$loopCek." ".${"GLOBALS"}["firstStart"]." \n";
 $loopCek++;
 } } }else{ echo "kosong bro";
 } } function claim($url,$whatCur){ $curl=curl_init();
 curl_setopt($curl,CURLOPT_URL,$url);
 curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($curl,CURLOPT_REFERER,$url);
 curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/4.0 (compatible;
MSIE 7.0;
Windows NT 6.1;
Win64;
x64;
Trident/4.0;
Mozilla/4.0 (compatible;
MSIE 6.0;
Windows NT 5.1;
SV1) ;
NeoDownloader Embedded Web Browser from: http://bsalsa.com/;
.NET CLR 2.0.50727;
SLCC2;
.NET CLR 3.5.30729;
.NET CLR 3.0.30729)");
 curl_setopt($curl,CURLOPT_COOKIEJAR,"cookie");
 curl_setopt($curl,CURLOPT_COOKIEFILE,"cookie");
 $result=curl_exec($curl);
 curl_close($curl);
 $resExpl=explode("<div class=\"alert alert-success\">",$result);
 $resExpl2=explode("satoshi",$resExpl[1]);
 if(trim($resExpl2[0])==""){ $resExpl2=explode("doge",$resExpl[1]);
 } return trim($resExpl2[0]);
 } startClaim();
 }else{ echo "sudah ada update terbaru nih silakan kunjungi https://www.blogdroidt.tech\n";
 } 
?>
