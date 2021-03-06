<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace CustomerManagementFrameworkBundle\SegmentAssignment\Indexer;

use Pimcore\Model\Element\ElementInterface;

interface IndexerInterface
{
    /**
     * indexes all elements in currently stored in the queue
     *
     * @param ElementInterface $rootNode
     *
     * @return bool
     */
    public function processQueue(): bool;
}
