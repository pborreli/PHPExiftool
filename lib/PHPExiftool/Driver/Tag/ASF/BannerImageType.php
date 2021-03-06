<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ASF;

use PHPExiftool\Driver\AbstractTag;

class BannerImageType extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'BannerImageType';

    protected $FullName = 'mixed';

    protected $GroupName = 'ASF';

    protected $g0 = 'ASF';

    protected $g1 = 'ASF';

    protected $g2 = 'mixed';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Banner Image Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Bitmap',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'JPEG',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'GIF',
        ),
    );

}
