<?php
//��ӭ����Լ����±�д����� . �и��õ�˼·������,Ҳ�����������վ��.�Ա����������ʹ��..
//��������ѿ�Դ,  �벻Ҫ�޸Ĵ˴���Ȩ лл
// ������   http://bbs.zuuu.com


if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

function getehtm($etxt,$ecolortype) //������,��ȡ�������Դ���,������html����
	{
	//global $_G; //ȫ�ֱ���
	global $parharr,$ecolormod;//����ȫ����������  ��  ������ʽ 1-10
	$ecolormod=$ecolortype;// ��ȫ�ֱ��� ��ɫ����  ��ֵ
	$parharr=array();
	
	$libarr=array(); //��ʼ��֧�ֿ�����
	$ehtm='';//��ʼ��html����
	$he=0; //��ʼ���Ƿ�ͷ��,0Ϊ��  1Ϊ�ӳ���  2Ϊ�ֲ����� 3Ϊ���� 4ΪDLL����Ͳ���  5ΪͼƬ  6Ϊȫ�ֱ��� 7Ϊ����  8Ϊ�Զ�����������  9Ϊ���� 10���򼯱��� 11�ӳ������ 
	$ii=0;//��ʼ��ѭ��ͳ��,  ����ͳ�ƴ�ѭ��ѭ�����ڼ��� 
	
	$earr=explode("\n",$etxt);//���зָ�
	foreach ($earr as $value) //��������,��ʼѭ��
{
	$value=getspace($value);//ȥ��β�պ͵��л��з� ����ڶ��汾��Ҫ�Ӹ��ж�,�����ѭ�������ж�֮���,ǰ��Ŀո�ȥ��. ����$he�жϵ�ǰ�Ƿ���Ƕ��֮��
	
	//�жϺ������ת�۵�
	if(end($parharr)=='PDKS' || end($parharr)=='PDPD' || end($parharr)=='RG'){
	$tempii=1;//��ʼ��ʱ�ƴ�
	while(count($earr) > $tempii+$ii)//����ܵ�����...
	{
	if($earr[$tempii+$ii]==''){
		$tempii++;
		}else 
		break;
	
	}//ѭ�����
	//  ������Ҫ�����е�������  ȥ���׿�
	if(count($earr) > $tempii+$ii){//�������������
		if(end($parharr)=='PDKS'){
			if(strpos(ltrim($earr[$tempii+$ii]),'.�ж� (')===0 || strpos(ltrim($earr[$tempii+$ii]),'.�ж�(')===0 || getspace(ltrim($earr[$tempii+$ii]))=='.Ĭ��'){
			array_pop($parharr);
			$parharr[]='PDZZ';
			}
			
			}elseif(end($parharr)=='PDPD'){
				if(getspace(ltrim($earr[$tempii+$ii]))=='.Ĭ��'){
			array_pop($parharr);
			$parharr[]='PDPDZZ';
				}
			
				}elseif(end($parharr)=='RG'){
					if(getspace(ltrim($earr[$tempii+$ii]))=='.����'){
					array_pop($parharr);
					$parharr[]='RGZZ';
					}
					}
	}
	}elseif(count($parharr) >=2 && count($earr)>$ii+1){//���ת�۴��ڵ����ڶ��������Ա����
		if($parharr[count($parharr)-2]=='PDKS'){
				if(strpos(ltrim($earr[$ii+1]),'.�ж� (')===0 || strpos(ltrim($earr[$ii+1]),'.�ж�(')===0 || getspace(ltrim($earr[$ii+1]))=='.Ĭ��'){
					if(end($parharr)=='RGJS' || end($parharr)=='PDJS' || end($parharr)=='RGZWB'){					
					$parharr[count($parharr)-2]='PDZZ';	
					}elseif(strpos(ltrim($value),'.�ƴ�ѭ��β')===0 || strpos(ltrim($value),'.�ж�ѭ��β')===0  || strpos(ltrim($value),'.ѭ���ж�β')===0 || strpos(ltrim($value),'.����ѭ��β')===0){
						$parharr[count($parharr)-2]='PDZZtwo';
						}
				}
		
		}elseif($parharr[count($parharr)-2]=='PDPD'){
			if(strpos(ltrim($earr[$ii+1]),'.�ж� (')===0 || strpos(ltrim($earr[$ii+1]),'.�ж�(')===0 || getspace(ltrim($earr[$ii+1]))=='.Ĭ��'){
				if(end($parharr)=='RGJS' || end($parharr)=='PDJS' || end($parharr)=='RGZWB'){
				$parharr[count($parharr)-2]='PDPDZZ';
				}elseif(strpos(ltrim($value),'.�ƴ�ѭ��β')===0 || strpos(ltrim($value),'.�ж�ѭ��β')===0  || strpos(ltrim($value),'.ѭ���ж�β')===0 || strpos(ltrim($value),'.����ѭ��β')===0){
					$parharr[count($parharr)-2]='PDPDZZtwo';
					}
			}  //�����ж�һ�� ����� 
			}elseif($parharr[count($parharr)-2]=='RG'){
				if(getspace(ltrim($earr[$ii+1]))=='.����'){
					if(end($parharr)=='RGJS' || end($parharr)=='PDJS' || end($parharr)=='RGZWB'){
					$parharr[count($parharr)-2]='RGZZ';					
					}elseif(strpos(ltrim($value),'.�ƴ�ѭ��β')===0 || strpos(ltrim($value),'.�ж�ѭ��β')===0  || strpos(ltrim($value),'.ѭ���ж�β')===0 || strpos(ltrim($value),'.����ѭ��β')===0){
						$parharr[count($parharr)-2]='RGZZtwo';
						}
					} 
				}
	}
	
	$ii++;//�ܵļƴ�ѭ������ͳ��
	//�жϺ������ת�۵����
	
	
	if($value == '' && count($parharr)>0) {  
             $ehtm.=getepillar();             
		}elseif($value != ''){
							  							  
if(strlen($value)<=9 && strpos($value,'.�汾 ')===0) 
{
	//$elast=$value; //�ѱ��εĸ�ֵ
	continue; //����ǿ�ͷ��ʶ,��ô����
}

/*
elseif($value=='') //�����ǰΪ����
{
	if(strlen($elast)<=9 && strpos($elast,'.�汾 ')===0){ //�����һ���Ǳ�ʶ,��ô��������
		$elast=$value; //�ѱ��εĸ�ֵ
		continue; //����ǿ�ͷ��ʶ,��ô����
			}
	elseif($elast==''){	//�����һ��Ҳ�ǿ���,��ô��������(���жϽ������пո��������ϵ����)
		$elast=$value; //�ѱ��εĸ�ֵ
		continue; //����ǿ�ͷ��ʶ,��ô����		
		}
	elseif(1==1){
			
			
			}
}
*/
elseif(strpos($value,'.���� ')===0){ //����������ʾ
$ehtm.=getcodem($value,$he);
	$he=9;//��ʾ��ǰΪ���� 
}//��������������
elseif(strpos($value,'.�������� ')===0){ //��������������ʾ
$ehtm.=getcodek($value,$he);
	$he=8;//��ʾ��ǰΪ�������� 
}//�������ͱ���������
elseif(strpos($value,'    .��Ա ')===0){ //�������ͳ�Ա������ʾ
$ehtm.=getcodel($value,$he);
	$he=8;//��ʾ��ǰΪ�������ͳ�Ա 
}//�������ͱ���������
elseif(strpos($value,'.���� ')===0){ //����������ʾ
$ehtm.=getcodej($value,$he);
	$he=7;//��ʾ��ǰΪ���� 
}//��������������
elseif(strpos($value,'.ȫ�ֱ��� ')===0){ //ȫ�ֱ���������ʾ
$ehtm.=getcodei($value,$he);
	$he=6;//��ʾ��ǰΪȫ�ֱ���
}//ȫ�ֱ����������
elseif(strpos($value,'.ͼƬ ')===0){ //ͼƬ������ʾ
$ehtm.=getcodeh($value,$he);
	$he=5;//��ʾ��ǰΪͼƬ 
}//ͼƬ����������
elseif(strpos($value,'.DLL���� ')===0){ //DLL������ʾ
$ehtm.=getcodef($value,$he);
	$he=4;//��ʾ��ǰΪDLL���� 
}//DLL�������������
elseif(strpos($value,'    .���� ')===0){ //ȡ��DLL����
	$ehtm.=getcodeg($value,$he);
	$he=4;//��ʾ��ǰΪDLL����
}//ȡ��DLL�������
elseif(strpos($value,'.֧�ֿ� ')===0){ //ȡ��֧�ֿ��ı�
	$libarr[]=substr($value,strlen('.֧�ֿ� '));//��֧�ֿ��������
}//ȡ��֧�ֿ��ı����
elseif(strpos($value,'.�ӳ��� ')===0){ //�ӳ���������ʾ
$ehtm.=getcodee($value,$he);
	$he=1;//��ʾ��ǰΪ�ӳ��� 
}//�ӳ�������htm���
elseif(strpos($value,'.���� ')===0){ //�ӳ�������ж� 
$ehtm.=getcoded($value,$he);
	$he = 11;
} //�ӳ�������ж����
elseif(strpos($value,'.�ֲ����� ')===0){ //�ֲ�����
$ehtm.=getcodec($value,$he);
	$he=2;//��ʾ��ǰΪ�ֲ�����
}//�ֲ��������
elseif(strpos($value,'.���� ')===0){ //����
	$ehtm.=getcodeb($value,$he);
	$he=3;//��ʾ��ǰΪ����
}//�������
elseif(strpos($value,'.���򼯱��� ')===0){ //���򼯱���
	$ehtm.=getcodea($value,$he);
	$he=10;//��ֵ
}//���򼯱������

else {
   	if($he!=0){
	$ehtm=$ehtm.'</table>';
	$he=0;
	}//���������ͷ�����,��ô�����һ�м�һ������β
	
	$ehtm=$ehtm.geteyycode($value); //�˴������и�  .'<br>'    �Ƶ��ӳ�����
	
}
	
	
} //�жϿ���==''���,�����汾��Ҫ�޸�
}//����ѭ�����
	
	if($he!=0)
	$ehtm=$ehtm.'</table>'; //������һ��û�з��,��ô������
	
	$ehtm.=endelineimg($parharr,$ehtm); //������е�����ͼƬ
	$parharr=array();//�����������
	
	$ehtm=count($libarr)>0 ? $ehtm.getelib($libarr):$ehtm;//����֧�ֿ���
	
	return $ehtm; //����html����
}//���������


function getcodem($value,$he){ //��������������
	if($he!=0 && $he!=9) //�ж��� ���ֲ��ǳ���
	$ehtm=$ehtm.'</table>';
	if($he!=9){
		$ehtm.='<table border="1" cellspacing="0" style="table-layout:auto;border-width: 0px; margin-top: 4px; width:0px;"><tr><td class="eHeadercolor Rowheight">��������</td><td class="eHeadercolor Rowheight">����ֵ</td><td class="eHeadercolor Rowheight">�� ��</td><td class="eHeadercolor Rowheight">�� ע</td></tr>';
	}
	
	$ehtm=$ehtm.'<tr><td class="eOthercolor Rowheight">';
  	$value=substr($value,strlen('.���� '));//ȥ��ǰ��ı�ʶ      �ӳ������2, ������, ��̬, "33", ����7
	$temparr=explode(', ',$value);//���� ,  ���ָ�
		
	$ehtm=$ehtm.$temparr['0'].'</td><td class="Constanttext Rowheight">';//��һ��  ������  /������û��,����һ�������Ա
	$ehtm.=count($temparr)>1 ? (getSubstr($temparr['1'],'&quot;','&quot;')):'&nbsp;';//�ڶ��� ����  �����ھͷ��ؿ�
	$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';
	$ehtm.=count($temparr)>2 ? ($temparr['2']=='����'?'��':'&nbsp;'):'&nbsp;'; //������ ��ַ
	$ehtm.='</td><td colspan="3" class="Remarkscolor Rowheight">';
	//$ehtm.=count($temparr)>3 ? (getSubstr($temparr['3'],'&quot;','&quot;')):'&nbsp;'; //���ĸ� �����Ա��
	$ehtm.=count($temparr)>3 ? (substr($value,strlen($temparr['0'].$temparr['1'].$temparr['2'])+6)):''; //����� ��ע
	$ehtm.='</td></tr>';	
	
	return $ehtm;
}//��������������



function getcodel($value,$he){//�������ͳ�Ա���
if($he!=0 && $he!=8) //�ж��� ���ֲ����Զ�����������
	$ehtm=$ehtm.'</table>';
	
	if($he!=8){ //�ж��Ƿ��һ�μ���
	$ehtm=$ehtm.'<table border="1" cellspacing="0" style="table-layout:auto;border-width: 0px; margin-top: 4px; width:0px;"><tr><td class="eHeadercolor Rowheight">����������</td><td class="eHeadercolor Rowheight">����</td><td colspan="3" class="eHeadercolor Rowheight">�� ע</td></tr><tr><td class="Wrongcolor Rowheight">(δ��������������)</td><td class="Rowheight">&nbsp;</td><td colspan="3" class="Rowheight">&nbsp;</td></tr><tr><td class="eHeadercolor Rowheight">��Ա��</td><td class="eHeadercolor Rowheight">�� ��</td><td class="eHeadercolor Rowheight">��ַ</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">�� ע </td></tr>';	
		}
		
	$ehtm=$ehtm.'<tr><td class="Variablescolor Rowheight">';
  	$value=substr($value,strlen('    .��Ա '));//ȥ��ǰ��ı�ʶ      �ӳ������2, ������, ��̬, "33", ����7
		$temparr=explode(', ',$value);//���� ,  ���ָ�
		
		$ehtm=$ehtm.$temparr['0'].'</td><td class="eTypecolor Rowheight">';//��һ��  ������  /������û��,����һ�������Ա
		$ehtm.=count($temparr)>1 ? $temparr['1']:'&nbsp;';//�ڶ��� ����  �����ھͷ��ؿ�
		$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';
		$ehtm.=count($temparr)>2 ? ($temparr['2']=='��ַ'?'��':'&nbsp;'):'&nbsp;'; //������ ��ַ
		$ehtm.='</td><td class="eArraycolor Rowheight">';
		$ehtm.=count($temparr)>3 ? (getSubstr($temparr['3'],'&quot;','&quot;')):'&nbsp;'; //���ĸ� �����Ա��
		$ehtm.='</td><td colspan="3" class="Remarkscolor Rowheight">';
		$ehtm.=count($temparr)>4 ? (substr($value,strlen($temparr['0'].$temparr['1'].$temparr['2'].$temparr['3'])+8)):''; //����� ��ע
		$ehtm.='</td></tr>';	
		
		return $ehtm;
}//�������ͳ�Ա ������


function getcodek($value,$he){//��������ͷ�����
if($he != 0){
	$ehtm=$ehtm.'</table>';
	}
	$ehtm.='<table border="1" cellspacing="0" style="table-layout:auto;border-width: 0px; margin-top: 4px; width:0px;"><tr><td class="eHeadercolor Rowheight">����������</td><td class="eHeadercolor Rowheight">����</td><td colspan="3" class="eHeadercolor Rowheight">�� ע</td></tr>';

	$value=substr($value,strlen('.�������� '));//ȥ��ǰ��ı�ʶ
	$temparr=explode(', ',$value);//���� ,  ���ָ�
	$ehtm=$ehtm.'<tr><td class="eProcolor Rowheight">';
	$ehtm=$ehtm.$temparr['0'].'</td><td class="Rowheight eTickcolor" align="center">';//��һ��/������û��,����һ�������Ա
		
	$ehtm.=count($temparr)>1 ? (is_int(strpos($temparr['1'],'����'))?'��':'&nbsp;'):'&nbsp;'; //�ڶ��� ����
	$ehtm.='</td><td colspan="3" class="Remarkscolor Rowheight">';
	$ehtm.=count($temparr)>2 ? (substr($value,strlen($temparr['0'].$temparr['1'])+4)):''; //������ ��ע
	$ehtm.='</td></tr><tr><td class="eHeadercolor Rowheight">��Ա��</td><td class="eHeadercolor Rowheight">�� ��</td><td class="eHeadercolor Rowheight">��ַ</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">�� ע </td></tr>';

return $ehtm;
}//��������ͷ������������





function getcodej($value,$he){//���������
if($he != 0 && $he!=7){
	$ehtm=$ehtm.'</table>';
	}
	if($he !=7){
		$ehtm.='<table border="1" cellspacing="0" style="table-layout:auto;border-width: 0px; margin-top: 4px; width:0px;"><tr><td class="eHeadercolor Rowheight">��������</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">�� ע</td></tr>';
		}

	$value=substr($value,strlen('.���� '));//ȥ��ǰ��ı�ʶ
	$temparr=explode(', ',$value);//���� ,  ���ָ�
	$ehtm=$ehtm.'<tr><td class="eOthercolor Rowheight">';
	$ehtm=$ehtm.$temparr['0'].'</td><td class="Rowheight">&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="Rowheight eTickcolor" align="center">';//��һ��/������û��,����һ�������Ա
		
	$ehtm.=count($temparr)>1 ? (is_int(strpos($temparr['1'],'����'))?'��':'&nbsp;'):'&nbsp;'; //�ڶ��� ����
	$ehtm.='</td><td class="Remarkscolor Rowheight">';
	$ehtm.=count($temparr)>2 ? (substr($value,strlen($temparr['0'].$temparr['1'])+4)):''; //������ ��ע
	$ehtm.='</td></tr>';

return $ehtm;
}//��������������




function getcodei($value,$he){//ȫ�ֱ������
if($he != 0 && $he!=6){
	$ehtm=$ehtm.'</table>';
	}
	if($he !=6){
$ehtm=$ehtm.'<table border="1" cellspacing="0" style="table-layout:auto;border-width: 0px; margin-top: 4px; width:0px;"><tr><td class="eHeadercolor Rowheight">ȫ�ֱ�����</td><td class="eHeadercolor Rowheight">�� ��</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">�� ע</td></tr>';
	}
	
	$value=substr($value,strlen('.ȫ�ֱ��� '));//ȥ��ǰ��ı�ʶ
	$temparr=explode(', ',$value);//���� ,  ���ָ�
	$ehtm=$ehtm.'<tr><td class="Variablescolor Rowheight">';
	$ehtm=$ehtm.$temparr['0'].'</td><td class="eTypecolor Rowheight">';//��һ��/������û��,����һ�������Ա
	$ehtm.=count($temparr)>1 ? $temparr['1']:'&nbsp;';//�ڶ��� ����  �����ھͷ��ؿ�
	$ehtm=$ehtm.'</td><td class="eArraycolor Rowheight">';
	$ehtm.=count($temparr)>3 ? (getSubstr($temparr['3'],'&quot;','&quot;')):'&nbsp;'; //������ �����Ա��
	$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';
	$ehtm.=count($temparr)>2 ? (is_int(strpos($temparr['2'],'����'))?'��':'&nbsp;'):'&nbsp;'; //���ĸ� ����
	$ehtm.='</td><td class="Remarkscolor Rowheight">';
	$ehtm.=count($temparr)>4 ? (substr($value,strlen($temparr['0'].$temparr['1'].$temparr['2'].$temparr['3'])+8)):''; //����� ��ע
	$ehtm.='</td></tr>';

return $ehtm;
}//ȫ�ֱ����������

function getcodeh($value,$he){//ͼƬ�����
if($he != 0 && $he!=5){
	$ehtm=$ehtm.'</table>';
	}
	if($he !=5){
		$ehtm.='<table border="1" cellspacing="0" style="table-layout:auto;border-width: 0px; margin-top: 4px; width:0px;"><tr><td class="eHeadercolor Rowheight">ͼƬ��ͼƬ������</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">�� ע</td></tr>';
		}

	$value=substr($value,strlen('.ͼƬ '));//ȥ��ǰ��ı�ʶ
	$temparr=explode(', ',$value);//���� ,  ���ָ�
	$ehtm=$ehtm.'<tr><td class="eOthercolor Rowheight">';
	$ehtm=$ehtm.$temparr['0'].'</td><td class="Rowheight">&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="Rowheight eTickcolor" align="center">';//��һ��/������û��,����һ�������Ա
		
	$ehtm.=count($temparr)>1 ? (is_int(strpos($temparr['1'],'����'))?'��':'&nbsp;'):'&nbsp;'; //�ڶ��� ����
	$ehtm.='</td><td class="Remarkscolor Rowheight">';
	$ehtm.=count($temparr)>2 ? (substr($value,strlen($temparr['0'].$temparr['1'])+4)):''; //������ ��ע
	$ehtm.='</td></tr>';

return $ehtm;
}//ͼƬ����������


function getcodeg($value,$he){//DLL�������
	if($he!=0 && $he!=4){ //���֮ǰ�Ѿ��б��,�Ҳ���DLL��ر��
		$ehtm.='</table>';
		}
	if($he !=4){
		$ehtm.='<table border="1" cellspacing="0" style="table-layout:auto;border-width: 0px; margin-top: 4px; width:0px;"><tr><td class="eHeadercolor Rowheight">DLL������</td><td class="eHeadercolor Rowheight">����ֵ����</td><td class="eHeadercolor Rowheight">����</td><td colspan="2" class="eHeadercolor Rowheight">�� ע</td></tr><tr><td class="Wrongcolor Rowheight">(��δ��дDLL������)</td><td class="eTypecolor Rowheight">&nbsp;</td><td class="Rowheight" align="center">&nbsp;</td><td colspan="2" class="Remarkscolor Rowheight">&nbsp;</td></tr><tr><td colspan="5" class="eHeadercolor Rowheight">DLL���ļ���:</td></tr><tr><td colspan="5" class="Wrongcolor Rowheight">(δ��д���ļ���)</td></tr><tr><td colspan="5" class="eHeadercolor Rowheight">��DLL���ж�Ӧ������:</td></tr><tr><td colspan="5" class="Wrongcolor Rowheight">(δ��д������)</td></tr><tr><td class="eHeadercolor Rowheight">������</td><td class="eHeadercolor Rowheight">�� ��</td><td class="eHeadercolor Rowheight">��ַ</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">�� ע </td></tr>';
	}
	$value=substr($value,strlen('    .���� '));//ȥ��ǰ��ı�ʶ
	$temparr=explode(', ',$value);//���� ,  ���ָ�
	$ehtm=$ehtm.'<tr><td class="Variablescolor Rowheight">';
	$ehtm=$ehtm.$temparr['0'].'</td><td class="eTypecolor Rowheight">';//��һ��/������û��,����һ�������Ա
	$ehtm.=count($temparr)>1 ? $temparr['1']:'&nbsp;';//�ڶ��� ����  �����ھͷ��ؿ�
	$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';	
	$ehtm.=count($temparr)>2 ? (is_int(strpos($temparr['2'],'��ַ'))?'��':'&nbsp;'):'&nbsp;'; //������ ��ַ
	$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';
	$ehtm.=count($temparr)>2 ? (is_int(strpos($temparr['2'],'����'))?'��':'&nbsp;'):'&nbsp;'; //���ĸ� ����
	$ehtm.='</td><td class="Remarkscolor Rowheight">';
	$ehtm.=count($temparr)>3 ? (substr($value,strlen($temparr['0'].$temparr['1'].$temparr['2'])+6)):''; //����� ��ע
	$ehtm.='</td></tr>';


return $ehtm;
}//DLL����������



function getcodef($value,$he){//DLL��������
		if($he!=0){
	$ehtm=$ehtm.'</table>';
	if($he!=4)
	$ehtm=$ehtm.'<br>';
	}	
	$ehtm=$ehtm.'<table border="1" cellspacing="0" style="table-layout:auto;border-width: 0px; margin-top: 4px; width:0px;"><tr><td class="eHeadercolor Rowheight">DLL������</td><td class="eHeadercolor Rowheight">����ֵ����</td><td class="eHeadercolor Rowheight">����</td><td colspan="2" class="eHeadercolor Rowheight">�� ע</td></tr><tr><td class="eProcolor Rowheight">';
	
  	$value=substr($value,strlen('.DLL���� '));//ȥ��ǰ��ı�ʶ
		$temparr=explode(', ',$value);//���� ,  ���ָ�
		$ehtm=$ehtm.$temparr['0'].'</td><td class="eTypecolor Rowheight">';//��һ��/������û��,����һ�������Ա
		$ehtm.=count($temparr)>1 ? $temparr['1']:'&nbsp;';//�ڶ��� ����  �����ھͷ��ؿ�
		$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';
		$ehtm.=count($temparr)>4 ? ($temparr['4']=='����'?'��':'&nbsp;'):'&nbsp;'; //������ ����
		$ehtm.='</td><td colspan="2" class="Remarkscolor Rowheight">';
		$ehtm.=count($temparr)>5 ? (substr($value,strlen($temparr['0'].$temparr['1'].$temparr['2'].$temparr['3'].$temparr['4'])+10)):''; //������ ����
		$ehtm.='</td></tr><tr><td colspan="5" class="eHeadercolor Rowheight">DLL���ļ���:</td></tr><tr>';	
  		
		$ehtm.=count($temparr)>2 ? ($temparr['2']=='' ? '<td colspan="5" class="Wrongcolor Rowheight">(δ��д���ļ���)' : '<td colspan="5" class="eAPIcolor Rowheight">'.substr($temparr['2'],6,strlen($temparr['2'])-12)):'<td colspan="5" class="Wrongcolor Rowheight">(δ��д���ļ���)';//���ļ� 
		
		$ehtm.='</td></tr><tr><td colspan="5" class="eHeadercolor Rowheight">��DLL���ж�Ӧ������:</td></tr><tr>';
		
		$ehtm.=count($temparr)>3 ? ($temparr['3']=='' ? '<td colspan="5" class="Wrongcolor Rowheight">(δ��д������)' : '<td colspan="5" class="eAPIcolor Rowheight">'.substr($temparr['3'],6,strlen($temparr['3'])-12)):'<td colspan="5" class="Wrongcolor Rowheight">(δ��д������)';//������
		
		$ehtm.='</td></tr><tr><td class="eHeadercolor Rowheight">������</td><td class="eHeadercolor Rowheight">�� ��</td><td class="eHeadercolor Rowheight">��ַ</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">�� ע </td></tr>';
		
	return $ehtm;
	
}//DLL�������������




function getcodee($value,$he){//�����ӳ�����
		if($he!=0){
	$ehtm=$ehtm.'</table>';
	if($he!=3)
	$ehtm=$ehtm.'<br>';
	}	
	$ehtm=$ehtm.'<table border="1" cellspacing="0" style="table-layout:auto; border-width:0px;margin-top:4px; width:0px;"><tr><td class="eHeadercolor Rowheight">�ӳ�����</td><td class="eHeadercolor Rowheight">����ֵ����</td><td class="eHeadercolor Rowheight">����</td><td colspan="3" class="eHeadercolor Rowheight">�� ע</td></tr><tr><td class="eProcolor Rowheight">';
  	$value=substr($value,strlen('.�ӳ��� '));//ȥ��ǰ��ı�ʶ
		$temparr=explode(', ',$value);//���� ,  ���ָ�
		
		$ehtm=$ehtm.$temparr['0'].'</td><td class="eTypecolor Rowheight">';//��һ��/������û��,����һ�������Ա
		$ehtm.=count($temparr)>1 ? $temparr['1']:'&nbsp;';//�ڶ��� ����  �����ھͷ��ؿ�
		$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';
		$ehtm.=count($temparr)>2 ? ($temparr['2']=='����'?'��':'&nbsp;'):'&nbsp;'; //������ ����
		$ehtm.='</td><td colspan="3" class="Remarkscolor Rowheight">';
		$ehtm.=count($temparr)>3 ? (substr($value,strlen($temparr['0'].$temparr['1'].$temparr['2'])+6)):''; //������ ����
		$ehtm.='</td></tr>';	
  	return $ehtm;
	
}//�����ӳ��������



function getcoded($value,$he){//�����ӳ���������	
	if($he != 1 && $he !=11){
		if($he != 0){
			$ehtm.='</table>';
			}		
	$ehtm=$ehtm.'<table border="1" cellspacing="0" style="table-layout:auto; border-width:0px;margin-top:4px;width:0px;"><tr><td class="eHeadercolor Rowheight">�ӳ�����</td><td class="eHeadercolor Rowheight">����ֵ����</td><td class="eHeadercolor Rowheight">����</td><td colspan="3" class="eHeadercolor Rowheight">�� ע</td></tr><tr><td class="Wrongcolor Rowheight">(δ��д�ӳ�����)</td><td class="Rowheight">&nbsp;</td><td class="Rowheight">&nbsp;</td><td colspan="3" class="Rowheight">&nbsp;</td></tr><tr><td class="eHeadercolor Rowheight">������</td><td class="eHeadercolor Rowheight">�� ��</td><td class="eHeadercolor Rowheight">�ο�</td><td class="eHeadercolor Rowheight">�ɿ�</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">�� ע</td></tr><tr>';
	}
	if($he !=11){//���֮ǰ�����ӳ������ ��ô��Ҫ�۸��ͷ
	$ehtm=$ehtm.'<tr><td class="eHeadercolor Rowheight">������</td><td class="eHeadercolor Rowheight">�� ��</td><td class="eHeadercolor Rowheight">�ο�</td><td class="eHeadercolor Rowheight">�ɿ�</td><td class="eHeadercolor Rowheight">����</td><td class="eHeadercolor Rowheight">�� ע</td></tr><tr>';	
		}

	$ehtm=$ehtm.'<td class="Variablescolor Rowheight">';
	    $value=substr($value,strlen('.���� '));//ȥ��ǰ��ı�ʶ
		$temparr=explode(', ',$value);//���� ,  ���ָ�
		
		$ehtm=$ehtm.$temparr['0'].'</td><td class="eTypecolor Rowheight">';//��һ��/������û��,����һ�������Ա
		$ehtm.=count($temparr)>1 ? $temparr['1']:'&nbsp;';//�ڶ��� ����  �����ھͷ��ؿ�
		$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';	
		$ehtm.=count($temparr)>2 ? (is_int(strpos($temparr['2'],'�ο�'))?'��':'&nbsp;'):'&nbsp;'; //������ �ο�
		$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';
		$ehtm.=count($temparr)>2 ? (is_int(strpos($temparr['2'],'�ɿ�'))?'��':'&nbsp;'):'&nbsp;'; //������ �ɿ�
		$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';
		$ehtm.=count($temparr)>2 ? (is_int(strpos($temparr['2'],'����'))?'��':'&nbsp;'):'&nbsp;'; //������ ����
		$ehtm.='</td><td colspan="3" class="Remarkscolor Rowheight">';
		$ehtm.=count($temparr)>3 ? (substr($value,strlen($temparr['0'].$temparr['1'].$temparr['2'])+6)):''; //������ ����
		$ehtm.='</td></tr>';
	
	return $ehtm;	
}//�����ӳ������������



function getcodec($value,$he){//���ɾֲ��������
		if($he!=0 && $he!=2) //�ж��� ���ֲ��Ǿֲ�����
	$ehtm=$ehtm.'</table>';
	
	if($he!=2){ //�ж��Ƿ��һ�μ���
	$ehtm=$ehtm.'<table border="1" cellspacing="0" style="table-layout:auto;border-width: 0px; margin-top: 4px;width:0px;"><tr><td class="eVariableheadcolor Rowheight">������</td><td class="eVariableheadcolor Rowheight">�� ��</td><td class="eVariableheadcolor Rowheight">��̬</td><td class="eVariableheadcolor Rowheight">����</td><td class="eVariableheadcolor Rowheight">�� ע</td></tr>';	
		}
		
	$ehtm=$ehtm.'<tr><td class="Variablescolor Rowheight">';
  	$value=substr($value,strlen('.�ֲ����� '));//ȥ��ǰ��ı�ʶ      �ӳ������2, ������, ��̬, "33", ����7
		$temparr=explode(', ',$value);//���� ,  ���ָ�
		
		$ehtm=$ehtm.$temparr['0'].'</td><td class="eTypecolor Rowheight">';//��һ��  ������  /������û��,����һ�������Ա
		$ehtm.=count($temparr)>1 ? $temparr['1']:'&nbsp;';//�ڶ��� ����  �����ھͷ��ؿ�
		$ehtm.='</td><td class="Rowheight eTickcolor" align="center">';
		$ehtm.=count($temparr)>2 ? ($temparr['2']=='��̬'?'��':'&nbsp;'):'&nbsp;'; //������ ��̬
		$ehtm.='</td><td class="eArraycolor Rowheight">';
		$ehtm.=count($temparr)>3 ? (getSubstr($temparr['3'],'&quot;','&quot;')):'&nbsp;'; //���ĸ� �����Ա��
		$ehtm.='</td><td colspan="3" class="Remarkscolor Rowheight">';
		$ehtm.=count($temparr)>4 ? (substr($value,strlen($temparr['0'].$temparr['1'].$temparr['2'].$temparr['3'])+8)):''; //����� ��ע
		$ehtm.='</td></tr>';	
		
		return $ehtm;
}//���ɾֲ�����������



function getcodeb($value,$he){ //���ɳ��򼯱��
		if($he!=0)
	$ehtm=$ehtm.'</table>';
	
	$ehtm=$ehtm.'<table border="0" cellspacing="0" style="table-layout:auto;border-width: 0px;width:0px;"><tr><td class="eAssemblycolor Rowheight">���ڳ�����</td><td class="eAssemblycolor Rowheight">�� ��&nbsp;&nbsp;</td><td class="eAssemblycolor Rowheight">�� ��</td><td class="eAssemblycolor Rowheight">�� ע</td></tr><tr><td class="eProcolor Rowheight">';
	 $value=substr($value,strlen('.���� '));//ȥ��ǰ��ı�ʶ     ���ڳ���1, , , ˹�ٷ�
		$temparr=explode(', , , ',$value);//���� ,,,  ���ָ�
		if(count($temparr)==2){
			$ehtm=$ehtm.$temparr['0'].'</td><td class="Rowheight">&nbsp;</td><td class="Rowheight">&nbsp;</td><td class="Remarkscolor Rowheight">'.$temparr['1'].'</td></tr>';
			}else{
				$ehtm=$ehtm.$temparr['0'].'</td><td class="Rowheight">&nbsp;</td><td class="Rowheight">&nbsp;</td><td class="Rowheight">&nbsp;</td></tr>';				
			}

	return $ehtm;
}//���ɳ��򼯱�����


function getcodea($value,$he){ //���ɳ��򼯱������
	if($he!=3 && $he!=10){ //�ж��Ƿ��һ�μ���
		if($he!=0){ //�ж��� ���ֲ��ǳ��� �� ���򼯱���
	$ehtm=$ehtm.'</table>';
			}
	
	$ehtm=$ehtm.'<table border="0" cellspacing="0" style="table-layout:auto;border-width: 0px;width:0px;"><tr><td class="eAssemblycolor Rowheight">���ڳ�����</td><td class="eAssemblycolor Rowheight">�� ��&nbsp;&nbsp;</td><td class="eAssemblycolor Rowheight">�� ��</td><td class="eAssemblycolor Rowheight">�� ע</td></tr><tr><td class="Wrongcolor Rowheight">(δ��д������)</td><td class="Rowheight">&nbsp;</td><td class="Rowheight">&nbsp;</td><td class="Rowheight">&nbsp;</td></tr><tr><td class="eAssemblycolor Rowheight">������</td><td class="eAssemblycolor Rowheight">�� ��</td><td class="eAssemblycolor Rowheight">����</td><td class="eAssemblycolor Rowheight">�� ע </td></tr>';
	}//�жϵ�һ�μ������
	if($he!=10){//�����һ�����ǳ��򼯱��� ��ô��һ����ͷ
		$ehtm.='<tr><td class="eAssemblycolor Rowheight">������</td><td class="eAssemblycolor Rowheight">�� ��</td><td class="eAssemblycolor Rowheight">����</td><td class="eAssemblycolor Rowheight">�� ע </td></tr>';
		}
	
		
		$ehtm.='<tr><td class="Variablescolor Rowheight">'; 
		$value=substr($value,strlen('.���򼯱��� '));//ȥ��ǰ��ı�ʶ    ���ڳ��򼯱���, ������, , "2", ����1
		$temparr=explode(', ',$value);//���� ,  ���ָ�
		
		$ehtm=$ehtm.$temparr['0'].'</td><td class="eTypecolor Rowheight">';//��һ��  ������  /������û��,����һ�������Ա
		$ehtm.=count($temparr)>1 ? $temparr['1']:'&nbsp;';//�ڶ��� ����  �����ھͷ��ؿ�
		$ehtm.='</td><td class="eArraycolor Rowheight">';
		//$ehtm.=count($temparr)>3 ? (substr($temparr['3'],2,-1)):'&nbsp;'; //������ ����
		$ehtm.=count($temparr)>3 ? (getSubstr($temparr['3'],'&quot;','&quot;')):'&nbsp;';
		$ehtm.='</td><td class="Remarkscolor Rowheight">';
		$ehtm.=count($temparr)>4 ? (substr($value,strlen($temparr['0'].$temparr['1'].$temparr['2'].$temparr['3'])+8)):'&nbsp;'; //����� ��ע
		$ehtm.='</td></tr>';
		
		return $ehtm;
}//���ɳ��򼯱���������



function getelib($libarr){  //����֧�ֿ������
	global $_G; //ȫ�ֱ���,����
	$elib='';//��ʼ��֧�ֿ�ı���ı�
	if($_G['cache']['plugin']['ecode']['codelib'] !=''){ //�������������֧�ֿ��ı�
	$templib=explode("\n",$_G['cache']['plugin']['ecode']['codelib']); //�ѿ������������ı��ָ�
	$templib=array_unique($templib);//ɾ���ظ������Ա
	$libarr=array_unique($libarr);
	$elib='<br><br><table border="0" cellspacing="0" style="table-layout:auto;border-width: 0px;width:0px;"><tr><td class="eHeadercolor Rowheight"><font face=Webdings color=red>i</font>֧�ֿ��б�&nbsp;&nbsp;&nbsp;</td><td class="eHeadercolor Rowheight">֧�ֿ�ע��&nbsp;&nbsp;&nbsp;</td></tr>';
	
foreach ($templib as $value) //������������
{
	list($index, $choice) = explode('=', $value);
	$temparr[$index] = $choice;	
}	
	foreach ($libarr as $value)//�û��������֧�ֿ�
{
	if($temparr[$value] != ''){
	$elib.='<tr><td class="Variablescolor Rowheight">'.$value.'</td><td class="Remarkscolor Rowheight">'.$temparr[$value].'</td></tr>';	
		}else{
		$elib.='<tr><td class="Variablescolor Rowheight">'.$value.'</td><td class="Wrongcolor Rowheight">(δ֪֧�ֿ�)</td></tr>';	
			}
}
	return $elib.'</table>';	
	} else{
		return '';
		}
}//֧�ֿ�����������



function getepillar(){//����ʱʹ��  ��������������������
global $parharr,$ecolormod;//��ȡȫ����������
$ekg='';

if(end($parharr)=='PDZZ' || end($parharr)=='RGZZ' || end($parharr)=='PDPDZZ' ||end($parharr)=='PDMR' || end($parharr)=='RGFZ' || end($parharr)=='PDJS' || end($parharr)=='RGJS' || end($parharr)=='RGZWB'){

foreach ($parharr as $value)
{
  	  if($value=='XH' || $value=='RGZ' || $value=='PDKS' || $value=='RG'){
  $ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/03.png" align="absmiddle">';
  			} elseif($value=='PDMRKS' || $value=='RGFZKS'){
				$ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/04.png" align="absmiddle">';				
					} elseif($value=='PDPD'){
						$ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/05.png" align="absmiddle">';		
							}elseif($value=='PDZZ' ||$value=='RGZZ'){
							$ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/08.png" align="absmiddle">';
							}elseif($value=='PDZZtwo' ||$value=='RGZZtwo'){
								$ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/26.png" align="absmiddle">';
								} elseif($value=='PDPDZZ'){
								$ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/16.png" align="absmiddle">';
								}elseif($value=='PDPDZZtwo'){
									$ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/25.png" align="absmiddle">';
								}elseif($value=='RGJS' || $value=='PDJS'){
									$ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/02.png" align="absmiddle">';
									array_pop($parharr);
									}elseif($value=='RGZWB'){
										$ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/01.png" align="absmiddle">';
										array_pop($parharr);
										}elseif($value=='PDMR'){
										array_pop($parharr);
										$parharr[]='PDMRKSone';
										$ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/09.png" align="absmiddle"><br><img src="source/plugin/ecode/image/code'.$ecolormod.'/04.png" align="absmiddle">';
									}elseif($value=='RGFZ'){
										array_pop($parharr);
										$parharr[]='RGFZKSone';	
										$ekg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/09.png" align="absmiddle"><br><img src="source/plugin/ecode/image/code'.$ecolormod.'/04.png" align="absmiddle">';
										}
}

$ekg=end($parharr)=='PDJS' || end($parharr)=='RGJS' || end($parharr)=='RGZWB'?$ekg :$ekg.'<br>';
} //�ж���� 

return $ekg;
}//���ɿո��ӳ�����



function endelineimg($earr,$ehtm){//������е�����ͼƬ  ������Ҫ��������ѭ��  ������е�����    �������Ҫ   ����û�û�и�����ȫ  ������Ҫ��ȫ�Ĳ�ȫ
	global $ecolormod;
	
	$endeimg=substr($ehtm,-4)=='<br>' ? '':'<br>';//������ʱ�ı�
	
	if(count($earr)>0){//�������������
		
	if(end($earr)=='RGZWB' || end($earr)=='RGZ'){
		$endeimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/01.png" align="absmiddle">';
		}elseif(end($earr)=='PDJS' || end($earr)=='RGJS'){
			$endeimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/02.png" align="absmiddle">';
			}elseif(end($earr)=='PDMR' || end($earr)=='RGFZ'){
				$endeimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/09.png" align="absmiddle"><br><img src="source/plugin/ecode/image/code'.$ecolormod.'/02.png" align="absmiddle">';
				}elseif(end($earr)=='PDKS' ||end($earr)=='RG'){
					$endeimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/08.png" align="absmiddle"><br><img src="source/plugin/ecode/image/code'.$ecolormod.'/09.png" align="absmiddle"><br><img src="source/plugin/ecode/image/code'.$ecolormod.'/02.png" align="absmiddle">';
					}elseif(end($earr)=='PDPD'){
						$endeimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/16.png" align="absmiddle"><br><img src="source/plugin/ecode/image/code'.$ecolormod.'/09.png" align="absmiddle"><br><img src="source/plugin/ecode/image/code'.$ecolormod.'/02.png" align="absmiddle">';	
						}
		
		
		}else{ //�������Ϊ��
			$endeimg.='';
			}
	
	return $endeimg;
	}//�������ͼƬ�ӳ������
	
	


function getelineimg($etxt){//����������ı���������ͼƬ
	global $parharr,$ecolormod;//��ȡȫ����������
	$elineimg='';//������ʱͼƬ�ı�
	
if(end($parharr)=='PDMR' || end($parharr)=='RGFZ'){
	$elineimg='';
				
		}else{
			
	$i=0;
	while(substr($etxt,0,4)=='    ' && $parharr[$i]!='')//����ı�ǰ�ĸ��ǿո� �Ҷ�Ӧ�����鲻Ϊ��
  {
	  if($parharr[$i]=='XH' || $parharr[$i]=='RGZ' || $parharr[$i]=='PDKS' || $parharr[$i]=='RG'){
  $elineimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/03.png" align="absmiddle">';
  			} elseif($parharr[$i]=='PDMRKS' || $parharr[$i]=='RGFZKS'){
				$elineimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/04.png" align="absmiddle">';				
					} elseif($parharr[$i]=='PDPD'){
						$elineimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/05.png" align="absmiddle">';		
							}elseif($parharr[$i]=='PDZZ' ||$parharr[$i]=='RGZZ'){
							$elineimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/08.png" align="absmiddle">';
							}elseif($parharr[$i]=='PDZZtwo' ||$parharr[$i]=='RGZZtwo'){
								$elineimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/26.png" align="absmiddle">';
								} elseif($parharr[$i]=='PDPDZZ'){
								$elineimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/16.png" align="absmiddle">';
								}elseif($parharr[$i]=='PDPDZZtwo'){
									$elineimg.='<img src="source/plugin/ecode/image/code'.$ecolormod.'/25.png" align="absmiddle">';
									}
  
  $etxt=substr($etxt,4);
  $i++;
  }	
	
			}

	
	return $elineimg;
}//������������ͼƬ�ӳ������



function getepathline($etxt){//�������������  �ж���� ����� ѭ��....   �˴���Ҫ������ʽ��Ŷ�ѡ��ͬ���ļ���ͼƬ
	global $parharr,$ecolormod;//��ȡȫ����������
	$tempelineimg='';//������ʱ �������ɵ�ͼƬ����
	
	$tempelineimg=getelineimg($etxt);//���ݸ����ı�,��������ͼƬ �ı�
	$etxt=ltrim($etxt);//�����ı�ȥ���׿�
		
	if(end($parharr)=='PDMR'){
		array_pop($parharr);
		$parharr[]='PDMRKSone';
		if(strpos($etxt,'.����� (')===0 || strpos($etxt,'.�����(')===0 ||strpos($etxt,'.��� (')===0 || strpos($etxt,'.���(')===0){
			$tempelineimg='<img src="source/plugin/ecode/image/code'.$ecolormod.'/10.png" align="absmiddle">';
			}else {
					$tempelineimg='<img src="source/plugin/ecode/image/code'.$ecolormod.'/09.png" align="absmiddle">';
						}
				

		}elseif(end($parharr)=='RGFZ'){
			array_pop($parharr);
			$parharr[]='RGFZKSone';	
		if(strpos($etxt,'.����� (')===0 || strpos($etxt,'.�����(')===0 ||strpos($etxt,'.��� (')===0 || strpos($etxt,'.���(')===0 ||strpos($etxt,'.�жϿ�ʼ')===0){
			$tempelineimg='<img src="source/plugin/ecode/image/code'.$ecolormod.'/10.png" align="absmiddle">';
			}else {
					$tempelineimg='<img src="source/plugin/ecode/image/code'.$ecolormod.'/09.png" align="absmiddle">';
						}
				
			}


	if(strpos($etxt,'.����� (')===0 || strpos($etxt,'.�����(')===0){ 
		if(end($parharr)=='RGZWB'){
		$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/17.png" align="absmiddle">'.substr($etxt,1);
		array_pop($parharr);
			} elseif(end($parharr)=='PDMRKSone'){ 
			$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/19.png" align="absmiddle">'.substr($etxt,1);
			array_pop($parharr);
			$parharr[]='PDMRKS';
				}elseif(end($parharr)=='PDJS' || end($parharr)=='RGJS'){
					$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/20.png" align="absmiddle">'.substr($etxt,1);
					array_pop($parharr);					
					}else{
	$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/07.png" align="absmiddle">'.substr($etxt,1);
					}
				$parharr[]='RGZ';
	
		} elseif (strpos($etxt,'.�ƴ�ѭ����')===0 || strpos($etxt,'.�ж�ѭ����')===0 || strpos($etxt,'.ѭ���ж���')===0 || strpos($etxt,'.����ѭ����')===0){ 
	if(end($parharr)=='RGZWB'){
		$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/18.png" align="absmiddle">'.substr($etxt,1);
		array_pop($parharr);		
		} else {	
	$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/13.png" align="absmiddle">'.substr($etxt,1);
				}
				$parharr[]='XH';
	
			} elseif($etxt == '.��������'){
				if(end($parharr)=='RGZWB'){
					$etxt='<img src="source/plugin/ecode/image/code'.$ecolormod.'/01.png" align="absmiddle"><br>';
						} else{
		$etxt='';
		array_pop($parharr);
		$parharr[]='RGZWB';//�����鶨����������		
						}
						
				} elseif(strpos($etxt,'.�жϿ�ʼ')===0){
			if(end($parharr)=='RGZWB'){
			$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/17.png" align="absmiddle">'.substr($etxt,1);
			array_pop($parharr);
				}elseif(end($parharr)=='RGFZKSone'){ 
					$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/19.png" align="absmiddle">'.substr($etxt,1);
					array_pop($parharr);
					$parharr[]='RGFZKS'; 
							} else{
					$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/07.png" align="absmiddle">'.substr($etxt,1);
					}
				$parharr[]='PDKS';
			
					}elseif($etxt == '.Ĭ��'){
							array_pop($parharr);
							$parharr[]='PDMR';
							$etxt=$tempelineimg;
				
						}elseif($etxt == '.�жϽ���'){
				if(end($parharr)=='RGZWB'){
					$etxt='<img src="source/plugin/ecode/image/code'.$ecolormod.'/01.png" align="absmiddle"><br>';
					array_pop($parharr);
					$parharr[]='PDJS';
						}elseif(end($parharr)=='RGJS'){ 
							$etxt='<img src="source/plugin/ecode/image/code'.$ecolormod.'/02.png" align="absmiddle"><br>';
							array_pop($parharr);
							array_pop($parharr);
							$parharr[]='PDJS';						
							
							}else{
							$etxt='';
							array_pop($parharr);
							$parharr[]='PDJS';//�����鶨���жϽ������		
								}				
				
							}elseif(strpos($etxt,'.�ж� (')===0 || strpos($etxt,'.�ж�(')===0){
									array_pop($parharr);
									$parharr[]='PDPD';
									$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/15.png" align="absmiddle">'.substr($etxt,1);
								
								}elseif(strpos($etxt,'.�ƴ�ѭ��β')===0 || strpos($etxt,'.�ж�ѭ��β')===0  || strpos($etxt,'.ѭ���ж�β')===0 || strpos($etxt,'.����ѭ��β')===0){
								if(end($parharr)=='RGZWB'){
								$etxt='<img src="source/plugin/ecode/image/code'.$ecolormod.'/01.png" align="absmiddle"><br>'.$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/12.png" align="absmiddle">'.substr($etxt,1);//�˴���BUG
								array_pop($parharr);
								array_pop($parharr);
									}elseif(end($parharr)=='PDJS' || end($parharr)=='RGJS'){ 
									$etxt='<img src="source/plugin/ecode/image/code'.$ecolormod.'/02.png" align="absmiddle"><br>'.$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/12.png" align="absmiddle">'.substr($etxt,1);//�˴���BUG
								array_pop($parharr);
								array_pop($parharr);									
									
									}else{
										array_pop($parharr);
										if(end($parharr)=='PDZZtwo' || end($parharr)=='RGZZtwo'|| end($parharr)=='PDPDZZtwo'){
										$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/14.png" align="absmiddle">'.substr($etxt,1);	
											}else{
										$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/12.png" align="absmiddle">'.substr($etxt,1);
										}
										}
							
							
							
								}elseif(strpos($etxt,'.��� (')===0 || strpos($etxt,'.���(')===0){
									if(end($parharr)=='RGZWB'){
										$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/17.png" align="absmiddle">'.substr($etxt,1);
										array_pop($parharr);
										
										}elseif(end($parharr)=='PDMRKSone'){ 
										$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/19.png" align="absmiddle">'.substr($etxt,1);
										array_pop($parharr);
										$parharr[]='PDMRKS';
											
											}elseif(end($parharr)=='RGFZKSone'){ 
										$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/19.png" align="absmiddle">'.substr($etxt,1);
										array_pop($parharr);
										$parharr[]='RGFZKS';
							
										}else{
											$etxt=$tempelineimg.'<img src="source/plugin/ecode/image/code'.$ecolormod.'/07.png" align="absmiddle">'.substr($etxt,1);
											}
										$parharr[]='RG';									
									
									}elseif($etxt == '.����'){
										array_pop($parharr);
										$parharr[]='RGFZ';
										$etxt=$tempelineimg;
										
										}elseif($etxt == '.�������'){
											if(end($parharr)=='RGZWB'){
											$etxt='<img src="source/plugin/ecode/image/code'.$ecolormod.'/01.png" align="absmiddle"><br>';
											array_pop($parharr);
											$parharr[]='RGJS';
												}elseif(end($parharr)=='PDJS' || end($parharr)=='RGJS'){ 
													$etxt='<img src="source/plugin/ecode/image/code'.$ecolormod.'/02.png" align="absmiddle"><br>';
													array_pop($parharr);
													array_pop($parharr);
													$parharr[]='RGJS';

												} else{
													$etxt='';
													array_pop($parharr);
													$parharr[]='RGJS';//�����鶨���жϽ������		
														}	
											
											}else{ //�������û���������ݴ���
												if(end($parharr)=='RGZWB'){
												array_pop($parharr);
												$etxt=$tempelineimg.'<span class="eunderimg">'.$etxt.'</span>';												
													}elseif(end($parharr)=='RGJS' || end($parharr)=='PDJS'){
													array_pop($parharr);
													$etxt=$tempelineimg.'<span class="ecenterimg">'.$etxt.'</span>';																							
													}else { //������е����鶼�ǿյ�.��ô���������
													$etxt=$tempelineimg.$etxt;
														}
												
												}


	if(end($parharr)=='PDMRKSone'){ //��Ϊ����Ĵ����ֱ�Ӽӵ��������һ��, ��˴˴��ᱻѹ�������ڶ���.. ���..  ������ ..
				array_pop($parharr);
				$parharr[]='PDMRKS';
		}elseif(end($parharr)=='RGFZKSone'){
					array_pop($parharr);
					$parharr[]='RGFZKS';
			}
	
	$etxt=(end($parharr)=='RGZWB' || end($parharr)=='PDMR' || end($parharr)=='RGFZ' || end($parharr)=='PDJS' || end($parharr)=='RGJS')? $etxt:$etxt.'<br>';  //�˴���ӻ���  ������Ҫ������ǰ׺ͼƬ����  ���ǻ�Ҫ����etxt�Ƿ�Ϊ�����ӻ���
	return $etxt;
}//�����������ӳ������


function geteyycode($etxt){ //����������ɫ
	$etxt=getepathline($etxt);//������������� �ͻ���.'<br>'
	
	$temp=''; //��ʼ����ע�ı�
	$place=strpos($etxt,'\'');//ȡ�� '��λ��	
while(is_int($place))//��ȡ��עѭ��
  {
		if(getnum($etxt,'��',$place)==getnum($etxt,'��',$place)){
		  $temp=substr($etxt,$place+1);//ȡ����ע
		  $temp=substr($temp,0,1)==' ' ? $temp : (' '.$temp);
		  $etxt=substr($etxt,0,$place);
		  $place=false;
		  }
		else {
			$place=strpos($etxt,'\'',$place+1);
			}
  }	//��ȡ��עѭ�����
  
  $etxt=implode(explode('��',$etxt),"<span class=eTxtcolor>��");
  $etxt=implode(explode('��',$etxt),"��</span>");//�������и�������������ɫ
  
  $leftplace = -1; //��ʼ�����ŵ������
  $place=strpos($etxt,'(');//ȡ�� ( ��λ��
  $signarr=array(".", "��", "��", "��", "\\", "��", "%", "��", "+", "��", "-", "(", ")", " ", "*", "��", ">", "<", "��", "��", "��", "��", "=","��",";",":");
  $sparr=array("�����","��������","�ж�","�жϿ�ʼ","�жϽ���","Ĭ��","����","���","����","����","��ѭ��β","����ѭ��","ѭ���ж���","ѭ���ж�β","�ж�ѭ����","�ж�ѭ��β","�ƴ�ѭ����", "�ƴ�ѭ��β","����ѭ����","����ѭ��β");
while(is_int($place))//��ȡ����ѭ��
  {
		if(getnum($etxt,'��',$place)==getnum($etxt,'��',$place)){ //�������������
		$place=substr($etxt,$place-1,1)==' ' ? ($place-1) : $place;//���(����ǿո�)
		
foreach ($signarr as $value)
{
  $leftplace=is_int(strrpos(substr($etxt,0,$place),$value)) ? (strrpos(substr($etxt,0,$place),$value)>=$leftplace? strrpos(substr($etxt,0,$place),$value):$leftplace) : $leftplace;//ȡ�����һ�γ��ֵ�λ��  ����Ҹ��ط����� break; ��������
}
		
		if(substr($etxt,$place,1)==' '){
		$etxt=substr($etxt,0,$place).'</span>'.substr($etxt,$place);//������Ҫ�����Ŵ���ɫ      !!! �������չ,˳��������ŵ���ɫ 
			} else {
				$etxt=substr($etxt,0,$place).'</span> '.substr($etxt,$place);
				}
		
		$leftplace= $leftplace==-1 ? 0 : ($leftplace+1); //���ʲô���Ŷ�ûȡ��,��ô��ߵ�λ��=0 
		if(in_array(substr($etxt,$leftplace,$place-$leftplace),$sparr)){ //ȡ��������ı�,�ж��Ƿ������������д���
			$etxt=substr($etxt,0,$leftplace).'<span class="comecolor">'.substr($etxt,$leftplace); //����ɫ
			} elseif(substr($etxt,$leftplace-1,1)=='.'){ //�����ߵķ����� .
				$etxt=substr($etxt,0,$leftplace).'<span class="cometwolr">'.substr($etxt,$leftplace); //��С�������ɫ
				}else {
		$etxt=substr($etxt,0,$leftplace).'<span class="funccolor">'.substr($etxt,$leftplace); //�Ϻ�ɫ		
				}
		$place=strpos($etxt,'(',$place+33);
		  }
		else {//�������˼��,�����������
			$place=strpos($etxt,'(',$place+1);
			}
  }	//��ȡ����ѭ�����
  
  $leftplace=strpos($etxt,'#');//ȡ�� # ��λ��
  $place=strlen($etxt);//��ʼ����ֵ �ұߵ�ֵ ȡ�ı�����
  while(is_int($leftplace))//��ȡ����ͼƬѭ��
  {
	  if(getnum($etxt,'��',$leftplace)==getnum($etxt,'��',$leftplace)){ //�������������
	  foreach ($signarr as $value)
{
  $place=is_int(strpos($etxt,$value,$leftplace)) ? (strpos($etxt,$value,$leftplace) <= $place? strpos($etxt,$value,$leftplace):$place) : $place;//ȡ������һ�γ��ֵ�λ��
}
		if(substr($etxt,$place,1)==' '){
		$etxt=substr($etxt,0,$place).'</span>'.substr($etxt,$place);//������Ҫ�����Ŵ���ɫ      !!! �������չ,˳��������ŵ���ɫ 
			} else {
		$etxt=substr($etxt,0,$place).'</span> '.substr($etxt,$place);
				}
		if(substr($etxt,$leftplace-1,1)==' '){
		$etxt=substr($etxt,0,$leftplace).'<span class="conscolor">'.substr($etxt,$leftplace); //�ϳ���ͼƬɫ
		} else {
			$etxt=substr($etxt,0,$leftplace).' <span class="conscolor">'.substr($etxt,$leftplace);
			}
	  
	  $place=strlen($etxt);
	  $leftplace=strpos($etxt,'#',$leftplace+33);
	  } else{//�������˼��,�����������
		  $leftplace=strpos($etxt,'#',$leftplace+1);
		  }
	  
}//��ȡ����ͼƬѭ�����
  
  
  $etxt=$temp !='' ? (substr($etxt,-1)==' ' ? $etxt:$etxt.' '):$etxt;//����б�ע,�ж����һ���Ƿ��пո�
  $etxt=$temp !='' ? ($etxt.'<span class="Remarkscolor">\''.$temp.'</span>') : $etxt;//����б�ע,�ͼ���
  
  $place=strpos($etxt,'<span class="comecolor">�жϿ�ʼ</span>');//ȡ�� �жϿ�ʼ ��λ��
  if(getnum($etxt,'��',$place)==getnum($etxt,'��',$place) && is_int($place)){//���ǰ�������������. ��˼�ǲ���������
  		$etxt=str_replace('<span class="comecolor">�жϿ�ʼ</span>','<span class="comecolor">�ж�</span>',$etxt);
	  }
  
  $etxt=ecodealone('��',$etxt);
  $etxt=ecodealone('��',$etxt);
  $etxt=ecodealone('(',$etxt);
  $etxt=ecodealone(')',$etxt);
  $etxt=ecodealone('{',$etxt);//����������Ƿ���Ҫ�Ƶ�����  �Ƿ����ע��ͻ
  $etxt=ecodealone('}',$etxt);
  $etxt=ecodealone('��',$etxt);
  $etxt=ecodealone('��',$etxt);
  $etxt=ecodealone('[',$etxt);
  $etxt=ecodealone(']',$etxt);
  
  return $etxt;
}//������ɫ�ӳ������


function ecodealone($point,$etxt){//������������ɫ  �� �� ���� �� �� ...
	//   ��Ҫ������  # ͼƬ  ���� �Ƿ�����ɫ
	$fuhao=array(' ','=','(',')');
  $place=strpos($etxt,$point);//ȡ�õ������ֳ���λ��
  while(is_int($place))//��ȡ����ͼƬѭ��
  {
	  if(strlen($point) >1){//����ؼ���������
		  if(in_array(substr($etxt,$place-1,1),$fuhao) == false || in_array(substr($etxt,$place+strlen($point),1),$fuhao) == false){
	  $place=strpos($etxt,$point,$place+1);
	  continue;
		  }
	  }
	  
	  if(getnum($etxt,'��',$place)==getnum($etxt,'��',$place)){ //�������������

		$etxt=substr($etxt,0,strlen($point)+$place).'</span>'.substr($etxt,$place+strlen($point));  
		
		if($point=='��' || $point=='��'){
		$etxt=substr($etxt,0,$place).'<span class="conscolor">'.substr($etxt,$place); 
		} elseif($point=='��' || $point=='��') {
			$etxt=substr($etxt,0,$place).'<span class="funccolor">'.substr($etxt,$place);
			}elseif($point==')' || $point=='(' || $point=='{' || $point=='}' || $point=='[' || $point==']'){
				$etxt=substr($etxt,0,$place).'<span class="conscolor">'.substr($etxt,$place);
				}
	  
	  $place=strpos($etxt,$point,$place+33);
	  } else{//�������˼��,�����������
		  $place=strpos($etxt,$point,$place+1);
		  }
	  
}//ѭ�����	
	
	return $etxt;
}

function getspace($txt){ //ȥ��β�պ͵��еĻ��з�
//$txt = mb_ereg_replace('^(��| )+', '', $txt); 
//$txt = mb_ereg_replace('(��| )+$', '', $txt); 
//$txt = mb_ereg_replace('����', "\n����", $txt);	
return preg_replace("/(\r\n|\n|\r|\t)/i", '', $txt);
}

function getnum($all,$txt,$num){ //ȫ���ı� ,ָ���ı� ,ָ��λ��   ��ȡָ��λ��ǰ��ָ���ַ����ִ���  
$all=substr($all,0,$num); //��ָ��λ�ý�ȡ�ı�
if (strpos($all,$txt)=== false){ //����Ҳ����ı�
return '0';
}
else {
	$numb=0;//������ʼ��
	$place=0;//λ�ó�ʼ��
do
  {
  $place=strpos($all,$txt,$place);
  if(is_int($place)){
	  $place++;
	  $numb++;  
	  }
  
  }
while (is_int($place));	
	return $numb;
} //else���
}//�ӳ������

function getSubstr($str, $leftStr, $rightStr)//ȡ�ı��м�
{
    $left = strpos($str, $leftStr);
   // echo '���:'.$left;
    $right = strpos($str, $rightStr,$left);
   // echo '<br>�ұ�:'.$right;
    if($left < 0 or $right < $left) return '';
    return substr($str, $left + strlen($leftStr), $right-$left-strlen($leftStr));
}

?>