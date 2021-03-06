<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SR2;

use PHPExiftool\Driver\AbstractTag;

class SR2SubIFDOffset extends AbstractTag
{

    protected $Id = 29184;

    protected $Name = 'SR2SubIFDOffset';

    protected $FullName = 'Sony::SR2Private';

    protected $GroupName = 'SR2';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SR2';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'SR2 Sub IFD Offset';

    protected $flag_Permanent = true;

}
