<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\HTMLOffice;

use PHPExiftool\Driver\AbstractTag;

class LastPrinted extends AbstractTag
{

    protected $Id = 'LastPrinted';

    protected $Name = 'LastPrinted';

    protected $FullName = 'HTML::Office';

    protected $GroupName = 'HTML-office';

    protected $g0 = 'HTML';

    protected $g1 = 'HTML-office';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Last Printed';

    protected $local_g2 = 'Time';

}
