<?php
namespace LightNovel\SuperDash\ListenPapa;

require 'ReflectionProperties.php';

class ListenPapa {
    public $hina = "おいたんだえ？"; // oitan dae?
    public $miu  = "デリカシーに欠けてますよ！"; // delicacy ni kaketemasuyo!
    public $sora = "おにいちゃんのバカー"; // oniichan no baka-!
    use \ReflectionProperties;
}

$papa = new ListenPapa();

echo $papa;

