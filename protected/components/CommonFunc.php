<?php
/**
*  公共方法
*/
class CommonFunc
{
    public static function strAddslashes($str)
    {
        return addslashes($str);
    }
    
    public static function arrAddslashes($arr)
    {
        foreach ($arr as & $value) {
            $value = self::strAddslashes($value);
        }
        
        return $arr;
    }
    
    // 剪断文字长度
    public static function cut_str($string,$length, $dot = '***' ) {
        preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $info);  
        $str = '';
        $j = '';
        for($i=0; $i<count($info[0]); $i++) {
                $str .= $info[0][$i];
                $j = ord($info[0][$i]) > 127 ? $j + 2 : $j + 1;
                if ($j > $length - 3) {
                        return $str.$dot;
                }
        }
        return join('', $info[0]);
    }
}
