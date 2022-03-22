<?php

$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$signalSlotDispatcher->connect(
    \ApacheSolrForTypo3\Solr\Controller\SearchController::class,
    'resultsAction',
    \StudioMitte\SolrNumberedPagination\Slot\SolrResultActionSlot::class,
    'run'
);