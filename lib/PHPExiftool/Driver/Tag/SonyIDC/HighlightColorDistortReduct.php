<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SonyIDC;

use PHPExiftool\Driver\AbstractTag;

class HighlightColorDistortReduct extends AbstractTag
{

    protected $Id = 32806;

    protected $Name = 'HighlightColorDistortReduct';

    protected $FullName = 'SonyIDC::Main';

    protected $GroupName = 'SonyIDC';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SonyIDC';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Highlight Color Distort Reduct';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Advanced',
        ),
    );

}
