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

class MovieStreamName extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'MovieStreamName';

    protected $FullName = 'FujiFilm::FFMV';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Movie Stream Name';

    protected $flag_Permanent = true;

    protected $MaxLength = 34;

}
