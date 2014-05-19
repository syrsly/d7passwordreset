<?php
define('DRUPAL_ROOT', getcwd());

include_once DRUPAL_ROOT . '/includes/password.inc';
include_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

// Set the encrypted value for password: whatever
$newpass = user_hash_password('whatever');

mysql_query("UPDATE users SET pass='".$newpass."' where uid=1");
print("User 1 (admin) password changed to \"whatever\".");
print("<br />Hash (just in case): ".$newpass." ");

// Make sure you delete the file from your server after running it!
print("<br />You may now delete the reset.php file.");
?>
