<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\QuickTime;

use PHPExiftool\Driver\AbstractTag;

class OpColor extends AbstractTag
{

    protected $Id = 3;

    protected $Name = 'OpColor';

    protected $FullName = 'QuickTime::VideoHeader';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Op Color';

    protected $MaxLength = 3;

}
