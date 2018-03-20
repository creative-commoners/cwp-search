<?php

use CWP\Search\Solr\CwpSolr;
use SilverStripe\Core\Environment;

if (!Environment::getEnv('CWP_SOLR_DISABLE')) {
    CwpSolr::configure();
}
