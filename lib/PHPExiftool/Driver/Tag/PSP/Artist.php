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

class Artist extends AbstractTag
{

    protected $Id = 3;

    protected $Name = 'Artist';

    protected $FullName = 'PSP::Creator';

    protected $GroupName = 'PSP';

    protected $g0 = 'PSP';

    protected $g1 = 'PSP';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Artist';

    protected $local_g2 = 'Author';

}
