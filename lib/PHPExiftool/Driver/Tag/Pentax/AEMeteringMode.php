<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

use PHPExiftool\Driver\AbstractTag;

class AEMeteringMode extends AbstractTag
{

    protected $Id = 12;

    protected $Name = 'AEMeteringMode';

    protected $FullName = 'Pentax::AEInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AE Metering Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Multi-segment',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Center-weighted average',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Spot',
        ),
    );

}
