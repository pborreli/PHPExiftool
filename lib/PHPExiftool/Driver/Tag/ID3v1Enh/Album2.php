<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ID3v1Enh;

use PHPExiftool\Driver\AbstractTag;

class Album2 extends AbstractTag
{

    protected $Id = 124;

    protected $Name = 'Album2';

    protected $FullName = 'ID3::v1_Enh';

    protected $GroupName = 'ID3v1_Enh';

    protected $g0 = 'ID3';

    protected $g1 = 'ID3v1_Enh';

    protected $g2 = 'Audio';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Album 2';

    protected $MaxLength = 60;

}
