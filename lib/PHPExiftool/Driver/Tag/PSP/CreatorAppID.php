<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\PSP;

use PHPExiftool\Driver\AbstractTag;

class CreatorAppID extends AbstractTag
{

    protected $Id = 6;

    protected $Name = 'CreatorAppID';

    protected $FullName = 'PSP::Creator';

    protected $GroupName = 'PSP';

    protected $g0 = 'PSP';

    protected $g1 = 'PSP';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Creator App ID';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unknown',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Paint Shop Pro',
        ),
    );

}
