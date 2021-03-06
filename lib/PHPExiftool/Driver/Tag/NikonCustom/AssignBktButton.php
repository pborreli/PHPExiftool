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

class AssignBktButton extends AbstractTag
{

    protected $Id = '4.2';

    protected $Name = 'AssignBktButton';

    protected $FullName = 'NikonCustom::SettingsD3';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Assign Bkt Button';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto Bracketing',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Multiple Exposure',
        ),
    );

}
