<?php

namespace App\Functions;

use Exception;

class Helpers
{
  public static function read_csv(String $file_path)
  {
    $data = [];

    try {
      $resource = fopen($file_path, 'r');

      if ($resource === false) {
        exit('Unable to open file :(');
      }
    } catch (Exception $error) {
      echo $error->getMessage() . "\n";
      exit('Unable to open file :(');
    }

    while (($row = fgetcsv($resource)) !== false) {
      $data[] = $row;
    }

    fclose($resource);
    return $data;
  }
}
