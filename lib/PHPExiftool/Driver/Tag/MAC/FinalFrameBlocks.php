<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MAC;

use PHPExiftool\Driver\AbstractTag;

class FinalFrameBlocks extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'FinalFrameBlocks';

    protected $FullName = 'mixed';

    protected $GroupName = 'MAC';

    protected $g0 = 'APE';

    protected $g1 = 'MAC';

    protected $g2 = 'Audio';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Final Frame Blocks';

}
