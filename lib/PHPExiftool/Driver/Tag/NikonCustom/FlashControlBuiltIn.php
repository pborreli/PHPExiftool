<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use PHPExiftool\Driver\AbstractTag;

class FlashControlBuiltIn extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'FlashControlBuilt-in';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Flash Control Built-in';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'TTL',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Manual',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Repeating Flash',
        ),
        192 => array(
            'Id' => 192,
            'Label' => 'Commander Mode',
        ),
    );

}
