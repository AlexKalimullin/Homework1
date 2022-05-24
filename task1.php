<?php
$array = ['SKLAD1' => 
             ['EDA' => 
                ['TOVAR1' =>  
                    ['NAME' => 'a1','PRICE' => 125],
                   'TOVAR2' => 
                    ['NAME' => 'a2','PRICE' => 45],
                   'TOVAR3' => 
                    ['NAME' => 'a3','PRICE' => 156],
                ],
              'NAPITKI' => 
                  ['TOVAR55' => 
                    ['NAME' => 'a55','PRICE' => 341],
                 'TOVAR54' => 
                    ['NAME' => 'a54', 'PRICE' => 274],
                 'TOVAR53' => 
                    ['NAME' => 'a53', 'PRICE' => 158],
                ],
               'NAPITKIALK' => 
                  ['TOVAR21' => 
                    ['NAME' => 'a21', 'PRICE' => 144],
                   'TOVAR20' => 
                    ['NAME' => 'a20', 'PRICE' => 290],
                   'TOVAR19' => 
                    ['NAME' => 'a19', 'PRICE' => 201],
                  ],
               ],
           'SKLAD2' => 
               ['EDA' => 
                  ['TOVAR66' => 
                    ['NAME' => 'a66', 'PRICE' => 175],
                   'TOVAR67' => 
                  ['NAME' => 'a67', 'PRICE' => 340],
               ],
                'NAPITKI' => 
                  ['TOVAR77' => 
                    [ 'NAME' => 'a77', 'PRICE' => 401],
                   'TOVAR78' => 
                    ['NAME' => 'a78', 'PRICE' => 276],
                  ],
               ],
           ];
           
$newArray = [];

foreach ($array as $skladName => $sklad) {
   foreach ($sklad as $typeName => $type) {
      uasort($type, function($a, $b) { return $a['PRICE'] <=> $b['PRICE']; 
      });
    $newArray[$skladName][$typeName] = $type;
   }
}

echo '<pre>';
var_dump($newArray);           

?>