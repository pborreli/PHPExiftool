<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEMain;

use PHPExiftool\Driver\AbstractTag;

class SubfileResource extends AbstractTag
{

    protected $Id = 'rsrc';

    protected $Name = 'SubfileResource';

    protected $FullName = 'MIE::Main';

    protected $GroupName = 'MIE-Main';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Main';

    protected $g2 = 'Other';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Subfile Resource';

    protected $flag_Binary = true;

}
