<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\QuickTime;

use PHPExiftool\Driver\AbstractTag;

class CompositionToDecodeTimelineMapping extends AbstractTag
{

    protected $Id = 'cslg';

    protected $Name = 'CompositionToDecodeTimelineMapping';

    protected $FullName = 'QuickTime::SampleTable';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Composition To Decode Timeline Mapping';

    protected $flag_Binary = true;

}
