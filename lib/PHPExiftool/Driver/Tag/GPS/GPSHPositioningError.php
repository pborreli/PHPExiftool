<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\GPS;

use PHPExiftool\Driver\AbstractTag;

class GPSHPositioningError extends AbstractTag
{

    protected $Id = 31;

    protected $Name = 'GPSHPositioningError';

    protected $FullName = 'GPS::Main';

    protected $GroupName = 'GPS';

    protected $g0 = 'EXIF';

    protected $g1 = 'GPS';

    protected $g2 = 'Location';

    protected $Type = 'rational64u';

    protected $Writable = true;

    protected $Description = 'GPS Horizontal Positioning Error';

}
