
function generateQRCode(selector){
    var url = "http://qr.liantu.com/api.php?";
       url += "&text="+encodeURI(location.href);//������ɫ,bg=��ɫ���룬���磺bg=ffffff
       url += "&bg=fcfcfc";//������ɫ,bg=��ɫ���룬���磺bg=ffffff
       url += "&fg=000000";//ǰ����ɫ,fg=��ɫ���룬���磺fg=cc0000
       url += "&gc=000000";//������ɫ,gc=��ɫ���룬���磺gc=cc00000
       url += "&el=Q";//����ȼ�,el����ֵ��h\q\m\l�����磺el=h
       url += "&w=300";//�ߴ��С,w=��ֵ�����أ������磺w=300
       url += "&m=30";//��������߾ࣩ,m=��ֵ�����أ������磺m=30
       url += "&pt=000000";//��λ����ɫ�����,pt=��ɫ���룬���磺pt=00ff00
       url += "&inpt=000000";//��λ����ɫ���ڵ㣩,inpt=��ɫ���룬���磺inpt=000000
       url += "&logo=http://www.91liren.com/images/91liren_logo.png";//logoͼƬ,logo=ͼƬ��ַ�����磺http://www.liantu.com/images/2013/sample.jpg
    $(selector).attr("src",url);
}
 
     
$(function(){

    $("#ewm_btn").click(function(){
        generateQRCode($("#ewm_name"));
        $("#alphaBox").show();
    });
     

    $(".ewm_Img").click(function(){
        $("#alphaBox").hide();
    });
});
