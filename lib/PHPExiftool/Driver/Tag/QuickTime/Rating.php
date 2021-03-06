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

class Rating extends AbstractTag
{

    protected $Id = 'rtng';

    protected $Name = 'Rating';

    protected $FullName = 'QuickTime::ItemList';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Rating';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'none',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Clean',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Explicit',
        ),
    );

}
