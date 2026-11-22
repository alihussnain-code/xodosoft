<?php
/**
 * Single list of XodoSoft services (file => title).
 * Used by the header dropdown, the footer "Our Solutions" list and the service page sidebar.
 * The first entry is also the target of the general "Services" links.
 */
$xodoServices = [
  'enterprise-software-development.php' => 'Enterprise and Custom Software Development',
  'business-process-automation.php'     => 'Business Process Automation',
  'web-mobile-app-development.php'      => 'Web and Mobile Application Development',
  'systems-integration-api.php'         => 'Systems Integration and API Development',
  'digital-commerce-solutions.php'      => 'Digital Commerce Solutions',
];

$xodoServicesHome = array_keys($xodoServices)[0];
