<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Qualcomm;

use PHPExiftool\Driver\AbstractTag;

class AWBBlueGainAdjRef6 extends AbstractTag
{

    protected $Id = 'awb_blue_gain_adj_ref6';

    protected $Name = 'AWBBlueGainAdjRef6';

    protected $FullName = 'Qualcomm::Main';

    protected $GroupName = 'Qualcomm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Qualcomm';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'AWB Blue Gain Adj Ref6';

    protected $flag_Permanent = true;

}
