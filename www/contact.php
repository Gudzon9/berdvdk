<?php include("const.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Контакти-<?php echo $T_OWNERNAME ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
	<script src="email/validation.js" type="text/javascript"></script>	
</head>
<body id="pageBody">

<?php include("title_menu.php"); ?>		

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
			<a href="index.php">Головна</a> &nbsp;/&nbsp; <span>Контакти</span>
        </div> 

        <div class="row-fluid">				
				
			<!--Edit Sidebar Content here-->	
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Контакти</h3>
                    <p>
                        <address><strong><?php echo $T_OWNERNAME ?></strong><br />
						13312 м.Бердичів<br />
                        вул. Житомирська, 87<br />                        
                        <!-- <abbr title="Phone">Тел:</abbr> <?php echo $K_TELEFON ?></address> -->
                        <address>  <strong>Email</strong><br />
                        <a href="#<?php echo $A_EMAIL ?>"><?php echo $A_EMAIL ?></a></address>  
                    </p>     
                     
					 <!-- Start Side Categories -->
					<h4 class="sidebox-title">Телефони</h4>
					<ul>
					<li><a href="#"><?php echo $K_TELEFON ?> - Директор/секретар</a></li>		
					<li><a href="#">(04143)&nbsp;4-42-12 - Головний інженер</a></li>
					<li><a href="#">(04143)&nbsp;4-41-11 - Бухгалтерія</a></li>					
					<li><a href="#">(04143)&nbsp;4-41-11 - Юристконсульт</a></li>					
					<li><a href="#">(04143)&nbsp;4-41-11 - Економіст</a></li>										
					<li><a href="#">(04143)&nbsp;4-42-98 - Інженер-енергетик</a></li>															
					<li><a href="#"><?php echo $K_TELDISP ?> - Диспетчер</a></li>							
					<li><a href="#">(04143)&nbsp;4-76-85 - Абонентний відділ</a></li>
					<li><a href="#">(04143)&nbsp;4-42-97</a></li>
					<li><a href="#">(04143)&nbsp;4-30-30</a></li>										
					<li><a href="#">(04143)&nbsp;4-76-94 - Виробнично-технічний</a></li>					
					<li><a href="#">(04143)&nbsp;4-42-97&nbsp;&nbsp;&nbsp;відділ</a></li>															
					</ul>				
					<!-- End Side Categories -->
                    					
                    </div>
					
					
                    
                </div>
			<!--/End Sidebar Content-->

                <div class="span8" id="divMain">	
					<div class="sidebox">
					<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d20558.805420239343!2d28.572491197619417!3d49.901606664597224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x472cfbcbc085a983%3A0x4dd51ce7efa13f22!2z0YHRgtCw0L3RhtC40Y8g0JHQtdGA0LTQuNGH0LXQsiwg0JHQtdGA0LTQuNGH0ZbQsiwg0JbQuNGC0L7QvNC40YDRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgMTMzMDA!3m2!1d49.8892363!2d28.6139327!4m5!1s0x472cf99ac7e8a477%3A0x5ed48d4e2c5b46b7!2z0LLRg9C70LjRhtGPINCW0LjRgtC-0LzQuNGA0YHRjNC60LAsIDg3LCDQkdC10YDQtNC40YfRltCyLCDQltC40YLQvtC80LjRgNGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!3m2!1d49.9100587!2d28.5879147!5e0!3m2!1sru!2sua!4v1499577254070" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					<!--
					<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=3sJrhdB03pWbrI5CwUJ_3q2GlmRwCy3x&width=600&height=450"></script>					
					-->
					</div>
                </div>				
			
				
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