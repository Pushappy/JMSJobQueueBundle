<?php

use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;

return RectorConfig::configure()
    ->withSets([
        DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES
    ]);
