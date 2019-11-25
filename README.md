# Battle Dev Environment

Mettre les fichiers (input et output) dans le dossier data (supprimer ceux déjà présents)

Résoudre l'exercice dans la méthode resolve.

Le repo actuel montre l'exemple suivant :


```

//Méthode resolve
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
 
 //depuis la plateforme (N'OUBLIEZ PAS DE REMPLACER return PAR echo !:
 <?php
 do{
     $f = stream_get_line(STDIN, 10000, PHP_EOL);
     if($f!==false){
         $input[] = $f;
     }
 }while($f!==false);
 $c = 0;
     foreach(explode(" ", $input[1]) as $age){
         if ($age >= 5 && $age <= 9) {
             $c++;
         }
     }
 echo $c;
 


