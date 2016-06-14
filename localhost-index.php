<?php
/**
 * @category  General
 * @package   Default
 * @author    Tamnil Saito Junior <tamnil@gmail.com>
 * @copyright 2015 Tamnil Saito Junior - www.tamnil.com 2015
 * @license   Direitos reservados
 * @version   GIT: 0.1
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>katna</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    </head>
    <body><?php
    $dir = './';
    $arrdir = (scandir($dir));

    foreach ($arrdir as $v) {
        echo '<div><a href="http://' . $_SERVER['SERVER_ADDR'] . '/' . $v . '" >' . $v . '</a>';
        
        if (is_dir($v) == true) {
            echo 'dir';
        }
        else {
            echo 'file';
        }
        echo '</div>';
    };
    ?>extra-links links: 
    <div>
        <a href="./phpmyadmin/">
            <span>phpmyadmin</span>
        </a>
    </div>
    <div>
        <?php
        phpinfo();
        ?>
    </div></body>
</html>
