<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.css">
			<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/chat.css">
			
			<!-- script src="<?php echo Yii::app()->request->baseUrl; ?>/js/strophe_set/jquery.js"></script --> 
			<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/strophe_set/jquery-ui.js"></script>
			<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/strophe_set/strophe.js"></script>
			<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/strophe_set/deploy/flXHR.js"></script>	
			<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/strophe_set/strophe.flxhr.js"></script>
					
			<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/chat.js"></script>

    <!-- Page-Level Plugin CSS - Blank -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/sb-admin.css" rel="stylesheet">

</head>

<body>
            <?php echo $content; ?>
            
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Blank -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/sb-admin.js"></script>
</body>
</html>
