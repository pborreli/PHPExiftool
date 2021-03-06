<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FujiFilm;

use PHPExiftool\Driver\AbstractTag;

class Face8Category extends AbstractTag
{

    protected $Id = 'Face8Category';

    protected $Name = 'Face8Category';

    protected $FullName = 'FujiFilm::FaceRecInfo';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Face 8 Category';

    protected $flag_Permanent = true;

    protected $Values = array(
        2 => array(
            'Id' => 2,
            'Label' => 'Partner',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Family',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Friend',
        ),
    );

}
