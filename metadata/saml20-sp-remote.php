<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: http://simplesamlphp.org/docs/trunk/simplesamlphp-reference-sp-remote
 */


$metadata['http://forum.negeripelangi.wm/saml/module.php/saml/sp/metadata.php/forum-sp'] = array (
		'AssertionConsumerService' => 'http://forum.negeripelangi.wm/saml/module.php/saml/sp/saml2-acs.php/forum-sp',
		'SingleLogoutService' => 'http://forum.negeripelangi.wm/saml/module.php/saml/sp/saml2-logout.php/forum-sp',
);

$metadata['http://blog.negeripelangi.wm/saml/module.php/saml/sp/metadata.php/blog-sp'] = array (
		'AssertionConsumerService' => 'http://blog.negeripelangi.wm/saml/module.php/saml/sp/saml2-acs.php/blog-sp',
		'SingleLogoutService' => 'http://blog.negeripelangi.wm/saml/module.php/saml/sp/saml2-logout.php/blog-sp',
);

/*
 * Example simpleSAMLphp SAML 2.0 SP
 */
/**
$metadata['https://saml2sp.example.org'] = array(
	'AssertionConsumerService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
	'SingleLogoutService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
);
**

/*
 * This example shows an example config that works with Google Apps for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address
 * at Google Apps. In example, if your google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
 /**
$metadata['google.com'] = array(
	'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
	'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:email',
	'simplesaml.nameidattribute' => 'uid',
	'simplesaml.attributes' => FALSE,
);
**/