<?php
if(file_exists('./install.php')){
    header('Location:'.'error.html');
}
if(file_exists('../install.php')){
    header('Location:'.'../error.html');
}