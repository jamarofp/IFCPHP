<?php
$source = 'sources/IFC4.exp';
//$source = 'sources/debug.exp';


require('translation_fr.php');

$handle = @fopen($source, "r");
$mode = ''; // ENUM: TYPE
$subMode = ''; //if $mode == TYPE: WHERE, ENUMERATION
$schema = ''; //which schema we are currently reading


$typeEnumeration = [];
$lineNum = 0;

$out = [
  'type' => [],
  'entity' => [],
];

$defStore = [
  'name' => '',
  'definition' => '' //definition of the object found in the express file
];


$mapType = [
    'REAL' => 'REAL',
    'BOOLEAN' => 'BOOLEAN',
    'IfcLabel' => 'STRING',
    'INTEGER' => 'INTEGER',
    'ARRAY [1:2] OF REAL' => 'array',
    'LIST [3:4] OF INTEGER' => 'array',
    'NUMBER' => 'NUMBER',
    'STRING' => 'STRING',
    'STRING(22) FIXED' => 'STRING',
    'STRING(255)' => 'STRING',
    'IfcIdentifier' => 'STRING',
    'LOGICAL' => 'LOGICAL', //TODO: search what LOGICAL is 
    'IfcLengthMeasure' =>  'REAL',
    'IfcRatioMeasure' => 'REAL',
    'IfcPlaneAngleMeasure' => 'REAL',
    'SET [1:?] OF IfcPropertySetDefinition' => 'array',
    'ENUMERATION OF' =>  'STRING',
    'SELECT' => 'SELECT',
];


if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
      $lineNum++;
      $buffer = trim($buffer);
      if(empty($buffer)) continue;

//echo $buffer."\n";


      if(isset($defStore['definition'])) $defStore['definition'] .= $buffer."\n";

      if(preg_match('/^SCHEMA (.*);/',$buffer,$matches)) {
        $schema = $matches[1];
      }
      elseif(preg_match('/^TYPE (.*) = ([^;]*);?/',$buffer,$matches)) {
        $mode = 'TYPE';
        
        $defStore = [];
        $defStore['name'] = $matches[1];
        $defStore['type'] = $mapType[$matches[2]];
        $defStore['definition'] = $buffer."\n";

        if(empty($defStore['type'])) echo "Error: parsing type $matches[2]\n"; 
        $typeEnumeration = [];
        $subMode = '';
        if($defStore['type'] == 'array') $subMode = 'ENUMERATION';
        if($matches[2] == 'ENUMERATION OF') $subMode = 'ENUMERATION';
      }
      elseif(preg_match('/^ENTITY ([^;]*);?$/',$buffer,$matches)) {
        $mode = 'ENTITY';
        $defStore = [];
        $defStore['name'] = $matches[1];
        $defStore['definition'] = $buffer."\n";
      }
      elseif(preg_match('/WHERE/',$buffer,$matches)) {
        $subMode = 'WHERE';
        $defStore['where'] = 'WHERE'."\n"; 
      }
      elseif(preg_match('/INVERSE/',$buffer,$matches)) {
        $subMode = 'INVERSE';
      }
      elseif(preg_match('/DERIVE/',$buffer,$matches)) {
        $subMode = 'DERIVE';
      }
      elseif(preg_match('/^[ \t]*UNIQUE/',$buffer,$matches)) {
        $subMode = 'UNIQUE';
      }
      elseif(preg_match('/^END_TYPE;$/',$buffer)) {
        //We write the type
        if(!empty($defStore['typeEnumeration'])) $defStore['type'] = 'STRING';
        array_push($out['type'],$defStore);
        $mode = '';
        $subMode = '';
      }
      elseif(preg_match('/^END_ENTITY;$/',$buffer)) {
        array_push($out['entity'],$defStore);
        $mode = '';
        $subMode = '';
      } elseif(preg_match('/^SUBTYPE OF \((.*)\);/',$buffer,$matches)) {
        $defStore['subType'] = $matches[1]; 
        $subMode = '';
      } elseif(preg_match('/SUPERTYPE OF/',$buffer,$matches)) {
        $subMode = 'SUPERTYPE';
      } else {
        //not specifically identified line, need to handle based on current $mode / $subMode
        if($mode == 'TYPE') {
          if($subMode == 'ENUMERATION') {
            if(preg_match('/[,\(]([A-Za-z_]+)\)?\;?/',$buffer,$matches)) {
              if(empty($defStore['typeEnumeration'])) $defStore['typeEnumeration'] = [];
              array_push($defStore['typeEnumeration'],$matches[1]);
            } else {
              echo 'ISSUE parsing subMode TYPE / ENUMERATION: '.$buffer."\n";
            }
          } //end subMode == 'ENUMERATION'
          else if($subMode == 'WHERE') {
            if(preg_match('/WR1 : SELF IN \[(.*)\]/',$buffer,$matches)) {
              preg_match_all('/\'([^\']*)\'/', $matches[1],$list);
              $defStore['type'] = 'array';
              $defStore['typeEnumeration'] = $list[1];
              unset($defStore['where']);
            } else $defStore['where'] .= $buffer."\n";
          } //end submode  == WHERE
        } //end $mode == 'TYPE'
        if($mode == 'ENTITY') {
          if($subMode == 'SUPERTYPE') {
            if(preg_match('/[,\(]([A-Za-z0-9]+)\)?\)?;?$/',$buffer,$matches)) {
              if(empty($defStore['superType'])) $defStore['superType'] = [];
              array_push($defStore['superType'],$matches[1]);
              if(preg_match('/\)\);?$/',$buffer)) $subMode = '';
            } else {
              echo 'ISSUE parsing subMode ENTITY / SUPERTYPE: '.$buffer."\n";
            }
          } //end subMode == SUPERTYPE
          else if($subMode == 'WHERE') {
            $defStore['where'] .= $buffer."\n";
          } //end submode  == WHERE
          else if($subMode == 'INVERSE') {
            //TO DO
          } //end submode  == INVERSE
          else if($subMode == 'DERIVE') {
            //TO DO
          } //end submode  == DERIVE
          else if($subMode == 'UNIQUE') {
            //TO DO
          } //end submode  == DERIVE
          else {
            //probablement la définition des paramètres
            if(preg_match('/(.*) : (OPTIONAL) (.*);$/',$buffer,$matches) || preg_match('/(.*) : (.*);$/',$buffer,$matches)) {
              if(!isset($defStore['params'])) $defStore['params'] = [];

              if(count($matches) == 4) {
                $name = $matches[1];
                $type = $matches[3];
                $optional = true;
              } else {
                $name = $matches[1];
                $type = $matches[2];
                $optional = false;
              }

              $paramDef = [
                'name' => $name,
                'type' => $type,
                'optional' => $optional
              ];
              if(preg_match('/LIST \[(.)*:(.)*\] OF (.*)$/',$type,$matchType)) {
                $paramDef['type'] = 'array';
                if(preg_match('/\d/',$matchType[1])) $paramDef['min'] = $matchType[1];
                if(preg_match('/\d/',$matchType[2])) $paramDef['max'] = $matchType[2];
                if(preg_match('/UNIQUE (.*)/',$matchType[3],$matchesUnique)) {
                  $paramDef['arrayContent'] = $matchesUnique[1];
                } else $paramDef['arrayContent'] = $matchType[3];
              }
              if(preg_match('/SET \[(.)*:(.)*\] OF (.*)$/',$type,$matchType)) {
                $paramDef['type'] = 'array';
                if(preg_match('/\d/',$matchType[1])) $paramDef['min'] = $matchType[1];
                if(preg_match('/\d/',$matchType[2])) $paramDef['max'] = $matchType[2];
                if(preg_match('/UNIQUE (.*)/',$matchType[3],$matchesUnique)) {
                  $paramDef['arrayContent'] = $matchesUnique[1];
                } else $paramDef['arrayContent'] = $matchType[3];
              }
              if(preg_match('/ARRAY \[(.)*:(.)*\] OF (.*)$/',$type,$matchType)) {
                $paramDef['type'] = 'array';
                if(preg_match('/\d/',$matchType[1])) $paramDef['min'] = $matchType[1];
                if(preg_match('/\d/',$matchType[2])) $paramDef['max'] = $matchType[2];
                if(preg_match('/UNIQUE (.*)/',$matchType[3],$matchesUnique)) {
                  $paramDef['arrayContent'] = $matchesUnique[1];
                } else $paramDef['arrayContent'] = $matchType[3];
              }


              array_push($defStore['params'],$paramDef);
            } //end matching params 
            else echo 'ISSUE parsing subMode ENTITY: '.$buffer."\n";            
          } //end else no match on submode
        } //end mode == ENTITY
      } //end else no match on line
//echo $mode.' - '.$subMode."\n";

    } //end while
    if (!feof($handle)) {
        echo "Error: fgets() failed\n";
    }
    fclose($handle);
} else throw new Exception('cannot open '.$source);



/*
We collect the type or entity */

$typeOrEntity = [];
foreach($out['type'] as $type) {
  $typeOrEntity[$type['name']] = 'Type';
}
foreach($out['entity'] as $entity) {
  $typeOrEntity[$entity['name']] = 'Entity';
}





function getParams($entity,$fullDefinition,$params = []) {
//  echo $entity['name'].' - ';
//  print_r($entity['params']);
  if(isset($entity['params'])) {
    $reverse = array_reverse($entity['params'], true); // true to preserve keys
    foreach($reverse as $param) {
      array_unshift($params ,$param);
    }
  }

  if(isset($entity['subType'])) {
    $subType = $entity['subType'];
    $found = array_filter($fullDefinition['entity'],function($x) use ($subType) {
      return ($x['name'] == $subType);
    });
    if(empty($found)) {
      echo 'parent not found '.$subType;
      return $params;
    }
    return getParams(current($found),$fullDefinition,$params);
  } else return $params;
}


@mkdir('out/IFCPHP');
@mkdir('out/IFCPHP/'.$schema);
@mkdir('out/IFCPHP/'.$schema.'/Base');
@mkdir('out/IFCPHP/'.$schema.'/Type');
@mkdir('out/IFCPHP/'.$schema.'/Entity');



$mapClassUppercase = [];


//////////////////////////
////////  TYPE
///////////////////////////

foreach($out['type'] as $num => $entity) {

  $mapClassUppercase[strtoupper($entity['name'])] = 'Type\\'.$entity['name'];
  $class = '<?php'."\n";
  $class .= ''."\n";
  $class .= 'namespace IFCPHP\\'.$schema.'\\Type;'."\n";
  $class .= 'use IFCPHP\\'.$schema.' as IFC;'."\n";
  $class .= ''."\n";
  $class .= 'class '.$entity['name'].' ';
  $class .= 'extends IFC\Common';
  $class .= '{'."\n\n";

  if(isset($translationFr[strtolower($entity['name'])])) {
    $trad = preg_replace('/\'/','\\\'',$translationFr[strtolower($entity['name'])]);
    $class .= "\tstatic public \$translationFR = '$trad';\n\n";
  }

  $class .= "\t".'static public $params = [['."\n";

  if(in_array($entity['type'],['BOOLEAN','INTEGER','LOGICAL','REAL','BINARY','NUMBER','BINARY(32)','SELECT','STRING'])) {
    $value = $entity['type'];
    if($value == 'BINARY(32)') $value = 'BINARY';
    if($value == 'STRING') $value = 'VALUE';

    $value = ucfirst(strtolower($value));
    $class .= "\t\t'class' => 'Base\\$value',";
    $class .= "\n\t\t'type' => 'object',"; 
  } else {
    echo 'Issue parsing param type: '.json_encode($entity)."\n";
  }
  if(!empty($entity['typeEnumeration'])) {
    $class .= "\n\t\t'enum' => [";
    foreach($entity['typeEnumeration'] as $value) {
      $class .= "\n\t\t\t'$value',";
    }
    $class .=  "\n\t\t],";
  }

  $class .= "\n\t]];\n";

  $class .= '}'."\n";

  $class .= '/* DEFINITION'."\n";
  $class .= $entity['definition'];
  $class .= "*/\n";

  file_put_contents('out/IFCPHP/'.$schema.'/Type/'.$entity['name'].'.php', $class);
}


//////////////////////////
////////  ENTITY
///////////////////////////

foreach($out['entity'] as $num => $entity) {
//  echo '--------------------------------------------'."\n";
//  echo $entity['name']."\n";
//  print_r();

  $mapClassUppercase[strtoupper($entity['name'])] = 'Entity\\'.$entity['name'];
  $class = '<?php'."\n";
  $class .= ''."\n";
  $class .= 'namespace IFCPHP\\'.$schema.'\\Entity;'."\n";
  $class .= 'use IFCPHP\\'.$schema.' as IFC;'."\n";
  $class .= ''."\n";
  $class .= 'class '.$entity['name'].' ';
  if(isset($entity['subType'])) $class .= 'extends '.$entity['subType'];
  else {
    $class .= 'extends IFC\Common';
  }
  
  $class .= '{'."\n\n";

  if(isset($translationFr[strtolower($entity['name'])])) {
    $trad = preg_replace('/\'/','\\\'',$translationFr[strtolower($entity['name'])]);
    $class .= "\tstatic public \$translationFR = '$trad';\n\n";
  }

  $class .= "\t".'static public $params = ['."\n";

  $params = getParams($entity,$out);


  foreach($params as $param) {
    $class .= "\t\t".'[';
    foreach($param as $key => $value) {
      if($key == 'optional') {
        $value = ($value)?'true':'false';
        $class .= "\n\t\t\t'$key' => $value,"; 
      } elseif($key == 'type') {
        if(in_array($value,['BOOLEAN','INTEGER','LOGICAL','REAL','BINARY','NUMBER','BINARY(32)','SELECT'])) {
          if($value == 'BINARY(32)') $value = 'BINARY';
          //reserved keyword
          if($value == 'STRING') $value = 'VALUE';

          $value = ucfirst(strtolower($value));
          $class .= "\n\t\t\t'class' => 'Base\\$value',";
          $class .= "\n\t\t\t'type' => 'object',"; 
        } elseif($value == 'array' && isset($param['arrayContent'])) {
          $value = $param['arrayContent'];
          if(isset($typeOrEntity[$value])) $class .= "\n\t\t\t'class' => '$typeOrEntity[$value]\\$value',";
          elseif(in_array($value,['BOOLEAN','INTEGER','LOGICAL','REAL','BINARY','NUMBER','BINARY(32)'])) {
            if($value == 'BINARY(32)') $value = 'BINARY';
            //reserved keyword
            if($value == 'STRING') $value = 'VALUE';

            $value = ucfirst(strtolower($value));
            $class .= "\n\t\t\t'class' => 'Base\\$value',";
          } else {
            echo 'Issue parsing param type: '.json_encode($param)."\n";
          }
          $class .= "\n\t\t\t'type' => 'array',"; 
        } elseif(isset($typeOrEntity[$value])) {
          $class .= "\n\t\t\t'class' => '$typeOrEntity[$value]\\$value',";
          $class .= "\n\t\t\t'type' => 'object',"; 
        } else {
          echo 'Issue parsing param '.json_encode($param)."\n";
        }
      } else {
        if($key != 'arrayContent') {
          if(preg_match('/^[0-9]+$/',$value)) $class .= "\n\t\t\t'$key' => $value,"; 
          else $class .= "\n\t\t\t'$key' => '$value',"; 
        }
      }
    }
    $class .= "\n\t\t],\n";
  }
  $class .= "\t".'];'."\n";

  $class .= '}'."\n";

  if(isset($entity['superType'])) {
    $class .= '/* SUPERTYPE';
    foreach($entity['superType'] as $superType) $class .= "\n\t".$superType;
    $class .= "\n*/\n\n\n";
  }
  $class .= '/* DEFINITION'."\n";
  $class .= $entity['definition'];
  $class .= "*/\n";

  file_put_contents('out/IFCPHP/'.$schema.'/Entity/'.$entity['name'].'.php', $class);
}


//////////////////////////
////////  MAP
///////////////////////////

//We store the map 
  $class = '<?php'."\n";
  $class .= ''."\n";
  $class .= 'namespace IFCPHP\\'.$schema.';'."\n";
  $class .= ''."\n";
  $class .= 'class MapNameUppercaseClass ';
  $class .= '{'."\n\n";
  $class .= "\t".'static public $params = ['."\n";
  foreach($mapClassUppercase as $upperCase => $className) {
    $class .= "\t\t'$upperCase' => '$className',\n";
  }

  $class .= "\t".'];'."\n";
  $class .= '}';

  file_put_contents('out/IFCPHP/'.$schema.'/MapNameUppercaseClass.php', $class);

//////////////////////////
////////  COMMON Object
///////////////////////////

//We store the common object
/*  
  $class = '<?php'."\n";
  $class .= ''."\n";
  $class .= 'namespace IFCPHP\\'.$schema.';'."\n";
  $class .= ''."\n";
  $class .= 'class IFC';
  $class .= '{'."\n\n";

  $class .= '}';

  file_put_contents('out/IFCPHP/'.$schema.'/IFC.php', $class);
*/


//////////////////////////
////////  BASE Object
///////////////////////////
foreach(['BOOLEAN','INTEGER','LOGICAL','REAL','BINARY','NUMBER','SELECT','STRING'] as $baseName) {
  //reserved keyword
  if($baseName == 'STRING') $baseName = 'VALUE';

  $name = ucfirst(strtolower($baseName));
  $class = '<?php'."\n";
  $class .= ''."\n";
  $class .= 'namespace IFCPHP\\'.$schema.'\\Base;'."\n";
  $class .= 'use IFCPHP\\'.$schema.' as IFC;'."\n";
  $class .= ''."\n";
  $class .= 'class '.$name.' ';
  $class .= 'extends IFC\Common';
  $class .= '{'."\n\n";
  $class .= "\tpublic function __construct(\$value) {\n";
  $class .= "\t\t\$this->values[0] = \$value;\n";
  $class .= "\t}\n";
  $class .= '}'."\n";

  file_put_contents('out/IFCPHP/'.$schema.'/Base/'.$name.'.php', $class);
}



//print_r($);

