<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\KDCIFD;

use PHPExiftool\Driver\AbstractTag;

class SerialNumber extends AbstractTag
{

    protected $Id = 64000;

    protected $Name = 'SerialNumber';

    protected $FullName = 'Kodak::KDC_IFD';

    protected $GroupName = 'KDC_IFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'KDC_IFD';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Serial Number';

    protected $flag_Permanent = true;

}
