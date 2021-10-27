<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011-2012 Armin Rüdiger Vieweg <info@professorweb.de>
 *  (c) 2013 Stanislas Rolland <typo3(arobas)sjbr.ca>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
namespace SJBR\StaticInfoTables\Domain\Model;

/**
 * The Language model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Language extends AbstractEntity
{
    /**
     * Romanian name of the language
     * @var string
     */
    protected $nameRo = '';

    /**
     * Sets the Romanian name of the language
     *
     * @param string $nameRo
     *
     * @return void
     */
    public function setNameRo($nameRo)
    {
        $this->nameRo = $nameRo;
    }

    /**
     * Gets the Romanian name of the language
     *
     * @return string
     */
    public function getNameRo()
    {
        return $this->nameRo;
    }
}
