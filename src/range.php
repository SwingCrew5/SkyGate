 <?php
	/*****
	SWing Crew 5 Studio
	range.php
	developed by NEO
	project: SkyGate
	purpose: catch the location of visitor & use some way to know there're inearby us or not
	changelogs:
		20131004 Stan
			Created
	*****/  
	
	//變數宣告
    $North_latitude=$_POST['NL_Value']; //接取前端取得的北緯值
	$East_longitude=$_POST['EL_Value']; //接取前端取得的東經值
	$InArea = 0; // 本地標簽，0為超出範圍，1為在本地
	//(25.021733, 121.525843)+-(0.0001,0.0001)
	//開方格 以本地為中心 方格邊長約為22m, 1度約為110.94KM
	//$自由宣告需要變數...
	//$North_latitude_min = 25.021633;
	//$North_latitude_MAX = 25.021833;
	//$East_longitude_min = 121.525743;
	//$East_longitude_MAX = 121.525943;
	//end of 變數宣告
	
	//演算法.....
	
	//end of 演算法.....	

	//回應機制...		
	if($InArea){
    	echo "Local"; //位於附近，回應在本地，可按鈴
		}else{
			echo "Away"; //判斷為遠離
			}
	//end of 回應機制...	
  ?>