<?php

require_once 'AbstractBattleDev.php';

class BattleDev extends AbstractBattleDev
{
    public function resolve($input)
    {
        $c = 0;
        foreach(explode(" ", $input[1]) as $age){
            if ($age >= 5 && $age <= 9) {
                $c++;
            }
        }
        return $c;

    }
}