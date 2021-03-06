<?php
function show_folders() {
    $folder = "";
    if(isset($_GET['folder'])) {
        $folder = "../" . $_GET['folder'] . "/";
    }
    else {
        $folder = "../";
    }

    test($folder);
}

function test($folder_path) {
    if($dossier = opendir($folder_path)) {
        while(false !== $fichier = readdir($dossier)) {
            if($fichier != '.' && $fichier != "..") {
                if(is_dir($folder_path . '' . $fichier)) {
                    if(isset($_GET['folder'])) {
                        ?>
                        <div class="col-md-4">
                            <a href="index.php?folder=<?= $_GET['folder']  . '/' . $fichier ?>">
                                <img class="mini_folder" alt="">
                                <pstyle="font-size: 14px;"><?= $fichier ?></p>
                            </a>
                        </div>
                        <?php
                    }

                    else {
                        ?>
                        <div class="col-md-4">
                            <a href="index.php?folder=<?= $fichier ?>">
                                <img class="mini_folder" alt="">
                                <p style="font-size: 14px;"><?= $fichier ?></p>
                            </a>
                        </div>
                        <?php
                    }
                }
                else {
                    ?>
                        <div class="col-md-4">
                            <img class="mini_file" alt="">
                            <p style="font-size: 14px;"><?= $fichier ?></p>
                        </div>
                    <?php
                    //echo '<li>"' . $fichier . '"</li>';
                }
            }
        }
        closedir($dossier);
    }
}
 ?>
