<?php
namespace LightNovel\SuperDash\ListenPapa;

require 'ReflectionProperties.php';

class ListenPapa {
    public $hina = "おいたんだえ？";
    public $miu  = "デリカシーに欠けてますよ！";
    public $sora = "おにいちゃんのバカー";
    use \ReflectionProperties;
}

$papa = new ListenPapa();

echo $papa;

