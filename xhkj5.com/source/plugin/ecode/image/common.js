function QhShow(num){
	if (document.getElementById('codetxt'+num+'_a').style.display == '') {
		document.getElementById('QhShow'+num).value = "���״���ģʽ��";
		changecodetext(num);

	} else{
		document.getElementById('QhShow'+num).value = "�����ı�ģʽ��";
		changecodeshow(num);
	}
}


function changecodeshow (num){
	document.getElementById('codetxt'+num+'_a').style.display = "";
	document.getElementById('codetxt'+num+'_b').style.display = "none";
	}

	
function changecodetext (num){
	var s;
	document.getElementById('codetxt'+num+'_a').style.display = "none";
	document.getElementById('codetxt'+num+'_b').style.display = "";	
	s = document.getElementById('ecode_'+num).value;
	s = s.replace(/<br\s\/>/g,'');
	s = s.replace(/\xA0/g,'\x20');
	document.getElementById('ecode_'+num).value = s;
	}

	
function copyecode(num,txt){
	var s;
	s = document.getElementById('ecode_'+num).value;
	s = s.replace(/<br\s\/>/g,'');
	s = s.replace(/\xA0/g,'\x20');
	setCopy(s,txt);
	}
/*
//��ӭ����Լ����±�д����� . �и��õ�˼·������,Ҳ�����������վ��.�Ա����������ʹ��..
//��������ѿ�Դ,  �벻Ҫ�޸Ĵ˴���Ȩ лл
// ������   http://bbs.zuuu.com
 */
