<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\H264;

use PHPExiftool\Driver\AbstractTag;

class ApertureSetting extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'ApertureSetting';

    protected $FullName = 'H264::Camera1';

    protected $GroupName = 'H264';

    protected $g0 = 'H264';

    protected $g1 = 'H264';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Aperture Setting';

    protected $Values = array(
        254 => array(
            'Id' => 254,
            'Label' => 'Closed',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'Auto',
        ),
    );

}
