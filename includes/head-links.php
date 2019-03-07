<?php
/**
 * Created by PhpStorm.
 * User: iFaizanAhmedK
 * Date: 11-Dec-18
 * Time: 6:28 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo isset($title) ? $title : 'Deal Analytica'; ?></title>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!--CSS -->
    <link rel="icon" href="<?php echo base_url(); ?>favicon.jpeg" type="image/png/jpeg" sizes="16x16">

    <!--  Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/plugins/css/bootstrap.min.css">
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--resources/plugins/css/material-components-web.min.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/plugins/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/plugins/css/datatables.min.css"/>
    <!--  <link rel="stylesheet" type="text/css" href="-->
    <?php //echo base_url(); ?><!--resources/plugins/css/dataTables.bootstrap4.min.css"/>-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>resources/plugins/css/responsive.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/plugins/css/datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/plugins/css/sweetalert.css">

    <!--  Default CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/custom/css/main.css">

    <!--  <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--">-->
</head>