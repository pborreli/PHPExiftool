<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Samsung;

use PHPExiftool\Driver\AbstractTag;

class ColorSpace extends AbstractTag
{

    protected $Id = 40977;

    protected $Name = 'ColorSpace';

    protected $FullName = 'Samsung::Type2';

    protected $GroupName = 'Samsung';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Samsung';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Color Space';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'sRGB',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Adobe RGB',
        ),
    );

}
