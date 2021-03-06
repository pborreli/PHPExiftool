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

class FlashStatus extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'FlashStatus';

    protected $FullName = 'Pentax::FlashInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Flash Status';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Off (1)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'External, Did not fire',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'External, Fired',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Internal, Did not fire (0x08)',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Internal, Did not fire',
        ),
        13 => array(
            'Id' => 13,
            'Label' => 'Internal, Fired',
        ),
    );

}
