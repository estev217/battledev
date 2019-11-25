<?php

abstract class AbstractBattleDev
{
   
    public $packs;
    
    public $success = 0;
    
    public $errors = [];
    
 
    public function __construct()
    {
       foreach (array_slice(scandir('data'), 2) as $file) {
           if (substr($file, 0, 5) === 'input') {
               $position = substr($file, 5, 1);
                $this->packs[$position] = [
                    explode(PHP_EOL, file_get_contents('data/' . $file))
                ];
           }
           if (substr($file, 0, 6) === 'output') {
               $position = substr($file, 6, 1);
               $this->packs[$position][] = [
                   file_get_contents('data/' . $file)
               ];
           }
       }
    }

    public function test()
    {
        foreach ($this->packs as $pack) {
            if ($this->resolve($pack[0]) == $pack[1][0]) {
                $this->success++;
            } else {
        
                $this->errors[] = 'Expected : ' . $pack[1][0] . ' Actual : ' . $this->resolve($pack[0]); 
            }
        }
        echo PHP_EOL . '********************** ' . $this->success . ' success ' . '********************** ' . PHP_EOL;
        echo PHP_EOL . '********************** ' . count($this->errors) . ' errors ' . '*********************** ' . PHP_EOL;
        if (count($this->errors) > 0) {
            var_dump($this->errors);
        }
    }
}

