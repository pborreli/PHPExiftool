<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use PHPExiftool\Driver\AbstractTag;

class Face8Position extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'Face8Position';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'mixed';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Face 8 Position';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

}
