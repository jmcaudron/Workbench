<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// THIS FILE IS INTENDED FOR ADVANCED ADMINS ONLY TO OVERRIDE THE ARRAYS OR COMPONENT OF ARRAYS IN
// THE defaults.php FILE WITH CUSTOMIZATIONS TO APPLY TO ALL YOUR WORKBENCH USERS.
//
// THIS IS NOT TO BE CONFUSED WITH THE overrideable BOOLEAN FLAG WITHIN THE CONFIGURATIONS TO ALLOW
// END USERS TO CUSTOMIZE IN SETTINGS. SEE defaults.php FOR DETAILS.
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// EXAMPLE: $config["fuzzyServerUrlLookup"]["default"] = false;


// OAUTH 2.0 SETTINGS
// Uncomment and populate with keys and secrets to enable OAuth.
// Note, Production and Sandbox can have the same key and secret, but it is not required
// If connecting to other Salesforce environments, add a new entry to the array:
//JMC changes Production
$config["oauthConfigs"]["default"] = array(
                                            "test.salesforce.com" => array(
                                                "label" => "Sandbox",
                                                "key" => "3MVG954MqIw6FnnPDk6JLrA_r.gWH7KmhwGV9p1wUYwzrCEX39P2h04bSVQcNLiPcWLe7X2bkFFhJs99.B8ak",
                                                "secret" => "6662333418566706428"
                                            )/*,
                                            "login.salesforce.com" => array(
                                                "label" => "Production",
                                                "key" => "3MVG954MqIw6FnnPDk6JLrA_r.gWH7KmhwGV9p1wUYwzrCEX39P2h04bSVQcNLiPcWLe7X2bkFFhJs99.B8ak",
                                                "secret" => "6662333418566706428"
                                            )*/
										);


// CSRF SECURITY SETTINGS
// Uncomment and change the value below to a random, secret value:
//
// $config["csrfSecret"]["default"] = "CHANGE_ME";


// ORG ID WHITELIST / BLACKLIST
// To only allow access to a set of orgs or block access to particular orgs,
// uncomment and add the orgs to the respective lists below as comma-separated values:
//
// $config["orgIdWhiteList"]["default"] = "00D000000000001, 00D000000000002";
// $config["orgIdBlackList"]["default"] = "00D000000000003";


?>