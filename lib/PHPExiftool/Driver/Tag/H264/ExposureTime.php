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

class ExposureTime extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'ExposureTime';

    protected $FullName = 'mixed';

    protected $GroupName = 'H264';

    protected $g0 = 'H264';

    protected $g1 = 'H264';

    protected $g2 = 'mixed';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'Exposure Time';

    protected $local_g2 = 'Image';

}
