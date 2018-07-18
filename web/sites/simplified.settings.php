<?php

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = '';

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

/**
 * The default list of directories that will be ignored by Drupal's file API.
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * The default number of entities to update in a batch process.
 */
$settings['entity_update_batch_size'] = 50;

/**
 * Location of the site configuration files.
 */
$config_directories['sync'] = '../config/sync';

/**
 * Load environment dependent configuration.
 */
include $app_root . '/sites/env-configs.php';

/**
 * Load local development override configuration, if available.
 */
if (file_exists($app_root . '/' . $site_path . '/local.settings.php')) {
  include $app_root . '/' . $site_path . '/local.settings.php';
}
