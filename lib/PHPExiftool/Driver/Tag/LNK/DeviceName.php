<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\LNK;

use PHPExiftool\Driver\AbstractTag;

class DeviceName extends AbstractTag
{

    protected $Id = 'DeviceName';

    protected $Name = 'DeviceName';

    protected $FullName = 'LNK::LinkInfo';

    protected $GroupName = 'LNK';

    protected $g0 = 'LNK';

    protected $g1 = 'LNK';

    protected $g2 = 'Other';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Device Name';

}
