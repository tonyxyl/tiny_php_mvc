<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 加密解密类
 * XOR算法加密/解密
 */
class Crypt
{
    public function encrypt($string, $key)
    {
        $str_len = strlen($string);
        $key_len = strlen($key);
        for ($i = 0; $i < $str_len; $i++)
        {
            for ($j = 0; $j < $key_len; $j++)
            {
                $string[$i] = $string[$i] ^ $key[$j];
            }
        }
        return $string;
    }

    public function decrypt($string, $key)
    {
        $str_len = strlen($string);
        $key_len = strlen($key);
        for ($i = 0; $i < $str_len; $i++)
        {
            for ($j = 0; $j < $key_len; $j++)
            {
                $string[$i] = $key[$j] ^ $string[$i];
            }
        }
        return $string;
    }

}