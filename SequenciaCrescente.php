<?php  
  function SequenciaCrescente($array){
            
      $boolean = "false";
      $resultado = "indefinido";
      
      foreach($array as $key => $value){
           $aux = $array[count($array)-1];
           array_pop($array);
           for($i = 0;$i < count($array)-1 ;$i++){
              if($array[$i] <  $array[$i+1]){
                $resultado = "Ok";
              }else{
                $resultado = "Nada Ok";
                break;
              }                          
           }
           if($resultado == "Ok"){
             $boolean = "true";
             break;
           }else{
           array_push($array, $aux);
           }
      }     
     return  $boolean;
  }  
echo SequenciaCrescente([1, 3, 2, 1]);  //false
echo SequenciaCrescente([1, 3, 2]);  //true
echo SequenciaCrescente([1, 2, 1, 2]); // false
echo SequenciaCrescente([3, 6, 5, 8, 10, 20, 15]); //false
echo SequenciaCrescente ([1, 1, 2, 3, 4, 4]); //false
echo SequenciaCrescente([1, 4, 10, 4, 2]);// false
echo SequenciaCrescente([10, 1, 2, 3, 4, 5]);// true
echo SequenciaCrescente([1, 1, 1, 2, 3]); //false
echo SequenciaCrescente([0, -2, 5, 6]); // true
echo SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]); // false
echo SequenciaCrescente([40, 50, 60, 10, 20, 30]); //false
echo SequenciaCrescente([1, 1]); // true
echo SequenciaCrescente([1, 2, 5, 3, 5]); // true
echo SequenciaCrescente([1, 2, 5, 5, 5]); // false
echo SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]); // false
echo SequenciaCrescente([1, 2, 3, 4, 3, 6]); // true
echo SequenciaCrescente([1, 2, 3, 4, 99, 5, 6]); //true
echo SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]); //true
echo SequenciaCrescente([3, 5, 67, 98, 3]); // true

?>