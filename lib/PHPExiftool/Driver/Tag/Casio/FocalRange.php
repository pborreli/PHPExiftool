<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Casio;

use PHPExiftool\Driver\AbstractTag;

class FocalRange extends AbstractTag
{

    protected $Id = 55;

    protected $Name = 'FocalRange';

    protected $FullName = 'Casio::QVCI';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Focal Range';

    protected $flag_Permanent = true;

}
