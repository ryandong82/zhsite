<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 15-6-29
 * Time: 下午10:07
 */

namespace App\Classes;

use Illuminate\Database\Eloquent\Model;


class ImageSplitter
{
    private $mime_type;
    public $is_matched;
    private $matches;
    private $content;
    private $img;

    public function getResult()
    {

    }

//    public static function replaceImageRef($content, $get_filename)
//    {
//        $matched = preg_match('/<img\ssrc="{@res_id=(?P<res_id>)}"/', $content, $matches);
//        if ($matched)
//        {
//            $filename = $get_filename($matches['res_id']);
//            $result = preg_replace('/{@res_id=\d*?}/', $filename, $content);
//            return $result;
//        }
//    }

    public function getPlainContent($res_id)
    {
        $index = 0;
        $res_ids = is_array($res_id) ? $res_id : func_get_args();
        $plain_content = preg_replace_callback('/<img\ssrc="data:.*?;base64,.*?">/', function ($matches) use ($res_ids, &$index) {
            $result = "<img src=\"{@res_id=$res_ids[$index]}\">";
            $index++;
            return $result;
        }, $this->content);
        return $plain_content;
    }

    public function getImageContent()
    {
        return $this->img;
    }

    public function getMime()
    {
        return $this->mime_type;
    }


    public function __construct($content)
    {
        //parent::__construct();
        $this->content = $content;
        $this->is_matched = preg_match_all('/<img\ssrc="data:(?P<contenttype>.*?);base64,(?P<content>.*?)">/',
            $content, $this->matches);
        if ($this->is_matched) {
            $this->mime_type = $this->matches['contenttype'];
            foreach ($this->matches['content'] as $match) {
                $this->img[] = base64_decode($match);
            }
        }
    }
}