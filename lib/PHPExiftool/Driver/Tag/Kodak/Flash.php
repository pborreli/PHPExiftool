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

class Flash extends AbstractTag
{

    protected $Id = 34;

    protected $Name = 'Flash';

    protected $FullName = 'Kodak::Type6';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No Flash',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Fired',
        ),
    );

}
