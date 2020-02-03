<?php
	
/*

This file contains the functions of the page - please refer the following guide on where/how to edit the HTML/text:

https://www.zomex.com/docs/whmcs-templates/where-to-find-the-files-images-css.php

*/	

use WHMCS\ClientArea;
use WHMCS\Database\Capsule;

include "configuration_template.php";

define('CLIENTAREA', true);

require __DIR__ . '/init.php';

$z0mlang = getz0mlang();

$ca = new ClientArea();

$ca->setPageTitle($whmcs->get_lang('whychooseustitle'));

$ca->addToBreadCrumb('index.php', Lang::trans('globalsystemname'));
$ca->addToBreadCrumb($whychooseus_page, $whmcs->get_lang('whychooseustitle'));

$ca->initPage();

//$ca->requireLogin(); // Uncomment this line to require a login to access this page

// To assign variables to the template system use the following syntax.
// These can then be referenced using {$variablename} in the template.

//$ca->assign('variablename', $value);

// Check login status
if ($ca->isLoggedIn()) {

    /**
     * User is logged in - put any code you like here
     *
     * Here's an example to get the currently logged in clients first name
     */

    $clientName = Capsule::table('tblclients')
        ->where('id', '=', $ca->getUserID())->pluck('firstname');
        // 'pluck' was renamed within WHMCS 7.0.  Replace it with 'value' instead.
        // ->where('id', '=', $ca->getUserID())->value('firstname');
    $ca->assign('clientname', $clientName);

} else {

    // User is not logged in
    $ca->assign('clientname', 'Random User');

}

/**
 * Set a context for sidebars
 *
 * @link http://docs.whmcs.com/Editing_Client_Area_Menus#Context
 */
//Menu::addContext();

/**
 * Setup the primary and secondary sidebars
 *
 * @link http://docs.whmcs.com/Editing_Client_Area_Menus#Context
 */
//Menu::primarySidebar('announcementList');
//Menu::secondarySidebar('announcementList');

# Define the template filename to be used without the .tpl extension

$ca->setTemplate($whychooseus_tpl);

$ca->output();