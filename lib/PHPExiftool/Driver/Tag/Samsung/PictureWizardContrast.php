<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Samsung;

use PHPExiftool\Driver\AbstractTag;

class PictureWizardContrast extends AbstractTag
{

    protected $Id = 4;

    protected $Name = 'PictureWizardContrast';

    protected $FullName = 'Samsung::PictureWizard';

    protected $GroupName = 'Samsung';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Samsung';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Picture Wizard Contrast';

    protected $flag_Permanent = true;

}
