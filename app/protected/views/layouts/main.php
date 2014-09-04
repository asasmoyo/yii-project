<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo Yii::app()->name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <style>
        /* Sticky footer styles
        -------------------------------------------------- */
        html,
        body {
            height: 100%;
            /* The html and body elements cannot have any padding or margin. */
        }

        /* Wrapper for page content to push down footer */
        #wrap {
            min-height: 100%;
            height: auto !important;
            height: 100%;
            /* Negative indent footer by it's height */
            margin: 0 auto -60px;
        }

        /* Set the fixed height of the footer here */
        #push,
        #footer {
            height: 60px;
        }

        #footer {
            background-color: #f5f5f5;
        }

        /* Lastly, apply responsive CSS fixes as necessary */
        @media (max-width: 767px) {
            #footer {
                margin-left: -20px;
                margin-right: -20px;
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        #wrap > .container {
            padding-top: 60px;
        }

        .container .credit {
            margin: 20px 0;
        }
    </style>
</head>

<body>

<?php
$this->widget('bootstrap.widgets.TbNavbar',
    array(
        'type' => 'inverse',
        'brand' => Yii::app()->name,
        'brandUrl' => Yii::app()->getHomeUrl(),
        'fixed' => 'top',
        'items' => array(
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'items' => $this->menu_bar,
            )
        )
    )
);
?>

<div id="wrap">
    <div class="container">
        <?php echo $content; ?>
    </div>
</div>

<div id="footer">
    <div class="container">
        <p class="muted credit">Copyright &copy; <a href="/">Company</a> <?php echo date('Y'); ?></p>
    </div>
</div>


</body>
</html>
