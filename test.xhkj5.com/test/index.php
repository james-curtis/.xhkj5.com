<?php
exportToExcel(time().'.csv',['a','a'],[['a'],['a']]);

function strlen_utf8($str)
{
    $i = 0;
    $count = 0;
    $len = strlen($str);
    while ($i < $len)
    {
        $chr = ord($str[$i]);
        $count++;
        $i++;
        if ($i >= $len)
        {
            break;
        }
        if ($chr & 0x80)
        {
            $chr <<= 1;
            while ($chr & 0x80)
            {
                $i++;
                $chr <<= 1;
            }
        }
    }
 
    return $count;
}
function exportToExcel($filename, $titleArray=[], $dataArray=[]){  
        ini_set('memory_limit','512M');
        ini_set('max_execution_time',0);
        ob_end_clean();  
        ob_start();  
        header("Content-Type: text/csv");  
        header("Content-Disposition: filename=".$filename);
        header ( "Accept-Ranges: bytes");
        $length = 0;
        foreach ($titleArray as $v) {
          $length += strlen_utf8($v);
        }
        foreach ($dataArray as $v) {
          foreach ($v as $v_) {
            $length += strlen_utf8($v_);
          }
        }
        Header ("Accept-Length: 1024");
        $fp=fopen('php://output','w');  
        fwrite($fp, chr(0xEF).chr(0xBB).chr(0xBF));
        fputcsv($fp,$titleArray);  
       
        foreach ($dataArray as $item) {
            fputcsv($fp,$item);  
        }  
        ob_flush();
        flush();
        ob_end_clean();
    }  