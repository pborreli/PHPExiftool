<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Photoshop;

use PHPExiftool\Driver\AbstractTag;

class DisplayedUnitsY extends AbstractTag
{

    protected $Id = 6;

    protected $Name = 'DisplayedUnitsY';

    protected $FullName = 'Photoshop::Resolution';

    protected $GroupName = 'Photoshop';

    protected $g0 = 'Photoshop';

    protected $g1 = 'Photoshop';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Displayed Units Y';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'inches',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'cm',
        ),
    );

}
