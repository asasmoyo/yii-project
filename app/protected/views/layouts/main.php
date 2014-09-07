<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo Yii::app()->name; ?></title>

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->getBaseUrl(true) . '/css/navbar-static-top.css'; ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php
$this->widget('booster.widgets.TbNavbar', array(
    'brand' => Yii::app()->name,
    'fixed' => 'top',
    'fluid' => false,
    'items' => array(),
));
?>

<div class="container">
    <?php echo $content; ?>
</div>

<div class="footer">
    <div class="container">
        <p class="text-muted">
            Copyright &copy; <a href="<?php echo Yii::app()->getBaseUrl(true); ?>">Company</a> <?php echo date('Y'); ?>
        </p>
    </div>
</div>

</body>
</html>
