<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SubIFD;

use PHPExiftool\Driver\AbstractTag;

class CFARepeatPatternDim extends AbstractTag
{

    protected $Id = 33421;

    protected $Name = 'CFARepeatPatternDim';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'SubIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'CFA Repeat Pattern Dim';

    protected $local_g1 = 'SubIFD';

    protected $flag_Unsafe = true;

}
