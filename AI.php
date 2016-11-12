<?php

/*
 * Plugin Name: Artifical Recognising
 * Plugin URI:  http://marcz.ga/hackathon
 * Description: Artificial intelligence engine powered by collective intelligence for our website. Learn some interesting insights about your visitors!
 * Version:     1.2
 *
 * Author:      MARCZ, Inc.
 * Author URI:  https://marcz.ga
 * License:     GPL2
 * License URI: https://github.com/techspectation/marcz
 */

// include whatever is needed
require_once(dirname(__FILE__) . '/includes/classes/BreinifyPlugIn.php');

// make sure we have a log
openlog("BreinifyPlugIn", LOG_PID | LOG_PERROR, LOG_LOCAL0);

syslog(LOG_DEBUG, 'Handling (' . $_SERVER['REQUEST_METHOD'] . '): ' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

// set up the plugIn
BreinifyPlugIn::instance()->setUp(__FILE__);

// close the log, after execution
//closelog();