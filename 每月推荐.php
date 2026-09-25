<?php
<<<<<<< HEAD
// 应该为动态内容
function getRecommand(type)
{
    if(type == "software")
    {
        $recommand = {
            "softA":"a.exe"
        }
        return Recommand
=======
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

>>>>>>> 00d8467d521885818e6f5b72ed1751432d5372f6
    }
}
?>