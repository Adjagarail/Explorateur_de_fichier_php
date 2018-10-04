<?php
//Creation de $fichier
function create_file()
{
  $file = 'example.txt';
  $newfile = 'example.txt.bak';

  if (!copy($file, $newfile)) {
      echo "failed to copy $file...\n";
  }

} 
 ?>
