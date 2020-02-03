<?php
	
/*
-----------------------------------------
---------   All about this file   -------
-----------------------------------------

This file contains all of the English text that isn't edited via Wizard Panel. It is also used to edit more text if the multi-language is set to on within Wizard Panel. This will make the template pull your plan data from this file rather than Wizard Panel. In this case some settings such as your URL and price of each plan will remain editable in Wizard Panel.

You do not need any prior coding experience to edit this file, after a bit of practise it will be easy to edit. If you run into any problems you can contact Zomex support at anytime.

BEFORE YOU EDIT THIS FILE please read our guide below for full details:

https://www.zomex.com/docs/whmcs-templates/how-to-edit-text-in-the-template.php	

In short, ensure you make backups of this file after every successful edit. As this file uses a PHP structure ensure that the markup remains valid (no missing " ' ;) to avoid error.

You can search this file for the page name to easily find the language text associated with it. E.g for the Company page search this file for "company.php".

We also recommend reading about the structure of all WHMCS templates:

https://www.zomex.com/docs/whmcs-templates/where-to-find-the-files-images-css.php

In this file we have added the file names where each section of text is used. The .php file will be located in the root of your WHMCS install and the .tpl file will be within your template directory (/whmcs_path/templates/your_template/). If for example you edit the text of a link, the URL will be found within the .tpl file listed for that section of text.

-----------------------------------------	
*/

/*
-----------------------------------------
---------   Page titles   ---------
-----------------------------------------
*/

$_LANG['hometitle'] = "Home";
$_LANG['registerdomaintitle'] = "Register Domain";
$_LANG['transferdomaintitle'] = "Transfer Domain";
$_LANG['custom1title'] = "Shared Hosting";         # Shared Hosting by default
$_LANG['custom2title'] = "Reseller Hosting";         # Reseller Hosting by default
$_LANG['custom3title'] = "VPS Hosting";         # VPS Hosting by default
$_LANG['custom4title'] = "Dedicated Servers";         # Dedicated Servers by default
$_LANG['custom5title'] = "Cloud Hosting";         # Cloud Hosting by default
$_LANG['custom6title'] = "Game Servers";         # Game Servers by default
$_LANG['custom7title'] = "Virtual Private Network";         # Virtual Private Network by default
$_LANG['custom8title'] = "SSL Certificates";         # SSL Certificates by default
$_LANG['custom9title'] = "Hosting Addons";         # Hosting Addons by default
$_LANG['custom10title'] = "Email Hosting";         # Email Hosting by default
$_LANG['companytitle'] = "Company";
$_LANG['whychooseustitle'] = "Why Choose Us";
$_LANG['testimonialstitle'] = "Testimonials";
$_LANG['affiliateprogramtitle'] = "Affiliate Program";
$_LANG['privacypolicytitle'] = "Privacy Policy";
$_LANG['acceptableusagetitle'] = "Acceptable Usage Policy";
$_LANG['termsofservicetitle'] = "Terms Of Service";
$_LANG['portalpagetitle'] = "Portal";
$_LANG['addonstitle'] = "Addons";
$_LANG['whmcstemplatestitle'] = "WHMCS Templates";
$_LANG['htmltemplatestitle'] = "HTML Templates";
$_LANG['wordpressthemestitle'] = "Wordpress Themes";
$_LANG['blestatemplatestitle'] = "Blesta Templates";
$_LANG['clientexectemplatestitle'] = "Clientexec Templates";
$_LANG['codescriptstitle'] = "Scripts";
$_LANG['logodesigntitle'] = "Logo Design";
$_LANG['bannerdesigntitle'] = "Banner Design";
$_LANG['whmcsmodulestitle'] = "WHMCS Modules";
$_LANG['whmcsservicestitle'] = "WHMCS Services";
$_LANG['wordpressservicestitle'] = "Wordpress Services";
$_LANG['blestaservicestitle'] = "Blesta Services";
$_LANG['clientexecservicestitle'] = "Clientexec Services";

/*
-----------------------------------------
---------   Toolbar (File: includes/toolbar.tpl)   ---------
-----------------------------------------
*/

$_LANG['toolbar_text'] = "We provide <strong>premium cPanel hosting!</strong>"; # Displayed if multi language support is turned off
$_LANG['toolbar_text_cart'] = "Thank you for shopping with <strong>Your Company</strong>"; # Displayed if multi language support is turned off

$_LANG['toolbar_menu_contact'] = "Contact";
$_LANG['toolbar_menu_clientarea'] = "Client Area";
$_LANG['toolbar_menu_cart'] = "View Cart";

$_LANG['toolbar_menu_welcome'] = "Welcome back";
$_LANG['toolbar_menu_portal'] = "My Portal";
$_LANG['toolbar_menu_account'] = "My Account";
$_LANG['toolbar_menu_details'] = "Edit Details";
$_LANG['toolbar_menu_password'] = "Change Password";
$_LANG['toolbar_menu_funds'] = "My Funds";
$_LANG['toolbar_menu_invoices'] = "My Invoices";
$_LANG['toolbar_menu_products'] = "My Products";
$_LANG['toolbar_menu_services'] = "My Services";
$_LANG['toolbar_menu_domains'] = "My Domains";
$_LANG['toolbar_menu_commissions'] = "My Commissions";
$_LANG['toolbar_menu_quotes'] = "My Quotes";
$_LANG['toolbar_menu_emails'] = "My Emails";
$_LANG['toolbar_menu_tickets'] = "My Tickets";
$_LANG['toolbar_menu_contacts'] = "My Contacts";

$_LANG['toolbar_menu_logout'] = "Logout";

/*
-----------------------------------------
---------   Main menu (File: includes/menu.tpl)   ---------
-----------------------------------------
*/

$_LANG['menu_home'] = "Home";

$_LANG['menu_domains'] = "Domains";
$_LANG['menu_registerdomain'] = "Register Domain";
$_LANG['menu_registerdomain_desc'] = "Your very own website address";
$_LANG['menu_transferdomain'] = "Transfer Domain";
$_LANG['menu_transferdomain_desc'] = "Move your domain to us";

// -- Editing the following service page names will update the link names in the main menu and footer so you don't have to define them twice. This is especially useful if you re-name a page now or in the future)

$_LANG['menu_webhosting'] = "Web Hosting";
$_LANG['menu_custom1'] = "Shared Hosting";         # Shared Hosting by default
$_LANG['menu_custom1_desc'] = "Premium cPanel hosting";
$_LANG['menu_custom2'] = "Reseller Hosting";         # Reseller Hosting by default
$_LANG['menu_custom2_desc'] = "Start your own hosting business";
$_LANG['menu_custom3'] = "VPS Hosting";         # VPS Hosting by default
$_LANG['menu_custom3_desc'] = "Take full control of your hosting";
$_LANG['menu_custom4'] = "Dedicated Servers";         # Dedicated Servers by default
$_LANG['menu_custom4_desc'] = "Your powerful hosting environment";
$_LANG['menu_custom5'] = "Cloud Hosting";         # Cloud Hosting by default
$_LANG['menu_custom5_desc'] = "Take your website to the cloud";
$_LANG['menu_custom6'] = "Game Servers";         # Game Servers by default
$_LANG['menu_custom6_desc'] = "Create your own game server";
$_LANG['menu_custom7'] = "Virtual Private Network";         # Virtual Private Network
$_LANG['menu_custom7_desc'] = "Setup your Virtual Private Network";
$_LANG['menu_custom8'] = "SSL Certificates";         # SSL Certificates
$_LANG['menu_custom8_desc'] = "View our SSL Certificates";
$_LANG['menu_custom9'] = "Hosting Addons";         # Hosting Addons
$_LANG['menu_custom9_desc'] = "View our Hosting Addons";
$_LANG['menu_custom10'] = "Email Hosting";         # Email Hosting
$_LANG['menu_custom10_desc'] = "Select some Email Hosting";
$_LANG['menu_webhosting_img_url'] = "web-hosting.php";
$_LANG['menu_webhosting_img'] = "menu-image.png";

// end service menu names

$_LANG['menu_company'] = "Company";
$_LANG['menu_company_overview'] = "Company Overview";
$_LANG['menu_company_overview_desc'] = "All about Your Company";
$_LANG['menu_company_whychooseus'] = "Why Choose Us";
$_LANG['menu_company_whychooseus_desc'] = "The reasons why to choose us";
$_LANG['menu_company_testimonials'] = "Testimonials";
$_LANG['menu_company_testimonials_desc'] = "Lots of feedback from our customer&#39;s";
$_LANG['menu_company_affiliateprogram'] = "Affiliate Program";
$_LANG['menu_company_affiliateprogram_desc'] = "Make money by referring your friend&#39;";
$_LANG['menu_company_announcements'] = "Announcements";
$_LANG['menu_company_announcements_desc'] = "Get up to date with the latest news";
$_LANG['menu_company_downloads'] = "Downloads";
$_LANG['menu_company_downloads_desc'] = "A collection of downloads";

$_LANG['menu_addons'] = "Addons";
$_LANG['menu_addons_whmcstemplates'] = "WHMCS Templates";
$_LANG['menu_addons_whmcstemplates_desc'] = "The best web hosting templates";
$_LANG['menu_addons_htmltemplates'] = "HTML Templates";
$_LANG['menu_addons_htmltemplates_desc'] = "Responsive HTML5 templates";
$_LANG['menu_addons_wordpressthemes'] = "Wordpress Themes";
$_LANG['menu_addons_wordpressthemes_desc'] = "Feature-rich Wordpress themes";
$_LANG['menu_addons_blestatemplates'] = "Blesta Templates";
$_LANG['menu_addons_blestatemplates_desc'] = "Elegant templates for Blesta";
$_LANG['menu_addons_clientexectemplates'] = "Clientexec Templates";
$_LANG['menu_addons_clientexectemplates_desc'] = "Powerful templates for Clientexec";
$_LANG['menu_addons_codescripts'] = "Scripts";
$_LANG['menu_addons_codescripts_desc'] = "Menus, feature boxes &amp; tables";
$_LANG['menu_addons_logodesign'] = "Logo Design";
$_LANG['menu_addons_logodesign_desc'] = "Custom vector logo design service";
$_LANG['menu_addons_bannerdesign'] = "Banner Design";
$_LANG['menu_addons_bannerdesign_desc'] = "Custom animated banner design";
$_LANG['menu_addons_whmcsmodules'] = "WHMCS Modules";
$_LANG['menu_addons_whmcsmodules_desc'] = "Enhance your WHMCS system";
$_LANG['menu_addons_whmcsservices'] = "WHMCS Services";
$_LANG['menu_addons_whmcsservices_desc'] = "Setup, configuration &amp; custom services";
$_LANG['menu_addons_wordpressservices'] = "Wordpress Services";
$_LANG['menu_addons_wordpressservices_desc'] = "Installation, configuration &amp; integration";
$_LANG['menu_addons_blestaservices'] = "Blesta Services";
$_LANG['menu_addons_blestaservices_desc'] = "Installation &amp; integration";
$_LANG['menu_addons_clientexecservices'] = "Clientexec Services";
$_LANG['menu_addons_clientexecservices_desc'] = "Installation &amp; integration";

$_LANG['menu_support'] = "Support";
$_LANG['menu_support_contact'] = "Contact Form";
$_LANG['menu_support_contact_desc'] = "Send us an email";
$_LANG['menu_support_submitticket'] = "Submit Ticket";
$_LANG['menu_support_submitticket_desc'] = "Submit a ticket to support";
$_LANG['menu_support_viewtickets'] = "View Tickets";
$_LANG['menu_support_viewtickets_desc'] = "View your tickets";
$_LANG['menu_support_knowledgebase'] = "Knowledgebase";
$_LANG['menu_support_knowledgebase_desc'] = "View our documentation";

$_LANG['menu_order'] = "Order";

$_LANG['menu_selectpage'] = "Select page";

$_LANG['menu_home'] = "Home";

$_LANG['menu_icon'] = "nav-new.png";

/*
-----------------------------------------
---------   Slideshow (File: includes/slideshow.tpl)   ---------
-----------------------------------------
*/

// Banner 1

$_LANG['banner1_title'] = "<span>Green</span> Website Hosting";
$_LANG['banner1_titlesub'] = "Our servers run on 100% renewable energy";
$_LANG['banner1_text1'] = "Unlimited domains, email & space";
$_LANG['banner1_text2'] = "Award-winning 24/7 technical support";
$_LANG['banner1_text3'] = "Money back guarantee with all plans";
$_LANG['banner1_text4'] = "Unlimited monthly bandwidth";
$_LANG['banner1_text5'] = "Flexible, easy-to-use control panel";
$_LANG['banner1_text6'] = "Green hosting services";
$_LANG['banner1_buttontext'] = "Get Started Now!";
$_LANG['banner1_link'] = "web-hosting.php";
$_LANG['banner1_img'] = "banner1.jpg";

// Banner 2

$_LANG['banner2_title'] = "<span>cPanel</span> hosting panel";
$_LANG['banner2_titlesub'] = "The most well known hosting control panel";
$_LANG['banner2_text1'] = "Easy to use user interface";
$_LANG['banner2_text2'] = "Multi-language control panel support";
$_LANG['banner2_text3'] = "Integrated script installer (Softaculous)";
$_LANG['banner2_text4'] = "247 Technical Support";
$_LANG['banner2_text5'] = "Manage multiple domains";
$_LANG['banner2_text6'] = "The #1 hosting control panel";
$_LANG['banner2_buttontext'] = "Get Started Now!";
$_LANG['banner2_link'] = "reseller-hosting.php";
$_LANG['banner2_img'] = "banner1.jpg";

// Banner 3

$_LANG['banner3_title'] = "<span>cPanel</span> hosting panel";
$_LANG['banner3_titlesub'] = "The most well known hosting control panel";
$_LANG['banner3_text1'] = "Easy to use user interface";
$_LANG['banner3_text2'] = "Multi-language control panel support";
$_LANG['banner3_text3'] = "Integrated script installer (Softaculous)";
$_LANG['banner3_text4'] = "247 Technical Support";
$_LANG['banner3_text5'] = "Manage multiple domains";
$_LANG['banner3_text6'] = "The #1 hosting control panel";
$_LANG['banner3_buttontext'] = "Get Started Now!";
$_LANG['banner3_link'] = "reseller-hosting.php";
$_LANG['banner3_img'] = "banner1.jpg";

// Banner 4

$_LANG['banner4_title'] = "<span>cPanel</span> hosting panel";
$_LANG['banner4_titlesub'] = "The most well known hosting control panel";
$_LANG['banner4_text1'] = "Easy to use user interface";
$_LANG['banner4_text2'] = "Multi-language control panel support";
$_LANG['banner4_text3'] = "Integrated script installer (Softaculous)";
$_LANG['banner4_text4'] = "247 Technical Support";
$_LANG['banner4_text5'] = "Manage multiple domains";
$_LANG['banner4_text6'] = "The #1 hosting control panel";
$_LANG['banner4_buttontext'] = "Get Started Now!";
$_LANG['banner4_link'] = "reseller-hosting.php";
$_LANG['banner4_img'] = "banner1.jpg";

// Banner 5

$_LANG['banner5_title'] = "<span>cPanel</span> hosting panel";
$_LANG['banner5_titlesub'] = "The most well known hosting control panel";
$_LANG['banner5_text1'] = "Easy to use user interface";
$_LANG['banner5_text2'] = "Multi-language control panel support";
$_LANG['banner5_text3'] = "Integrated script installer (Softaculous)";
$_LANG['banner5_text4'] = "247 Technical Support";
$_LANG['banner5_text5'] = "Manage multiple domains";
$_LANG['banner5_text6'] = "The #1 hosting control panel";
$_LANG['banner5_buttontext'] = "Get Started Now!";
$_LANG['banner5_link'] = "reseller-hosting.php";
$_LANG['banner5_img'] = "banner1.jpg";

// If slideshow is turned off

$_LANG['banneroff_title'] = "<span>Green</span> Website Hosting";
$_LANG['banneroff_titlesub'] = "Our servers run on 100% renewable energy";
$_LANG['banneroff_text1'] = "Unlimited domains, email & space";
$_LANG['banneroff_text2'] = "Award-winning 24/7 technical support";
$_LANG['banneroff_text3'] = "Money back guarantee with all plans";
$_LANG['banneroff_text4'] = "Unlimited monthly bandwidth";
$_LANG['banneroff_text5'] = "Flexible, easy-to-use control panel";
$_LANG['banneroff_text6'] = "Green hosting services";
$_LANG['banneroff_buttontext'] = "Get Started Now!";
$_LANG['banneroff_link'] = "web-hosting.php";
$_LANG['banneroff_img'] = "banner1.jpg";

/*
-----------------------------------------
---------   Partners (File: footer.tpl)   ---------
-----------------------------------------
*/

$_LANG['footer_partner_img'] = "partners.png";
$_LANG['footer_partner_alt'] = "Our official partners";

/*
-----------------------------------------
---------   Footer (File: footer.tpl)   ---------
-----------------------------------------
*/

$_LANG['footer_customercount'] = "728+ people trust";
$_LANG['footer_customercount_button'] = "Join them today";

$_LANG['footer_services'] = "Services";

// The service links text is taken from the menu section so they don't have to be edited twice

$_LANG['footer_addons'] = "Addons";

// The addon links text is taken from the menu section so they don't have to be edited twice

$_LANG['footer_domains'] = "Domains";
$_LANG['footer_domains_register'] = "Register Domain";
$_LANG['footer_domains_transfer'] = "Transfer Domain";

$_LANG['footer_support'] = "Support";
$_LANG['footer_support_contact'] = "Contact Form";
$_LANG['footer_support_submitticket'] = "Submit Ticket";
$_LANG['footer_support_knowledgebase'] = "Knowledgebase";

$_LANG['footer_company'] = "Company";
$_LANG['footer_company_aboutus'] = "About Us";
$_LANG['footer_company_whychooseus'] = "Why Choose Us";
$_LANG['footer_company_testimonials'] = "Testimonials";
$_LANG['footer_company_announcements'] = "Announcements";
$_LANG['footer_company_serverstatus'] = "Server Status";

$_LANG['footer_affiliates'] = "Affiliates";
$_LANG['footer_affiliates_program'] = "Affiliate Program";
$_LANG['footer_affiliates_join'] = "Join Free";
$_LANG['footer_affiliates_login'] = "Affiliates Login";

$_LANG['footer_about_title'] = "About";
$_LANG['footer_about_text'] = "We have been providing premium web hosting services and domain registration for small and medium sized businesses since 2009.";
$_LANG['footer_about_button'] = "more";
$_LANG['footer_about_address'] = "29 Your Street, Chatham, Kent, England";
$_LANG['footer_about_email'] = "sales@yourcompany.com";
$_LANG['footer_about_phone'] = "+0123454725";
$_LANG['footer_about_company'] = "Company number: 7832763";
$_LANG['footer_about_vat'] = "VAT number: FR197763863";

$_LANG['footer_social'] = "Follow us on";

$_LANG['footer_language'] = "Select your language";

// Copyright

$_LANG['copyright_text'] = "All rights reserved";

$_LANG['legal_link_terms'] = "Terms Of Service";
$_LANG['legal_link_usage'] = "Acceptable Usage Policy";
$_LANG['legal_link_privacy'] = "Privacy Policy";

/*
-----------------------------------------
---------   Cart banner (File: includes/cartitems.tpl)   ---------
-----------------------------------------
*/

$_LANG['cart_items1'] = "You have";
$_LANG['cart_items2'] = "items in your shopping cart, click the checkout button to process your order";
$_LANG['cart_checkout'] = "Checkout";

/*
-----------------------------------------
---------   Buttons   ---------
-----------------------------------------
*/

$_LANG['button_more'] = "Learn More";
$_LANG['button_order'] = "Order Now";
$_LANG['button_demo'] = "View Demo";
$_LANG['button_manage'] = "Manage";

/*
-----------------------------------------
---------   Home page (File: homepage.tpl, index.php)   ---------
-----------------------------------------
*/

// Domain checker

$_LANG['domainchecker_text1'] = "A great domain means instant credibility";
$_LANG['domainchecker_text2'] = "Register your perfect domain name for just";
$_LANG['domainchecker_input'] = "Search for your dream domain";
$_LANG['domainchecker_button'] = "Search";

// Domain checker terms

$_LANG['domainchecker_1_term'] = "yr"; // Used if multi language support is enabled
$_LANG['domainchecker_2_term'] = "yr";
$_LANG['domainchecker_3_term'] = "yr";
$_LANG['domainchecker_4_term'] = "yr";
$_LANG['domainchecker_5_term'] = "yr";

// Welcome

$_LANG['homepage_welcome_title'] = "We will bring you Professional, Affordable and Quality Web Hosting.";

$_LANG['homepage_welcome_p'] = "

<p>We provide Shared Hosting, Reseller Hosting, Business Hosting, Virtual Private Servers, Dedicated Servers and many more solutions for individuals, families, organisations and businesses. As we are a pronounced web hosting company we include a free domain name registration/transfer with all of our web hosting plans. The domain name included with your hosting plan is yours to carry on forever.</p>
	
<p>Our experts are available 24 hours a day, 7 days a week by customer desk, live chat & by phone for those times when you need help. Whether you need help with server assistance, registration of domains, transferring domain and websites, hosting related issues, control panel guidance we are here to assist you!</p>

";

// Plans title

$_LANG['homepage_plans_title'] = "Choose your web hosting plan to get started!";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Features

$_LANG['homepage_included'] = "Our hosting features";

$_LANG['homepage_included_1_title'] = "cPanel control panel";
$_LANG['homepage_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['homepage_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['homepage_included_2_title'] = "Softaculous script installer";
$_LANG['homepage_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['homepage_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['homepage_included_3_title'] = "LiteSpeed web servers";
$_LANG['homepage_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['homepage_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['homepage_included_4_title'] = "R1Soft backups";
$_LANG['homepage_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['homepage_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['homepage_included_5_title'] = "Our datacenter";
$_LANG['homepage_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['homepage_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['homepage_included_6_title'] = "Awards";
$_LANG['homepage_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['homepage_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['homepage_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['homepage_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['homepage_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['homepage_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['homepage_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['homepage_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['homepage_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['homepage_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['homepage_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['homepage_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['homepage_testimonialgrid_testimonial3_author'] = "George";
$_LANG['homepage_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['homepage_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['homepage_whychooseus_title'] = "Why choose us?";

$_LANG['homepage_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['homepage_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['homepage_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['homepage_whychooseus_2_title'] = "High Quality Servers";
$_LANG['homepage_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['homepage_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['homepage_whychooseus_3_title'] = "We Love Renewable";
$_LANG['homepage_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['homepage_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   Register domain page (File: registerdomain.tpl, registerdomain.php)   ---------
-----------------------------------------
*/

$_LANG['registerdomain_placeholder'] = "Search for your perfect domain name!";
$_LANG['registerdomain_button'] = "Search";

$_LANG['registerdomain_table'] = "Domain pricing";

// The domains table pulls your prices dynamically from WHMCS using data feeds: https://docs.whmcs.com/Data_Feeds#Product_Pricing. If you have a lot of TLDs within your WHMCS this can drastically increase the load time of the register domain page. To fix this the dynamic data feeds table can be replaced with a static table (which looks the same but doesn't pull your prices from the database) following this guide: https://www.zomex.com/docs/whmcs-templates/domain-pricing-static-table.php

$_LANG['registerdomain_included'] = "Included with all domain registrations";

$_LANG['registerdomain_included_1_title'] = "DNS Management";
$_LANG['registerdomain_included_1_img'] = "registerdomain-icon1.png";
$_LANG['registerdomain_included_1_desc'] = "Easily manage your domain from inside your account, change your nameservers, setup custom IPs &amp; forwarding.";

$_LANG['registerdomain_included_2_title'] = "Private WHOIS";
$_LANG['registerdomain_included_2_img'] = "registerdomain-icon2.png";
$_LANG['registerdomain_included_2_desc'] = "Manage your WHOIS records, you can opt-in for private WHOIS easily and quickly from inside your account at anytime.";

$_LANG['registerdomain_included_3_title'] = "Competitive pricing";
$_LANG['registerdomain_included_3_img'] = "registerdomain-icon3.png";
$_LANG['registerdomain_included_3_desc'] = "All of our TLDs are highly competitive, you can register your .com domain and get your business up and running quickly.";

$_LANG['registerdomain_included_4_title'] = "Everything under one roof";
$_LANG['registerdomain_included_4_img'] = "registerdomain-icon4.png";
$_LANG['registerdomain_included_4_desc'] = "You can manage your domain names/transfers, web hosting accounts &amp; email easily from inside your single account with us.";

/*
-----------------------------------------
---------   Transfer domain page (File: transferdomain.tpl, transferdomain.php)   ---------
-----------------------------------------
*/

$_LANG['transferdomain_placeholder'] = "Transfer your domain!";
$_LANG['transferdomain_button'] = "Search";

$_LANG['transferdomain_table'] = "Domain pricing";

// The domains table pulls your prices dynamically from WHMCS using data feeds: https://docs.whmcs.com/Data_Feeds#Product_Pricing. If you have a lot of TLDs within your WHMCS this can drastically increase the load time of the register domain page. To fix this the dynamic data feeds table can be replaced with a static table (which looks the same but doesn't pull your prices from the database) following this guide: https://www.zomex.com/docs/whmcs-templates/domain-pricing-static-table.php

$_LANG['transferdomain_included'] = "Included with all domain transfers";

$_LANG['transferdomain_included_1_title'] = "DNS Management";
$_LANG['transferdomain_included_1_img'] = "registerdomain-icon1.png";
$_LANG['transferdomain_included_1_desc'] = "Easily manage your domain from inside your account, change your nameservers, setup custom IPs &amp; forwarding.";

$_LANG['transferdomain_included_2_title'] = "Private WHOIS";
$_LANG['transferdomain_included_2_img'] = "registerdomain-icon2.png";
$_LANG['transferdomain_included_2_desc'] = "Manage your WHOIS records, you can opt-in for private WHOIS easily and quickly from inside your account at anytime.";

$_LANG['transferdomain_included_3_title'] = "Competitive pricing";
$_LANG['transferdomain_included_3_img'] = "registerdomain-icon3.png";
$_LANG['transferdomain_included_3_desc'] = "All of our TLDs are highly competitive, you can register your .com domain and get your business up and running quickly.";

$_LANG['transferdomain_included_4_title'] = "Everything under one roof";
$_LANG['transferdomain_included_4_img'] = "registerdomain-icon4.png";
$_LANG['transferdomain_included_4_desc'] = "You can manage your domain names/transfers, web hosting accounts &amp; email easily from inside your single account with us.";

/*
-----------------------------------------
---------   Begin hosting plans   ---------
-----------------------------------------
*/

/*
	
	You can re-name any of the 10 hosting pages following this guide: https://www.zomex.com/docs/whmcs-templates/how-to-change-hosting-page-type.php
	
*/

// Global

$_LANG['comparison'] = "Full comparison";
$_LANG['tab_overview'] = "Overview";
$_LANG['tab_plans'] = "Plans";
$_LANG['tab_features'] = "Features";
$_LANG['tab_testimonials'] = "Testimonials";
$_LANG['tab_whychooseus'] = "Why Choose Us?";

$_LANG['ribbonicon'] = "popular-ribbon.png";

/*
-----------------------------------------
---------   Shared Hosting page by default (File: web-hosting.tpl, web-hosting.php, includes/custom1.tpl)   ---------
-----------------------------------------
*/

// Title

$_LANG['custom1_plans_title'] = "Select your perfect shared hosting plan";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Overview

$_LANG['custom1_overview'] = "

<p>View our premium quality web hosting plans below. All of our web hosting plans come with cPanel, the leading hosting control panel allowing easy editing and full control of your website.</p>
	
<p>Preinstalled scripts included with our web hosting plans make life much easier by allowing you to install any popular application/software without any prior web hosting knowledge. Whether you want to start a website, blog, forum or online store our 1 click script installer has you covered.</p>

";

// Features

$_LANG['custom1_included'] = "Shared hosting features";

$_LANG['custom1_included_1_title'] = "cPanel control panel";
$_LANG['custom1_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['custom1_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['custom1_included_2_title'] = "Softaculous script installer";
$_LANG['custom1_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['custom1_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['custom1_included_3_title'] = "LiteSpeed web servers";
$_LANG['custom1_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['custom1_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['custom1_included_4_title'] = "R1Soft backups";
$_LANG['custom1_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['custom1_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['custom1_included_5_title'] = "Our datacenter";
$_LANG['custom1_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['custom1_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['custom1_included_6_title'] = "Awards";
$_LANG['custom1_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['custom1_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['custom1_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['custom1_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['custom1_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['custom1_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['custom1_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['custom1_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['custom1_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['custom1_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['custom1_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['custom1_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['custom1_testimonialgrid_testimonial3_author'] = "George";
$_LANG['custom1_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['custom1_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['custom1_whychooseus_title'] = "Why choose us?";

$_LANG['custom1_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['custom1_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['custom1_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['custom1_whychooseus_2_title'] = "High Quality Servers";
$_LANG['custom1_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['custom1_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['custom1_whychooseus_3_title'] = "We Love Renewable";
$_LANG['custom1_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['custom1_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   Reseller Hosting page by default (File: reseller-hosting.tpl, reseller-hosting.php, includes/custom2.tpl)   ---------
-----------------------------------------
*/

// Title

$_LANG['custom2_plans_title'] = "Select your perfect reseller hosting plan";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Overview

$_LANG['custom2_overview'] = "

<p>Our reseller hosting plans are the perfect choice for your reseller business. They all come with cPanel/WHM the leading control panel in the web hosting industry.</p>
	
<p>Preinstalled scripts included with our reseller hosting plans make life much easier for you and your customer's by allowing installation of any popular application/software without any prior web hosting knowledge. Whether you want to start a website, blog, forum or online store our 1 click script installer has you covered.</p>

";

// Features

$_LANG['custom2_included'] = "Reseller hosting features";

$_LANG['custom2_included_1_title'] = "cPanel control panel";
$_LANG['custom2_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['custom2_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['custom2_included_2_title'] = "Softaculous script installer";
$_LANG['custom2_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['custom2_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['custom2_included_3_title'] = "LiteSpeed web servers";
$_LANG['custom2_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['custom2_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['custom2_included_4_title'] = "R1Soft backups";
$_LANG['custom2_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['custom2_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['custom2_included_5_title'] = "Our datacenter";
$_LANG['custom2_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['custom2_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['custom2_included_6_title'] = "Awards";
$_LANG['custom2_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['custom2_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['custom2_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['custom2_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['custom2_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['custom2_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['custom2_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['custom2_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['custom2_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['custom2_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['custom2_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['custom2_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['custom2_testimonialgrid_testimonial3_author'] = "George";
$_LANG['custom2_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['custom2_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['custom2_whychooseus_title'] = "Why choose us?";

$_LANG['custom2_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['custom2_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['custom2_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['custom2_whychooseus_2_title'] = "High Quality Servers";
$_LANG['custom2_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['custom2_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['custom2_whychooseus_3_title'] = "We Love Renewable";
$_LANG['custom2_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['custom2_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   VPS Hosting page by default (File: vps-hosting.tpl, vps-hosting.php, includes/custom3.tpl)   ---------
-----------------------------------------
*/

// Title

$_LANG['custom3_plans_title'] = "Select your perfect VPS hosting plan";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Overview

$_LANG['custom3_overview'] = "

<p>Does your website require more power? If so our VPS hosting is the perfect choice for you. By its very nature it is a more powerful setup for a growing website.</p>
	
<p>Preinstalled scripts included with our web hosting plans make life much easier by allowing you to install any popular application/software without any prior web hosting knowledge. Whether you want to start a website, blog, forum or online store our 1 click script installer has you covered.</p>

";

// Features

$_LANG['custom3_included'] = "VPS hosting features";

$_LANG['custom3_included_1_title'] = "cPanel control panel";
$_LANG['custom3_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['custom3_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['custom3_included_2_title'] = "Softaculous script installer";
$_LANG['custom3_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['custom3_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['custom3_included_3_title'] = "LiteSpeed web servers";
$_LANG['custom3_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['custom3_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['custom3_included_4_title'] = "R1Soft backups";
$_LANG['custom3_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['custom3_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['custom3_included_5_title'] = "Our datacenter";
$_LANG['custom3_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['custom3_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['custom3_included_6_title'] = "Awards";
$_LANG['custom3_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['custom3_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['custom3_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['custom3_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['custom3_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['custom3_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['custom3_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['custom3_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['custom3_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['custom3_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['custom3_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['custom3_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['custom3_testimonialgrid_testimonial3_author'] = "George";
$_LANG['custom3_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['custom3_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['custom3_whychooseus_title'] = "Why choose us?";

$_LANG['custom3_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['custom3_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['custom3_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['custom3_whychooseus_2_title'] = "High Quality Servers";
$_LANG['custom3_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['custom3_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['custom3_whychooseus_3_title'] = "We Love Renewable";
$_LANG['custom3_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['custom3_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   Dedicated Servers page by default (File: dedicated-servers.tpl, dedicated-servers.php, includes/custom4.tpl)   ---------
-----------------------------------------
*/

// Title

$_LANG['custom4_plans_title'] = "Select your perfect dedicated server";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Overview

$_LANG['custom4_overview'] = "

<p>The most powerful of all of our hosting services, our dedicated servers are the ultimate choice for your business giving you the fastest and most reliable hosting possible.</p>
	
<p>Preinstalled scripts included with our web hosting plans make life much easier by allowing you to install any popular application/software without any prior web hosting knowledge. Whether you want to start a website, blog, forum or online store our 1 click script installer has you covered.</p>

";

// Features

$_LANG['custom4_included'] = "Dedicated Server features";

$_LANG['custom4_included_1_title'] = "cPanel control panel";
$_LANG['custom4_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['custom4_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['custom4_included_2_title'] = "Softaculous script installer";
$_LANG['custom4_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['custom4_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['custom4_included_3_title'] = "LiteSpeed web servers";
$_LANG['custom4_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['custom4_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['custom4_included_4_title'] = "R1Soft backups";
$_LANG['custom4_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['custom4_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['custom4_included_5_title'] = "Our datacenter";
$_LANG['custom4_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['custom4_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['custom4_included_6_title'] = "Awards";
$_LANG['custom4_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['custom4_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['custom4_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['custom4_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['custom4_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['custom4_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['custom4_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['custom4_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['custom4_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['custom4_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['custom4_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['custom4_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['custom4_testimonialgrid_testimonial3_author'] = "George";
$_LANG['custom4_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['custom4_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['custom4_whychooseus_title'] = "Why choose us?";

$_LANG['custom4_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['custom4_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['custom4_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['custom4_whychooseus_2_title'] = "High Quality Servers";
$_LANG['custom4_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['custom4_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['custom4_whychooseus_3_title'] = "We Love Renewable";
$_LANG['custom4_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['custom4_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   Cloud Hosting page by default (File: cloud-hosting.tpl, cloud-hosting.php, includes/custom5.tpl)   ---------
-----------------------------------------
*/

// Title

$_LANG['custom5_plans_title'] = "Select your perfect cloud hosting plan";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Overview

$_LANG['custom5_overview'] = "

<p>Take your website to the cloud with our wide variety of cloud hosting packages, all of which come with cPanel the leading website control panel.</p>
	
<p>Preinstalled scripts included with our web hosting plans make life much easier by allowing you to install any popular application/software without any prior web hosting knowledge. Whether you want to start a website, blog, forum or online store our 1 click script installer has you covered.</p>

";

// Features

$_LANG['custom5_included'] = "Cloud Hosting features";

$_LANG['custom5_included_1_title'] = "cPanel control panel";
$_LANG['custom5_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['custom5_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['custom5_included_2_title'] = "Softaculous script installer";
$_LANG['custom5_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['custom5_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['custom5_included_3_title'] = "LiteSpeed web servers";
$_LANG['custom5_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['custom5_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['custom5_included_4_title'] = "R1Soft backups";
$_LANG['custom5_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['custom5_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['custom5_included_5_title'] = "Our datacenter";
$_LANG['custom5_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['custom5_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['custom5_included_6_title'] = "Awards";
$_LANG['custom5_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['custom5_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['custom5_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['custom5_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['custom5_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['custom5_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['custom5_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['custom5_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['custom5_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['custom5_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['custom5_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['custom5_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['custom5_testimonialgrid_testimonial3_author'] = "George";
$_LANG['custom5_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['custom5_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['custom5_whychooseus_title'] = "Why choose us?";

$_LANG['custom5_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['custom5_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['custom5_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['custom5_whychooseus_2_title'] = "High Quality Servers";
$_LANG['custom5_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['custom5_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['custom5_whychooseus_3_title'] = "We Love Renewable";
$_LANG['custom5_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['custom5_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   Game Servers page by default (File: game-servers.tpl, game-servers.php, includes/custom6.tpl)   ---------
-----------------------------------------
*/

// Title

$_LANG['custom6_plans_title'] = "Select your perfect game server plan";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Overview

$_LANG['custom6_overview'] = "

<p>Why not host your own games? Our game server packages will allow you to easily host your favourite games using our reliable servers.</p>

";

// Features

$_LANG['custom6_included'] = "Game Server features";

$_LANG['custom6_included_1_title'] = "cPanel control panel";
$_LANG['custom6_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['custom6_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['custom6_included_2_title'] = "Softaculous script installer";
$_LANG['custom6_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['custom6_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['custom6_included_3_title'] = "LiteSpeed web servers";
$_LANG['custom6_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['custom6_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['custom6_included_4_title'] = "R1Soft backups";
$_LANG['custom6_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['custom6_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['custom6_included_5_title'] = "Our datacenter";
$_LANG['custom6_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['custom6_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['custom6_included_6_title'] = "Awards";
$_LANG['custom6_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['custom6_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['custom6_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['custom6_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['custom6_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['custom6_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['custom6_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['custom6_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['custom6_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['custom6_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['custom6_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['custom6_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['custom6_testimonialgrid_testimonial3_author'] = "George";
$_LANG['custom6_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['custom6_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['custom6_whychooseus_title'] = "Why choose us?";

$_LANG['custom6_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['custom6_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['custom6_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['custom6_whychooseus_2_title'] = "High Quality Servers";
$_LANG['custom6_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['custom6_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['custom6_whychooseus_3_title'] = "We Love Renewable";
$_LANG['custom6_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['custom6_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   Virtual Private Network page by default (File: virtual-private-network.tpl, virtual-private-network.php, includes/custom7.tpl)   ---------
-----------------------------------------
*/

// Title

$_LANG['custom7_plans_title'] = "Select your perfect virtual private network plan";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Overview

$_LANG['custom7_overview'] = "

<p>Speed up your website with our choice of Virtual Private Network packages.</p>

";

// Features

$_LANG['custom7_included'] = "Virtual Private Network features";

$_LANG['custom7_included_1_title'] = "cPanel control panel";
$_LANG['custom7_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['custom7_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['custom7_included_2_title'] = "Softaculous script installer";
$_LANG['custom7_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['custom7_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['custom7_included_3_title'] = "LiteSpeed web servers";
$_LANG['custom7_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['custom7_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['custom7_included_4_title'] = "R1Soft backups";
$_LANG['custom7_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['custom7_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['custom7_included_5_title'] = "Our datacenter";
$_LANG['custom7_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['custom7_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['custom7_included_6_title'] = "Awards";
$_LANG['custom7_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['custom7_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['custom7_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['custom7_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['custom7_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['custom7_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['custom7_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['custom7_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['custom7_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['custom7_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['custom7_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['custom7_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['custom7_testimonialgrid_testimonial3_author'] = "George";
$_LANG['custom7_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['custom7_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['custom7_whychooseus_title'] = "Why choose us?";

$_LANG['custom7_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['custom7_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['custom7_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['custom7_whychooseus_2_title'] = "High Quality Servers";
$_LANG['custom7_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['custom7_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['custom7_whychooseus_3_title'] = "We Love Renewable";
$_LANG['custom7_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['custom7_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   SSL Certificates page by default (File: ssl-certificates.tpl, ssl-certificates.php, includes/custom8.tpl)   ---------
-----------------------------------------
*/

// Title

$_LANG['custom8_plans_title'] = "Select your perfect ssl certificate";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Overview

$_LANG['custom8_overview'] = "

<p>Secure your website with our choice of SSL certificates. We provide a mix of SSLs from the leading companies in the website security industry.</p>

";

// Features

$_LANG['custom8_included'] = "SSL Certificate features";

$_LANG['custom8_included_1_title'] = "cPanel control panel";
$_LANG['custom8_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['custom8_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['custom8_included_2_title'] = "Softaculous script installer";
$_LANG['custom8_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['custom8_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['custom8_included_3_title'] = "LiteSpeed web servers";
$_LANG['custom8_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['custom8_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['custom8_included_4_title'] = "R1Soft backups";
$_LANG['custom8_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['custom8_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['custom8_included_5_title'] = "Our datacenter";
$_LANG['custom8_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['custom8_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['custom8_included_6_title'] = "Awards";
$_LANG['custom8_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['custom8_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['custom8_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['custom8_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['custom8_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['custom8_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['custom8_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['custom8_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['custom8_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['custom8_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['custom8_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['custom8_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['custom8_testimonialgrid_testimonial3_author'] = "George";
$_LANG['custom8_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['custom8_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['custom8_whychooseus_title'] = "Why choose us?";

$_LANG['custom8_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['custom8_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['custom8_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['custom8_whychooseus_2_title'] = "High Quality Servers";
$_LANG['custom8_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['custom8_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['custom8_whychooseus_3_title'] = "We Love Renewable";
$_LANG['custom8_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['custom8_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   Hosting Addons page by default (File: hosting-addons.tpl, hosting-addons.php, includes/custom9.tpl)   ---------
-----------------------------------------
*/

// Title

$_LANG['custom9_plans_title'] = "Select your perfect hosting addons plan";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Overview

$_LANG['custom9_overview'] = "

<p>Enhance your web hosting with our choice of hosting addons, all of which are activated automatically.</p>

";

// Features

$_LANG['custom9_included'] = "Hosting addon features";

$_LANG['custom9_included_1_title'] = "cPanel control panel";
$_LANG['custom9_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['custom9_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['custom9_included_2_title'] = "Softaculous script installer";
$_LANG['custom9_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['custom9_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['custom9_included_3_title'] = "LiteSpeed web servers";
$_LANG['custom9_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['custom9_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['custom9_included_4_title'] = "R1Soft backups";
$_LANG['custom9_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['custom9_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['custom9_included_5_title'] = "Our datacenter";
$_LANG['custom9_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['custom9_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['custom9_included_6_title'] = "Awards";
$_LANG['custom9_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['custom9_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['custom9_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['custom9_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['custom9_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['custom9_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['custom9_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['custom9_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['custom9_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['custom9_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['custom9_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['custom9_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['custom9_testimonialgrid_testimonial3_author'] = "George";
$_LANG['custom9_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['custom9_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['custom9_whychooseus_title'] = "Why choose us?";

$_LANG['custom9_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['custom9_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['custom9_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['custom9_whychooseus_2_title'] = "High Quality Servers";
$_LANG['custom9_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['custom9_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['custom9_whychooseus_3_title'] = "We Love Renewable";
$_LANG['custom9_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['custom9_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   Email Hosting page by default (File: email-hosting.tpl, email-hosting.php, includes/custom10.tpl)   ---------
-----------------------------------------
*/

// Title

$_LANG['custom10_plans_title'] = "Select your perfect email hosting plan";

// Plans

/* By default your plans are editable via Wizard Panel. If you have Multi-language support set to on in Wizard Panel then most of your plans content comes from this file under the "Multi-language support: on" section */

// Overview

$_LANG['custom10_overview'] = "

<p>Look no further for reliable email hosting that ensures you don't run into issues with spam.</p>

";

// Features

$_LANG['custom10_included'] = "Email Hosting features";

$_LANG['custom10_included_1_title'] = "cPanel control panel";
$_LANG['custom10_included_1_img'] = "featuresgrid-icon1.png";
$_LANG['custom10_included_1_desc'] = "

<p>With cPanel you can easily manage every aspect of your web hosting account. From creating custom email addresses all the way to editing your website files.</p>

<p>The best thing about cPanel is that it can be accessed easily from any computer with an Internet connection.</p>

<p>With cPanel you can manage your website files with its browser based file manager (e.g upload, delete, edit files), Create/delete email accounts of your choice (@yourdomain.com) and access webmail via your browser, Install/remove software on your account with the help of Softaculous (Wordpress, Joomla etc) &amp; much more!</p>";

$_LANG['custom10_included_2_title'] = "Softaculous script installer";
$_LANG['custom10_included_2_img'] = "featuresgrid-icon2.png";
$_LANG['custom10_included_2_desc'] = "

<p>Softaculous is a application built into cPanel that allows you to easily install from over 150 free scripts/software. Software includes Wordpress, Joomla, phpBB, Magento, Prestashop and many more. No matter which type of website you're looking to build we provide access to software that'll make it easier to create and manage your website/blog/forum/online store!</p>

<p>Don't get court with hosting services that make it hard to install these scripts. Join Your Company today and gain instant access to this feature!</p>";

$_LANG['custom10_included_3_title'] = "LiteSpeed web servers";
$_LANG['custom10_included_3_img'] = "featuresgrid-icon3.png";
$_LANG['custom10_included_3_desc'] = "

<p>All of our web hosting packages come with LiteSpeed. LiteSpeed is up to 9 times faster than Apache (standard web server setup). LiteSpeed fully supports everything that Apache uses such as .htaccess and mod_rewrite so if your website loads quickly on an Apache server it will be even faster on our servers!</p>

<p>You should choose LiteSpeed if you want to processes PHP 50% faster, wow! - (Wordpress which is the most popular software uses PHP) &amp; benefit from 3 times faster than SSL Apache hosting!</p>";

$_LANG['custom10_included_4_title'] = "R1Soft backups";
$_LANG['custom10_included_4_img'] = "featuresgrid-icon4.png";
$_LANG['custom10_included_4_desc'] = "

<p>All of our web hosting accounts come with automated and completely free backups. This is made possible by the leading R1Soft Backup software.</p>

<p>R1Soft is used by providers worldwide and currently protects over 250,000 servers!</p>

<p>R1Soft can be accessed directly in cPanel giving you instant and easy access to backups of your website files &amp; database!</p>";

$_LANG['custom10_included_5_title'] = "Our datacenter";
$_LANG['custom10_included_5_img'] = "featuresgrid-icon5.png";
$_LANG['custom10_included_5_desc'] = "

<p>All of our servers are located in a large, well-known datacenter in Dallas Texas, USA. Our facility is monitored 24/7 to ensure that all servers are up.</p>

<p>Many companies out there take shortcuts when it comes to their servers. At Your Company we use the most up to date and premium quality servers available to ensure that your website loads lightning fast each and every time.</p>";

$_LANG['custom10_included_6_title'] = "Awards";
$_LANG['custom10_included_6_img'] = "featuresgrid-icon6.png";
$_LANG['custom10_included_6_desc'] = "

<p>We've won a selection of prestigious awards as a reliable web hosting provider. Made possible with a quality service offer and high level of included support.</p>

<p>Signup today with Your Company and find out how we've been able to acquire these awards through the quality of our servers and the free support we provide.</p>

<p>We are so confident that you will like our service that we provide a no questions asked 30 day money back guarantee!</p>";

// Testimonials

$_LANG['custom10_testimonialgrid_title'] = "Lots of happy customers";

$_LANG['custom10_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['custom10_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['custom10_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['custom10_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['custom10_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['custom10_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['custom10_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['custom10_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['custom10_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['custom10_testimonialgrid_testimonial3_author'] = "George";
$_LANG['custom10_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['custom10_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

// Why Choose Us

$_LANG['custom10_whychooseus_title'] = "Why choose us?";

$_LANG['custom10_whychooseus_1_title'] = "100% Green Hosting";
$_LANG['custom10_whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['custom10_whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['custom10_whychooseus_2_title'] = "High Quality Servers";
$_LANG['custom10_whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['custom10_whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['custom10_whychooseus_3_title'] = "We Love Renewable";
$_LANG['custom10_whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['custom10_whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   End hosting plans   ---------
-----------------------------------------
*/

/*
-----------------------------------------
---------   Affiliate program page (File: affiliate-program.tpl, affiliate-program.php)   ---------
-----------------------------------------
*/

$_LANG['affiliateprogram_tabs_overview'] = "Overview";
$_LANG['affiliateprogram_tabs_commissions'] = "Commissions";
$_LANG['affiliateprogram_tabs_whychooseus'] = "Why choose us?";
$_LANG['affiliateprogram_tabs_howtojoin'] = "How to join";

$_LANG['affiliateprogram_overview_text'] = "Earn money by promoting our products/services via our free to join affiliate program. Once you've created your free affiliate account you'll receive a unique referral link. Whenever someone clicks this they are redirected to our website and any purchases they make are recorded and the commission from that purchase is added to your account. As your commission builds you'll be able to request a payout via PayPal.";

$_LANG['affiliateprogram_overview_login'] = "Login";
$_LANG['affiliateprogram_overview_join'] = "Join free";

// Commission table

// When extending this table you need to duplicate the plan groups below and then also the same to match in the affiliate-program.tpl file. Optionally you can replace this with a static HTML table which is easier to edit following this guide (will only support 1 language): https://www.zomex.com/docs/whmcs-templates/affiliate-program-static-table.php

$_LANG['affiliateprogram_commissions_title'] = "Commissions";
$_LANG['affiliateprogram_commissions_th1'] = "Product/service";
$_LANG['affiliateprogram_commissions_th2'] = "Commission";
$_LANG['affiliateprogram_commissions_th3'] = "Price";

$_LANG['affiliateprogram_commissions_cat1'] = "Shared Hosting";

$_LANG['affiliateprogram_commissions_plan1_title'] = "Shared 1";
$_LANG['affiliateprogram_commissions_plan1_price'] = "3.99/month";
$_LANG['affiliateprogram_commissions_plan1_commission'] = "1.00/month";

$_LANG['affiliateprogram_commissions_plan2_title'] = "Shared 2";
$_LANG['affiliateprogram_commissions_plan2_price'] = "6.99/month";
$_LANG['affiliateprogram_commissions_plan2_commission'] = "2.00/month";

$_LANG['affiliateprogram_commissions_plan3_title'] = "Shared 3";
$_LANG['affiliateprogram_commissions_plan3_price'] = "9.99/month";
$_LANG['affiliateprogram_commissions_plan3_commission'] = "3.00/month";

$_LANG['affiliateprogram_commissions_cat2'] = "Reseller Hosting";

$_LANG['affiliateprogram_commissions_plan4_title'] = "Reseller 1";
$_LANG['affiliateprogram_commissions_plan4_price'] = "6.99/month";
$_LANG['affiliateprogram_commissions_plan4_commission'] = "2.00/month";

$_LANG['affiliateprogram_commissions_plan5_title'] = "Reseller 2";
$_LANG['affiliateprogram_commissions_plan5_price'] = "9.99/month";
$_LANG['affiliateprogram_commissions_plan5_commission'] = "3.00/month";

$_LANG['affiliateprogram_why'] = "Why become a affiliate?";

$_LANG['affiliateprogram_why_1_title'] = "Realtime reports & statistics";
$_LANG['affiliateprogram_why_1_img'] = "affiliates-icon1.png";
$_LANG['affiliateprogram_why_1_desc'] = "We provide real-time statistics as well as a monthly email report with information on any new clicks, conversions and commissions you have generated.";

$_LANG['affiliateprogram_why_2_title'] = "Quick & reliable affiliate payouts";
$_LANG['affiliateprogram_why_2_img'] = "affiliates-icon2.png";
$_LANG['affiliateprogram_why_2_desc'] = "We pay our affiliates when requested once the low payment rate of $30 is reached! Payments are made via PayPal or check ($2.50 delivery fee).";

$_LANG['affiliateprogram_why_3_title'] = "Instant access to our program & resources";
$_LANG['affiliateprogram_why_3_img'] = "affiliates-icon3.png";
$_LANG['affiliateprogram_why_3_desc'] = "Join today and you'll gain instant access to our program and all of our marketing resources. We have a mix of banners and unique links to help you start.";

$_LANG['affiliateprogram_why_4_title'] = "Our affiliate program is free to join";
$_LANG['affiliateprogram_why_4_img'] = "affiliates-icon4.png";
$_LANG['affiliateprogram_why_4_desc'] = "Our program is and always will be free to join for everyone. Whether you're one of our existing customer's or a big affiliate marketer.";

$_LANG['affiliateprogram_howtojoin'] = "How to join";

$_LANG['affiliateprogram_howtojoin_1_alt'] = "affiliate program register";
$_LANG['affiliateprogram_howtojoin_1_text'] = "Click on the <a href='register.php'>join free</a> button at the top of this page.";

$_LANG['affiliateprogram_howtojoin_2_alt'] = "affiliate program join";
$_LANG['affiliateprogram_howtojoin_2_text'] = "Once logged-in a new menu will appear. Hover over \"My Account\" and click on \"My Commissions\".";

$_LANG['affiliateprogram_howtojoin_3_alt'] = "affiliate program activate";
$_LANG['affiliateprogram_howtojoin_3_text'] = "Click the orange button named \"Activate Affiliate Account\" to activate your affiliate account.";

$_LANG['affiliateprogram_howtojoin_4_alt'] = "affiliate program link";
$_LANG['affiliateprogram_howtojoin_4_text'] = "You'll now see a page showing your unique referral link, commissions &amp; banners.";

/*
-----------------------------------------
---------   Why choose us page (File: why-choose-us.tpl, why-choose-us.php)   ---------
-----------------------------------------
*/

$_LANG['whychooseus_1_title'] = "100% Green Hosting";
$_LANG['whychooseus_1_desc'] = "All of our servers run on 100% green energy from renewable sources. We are proud that our web hosting service has no negative impact on the environment and future generations.";
$_LANG['whychooseus_1_img'] = "whychooseus-1.png";

$_LANG['whychooseus_2_title'] = "High Quality Servers";
$_LANG['whychooseus_2_desc'] = "Although our hosting operation is green this does not take away from the quality of our servers. We use the best servers available to ensure we can offer a high quality hosting service."; 
$_LANG['whychooseus_2_img'] = "whychooseus-2.png";

$_LANG['whychooseus_3_title'] = "We Love Renewable";
$_LANG['whychooseus_3_desc'] = "We have a deep passion for renewable energy and environment friendly hosting services and we are always keen to further expand this focus and attention to detail.";
$_LANG['whychooseus_3_img'] = "whychooseus-3.png";

/*
-----------------------------------------
---------   Testimonials page (File: testimonials.tpl, testimonials.php)   ---------
-----------------------------------------
*/

$_LANG['testimonials_testimonialgrid_testimonial1_desc'] = "My experience with company name has been nothing short of amazing. The level of support provided with my web hosting account has been fantastic. I will recommend company name to all of my friends.";
$_LANG['testimonials_testimonialgrid_testimonial1_author'] = "Nathan";
$_LANG['testimonials_testimonialgrid_testimonial1_url'] = "www.google.com";
$_LANG['testimonials_testimonialgrid_testimonial1_img'] = "testimonial-1.png";

$_LANG['testimonials_testimonialgrid_testimonial2_desc'] = "Company name is the most reliable company I have come across for web hosting services. If you're looking for a web hosting account look no further than company name! Sign-up today to see why!";
$_LANG['testimonials_testimonialgrid_testimonial2_author'] = "Joanna";
$_LANG['testimonials_testimonialgrid_testimonial2_url'] = "www.yahoo.com";
$_LANG['testimonials_testimonialgrid_testimonial2_img'] = "testimonial-2.png";

$_LANG['testimonials_testimonialgrid_testimonial3_desc'] = "I've been a customer with company name for over 5 years, they never fail to disappoint me and the service has been top notch since I ordered my first web hosting account with company name. Don't hesitate to join!";
$_LANG['testimonials_testimonialgrid_testimonial3_author'] = "George";
$_LANG['testimonials_testimonialgrid_testimonial3_url'] = "www.msn.com";
$_LANG['testimonials_testimonialgrid_testimonial3_img'] = "testimonial-3.png";

/*
-----------------------------------------
---------   Contact page (File: contact.tpl, contact.php)  ---------
-----------------------------------------
*/

$_LANG['contact_box1_title'] = "Company Information";
$_LANG['contact_box1_desc'] = "You can contact us at Your Company office address:";
$_LANG['contact_box1_address1'] = "29 Your Street";
$_LANG['contact_box1_address2'] = "Chatham";
$_LANG['contact_box1_address3'] = "Kent";
$_LANG['contact_box1_address4'] = "England";
$_LANG['contact_box1_address5'] = "374 324 (876)";
$_LANG['contact_box1_desc2'] = "We reply to all enquires within 2 business days. Our office ours are 9AM - 5PM.";

$_LANG['contact_box2_title'] = "Email Departments";
$_LANG['contact_box2_desc'] = "You can contact our support team via separate email departments:";
$_LANG['contact_box2_email_1_name'] = "Support: ";
$_LANG['contact_box2_email_1_email'] = "support@yourcompany.com";
$_LANG['contact_box2_email_2_name'] = "Sales: ";
$_LANG['contact_box2_email_2_email'] = "sales@yourcompany.com";
$_LANG['contact_box2_email_3_name'] = "Billing: ";
$_LANG['contact_box2_email_3_email'] = "billing@yourcompany.com";
$_LANG['contact_box2_email_4_name'] = "Affiliates: ";
$_LANG['contact_box2_email_4_email'] = "affiliates@yourcompany.com";
$_LANG['contact_box2_desc2'] = "All emails are replied to within 24 hours.";

$_LANG['contact_box3_title'] = "Contact form";

$_LANG['contact_box4_title'] = "We're on the map";

/*
-----------------------------------------
---------   Login page (File: login.tpl, clientarea.php)  ---------
-----------------------------------------
*/

$_LANG['clientlogin_title'] = "Login to";
$_LANG['clientlogin_forgottenpass'] = "Forgotten your password?";
$_LANG['clientlogin_register'] = "Create your Free Account";

/*
-----------------------------------------
---------   Portal page (File: portal.tpl, portal.php)   ---------
-----------------------------------------
*/

$_LANG['domaincheckerdescription'] = "Register your perfect domain";

/*
-----------------------------------------
---------   Cart page (File: includes/menu.tpl, cart.php)    ---------
-----------------------------------------
*/

$_LANG['cart_steps_1_title'] = "Step 1";
$_LANG['cart_steps_1_desc'] = "Choose";

$_LANG['cart_steps_2_title'] = "Step 2";
$_LANG['cart_steps_2_desc'] = "Configure";

$_LANG['cart_steps_3_title'] = "Step 3";
$_LANG['cart_steps_3_desc'] = "Checkout";

/*
-----------------------------------------
---------   Company page (File: company.tpl, company.php)  ---------
-----------------------------------------
*/

$_LANG['company_img_desc'] = "Our company premises";

$_LANG['company_1'] = "<p>Your Company is miles above the rest as an exceptional web hosting company. We have many years of leading experience with global businesses of all sizes and have built up an affluence of web hosting expertise that put down us a scratch above other web hosting companies in this time. Your Company is a company that you can rely on for all of your web hosting. With 24 hour support and a money back guarantee there is no reason not to sign up today!</p>";

$_LANG['company_2'] = "

<div class=\"bigheader\"><h2>Free Domain Name</h2></div>	

<p>As we are a pronounced web hosting company we include a free domain name registration/transfer with all of our web hosting plans. The domain name included with your hosting plan is yours to carry on forever.</p>

<div class=\"bigheader\"><h2>99.9% Uptime Guarantee</h2></div>	

<p>We offer a 99.9% uptime guarantee with all of our plans which is monitored by reliable third party companies. Whether it&#39;s the day or night, you can be confident that your website is safe in our professional hands.</p>

<div class=\"bigheader\"><h2>Disk Space &amp; Bandwidth</h2></div>	

<p>As we are prominent in our web hosting service, so you can get enormous storage for your files. We offer several tactics with diverse storage options.</p>

<div class=\"bigheader\"><h2>30 Days Money Back Guarantee</h2></div>	

<p>We also endow with a 30-days money back guarantee whereby you can claim your money back in full within a month of signing up without any questions asked.</p>

<div class=\"bigheader\"><h2>24/7 Support</h2></div>	

<p>Our experts are available 24 hours a day, 7 days a week by customer desk, live chat &amp; by phone for those times when you need help. Whether you need help with server assistance, registration of domains, transferring domain and websites, hosting related issues, control panel guidance we are here to assist you!</p>

<div class=\"bigheader\"><h2>Multiple Services to fit any budget</h2></div>	

<p>We have the right web hosing plan for you, whether you&#39;re a big business corporate house or looking to setup your first Wordpress blog. We have a web hosting plan that&#39;s right for you!</p>

<div class=\"bigheader\"><h2>cPanel - Multi-Language Control Panel</h2></div>	

<p>We offer a multi-language, user-friendly control panel called cPanel. Languages supported are English, Portuguese, French, Dutch, Norwegian, Spanish, German, Russian, Ukrainian &amp; Bulgarian.</p>

<div class=\"bigheader\"><h2>Preinstalled Scripts</h2></div>	

<p>Preinstalled scripts make life much easier by allowing you to install any popular application/software without any web hosting knowledge. Whether you want to start a website, blog, forum or online store our 1 click, script installer has the right software for your needs. From Wordpress to Zen Cart, we have it all!</p>

";

// Sidebar

$_LANG['company_sidebox_1_title'] = "Why choose Your Company?";
$_LANG['company_sidebox_1_desc'] = "The top reasons why you should choose us.";
$_LANG['company_sidebox_1_list1'] = "We are passionate about what we do";
$_LANG['company_sidebox_1_list2'] = "We listen to your feedback";
$_LANG['company_sidebox_1_list3'] = "We provide a high level of support";
$_LANG['company_sidebox_1_list4'] = "We focus on the quality of our services";
$_LANG['company_sidebox_1_list5'] = "We have lots of tutorials on how to get your website up and running";
$_LANG['company_sidebox_1_list6'] = "We do not oversell our web hosting services";

$_LANG['company_sidebox_2_title'] = "Payment methods";
$_LANG['company_sidebox_2_desc'] = "We accept payment from any of the following methods:";

$_LANG['company_sidebox_3_title'] = "Included with Your Company";
$_LANG['company_sidebox_3_desc'] = "We include the following with all orders";
$_LANG['company_sidebox_3_list1'] = "24/7 live chat &amp; email support";
$_LANG['company_sidebox_3_list2'] = "cPanel based web hosting";
$_LANG['company_sidebox_3_list3'] = "Softaculous - the best script installer";
$_LANG['company_sidebox_3_list4'] = "Easy, automated upgrades with our shared hosting";
$_LANG['company_sidebox_3_list5'] = "Unlimited email address";
$_LANG['company_sidebox_3_list6'] = "Fast and reliable servers";

$_LANG['company_sidebox_4_title'] = "Promotion";
$_LANG['company_sidebox_4_text'] = "Sign-up today using coupon code <strong>JOIN</strong> and save 20%!";

$_LANG['company_sidebox_5_title'] = "Company updates";
$_LANG['company_sidebox_5_text'] = "Follow us on Twitter to keep up to date with news &amp; promotions:";

/*
-----------------------------------------
---------   Addons   ---------
-----------------------------------------
*/

// Global

$_LANG['addons_responsive'] = "Responsive";
$_LANG['addons_price'] = "Price:";
$_LANG['addons_from'] = "just";
$_LANG['addons_onetime'] = "one-time";

// Addons page (File: addons.tpl, addons.php)

$_LANG['addons_whmcstemplates'] = "These WHMCS Templates are a complete solution for your web hosting business. They come packed with all of the pages and content required for a successful hosting company.";
$_LANG['addons_wordpressthemes'] = "Our Wordpress Themes are extremely feature-rich and perfect for any type of online business. They allow you full control of your website without HTML experience.";
$_LANG['addons_htmltemplates'] = "Our custom developed HTML Templates are clean, easy to edit and fully responsive meaning they support almost all modern devices.";
$_LANG['addons_blestatemplates'] = "Our Blesta Templates are built from scratch including a HTML5 version for your main website and stunning Blesta integration out of the box.";
$_LANG['addons_clientexectemplates'] = "Our Clientexec Templates are built from scratch including a HTML5 version for your main website and stunning Clientexec integration out of the box.";
$_LANG['addons_codescripts'] = "Originally created for our own website we've made all of our custom Scripts available to purchase. You'll find menus, feature boxes & other useful scripts.";
$_LANG['addons_logodesign'] = "Get your business up and running with a custom Logo Design. All of our logos are designed from scratch based on your requirements.";
$_LANG['addons_bannerdesign'] = "We develop banners from scratch based on your requirements. Our banners are suitable for advertising campaigns and useful for your affiliate program.";
$_LANG['addons_whmcsmodules'] = "We've developed a selection of exclusive & easy to use WHMCS Modules. These modules provide added functionality to your WHMCS website.";
$_LANG['addons_whmcsservices'] = "We have a lot of experience working with WHMCS. Our WHMCS Services consist of installation, configuration, integration, Enom account setup & automation.";
$_LANG['addons_wordpressservices'] = "We provide a mix of premium Wordpress Services that you get your Wordpress based website/blog setup properly. These include installation, configuration & integration.";
$_LANG['addons_blestaservices'] = "We provide a mix of premium Blesta Services including installation, configuration & integration.";
$_LANG['addons_clientexecservices'] = "We provide a mix of premium Clientexec Services including installation, configuration & integration.";

// WHMCS Templates page (File: whmcs-templates.tpl, whmcs-templates.php)

$_LANG['addons_whmcstemplates_text'] = "This collection of WHMCS Templates make it easy to get your web hosting business launched with a professional look. These templates are fully responsive, come with an admin based settings area, support multiple display options, support multi-languages &amp; much more.";

// WordPress Themes page (File: wordpress-themes.tpl, wordpress-themes.php)

$_LANG['addons_wordpressthemes_text'] = "This collection of Wordpress Themes have been created as a powerful & feature rich website for your web hosting business. They feature a built-in options panel, admin-based menus, widgets, blog support, an optional automatic WHMCS synchronisation ($50) &amp; much more.";

// HTML Templates page (File: html-templates.tpl, html-templates.php)

$_LANG['addons_htmltemplates_text'] = "A collection of HTML Templates designed for your web hosting reseller business. These templates are professionally coded to be lightning fast, easy to edit (require HTML experience) and come with reliable support. To automate the account provisioning, invoicing & provide account/support functionality these templates also come with optional WHMCS, Blesta, Clientexec & HostBill integration ($30/year) that will automatically sync with the HTML pages.";

// Blesta Templates page (File: blesta-templates.tpl, blesta-templates.php)

$_LANG['addons_blestatemplates_text'] = "These Blesta Templates are designed for your web hosting reseller business. They are feature rich and come with reliable support. Each template also comes with optional Blesta integration ($30/year) that will automatically sync with your HTML pages. Blesta will add the account provisioning, invoicing, checkout & account functionality needed for your business.";

// Clientexec Templates page (File: clientexec-templates.tpl, clientexec-templates.php)

$_LANG['addons_clientexectemplates_text'] = "These Clientexec Templates are designed for your web hosting reseller business. They are feature rich and come with reliable support. Each template also comes with optional Clientexec integration ($30/year) that will automatically sync with your HTML pages. Clientexec will add the account provisioning, invoicing, checkout & account functionality needed for your business.";

// Scripts page (File: code-scripts.tpl, code-scripts.php)

$_LANG['addons_codescripts_text'] = "We've developed a collection of premium Scripts originally for our website but now have decided to make them available to everyone. These scripts will enhance your websites functionality quickly and effectively.";

// Logo Design page (File: logo-design.tpl, logo-design.php)

$_LANG['addons_logodesign_1'] = "We design stunning custom vector logos that are unique to you and your business. All logos we design come in vector and raster format meaning you will be able to use your finished logo in any type of advertising.";
$_LANG['addons_logodesign_2'] = "<strong>Unique design</strong> - All logos are designed from scratch based on your requirements";
$_LANG['addons_logodesign_3'] = "<strong>Vector files</strong> - We include the vector files with all logo designs, vector files are used for print media such as t shirts, magazine advertising etc. This format allows you to scale your logo without it loosing quality";
$_LANG['addons_logodesign_order'] = "Order custom logo design";

// Banner Design page (File: banner-design.tpl, banner-design.php)

$_LANG['addons_bannerdesign_1'] = "We design banners of all sizes for any type of business! We take great care when creating your custom banners to ensure they are help achieve your goal whether that's increased sales or any other goal using enhanced call-to-actions.";
$_LANG['addons_bannerdesign_2'] = "<strong>Any size</strong> - We design banners of any size based on your requirements";
$_LANG['addons_bannerdesign_3'] = "<strong>Custom designed</strong> - Our banners are custom designed based on your requirements, we can also use any art-work you provide whether that's your logo, certain images/icons, your mascot etc";
$_LANG['addons_bannerdesign_order'] = "Order custom banner design";

// WHMCS Modules page (File: whmcs-modules.tpl, whmcs-modules.php)

$_LANG['addons_whmcsmodules_text'] = "We've developed a collection of easy to install WHMCS Modules which are used to add extra functionality to your WHMCS based website.";

// WHMCS Services page (File: whmcs-services.tpl, whmcs-services.php)

$_LANG['addons_whmcsservices_text'] = "A mix of services for the popular web hosting automation software, WHMCS. These WHMCS Services are reliable and provided by a company who has vast experience in the web hosting industry.";
$_LANG['addons_whmcsservices_1_title'] = "WHMCS Security";
$_LANG['addons_whmcsservices_1_desc'] = "There are further steps that can be completed to improve the security of your WHMCS. We have 2 levels of security service including which include a mix of file re-structure, checking for potential and explaining any potential risks on your hosting account and even removing un-used files of WHMCS.";
$_LANG['addons_whmcsservices_1_order'] = "Order WHMCS Security";

$_LANG['addons_whmcsservices_2_title'] = "WHMCS Integration";
$_LANG['addons_whmcsservices_2_desc'] = "This service involves taking your existing website design (whether it's static, Wordpress, Joomla or just about any format) and using the design files to create a matching WHMCS template.";
$_LANG['addons_whmcsservices_2_order'] = "Order WHMCS Integration";

$_LANG['addons_whmcsservices_3_title'] = "WHMCS Configuration";
$_LANG['addons_whmcsservices_3_desc'] = "This service includes all of the configuration required to start selling shared web hosting accounts fully automated allowing you to focus on your business. Whether you're using a reseller hosting account or you have a VPS/dedicated server for your business this service is a quick, easy and reliable.";
$_LANG['addons_whmcsservices_3_order'] = "Order WHMCS Configuration";

$_LANG['addons_whmcsservices_4_title'] = "WHMCS Installation";
$_LANG['addons_whmcsservices_4_desc'] = "We will install the latest WHMCS version on your domain. This service is a quick and easy way to avoid having to install the software yourself. As with all of our services you rest easy knowing that it's carried out properly.";
$_LANG['addons_whmcsservices_4_order'] = "Order WHMCS Installation";

$_LANG['addons_whmcsservices_5_title'] = "WHMCS Upgrade";
$_LANG['addons_whmcsservices_5_desc'] = "This is a complete upgrade service. Not only will we upgrade your WHMCS to the latest version but also ensure that customizations you've made to the language files and custom templates you've created are protected.";
$_LANG['addons_whmcsservices_5_order'] = "Order WHMCS Upgrade";

$_LANG['addons_whmcsservices_6_title'] = "WHMCS Shared Hosting Plan Setup";
$_LANG['addons_whmcsservices_6_desc'] = "Let us setup your web hosting packages for you in WHMCS & WHM. This service includes the setup and configuration of up to 3 cPanel based web hosting plans of your choice. Once finished web hosting accounts will be automatically setup in WHM & WHMCS once your client's payment has been made. Your client will also automatically receive a welcome email containing their login details.<br /><br />Note: This service does not include reseller plans (WHMPHP, Zamfoo etc). Please contact support for prices.";
$_LANG['addons_whmcsservices_6_order'] = "Order WHMCS Shared Hosting Plan Setup";

$_LANG['addons_whmcsservices_7_title'] = "WHMCS Domain Registrar Setup";
$_LANG['addons_whmcsservices_7_desc'] = "This service will allow you to resell domain names on your WHMCS website using a Enom reseller account. The great thing about this is your customers will be able to order, manage and renew domain names on your website without ever seeing Enom branding. Become your own domain registrar today!";
$_LANG['addons_whmcsservices_7_order'] = "Order WHMCS Domain Registrar Setup";

$_LANG['addons_whmcsservices_8_title'] = "WHMCS Move Installation";
$_LANG['addons_whmcsservices_8_desc'] = "We will move WHMCS from one location to another. For example your current install could be domain.com/whmcs and would like it moved to domain.com/clients";
$_LANG['addons_whmcsservices_8_order'] = "Order WHMCS Move Installation";

// WordPress Services page (File: wordpress-services.tpl, wordpress-services.php)

$_LANG['addons_wordpressservices_text'] = "A mix of services for the popular content management system, Wordpress. These Wordpress services are reliable and provided by a company who has over 5 years experience working with Wordpress.";

$_LANG['addons_wordpressservices_1_title'] = "Wordpress Integration";
$_LANG['addons_wordpressservices_1_desc'] = "This service involves taking your existing website design (can be using any software of static) and create a matching Wordpress theme. This service is popular with companies looking to have a matching Wordpress theme to create a company blog.";
$_LANG['addons_wordpressservices_1_order'] = "Order Wordpress Integration";

$_LANG['addons_wordpressservices_2_title'] = "Wordpress Configuration";
$_LANG['addons_wordpressservices_2_desc'] = "While Wordpress is fantastic out of the box there is allot of settings that you can change to increase you websites potential in the search engines (search engine optimization). This service is perfect for someone who is new to Wordpress and would like to have their install setup correctly straight away without the need to research the best settings. To take advantage of this offer you will only need a domain name (e.g mywebsite.com).";
$_LANG['addons_wordpressservices_2_order'] = "Order Wordpress Configuration";

$_LANG['addons_wordpressservices_3_title'] = "Wordpress Installation";
$_LANG['addons_wordpressservices_3_desc'] = "Feed up of uploading files, creating databases for your Wordpress sites? Now you don't have to with our complete Wordpress installation service. We will ensure that Wordpress is installed properly with this easy and affordable service.";
$_LANG['addons_wordpressservices_3_order'] = "Order Wordpress Installation";

// Blesta Services page (File: blesta-services.tpl, blesta-services.php)

$_LANG['addons_blestaservices_text'] = "A mix of services for the popular web hosting provider software, Blesta.";

$_LANG['addons_blestaservices_1_title'] = "Blesta Integration";
$_LANG['addons_blestaservices_1_desc'] = "This service involves taking your existing website design (whether it's static, Wordpress, Joomla or just about any format) and using the design files to create a matching Blesta template.";
$_LANG['addons_blestaservices_1_order'] = "Order Blesta Integration";

$_LANG['addons_blestaservices_2_title'] = "Blesta installation";
$_LANG['addons_blestaservices_2_desc'] = "We will install the latest version of Blesta on your domain at the location of your choice. This service is a low cost and effort free way to have Blesta installed. As with all of our services you can rest easy knowing it's carried out professionally.";
$_LANG['addons_blestaservices_2_order'] = "Order Blesta Installation";

// Clientexec Services page (File: clientexec-services.tpl, clientexec-services.php)

$_LANG['addons_clientexecservices_text'] = "A mix of services for the popular web hosting provider software, Clientexec.";

$_LANG['addons_clientexecservices_1_title'] = "Clientexec Integration";
$_LANG['addons_clientexecservices_1_desc'] = "This service involves taking your existing website design (whether it's static, Wordpress, Joomla or just about any format) and using the design files to create a matching Clientexec template.";
$_LANG['addons_clientexecservices_1_order'] = "Order Clientexec Integration";

$_LANG['addons_clientexecservices_2_title'] = "Clientexec installation";
$_LANG['addons_clientexecservices_2_desc'] = "We will install the latest version of Clientexec on your domain at the location of your choice. This service is a low cost and effort free way to have Clientexec installed. As with all of our services you can rest easy knowing it's carried out professionally.";
$_LANG['addons_clientexecservices_2_order'] = "Order Clientexec Installation";

/*
-----------------------------------------
---------   Terms Of Service page (File: terms-of-service.tpl, terms-of-service.php)   ---------
-----------------------------------------
*/

$_LANG['page_tos'] = "

<p>This Web Hosting Agreement is between Your Company and the person/persons who use our website hosting and domain service. Please read carefully to ensure you understand our terms before purchasing any of our products or services.</p>

<div class=\"bigheader\"><h2>Services</h2></div>

<p>Your Company agrees to provide the services stated for the price agreed at any given time. We do not miss lead customers with hidden costs unlike many other web hosting companies.</p>

<div class=\"bigheader\"><h2>Terms</h2></div>

<p>All customers are responsible for monitoring their storage space and bandwidth transfer each month. Customers who go over the limit of their account will be sent an email with the option to either upgrade their account or reduce store and or storage. If customers continue to go over we will do everything possible to fix the problem. We do hold to right to ban accounts for continuous problems. If customers sign up for an account and cancel it within the first month they will still be charged for the full first month.</p>

<div class=\"bigheader\"><h2>Payments</h2></div>

<p>Renewal notices are emailed three days before the actual renew date in your account. If your using a credit card you will not have to worry about manuel payments. All accounts are set up on a pre-pay basis. If payment is not received within 7 days a $5 fee will be added. Your Company reserves the right to change prices at any time, unless other terms have been agreed upon. Any account not brought current within a week (7 days) of e-mail notice or exceeding this time frame in any way is subject to suspension. YOU are responsible for all fees owed on the account from the time it was established to the time that YOU notifie Your Company to request for termination of services. Although we are based in the UK our websites currency is USD. YOUR particular billing cycle corresponds to the contract length that was initially chosen at setup. YOUR account will automatically renew at this length unless cancelled before hand. There is no fee for cancelled accounts that have been paid for yearly. If you cancell an account on the monthly billing cycle Your Company can not refund any payments made before.</p>

<p>All annual payments are non refundable once the 30 day money back guarantee has passed. The only time your annual plan will end is if your account does not comply with our terms of service/acceptable usage policy. Both monthly and annual payments are non-refundable if your account does not follow our terms of service/acceptable usage policy.</p>

<div class=\"bigheader\"><h2>Cancellation and Early Termination</h2></div>

<p>Customers must acknowledge that the amount of the services bought is based on customers agreement to pay the fee for the initial term or renewal term.</p>

<div class=\"bigheader\"><h2>Server Abuse</h2></div>

<p>Any attempt to undermine or cause harm to a server or customer of Your Company is strictly prohibited.</p>

<p>Your Company will strongly react to any use or attempted use of an Internet account or computer without the owner's authorization. Such attempts include 'Internet scamming' (tricking other people into releasing their passwords), password theft, security hole scanning, etc.</p>

<p>Any unauthorized use of accounts or computers by YOU, whether or not the attacked account or computer belongs to Your Company, will result in action against YOU. Possible actions include warnings, account suspension or cancelation, as well as civil or criminal legal action, depending on the seriousness of the attack.</p>

<p>IMPORTANT NOTE - Your Company has the right to discontinue service, or deny access to anyone who violates our policies or the terms and conditions shown below WITHOUT WARNING or PRIOR NOTICE. No refunds of fees paid will be made if account termination is due to violation of the terms outlined below.</p>

<p>YOU may not run IRC, bots or clients on shared servers. Unacceptable uses also include, but are NOT limited to: Bulk emailing, unsolicited emailing, newsgroup spamming, upload scripts (Rappidleach), pornographic content, illegal content, copyright infringement, trademark infringement, warez sites (including links to/from), cracks, software serial numbers, proxy-relaying, link farming (the act of or by use of scripts), link grinding, link-only sites, spamdexing, FFA (Free-For-All) and/or anything else determined by Your Company to be unacceptable use of our services including abuse of server resources.</p>

<p>WEB APPLICATIONS and WEB ACCESSIBLE SCRIPTS - All web applications that are out-of-date and actively being exploited will be shut down immediately without prior notice. YOU are responsible for and should evaluate YOUR web-based applications and scripts on a regular basis to ensure their security and orderliness.</p>

<p>Shared hosting accounts may also be terminated if it includes the following content or have links to the following content: Providing material that is grossly offensive to the Web community including blatant expressions of bigotry, racism, hatred, or profanity; promoting or providing instructional information about illegal activities; promoting physical harm or injury against any group or individual; displaying material containing obscene nudity or pornographic material (not applicable to managed dedicated servers); displaying material that exploits children under 18-years of age; acts of copyright infringement including offering pirated computer programs or links to such programs; information used to circumvent manufacturer-installed copy-protect devices, including serial or registration numbers for software programs, or any type of cracker utilities.</p>

<div class=\"bigheader\"><h2>Disk Space Abuse</h2></div>

<p>Your Company will be the sole arbiter as to what constitutes a violation of this provision. You are reponsable for monitoring your disk space usage. If you need extra disk space contact one of our staff and they will be happy to help out. You can also upgrade your hosting plan from inside your Your Company client account.</p>

<div class=\"bigheader\"><h2>Bandwidth Abuse</h2></div>

<p>The intention of Your Company is to provide a large bandwidth to transfer web documents, and not an offsite storage area for electronic files. If YOU violate this condition, YOU will be notified and given 48 hours to remedy the problem. Failure to do so will result in YOU being billed for the overages.</p>

<p>Traffic will go unmonitored until YOU reach the amount of quota allocated to YOUR specific PLAN. Your Company will be the sole arbiter as to what constitutes a violation of this provision.</p>

<div class=\"bigheader\"><h2>AUP</h2></div>

<p>Customers agree to use our services under the <a href='acceptable-usage-policy.php'>Acceptable Usage Policy</a> which is here by incorporated with this agreement. Customers agree that Your Company hold the right to change their AUP at any time to meet web hosting standards and laws. Amendments to the AUP are effective on the earlier of Your Company notice to Customer that an amendment has been made, or the first day of any Renewal Term that begins subsequent to the amendment. Customer agrees to cooperate with Your Company reasonable investigation of any suspected violation of the AUP. In the event of a dispute between Your Company and Customer regarding the interpretation of the AUP, Your Company commercially reasonable interpretation of the AUP shall govern.</p>

<div class=\"bigheader\"><h2>Customer Information</h2></div>

<p>Customer represents and warrants to Your Company that the information he, she or it has provided and will provide to Your Company for purposes of establishing and maintaining the service is accurate. If Customer is an individual, Customer represents and warrants to Your Company that he or she is at least 18 years of age. Your Company may rely on the instructions of the person listed as the Primary Customer Contact on the Order with regard to Customer's account until Customer has provided a written notice changing the Primary Customer Contract.</p>

<div class=\"bigheader\"><h2>UNSOLICITED EMAIL &amp; SPAMMING</h2></div>

<p>Unsolicited commercial advertisements ('SPAM') are not allowed in e-mail, and will likely result in account cancelation. Your Company takes a zero-tolerance approach to SPAM originating from its servers or for spam advertising of domains hosted within our network. If found, YOUR account may be deleted.</p>

<p>The following activities are not allowed: SPAM, which includes, but is not limited to, bulk mailing of commercial advertising, informational announcements, charity requests, petitions for signatures, and political or religious tracts (such messages may only be sent to those who have explicitly requested it from your domain); Forging, altering or removing electronic mail headers - any domain sending stealth spam will be terminated without warning and without refund. Sending numerous copies of the same or substantially similar message with the intent to disrupt a server or account ('mail bombing'); Spamming Newsgroups: Commercial advertisements are unwelcome in most Usenet discussion groups and on most e-mail mailing lists. Inappropriate posting may result in account cancelation. See the newsgroup or mailing list's charter for whether advertising is allowed or not. Sending a message to many different off-topic newsgroups, is particularly unethical and will be treated as such; Mail may not be used to harass or intimidate others. Harassment, whether through language, frequency of messages, or size of messages, is prohibited. Sending a single unwelcome message may be considered harassment. If a recipient asks to stop receiving e-mail, YOU must not send that person any further messages.</p>
<p>NOTE - If YOU use the services of another provider to promote a website hosted by or through Your Company ('spamvertising'), then the provisions of the above policy shall apply as if the SPAM were sent through our servers.</p>

<div class=\"bigheader\"><h2>99.99% UPTIME GUARANTEE</h2></div>

<p>(1.) COVERAGE - This 99.99% uptime guarantee applies to any Customer in good financial standing with Your Company at the time of a service outage.</p>

<p>(2.) SERVICE LEVEL AGREEMENT ('SLA') &amp; SPECIFICATIONS - Your Company endeavors to have the content of YOUR website available for http access by any party in the world 99.99% of the time. Network downtime ('unavailability') is defined as 100% packet loss from Your Company to its backbone providers. Downtime is measured past 10 minutes after notification of network failure via Your Company's online ticketing system. If the ticketing system itself is unreachable, the ticket must be started by calling the Your Company NOC.</p>

<p>Your Company's administrators will determine the end of the downtime by a traceroute to YOUR machine from outside the Your Company network.</p>

<p>(3a.) SHARED HOSTING CREDITS - In the event that YOUR website is unavailable for less than 100%, Your Company will credit the following month's service fee as follows. YOUR credit shall be retroactive and measured in 24 hours a day of a calendar month, with the maximum credit not exceeding 50% of the monthly service charge for the affected month.</p>

<p>- 95% to 99.9% - YOUR account will be credited 10% of your monthly hosting fee<br />
- 90% to 94.9% - YOUR account will be credited 20% of your monthly hosting fee<br />
- 89.9% or below - YOUR account will be credited 50% of your monthly hosting fee (3b.)</p>

<p>Credit shall not be provided to YOU in the event that you have any outage resulting from:</p>

<p>- scheduled maintenance as posted from time to time at Your Company,<br />
- your behavior or the performance or failure of your equipment, facilities or applications,<br />
- circumstances beyond Your Company's reasonable control, including, without limitation, acts of any governmental body, war, insurrection, sabotage, embargo, fire, flood, strike or other labor disturbance, interruption of or delay in transportation, unavailability of interruption or delay in telecommunications or third party services, including DNS propagation, domain name registration/transfer, failure of third party software or hardware or inability to obtain raw materials, supplies, or power used in or equipment needed for provision of your web site,<br />
- YOU breaking any agreement policy in Your Company's 'Terms &amp; Conditions and AUP' causing a machine to fail as a result.</p>

<div class=\"bigheader\"><h2>TECHNICAL SUPPORT BOUNDARIES</h2></div>

<p>Your Company provides technical support for YOU that encompasses within our area of expertise only. Such expertise includes assistance, troubleshooting, and debugging of our cPanel control panel interface, servers within our immediate responsibility and any other hosting related issues.</p>

<p>Unlike many hosting companies We do our best to help with scripts, templates and programing languages. However, under no circumstances is Your Company obligated to help YOU in the installations of new application modules, templates and/or programming languages, nor in providing assistance for any errors produced by any applications that have been modified by YOU previously.</p>

<div class=\"bigheader\"><h2>CGI SCRIPTS</h2></div>

<p>Each shared web hosting account comes with its own CGI-BIN. YOU are free to use any CGI scripts YOU wish, however we reserve the rights to disable any CGI script that effects normal shared server operation without prior notice.</p>

<div class=\"bigheader\"><h2>Indemnification</h2></div>

<p>Customer agrees to indemnify and hold harmless Your Company, Your Company's affiliates, and each of their respective officers, directors, agents, and employees from and against any and all claims, demands, liabilities, obligations, losses, damages, penalties, fines, punitive damages, amounts in interest, expenses and disbursements of any kind and nature whatsoever (including reasonable attorneys fees) brought by a third party under any theory of legal liability arising out of or related to the actual or alleged use of Customer's services in violation of applicable law or the AUP by Customer or any person using Customer's log on information, regardless of whether such person has been authorized to use the services by Customer.</p>

<p>YOU AGREE TO DEFEND,INDEMNIFY AND HOLD HARMLESS Your Company AGAINST LIABILITIES ARISING OF:</p>

<p>(1) ANY INJURY TO PERSON OR PROPERTY CAUSED BY ANY PRODUCTS SOLD OR OTHERWISE DISTRIBUTED IN CONNECTION WITH Your Company'S SERVER.<br />
(2) ANY MATERIAL SUPPLIED BY THE CUSTOMER INFRINGING OR ALLEGEDLY INFRINGING ON THE PROPRIETARY RIGHTS OF A THIRD PARTY<br />
(3) COPYRIGHT INFRINGEMENT AND<br />
(4) ANY DEFECTIVE PRODUCTS SOLD TO CUSTOMER FROM Your Company'S SERVER.</p>

<div class=\"bigheader\"><h2>Disclaimer of Warranties</h2></div>

<p>Your Company does not warrant or represent that the services will be uninterrupted, error free, or completely secure. To the extent permitted by applicable law Your Company disclaims any and all warranties including the implied warranties or merchantability, fitness for a particular purpose and non-infringement. To the extent permitted by applicable law all services are provided on an &quot;As Is&quot; basis.</p>

<div class=\"bigheader\"><h2>Limitation of Damages</h2></div>

<p>Neither party shall be liable to the other for any lost profits or any indirect, special incidental, consequential or punitive loss or damage of any kind, or for damages that could have been avoided by the use of reasonable diligence, arising in connection with the agreement, even if the party has been advised or should be aware of the possibility of such damages.</p>

<p>Notwithstanding anything else in the agreement to the contrary, the maximum aggregate liability of Your Company and any of its employees, agents or affiliates, under any theory of the law (including breach of contract, tort, strict liability and infringement) shall  be a payment of money not to exceed the amount payable by customer for the three months service.</p>

<div class=\"bigheader\"><h2>Suspension of Services/Termination</h2></div>

<p>Customer agrees that Your Company may suspend services to Customer without notice and without liability if: (i) Your Company reasonably believes that the services are being used in violation of the AUP; (ii) Customer fails to cooperate with any reasonable investigation of any suspected violation of the AUP; (iii) Your Company reasonably believes that the suspension of service is necessary to protect its network or its other customers, or (iv) as requested by a law enforcement or regulatory agency. Customer shall pay Your Company reasonable reinstatement fee if service is Your Company following a suspension of service under this subsection.</p>

<p>The Agreement may be terminated by Customer prior to the expiration of the Initial Term or any Renewal Term without further notice and without liability if Your Company fails in a material way to provide the service in accordance with the terms of the Agreement and does not cure the failure within ten (10) days of Customer's written notice describing the failure in reasonable detail. The Agreement may be terminated by Your Company prior to the expiration of the Initial Term or any Renewal Term without further notice and without liability as follows: (i) upon five (5) days notice if Customer is overdue on the payment of any amount due under the Agreement; (ii) Customer materially violates any other provision of the Agreement, including the AUP, and fails to cure the violation within thirty (30) days of a written notice from Your Company describing the violation in reasonable detail; (iii) upon one (1) days notice if Customer's Service is used in violation of a material term of the AUP more than once, or (iv) upon one (1) days notice if Customer violates Section 5 (Customer Information) of this Agreement. Either party may terminate this agreement upon five (5) days advance notice if the other party admits insolvency, makes an assignment for the benefit of its creditors, files for bankruptcy or similar protection, is unable to pay debts as they become due, has a trustee or receiver appointed over all or a substantial portion of its assets, or enters into an agreement for the extension or readjustment of all or substantially all of its obligations.</p>

<p>If you break our terms of service/acceptable usage policy we hold the right to cancel any services. We will never cancel any services without trying our best to resolve the problem with you. However in extreme cases such as an account containing child pornography we hold the right to cancel services without any prior warning. We do not refund any accounts breaking our terms of service/acceptable usage policy. For example if we cancel your hosting account during your first month for breaching copyright, we will not refund you for the first month. This is to prevent people signing up for our services with the intention of breaching our terms.</p>

<div class=\"bigheader\"><h2>Request For Customer Information</h2></div>

<p>Customer agrees that Your Company may, without notice to Customer, (i) report to the appropriate authorities any conduct by Customer or any of Customer's customers or end users that Your Company believes violates applicable law, and (ii) provide any information that it has about Customer or any of its customers or end users in response to a formal or informal request from a law enforcement or regulatory agency or in response to a formal request in a civil action that on its face meets the requirements for such a request.</p>

<div class=\"bigheader\"><h2>Back Up Copy</h2></div>

<p>Customer agrees to maintain a current copy of all content hosted by Your Company not with standing any agreement by Your Company to provide back up services.</p>

<div class=\"bigheader\"><h2>Request For Restore Of Hosting Package</h2></div>

<p>During any service term, customer may request up to one free restore for any reason of choice. If a customer should need to request a restore after this a $5 one time fee will be enforced.</p>

<div class=\"bigheader\"><h2>Changes To Your Company's Network</h2></div>

<p>Upgrades and other changes in Your Company's network, including, but not limited to changes in its software, hardware, and service providers, may affect the display or operation of Customer's hosted content and/or applications. Your Company reserves the right to change its network in its commercially reasonable discretion, and Your Company shall not be liable for any resulting harm to Customer.</p>

<div class=\"bigheader\"><h2>Notices</h2></div>

<p>Notices to Your Company under the Agreement shall be given via electronic mail to the e-mail address posted for customer support. Notices to Customer shall be given via electronic mail to the individual listed as the Primary Customer Contact on the Order. Notices are deemed received on the day transmitted, or if that day is not a business day, on the first business day following the day delivered. Customer may change his, her or its notice address by a notice given in accordance with this Section.</p>

<div class=\"bigheader\"><h2>Force Majored</h2></div>

<p>Your Company shall not be in default of any obligation under the Agreement if the failure to perform the obligation is due to any event beyond Your Company's control, including, without limitation, significant failure of a portion of the power grid, significant failure of the Internet, natural disaster, war, riot, insurrection, epidemic, strikes or other organized labour action, terrorist activity, or other events of a magnitude or type for which precautions are not generally taken in the industry.</p>

<div class=\"bigheader\"><h2>Governing/Law Disputes</h2></div>

<p>The Agreement shall be governed by the laws of the State of Virginia, exclusive of its choice of law principles, and the laws of the United States of America, as applicable. The Agreement shall not be governed by the United Nations Convention on the International Sale of Goods.</p>

<div class=\"bigheader\"><h2>Miscellaneous</h2></div>

<p>Each party acknowledges and agrees that the other party retains exclusive ownership and rights in its trademarks, service marks, trade secrets, inventions, copyrights, and other intellectual property. Neither party may use the other party's name or trade mark without the other party's prior written consent. The parties intend for their relationship to be that of independent contractors and not a partnership, joint venture, or employer/employee. Neither party will represent itself to be agent of the other. Each party acknowledges that it has no power or authority to bind the other on any agreement and that it will not represent to any person that it has such power or authority. This Agreement may be amended only by a formal written agreement signed by both parties. The terms on Customer's purchase order or other business forms are not binding on Your Company unless they are expressly incorporated into a formal written agreement signed by both parties. A party's failure or delay in enforcing any provision of the Agreement will not be deemed a waiver of that party's rights with respect to that provision or any other provision of the Agreement. A party's waiver of any of its right under the Agreement is not a waiver of any of its other rights with respect to a prior, contemporaneous or future occurrence, whether similar in nature or not. The captions in the Agreement are not part of the Agreement, but are for the convenience of the parties. The following provisions will survive expiration or termination of the Agreement: Fees, indemnity obligations, provisions limiting liability and disclaiming warranties, provisions regarding ownership of intellectual property, these miscellaneous provisions, and other provisions that by their nature are intended to survive termination of the Agreement. There are no third party beneficiaries to the Agreement. Neither insurers nor the customers of resellers are third party beneficiaries to the Agreement. Customer may not transfer the Agreement without Your Company's prior written consent. Your Company's approval for assignment is contingent on the assignee meeting Your Company's credit approval criteria. Your Company may assign the Agreement in whole or in part. This Agreement together with the Order and AUP constitutes the complete and exclusive agreement between the parties regarding its subject matter and supersedes and replace any prior understanding or communication, written or oral.</p>

<div class=\"bigheader\"><h2>Copyright Files</h2></div>

<p>All files stored on Your Company's servers must be legally-owned and be accompanied with a valid license and/or copyright. This include and is not limiting to MP3, AVI, MID, MIDI, MPG, MPEG, MOV, EXE, ISO. Should we discover any unlicensed and/or illegal files within YOUR account, the files will be subjected to deletion.</p>

<div class=\"bigheader\"><h2>CANCELATION OF SERVICE</h2></div>

<p>Your Company reserves the right to cancel a service at any time. All fees paid in advance of cancellation will be pro-rated and paid by Your Company if we institutes our right of cancelation. Any violation of policies which results in extra costs billed to YOU.</p>

<div class=\"bigheader\"><h2>PROMOTIONAL RATES &amp; SPECIAL OFFERS</h2></div>

<p>Your Company may offer subsequent promotional rates or special offers, the terms of which may or may not be more favorable than the terms and conditions for YOUR Services. Any such promotions or modifications shall not effect YOUR obligations under this Agreement. Promotional fees may be subject to additional terms and conditions which, to the extent they conflict with the terms of this Agreement, shall govern. Different promotional fees and special offers may not be combined together.</p>

<p>We have various special promotions that include a domain name. The cost of this domain name is usually covered by the first month's payment. As a result of this our promotions are not refundable and are not covered by our 30-day money back guarantee.</p>

<div class=\"bigheader\"><h2>INTELLECTUAL PROPERTY RIGHTS</h2></div>

<p>Material accessible to you through Your Company's services may be subject to protection under the United States or other copyright laws, or laws protecting trademarks, trade secrets and proprietary information. Except when expressly permitted by the owner of such rights, YOU must not use Your Company or its servers and network in a manner that would infringe, violate, dilute or misappropriate any such rights, with respect to any material that you access or receive through the Your Company network. If YOU use a domain name in connection with Your Company or similar service, YOU must not use that domain name in violation of any trademark, service mark, or similar rights of any third party.</p>

<div class=\"bigheader\"><h2>NETWORK SECURITY</h2></div>

<p>Customers may not use the Your Company network with an attempt to circumvent user authentication or security of any host, network, or account. This includes, but is not limited to, accessing data not intended for YOU, logging into a server or account YOU are not expressly authorized to access, password cracking, probing the security of other networks in search of weakness, or violation of any other organization's security policy. YOU may not attempt to interfere or deny service to any user, host, or network. This includes, but is not limited to, flooding, mail bombing, or other deliberate attempts to overload or crash a host or network. Your Company will cooperate fully with investigations for violations of systems or network security at other sites, including cooperating with law enforcement authorities in the investigation of suspected criminal violations. Users who violate system or network security may incur criminal or civil liability.</p>

<div class=\"bigheader\"><h2>ELECTRONIC COMMERCE</h2></div>

<p>YOU will be solely responsible for the development, operation and maintenance of YOUR online store and products along with all content and materials appearing online or on YOUR products, including without limitation:</p>

<p>(a.) the accuracy and appropriateness of content and materials appearing within the store or related to YOUR products,<br />(b.) ensuring that the content and materials appearing within the store or related to YOUR products do not violate or infringe upon the rights of any third party, and<br />(c.) ensuring that the content and materials appearing within the store or related to YOUR products are not libelous or otherwise illegal. YOU will be solely responsible for the final calculation and application of shipping and sales tax. YOU will also be solely responsible for accepting, processing, and filling any customer orders, and for handling any customer inquiries or complaints arising there from.</p>

<p>YOU are also responsible for the security of any customer credit card numbers and related customer information YOU may access as a result of conducting electronic commerce transactions through YOUR website. YOU will keep all such information confidential and will use the same degree of care and security as YOU use with your confidential information.</p>

<div class=\"bigheader\"><h2>STATIC &amp; DYNAMIC CONTENT CACHING</h2></div>

<p>YOU expressly</p>

<p>(i) grant to Your Company a license to cache the entirety of YOUR website, including content supplied by third parties, hosted by Your Company under this Agreement and<br />(ii) agree that such caching is not an infringement of any of YOUR intellectual property rights or any third party's intellectual property rights.</p>

<div class=\"bigheader\"><h2>IP ADDRESS OWNERSHIP</h2></div>

<p>Your Company shall maintain and control ownership of all IP numbers and addresses that may be assigned to YOU by Your Company. Your Company reserves, in its sole discretion, the right to change or remove any and all such IP numbers and addresses.</p>

<div class=\"bigheader\"><h2>DOMAIN NAME REGISTRATION</h2></div>

<p>YOU agree to pay Your Company prior to the effectiveness of the desired domain name registration, the then-current amount set forth in the Your Company price schedule for the initial registration of the domain name and, should YOU choose to renew the registration, subsequent renewals of the registration. All fees are non-refundable, in whole or in part, even if YOUR domain name registration is suspended, canceled or transferred prior to the end of YOUR then current registration term. Your Company reserves the right to change fees, surcharges, renewal fees or to institute new fees at any time, for any reason, at its sole discretion. YOUR requested domain name will not be registered unless and until we receive actual payment of the registration fee, and have confirmed YOUR registration in an email from Your Company to the email address indicated in YOUR registration application. In the event of a chargeback by a credit card company (or similar action by another payment provider allowed by Your Company) in connection with the payments of the registration fee for YOUR domain name registration, YOU agrees and acknowledges that the domain name registration shall be transferred to Your Company as the paying entity for that registration to the registry and that we reserve all rights regarding such domain name including, without limitation, the right to make the domain name available to other parties for purchase. Your Company will reinstate YOUR domain name registration solely at Your Company's discretion, and subject to our receipt of the initial registration or renewal fee and our then-current reinstatement fee.</p>

<p>Transfer domain registrar to Your Company</p>

<p>YOU agree to pay Your Company prior to the effectiveness of the desired domain name transfer request, the then-current amount set forth in the Your Company price schedule for the initial transfer request of the domain name. YOU agree and acknowledge that the domain name transfer will fail, and all fees are non-refundable, for the following reasons, but not limited to:</p>

<p>- No response from the Registered Name Holder or Administrative Contact<br />
- Domain name in Registrar Lock Status<br />
- Domain name registration period time expires or other constraints, other than during the first 60 days of initial registration or during the first 60 days after a registrar transfer</p>

<p>Your Company reserves the right to change fees, surcharges, renewal fees or to institute new fees at any time, for any reason, at its sole discretion. YOUR requested domain name will not be registered unless and until we receive actual payment of the registration fee, and have confirmed YOUR registration in an email from Your Company to the email address indicated in YOUR registration application. In the event of a chargeback by a credit card company (or similar action by another payment provider allowed by Your Company) in connection with the payments of the registration fee for YOUR domain name registration, YOU agrees and acknowledges that the domain name registration shall be transferred to Your Company as the paying entity for that registration to the registry and that we reserve all rights regarding such domain name including, without limitation, the right to make the domain name available to other parties for purchase. Your Company will reinstate YOUR domain name registration solely at Your Company discretion, and subject to our receipt of the initial registration or renewal fee and our then-current reinstatement fee.</p>

<p>Transfer domain away from Your Company</p>

<p>Your Company reserves all rights, without limitation, to reject the domain name transfer request for the following reasons, but not limited to:</p>

<p>- No response from the Registered Name Holder or Administrative Contact<br />
- Domain name in Registrar Lock Status and there is no request from Registered Name Holder or Administrative Contact for the status change<br />- Domain name registration period time will be expiring in less than 60 days or other constraints, other than during the first 60 days of initial registration or during the first 60 days after a registrar transfer</p>

<p>YOU agree and acknowledge that the failure or success of a domain name transfer will be his/her sole responsibility, and Your Company will not be held liable for the failure of a domain name transfer for any reason.</p>

<p>Domain registrations are non-refundable. Please do not purchase the domain name until you are certain that it is exactly what you would like to buy.</p>

<div class=\"bigheader\"><h2>LAWFUL PURPOSE</h2></div>

<p>Your Company reserves the right to refuse service to anyone. YOU may only use Your Company server for lawful purposes and our services may not be used for illegal purposes or in support of illegal activities. We reserve the right to cooperate with legal authorities and/or injured third parties in the investigation of any suspected crime or civil wrongdoing. If anything is not legal in the United States of America, it is not permitted to reside on our servers. Transmission, distribution or storage of any material in violation of any applicable law or regulation is prohibited. This includes but not limiting material protected by copyright, trademark, trade secret or other intellectual property right used without proper authorization, and material that is obscene, defamatory, constitutes an illegal threat, or violates export control laws. Examples of non-acceptable content or links: 'Pirated Warez', OGG, AVI, MPEG, ISO, 'Hacker programs or archives', 'Copyrighted Digital Movie Copies (DIVX)' and 'Unlicensed MP3'. The designation of any materials as such described above is left entirely to the discretion of Your Company management.</p>

<p>If illegal content or usage is found, the account will be suspended and/or terminated. YOU agree that Your Company may disclose any and all YOUR information including assigned IP numbers, account history, account use, etc. to any law enforcement agent who makes a written request without further consent or notification.</p>

<p>Regardless of the place of signing this agreement, YOU agree that for purposes of venue this contract is entered in Fremont, California, and any dispute will be litigated or arbitrated in Fremont, California. Defendants further waive all objections to venue and acknowledge that venue in any such litigation will be held in Fremont courts. IN NO EVENT SHALL Your Company'S MAXIMUM LIABILITY EXCEED FIVE HUNDRED ($500.00) DOLLARS.</p>

<div class=\"bigheader\"><h2>PRIVACY STATEMENT</h2></div>

<p>Your Company follows the strict guidelines of our customer privacy statement. Please make sure you understand this statement fully.</p>

";

/*
-----------------------------------------
---------   Acceptable Usage Policy page (File: acceptable-usage-policy.tpl, acceptable-usage-policy.php)   ---------
-----------------------------------------
*/

$_LANG['page_usage'] = "

<p>This AUP governs the use of Your Company&#39;s web hosting service. Violation of this AUP may result in suspension or termination of your service. In the event of a dispute between you and Your Company regarding the interpretation of this AUP, Your Company's interpretation, in its reasonable commercial judgment, shall govern.</p>

<p>The following is the entire Acceptable User Policy ('AUP') agreement between Your Company and the personal or corporate account holder. Your Company provides World Wide Web Hosting, web design and script installation. Your Company has certain legal and ethical responsibilities consisting with the use of its servers and equipment involved in these services. Your Company's general policy is to act as a provider of Internet presence. Your Company reserves the rights to suspend or cancel a customer's access to any or all services provided by Your Company when we decide that the account has been inappropriately used.</p>

<div class=\"bigheader\"><h2>What is Appropriate Usage?</h2></div>

<p>Your Company is designed to serve the web hosting needs of small, independently owned and operated businesses in a single country. It is not appropriate to use our services to support large enterprises or internationally based businesses with a sustained demand that places undue burden on our systems or negatively impacts use by small, independently owned and operated businesses.</p>

<p>Your Company is a shared web hosting service, which means that a number of customers' web sites and other email or storage services are hosted from the same server. Your Company uses abuse controls to help ensure that use of our services does not adversely affect the performance of our system or other customers' sites. It is not appropriate to use an account primarily as an online storage space or for archiving electronic files.</p>

<div class=\"bigheader\"><h2>Disk Space</h2></div>

<p>If you use your services consistently with the <a href=\"terms-of-service.php\">terms of Service</a> and these paragraphs, your site can grow as large as necessary to meet your small business needs, but to ensure a great experience for all, we will place some constraints on how fast you can grow. The vast majority of our customers' sites grow at rates well within our rules, but our abuse controls may cause a brief delay while we evaluate if expansion is appropriate for your particular plan.</p>

<p>Your Company Customers may not initiate the following (below), if any customer does Your Company may terminate the account with no refund. Depending on the situation there will/won't be warnings sent.<br />
a) Use 25% or more of system CPU resources for longer then 90 seconds or 1% of the servers CPU resources for longer than 5 minutes. There are numerous activities that could cause such problems; these include: CGI scripts, FTP, PHP, HTTP, etc.<br />
b) Use of any kind of distributed computing software, including but not limited to SETI@home, Node Zero and Folding@home.<br />
c) Run any type of interactive real-time chat applications that require server resources. Remotely-hosted services are fully allowed.<br />
d) Run stand-alone, unattended server-side processes at any point in time on the server. This includes any and all daemons.<br />
e) Run any software that interfaces with an IRC (Internet Relay Chat) network.<br />
f) Run any file sharing, bit torrent or other P2P network services, client or server software.<br />
g) Run any gaming servers such as counter-strike, half-life, battlefield 1492 etc</p>

<div class=\"bigheader\"><h2>Bandwidth</h2></div>

<p>In most cases, if you use our services consistently with our <a href=\"terms-of-service.php\">terms of Service</a>, visitors to your web site will be able to download and view as much content from your site as they like. However, in certain circumstances, our server processing power, server memory, or abuse controls could limit downloads from your site. You will always be able to use as much bandwidth as your account has. For example our Enterprise Plan comes with 40GB bandwidth which is a huge amount, all of this 40GB can be used. Bandwidth is also reset every month.</p>

<p>You are allocated a monthly bandwidth allowance. This allowance varies depending on the hosting package you purchase. Should your account pass the allocated amount we reserve the right to suspend the account until the start of the next allocation, suspend the account until more bandwidth is purchased at an additional fee, suspend the account until you upgrade to a higher level of package, terminate the account and/or charge you an additional fee for the overages. Unused transfer in one month cannot be carried over to the next month.</p>

<div class=\"bigheader\"><h2>Email Storage</h2></div>

<p>You do not have to worry about hitting a storage limit if you use our services consistently with the <A href=\"terms-of-service.php\">terms of Service</a> and our acceptable usage policy. Your Company will increase your space along with your appropriate small business needs, but our abuse controls may impact the rate of growth or your folder size, and there may be a short delay while we assess your usage. In some cases, creating additional folders or subfolders will help ensure that the system works well for everyone. You will always be allowed to use as much disk space is applied to your account.</p>

<div class=\"bigheader\"><h2>Unlimited</h2></div>

<p>You may have noticed all of our accounts come with unlimited email accounts, sub-domains, FTP accounts and in some cases domains. This is subject to how much disk space your account has. So you can create as many emails, sub-domains etc as you want as long as it's within your disk space limit.</p>

<div class=\"bigheader\"><h2>Offensive Content</h2></div>

<p>You may not publish or transmit via Your Company's service any content that Your Company reasonably believes:<br />
a) constitutes child pornography;<br /> 
b) constitutes pornography;<br />
c) is excessively violent, incites violence, threatens violence, or contains harassing content or hate speech;<br /> 
d) is unfair or deceptive under the consumer protection laws of any jurisdiction, including chain letters and pyramid schemes;<br /> 
e) is defamatory or violates a person's privacy;<br /> 
f) creates a risk to a person's safety or health, creates a risk to public safety or health, compromises national security, or interferes with a investigation by law enforcement;<br />
g) improperly exposes trade secrets or other confidential or proprietary information of another person;<br /> 
h) is intended to assist others in defeating technical copyright protections;<br />
i) clearly infringes on another person's trade or service mark, patent, or other property right;<br />
j) promotes illegal drugs, violates export control laws, relates to illegal gambling, or illegal arms trafficking;<br />
k) is otherwise illegal or solicits conduct that is illegal under laws applicable to you or to Your Company;<br />
l) is otherwise malicious, fraudulent, or may result in retaliation against Your Company by offended viewers;</p>

<p>Your Company does not accept material such as:<br />
a) Proxy, Warez, Escrow, High Yield Investment Programs (HYIP), illegal Gambling and Lottery sites.<br />
b )Content 'published or transmitted' via Your Company's service includes Web content, e-mail, bulletin board postings, chat, and any other type of posting or transmission that relies on any Internet service provided by Your Company.<br /> 
* Your Company can terminate service for any of the above reasons and it's at Your Company's sole discretion to issue a refund</p>

<div class=\"bigheader\"><h2>Security</h2></div>

<p>You must take reasonable security precautions. You must protect the confidentiality of your password, and you should change your password periodically.</p>

<div class=\"bigheader\"><h2>Bulk Comercial Email</h2></div>

<p>Bulk commercial email, mailing lists and email reflectors are allowed on Your Company's servers, we do however allow a maximum of 500 emails per hour per account. For any emails sent from your Your Company account you must adhere to the following rules:</p>

<p>a) Your intended recipients have given their consent to receive e-mail via some affirmative means, such as an opt-in procedure;<br />b) Your procedures for soliciting consent include reasonable means to ensure that the person giving consent is the owner of the e-mail address for which the consent is given;<br />c) You may not obscure the source of your e-mail in any manner.<br />
d) You otherwise comply with the CAN SPAM Act and other applicable law.</p>

<p>These policies apply to messages sent using your Your Company service, or to messages sent from any network by you or any person on your behalf that directly or indirectly refer the recipient to a site hosted via your Your Company service. In addition, you may not use a third party e-mail service that does not practice similar procedures for all its customers.</p>

<div class=\"bigheader\"><h2>Unsolicited E-Mail</h2></div>

<p>You may not send any unsolicited e-mail, either in bulk or individually, to any person who has indicated that they do not wish to receive it. You must comply with the rules of any other network you access or participate in using your Your Company's services.</p>

<div class=\"bigheader\"><h2>Material Protected By Copyright</h2></div>

<p>You may not publish, distribute, or otherwise copy in any manner any music, software, art, or other work protected by copyright law unless:<br />
a) you have been expressly authorized by the owner of the copyright for the work to copy the work in that manner.<br />
b) you are otherwise permitted by established United States copyright law to copy the work in that manner.</p>

<p>Your Company will terminate the service of repeat copyright infringers.</p>

<div class=\"bigheader\"><h2>Other</h2></div>

<p>You must have valid and current information on file with your domain name registrar for any domain hosted on the Your Company network.</p>

<div class=\"bigheader\"><h2>Disclaimer</h2></div>

<p>Your Company is under no duty, and does not by this AUP undertake a duty, to monitor or police our customers' activities and disclaims any responsibility for any misuse of the Your Company network.</p>

<div class=\"bigheader\"><h2>Internet Abuse</h2></div>

<p>You may not engage in illegal, abusive, or irresponsible behavior, including:</p>

<p>a) Unauthorized access to or use of data, systems or networks, including any attempt to probe, scan or test the vulnerability of a system or network or to breach security or authentication measures (including those belonging to Your Company and its customers) without express authorization of the owner of the system or network;<br />
b) monitoring data or traffic on any network or system without the authorization of the owner of the system or network;<br />
c) Interference with service to any user, host or network including, without limitation, mail bombing, flooding, deliberate attempts to overload a system and broadcast attacks;<br />
d) Use of an Internet account or computer without the owner's authorization, including, but not limited to Internet scanning (tricking other people into releasing their passwords), password robbery, security hole scanning, and port scanning;<br />
e) Forging of any TCP-IP packet header or any part of the header information in an e-mail or a newsgroup posting; or<br />
f) Any conduct that is likely to result in retaliation against the Your Company network.<br />
g) Use of Your Company's network in a way that unreasonably interferes with Your Company's other customers use of the network</p>

<div class=\"bigheader\"><h2>Newsgroup, Chat Forums, Other Networks</h2></div>

<p>You must comply with the rules and conventions for postings to any bulletin board, chat group or other forum in which you participate, such as IRC and USENET groups including their rules for content and commercial postings. These groups usually prohibit the posting of off-topic commercial messages, or mass postings to multiple forums.</p>

";

/*
-----------------------------------------
---------   Privacy Policy page (File: privacy-policy.tpl, privacy-policy.php)   ---------
-----------------------------------------
*/

$_LANG['page_privacy'] = "

<p>Your privacy is very important to us, below explains the information we collect from you, what we do with that information and our information security policy.</p>

<div class=\"bigheader\"><h2>Your Information</h2></div>

<p>When you sign up for any of our services we will ask you to provide contact information for your convenience as well as legal reasons. This will include name, home address, e-mail addresses and payment details (credit or debit card and PayPal). If you need support our staff may need to know information to solve the problem such as operating system, browser software and editing software. When you visit this website we do record certain information using Google Analytics such as your location, browser version, ip address, screen resolution, operating system and flash support. This is so we can continue to provide the most convenient web site for all our visitors. Our website is protected by a Secure Sockets Layer (SSL) and verified by Equifax. This helps prevent eavesdropping on our website, just look for the padlock.</p>

<div class=\"bigheader\"><h2>How Your Information Is Used</h2></div>

<p>We will use your personal identifiable information in the following ways.</p>

<p>- For payment purposes and to provide convenient and targeted support.<br />
- To contact you and announce special offers, general announcements and news. Please note you can opt out of receiving these emails at anytime by following the instructions at the bottom of the e-mail.<br />
- To improve our service and the marketing of our service. This could include using your demographic location to improve targeting of our website and customise your visit.</p>

<p>We will <strong>NEVER</strong> provide your personally identifiable information to any persons other than A law enforcement or regulatory agency at their request, third parties who provide services on our behalf such as payment processing, only if they agree not to miss use this information.</p>

<p><strong>We do not under any circumstances apart from the above give away or sell your information to any third parties.</strong></p>

<p>Your personal information is <strong>safe with us</strong>, your information is safely encrypted using SSI. Our service is not available to anyone under the age of 13, never will we intentionally maintain information about anyone under the age of 13.</p>

<div class=\"bigheader\"><h2>Cookies</h2></div>

<p>A cookie is a small text file that is stored on a users computer for record-keeping purposes. We use cookies on this site. We do not link the information we store in cookies to any personally identifiable information you submit while on our site. We use both session ID cookies and persistent cookies. We use session cookies to make it easier for you to navigate our site. A session ID cookie expires when you close you browser. A persistent cookie remains on your hard drive for an extended period of time much like the cookie used for our affiliate program. You can remove persistent cookies by following directions provided in your Internet browsers &#39;help&#39; file. We set a persistent cookie to store your passwords, so you do not have to enter it more than once. Persistent cookies also enable us to track and target the interests of our users to enhance the experience on our site. If you reject cookies, you may still use our site, but you will be asked to enter your username and password again every time you closed your browser or your session has timed out.</p>

<div class=\"bigheader\"><h2>Log Files</h2></div>

<p>As is true of most Web sites, we gather certain information automatically and store it in log files. This information includes Internet protocol (IP) addresses, browser type, internet service provider (ISP), referring/exit pages, operating system, date/time stamp, and clickstream data. We use this information, which does not identify individual users, to analyze trends, to administer the site, to track users movements around the site and to gather demographic information about our user base as a whole. We do not link this automatically-collected data to personally identifiable information. IP addresses are tied to personally identifiable information to prevent and block abusers to keep using our services such as members who violates our terms of service. We use a third-party tracking service that uses cookies and log files to track non-personally identifiable information about visitors to our site in the aggregate of usage and volume statistics to determine how our users navigate through our website and to know how many users are using our services demographically. We use the information you provide about yourself or others to complete the transaction for which it is intended. This may include administering a service such as registration, email, forum, etc., or contacting you if you have indicated your permission to do so by agreeing to accept further notification and service announcement from us on your member profile page. You can choose to opt-out from receiving any further notification from your member profile page. We do not share this information with outside parties.</p>

<div class=\"bigheader\"><h2>Surveys</h2></div>

<p>Upon using our free services, you may be requested to participate in our periodic internal surveys that are conducted by Your Company to determine your personal interests. These surveys are strictly voluntary. The data collected through these surveys will only be used to improve our products and services and will never be sold to any third parties.</p>

<div class=\"bigheader\"><h2>Communications From The Site</h2></div>

<p>When we receive email, we use return email addresses to reply with the information requested. Such addresses are not used for any other purpose and are not shared with outside parties. When supplying contact information to Your Company you can indicate your preference if you would like to be contacted to receive information and updates about our services by logging in to your Your Company account, going to your member profile page and choose not to receive any further notification emails from us or other information pertaining to Your Company. Information you submit to us will not be used for this purpose unless you indicate this as your preference. When supplying contact information to Your Company you can indicate your preference on your members profile page to participate in the Your Company newsletter. You will receive a confirmation email from us when placing an order on our site and paying through PayPal.</p>

<div class=\"bigheader\"><h2>Newsletter</h2></div>

<p>We provide you the opportunity to &#39;opt-in&#39; and &#39;opt-out&#39; of our newsletter at any time. Our newsletter is sent every month so it will certainly contain allot of useful information and any offers we may have. If you no longer wish to receive our newsletter and promotional communications, you may opt-out of receiving them at any time.</p>

<div class=\"bigheader\"><h2>Information Sharing and Disclosure</h2></div>

<p>We collect information from our website visitors using <a href='http://www.google.com/analytics/' target='_blank'>Google Analytics</a>. We use this information to better design our Web site and services. This information is never shared with any third party. We do not link aggregate user data with personally identifiable information.</p>

<div class=\"bigheader\"><h2>Personally Identifiable Information</h2></div>

<p>Your Company does not share, sell, rent, or trade personally identifiable information with third parties. We never use or share the personally identifiable information provided to us online in ways unrelated to the ones described within this privacy policy without also providing you an opportunity to opt-out or otherwise prohibit such unrelated uses.</p>

<div class=\"bigheader\"><h2>How You Can Access /Correct Your Information</h2></div>

<p>You can access all your personally identifiable information that we collect by logging into your password-protected Your Company account and selecting to update your &#39;My Details&#39; We use this procedure to better safeguard your information. You can also correct factual errors in your personally identifiable information by sending us a request that credibly shows error. To protect your privacy and security, we will also take reasonable steps to verify your identity before granting access or making corrections.</p>

<div class=\"bigheader\"><h2>Specific Terms and Conditions</h2></div>

<p>Your Company considers email transmitted via our service to be the private correspondence between the sender and recipient. We will not monitor, edit or disclose the contents of a user`s private communications, except as required by law, to comply with legal process, if necessary to enforce the Service Agreement, to respond to claims that such contents violate the rights of third-parties, or to protect the rights or property of Your Company. By using the service you agree that technical processing of email communications is and may be required to send and receive messages, to conform to the technical requirements of connecting networks, to conform to the limitations of the Service, or to conform to other, similar technical requirements. By using the service you acknowledge and agree that Your Company do not endorse the content of any user communications and are not responsible or liable for any unlawful, harassing, libelous, privacy invading, abusive, threatening, harmful, vulgar, obscene, tortuous, or otherwise objectionable content, or content that infringes or may infringe the intellectual property or other rights of another.</p>

<div class=\"bigheader\"><h2>Legal Disclaimer</h2></div>

<p>We reserve the right to disclose your personally identifiable information as required by law and when we believe that disclosure is necessary to protect our rights and/or to comply with a judicial proceeding, court order, or legal process served on our Web site.</p>

<div class=\"bigheader\"><h2>Security</h2></div>

<p>The security of your personal information is important to us. We follow generally accepted industry standards to protect the personal information submitted to us, both during transmission and once we receive it. No method of transmission over the Internet, or method of electronic storage, is 100% secure, however we have taken every step possible to make your information safe. This website is protected by Secure Sockets Layer (SSL) to protect your information. Therefore, while we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security.</p>

<div class=\"bigheader\"><h2>Links To Other Sites</h2></div>

<p>This Web site contains links to other sites that are not owned or controlled by Your Company. Please be aware that we, Your Company are not responsible for the privacy practices of such other sites. We encourage you to be aware when you leave our site and to read the privacy statements of each and every Web site that collects personally identifiable information. This privacy statement applies only to information collected by this Web site.</p>

<div class=\"bigheader\"><h2>Changes To This Privacy Statement</h2></div>

<p>If we decide to change our privacy policy, we will post those changes to this privacy statement, the home page, and other places we deem appropriate so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it. We reserve the right to modify this privacy statement at any time, so please review it frequently. If we make material changes to this policy, we will notify you here, by email, or by means of a notice on our home page. For more information please do not hesitate to send your questions via our <a href=\"contact.php\">contact form</a>.</p>

";







	
/*
-----------------------------------------
---------   Multi-language support: on   -------
-----------------------------------------

When Multi-language support is set to On from inside Wizard Panel the below text will be used (in order to support multiple languages). If your Multi-language support setting is set to Google Translate or Off then this text is editable in Wizard Panel directly and everything below can be ignored.

-----------------------------------------	
*/

/*
-----------------------------------------
---------   Begin hosting plans   ---------
-----------------------------------------
*/

/*
	
	With multi-language support turned on the below text is used for your plans, your plan price and order URL remain editable in Wizard Panel.
	
	You can re-name any of the 10 hosting pages following this guide: https://www.zomex.com/docs/whmcs-templates/how-to-change-hosting-page-type.php
	
*/

/*
-----------------------------------------
---------   Home page (File: homepage.tpl, index.php)   ---------
-----------------------------------------
*/

// Feature boxes (File: includes/feature-boxes.tpl)

$_LANG['homepage_box1_title'] = "Web Hosting";
$_LANG['homepage_box1_desc'] = "Premium cPanel based web hosting";
$_LANG['homepage_box1_feat1'] = "1GB Disk Space";
$_LANG['homepage_box1_feat2'] = "10GB Bandwidth";
$_LANG['homepage_box1_feat3'] = "5 Addon Domains";
$_LANG['homepage_box1_feat4'] = "Web Control Panel";
$_LANG['homepage_box1_feat5'] = "Software Installer";
$_LANG['homepage_box1_term'] = "monthly";

$_LANG['homepage_box2_title'] = "Reseller Hosting";
$_LANG['homepage_box2_desc'] = "Start your own reseller business";
$_LANG['homepage_box2_feat1'] = "50GB Disk Space";
$_LANG['homepage_box2_feat2'] = "100GB Bandwidth";
$_LANG['homepage_box2_feat3'] = "cPanel/WHM";
$_LANG['homepage_box2_feat4'] = "Overselling Enabled";
$_LANG['homepage_box2_feat5'] = "Free WHMCS License";
$_LANG['homepage_box2_term'] = "annually";

$_LANG['homepage_box3_title'] = "VPS Hosting";
$_LANG['homepage_box3_desc'] = "Take full control of your website";
$_LANG['homepage_box3_feat1'] = "15GB Disk Space";
$_LANG['homepage_box3_feat2'] = "2TB Bandwidth";
$_LANG['homepage_box3_feat3'] = "Free cPanel License";
$_LANG['homepage_box3_feat4'] = "SolusVM Included";
$_LANG['homepage_box3_feat5'] = "VPS Templates";
$_LANG['homepage_box3_term'] = "monthly";

$_LANG['homepage_box4_title'] = "Dedicated Servers";
$_LANG['homepage_box4_desc'] = "Give your website the hosting it deserves";
$_LANG['homepage_box4_feat1'] = "2.8GHz";
$_LANG['homepage_box4_feat2'] = "3 CPU Cores";
$_LANG['homepage_box4_feat3'] = "2GB RAM";
$_LANG['homepage_box4_feat4'] = "60GB Storage";
$_LANG['homepage_box4_feat5'] = "1TB Bandwidth";
$_LANG['homepage_box4_term'] = "annually";

$_LANG['homepage_box5_title'] = "Cloud Hosting";
$_LANG['homepage_box5_desc'] = "Next generation in website hosting";
$_LANG['homepage_box5_feat1'] = "15GB Disk Space";
$_LANG['homepage_box5_feat2'] = "2TB Bandwidth";
$_LANG['homepage_box5_feat3'] = "Free cPanel License";
$_LANG['homepage_box5_feat4'] = "SolusVM Included";
$_LANG['homepage_box5_feat5'] = "VPS Templates";
$_LANG['homepage_box5_term'] = "monthly";

$_LANG['homepage_box6_title'] = "Game Servers";
$_LANG['homepage_box6_desc'] = "Call Of Duty, Medal Of Honour, Halo";
$_LANG['homepage_box6_feat1'] = "15GB Disk Space";
$_LANG['homepage_box6_feat2'] = "2TB Bandwidth";
$_LANG['homepage_box6_feat3'] = "Free cPanel License";
$_LANG['homepage_box6_feat4'] = "SolusVM Included";
$_LANG['homepage_box6_feat5'] = "VPS Templates";
$_LANG['homepage_box6_term'] = "annually";

$_LANG['homepage_box7_title'] = "Email Hosting";
$_LANG['homepage_box7_desc'] = "We offer premium email hosting plans";
$_LANG['homepage_box7_feat1'] = "Webmail";
$_LANG['homepage_box7_feat2'] = "SPAM Hide Feature";
$_LANG['homepage_box7_feat3'] = "Unlimited Accounts";
$_LANG['homepage_box7_feat4'] = "Low Fees";
$_LANG['homepage_box7_feat5'] = "Reliable Support";
$_LANG['homepage_box7_term'] = "monthly";

$_LANG['homepage_box8_title'] = "VPN Servers";
$_LANG['homepage_box8_desc'] = "We offer low cost VPN servers";
$_LANG['homepage_box8_feat1'] = "Easy To Setup";
$_LANG['homepage_box8_feat2'] = "Anonymous Browsing";
$_LANG['homepage_box8_feat3'] = "Unlimited Access";
$_LANG['homepage_box8_feat4'] = "Low Fees";
$_LANG['homepage_box8_feat5'] = "Reliable Support";
$_LANG['homepage_box8_term'] = "monthly";

$_LANG['homepage_box9_title'] = "RapidSSL";
$_LANG['homepage_box9_desc'] = "One of the most popular SSLs";
$_LANG['homepage_box9_feat1'] = "99.9% Browser Recognition";
$_LANG['homepage_box9_feat2'] = "Easy To Install";
$_LANG['homepage_box9_feat3'] = "Unlimited Access";
$_LANG['homepage_box9_feat4'] = "Low Fees";
$_LANG['homepage_box9_feat5'] = "Reliable Support";
$_LANG['homepage_box9_term'] = "yearly";

/*
-----------------------------------------
---------   Shared Hosting page by default (File: web-hosting.tpl, web-hosting.php, includes/custom1.tpl)   ---------
-----------------------------------------
*/

// Name

$_LANG['custom1_box1_title'] = "Shared 1";
$_LANG['custom1_box2_title'] = "Shared 2";
$_LANG['custom1_box3_title'] = "Shared 3";
$_LANG['custom1_box4_title'] = "Shared 4";
$_LANG['custom1_box5_title'] = "Shared 5";
$_LANG['custom1_box6_title'] = "Shared 6";
$_LANG['custom1_box7_title'] = "Shared 7";
$_LANG['custom1_box8_title'] = "Shared 8";
$_LANG['custom1_box9_title'] = "Shared 9";
$_LANG['custom1_box10_title'] = "Shared 10";

// Description

$_LANG['custom1_box1_desc'] = "Perfect shared hosting plan for beginners";
$_LANG['custom1_box2_desc'] = "Reliable low-cost shared hosting plan";
$_LANG['custom1_box3_desc'] = "Advanced shared hosting package";
$_LANG['custom1_box4_desc'] = "Professional shared hosting plan";
$_LANG['custom1_box5_desc'] = "Suitable shared plan for web designers";
$_LANG['custom1_box6_desc'] = "The best shared plan for experts";
$_LANG['custom1_box7_desc'] = "The best shared plan for experts";
$_LANG['custom1_box8_desc'] = "The best shared plan for experts";
$_LANG['custom1_box9_desc'] = "The best shared plan for experts";
$_LANG['custom1_box10_desc'] = "The best shared plan for experts";

// Feature boxes

$_LANG['custom1_box1_feat1'] = "1GB Disk Space";
$_LANG['custom1_box1_feat2'] = "10GB Bandwidth";
$_LANG['custom1_box1_feat3'] = "5 Addon Domains";
$_LANG['custom1_box1_feat4'] = "Web Control Panel";
$_LANG['custom1_box1_feat5'] = "Software Installer";
$_LANG['custom1_box1_term'] = "year";

$_LANG['custom1_box2_feat1'] = "1GB Disk Space";
$_LANG['custom1_box2_feat2'] = "10GB Bandwidth";
$_LANG['custom1_box2_feat3'] = "5 Addon Domains";
$_LANG['custom1_box2_feat4'] = "Web Control Panel";
$_LANG['custom1_box2_feat5'] = "Software Installer";
$_LANG['custom1_box2_term'] = "month";

$_LANG['custom1_box3_feat1'] = "1GB Disk Space";
$_LANG['custom1_box3_feat2'] = "10GB Bandwidth";
$_LANG['custom1_box3_feat3'] = "5 Addon Domains";
$_LANG['custom1_box3_feat4'] = "Web Control Panel";
$_LANG['custom1_box3_feat5'] = "Software Installer";
$_LANG['custom1_box3_term'] = "year";

$_LANG['custom1_box4_feat1'] = "1GB Disk Space";
$_LANG['custom1_box4_feat2'] = "10GB Bandwidth";
$_LANG['custom1_box4_feat3'] = "5 Addon Domains";
$_LANG['custom1_box4_feat4'] = "Web Control Panel";
$_LANG['custom1_box4_feat5'] = "Software Installer";
$_LANG['custom1_box4_term'] = "month";

$_LANG['custom1_box5_feat1'] = "1GB Disk Space";
$_LANG['custom1_box5_feat2'] = "10GB Bandwidth";
$_LANG['custom1_box5_feat3'] = "5 Addon Domains";
$_LANG['custom1_box5_feat4'] = "Web Control Panel";
$_LANG['custom1_box5_feat5'] = "Software Installer";
$_LANG['custom1_box5_term'] = "month";

$_LANG['custom1_box6_feat1'] = "1GB Disk Space";
$_LANG['custom1_box6_feat2'] = "10GB Bandwidth";
$_LANG['custom1_box6_feat3'] = "5 Addon Domains";
$_LANG['custom1_box6_feat4'] = "Web Control Panel";
$_LANG['custom1_box6_feat5'] = "Software Installer";
$_LANG['custom1_box6_term'] = "year";

$_LANG['custom1_box7_feat1'] = "1GB Disk Space";
$_LANG['custom1_box7_feat2'] = "10GB Bandwidth";
$_LANG['custom1_box7_feat3'] = "5 Addon Domains";
$_LANG['custom1_box7_feat4'] = "Web Control Panel";
$_LANG['custom1_box7_feat5'] = "Software Installer";
$_LANG['custom1_box7_term'] = "year";

$_LANG['custom1_box8_feat1'] = "1GB Disk Space";
$_LANG['custom1_box8_feat2'] = "10GB Bandwidth";
$_LANG['custom1_box8_feat3'] = "5 Addon Domains";
$_LANG['custom1_box8_feat4'] = "Web Control Panel";
$_LANG['custom1_box8_feat5'] = "Software Installer";
$_LANG['custom1_box8_term'] = "year";

$_LANG['custom1_box9_feat1'] = "1GB Disk Space";
$_LANG['custom1_box9_feat2'] = "10GB Bandwidth";
$_LANG['custom1_box9_feat3'] = "5 Addon Domains";
$_LANG['custom1_box9_feat4'] = "Web Control Panel";
$_LANG['custom1_box9_feat5'] = "Software Installer";
$_LANG['custom1_box9_term'] = "year";

$_LANG['custom1_box10_feat1'] = "1GB Disk Space";
$_LANG['custom1_box10_feat2'] = "10GB Bandwidth";
$_LANG['custom1_box10_feat3'] = "5 Addon Domains";
$_LANG['custom1_box10_feat4'] = "Web Control Panel";
$_LANG['custom1_box10_feat5'] = "Software Installer";
$_LANG['custom1_box10_term'] = "year";

// Table

$_LANG['custom1_table_heading1'] = "Main Information";
$_LANG['custom1_table_feat1'] = "Web Space";
$_LANG['custom1_table_feat2'] = "Bandwidth";
$_LANG['custom1_table_feat3'] = "Monthly Price";

$_LANG['custom1_table_heading2'] = "Plan Comparison";
$_LANG['custom1_table_feat4'] = "Web Space";
$_LANG['custom1_table_feat5'] = "Bandwidth";
$_LANG['custom1_table_feat6'] = "Addon Domains";
$_LANG['custom1_table_feat7'] = "Control Panel";
$_LANG['custom1_table_feat8'] = "Script Installer";
$_LANG['custom1_table_feat9'] = "Daily Backups";
$_LANG['custom1_table_feat10'] = "Server";
$_LANG['custom1_table_feat11'] = "Free Domain";
$_LANG['custom1_table_feat12'] = "Live Support";

$_LANG['custom1_table_heading3'] = "Key Features";
$_LANG['custom1_table_feat13'] = "Addon Domains";
$_LANG['custom1_table_feat14'] = "Databases";
$_LANG['custom1_table_feat15'] = "FTP Accounts";
$_LANG['custom1_table_feat16'] = "Email Accounts";
$_LANG['custom1_table_feat17'] = "Mailing lists";
$_LANG['custom1_table_feat18'] = "Subdomains";
$_LANG['custom1_table_feat19'] = "Email Limit";
$_LANG['custom1_table_feat20'] = "Auto Responders";
$_LANG['custom1_table_feat21'] = "Online File Manager";

$_LANG['custom1_table_heading4'] = "Free Software";
$_LANG['custom1_table_feat22'] = "Wordpress";
$_LANG['custom1_table_feat23'] = "Joomla";
$_LANG['custom1_table_feat24'] = "Drupal";
$_LANG['custom1_table_feat25'] = "Magento";
$_LANG['custom1_table_feat26'] = "Zen Cart";
$_LANG['custom1_table_feat27'] = "phpBB";
$_LANG['custom1_table_feat28'] = "myBB";
$_LANG['custom1_table_feat29'] = "SMF";
$_LANG['custom1_table_feat30'] = "PHPCoin";

// Table2 

$_LANG['custom1_table2_title0'] = "Package";
$_LANG['custom1_table2_title1'] = "CPU";
$_LANG['custom1_table2_title2'] = "RAM";
$_LANG['custom1_table2_title3'] = "Hard Drive";
$_LANG['custom1_table2_title4'] = "Bandwidth";
$_LANG['custom1_table2_title5'] = "Control Panel";
$_LANG['custom1_table2_title6'] = "Price";

$_LANG['custom1_table2_box1_feat1'] = "Intel Xeon E3-1225v3";
$_LANG['custom1_table2_box1_feat2'] = "8GB";
$_LANG['custom1_table2_box1_feat3'] = "Up to 2x2TB RAID 1";
$_LANG['custom1_table2_box1_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom1_table2_box1_feat5'] = "WHM/cPanel";
$_LANG['custom1_table2_box1_feat6'] = "$199/month";

$_LANG['custom1_table2_box2_feat1'] = "Intel Xeon E3-1230v2";
$_LANG['custom1_table2_box2_feat2'] = "12GB";
$_LANG['custom1_table2_box2_feat3'] = "2 x 2TB SATA RAID 1";
$_LANG['custom1_table2_box2_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom1_table2_box2_feat5'] = "WHM/cPanel";
$_LANG['custom1_table2_box2_feat6'] = "$299/month";

$_LANG['custom1_table2_box3_feat1'] = "Intel Xeon E5-2420 x 2";
$_LANG['custom1_table2_box3_feat2'] = "16GB";
$_LANG['custom1_table2_box3_feat3'] = "Up to 4 x 1TB SATA RAID 1 (Hardware)";
$_LANG['custom1_table2_box3_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom1_table2_box3_feat5'] = "WHM/cPanel";
$_LANG['custom1_table2_box3_feat6'] = "$399/month";

$_LANG['custom1_table2_box4_feat1'] = "Intel Xeon E5-2750 x 4";
$_LANG['custom1_table2_box4_feat2'] = "20GB";
$_LANG['custom1_table2_box4_feat3'] = "Up to 4 x 2TB SATA RAID 1 (Hardware)";
$_LANG['custom1_table2_box4_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom1_table2_box4_feat5'] = "WHM/cPanel";
$_LANG['custom1_table2_box4_feat6'] = "$499/month";

$_LANG['custom1_table2_box5_feat1'] = "Intel Xeon E5-5473 x 5";
$_LANG['custom1_table2_box5_feat2'] = "24GB";
$_LANG['custom1_table2_box5_feat3'] = "Up to 4 x 3TB SATA RAID 1 (Hardware)";
$_LANG['custom1_table2_box5_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom1_table2_box5_feat5'] = "WHM/cPanel";
$_LANG['custom1_table2_box5_feat6'] = "$599/month";

$_LANG['custom1_table2_box6_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom1_table2_box6_feat2'] = "28GB";
$_LANG['custom1_table2_box6_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom1_table2_box6_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom1_table2_box6_feat5'] = "WHM/cPanel";
$_LANG['custom1_table2_box6_feat6'] = "$699/month";

$_LANG['custom1_table2_box7_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom1_table2_box7_feat2'] = "28GB";
$_LANG['custom1_table2_box7_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom1_table2_box7_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom1_table2_box7_feat5'] = "WHM/cPanel";
$_LANG['custom1_table2_box7_feat6'] = "$699/month";

$_LANG['custom1_table2_box8_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom1_table2_box8_feat2'] = "28GB";
$_LANG['custom1_table2_box8_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom1_table2_box8_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom1_table2_box8_feat5'] = "WHM/cPanel";
$_LANG['custom1_table2_box8_feat6'] = "$699/month";

$_LANG['custom1_table2_box9_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom1_table2_box9_feat2'] = "28GB";
$_LANG['custom1_table2_box9_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom1_table2_box9_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom1_table2_box9_feat5'] = "WHM/cPanel";
$_LANG['custom1_table2_box9_feat6'] = "$699/month";

$_LANG['custom1_table2_box10_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom1_table2_box10_feat2'] = "28GB";
$_LANG['custom1_table2_box10_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom1_table2_box10_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom1_table2_box10_feat5'] = "WHM/cPanel";
$_LANG['custom1_table2_box10_feat6'] = "$699/month";

/*
-----------------------------------------
---------   Reseller Hosting page by default (File: reseller-hosting.tpl, reseller-hosting.php, includes/custom2.tpl)   ---------
-----------------------------------------
*/

// Name

$_LANG['custom2_box1_title'] = "Reseller 1";
$_LANG['custom2_box2_title'] = "Reseller 2";
$_LANG['custom2_box3_title'] = "Reseller 3";
$_LANG['custom2_box4_title'] = "Reseller 4";
$_LANG['custom2_box5_title'] = "Reseller 5";
$_LANG['custom2_box6_title'] = "Reseller 6";
$_LANG['custom2_box7_title'] = "Reseller 7";
$_LANG['custom2_box8_title'] = "Reseller 8";
$_LANG['custom2_box9_title'] = "Reseller 9";
$_LANG['custom2_box10_title'] = "Reseller 10";

// Description

$_LANG['custom2_box1_desc'] = "Perfect reseller hosting plan for beginners";
$_LANG['custom2_box2_desc'] = "Reliable low-cost reseller hosting plan";
$_LANG['custom2_box3_desc'] = "Advanced reseller hosting package";
$_LANG['custom2_box4_desc'] = "Professional reseller hosting plan";
$_LANG['custom2_box5_desc'] = "Suitable reseller plan for web designers";
$_LANG['custom2_box6_desc'] = "The best reseller plan for experts";
$_LANG['custom2_box7_desc'] = "The best reseller plan for experts";
$_LANG['custom2_box8_desc'] = "The best reseller plan for experts";
$_LANG['custom2_box9_desc'] = "The best reseller plan for experts";
$_LANG['custom2_box10_desc'] = "The best reseller plan for experts";

// Feature boxes

$_LANG['custom2_box1_feat1'] = "1GB Disk Space";
$_LANG['custom2_box1_feat2'] = "10GB Bandwidth";
$_LANG['custom2_box1_feat3'] = "5 Addon Domains";
$_LANG['custom2_box1_feat4'] = "Web Control Panel";
$_LANG['custom2_box1_feat5'] = "Software Installer";
$_LANG['custom2_box1_term'] = "year";

$_LANG['custom2_box2_feat1'] = "1GB Disk Space";
$_LANG['custom2_box2_feat2'] = "10GB Bandwidth";
$_LANG['custom2_box2_feat3'] = "5 Addon Domains";
$_LANG['custom2_box2_feat4'] = "Web Control Panel";
$_LANG['custom2_box2_feat5'] = "Software Installer";
$_LANG['custom2_box2_term'] = "month";

$_LANG['custom2_box3_feat1'] = "1GB Disk Space";
$_LANG['custom2_box3_feat2'] = "10GB Bandwidth";
$_LANG['custom2_box3_feat3'] = "5 Addon Domains";
$_LANG['custom2_box3_feat4'] = "Web Control Panel";
$_LANG['custom2_box3_feat5'] = "Software Installer";
$_LANG['custom2_box3_term'] = "year";

$_LANG['custom2_box4_feat1'] = "1GB Disk Space";
$_LANG['custom2_box4_feat2'] = "10GB Bandwidth";
$_LANG['custom2_box4_feat3'] = "5 Addon Domains";
$_LANG['custom2_box4_feat4'] = "Web Control Panel";
$_LANG['custom2_box4_feat5'] = "Software Installer";
$_LANG['custom2_box4_term'] = "month";

$_LANG['custom2_box5_feat1'] = "1GB Disk Space";
$_LANG['custom2_box5_feat2'] = "10GB Bandwidth";
$_LANG['custom2_box5_feat3'] = "5 Addon Domains";
$_LANG['custom2_box5_feat4'] = "Web Control Panel";
$_LANG['custom2_box5_feat5'] = "Software Installer";
$_LANG['custom2_box5_term'] = "month";

$_LANG['custom2_box6_feat1'] = "1GB Disk Space";
$_LANG['custom2_box6_feat2'] = "10GB Bandwidth";
$_LANG['custom2_box6_feat3'] = "5 Addon Domains";
$_LANG['custom2_box6_feat4'] = "Web Control Panel";
$_LANG['custom2_box6_feat5'] = "Software Installer";
$_LANG['custom2_box6_term'] = "year";

$_LANG['custom2_box7_feat1'] = "1GB Disk Space";
$_LANG['custom2_box7_feat2'] = "10GB Bandwidth";
$_LANG['custom2_box7_feat3'] = "5 Addon Domains";
$_LANG['custom2_box7_feat4'] = "Web Control Panel";
$_LANG['custom2_box7_feat5'] = "Software Installer";
$_LANG['custom2_box7_term'] = "year";

$_LANG['custom2_box8_feat1'] = "1GB Disk Space";
$_LANG['custom2_box8_feat2'] = "10GB Bandwidth";
$_LANG['custom2_box8_feat3'] = "5 Addon Domains";
$_LANG['custom2_box8_feat4'] = "Web Control Panel";
$_LANG['custom2_box8_feat5'] = "Software Installer";
$_LANG['custom2_box8_term'] = "year";

$_LANG['custom2_box9_feat1'] = "1GB Disk Space";
$_LANG['custom2_box9_feat2'] = "10GB Bandwidth";
$_LANG['custom2_box9_feat3'] = "5 Addon Domains";
$_LANG['custom2_box9_feat4'] = "Web Control Panel";
$_LANG['custom2_box9_feat5'] = "Software Installer";
$_LANG['custom2_box9_term'] = "year";

$_LANG['custom2_box10_feat1'] = "1GB Disk Space";
$_LANG['custom2_box10_feat2'] = "10GB Bandwidth";
$_LANG['custom2_box10_feat3'] = "5 Addon Domains";
$_LANG['custom2_box10_feat4'] = "Web Control Panel";
$_LANG['custom2_box10_feat5'] = "Software Installer";
$_LANG['custom2_box10_term'] = "year";

// Table

$_LANG['custom2_table_heading1'] = "Main Information";
$_LANG['custom2_table_feat1'] = "Web Space";
$_LANG['custom2_table_feat2'] = "Bandwidth";
$_LANG['custom2_table_feat3'] = "Monthly Price";

$_LANG['custom2_table_heading2'] = "Plan Comparison";
$_LANG['custom2_table_feat4'] = "Web Space";
$_LANG['custom2_table_feat5'] = "Bandwidth";
$_LANG['custom2_table_feat6'] = "Addon Domains";
$_LANG['custom2_table_feat7'] = "Control Panel";
$_LANG['custom2_table_feat8'] = "Script Installer";
$_LANG['custom2_table_feat9'] = "Daily Backups";
$_LANG['custom2_table_feat10'] = "Server";
$_LANG['custom2_table_feat11'] = "Free Domain";
$_LANG['custom2_table_feat12'] = "Live Support";

$_LANG['custom2_table_heading3'] = "Key Features";
$_LANG['custom2_table_feat13'] = "Addon Domains";
$_LANG['custom2_table_feat14'] = "Databases";
$_LANG['custom2_table_feat15'] = "FTP Accounts";
$_LANG['custom2_table_feat16'] = "Email Accounts";
$_LANG['custom2_table_feat17'] = "Mailing lists";
$_LANG['custom2_table_feat18'] = "Subdomains";
$_LANG['custom2_table_feat19'] = "Email Limit";
$_LANG['custom2_table_feat20'] = "Auto Responders";
$_LANG['custom2_table_feat21'] = "Online File Manager";

$_LANG['custom2_table_heading4'] = "Free Software";
$_LANG['custom2_table_feat22'] = "Wordpress";
$_LANG['custom2_table_feat23'] = "Joomla";
$_LANG['custom2_table_feat24'] = "Drupal";
$_LANG['custom2_table_feat25'] = "Magento";
$_LANG['custom2_table_feat26'] = "Zen Cart";
$_LANG['custom2_table_feat27'] = "phpBB";
$_LANG['custom2_table_feat28'] = "myBB";
$_LANG['custom2_table_feat29'] = "SMF";
$_LANG['custom2_table_feat30'] = "PHPCoin";

// Table2 

$_LANG['custom2_table2_title0'] = "Package";
$_LANG['custom2_table2_title1'] = "CPU";
$_LANG['custom2_table2_title2'] = "RAM";
$_LANG['custom2_table2_title3'] = "Hard Drive";
$_LANG['custom2_table2_title4'] = "Bandwidth";
$_LANG['custom2_table2_title5'] = "Control Panel";
$_LANG['custom2_table2_title6'] = "Price";

$_LANG['custom2_table2_box1_feat1'] = "Intel Xeon E3-1225v3";
$_LANG['custom2_table2_box1_feat2'] = "8GB";
$_LANG['custom2_table2_box1_feat3'] = "Up to 2x2TB RAID 1";
$_LANG['custom2_table2_box1_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom2_table2_box1_feat5'] = "WHM/cPanel";
$_LANG['custom2_table2_box1_feat6'] = "$199/month";

$_LANG['custom2_table2_box2_feat1'] = "Intel Xeon E3-1230v2";
$_LANG['custom2_table2_box2_feat2'] = "12GB";
$_LANG['custom2_table2_box2_feat3'] = "2 x 2TB SATA RAID 1";
$_LANG['custom2_table2_box2_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom2_table2_box2_feat5'] = "WHM/cPanel";
$_LANG['custom2_table2_box2_feat6'] = "$299/month";

$_LANG['custom2_table2_box3_feat1'] = "Intel Xeon E5-2420 x 2";
$_LANG['custom2_table2_box3_feat2'] = "16GB";
$_LANG['custom2_table2_box3_feat3'] = "Up to 4 x 1TB SATA RAID 1 (Hardware)";
$_LANG['custom2_table2_box3_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom2_table2_box3_feat5'] = "WHM/cPanel";
$_LANG['custom2_table2_box3_feat6'] = "$399/month";

$_LANG['custom2_table2_box4_feat1'] = "Intel Xeon E5-2750 x 4";
$_LANG['custom2_table2_box4_feat2'] = "20GB";
$_LANG['custom2_table2_box4_feat3'] = "Up to 4 x 2TB SATA RAID 1 (Hardware)";
$_LANG['custom2_table2_box4_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom2_table2_box4_feat5'] = "WHM/cPanel";
$_LANG['custom2_table2_box4_feat6'] = "$499/month";

$_LANG['custom2_table2_box5_feat1'] = "Intel Xeon E5-5473 x 5";
$_LANG['custom2_table2_box5_feat2'] = "24GB";
$_LANG['custom2_table2_box5_feat3'] = "Up to 4 x 3TB SATA RAID 1 (Hardware)";
$_LANG['custom2_table2_box5_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom2_table2_box5_feat5'] = "WHM/cPanel";
$_LANG['custom2_table2_box5_feat6'] = "$599/month";

$_LANG['custom2_table2_box6_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom2_table2_box6_feat2'] = "28GB";
$_LANG['custom2_table2_box6_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom2_table2_box6_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom2_table2_box6_feat5'] = "WHM/cPanel";
$_LANG['custom2_table2_box6_feat6'] = "$699/month";

$_LANG['custom2_table2_box7_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom2_table2_box7_feat2'] = "28GB";
$_LANG['custom2_table2_box7_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom2_table2_box7_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom2_table2_box7_feat5'] = "WHM/cPanel";
$_LANG['custom2_table2_box7_feat6'] = "$699/month";

$_LANG['custom2_table2_box8_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom2_table2_box8_feat2'] = "28GB";
$_LANG['custom2_table2_box8_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom2_table2_box8_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom2_table2_box8_feat5'] = "WHM/cPanel";
$_LANG['custom2_table2_box8_feat6'] = "$699/month";

$_LANG['custom2_table2_box9_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom2_table2_box9_feat2'] = "28GB";
$_LANG['custom2_table2_box9_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom2_table2_box9_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom2_table2_box9_feat5'] = "WHM/cPanel";
$_LANG['custom2_table2_box9_feat6'] = "$699/month";

$_LANG['custom2_table2_box10_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom2_table2_box10_feat2'] = "28GB";
$_LANG['custom2_table2_box10_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom2_table2_box10_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom2_table2_box10_feat5'] = "WHM/cPanel";
$_LANG['custom2_table2_box10_feat6'] = "$699/month";

/*
-----------------------------------------
---------   VPS Hosting page by default (File: vps-hosting.tpl, vps-hosting.php, includes/custom3.tpl)   ---------
-----------------------------------------
*/

// Name

$_LANG['custom3_box1_title'] = "VPS 1";
$_LANG['custom3_box2_title'] = "VPS 2";
$_LANG['custom3_box3_title'] = "VPS 3";
$_LANG['custom3_box4_title'] = "VPS 4";
$_LANG['custom3_box5_title'] = "VPS 5";
$_LANG['custom3_box6_title'] = "VPS 6";
$_LANG['custom3_box7_title'] = "VPS 7";
$_LANG['custom3_box8_title'] = "VPS 8";
$_LANG['custom3_box9_title'] = "VPS 9";
$_LANG['custom3_box10_title'] = "VPS 10";

// Description

$_LANG['custom3_box1_desc'] = "Perfect VPS hosting plan for beginners";
$_LANG['custom3_box2_desc'] = "Reliable low-cost VPS hosting plan";
$_LANG['custom3_box3_desc'] = "Advanced VPS hosting package";
$_LANG['custom3_box4_desc'] = "Professional VPS hosting plan";
$_LANG['custom3_box5_desc'] = "Suitable VPS plan for web designers";
$_LANG['custom3_box6_desc'] = "The best VPS plan for experts";
$_LANG['custom3_box7_desc'] = "The best VPS plan for experts";
$_LANG['custom3_box8_desc'] = "The best VPS plan for experts";
$_LANG['custom3_box9_desc'] = "The best VPS plan for experts";
$_LANG['custom3_box10_desc'] = "The best VPS plan for experts";

// Feature boxes

$_LANG['custom3_box1_feat1'] = "1GB Disk Space";
$_LANG['custom3_box1_feat2'] = "10GB Bandwidth";
$_LANG['custom3_box1_feat3'] = "5 Addon Domains";
$_LANG['custom3_box1_feat4'] = "Web Control Panel";
$_LANG['custom3_box1_feat5'] = "Software Installer";
$_LANG['custom3_box1_term'] = "year";

$_LANG['custom3_box2_feat1'] = "1GB Disk Space";
$_LANG['custom3_box2_feat2'] = "10GB Bandwidth";
$_LANG['custom3_box2_feat3'] = "5 Addon Domains";
$_LANG['custom3_box2_feat4'] = "Web Control Panel";
$_LANG['custom3_box2_feat5'] = "Software Installer";
$_LANG['custom3_box2_term'] = "month";

$_LANG['custom3_box3_feat1'] = "1GB Disk Space";
$_LANG['custom3_box3_feat2'] = "10GB Bandwidth";
$_LANG['custom3_box3_feat3'] = "5 Addon Domains";
$_LANG['custom3_box3_feat4'] = "Web Control Panel";
$_LANG['custom3_box3_feat5'] = "Software Installer";
$_LANG['custom3_box3_term'] = "year";

$_LANG['custom3_box4_feat1'] = "1GB Disk Space";
$_LANG['custom3_box4_feat2'] = "10GB Bandwidth";
$_LANG['custom3_box4_feat3'] = "5 Addon Domains";
$_LANG['custom3_box4_feat4'] = "Web Control Panel";
$_LANG['custom3_box4_feat5'] = "Software Installer";
$_LANG['custom3_box4_term'] = "month";

$_LANG['custom3_box5_feat1'] = "1GB Disk Space";
$_LANG['custom3_box5_feat2'] = "10GB Bandwidth";
$_LANG['custom3_box5_feat3'] = "5 Addon Domains";
$_LANG['custom3_box5_feat4'] = "Web Control Panel";
$_LANG['custom3_box5_feat5'] = "Software Installer";
$_LANG['custom3_box5_term'] = "month";

$_LANG['custom3_box6_feat1'] = "1GB Disk Space";
$_LANG['custom3_box6_feat2'] = "10GB Bandwidth";
$_LANG['custom3_box6_feat3'] = "5 Addon Domains";
$_LANG['custom3_box6_feat4'] = "Web Control Panel";
$_LANG['custom3_box6_feat5'] = "Software Installer";
$_LANG['custom3_box6_term'] = "year";

$_LANG['custom3_box7_feat1'] = "1GB Disk Space";
$_LANG['custom3_box7_feat2'] = "10GB Bandwidth";
$_LANG['custom3_box7_feat3'] = "5 Addon Domains";
$_LANG['custom3_box7_feat4'] = "Web Control Panel";
$_LANG['custom3_box7_feat5'] = "Software Installer";
$_LANG['custom3_box7_term'] = "year";

$_LANG['custom3_box8_feat1'] = "1GB Disk Space";
$_LANG['custom3_box8_feat2'] = "10GB Bandwidth";
$_LANG['custom3_box8_feat3'] = "5 Addon Domains";
$_LANG['custom3_box8_feat4'] = "Web Control Panel";
$_LANG['custom3_box8_feat5'] = "Software Installer";
$_LANG['custom3_box8_term'] = "year";

$_LANG['custom3_box9_feat1'] = "1GB Disk Space";
$_LANG['custom3_box9_feat2'] = "10GB Bandwidth";
$_LANG['custom3_box9_feat3'] = "5 Addon Domains";
$_LANG['custom3_box9_feat4'] = "Web Control Panel";
$_LANG['custom3_box9_feat5'] = "Software Installer";
$_LANG['custom3_box9_term'] = "year";

$_LANG['custom3_box10_feat1'] = "1GB Disk Space";
$_LANG['custom3_box10_feat2'] = "10GB Bandwidth";
$_LANG['custom3_box10_feat3'] = "5 Addon Domains";
$_LANG['custom3_box10_feat4'] = "Web Control Panel";
$_LANG['custom3_box10_feat5'] = "Software Installer";
$_LANG['custom3_box10_term'] = "year";

// Table

$_LANG['custom3_table_heading1'] = "Main Information";
$_LANG['custom3_table_feat1'] = "Web Space";
$_LANG['custom3_table_feat2'] = "Bandwidth";
$_LANG['custom3_table_feat3'] = "Monthly Price";

$_LANG['custom3_table_heading2'] = "Plan Comparison";
$_LANG['custom3_table_feat4'] = "Web Space";
$_LANG['custom3_table_feat5'] = "Bandwidth";
$_LANG['custom3_table_feat6'] = "Addon Domains";
$_LANG['custom3_table_feat7'] = "Control Panel";
$_LANG['custom3_table_feat8'] = "Script Installer";
$_LANG['custom3_table_feat9'] = "Daily Backups";
$_LANG['custom3_table_feat10'] = "Server";
$_LANG['custom3_table_feat11'] = "Free Domain";
$_LANG['custom3_table_feat12'] = "Live Support";

$_LANG['custom3_table_heading3'] = "Key Features";
$_LANG['custom3_table_feat13'] = "Addon Domains";
$_LANG['custom3_table_feat14'] = "Databases";
$_LANG['custom3_table_feat15'] = "FTP Accounts";
$_LANG['custom3_table_feat16'] = "Email Accounts";
$_LANG['custom3_table_feat17'] = "Mailing lists";
$_LANG['custom3_table_feat18'] = "Subdomains";
$_LANG['custom3_table_feat19'] = "Email Limit";
$_LANG['custom3_table_feat20'] = "Auto Responders";
$_LANG['custom3_table_feat21'] = "Online File Manager";

$_LANG['custom3_table_heading4'] = "Free Software";
$_LANG['custom3_table_feat22'] = "Wordpress";
$_LANG['custom3_table_feat23'] = "Joomla";
$_LANG['custom3_table_feat24'] = "Drupal";
$_LANG['custom3_table_feat25'] = "Magento";
$_LANG['custom3_table_feat26'] = "Zen Cart";
$_LANG['custom3_table_feat27'] = "phpBB";
$_LANG['custom3_table_feat28'] = "myBB";
$_LANG['custom3_table_feat29'] = "SMF";
$_LANG['custom3_table_feat30'] = "PHPCoin";

// Table2 

$_LANG['custom3_table2_title0'] = "Package";
$_LANG['custom3_table2_title1'] = "CPU";
$_LANG['custom3_table2_title2'] = "RAM";
$_LANG['custom3_table2_title3'] = "Hard Drive";
$_LANG['custom3_table2_title4'] = "Bandwidth";
$_LANG['custom3_table2_title5'] = "Control Panel";
$_LANG['custom3_table2_title6'] = "Price";

$_LANG['custom3_table2_box1_feat1'] = "Intel Xeon E3-1225v3";
$_LANG['custom3_table2_box1_feat2'] = "8GB";
$_LANG['custom3_table2_box1_feat3'] = "Up to 2x2TB RAID 1";
$_LANG['custom3_table2_box1_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom3_table2_box1_feat5'] = "WHM/cPanel";
$_LANG['custom3_table2_box1_feat6'] = "$199/month";

$_LANG['custom3_table2_box2_feat1'] = "Intel Xeon E3-1230v2";
$_LANG['custom3_table2_box2_feat2'] = "12GB";
$_LANG['custom3_table2_box2_feat3'] = "2 x 2TB SATA RAID 1";
$_LANG['custom3_table2_box2_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom3_table2_box2_feat5'] = "WHM/cPanel";
$_LANG['custom3_table2_box2_feat6'] = "$299/month";

$_LANG['custom3_table2_box3_feat1'] = "Intel Xeon E5-2420 x 2";
$_LANG['custom3_table2_box3_feat2'] = "16GB";
$_LANG['custom3_table2_box3_feat3'] = "Up to 4 x 1TB SATA RAID 1 (Hardware)";
$_LANG['custom3_table2_box3_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom3_table2_box3_feat5'] = "WHM/cPanel";
$_LANG['custom3_table2_box3_feat6'] = "$399/month";

$_LANG['custom3_table2_box4_feat1'] = "Intel Xeon E5-2750 x 4";
$_LANG['custom3_table2_box4_feat2'] = "20GB";
$_LANG['custom3_table2_box4_feat3'] = "Up to 4 x 2TB SATA RAID 1 (Hardware)";
$_LANG['custom3_table2_box4_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom3_table2_box4_feat5'] = "WHM/cPanel";
$_LANG['custom3_table2_box4_feat6'] = "$499/month";

$_LANG['custom3_table2_box5_feat1'] = "Intel Xeon E5-5473 x 5";
$_LANG['custom3_table2_box5_feat2'] = "24GB";
$_LANG['custom3_table2_box5_feat3'] = "Up to 4 x 3TB SATA RAID 1 (Hardware)";
$_LANG['custom3_table2_box5_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom3_table2_box5_feat5'] = "WHM/cPanel";
$_LANG['custom3_table2_box5_feat6'] = "$599/month";

$_LANG['custom3_table2_box6_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom3_table2_box6_feat2'] = "28GB";
$_LANG['custom3_table2_box6_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom3_table2_box6_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom3_table2_box6_feat5'] = "WHM/cPanel";
$_LANG['custom3_table2_box6_feat6'] = "$699/month";

$_LANG['custom3_table2_box7_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom3_table2_box7_feat2'] = "28GB";
$_LANG['custom3_table2_box7_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom3_table2_box7_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom3_table2_box7_feat5'] = "WHM/cPanel";
$_LANG['custom3_table2_box7_feat6'] = "$699/month";

$_LANG['custom3_table2_box8_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom3_table2_box8_feat2'] = "28GB";
$_LANG['custom3_table2_box8_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom3_table2_box8_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom3_table2_box8_feat5'] = "WHM/cPanel";
$_LANG['custom3_table2_box8_feat6'] = "$699/month";

$_LANG['custom3_table2_box9_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom3_table2_box9_feat2'] = "28GB";
$_LANG['custom3_table2_box9_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom3_table2_box9_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom3_table2_box9_feat5'] = "WHM/cPanel";
$_LANG['custom3_table2_box9_feat6'] = "$699/month";

$_LANG['custom3_table2_box10_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom3_table2_box10_feat2'] = "28GB";
$_LANG['custom3_table2_box10_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom3_table2_box10_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom3_table2_box10_feat5'] = "WHM/cPanel";
$_LANG['custom3_table2_box10_feat6'] = "$699/month";

/*
-----------------------------------------
---------   Dedicated Servers page by default (File: dedicated-servers.tpl, dedicated-servers.php, includes/custom4.tpl)   ---------
-----------------------------------------
*/

// Name

$_LANG['custom4_box1_title'] = "Dedicated 1";
$_LANG['custom4_box2_title'] = "Dedicated 2";
$_LANG['custom4_box3_title'] = "Dedicated 3";
$_LANG['custom4_box4_title'] = "Dedicated 4";
$_LANG['custom4_box5_title'] = "Dedicated 5";
$_LANG['custom4_box6_title'] = "Dedicated 6";
$_LANG['custom4_box7_title'] = "Dedicated 7";
$_LANG['custom4_box8_title'] = "Dedicated 8";
$_LANG['custom4_box9_title'] = "Dedicated 9";
$_LANG['custom4_box10_title'] = "Dedicated 10";

// Description

$_LANG['custom4_box1_desc'] = "Perfect dedicated hosting plan for beginners";
$_LANG['custom4_box2_desc'] = "Reliable low-cost dedicated hosting plan";
$_LANG['custom4_box3_desc'] = "Advanced dedicated hosting package";
$_LANG['custom4_box4_desc'] = "Professional dedicated hosting plan";
$_LANG['custom4_box5_desc'] = "Suitable dedicated plan for web designers";
$_LANG['custom4_box6_desc'] = "The best dedicated plan for experts";
$_LANG['custom4_box7_desc'] = "The best dedicated plan for experts";
$_LANG['custom4_box8_desc'] = "The best dedicated plan for experts";
$_LANG['custom4_box9_desc'] = "The best dedicated plan for experts";
$_LANG['custom4_box10_desc'] = "The best dedicated plan for experts";

// Feature boxes

$_LANG['custom4_box1_feat1'] = "1GB Disk Space";
$_LANG['custom4_box1_feat2'] = "10GB Bandwidth";
$_LANG['custom4_box1_feat3'] = "5 Addon Domains";
$_LANG['custom4_box1_feat4'] = "Web Control Panel";
$_LANG['custom4_box1_feat5'] = "Software Installer";
$_LANG['custom4_box1_term'] = "year";

$_LANG['custom4_box2_feat1'] = "1GB Disk Space";
$_LANG['custom4_box2_feat2'] = "10GB Bandwidth";
$_LANG['custom4_box2_feat3'] = "5 Addon Domains";
$_LANG['custom4_box2_feat4'] = "Web Control Panel";
$_LANG['custom4_box2_feat5'] = "Software Installer";
$_LANG['custom4_box2_term'] = "month";

$_LANG['custom4_box3_feat1'] = "1GB Disk Space";
$_LANG['custom4_box3_feat2'] = "10GB Bandwidth";
$_LANG['custom4_box3_feat3'] = "5 Addon Domains";
$_LANG['custom4_box3_feat4'] = "Web Control Panel";
$_LANG['custom4_box3_feat5'] = "Software Installer";
$_LANG['custom4_box3_term'] = "year";

$_LANG['custom4_box4_feat1'] = "1GB Disk Space";
$_LANG['custom4_box4_feat2'] = "10GB Bandwidth";
$_LANG['custom4_box4_feat3'] = "5 Addon Domains";
$_LANG['custom4_box4_feat4'] = "Web Control Panel";
$_LANG['custom4_box4_feat5'] = "Software Installer";
$_LANG['custom4_box4_term'] = "month";

$_LANG['custom4_box5_feat1'] = "1GB Disk Space";
$_LANG['custom4_box5_feat2'] = "10GB Bandwidth";
$_LANG['custom4_box5_feat3'] = "5 Addon Domains";
$_LANG['custom4_box5_feat4'] = "Web Control Panel";
$_LANG['custom4_box5_feat5'] = "Software Installer";
$_LANG['custom4_box5_term'] = "month";

$_LANG['custom4_box6_feat1'] = "1GB Disk Space";
$_LANG['custom4_box6_feat2'] = "10GB Bandwidth";
$_LANG['custom4_box6_feat3'] = "5 Addon Domains";
$_LANG['custom4_box6_feat4'] = "Web Control Panel";
$_LANG['custom4_box6_feat5'] = "Software Installer";
$_LANG['custom4_box6_term'] = "year";

$_LANG['custom4_box7_feat1'] = "1GB Disk Space";
$_LANG['custom4_box7_feat2'] = "10GB Bandwidth";
$_LANG['custom4_box7_feat3'] = "5 Addon Domains";
$_LANG['custom4_box7_feat4'] = "Web Control Panel";
$_LANG['custom4_box7_feat5'] = "Software Installer";
$_LANG['custom4_box7_term'] = "year";

$_LANG['custom4_box8_feat1'] = "1GB Disk Space";
$_LANG['custom4_box8_feat2'] = "10GB Bandwidth";
$_LANG['custom4_box8_feat3'] = "5 Addon Domains";
$_LANG['custom4_box8_feat4'] = "Web Control Panel";
$_LANG['custom4_box8_feat5'] = "Software Installer";
$_LANG['custom4_box8_term'] = "year";

$_LANG['custom4_box9_feat1'] = "1GB Disk Space";
$_LANG['custom4_box9_feat2'] = "10GB Bandwidth";
$_LANG['custom4_box9_feat3'] = "5 Addon Domains";
$_LANG['custom4_box9_feat4'] = "Web Control Panel";
$_LANG['custom4_box9_feat5'] = "Software Installer";
$_LANG['custom4_box9_term'] = "year";

$_LANG['custom4_box10_feat1'] = "1GB Disk Space";
$_LANG['custom4_box10_feat2'] = "10GB Bandwidth";
$_LANG['custom4_box10_feat3'] = "5 Addon Domains";
$_LANG['custom4_box10_feat4'] = "Web Control Panel";
$_LANG['custom4_box10_feat5'] = "Software Installer";
$_LANG['custom4_box10_term'] = "year";

// Table

$_LANG['custom4_table_heading1'] = "Main Information";
$_LANG['custom4_table_feat1'] = "Web Space";
$_LANG['custom4_table_feat2'] = "Bandwidth";
$_LANG['custom4_table_feat3'] = "Monthly Price";

$_LANG['custom4_table_heading2'] = "Plan Comparison";
$_LANG['custom4_table_feat4'] = "Web Space";
$_LANG['custom4_table_feat5'] = "Bandwidth";
$_LANG['custom4_table_feat6'] = "Addon Domains";
$_LANG['custom4_table_feat7'] = "Control Panel";
$_LANG['custom4_table_feat8'] = "Script Installer";
$_LANG['custom4_table_feat9'] = "Daily Backups";
$_LANG['custom4_table_feat10'] = "Server";
$_LANG['custom4_table_feat11'] = "Free Domain";
$_LANG['custom4_table_feat12'] = "Live Support";

$_LANG['custom4_table_heading3'] = "Key Features";
$_LANG['custom4_table_feat13'] = "Addon Domains";
$_LANG['custom4_table_feat14'] = "Databases";
$_LANG['custom4_table_feat15'] = "FTP Accounts";
$_LANG['custom4_table_feat16'] = "Email Accounts";
$_LANG['custom4_table_feat17'] = "Mailing lists";
$_LANG['custom4_table_feat18'] = "Subdomains";
$_LANG['custom4_table_feat19'] = "Email Limit";
$_LANG['custom4_table_feat20'] = "Auto Responders";
$_LANG['custom4_table_feat21'] = "Online File Manager";

$_LANG['custom4_table_heading4'] = "Free Software";
$_LANG['custom4_table_feat22'] = "Wordpress";
$_LANG['custom4_table_feat23'] = "Joomla";
$_LANG['custom4_table_feat24'] = "Drupal";
$_LANG['custom4_table_feat25'] = "Magento";
$_LANG['custom4_table_feat26'] = "Zen Cart";
$_LANG['custom4_table_feat27'] = "phpBB";
$_LANG['custom4_table_feat28'] = "myBB";
$_LANG['custom4_table_feat29'] = "SMF";
$_LANG['custom4_table_feat30'] = "PHPCoin";

// Table2 

$_LANG['custom4_table2_title0'] = "Package";
$_LANG['custom4_table2_title1'] = "CPU";
$_LANG['custom4_table2_title2'] = "RAM";
$_LANG['custom4_table2_title3'] = "Hard Drive";
$_LANG['custom4_table2_title4'] = "Bandwidth";
$_LANG['custom4_table2_title5'] = "Control Panel";
$_LANG['custom4_table2_title6'] = "Price";

$_LANG['custom4_table2_box1_feat1'] = "Intel Xeon E3-1225v3";
$_LANG['custom4_table2_box1_feat2'] = "8GB";
$_LANG['custom4_table2_box1_feat3'] = "Up to 2x2TB RAID 1";
$_LANG['custom4_table2_box1_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom4_table2_box1_feat5'] = "WHM/cPanel";
$_LANG['custom4_table2_box1_feat6'] = "$199/month";

$_LANG['custom4_table2_box2_feat1'] = "Intel Xeon E3-1230v2";
$_LANG['custom4_table2_box2_feat2'] = "12GB";
$_LANG['custom4_table2_box2_feat3'] = "2 x 2TB SATA RAID 1";
$_LANG['custom4_table2_box2_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom4_table2_box2_feat5'] = "WHM/cPanel";
$_LANG['custom4_table2_box2_feat6'] = "$299/month";

$_LANG['custom4_table2_box3_feat1'] = "Intel Xeon E5-2420 x 2";
$_LANG['custom4_table2_box3_feat2'] = "16GB";
$_LANG['custom4_table2_box3_feat3'] = "Up to 4 x 1TB SATA RAID 1 (Hardware)";
$_LANG['custom4_table2_box3_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom4_table2_box3_feat5'] = "WHM/cPanel";
$_LANG['custom4_table2_box3_feat6'] = "$399/month";

$_LANG['custom4_table2_box4_feat1'] = "Intel Xeon E5-2750 x 4";
$_LANG['custom4_table2_box4_feat2'] = "20GB";
$_LANG['custom4_table2_box4_feat3'] = "Up to 4 x 2TB SATA RAID 1 (Hardware)";
$_LANG['custom4_table2_box4_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom4_table2_box4_feat5'] = "WHM/cPanel";
$_LANG['custom4_table2_box4_feat6'] = "$499/month";

$_LANG['custom4_table2_box5_feat1'] = "Intel Xeon E5-5473 x 5";
$_LANG['custom4_table2_box5_feat2'] = "24GB";
$_LANG['custom4_table2_box5_feat3'] = "Up to 4 x 3TB SATA RAID 1 (Hardware)";
$_LANG['custom4_table2_box5_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom4_table2_box5_feat5'] = "WHM/cPanel";
$_LANG['custom4_table2_box5_feat6'] = "$599/month";

$_LANG['custom4_table2_box6_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom4_table2_box6_feat2'] = "28GB";
$_LANG['custom4_table2_box6_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom4_table2_box6_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom4_table2_box6_feat5'] = "WHM/cPanel";
$_LANG['custom4_table2_box6_feat6'] = "$699/month";

$_LANG['custom4_table2_box7_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom4_table2_box7_feat2'] = "28GB";
$_LANG['custom4_table2_box7_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom4_table2_box7_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom4_table2_box7_feat5'] = "WHM/cPanel";
$_LANG['custom4_table2_box7_feat6'] = "$699/month";

$_LANG['custom4_table2_box8_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom4_table2_box8_feat2'] = "28GB";
$_LANG['custom4_table2_box8_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom4_table2_box8_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom4_table2_box8_feat5'] = "WHM/cPanel";
$_LANG['custom4_table2_box8_feat6'] = "$699/month";

$_LANG['custom4_table2_box9_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom4_table2_box9_feat2'] = "28GB";
$_LANG['custom4_table2_box9_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom4_table2_box9_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom4_table2_box9_feat5'] = "WHM/cPanel";
$_LANG['custom4_table2_box9_feat6'] = "$699/month";

$_LANG['custom4_table2_box10_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom4_table2_box10_feat2'] = "28GB";
$_LANG['custom4_table2_box10_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom4_table2_box10_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom4_table2_box10_feat5'] = "WHM/cPanel";
$_LANG['custom4_table2_box10_feat6'] = "$699/month";

/*
-----------------------------------------
---------   Cloud Hosting page by default (File: cloud-hosting.tpl, cloud-hosting.php, includes/custom5.tpl)   ---------
-----------------------------------------
*/

// Name

$_LANG['custom5_box1_title'] = "Cloud 1";
$_LANG['custom5_box2_title'] = "Cloud 2";
$_LANG['custom5_box3_title'] = "Cloud 3";
$_LANG['custom5_box4_title'] = "Cloud 4";
$_LANG['custom5_box5_title'] = "Cloud 5";
$_LANG['custom5_box6_title'] = "Cloud 6";
$_LANG['custom5_box7_title'] = "Cloud 7";
$_LANG['custom5_box8_title'] = "Cloud 8";
$_LANG['custom5_box9_title'] = "Cloud 9";
$_LANG['custom5_box10_title'] = "Cloud 10";

// Description

$_LANG['custom5_box1_desc'] = "Perfect cloud hosting plan for beginners";
$_LANG['custom5_box2_desc'] = "Reliable low-cost cloud hosting plan";
$_LANG['custom5_box3_desc'] = "Advanced cloud hosting package";
$_LANG['custom5_box4_desc'] = "Professional cloud hosting plan";
$_LANG['custom5_box5_desc'] = "Suitable cloud plan for web designers";
$_LANG['custom5_box6_desc'] = "The best cloud plan for experts";
$_LANG['custom5_box7_desc'] = "The best cloud plan for experts";
$_LANG['custom5_box8_desc'] = "The best cloud plan for experts";
$_LANG['custom5_box9_desc'] = "The best cloud plan for experts";
$_LANG['custom5_box10_desc'] = "The best cloud plan for experts";

// Feature boxes

$_LANG['custom5_box1_feat1'] = "1GB Disk Space";
$_LANG['custom5_box1_feat2'] = "10GB Bandwidth";
$_LANG['custom5_box1_feat3'] = "5 Addon Domains";
$_LANG['custom5_box1_feat4'] = "Web Control Panel";
$_LANG['custom5_box1_feat5'] = "Software Installer";
$_LANG['custom5_box1_term'] = "year";

$_LANG['custom5_box2_feat1'] = "1GB Disk Space";
$_LANG['custom5_box2_feat2'] = "10GB Bandwidth";
$_LANG['custom5_box2_feat3'] = "5 Addon Domains";
$_LANG['custom5_box2_feat4'] = "Web Control Panel";
$_LANG['custom5_box2_feat5'] = "Software Installer";
$_LANG['custom5_box2_term'] = "month";

$_LANG['custom5_box3_feat1'] = "1GB Disk Space";
$_LANG['custom5_box3_feat2'] = "10GB Bandwidth";
$_LANG['custom5_box3_feat3'] = "5 Addon Domains";
$_LANG['custom5_box3_feat4'] = "Web Control Panel";
$_LANG['custom5_box3_feat5'] = "Software Installer";
$_LANG['custom5_box3_term'] = "year";

$_LANG['custom5_box4_feat1'] = "1GB Disk Space";
$_LANG['custom5_box4_feat2'] = "10GB Bandwidth";
$_LANG['custom5_box4_feat3'] = "5 Addon Domains";
$_LANG['custom5_box4_feat4'] = "Web Control Panel";
$_LANG['custom5_box4_feat5'] = "Software Installer";
$_LANG['custom5_box4_term'] = "month";

$_LANG['custom5_box5_feat1'] = "1GB Disk Space";
$_LANG['custom5_box5_feat2'] = "10GB Bandwidth";
$_LANG['custom5_box5_feat3'] = "5 Addon Domains";
$_LANG['custom5_box5_feat4'] = "Web Control Panel";
$_LANG['custom5_box5_feat5'] = "Software Installer";
$_LANG['custom5_box5_term'] = "month";

$_LANG['custom5_box6_feat1'] = "1GB Disk Space";
$_LANG['custom5_box6_feat2'] = "10GB Bandwidth";
$_LANG['custom5_box6_feat3'] = "5 Addon Domains";
$_LANG['custom5_box6_feat4'] = "Web Control Panel";
$_LANG['custom5_box6_feat5'] = "Software Installer";
$_LANG['custom5_box6_term'] = "year";

$_LANG['custom5_box7_feat1'] = "1GB Disk Space";
$_LANG['custom5_box7_feat2'] = "10GB Bandwidth";
$_LANG['custom5_box7_feat3'] = "5 Addon Domains";
$_LANG['custom5_box7_feat4'] = "Web Control Panel";
$_LANG['custom5_box7_feat5'] = "Software Installer";
$_LANG['custom5_box7_term'] = "year";

$_LANG['custom5_box8_feat1'] = "1GB Disk Space";
$_LANG['custom5_box8_feat2'] = "10GB Bandwidth";
$_LANG['custom5_box8_feat3'] = "5 Addon Domains";
$_LANG['custom5_box8_feat4'] = "Web Control Panel";
$_LANG['custom5_box8_feat5'] = "Software Installer";
$_LANG['custom5_box8_term'] = "year";

$_LANG['custom5_box9_feat1'] = "1GB Disk Space";
$_LANG['custom5_box9_feat2'] = "10GB Bandwidth";
$_LANG['custom5_box9_feat3'] = "5 Addon Domains";
$_LANG['custom5_box9_feat4'] = "Web Control Panel";
$_LANG['custom5_box9_feat5'] = "Software Installer";
$_LANG['custom5_box9_term'] = "year";

$_LANG['custom5_box10_feat1'] = "1GB Disk Space";
$_LANG['custom5_box10_feat2'] = "10GB Bandwidth";
$_LANG['custom5_box10_feat3'] = "5 Addon Domains";
$_LANG['custom5_box10_feat4'] = "Web Control Panel";
$_LANG['custom5_box10_feat5'] = "Software Installer";
$_LANG['custom5_box10_term'] = "year";

// Table

$_LANG['custom5_table_heading1'] = "Main Information";
$_LANG['custom5_table_feat1'] = "Web Space";
$_LANG['custom5_table_feat2'] = "Bandwidth";
$_LANG['custom5_table_feat3'] = "Monthly Price";

$_LANG['custom5_table_heading2'] = "Plan Comparison";
$_LANG['custom5_table_feat4'] = "Web Space";
$_LANG['custom5_table_feat5'] = "Bandwidth";
$_LANG['custom5_table_feat6'] = "Addon Domains";
$_LANG['custom5_table_feat7'] = "Control Panel";
$_LANG['custom5_table_feat8'] = "Script Installer";
$_LANG['custom5_table_feat9'] = "Daily Backups";
$_LANG['custom5_table_feat10'] = "Server";
$_LANG['custom5_table_feat11'] = "Free Domain";
$_LANG['custom5_table_feat12'] = "Live Support";

$_LANG['custom5_table_heading3'] = "Key Features";
$_LANG['custom5_table_feat13'] = "Addon Domains";
$_LANG['custom5_table_feat14'] = "Databases";
$_LANG['custom5_table_feat15'] = "FTP Accounts";
$_LANG['custom5_table_feat16'] = "Email Accounts";
$_LANG['custom5_table_feat17'] = "Mailing lists";
$_LANG['custom5_table_feat18'] = "Subdomains";
$_LANG['custom5_table_feat19'] = "Email Limit";
$_LANG['custom5_table_feat20'] = "Auto Responders";
$_LANG['custom5_table_feat21'] = "Online File Manager";

$_LANG['custom5_table_heading4'] = "Free Software";
$_LANG['custom5_table_feat22'] = "Wordpress";
$_LANG['custom5_table_feat23'] = "Joomla";
$_LANG['custom5_table_feat24'] = "Drupal";
$_LANG['custom5_table_feat25'] = "Magento";
$_LANG['custom5_table_feat26'] = "Zen Cart";
$_LANG['custom5_table_feat27'] = "phpBB";
$_LANG['custom5_table_feat28'] = "myBB";
$_LANG['custom5_table_feat29'] = "SMF";
$_LANG['custom5_table_feat30'] = "PHPCoin";

// Table2 

$_LANG['custom5_table2_title0'] = "Package";
$_LANG['custom5_table2_title1'] = "CPU";
$_LANG['custom5_table2_title2'] = "RAM";
$_LANG['custom5_table2_title3'] = "Hard Drive";
$_LANG['custom5_table2_title4'] = "Bandwidth";
$_LANG['custom5_table2_title5'] = "Control Panel";
$_LANG['custom5_table2_title6'] = "Price";

$_LANG['custom5_table2_box1_feat1'] = "Intel Xeon E3-1225v3";
$_LANG['custom5_table2_box1_feat2'] = "8GB";
$_LANG['custom5_table2_box1_feat3'] = "Up to 2x2TB RAID 1";
$_LANG['custom5_table2_box1_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom5_table2_box1_feat5'] = "WHM/cPanel";
$_LANG['custom5_table2_box1_feat6'] = "$199/month";

$_LANG['custom5_table2_box2_feat1'] = "Intel Xeon E3-1230v2";
$_LANG['custom5_table2_box2_feat2'] = "12GB";
$_LANG['custom5_table2_box2_feat3'] = "2 x 2TB SATA RAID 1";
$_LANG['custom5_table2_box2_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom5_table2_box2_feat5'] = "WHM/cPanel";
$_LANG['custom5_table2_box2_feat6'] = "$299/month";

$_LANG['custom5_table2_box3_feat1'] = "Intel Xeon E5-2420 x 2";
$_LANG['custom5_table2_box3_feat2'] = "16GB";
$_LANG['custom5_table2_box3_feat3'] = "Up to 4 x 1TB SATA RAID 1 (Hardware)";
$_LANG['custom5_table2_box3_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom5_table2_box3_feat5'] = "WHM/cPanel";
$_LANG['custom5_table2_box3_feat6'] = "$399/month";

$_LANG['custom5_table2_box4_feat1'] = "Intel Xeon E5-2750 x 4";
$_LANG['custom5_table2_box4_feat2'] = "20GB";
$_LANG['custom5_table2_box4_feat3'] = "Up to 4 x 2TB SATA RAID 1 (Hardware)";
$_LANG['custom5_table2_box4_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom5_table2_box4_feat5'] = "WHM/cPanel";
$_LANG['custom5_table2_box4_feat6'] = "$499/month";

$_LANG['custom5_table2_box5_feat1'] = "Intel Xeon E5-5473 x 5";
$_LANG['custom5_table2_box5_feat2'] = "24GB";
$_LANG['custom5_table2_box5_feat3'] = "Up to 4 x 3TB SATA RAID 1 (Hardware)";
$_LANG['custom5_table2_box5_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom5_table2_box5_feat5'] = "WHM/cPanel";
$_LANG['custom5_table2_box5_feat6'] = "$599/month";

$_LANG['custom5_table2_box6_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom5_table2_box6_feat2'] = "28GB";
$_LANG['custom5_table2_box6_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom5_table2_box6_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom5_table2_box6_feat5'] = "WHM/cPanel";
$_LANG['custom5_table2_box6_feat6'] = "$699/month";

$_LANG['custom5_table2_box7_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom5_table2_box7_feat2'] = "28GB";
$_LANG['custom5_table2_box7_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom5_table2_box7_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom5_table2_box7_feat5'] = "WHM/cPanel";
$_LANG['custom5_table2_box7_feat6'] = "$699/month";

$_LANG['custom5_table2_box8_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom5_table2_box8_feat2'] = "28GB";
$_LANG['custom5_table2_box8_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom5_table2_box8_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom5_table2_box8_feat5'] = "WHM/cPanel";
$_LANG['custom5_table2_box8_feat6'] = "$699/month";

$_LANG['custom5_table2_box9_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom5_table2_box9_feat2'] = "28GB";
$_LANG['custom5_table2_box9_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom5_table2_box9_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom5_table2_box9_feat5'] = "WHM/cPanel";
$_LANG['custom5_table2_box9_feat6'] = "$699/month";

$_LANG['custom5_table2_box10_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom5_table2_box10_feat2'] = "28GB";
$_LANG['custom5_table2_box10_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom5_table2_box10_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom5_table2_box10_feat5'] = "WHM/cPanel";
$_LANG['custom5_table2_box10_feat6'] = "$699/month";

/*
-----------------------------------------
---------   Game Servers page by default (File: game-servers.tpl, game-servers.php, includes/custom6.tpl)   ---------
-----------------------------------------
*/

// Name

$_LANG['custom6_box1_title'] = "Game 1";
$_LANG['custom6_box2_title'] = "Game 2";
$_LANG['custom6_box3_title'] = "Game 3";
$_LANG['custom6_box4_title'] = "Game 4";
$_LANG['custom6_box5_title'] = "Game 5";
$_LANG['custom6_box6_title'] = "Game 6";
$_LANG['custom6_box7_title'] = "Game 6";
$_LANG['custom6_box8_title'] = "Game 6";
$_LANG['custom6_box9_title'] = "Game 6";
$_LANG['custom6_box10_title'] = "Game 6";

// Description

$_LANG['custom6_box1_desc'] = "Perfect game hosting plan for beginners";
$_LANG['custom6_box2_desc'] = "Reliable low-cost game hosting plan";
$_LANG['custom6_box3_desc'] = "Advanced game hosting package";
$_LANG['custom6_box4_desc'] = "Professional game hosting plan";
$_LANG['custom6_box5_desc'] = "Suitable game plan for web designers";
$_LANG['custom6_box6_desc'] = "The best game plan for experts";
$_LANG['custom6_box7_desc'] = "The best game plan for experts";
$_LANG['custom6_box8_desc'] = "The best game plan for experts";
$_LANG['custom6_box9_desc'] = "The best game plan for experts";
$_LANG['custom6_box10_desc'] = "The best game plan for experts";

// Feature boxes

$_LANG['custom6_box1_feat1'] = "1GB Disk Space";
$_LANG['custom6_box1_feat2'] = "10GB Bandwidth";
$_LANG['custom6_box1_feat3'] = "5 Addon Domains";
$_LANG['custom6_box1_feat4'] = "Web Control Panel";
$_LANG['custom6_box1_feat5'] = "Software Installer";
$_LANG['custom6_box1_term'] = "year";

$_LANG['custom6_box2_feat1'] = "1GB Disk Space";
$_LANG['custom6_box2_feat2'] = "10GB Bandwidth";
$_LANG['custom6_box2_feat3'] = "5 Addon Domains";
$_LANG['custom6_box2_feat4'] = "Web Control Panel";
$_LANG['custom6_box2_feat5'] = "Software Installer";
$_LANG['custom6_box2_term'] = "month";

$_LANG['custom6_box3_feat1'] = "1GB Disk Space";
$_LANG['custom6_box3_feat2'] = "10GB Bandwidth";
$_LANG['custom6_box3_feat3'] = "5 Addon Domains";
$_LANG['custom6_box3_feat4'] = "Web Control Panel";
$_LANG['custom6_box3_feat5'] = "Software Installer";
$_LANG['custom6_box3_term'] = "year";

$_LANG['custom6_box4_feat1'] = "1GB Disk Space";
$_LANG['custom6_box4_feat2'] = "10GB Bandwidth";
$_LANG['custom6_box4_feat3'] = "5 Addon Domains";
$_LANG['custom6_box4_feat4'] = "Web Control Panel";
$_LANG['custom6_box4_feat5'] = "Software Installer";
$_LANG['custom6_box4_term'] = "month";

$_LANG['custom6_box5_feat1'] = "1GB Disk Space";
$_LANG['custom6_box5_feat2'] = "10GB Bandwidth";
$_LANG['custom6_box5_feat3'] = "5 Addon Domains";
$_LANG['custom6_box5_feat4'] = "Web Control Panel";
$_LANG['custom6_box5_feat5'] = "Software Installer";
$_LANG['custom6_box5_term'] = "month";

$_LANG['custom6_box6_feat1'] = "1GB Disk Space";
$_LANG['custom6_box6_feat2'] = "10GB Bandwidth";
$_LANG['custom6_box6_feat3'] = "5 Addon Domains";
$_LANG['custom6_box6_feat4'] = "Web Control Panel";
$_LANG['custom6_box6_feat5'] = "Software Installer";
$_LANG['custom6_box6_term'] = "year";

$_LANG['custom6_box7_feat1'] = "1GB Disk Space";
$_LANG['custom6_box7_feat2'] = "10GB Bandwidth";
$_LANG['custom6_box7_feat3'] = "5 Addon Domains";
$_LANG['custom6_box7_feat4'] = "Web Control Panel";
$_LANG['custom6_box7_feat5'] = "Software Installer";
$_LANG['custom6_box7_term'] = "year";

$_LANG['custom6_box8_feat1'] = "1GB Disk Space";
$_LANG['custom6_box8_feat2'] = "10GB Bandwidth";
$_LANG['custom6_box8_feat3'] = "5 Addon Domains";
$_LANG['custom6_box8_feat4'] = "Web Control Panel";
$_LANG['custom6_box8_feat5'] = "Software Installer";
$_LANG['custom6_box8_term'] = "year";

$_LANG['custom6_box9_feat1'] = "1GB Disk Space";
$_LANG['custom6_box9_feat2'] = "10GB Bandwidth";
$_LANG['custom6_box9_feat3'] = "5 Addon Domains";
$_LANG['custom6_box9_feat4'] = "Web Control Panel";
$_LANG['custom6_box9_feat5'] = "Software Installer";
$_LANG['custom6_box9_term'] = "year";

$_LANG['custom6_box10_feat1'] = "1GB Disk Space";
$_LANG['custom6_box10_feat2'] = "10GB Bandwidth";
$_LANG['custom6_box10_feat3'] = "5 Addon Domains";
$_LANG['custom6_box10_feat4'] = "Web Control Panel";
$_LANG['custom6_box10_feat5'] = "Software Installer";
$_LANG['custom6_box10_term'] = "year";

// Table

$_LANG['custom6_table_heading1'] = "Main Information";
$_LANG['custom6_table_feat1'] = "Web Space";
$_LANG['custom6_table_feat2'] = "Bandwidth";
$_LANG['custom6_table_feat3'] = "Monthly Price";

$_LANG['custom6_table_heading2'] = "Plan Comparison";
$_LANG['custom6_table_feat4'] = "Web Space";
$_LANG['custom6_table_feat5'] = "Bandwidth";
$_LANG['custom6_table_feat6'] = "Addon Domains";
$_LANG['custom6_table_feat7'] = "Control Panel";
$_LANG['custom6_table_feat8'] = "Script Installer";
$_LANG['custom6_table_feat9'] = "Daily Backups";
$_LANG['custom6_table_feat10'] = "Server";
$_LANG['custom6_table_feat11'] = "Free Domain";
$_LANG['custom6_table_feat12'] = "Live Support";

$_LANG['custom6_table_heading3'] = "Key Features";
$_LANG['custom6_table_feat13'] = "Addon Domains";
$_LANG['custom6_table_feat14'] = "Databases";
$_LANG['custom6_table_feat15'] = "FTP Accounts";
$_LANG['custom6_table_feat16'] = "Email Accounts";
$_LANG['custom6_table_feat17'] = "Mailing lists";
$_LANG['custom6_table_feat18'] = "Subdomains";
$_LANG['custom6_table_feat19'] = "Email Limit";
$_LANG['custom6_table_feat20'] = "Auto Responders";
$_LANG['custom6_table_feat21'] = "Online File Manager";

$_LANG['custom6_table_heading4'] = "Free Software";
$_LANG['custom6_table_feat22'] = "Wordpress";
$_LANG['custom6_table_feat23'] = "Joomla";
$_LANG['custom6_table_feat24'] = "Drupal";
$_LANG['custom6_table_feat25'] = "Magento";
$_LANG['custom6_table_feat26'] = "Zen Cart";
$_LANG['custom6_table_feat27'] = "phpBB";
$_LANG['custom6_table_feat28'] = "myBB";
$_LANG['custom6_table_feat29'] = "SMF";
$_LANG['custom6_table_feat30'] = "PHPCoin";

// Table2 

$_LANG['custom6_table2_title0'] = "Package";
$_LANG['custom6_table2_title1'] = "CPU";
$_LANG['custom6_table2_title2'] = "RAM";
$_LANG['custom6_table2_title3'] = "Hard Drive";
$_LANG['custom6_table2_title4'] = "Bandwidth";
$_LANG['custom6_table2_title5'] = "Control Panel";
$_LANG['custom6_table2_title6'] = "Price";

$_LANG['custom6_table2_box1_feat1'] = "Intel Xeon E3-1225v3";
$_LANG['custom6_table2_box1_feat2'] = "8GB";
$_LANG['custom6_table2_box1_feat3'] = "Up to 2x2TB RAID 1";
$_LANG['custom6_table2_box1_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom6_table2_box1_feat5'] = "WHM/cPanel";
$_LANG['custom6_table2_box1_feat6'] = "$199/month";

$_LANG['custom6_table2_box2_feat1'] = "Intel Xeon E3-1230v2";
$_LANG['custom6_table2_box2_feat2'] = "12GB";
$_LANG['custom6_table2_box2_feat3'] = "2 x 2TB SATA RAID 1";
$_LANG['custom6_table2_box2_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom6_table2_box2_feat5'] = "WHM/cPanel";
$_LANG['custom6_table2_box2_feat6'] = "$299/month";

$_LANG['custom6_table2_box3_feat1'] = "Intel Xeon E5-2420 x 2";
$_LANG['custom6_table2_box3_feat2'] = "16GB";
$_LANG['custom6_table2_box3_feat3'] = "Up to 4 x 1TB SATA RAID 1 (Hardware)";
$_LANG['custom6_table2_box3_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom6_table2_box3_feat5'] = "WHM/cPanel";
$_LANG['custom6_table2_box3_feat6'] = "$399/month";

$_LANG['custom6_table2_box4_feat1'] = "Intel Xeon E5-2750 x 4";
$_LANG['custom6_table2_box4_feat2'] = "20GB";
$_LANG['custom6_table2_box4_feat3'] = "Up to 4 x 2TB SATA RAID 1 (Hardware)";
$_LANG['custom6_table2_box4_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom6_table2_box4_feat5'] = "WHM/cPanel";
$_LANG['custom6_table2_box4_feat6'] = "$499/month";

$_LANG['custom6_table2_box5_feat1'] = "Intel Xeon E5-5473 x 5";
$_LANG['custom6_table2_box5_feat2'] = "24GB";
$_LANG['custom6_table2_box5_feat3'] = "Up to 4 x 3TB SATA RAID 1 (Hardware)";
$_LANG['custom6_table2_box5_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom6_table2_box5_feat5'] = "WHM/cPanel";
$_LANG['custom6_table2_box5_feat6'] = "$599/month";

$_LANG['custom6_table2_box6_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom6_table2_box6_feat2'] = "28GB";
$_LANG['custom6_table2_box6_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom6_table2_box6_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom6_table2_box6_feat5'] = "WHM/cPanel";
$_LANG['custom6_table2_box6_feat6'] = "$699/month";

$_LANG['custom6_table2_box7_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom6_table2_box7_feat2'] = "28GB";
$_LANG['custom6_table2_box7_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom6_table2_box7_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom6_table2_box7_feat5'] = "WHM/cPanel";
$_LANG['custom6_table2_box7_feat6'] = "$699/month";

$_LANG['custom6_table2_box8_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom6_table2_box8_feat2'] = "28GB";
$_LANG['custom6_table2_box8_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom6_table2_box8_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom6_table2_box8_feat5'] = "WHM/cPanel";
$_LANG['custom6_table2_box8_feat6'] = "$699/month";

$_LANG['custom6_table2_box9_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom6_table2_box9_feat2'] = "28GB";
$_LANG['custom6_table2_box9_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom6_table2_box9_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom6_table2_box9_feat5'] = "WHM/cPanel";
$_LANG['custom6_table2_box9_feat6'] = "$699/month";

$_LANG['custom6_table2_box10_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom6_table2_box10_feat2'] = "28GB";
$_LANG['custom6_table2_box10_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom6_table2_box10_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom6_table2_box10_feat5'] = "WHM/cPanel";
$_LANG['custom6_table2_box10_feat6'] = "$699/month";

/*
-----------------------------------------
---------   Virtual Private Network page by default (File: virtual-private-network.tpl, virtual-private-network.php, includes/custom7.tpl)   ---------
-----------------------------------------
*/

// Name

$_LANG['custom7_box1_title'] = "VPN 1";
$_LANG['custom7_box2_title'] = "VPN 2";
$_LANG['custom7_box3_title'] = "VPN 3";
$_LANG['custom7_box4_title'] = "VPN 4";
$_LANG['custom7_box5_title'] = "VPN 5";
$_LANG['custom7_box6_title'] = "VPN 6";
$_LANG['custom7_box7_title'] = "VPN 6";
$_LANG['custom7_box8_title'] = "VPN 6";
$_LANG['custom7_box9_title'] = "VPN 6";
$_LANG['custom7_box10_title'] = "VPN 6";

// Description

$_LANG['custom7_box1_desc'] = "Perfect VPN hosting plan for beginners";
$_LANG['custom7_box2_desc'] = "Reliable low-cost VPN hosting plan";
$_LANG['custom7_box3_desc'] = "Advanced VPN hosting package";
$_LANG['custom7_box4_desc'] = "Professional VPN hosting plan";
$_LANG['custom7_box5_desc'] = "Suitable VPN plan for web designers";
$_LANG['custom7_box6_desc'] = "The best VPN plan for experts";
$_LANG['custom7_box7_desc'] = "The best VPN plan for experts";
$_LANG['custom7_box8_desc'] = "The best VPN plan for experts";
$_LANG['custom7_box9_desc'] = "The best VPN plan for experts";
$_LANG['custom7_box10_desc'] = "The best VPN plan for experts";

// Feature boxes

$_LANG['custom7_box1_feat1'] = "1GB Disk Space";
$_LANG['custom7_box1_feat2'] = "10GB Bandwidth";
$_LANG['custom7_box1_feat3'] = "5 Addon Domains";
$_LANG['custom7_box1_feat4'] = "Web Control Panel";
$_LANG['custom7_box1_feat5'] = "Software Installer";
$_LANG['custom7_box1_term'] = "year";

$_LANG['custom7_box2_feat1'] = "1GB Disk Space";
$_LANG['custom7_box2_feat2'] = "10GB Bandwidth";
$_LANG['custom7_box2_feat3'] = "5 Addon Domains";
$_LANG['custom7_box2_feat4'] = "Web Control Panel";
$_LANG['custom7_box2_feat5'] = "Software Installer";
$_LANG['custom7_box2_term'] = "month";

$_LANG['custom7_box3_feat1'] = "1GB Disk Space";
$_LANG['custom7_box3_feat2'] = "10GB Bandwidth";
$_LANG['custom7_box3_feat3'] = "5 Addon Domains";
$_LANG['custom7_box3_feat4'] = "Web Control Panel";
$_LANG['custom7_box3_feat5'] = "Software Installer";
$_LANG['custom7_box3_term'] = "year";

$_LANG['custom7_box4_feat1'] = "1GB Disk Space";
$_LANG['custom7_box4_feat2'] = "10GB Bandwidth";
$_LANG['custom7_box4_feat3'] = "5 Addon Domains";
$_LANG['custom7_box4_feat4'] = "Web Control Panel";
$_LANG['custom7_box4_feat5'] = "Software Installer";
$_LANG['custom7_box4_term'] = "month";

$_LANG['custom7_box5_feat1'] = "1GB Disk Space";
$_LANG['custom7_box5_feat2'] = "10GB Bandwidth";
$_LANG['custom7_box5_feat3'] = "5 Addon Domains";
$_LANG['custom7_box5_feat4'] = "Web Control Panel";
$_LANG['custom7_box5_feat5'] = "Software Installer";
$_LANG['custom7_box5_term'] = "month";

$_LANG['custom7_box6_feat1'] = "1GB Disk Space";
$_LANG['custom7_box6_feat2'] = "10GB Bandwidth";
$_LANG['custom7_box6_feat3'] = "5 Addon Domains";
$_LANG['custom7_box6_feat4'] = "Web Control Panel";
$_LANG['custom7_box6_feat5'] = "Software Installer";
$_LANG['custom7_box6_term'] = "year";

$_LANG['custom7_box7_feat1'] = "1GB Disk Space";
$_LANG['custom7_box7_feat2'] = "10GB Bandwidth";
$_LANG['custom7_box7_feat3'] = "5 Addon Domains";
$_LANG['custom7_box7_feat4'] = "Web Control Panel";
$_LANG['custom7_box7_feat5'] = "Software Installer";
$_LANG['custom7_box7_term'] = "year";

$_LANG['custom7_box8_feat1'] = "1GB Disk Space";
$_LANG['custom7_box8_feat2'] = "10GB Bandwidth";
$_LANG['custom7_box8_feat3'] = "5 Addon Domains";
$_LANG['custom7_box8_feat4'] = "Web Control Panel";
$_LANG['custom7_box8_feat5'] = "Software Installer";
$_LANG['custom7_box8_term'] = "year";

$_LANG['custom7_box9_feat1'] = "1GB Disk Space";
$_LANG['custom7_box9_feat2'] = "10GB Bandwidth";
$_LANG['custom7_box9_feat3'] = "5 Addon Domains";
$_LANG['custom7_box9_feat4'] = "Web Control Panel";
$_LANG['custom7_box9_feat5'] = "Software Installer";
$_LANG['custom7_box9_term'] = "year";

$_LANG['custom7_box10_feat1'] = "1GB Disk Space";
$_LANG['custom7_box10_feat2'] = "10GB Bandwidth";
$_LANG['custom7_box10_feat3'] = "5 Addon Domains";
$_LANG['custom7_box10_feat4'] = "Web Control Panel";
$_LANG['custom7_box10_feat5'] = "Software Installer";
$_LANG['custom7_box10_term'] = "year";

// Table

$_LANG['custom7_table_heading1'] = "Main Information";
$_LANG['custom7_table_feat1'] = "Web Space";
$_LANG['custom7_table_feat2'] = "Bandwidth";
$_LANG['custom7_table_feat3'] = "Monthly Price";

$_LANG['custom7_table_heading2'] = "Plan Comparison";
$_LANG['custom7_table_feat4'] = "Web Space";
$_LANG['custom7_table_feat5'] = "Bandwidth";
$_LANG['custom7_table_feat6'] = "Addon Domains";
$_LANG['custom7_table_feat7'] = "Control Panel";
$_LANG['custom7_table_feat8'] = "Script Installer";
$_LANG['custom7_table_feat9'] = "Daily Backups";
$_LANG['custom7_table_feat10'] = "Server";
$_LANG['custom7_table_feat11'] = "Free Domain";
$_LANG['custom7_table_feat12'] = "Live Support";

$_LANG['custom7_table_heading3'] = "Key Features";
$_LANG['custom7_table_feat13'] = "Addon Domains";
$_LANG['custom7_table_feat14'] = "Databases";
$_LANG['custom7_table_feat15'] = "FTP Accounts";
$_LANG['custom7_table_feat16'] = "Email Accounts";
$_LANG['custom7_table_feat17'] = "Mailing lists";
$_LANG['custom7_table_feat18'] = "Subdomains";
$_LANG['custom7_table_feat19'] = "Email Limit";
$_LANG['custom7_table_feat20'] = "Auto Responders";
$_LANG['custom7_table_feat21'] = "Online File Manager";

$_LANG['custom7_table_heading4'] = "Free Software";
$_LANG['custom7_table_feat22'] = "Wordpress";
$_LANG['custom7_table_feat23'] = "Joomla";
$_LANG['custom7_table_feat24'] = "Drupal";
$_LANG['custom7_table_feat25'] = "Magento";
$_LANG['custom7_table_feat26'] = "Zen Cart";
$_LANG['custom7_table_feat27'] = "phpBB";
$_LANG['custom7_table_feat28'] = "myBB";
$_LANG['custom7_table_feat29'] = "SMF";
$_LANG['custom7_table_feat30'] = "PHPCoin";

// Table2 

$_LANG['custom7_table2_title0'] = "Package";
$_LANG['custom7_table2_title1'] = "CPU";
$_LANG['custom7_table2_title2'] = "RAM";
$_LANG['custom7_table2_title3'] = "Hard Drive";
$_LANG['custom7_table2_title4'] = "Bandwidth";
$_LANG['custom7_table2_title5'] = "Control Panel";
$_LANG['custom7_table2_title6'] = "Price";

$_LANG['custom7_table2_box1_feat1'] = "Intel Xeon E3-1225v3";
$_LANG['custom7_table2_box1_feat2'] = "8GB";
$_LANG['custom7_table2_box1_feat3'] = "Up to 2x2TB RAID 1";
$_LANG['custom7_table2_box1_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom7_table2_box1_feat5'] = "WHM/cPanel";
$_LANG['custom7_table2_box1_feat6'] = "$199/month";

$_LANG['custom7_table2_box2_feat1'] = "Intel Xeon E3-1230v2";
$_LANG['custom7_table2_box2_feat2'] = "12GB";
$_LANG['custom7_table2_box2_feat3'] = "2 x 2TB SATA RAID 1";
$_LANG['custom7_table2_box2_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom7_table2_box2_feat5'] = "WHM/cPanel";
$_LANG['custom7_table2_box2_feat6'] = "$299/month";

$_LANG['custom7_table2_box3_feat1'] = "Intel Xeon E5-2420 x 2";
$_LANG['custom7_table2_box3_feat2'] = "16GB";
$_LANG['custom7_table2_box3_feat3'] = "Up to 4 x 1TB SATA RAID 1 (Hardware)";
$_LANG['custom7_table2_box3_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom7_table2_box3_feat5'] = "WHM/cPanel";
$_LANG['custom7_table2_box3_feat6'] = "$399/month";

$_LANG['custom7_table2_box4_feat1'] = "Intel Xeon E5-2750 x 4";
$_LANG['custom7_table2_box4_feat2'] = "20GB";
$_LANG['custom7_table2_box4_feat3'] = "Up to 4 x 2TB SATA RAID 1 (Hardware)";
$_LANG['custom7_table2_box4_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom7_table2_box4_feat5'] = "WHM/cPanel";
$_LANG['custom7_table2_box4_feat6'] = "$499/month";

$_LANG['custom7_table2_box5_feat1'] = "Intel Xeon E5-5473 x 5";
$_LANG['custom7_table2_box5_feat2'] = "24GB";
$_LANG['custom7_table2_box5_feat3'] = "Up to 4 x 3TB SATA RAID 1 (Hardware)";
$_LANG['custom7_table2_box5_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom7_table2_box5_feat5'] = "WHM/cPanel";
$_LANG['custom7_table2_box5_feat6'] = "$599/month";

$_LANG['custom7_table2_box6_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom7_table2_box6_feat2'] = "28GB";
$_LANG['custom7_table2_box6_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom7_table2_box6_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom7_table2_box6_feat5'] = "WHM/cPanel";
$_LANG['custom7_table2_box6_feat6'] = "$699/month";

$_LANG['custom7_table2_box7_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom7_table2_box7_feat2'] = "28GB";
$_LANG['custom7_table2_box7_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom7_table2_box7_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom7_table2_box7_feat5'] = "WHM/cPanel";
$_LANG['custom7_table2_box7_feat6'] = "$699/month";

$_LANG['custom7_table2_box8_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom7_table2_box8_feat2'] = "28GB";
$_LANG['custom7_table2_box8_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom7_table2_box8_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom7_table2_box8_feat5'] = "WHM/cPanel";
$_LANG['custom7_table2_box8_feat6'] = "$699/month";

$_LANG['custom7_table2_box9_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom7_table2_box9_feat2'] = "28GB";
$_LANG['custom7_table2_box9_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom7_table2_box9_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom7_table2_box9_feat5'] = "WHM/cPanel";
$_LANG['custom7_table2_box9_feat6'] = "$699/month";

$_LANG['custom7_table2_box10_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom7_table2_box10_feat2'] = "28GB";
$_LANG['custom7_table2_box10_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom7_table2_box10_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom7_table2_box10_feat5'] = "WHM/cPanel";
$_LANG['custom7_table2_box10_feat6'] = "$699/month";

/*
-----------------------------------------
---------   SSL Certificates page by default (File: ssl-certificates.tpl, ssl-certificates.php, includes/custom8.tpl)   ---------
-----------------------------------------
*/

// Name

$_LANG['custom8_box1_title'] = "SSL 1";
$_LANG['custom8_box2_title'] = "SSL 2";
$_LANG['custom8_box3_title'] = "SSL 3";
$_LANG['custom8_box4_title'] = "SSL 4";
$_LANG['custom8_box5_title'] = "SSL 5";
$_LANG['custom8_box6_title'] = "SSL 6";
$_LANG['custom8_box7_title'] = "SSL 7";
$_LANG['custom8_box8_title'] = "SSL 8";
$_LANG['custom8_box9_title'] = "SSL 9";
$_LANG['custom8_box10_title'] = "SSL 10";

// Description

$_LANG['custom8_box1_desc'] = "Perfect SSL hosting plan for beginners";
$_LANG['custom8_box2_desc'] = "Reliable low-cost SSL hosting plan";
$_LANG['custom8_box3_desc'] = "Advanced SSL hosting package";
$_LANG['custom8_box4_desc'] = "Professional SSL hosting plan";
$_LANG['custom8_box5_desc'] = "Suitable SSL plan for web designers";
$_LANG['custom8_box6_desc'] = "The best SSL plan for experts";
$_LANG['custom8_box7_desc'] = "The best SSL plan for experts";
$_LANG['custom8_box8_desc'] = "The best SSL plan for experts";
$_LANG['custom8_box9_desc'] = "The best SSL plan for experts";
$_LANG['custom8_box10_desc'] = "The best SSL plan for experts";

// Feature boxes

$_LANG['custom8_box1_feat1'] = "1GB Disk Space";
$_LANG['custom8_box1_feat2'] = "10GB Bandwidth";
$_LANG['custom8_box1_feat3'] = "5 Addon Domains";
$_LANG['custom8_box1_feat4'] = "Web Control Panel";
$_LANG['custom8_box1_feat5'] = "Software Installer";
$_LANG['custom8_box1_term'] = "year";

$_LANG['custom8_box2_feat1'] = "1GB Disk Space";
$_LANG['custom8_box2_feat2'] = "10GB Bandwidth";
$_LANG['custom8_box2_feat3'] = "5 Addon Domains";
$_LANG['custom8_box2_feat4'] = "Web Control Panel";
$_LANG['custom8_box2_feat5'] = "Software Installer";
$_LANG['custom8_box2_term'] = "month";

$_LANG['custom8_box3_feat1'] = "1GB Disk Space";
$_LANG['custom8_box3_feat2'] = "10GB Bandwidth";
$_LANG['custom8_box3_feat3'] = "5 Addon Domains";
$_LANG['custom8_box3_feat4'] = "Web Control Panel";
$_LANG['custom8_box3_feat5'] = "Software Installer";
$_LANG['custom8_box3_term'] = "year";

$_LANG['custom8_box4_feat1'] = "1GB Disk Space";
$_LANG['custom8_box4_feat2'] = "10GB Bandwidth";
$_LANG['custom8_box4_feat3'] = "5 Addon Domains";
$_LANG['custom8_box4_feat4'] = "Web Control Panel";
$_LANG['custom8_box4_feat5'] = "Software Installer";
$_LANG['custom8_box4_term'] = "month";

$_LANG['custom8_box5_feat1'] = "1GB Disk Space";
$_LANG['custom8_box5_feat2'] = "10GB Bandwidth";
$_LANG['custom8_box5_feat3'] = "5 Addon Domains";
$_LANG['custom8_box5_feat4'] = "Web Control Panel";
$_LANG['custom8_box5_feat5'] = "Software Installer";
$_LANG['custom8_box5_term'] = "month";

$_LANG['custom8_box6_feat1'] = "1GB Disk Space";
$_LANG['custom8_box6_feat2'] = "10GB Bandwidth";
$_LANG['custom8_box6_feat3'] = "5 Addon Domains";
$_LANG['custom8_box6_feat4'] = "Web Control Panel";
$_LANG['custom8_box6_feat5'] = "Software Installer";
$_LANG['custom8_box6_term'] = "year";

$_LANG['custom8_box7_feat1'] = "1GB Disk Space";
$_LANG['custom8_box7_feat2'] = "10GB Bandwidth";
$_LANG['custom8_box7_feat3'] = "5 Addon Domains";
$_LANG['custom8_box7_feat4'] = "Web Control Panel";
$_LANG['custom8_box7_feat5'] = "Software Installer";
$_LANG['custom8_box7_term'] = "year";

$_LANG['custom8_box8_feat1'] = "1GB Disk Space";
$_LANG['custom8_box8_feat2'] = "10GB Bandwidth";
$_LANG['custom8_box8_feat3'] = "5 Addon Domains";
$_LANG['custom8_box8_feat4'] = "Web Control Panel";
$_LANG['custom8_box8_feat5'] = "Software Installer";
$_LANG['custom8_box8_term'] = "year";

$_LANG['custom8_box9_feat1'] = "1GB Disk Space";
$_LANG['custom8_box9_feat2'] = "10GB Bandwidth";
$_LANG['custom8_box9_feat3'] = "5 Addon Domains";
$_LANG['custom8_box9_feat4'] = "Web Control Panel";
$_LANG['custom8_box9_feat5'] = "Software Installer";
$_LANG['custom8_box9_term'] = "year";

$_LANG['custom8_box10_feat1'] = "1GB Disk Space";
$_LANG['custom8_box10_feat2'] = "10GB Bandwidth";
$_LANG['custom8_box10_feat3'] = "5 Addon Domains";
$_LANG['custom8_box10_feat4'] = "Web Control Panel";
$_LANG['custom8_box10_feat5'] = "Software Installer";
$_LANG['custom8_box10_term'] = "year";

// Table

$_LANG['custom8_table_heading1'] = "Main Information";
$_LANG['custom8_table_feat1'] = "Web Space";
$_LANG['custom8_table_feat2'] = "Bandwidth";
$_LANG['custom8_table_feat3'] = "Monthly Price";

$_LANG['custom8_table_heading2'] = "Plan Comparison";
$_LANG['custom8_table_feat4'] = "Web Space";
$_LANG['custom8_table_feat5'] = "Bandwidth";
$_LANG['custom8_table_feat6'] = "Addon Domains";
$_LANG['custom8_table_feat7'] = "Control Panel";
$_LANG['custom8_table_feat8'] = "Script Installer";
$_LANG['custom8_table_feat9'] = "Daily Backups";
$_LANG['custom8_table_feat10'] = "Server";
$_LANG['custom8_table_feat11'] = "Free Domain";
$_LANG['custom8_table_feat12'] = "Live Support";

$_LANG['custom8_table_heading3'] = "Key Features";
$_LANG['custom8_table_feat13'] = "Addon Domains";
$_LANG['custom8_table_feat14'] = "Databases";
$_LANG['custom8_table_feat15'] = "FTP Accounts";
$_LANG['custom8_table_feat16'] = "Email Accounts";
$_LANG['custom8_table_feat17'] = "Mailing lists";
$_LANG['custom8_table_feat18'] = "Subdomains";
$_LANG['custom8_table_feat19'] = "Email Limit";
$_LANG['custom8_table_feat20'] = "Auto Responders";
$_LANG['custom8_table_feat21'] = "Online File Manager";

$_LANG['custom8_table_heading4'] = "Free Software";
$_LANG['custom8_table_feat22'] = "Wordpress";
$_LANG['custom8_table_feat23'] = "Joomla";
$_LANG['custom8_table_feat24'] = "Drupal";
$_LANG['custom8_table_feat25'] = "Magento";
$_LANG['custom8_table_feat26'] = "Zen Cart";
$_LANG['custom8_table_feat27'] = "phpBB";
$_LANG['custom8_table_feat28'] = "myBB";
$_LANG['custom8_table_feat29'] = "SMF";
$_LANG['custom8_table_feat30'] = "PHPCoin";

// Table2 

$_LANG['custom8_table2_title0'] = "Package";
$_LANG['custom8_table2_title1'] = "Validity Period";
$_LANG['custom8_table2_title2'] = "Company";
$_LANG['custom8_table2_title3'] = "Issuance Speed";
$_LANG['custom8_table2_title4'] = "Browsers Supported";
$_LANG['custom8_table2_title5'] = "Warranty";
$_LANG['custom8_table2_title6'] = "Price";

$_LANG['custom8_table2_box1_feat1'] = "1-3 years";
$_LANG['custom8_table2_box1_feat2'] = "Comodo";
$_LANG['custom8_table2_box1_feat3'] = "10 minutes";
$_LANG['custom8_table2_box1_feat4'] = "98%";
$_LANG['custom8_table2_box1_feat5'] = "Up to $20,000";
$_LANG['custom8_table2_box1_feat6'] = "$19.99/year";

$_LANG['custom8_table2_box2_feat1'] = "1-3 years";
$_LANG['custom8_table2_box2_feat2'] = "GeoTrust";
$_LANG['custom8_table2_box2_feat3'] = "2-3 days";
$_LANG['custom8_table2_box2_feat4'] = "99%";
$_LANG['custom8_table2_box2_feat5'] = "Up to $50,000";
$_LANG['custom8_table2_box2_feat6'] = "$29.99/year";

$_LANG['custom8_table2_box3_feat1'] = "Intel Xeon E5-2420 x 2";
$_LANG['custom8_table2_box3_feat2'] = "16GB";
$_LANG['custom8_table2_box3_feat3'] = "Up to 4 x 1TB SATA RAID 1 (Hardware)";
$_LANG['custom8_table2_box3_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom8_table2_box3_feat5'] = "WHM/cPanel";
$_LANG['custom8_table2_box3_feat6'] = "$399/month";

$_LANG['custom8_table2_box4_feat1'] = "Intel Xeon E5-2750 x 4";
$_LANG['custom8_table2_box4_feat2'] = "20GB";
$_LANG['custom8_table2_box4_feat3'] = "Up to 4 x 2TB SATA RAID 1 (Hardware)";
$_LANG['custom8_table2_box4_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom8_table2_box4_feat5'] = "WHM/cPanel";
$_LANG['custom8_table2_box4_feat6'] = "$499/month";

$_LANG['custom8_table2_box5_feat1'] = "Intel Xeon E5-5473 x 5";
$_LANG['custom8_table2_box5_feat2'] = "24GB";
$_LANG['custom8_table2_box5_feat3'] = "Up to 4 x 3TB SATA RAID 1 (Hardware)";
$_LANG['custom8_table2_box5_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom8_table2_box5_feat5'] = "WHM/cPanel";
$_LANG['custom8_table2_box5_feat6'] = "$599/month";

$_LANG['custom8_table2_box6_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom8_table2_box6_feat2'] = "28GB";
$_LANG['custom8_table2_box6_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom8_table2_box6_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom8_table2_box6_feat5'] = "WHM/cPanel";
$_LANG['custom8_table2_box6_feat6'] = "$699/month";

$_LANG['custom8_table2_box7_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom8_table2_box7_feat2'] = "28GB";
$_LANG['custom8_table2_box7_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom8_table2_box7_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom8_table2_box7_feat5'] = "WHM/cPanel";
$_LANG['custom8_table2_box7_feat6'] = "$699/month";

$_LANG['custom8_table2_box8_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom8_table2_box8_feat2'] = "28GB";
$_LANG['custom8_table2_box8_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom8_table2_box8_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom8_table2_box8_feat5'] = "WHM/cPanel";
$_LANG['custom8_table2_box8_feat6'] = "$699/month";

$_LANG['custom8_table2_box9_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom8_table2_box9_feat2'] = "28GB";
$_LANG['custom8_table2_box9_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom8_table2_box9_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom8_table2_box9_feat5'] = "WHM/cPanel";
$_LANG['custom8_table2_box9_feat6'] = "$699/month";

$_LANG['custom8_table2_box10_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom8_table2_box10_feat2'] = "28GB";
$_LANG['custom8_table2_box10_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom8_table2_box10_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom8_table2_box10_feat5'] = "WHM/cPanel";
$_LANG['custom8_table2_box10_feat6'] = "$699/month";

/*
-----------------------------------------
---------   Hosting Addons page by default (File: hosting-addons.tpl, hosting-addons.php, includes/custom9.tpl)   ---------
-----------------------------------------
*/

// Name

$_LANG['custom9_box1_title'] = "Addon 1";
$_LANG['custom9_box2_title'] = "Addon 2";
$_LANG['custom9_box3_title'] = "Addon 3";
$_LANG['custom9_box4_title'] = "Addon 4";
$_LANG['custom9_box5_title'] = "Addon 5";
$_LANG['custom9_box6_title'] = "Addon 6";
$_LANG['custom9_box7_title'] = "Addon 7";
$_LANG['custom9_box8_title'] = "Addon 8";
$_LANG['custom9_box9_title'] = "Addon 9";
$_LANG['custom9_box10_title'] = "Addon 10";

// Description

$_LANG['custom9_box1_desc'] = "Perfect addon hosting plan for beginners";
$_LANG['custom9_box2_desc'] = "Reliable low-cost addon hosting plan";
$_LANG['custom9_box3_desc'] = "Advanced addon hosting package";
$_LANG['custom9_box4_desc'] = "Professional addon hosting plan";
$_LANG['custom9_box5_desc'] = "Suitable addon plan for web designers";
$_LANG['custom9_box6_desc'] = "The best addon plan for experts";
$_LANG['custom9_box7_desc'] = "The best addon plan for experts";
$_LANG['custom9_box8_desc'] = "The best addon plan for experts";
$_LANG['custom9_box9_desc'] = "The best addon plan for experts";
$_LANG['custom9_box10_desc'] = "The best addon plan for experts";

// Feature boxes

$_LANG['custom9_box1_feat1'] = "1GB Disk Space";
$_LANG['custom9_box1_feat2'] = "10GB Bandwidth";
$_LANG['custom9_box1_feat3'] = "5 Addon Domains";
$_LANG['custom9_box1_feat4'] = "Web Control Panel";
$_LANG['custom9_box1_feat5'] = "Software Installer";
$_LANG['custom9_box1_term'] = "year";

$_LANG['custom9_box2_feat1'] = "1GB Disk Space";
$_LANG['custom9_box2_feat2'] = "10GB Bandwidth";
$_LANG['custom9_box2_feat3'] = "5 Addon Domains";
$_LANG['custom9_box2_feat4'] = "Web Control Panel";
$_LANG['custom9_box2_feat5'] = "Software Installer";
$_LANG['custom9_box2_term'] = "month";

$_LANG['custom9_box3_feat1'] = "1GB Disk Space";
$_LANG['custom9_box3_feat2'] = "10GB Bandwidth";
$_LANG['custom9_box3_feat3'] = "5 Addon Domains";
$_LANG['custom9_box3_feat4'] = "Web Control Panel";
$_LANG['custom9_box3_feat5'] = "Software Installer";
$_LANG['custom9_box3_term'] = "year";

$_LANG['custom9_box4_feat1'] = "1GB Disk Space";
$_LANG['custom9_box4_feat2'] = "10GB Bandwidth";
$_LANG['custom9_box4_feat3'] = "5 Addon Domains";
$_LANG['custom9_box4_feat4'] = "Web Control Panel";
$_LANG['custom9_box4_feat5'] = "Software Installer";
$_LANG['custom9_box4_term'] = "month";

$_LANG['custom9_box5_feat1'] = "1GB Disk Space";
$_LANG['custom9_box5_feat2'] = "10GB Bandwidth";
$_LANG['custom9_box5_feat3'] = "5 Addon Domains";
$_LANG['custom9_box5_feat4'] = "Web Control Panel";
$_LANG['custom9_box5_feat5'] = "Software Installer";
$_LANG['custom9_box5_term'] = "month";

$_LANG['custom9_box6_feat1'] = "1GB Disk Space";
$_LANG['custom9_box6_feat2'] = "10GB Bandwidth";
$_LANG['custom9_box6_feat3'] = "5 Addon Domains";
$_LANG['custom9_box6_feat4'] = "Web Control Panel";
$_LANG['custom9_box6_feat5'] = "Software Installer";
$_LANG['custom9_box6_term'] = "year";

$_LANG['custom9_box7_feat1'] = "1GB Disk Space";
$_LANG['custom9_box7_feat2'] = "10GB Bandwidth";
$_LANG['custom9_box7_feat3'] = "5 Addon Domains";
$_LANG['custom9_box7_feat4'] = "Web Control Panel";
$_LANG['custom9_box7_feat5'] = "Software Installer";
$_LANG['custom9_box7_term'] = "year";

$_LANG['custom9_box8_feat1'] = "1GB Disk Space";
$_LANG['custom9_box8_feat2'] = "10GB Bandwidth";
$_LANG['custom9_box8_feat3'] = "5 Addon Domains";
$_LANG['custom9_box8_feat4'] = "Web Control Panel";
$_LANG['custom9_box8_feat5'] = "Software Installer";
$_LANG['custom9_box8_term'] = "year";

$_LANG['custom9_box9_feat1'] = "1GB Disk Space";
$_LANG['custom9_box9_feat2'] = "10GB Bandwidth";
$_LANG['custom9_box9_feat3'] = "5 Addon Domains";
$_LANG['custom9_box9_feat4'] = "Web Control Panel";
$_LANG['custom9_box9_feat5'] = "Software Installer";
$_LANG['custom9_box9_term'] = "year";

$_LANG['custom9_box10_feat1'] = "1GB Disk Space";
$_LANG['custom9_box10_feat2'] = "10GB Bandwidth";
$_LANG['custom9_box10_feat3'] = "5 Addon Domains";
$_LANG['custom9_box10_feat4'] = "Web Control Panel";
$_LANG['custom9_box10_feat5'] = "Software Installer";
$_LANG['custom9_box10_term'] = "year";

// Table

$_LANG['custom9_table_heading1'] = "Main Information";
$_LANG['custom9_table_feat1'] = "Web Space";
$_LANG['custom9_table_feat2'] = "Bandwidth";
$_LANG['custom9_table_feat3'] = "Monthly Price";

$_LANG['custom9_table_heading2'] = "Plan Comparison";
$_LANG['custom9_table_feat4'] = "Web Space";
$_LANG['custom9_table_feat5'] = "Bandwidth";
$_LANG['custom9_table_feat6'] = "Addon Domains";
$_LANG['custom9_table_feat7'] = "Control Panel";
$_LANG['custom9_table_feat8'] = "Script Installer";
$_LANG['custom9_table_feat9'] = "Daily Backups";
$_LANG['custom9_table_feat10'] = "Server";
$_LANG['custom9_table_feat11'] = "Free Domain";
$_LANG['custom9_table_feat12'] = "Live Support";

$_LANG['custom9_table_heading3'] = "Key Features";
$_LANG['custom9_table_feat13'] = "Addon Domains";
$_LANG['custom9_table_feat14'] = "Databases";
$_LANG['custom9_table_feat15'] = "FTP Accounts";
$_LANG['custom9_table_feat16'] = "Email Accounts";
$_LANG['custom9_table_feat17'] = "Mailing lists";
$_LANG['custom9_table_feat18'] = "Subdomains";
$_LANG['custom9_table_feat19'] = "Email Limit";
$_LANG['custom9_table_feat20'] = "Auto Responders";
$_LANG['custom9_table_feat21'] = "Online File Manager";

$_LANG['custom9_table_heading4'] = "Free Software";
$_LANG['custom9_table_feat22'] = "Wordpress";
$_LANG['custom9_table_feat23'] = "Joomla";
$_LANG['custom9_table_feat24'] = "Drupal";
$_LANG['custom9_table_feat25'] = "Magento";
$_LANG['custom9_table_feat26'] = "Zen Cart";
$_LANG['custom9_table_feat27'] = "phpBB";
$_LANG['custom9_table_feat28'] = "myBB";
$_LANG['custom9_table_feat29'] = "SMF";
$_LANG['custom9_table_feat30'] = "PHPCoin";

// Table2 

$_LANG['custom9_table2_title0'] = "Package";
$_LANG['custom9_table2_title1'] = "CPU";
$_LANG['custom9_table2_title2'] = "RAM";
$_LANG['custom9_table2_title3'] = "Hard Drive";
$_LANG['custom9_table2_title4'] = "Bandwidth";
$_LANG['custom9_table2_title5'] = "Control Panel";
$_LANG['custom9_table2_title6'] = "Price";

$_LANG['custom9_table2_box1_feat1'] = "Intel Xeon E3-1225v3";
$_LANG['custom9_table2_box1_feat2'] = "8GB";
$_LANG['custom9_table2_box1_feat3'] = "Up to 2x2TB RAID 1";
$_LANG['custom9_table2_box1_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom9_table2_box1_feat5'] = "WHM/cPanel";
$_LANG['custom9_table2_box1_feat6'] = "$199/month";

$_LANG['custom9_table2_box2_feat1'] = "Intel Xeon E3-1230v2";
$_LANG['custom9_table2_box2_feat2'] = "12GB";
$_LANG['custom9_table2_box2_feat3'] = "2 x 2TB SATA RAID 1";
$_LANG['custom9_table2_box2_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom9_table2_box2_feat5'] = "WHM/cPanel";
$_LANG['custom9_table2_box2_feat6'] = "$299/month";

$_LANG['custom9_table2_box3_feat1'] = "Intel Xeon E5-2420 x 2";
$_LANG['custom9_table2_box3_feat2'] = "16GB";
$_LANG['custom9_table2_box3_feat3'] = "Up to 4 x 1TB SATA RAID 1 (Hardware)";
$_LANG['custom9_table2_box3_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom9_table2_box3_feat5'] = "WHM/cPanel";
$_LANG['custom9_table2_box3_feat6'] = "$399/month";

$_LANG['custom9_table2_box4_feat1'] = "Intel Xeon E5-2750 x 4";
$_LANG['custom9_table2_box4_feat2'] = "20GB";
$_LANG['custom9_table2_box4_feat3'] = "Up to 4 x 2TB SATA RAID 1 (Hardware)";
$_LANG['custom9_table2_box4_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom9_table2_box4_feat5'] = "WHM/cPanel";
$_LANG['custom9_table2_box4_feat6'] = "$499/month";

$_LANG['custom9_table2_box5_feat1'] = "Intel Xeon E5-5473 x 5";
$_LANG['custom9_table2_box5_feat2'] = "24GB";
$_LANG['custom9_table2_box5_feat3'] = "Up to 4 x 3TB SATA RAID 1 (Hardware)";
$_LANG['custom9_table2_box5_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom9_table2_box5_feat5'] = "WHM/cPanel";
$_LANG['custom9_table2_box5_feat6'] = "$599/month";

$_LANG['custom9_table2_box6_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom9_table2_box6_feat2'] = "28GB";
$_LANG['custom9_table2_box6_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom9_table2_box6_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom9_table2_box6_feat5'] = "WHM/cPanel";
$_LANG['custom9_table2_box6_feat6'] = "$699/month";

$_LANG['custom9_table2_box7_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom9_table2_box7_feat2'] = "28GB";
$_LANG['custom9_table2_box7_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom9_table2_box7_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom9_table2_box7_feat5'] = "WHM/cPanel";
$_LANG['custom9_table2_box7_feat6'] = "$699/month";

$_LANG['custom9_table2_box8_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom9_table2_box8_feat2'] = "28GB";
$_LANG['custom9_table2_box8_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom9_table2_box8_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom9_table2_box8_feat5'] = "WHM/cPanel";
$_LANG['custom9_table2_box8_feat6'] = "$699/month";

$_LANG['custom9_table2_box9_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom9_table2_box9_feat2'] = "28GB";
$_LANG['custom9_table2_box9_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom9_table2_box9_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom9_table2_box9_feat5'] = "WHM/cPanel";
$_LANG['custom9_table2_box9_feat6'] = "$699/month";

$_LANG['custom9_table2_box10_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom9_table2_box10_feat2'] = "28GB";
$_LANG['custom9_table2_box10_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom9_table2_box10_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom9_table2_box10_feat5'] = "WHM/cPanel";
$_LANG['custom9_table2_box10_feat6'] = "$699/month";

/*
-----------------------------------------
---------   Email Hosting page by default (File: email-hosting.tpl, email-hosting.php, includes/custom10.tpl)   ---------
-----------------------------------------
*/

// Name

$_LANG['custom10_box1_title'] = "Email 1";
$_LANG['custom10_box2_title'] = "Email 2";
$_LANG['custom10_box3_title'] = "Email 3";
$_LANG['custom10_box4_title'] = "Email 4";
$_LANG['custom10_box5_title'] = "Email 5";
$_LANG['custom10_box6_title'] = "Email 6";
$_LANG['custom10_box7_title'] = "Email 7";
$_LANG['custom10_box8_title'] = "Email 8";
$_LANG['custom10_box9_title'] = "Email 9";
$_LANG['custom10_box10_title'] = "Email 10";

// Description

$_LANG['custom10_box1_desc'] = "Perfect email hosting plan for beginners";
$_LANG['custom10_box2_desc'] = "Reliable low-cost email hosting plan";
$_LANG['custom10_box3_desc'] = "Advanced email hosting package";
$_LANG['custom10_box4_desc'] = "Professional email hosting plan";
$_LANG['custom10_box5_desc'] = "Suitable email plan for web designers";
$_LANG['custom10_box6_desc'] = "The best email plan for experts";
$_LANG['custom10_box7_desc'] = "The best email plan for experts";
$_LANG['custom10_box8_desc'] = "The best email plan for experts";
$_LANG['custom10_box9_desc'] = "The best email plan for experts";
$_LANG['custom10_box10_desc'] = "The best email plan for experts";

// Feature boxes

$_LANG['custom10_box1_feat1'] = "1GB Disk Space";
$_LANG['custom10_box1_feat2'] = "10GB Bandwidth";
$_LANG['custom10_box1_feat3'] = "5 email Domains";
$_LANG['custom10_box1_feat4'] = "Web Control Panel";
$_LANG['custom10_box1_feat5'] = "Software Installer";
$_LANG['custom10_box1_term'] = "year";

$_LANG['custom10_box2_feat1'] = "1GB Disk Space";
$_LANG['custom10_box2_feat2'] = "10GB Bandwidth";
$_LANG['custom10_box2_feat3'] = "5 email Domains";
$_LANG['custom10_box2_feat4'] = "Web Control Panel";
$_LANG['custom10_box2_feat5'] = "Software Installer";
$_LANG['custom10_box2_term'] = "month";

$_LANG['custom10_box3_feat1'] = "1GB Disk Space";
$_LANG['custom10_box3_feat2'] = "10GB Bandwidth";
$_LANG['custom10_box3_feat3'] = "5 email Domains";
$_LANG['custom10_box3_feat4'] = "Web Control Panel";
$_LANG['custom10_box3_feat5'] = "Software Installer";
$_LANG['custom10_box3_term'] = "year";

$_LANG['custom10_box4_feat1'] = "1GB Disk Space";
$_LANG['custom10_box4_feat2'] = "10GB Bandwidth";
$_LANG['custom10_box4_feat3'] = "5 email Domains";
$_LANG['custom10_box4_feat4'] = "Web Control Panel";
$_LANG['custom10_box4_feat5'] = "Software Installer";
$_LANG['custom10_box4_term'] = "month";

$_LANG['custom10_box5_feat1'] = "1GB Disk Space";
$_LANG['custom10_box5_feat2'] = "10GB Bandwidth";
$_LANG['custom10_box5_feat3'] = "5 email Domains";
$_LANG['custom10_box5_feat4'] = "Web Control Panel";
$_LANG['custom10_box5_feat5'] = "Software Installer";
$_LANG['custom10_box5_term'] = "month";

$_LANG['custom10_box6_feat1'] = "1GB Disk Space";
$_LANG['custom10_box6_feat2'] = "10GB Bandwidth";
$_LANG['custom10_box6_feat3'] = "5 email Domains";
$_LANG['custom10_box6_feat4'] = "Web Control Panel";
$_LANG['custom10_box6_feat5'] = "Software Installer";
$_LANG['custom10_box6_term'] = "year";

$_LANG['custom10_box7_feat1'] = "1GB Disk Space";
$_LANG['custom10_box7_feat2'] = "10GB Bandwidth";
$_LANG['custom10_box7_feat3'] = "5 email Domains";
$_LANG['custom10_box7_feat4'] = "Web Control Panel";
$_LANG['custom10_box7_feat5'] = "Software Installer";
$_LANG['custom10_box7_term'] = "year";

$_LANG['custom10_box8_feat1'] = "1GB Disk Space";
$_LANG['custom10_box8_feat2'] = "10GB Bandwidth";
$_LANG['custom10_box8_feat3'] = "5 email Domains";
$_LANG['custom10_box8_feat4'] = "Web Control Panel";
$_LANG['custom10_box8_feat5'] = "Software Installer";
$_LANG['custom10_box8_term'] = "year";

$_LANG['custom10_box9_feat1'] = "1GB Disk Space";
$_LANG['custom10_box9_feat2'] = "10GB Bandwidth";
$_LANG['custom10_box9_feat3'] = "5 email Domains";
$_LANG['custom10_box9_feat4'] = "Web Control Panel";
$_LANG['custom10_box9_feat5'] = "Software Installer";
$_LANG['custom10_box9_term'] = "year";

$_LANG['custom10_box10_feat1'] = "1GB Disk Space";
$_LANG['custom10_box10_feat2'] = "10GB Bandwidth";
$_LANG['custom10_box10_feat3'] = "5 email Domains";
$_LANG['custom10_box10_feat4'] = "Web Control Panel";
$_LANG['custom10_box10_feat5'] = "Software Installer";
$_LANG['custom10_box10_term'] = "year";

// Table

$_LANG['custom10_table_heading1'] = "Main Information";
$_LANG['custom10_table_feat1'] = "Web Space";
$_LANG['custom10_table_feat2'] = "Bandwidth";
$_LANG['custom10_table_feat3'] = "Monthly Price";

$_LANG['custom10_table_heading2'] = "Plan Comparison";
$_LANG['custom10_table_feat4'] = "Web Space";
$_LANG['custom10_table_feat5'] = "Bandwidth";
$_LANG['custom10_table_feat6'] = "email Domains";
$_LANG['custom10_table_feat7'] = "Control Panel";
$_LANG['custom10_table_feat8'] = "Script Installer";
$_LANG['custom10_table_feat9'] = "Daily Backups";
$_LANG['custom10_table_feat10'] = "Server";
$_LANG['custom10_table_feat11'] = "Free Domain";
$_LANG['custom10_table_feat12'] = "Live Support";

$_LANG['custom10_table_heading3'] = "Key Features";
$_LANG['custom10_table_feat13'] = "email Domains";
$_LANG['custom10_table_feat14'] = "Databases";
$_LANG['custom10_table_feat15'] = "FTP Accounts";
$_LANG['custom10_table_feat16'] = "Email Accounts";
$_LANG['custom10_table_feat17'] = "Mailing lists";
$_LANG['custom10_table_feat18'] = "Subdomains";
$_LANG['custom10_table_feat19'] = "Email Limit";
$_LANG['custom10_table_feat20'] = "Auto Responders";
$_LANG['custom10_table_feat21'] = "Online File Manager";

$_LANG['custom10_table_heading4'] = "Free Software";
$_LANG['custom10_table_feat22'] = "Wordpress";
$_LANG['custom10_table_feat23'] = "Joomla";
$_LANG['custom10_table_feat24'] = "Drupal";
$_LANG['custom10_table_feat25'] = "Magento";
$_LANG['custom10_table_feat26'] = "Zen Cart";
$_LANG['custom10_table_feat27'] = "phpBB";
$_LANG['custom10_table_feat28'] = "myBB";
$_LANG['custom10_table_feat29'] = "SMF";
$_LANG['custom10_table_feat30'] = "PHPCoin";

// Table2 

$_LANG['custom10_table2_title0'] = "Package";
$_LANG['custom10_table2_title1'] = "CPU";
$_LANG['custom10_table2_title2'] = "RAM";
$_LANG['custom10_table2_title3'] = "Hard Drive";
$_LANG['custom10_table2_title4'] = "Bandwidth";
$_LANG['custom10_table2_title5'] = "Control Panel";
$_LANG['custom10_table2_title6'] = "Price";

$_LANG['custom10_table2_box1_feat1'] = "Intel Xeon E3-1225v3";
$_LANG['custom10_table2_box1_feat2'] = "8GB";
$_LANG['custom10_table2_box1_feat3'] = "Up to 2x2TB RAID 1";
$_LANG['custom10_table2_box1_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom10_table2_box1_feat5'] = "WHM/cPanel";
$_LANG['custom10_table2_box1_feat6'] = "$199/month";

$_LANG['custom10_table2_box2_feat1'] = "Intel Xeon E3-1230v2";
$_LANG['custom10_table2_box2_feat2'] = "12GB";
$_LANG['custom10_table2_box2_feat3'] = "2 x 2TB SATA RAID 1";
$_LANG['custom10_table2_box2_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom10_table2_box2_feat5'] = "WHM/cPanel";
$_LANG['custom10_table2_box2_feat6'] = "$299/month";

$_LANG['custom10_table2_box3_feat1'] = "Intel Xeon E5-2420 x 2";
$_LANG['custom10_table2_box3_feat2'] = "16GB";
$_LANG['custom10_table2_box3_feat3'] = "Up to 4 x 1TB SATA RAID 1 (Hardware)";
$_LANG['custom10_table2_box3_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom10_table2_box3_feat5'] = "WHM/cPanel";
$_LANG['custom10_table2_box3_feat6'] = "$399/month";

$_LANG['custom10_table2_box4_feat1'] = "Intel Xeon E5-2750 x 4";
$_LANG['custom10_table2_box4_feat2'] = "20GB";
$_LANG['custom10_table2_box4_feat3'] = "Up to 4 x 2TB SATA RAID 1 (Hardware)";
$_LANG['custom10_table2_box4_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom10_table2_box4_feat5'] = "WHM/cPanel";
$_LANG['custom10_table2_box4_feat6'] = "$499/month";

$_LANG['custom10_table2_box5_feat1'] = "Intel Xeon E5-5473 x 5";
$_LANG['custom10_table2_box5_feat2'] = "24GB";
$_LANG['custom10_table2_box5_feat3'] = "Up to 4 x 3TB SATA RAID 1 (Hardware)";
$_LANG['custom10_table2_box5_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom10_table2_box5_feat5'] = "WHM/cPanel";
$_LANG['custom10_table2_box5_feat6'] = "$599/month";

$_LANG['custom10_table2_box6_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom10_table2_box6_feat2'] = "28GB";
$_LANG['custom10_table2_box6_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom10_table2_box6_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom10_table2_box6_feat5'] = "WHM/cPanel";
$_LANG['custom10_table2_box6_feat6'] = "$699/month";

$_LANG['custom10_table2_box7_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom10_table2_box7_feat2'] = "28GB";
$_LANG['custom10_table2_box7_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom10_table2_box7_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom10_table2_box7_feat5'] = "WHM/cPanel";
$_LANG['custom10_table2_box7_feat6'] = "$699/month";

$_LANG['custom10_table2_box8_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom10_table2_box8_feat2'] = "28GB";
$_LANG['custom10_table2_box8_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom10_table2_box8_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom10_table2_box8_feat5'] = "WHM/cPanel";
$_LANG['custom10_table2_box8_feat6'] = "$699/month";

$_LANG['custom10_table2_box9_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom10_table2_box9_feat2'] = "28GB";
$_LANG['custom10_table2_box9_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom10_table2_box9_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom10_table2_box9_feat5'] = "WHM/cPanel";
$_LANG['custom10_table2_box9_feat6'] = "$699/month";

$_LANG['custom10_table2_box10_feat1'] = "Intel Xeon E5-6540 x 6";
$_LANG['custom10_table2_box10_feat2'] = "28GB";
$_LANG['custom10_table2_box10_feat3'] = "Up to 4 x 4TB SATA RAID 1 (Hardware)";
$_LANG['custom10_table2_box10_feat4'] = "Up to 1 Gbit/s Bandwidth";
$_LANG['custom10_table2_box10_feat5'] = "WHM/cPanel";
$_LANG['custom10_table2_box10_feat6'] = "$699/month";

/*
-----------------------------------------
---------   End hosting plans   ---------
-----------------------------------------
*/

/*
-----------------------------------------
---------   SEO (File: includes/functions-seo.tpl)   ---------
-----------------------------------------
*/

// Homepage

$_LANG['meta_title_index'] = "Professional Web Hosting - We provide solid web hosting &amp; domain registration services!";
$_LANG['meta_description_index'] = "Professional web services for businesses and individuals.";
$_LANG['meta_tags_index'] = "shared hosting, reseller hosting, vps hosting, dedicated hosting, domain registration";

// Register Domain

$_LANG['meta_title_domainchecker'] = "Domain Registration - Search &amp; register your domains here";
$_LANG['meta_description_domainchecker'] = "Affordable domain registration service with multiple extension options.";
$_LANG['meta_tags_domainchecker'] = "domain registration, domains, domain checker, WHOIS";

// Transfer Domain

$_LANG['meta_title_domaincheckerbulktransfer'] = "Transfer multiple domains to our company";
$_LANG['meta_description_domaincheckerbulktransfer'] = "Now you can transfer multiple domains to our company";
$_LANG['meta_tags_domaincheckerbulktransfer'] = "domain registration, domains, domain checker, whois";

// Custom1

$_LANG['meta_title_custom1'] = "Shared Hosting ~ We provide professional &amp; affordable cPanel hosting";
$_LANG['meta_description_custom1'] = "We provide top quality cPanel hosting which is perfect for any type of website.";
$_LANG['meta_tags_custom1'] = "shared hosting, cpanel hosting, website hosting, web hosting";

// Custom2

$_LANG['meta_title_custom2'] = "Reseller Hosting ~ Become your own boss by starting a web hosting company";
$_LANG['meta_description_custom2'] = "We provide reseller web hosting which allows you to easily create your own web hosting business.";
$_LANG['meta_tags_custom2'] = "reseller hosting, reseller web hosting, whm hosting";

// Custom3

$_LANG['meta_title_custom3'] = "VPS Hosting ~ High resource VPS hosting for individuals &amp; businesses alike";
$_LANG['meta_description_custom3'] = "The best VPS hosting at an affordable price.";
$_LANG['meta_tags_custom3'] = "vps hosting, vps, vps server";

// Custom4

$_LANG['meta_title_custom4'] = "Dedicated Servers ~ We manage your server so you can focus on your business!";
$_LANG['meta_description_custom4'] = "Our dedicated servers are a great choice for any enterprise as they come fully managed by us.";
$_LANG['meta_tags_custom4'] = "dedicated hosting, dedicated servers";

// Custom5

$_LANG['meta_title_custom5'] = "Cloud Hosting - Host your website on our next generation servers!";
$_LANG['meta_description_custom5'] = "Our cloud hosting is a scalable &amp; quality hosting service.";
$_LANG['meta_tags_custom5'] = "cloud hosting, cloud servers, cloud";

// Custom6

$_LANG['meta_title_custom6'] = "Game Servers - Setup your own game server today!";
$_LANG['meta_description_custom6'] = "Our game servers are fast, reliable &amp; more importantly affordable.";
$_LANG['meta_tags_custom6'] = "game servers, game hosting, gaming";

// Custom7

$_LANG['meta_title_custom7'] = "Premium quality Virtual Private Network servers (VPN)";
$_LANG['meta_description_custom7'] = "We provide the most reliable Virtual Private Networks in the industry.";
$_LANG['meta_tags_custom7'] = "vpns, vpn, virtual private network";

// Custom8

$_LANG['meta_title_custom8'] = "Protect your website with our high quality SSL certificates";
$_LANG['meta_description_custom8'] = "We provide industry standard SSL certificates for all types of online businesses";
$_LANG['meta_tags_custom8'] = "ssl, ssl certificates";

// Custom9

$_LANG['meta_title_custom9'] = "Web Hosting Addons - dedicated IPs, disk space/bandwidth upgrades and more!";
$_LANG['meta_description_custom9'] = "Enhance your web hosting account with our hosting addons";
$_LANG['meta_tags_custom9'] = "web hosting, web hosting addons, hosting addons";

// Custom10

$_LANG['meta_title_custom10'] = "Order web based email packages!";
$_LANG['meta_description_custom10'] = "We provide reliable and secure web based email";
$_LANG['meta_tags_custom10'] = "webmail, email, email plans";

// Company

$_LANG['meta_title_company'] = "All you need to know about our web hosting &amp; domain registration company";
$_LANG['meta_description_company'] = "Where we come from, when we started &amp; why we started.";
$_LANG['meta_tags_company'] = "company, about us";

// Terms Of Service

$_LANG['meta_title_terms'] = "Terms Of Service - A document listing all of our terms";
$_LANG['meta_description_terms'] = "Please read our terms of service to see what our policies are.";
$_LANG['meta_tags_terms'] = "terms of service, terms, legal";

// Acceptable Usage Policy

$_LANG['meta_title_aup'] = "Acceptable Usage Policy - The usage policy you must accept before signing up";
$_LANG['meta_description_aup'] = "Please read our acceptable usage policy to see what our policies are.";
$_LANG['meta_tags_aup'] = "acceptable usage policy, usage, restrictions";

// Privacy Policy

$_LANG['meta_title_privacy'] = "Privacy Policy - Our policy regarding your privacy";
$_LANG['meta_description_privacy'] = "Please read our privacy policy to see what our policies are.";
$_LANG['meta_tags_privacy'] = "privacy policy";

// Addons

$_LANG['meta_title_addons'] = "WHMCS Templates | Wordpress Themes | HTML Templates | Logo Design | Banner Design | Code &amp; Scripts";
$_LANG['meta_description_addons'] = "Premium website addons including WHMCS templates, Wordpress themes, Blesta templates, code &amp; scripts &amp; Wordpress services.";
$_LANG['meta_tags_addons'] = "whmcs templates, wordpress themes, html templates, logo design, banner design";

// WHMCS Templates

$_LANG['meta_title_whmcstemplates'] = "WHMCS Templates ~ Professional WHMCS V5.3 Templates/Skins/Themes | Admin Based Settings Area! | Complete WHMCS Websites!";
$_LANG['meta_description_whmcstemplates'] = "Our WHMCS Templates allow you to setup your web hosting, HostGator &amp; JustHost reseller business in just 5 minutes! They include all of the pages, content &amp; design elements you need to give a professional look &amp; increase sales!";
$_LANG['meta_tags_whmcstemplates'] = "whmcs templates, whmcs themes, responsive whmcs templates";

// WordPress Themes

$_LANG['meta_title_wordpressthemes'] = "Premium Wordpress Themes | Options Panel | Shortcodes | Multi-display options | Widgets | Admin-based menu | WHMCS Integration | Wordpress web hosting themes";
$_LANG['meta_description_wordpressthemes'] = "We provide the best Wordpress web hosting themes available including our exclusive options panel and the matching WHMCS template.";
$_LANG['meta_tags_wordpressthemes'] = "wordpress themes, web hosting wordpress themes, wordpress templates";

// HTML Templates

$_LANG['meta_title_htmltemplates'] = "HTML5 templates ~ We provide high quality responsive website templates with optional matching WHMCS &amp; Blesta integration";
$_LANG['meta_description_htmltemplates'] = "Premium quality HTML5, responsive templates. All of our templates are developed by us from scratch based on our experience develping the best business HTML templates.";
$_LANG['meta_tags_htmltemplates'] = "html templates, html5 templates, css templates, html5 web hosting templates, responsive web hosting templates";

// Blesta Templates

$_LANG['meta_title_blestatemplates'] = "Blesta Templates - We provide HTML5 Blesta templates that are fully responsive and professionally designed | Mobile Blesta templates";
$_LANG['meta_description_blestatemplates'] = "All of our Blesta templates are coded with HTML5/CSS3 and are fully responsive";
$_LANG['meta_tags_blestatemplates'] = "bleata, blesta templates, blesta web hosting templates";

// Clientexec Templates

$_LANG['meta_title_clientexectemplates'] = "Clientexec Templates - We provide HTML5 Clientexec templates that are fully responsive and professionally designed | Mobile Clientexec templates";
$_LANG['meta_description_clientexectemplates'] = "All of our Clientexec templates are coded with HTML5/CSS3 and are fully responsive";
$_LANG['meta_tags_clientexectemplates'] = "clientexec, clientexec templates, clientexec web hosting templates";

// Scripts

$_LANG['meta_title_codescripts'] = "HTML/CSS code (mega menus, dropdown menus, feature boxes) snippets &amp; Javascript/PHP scripts (EU cookie law, notices)";
$_LANG['meta_description_codescripts'] = "Our stunning collection of ready to use HTML/CSS mega menus, features boxes and many scripts including our exclusive EU cookie law script.";
$_LANG['meta_tags_codescripts'] = "html code, css menus, css tables, css feature boxes, eu cookie law";

// Logo Design

$_LANG['meta_title_logodesign'] = "Logo design service - We design custom vector logos from scratch for businesses of all types | Premium logo design service";
$_LANG['meta_description_logodesign'] = "We design custom logos from scratch in vector and raster format for businesses of all types.";
$_LANG['meta_tags_logodesign'] = "logo design, vector logos, logo designer, custom logo design";

// Banner Design

$_LANG['meta_title_bannerdesign'] = "Custom Banner Design ~ High quality banner designs, animated .GIF &amp; static, bast portfolio!";
$_LANG['meta_description_bannerdesign'] = "We offer a very high quality and affordable banner design service.";
$_LANG['meta_tags_bannerdesign'] = "banner design, banner designer, animated banners";

// WHMCS Modules

$_LANG['meta_title_whmcsmodules'] = "WHMCS Modules ~ Our exclusive modules to enhance the functionality of your WHMCS based website";
$_LANG['meta_description_whmcsmodules'] = "We've developed a selection of premium WHMCS modules to enhance your WHMCS website.";
$_LANG['meta_tags_whmcsmodules'] = "whmcs modules, whmcs addons";

// WHMCS Serivces

$_LANG['meta_title_whmcsservices'] = "WHMCS Integration ~ WHMCS Setup, Configuration And Integration Services Starting From $12! Web hosting business setup/startup services";
$_LANG['meta_description_whmcsservices'] = "Be sure to check out our popular whmcs services including whmcs setup, whmcs configuration & whmcs integration.";
$_LANG['meta_tags_whmcsservices'] = "whmcs services, whmcs, whmcs integration, whmcs configuration, whmcs security";

// WordPress Services

$_LANG['meta_title_wordpressservices'] = "Wordpress Services ~ Looking For Wordpress Service(s)? Look No Further! We Specialise In Wordpress Installation, Configuration & Integration";
$_LANG['meta_description_wordpressservices'] = "We Provide Multiple Wordpress Services To Businesses & Individuals At An Affordable Price. These Include Installation, Configuration and Integration!";
$_LANG['meta_tags_wordpressservices'] = "wordpress services, wordpress installation, wordpress integration";

// Blesta Services

$_LANG['meta_title_blestaservices'] = "Blesta Services - We provide reliable Blesta services including Blesta Installation &amp; Blesta Integration";
$_LANG['meta_description_blestaservices'] = "We provide reliable and manual Bleata services including installation and integration.";
$_LANG['meta_tags_blestaservices'] = "blesta services, blesta, blesta installation, blesta configuration";

// Clientexec Services

$_LANG['meta_title_clientexecservices'] = "Clientexec Services - We provide reliable Clientexec services including Clientexec Installation &amp; Clientexec Integration";
$_LANG['meta_description_clientexecservices'] = "We provide reliable and manual Bleata services including installation and integration.";
$_LANG['meta_tags_clientexecservices'] = "clientexec services, clientexec, clientexec installation, clientexec configuration";

// Support

$_LANG['meta_title_portal'] = "Support Portal ~ Everything you need to manage your service &amp; request support";
$_LANG['meta_description_portal'] = "Links to support &amp; announcements.";
$_LANG['meta_tags_portal'] = "support, portal";

// Affiliate Program

$_LANG['meta_title_affiliateprogram'] = "Join our affiliate program and earn commissions on your sales!";
$_LANG['meta_description_affiliateprogram'] = "We offer a very professional web hosting affiliate program.";
$_LANG['meta_tags_affiliateprogram'] = "affiliate program, affiliates, web hosting affiliate program";

// Why Choose Us

$_LANG['meta_title_whychooseus'] = "The reasons why you should choose our company";
$_LANG['meta_description_whychooseus'] = "Here is 4 reasons why we are are the best hosting provider.";
$_LANG['meta_tags_whychooseus'] = "why choose us, why us, why choose our company";

// Testimonials

$_LANG['meta_title_testimonials'] = "We've compiled a list of testimonials from our customer's";
$_LANG['meta_description_testimonials'] = "Check out our collection of testimonials sent by our customer's.";
$_LANG['meta_tags_testimonials'] = "testimonials, customer reviews";

// Contact

$_LANG['meta_title_contact'] = "Contact us for help with your web hosting or with any pre-sale questions.";
$_LANG['meta_description_contact'] = "Use our contact form as a reliable way to contact us for support.";
$_LANG['meta_tags_contact'] = "contact us, contact, contact form";

// Register

$_LANG['meta_title_register'] = "Register your free account with us";
$_LANG['meta_description_register'] = "Using your account you can easily create a new order and request support.";
$_LANG['meta_tags_register'] = "register, register account, free account";

// Submit Ticket

$_LANG['meta_title_submitticket'] = "Submit a new ticket with us";
$_LANG['meta_description_submitticket'] = "Submit a new ticket with us.";
$_LANG['meta_tags_submitticket'] = "ticket, ticket system, submit ticket";

// Support Tickets

$_LANG['meta_title_supporttickets'] = "View your existing tickets in our system";
$_LANG['meta_description_supporttickets'] = "Here you can view all of your existing tickets in our system and make a reply.";
$_LANG['meta_tags_supporttickets'] = "tickets, support tickets";

// Cart

$_LANG['meta_title_cart'] = "Create your new order with us";
$_LANG['meta_description_cart'] = "Use our order form to create your new hosting/domain order with us";
$_LANG['meta_tags_cart'] = "cart, checkout";

// Login

$_LANG['meta_title_login'] = "Login to manage your account";
$_LANG['meta_description_login'] = "Once logged-in you can view downloads, request support or easily create a new order.";
$_LANG['meta_tags_login'] = "manage account, account login";

// Knowledgebase

$_LANG['meta_title_knowledgebase'] = "View our complete list of tutorials & guides!";
$_LANG['meta_description_knowledgebase'] = "Our knowledgebase is a great resource for easy to access tutorials.";
$_LANG['meta_tags_knowledgebase'] = "knowledgebase, tutorials, guides";

// Downloads

$_LANG['meta_title_downloads'] = "We have a great selection of downloads";
$_LANG['meta_description_downloads'] = "Download a mix of software and ebooks to help you start your website.";
$_LANG['meta_tags_downloads'] = "downloads, download library";

// Announcements

$_LANG['meta_title_announcements'] = "View our announcements and latest news";
$_LANG['meta_description_announcements'] = "Here is where you'll find all of our announcements and news posts.";
$_LANG['meta_tags_announcements'] = "announcements, news";

// Server Staus

$_LANG['meta_title_serverstatus'] = "Check out the status of our servers";
$_LANG['meta_description_serverstatus'] = "View the status of our servers, allows you to easily check if our servers are online.";
$_LANG['meta_tags_serverstatus'] = "server status, servers";

// Network Issues

$_LANG['meta_title_networkissues'] = "Here is where we will post any issues with our network";
$_LANG['meta_description_networkissues'] = "View this page to instantly check any of our listed network issues.";
$_LANG['meta_tags_networkissues'] = "network issues, network";

/*
-----------------------------------------
---------   Languages (File: includes/languages.tpl, includes/popup-languages.tpl)   ---------
-----------------------------------------
*/

$_LANG['textdirection'] = "ltr"; # Use rtl for right to left languages and ltr for left to right languages (if your template supports RTL languages)

$_LANG['language_active'] = "Macedonian"; # This is case sensative, if you update the name you must updated the toolbar.tpl, template.css, rtl.css files. We recommend leaving it as default

$_LANG['language_english'] = "English";
$_LANG['language_french'] = "French";
$_LANG['language_german'] = "German";
$_LANG['language_arabic'] = "Arabic";
$_LANG['language_catalan'] = "Catalan";
$_LANG['language_croatian'] = "Croatian";
$_LANG['language_farsi'] = "Farsi";
$_LANG['language_portuguese_br'] = "Brazilian";
$_LANG['language_portuguese_pt'] = "Portuguese";
$_LANG['language_czech'] = "Czech Republic";
$_LANG['language_danish'] = "Danish";
$_LANG['language_dutch'] = "Dutch";
$_LANG['language_hungarian'] = "Hungarian";
$_LANG['language_italian'] = "Italian";
$_LANG['language_norwegian'] = "Norwegian";
$_LANG['language_russian'] = "Russian";
$_LANG['language_spanish'] = "Spanish";
$_LANG['language_swedish'] = "Swedish";
$_LANG['language_turkish'] = "Turkish";
$_LANG['language_ukranian'] = "Ukranian";
$_LANG['language_romanian'] = "Romanian";
$_LANG['language_macedonian'] = "Macedonian";
$_LANG['language_hebrew'] = "Hebrew";
$_LANG['language_estonian'] = "Estonian";
$_LANG['language_chinese'] = "Chinese";
$_LANG['language_azerbaijani'] = "Azerbaijani";

?>