<?php

define('TEST_ZOOKEEPER_HOST', getenv('TEST_ZOOKEEPER_HOST') ?: '127.0.0.1');
define('TEST_ZOOKEEPER_PORT', getenv('TEST_ZOOKEEPER_PORT') ?: '2181');
define('TEST_ZOOKEEPER_TIMEOUT', getenv('TEST_ZOOKEEPER_TIMEOUT') ?: 1);
define("TEST_ZOOKEEPER_FULL_URL", TEST_ZOOKEEPER_HOST . ":" . TEST_ZOOKEEPER_PORT);