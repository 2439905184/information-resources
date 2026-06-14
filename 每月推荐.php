<?php
// 应该为动态内容 todo rss订阅
function getRecommand($type)
{
    if ($type == "software")
    {
        $recommand = array(
            "softwareA"=>"a.exe");

        return $recommand;
    }
    elseif ($type == "game")
    {

    }
    elseif ($type == "website")
    {

    }
}
?>