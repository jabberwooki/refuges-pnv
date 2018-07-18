<?php
/**
 * Environment dependent config activations.
 */
$host = $_SERVER['HTTP_HOST'];
// Local instance
if (strpos($host, '.localhost') !== false) {
  $config['config_split.config_split.local']['status'] = TRUE;
  $config['config_split.config_split.korora_dev']['status'] = FALSE;
  $config['config_split.config_split.stage']['status'] = FALSE;
  $config['config_split.config_split.prod']['status'] = FALSE;
}
// KORORA Dev instance
elseif (strpos($host, '.korora.fr') !== false) {
  $config['config_split.config_split.local']['status'] = FALSE;
  $config['config_split.config_split.korora_dev']['status'] = TRUE;
  $config['config_split.config_split.stage']['status'] = FALSE;
  $config['config_split.config_split.prod']['status'] = FALSE;
}
// Live instance
elseif (strpos($host, '.vanoise.com') !== false) {
  $config['config_split.config_split.local']['status'] = FALSE;
  $config['config_split.config_split.korora_dev']['status'] = FALSE;
  $config['config_split.config_split.stage']['status'] = FALSE;
  $config['config_split.config_split.prod']['status'] = TRUE;
}
// Ovea preprod (and prod) instances
else {
  $config['config_split.config_split.local']['status'] = FALSE;
  $config['config_split.config_split.korora_dev']['status'] = FALSE;
  $config['config_split.config_split.stage']['status'] = TRUE;
  $config['config_split.config_split.prod']['status'] = FALSE;
}
