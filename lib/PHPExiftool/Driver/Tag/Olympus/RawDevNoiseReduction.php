<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

use PHPExiftool\Driver\AbstractTag;

class RawDevNoiseReduction extends AbstractTag
{

    protected $Id = 266;

    protected $Name = 'RawDevNoiseReduction';

    protected $FullName = 'mixed';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Dev Noise Reduction';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Noise Reduction',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Noise Filter',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Noise Filter (ISO Boost)',
        ),
    );

}
