# combination-generator
## Description
 classe en php permetant d'obtenir toutes les combinaisons d'éléments a partir d'un tableau d'élément
## Usage
```php

$elements = ["el1","el2","el3"];
$generator = new combinationsGenerator($elements);
$allCombinations = $generator->getAllCombination();
var_dump($allCombinations);

## Result
  [1]=>
    [0]=>

      [0]=>
      string(3) "el1" 
    [1]=> 
      [0]=>
      string(3) "el2"  
    [2]=> 
      [0]=>
      string(3) "el3" 

  [2]=> 
    [0]=> 

      [0]=>
      string(3) "el1"
      [1]=>
      string(3) "el2" 

    [1]=>
      [0]=>
      string(3) "el1"
      [1]=>
      string(3) "el3"

    [2]=>
      [0]=>
      string(3) "el2"
      [1]=>
      string(3) "el3" 

  [3]=>
    [0]=>

      [0]=>
      string(3) "el1"
      [1]=>
      string(3) "el2"
      [2]=>
      string(3) "el3"
    
  

```
