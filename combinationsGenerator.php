<?php
Class combinationsGenerator
{
    private $elements;
    private $result = [];
    public function __construct($elements)
    {
        $this->elements = $elements;
    }
    
    /**
     * setCombinationsList
     *
     * @param  string $start=''
     * @param  array $tags
     * @param  int $depth
     * @return void
     */
    private function setCombinationsList( array $tags, int $depth, string $start = "") : void
    {
       if($depth == 0) {
         $s = explode("%SPACE%",$start);
         array_pop($s);
           $this->result[count($s)][] = ($s);
          return;
        }
        $n = count($tags);
        for($i=0; $i < $n; $i++) {
          $this->setCombinationsList(start : $start . $tags[$i] . "%SPACE%", tags : array_slice($tags, $i + 1),depth :  $depth - 1);
        }
      }
            
      /**
       * getAllCombination
       *
       * @return array[]
       */
      public function getAllCombination() : array {
          for($i = 1; $i <= count($this->elements); $i++) 
          { 
            $this->setCombinationsList(tags: $this->elements, depth: $i);
          }
          return $this->result;
      }

}
