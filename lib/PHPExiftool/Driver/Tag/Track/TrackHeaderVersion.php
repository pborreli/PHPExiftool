<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Track;

use PHPExiftool\Driver\AbstractTag;

class TrackHeaderVersion extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'TrackHeaderVersion';

    protected $FullName = 'QuickTime::TrackHeader';

    protected $GroupName = 'Track#';

    protected $g0 = 'QuickTime';

    protected $g1 = 'Track#';

    protected $g2 = 'Video';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Track Header Version';

}
