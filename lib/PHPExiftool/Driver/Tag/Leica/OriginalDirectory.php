<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Leica;

use PHPExiftool\Driver\AbstractTag;

class OriginalDirectory extends AbstractTag
{

    protected $Id = 1032;

    protected $Name = 'OriginalDirectory';

    protected $FullName = 'Panasonic::Leica5';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Original Directory';

    protected $flag_Permanent = true;

}
