<?php include("const.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $T_OWNERNAME ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">  
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->
    
    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
</head>
<body id="pageBody">

<?php include("title_menu.php"); ?>					

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <a href="index.php">Головна</a> &nbsp;/&nbsp; <span>Інше</span>
        </div> 

		<div class="span12" id="divMain">
					<? 
					$lenta = 2;
					include("admin/connect.php");
					$result = mysql_query("SELECT * FROM news WHERE ks='$OWNERKS' and lenta='$lenta' ORDER BY main DESC, data DESC") or die('Ошибка БД');					
					$num_rows = mysql_num_rows($result);
					If ($num_rows>0) {									
						while ($row=mysql_fetch_object($result)) {
							echo '<div class="row-fluid">';	
							echo '<div class="sidebox">';							
							echo '<blockquote><h3 class="text-success">'.$row->descr.'</h3><small>'.$row->data.'</small></blockquote>';
							if (empty($row->foto)){} else { 
								echo '<img src=../images/'.$row->foto.' width=50 height=50 hspace=10 vspace=10 align=left>'; 
							};
							echo $row->text;
							echo '</div>';
							echo '</div>';
						};
					};
					?>
        </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>
<?php include("footer.php") ?>

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

</body>
</html>