<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SR2SubIFD;

use PHPExiftool\Driver\AbstractTag;

class WBRGBLevelsFlash extends AbstractTag
{

    protected $Id = 30760;

    protected $Name = 'WB_RGBLevelsFlash';

    protected $FullName = 'Sony::SR2SubIFD';

    protected $GroupName = 'SR2SubIFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SR2SubIFD';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'WB RGB Levels Flash';

    protected $flag_Permanent = true;

}
