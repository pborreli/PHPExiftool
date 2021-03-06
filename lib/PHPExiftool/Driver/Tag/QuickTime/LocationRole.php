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

class LocationRole extends AbstractTag
{

    protected $Id = 'location.role';

    protected $Name = 'LocationRole';

    protected $FullName = 'QuickTime::Keys';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Location Role';

    protected $local_g2 = 'Location';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Shooting Location',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Real Location',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Fictional Location',
        ),
    );

}
