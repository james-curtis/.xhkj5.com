﻿function $Showhtml(){
	player = '<embed type="application/x-shockwave-flash" src="http://static.funshion.com/market/p2p/vod/2013-12-4/FunPlayerUi_2.0.0.26.swf" id="Player" bgcolor="#FFFFFF" quality="high" allowfullscreen="true" allowNetworking="internal" allowscriptaccess="never" wmode="transparent" menu="false" always="false" flashvars="pauseAp=&mediaAp=c_wb_1_lv&userSeek=1&type=movie&partner=69&funshionSetup=0&start=1&itemid='+Player.Url+'&startAd=0&userMac=&poster=&stopUrl=" pluginspage="http://www.macromedia.com/go/getflashplayer" width="100%" height="'+Player.Height+'">';	
	return player;
}
Player.Show();
if(Player.Second){
	$$('buffer').style.height = Player.Height-42;
	$$("buffer").style.display = "block";
	setTimeout("Player.BufferHide();",Player.Second*1000);
}