<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Search\Facet\FieldRangeFacet class.
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace eZ\Publish\API\Repository\Values\Content\Search\Facet;

use eZ\Publish\API\Repository\Values\Content\Search\Facet;

/**
 * This class represents a field range facet
 *
 */
class FieldRangeFacet extends Facet
{
    /**
     * Number of documents not containing any terms in the queried fields
     *
     * @var int
     */
    public $missingCount;

    /**
     * The number of terms which are not in the queried top list
     *
     * @var int
     */
    public $otherCount;

    /**
     * The total count of terms found.
     *
     * @var int
     */
    public $totalCount;

    /**
     * For each interval there is an entry with statistical data
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Search\Facet\RangeFacetEntry[]
     */
    public $entries;
}
