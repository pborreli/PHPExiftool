<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Microsoft;

use PHPExiftool\Driver\AbstractTag;

class PanoramicStitchCameraMotion extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'PanoramicStitchCameraMotion';

    protected $FullName = 'Microsoft::Stitch';

    protected $GroupName = 'Microsoft';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Microsoft';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Panoramic Stitch Camera Motion';

    protected $flag_Permanent = true;

    protected $Values = array(
        2 => array(
            'Id' => 2,
            'Label' => 'Rigid Scale',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Affine',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '3D Rotation',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Homography',
        ),
    );

}
