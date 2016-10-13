<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<head>
	<!-- предупреждение о том, что браузер устарел -->
	<!--[if lte IE 10]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->

	<!-- заголовок -->
	<jdoc:include type="head" />

	<!-- Подключение jQuery (Google) -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<!-- подключение фавикона -->
	<link rel="icon" href="/templates/facom/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/templates/facom/favicon.ico" type="image/x-icon">

	<!-- Подключение Bootstrap -->
	<link type="text/css" rel="stylesheet" href="/libraries/bootstrap-3.3.2/css/bootstrap.css" />
	<script type="text/javascript" src="/libraries/bootstrap-3.3.2/js/bootstrap.js"></script>

	<!-- Подключение собственного CSS -->
	<link type="text/css" rel="stylesheet" href="/templates/facom/css/custom.css" />
</head>
<body>
<header>
    <div class="logo">
        <img src="/templates/facom/images/logo.png">
    </div>
    <div class="right_header">
        <div class="change_lang"></div>
        <div class="contacts"></div>
    </div>
    <nav></nav>
</header>
<main>

</main>
<footer><!-- на данный момент футера у сайта нет --></footer>
</body>
</html>