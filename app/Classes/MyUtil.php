<?php

namespace App\Classes;

use App\UploadedRes;

class MyUtil
{

//preg_replace('<img src="data:image/jpeg;base64,', $replacement, $subject)

//$result = $pdo->query("select * from articles a join article_category b on a.category = b.Id");
    public static function save_file($_file)
    {
        $photo_file = MyUtil::gen_file_name();
        $new_file = $_SERVER['DOCUMENT_ROOT'] . "/statics/images/upload/$photo_file";
        if (file_put_contents($new_file, $_file)) {
            $img_type = exif_imagetype($new_file);
            $ext = image_type_to_extension($img_type, TRUE);
            rename($new_file, $new_file . $ext);
            $new_file = $new_file . $ext;
            return $photo_file . $ext;
        }
    }

    public static function get_extension($file)
    {
        return substr(strrchr($file, '.'), 1);
    }

    public static function gen_file_name($file_ext = '')
    {
        $msec = explode(" ", microtime());
        if (!empty($file_ext))
            $photo_file = date("Y_m_d_H_i_s") . $msec[1] . "." . $file_ext;
        else
            $photo_file = date("Y_m_d_H_i_s") . $msec[1];
        return $photo_file;
    }

    public static function get_content_with_ellipses($content, $max_len = 100)
    {
        $txt_content = preg_replace("/<.*?>/", "", $content);
        $len = strlen($txt_content);
        $result = $txt_content;
        if ($len + 3 > $max_len)
            $result = mb_strcut($txt_content, 0, $max_len - 3, 'UTF-8') . "...";
        return $result;
    }

    public static function replace_reference_tag($content)
    {
        //<img src="{@res_id=3}"
        return preg_replace_callback('/<img\ssrc="{@res_id=(?P<resId>\d+)}">/', function($matches){
                $res = UploadedRes::find($matches["resId"]);
                return '<img src="statics/images/upload/' . $res->filename . "\">";
            }, $content);
    }
    public static function get_res_file($content)
    {
        //<img src="{@res_id=3}"
        $matched = preg_match('/<img\ssrc="{@res_id=(?P<resId>\d+)}">/', $content, $matches);
        if ($matched)
        {
            $res = UploadedRes::find($matches["resId"]);
            return $res->filename;
        }
        return null;
    }
}