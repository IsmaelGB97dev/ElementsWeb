<?php 
    $pagename = strtolower(ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)));
    $pathOthers = ($pagename == 'index') ? '' : '../';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagename; ?></title>
    <link rel="shortcut icon" href="img/favicon.png">

    <link rel="stylesheet" href="<?php echo $pathOthers; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $pathOthers; ?>css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $pathOthers; ?>css/aos.css">
    <link rel="stylesheet" href="<?php echo $pathOthers; ?>css/styles.css">
    <link rel="stylesheet" href="<?php echo $pathOthers; ?>fontawesome/css/all.css">

    <?php if($pagename != 'index') { ?>
        <link rel="stylesheet" href="<?php echo $pathOthers; ?>css/<?php echo $pagename;?>.css">
    <?php }?>

    <script src="<?php echo $pathOthers; ?>js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $pathOthers; ?>js/aos.js"></script>
    <script src="<?php echo $pathOthers; ?>js/script.js"></script>
    <script src="<?php echo $pathOthers; ?>js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
if($pagename == 'index')
    include 'sections/inicio.php';
?>
    


    

