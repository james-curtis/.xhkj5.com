function $Showhtml(){
	if(Player.Url.indexOf("http://") == -1){
		Player.Url="http://v.youku.com/v_show/id_" + Player.Url + ".html";
	}
		player =
		("<div id=\"playerCnt\"></div>");
document.writeln("	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>");
document.writeln("<script type=\"text/javascript\" src=\"http://7xjfim.com2.z0.glb.qiniucdn.com/Iva.js\"></script>");
document.writeln("<script type=\"text/javascript\" src=\"http://7xjfim.com2.z0.glb.qiniucdn.com/Iva_Compatible.js\"></script>");
document.writeln("	<style type=\"text/css\">");
document.writeln("	#playerCnt{width:100%;height:320px;margin:0 auto;border:5px solid #000000;background-origin:content-box;background-size:cover;}");
document.writeln("	</style>");
document.writeln("<script type=\"text/javascript\">");
document.writeln("	var ivaInstance = new Iva(\'playerCnt\', {");
document.writeln("		appkey: \'V1330VBsl\',");
document.writeln("		video: Player.Url,");
document.writeln("		title: \'videojj\',");
document.writeln(" 		cms:\'2\',");
document.writeln("		cover: \'http://videojj.com/asset/first-title.png\',");
document.writeln("		autoplay: true");
document.writeln("	});");
document.writeln("</script>");

return player;
}
Player.Show();
if(Player.Second){
	$$('buffer').style.height = Player.Height-35;
	$$("buffer").style.display = "block";
	setTimeout("Player.BufferHide();",Player.Second*1000);
}
