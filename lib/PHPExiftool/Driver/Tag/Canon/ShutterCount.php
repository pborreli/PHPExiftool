<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use PHPExiftool\Driver\AbstractTag;

class ShutterCount extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'ShutterCount';

    protected $FullName = 'mixed';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'mixed';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Shutter Count';

    protected $flag_Permanent = true;

    protected $Index = 'mixed';

}
