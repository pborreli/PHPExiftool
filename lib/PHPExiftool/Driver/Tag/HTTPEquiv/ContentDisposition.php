<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\HTTPEquiv;

use PHPExiftool\Driver\AbstractTag;

class ContentDisposition extends AbstractTag
{

    protected $Id = 'content-disposition';

    protected $Name = 'ContentDisposition';

    protected $FullName = 'HTML::equiv';

    protected $GroupName = 'HTTP-equiv';

    protected $g0 = 'HTML';

    protected $g1 = 'HTTP-equiv';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Content Disposition';

}
