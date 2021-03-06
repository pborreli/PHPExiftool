<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MXF;

use PHPExiftool\Driver\AbstractTag;

class CodedContentScanningKind extends AbstractTag
{

    protected $Id = '060e2b34.0101.0105.04010602.01040000';

    protected $Name = 'CodedContentScanningKind';

    protected $FullName = 'MXF::Main';

    protected $GroupName = 'MXF';

    protected $g0 = 'MXF';

    protected $g1 = 'MXF';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Coded Content Scanning Kind';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unknown',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Progressive',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Interlaced',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Mixed',
        ),
    );

}
