<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Kodak;

use PHPExiftool\Driver\AbstractTag;

class ExposureMode extends AbstractTag
{

    protected $Id = 'Exposure Mode';

    protected $Name = 'ExposureMode';

    protected $FullName = 'Kodak::TextualInfo';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Exposure Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        'A' => array(
            'Id' => 'A',
            'Label' => 'Aperture Priority',
        ),
        'B' => array(
            'Id' => 'B',
            'Label' => 'Bulb',
        ),
        'M' => array(
            'Id' => 'M',
            'Label' => 'Manual',
        ),
        'P' => array(
            'Id' => 'P',
            'Label' => 'Program',
        ),
        'S' => array(
            'Id' => 'S',
            'Label' => 'Shutter Priority',
        ),
    );

}
