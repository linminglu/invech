﻿<?php
//赛果
ini_set("display_errors","yes");
set_time_limit(0);
$base = dirname(__FILE__);
include_once $base.'/include.php';
include_once($db_path."/mysqlis.php");
$list_date=date('Y-m-d',time()-2*60*60);
$bdate=date('m-d',time()-2*60*60);

/*$list_date='2012-09-07';
$bdate='09-07';*/
//v2sk93cm15069906l3689907
//http://w088.hg0088.com/app/member/result/result.php?game_type=FT&list_date=2016-06-11&uid=0so2u86bm15069906l3691132&langx=zh-tw 
$base_url = $webdb["datesite"]."app/member/FT_index.php?uid=".$webdb["cookie"]."&langx=en-us&mtype=3";
$thisHttp = new cHTTP();
$thisHttp->setReferer($base_url);
$filename = $webdb["datesite"]."app/member/result/result.php?game_type=FT&list_date=$list_date&uid=".$webdb["cookie"]."&langx=zh-tw";
//echo $filename;//exit;
//$filename .= '&today='.$list_date;
$thisHttp->getPage($filename);
$msg = $thisHttp->getContent();
//echo $msg;exit;
//$msg = file_get_contents('./zqbf2.txt');
//file_put_contents('/www/wwwroot/site/caiji/sport/zqbf.txt',$msg);
//file_put_contents('./zqbf.txt',$msg);
//exit;
//echo $msg;
$msg = strtolower($msg);
$a = array(
"<script>",
"</script>",
'"',
"\n\n",
"<br>",
" ",
'</b></font>',
"<td>",
"<tdalign=left>",
"<fontcolor=#cc0000>",
"<fontcolor=red>",
"<b>",
"</b>",
"</a>",
"</font>",
"<spanstyle=overflow:hidden;>",
"</span>",
chr(13),
"&nbsp;&nbsp;",
"<tdclass=hr_main_ft>",
"<tdclass=full_main_ft>",
"<tdclass=team_c_ft>",
"<tdclass=team_h_ft>"
);
$b = array(
"",
"",
"",
"",
"-",
"",
'',
"",
"",
"",
"",
"",
"",
"",
"",
"",
"",
"",
"",
"",
"",
""
);
$msg = str_replace($a,$b,$msg);
//echo $msg;exit;
$data1=explode("</div>",$msg);
//print_r($data1);exit;
$m=0;
//$data=explode("<trclass=b_cenid",strtolower($msg));

$data=explode("<tdcolspan=6class=b_hline>",strtolower($msg));
for ($i=1;$i<sizeof($data);$i++){
	$score1=explode("<trclass=b_cenid",strtolower($data[$i])); 
	preg_match_all("/class=leg_bar>(.+?)<\/td>/is",$score1[0],$legs);
	$strleg=$legs[1][0];
	//echo $strleg;exit;
	//print_r($score1);exit;
	for($z=1;$z<sizeof($score1);$z++){
	//print($score1[$z]);exit;
	$score=explode("</tr>",$score1[$z]);
	//for ($j=0;$j<sizeof($abcde)-1;$j++){
	//$score=explode("</td>",trim($abcde[$j]));
//print_r($score);exit;
//echo(sizeof($score));exit;
		if (sizeof($score)>=5){
			
			preg_match_all("/tr_(.+?)style/is",$score[0],$mid1);
			//print_r($mid1);exit;
			$mid=explode("_",$mid1[1][0]);
			$master=explode("</td>",$score[0]);
			//print_r($master);exit;
			//echo $master;
			$mscore=explode("</td>",$score[2]);
			//print_r($mscore);exit;
			$tscore=explode("</td>",$score[3]);
			//$mb_mid=trim($mid[0]);
			//$tg_mid=trim($mid[1]);
			$match_id=$mid[1];
			//echo $match_id;exit;
			/*if($match_id=='1491266'){
				print_r($mscore);exit;
			}*/
			$Match_Master=strip_tags(trim($master[3]));
			$Match_Guest=strip_tags(trim($master[5]));
			$t0=trim($mscore[1]);
			$m0=trim($mscore[2]);
			$t1=trim($tscore[1]);
			$m1=trim($tscore[2]);
			$t0=(is_numeric($t0))?$t0:"-1";
			$m0=(is_numeric($m0))?$m0:"-1";
			$t1=(is_numeric($t1))?$t1:"-1";
			$m1=(is_numeric($m1))?$m1:"-1";
			
			/*if($t1=='-1'){
				echo $t0.'-'.$m0.'-'.$t1.'-'.$m1.'-'.$match_id."<br>";
				print_r($score);
			}*/
			//echo $match_id,',';
			
			$bdate2=date('m-d',strtotime("-1 day"));
			//match_date 赛果27号采集;比分28号出来,
			//更新比分以match_date=28号为条件,则无法更新;


			if(strlen($t1)<5 && strlen($t0)<5 && strlen($m1)<5 && strlen($m0)<5){
				
				//$sql="update bet_match set mb_inball='$t1',tg_inball='$m1',tg_inball_hr='$m0',mb_inball_hr='$t0' where match_id=$match_id and  match_master not like '%(上半)%' and Match_Date='$bdate'";
				$sql="update bet_match set mb_inball='$t1',tg_inball='$m1',tg_inball_hr='$m0',mb_inball_hr='$t0' where match_id=$match_id and  match_master not like '%(上半)%' and Match_Date in('$bdate','$bdate2')";
				//echo $match_id,"<br/>";
				if($match_id=='2865882'){
				    echo $sql."\r\n";
				}
//file_put_contents('/www/wwwroot/site/caiji/sport/zqbf_sql.txt', $sql.PHP_EOL, FILE_APPEND);
//file_put_contents('./zqbf_sql.txt', $sql.PHP_EOL, FILE_APPEND);
			$mysqlis->query($sql);
				/*
				//select * from bet_match set  where match_date='09-22' and match_id=(select match_halfid from bet_match where match_id=1476258)
				$sql="update bet_match set mb_inball='$t0',tg_inball='$m0',tg_inball_hr='$m0',mb_inball_hr='$t0' where match_master like '%(上半)%'  and Match_Date='$bdate' and REPLACE(match_master,' ','') like '".$Match_Master."%' and REPLACE(Match_Guest,' ','') like '".$Match_Guest."%' and REPLACE(Match_Name,' ','') like '".$strleg."'";
				//echo $sql."<br>";
				$mysqlis->query($sql);	
				//if($t1=='-1'){
				//echo $t0.'-'.$m0.'-'.$t1.'-'.$m1.'-'.$match_id."<br>";
				//echo $sql."<br>";
				//print_r($score);
		//	}
				$sql="update bet_match set mb_inball='$t1',tg_inball='$m1',tg_inball_hr='$m0',mb_inball_hr='$t0' where  REPLACE(match_master,' ','') like '".$Match_Master."%' and REPLACE(Match_Guest,' ','') = '".$Match_Guest."' and  match_master not like '%(上半)%' and Match_Date='$bdate' and REPLACE(Match_Name,' ','') = '".$strleg."'";
				//echo "[".strpos($Match_Master,'-')."]";
				//echo $sql."<br>";exit;
				if(strpos($Match_Master,'-')===false && strpos($Match_Guest,'-')===false){
					//echo $sql."<br>";
						$mysqlis->query($sql);
				}
				//$mysqlis->query($sql);
							*/
				//最简名称
				$masters = explode('-',$Match_Master);
				$master = strtoupper($masters[0]);
				$guests = explode('-',$Match_Guest);
				$guest = strtoupper($guests[0]);

				// 球队名 - 加时赛, 球队名 - XXX;
				// 通常 多个match_id 对应一个赛果;
				// 但是 球队名 - 上半X , 球队名 - 角球数 的赛果单独给出,需要放入例外数组; 
				$excepts = ['上半','角球数'];
				$except_sql = "";
				foreach($excepts as $except){
					$except_sql .= " and match_master not like '%" . $except . "%'";
				}
				
				$sql = "update bet_match set mb_inball='$t1',tg_inball='$m1',tg_inball_hr='$m0',mb_inball_hr='$t0' where 1";
				$sql .= $except_sql;
				$sql .= " and REPLACE(Match_Master,' ','') like '"
				 . $master . "%'";
				$sql .= " and REPLACE(Match_Guest,' ','') like '"
				 . $guest . "%'";	
				$sql .= " and REPLACE(Match_Name,' ','') = '".$strleg."'";
				//$sql .= " and Match_Date='" . $bdate . "'";
				$sql .= " and Match_Date in ('" . $bdate . "','". $bdate2 ."')";
				$mysqlis->query($sql);
//file_put_contents('/www/wwwroot/site/caiji/sport/zqbf_sql.txt', $sql.PHP_EOL, FILE_APPEND);
//file_put_contents('./zqbf_sql.txt', $sql.PHP_EOL, FILE_APPEND);
				$m++;
			}
		}
	}
}
