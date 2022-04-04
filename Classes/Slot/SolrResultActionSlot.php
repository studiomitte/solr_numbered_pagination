<?php

declare(strict_types=1);

namespace StudioMitte\SolrNumberedPagination\Slot;

use ApacheSolrForTypo3\Solr\Pagination\ResultsPaginator;
use GeorgRinger\NumberedPagination\NumberedPagination;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Add numbered pagination to EXT:solr
 */
class SolrResultActionSlot
{

    public function run(array $values): array
    {
        if (class_exists(ResultsPaginator::class)) {
            $searchResultSet = $values['resultSet'];
            $currentPage = $values['currentPage'];
            $itemsPerPage = ($searchResultSet->getUsedResultsPerPage() ?: 10);
            $paginator = GeneralUtility::makeInstance(ResultsPaginator::class, $searchResultSet, $currentPage, $itemsPerPage);

            $values['pagination'] = GeneralUtility::makeInstance(NumberedPagination::class, $paginator, 10);
        }
        return [$values];
    }
}
