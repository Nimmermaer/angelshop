<?php

namespace MB\Angelshop\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */


/**
 * Class News
 * @package MB\Angelshop\Domain\Model
 */
class News extends \GeorgRinger\News\Domain\Model\News
{
    /**
     * @var bool
     */
    protected $recipe = false;

    /**
     * @var string
     */
    protected $icon = '';

    /**
     * @var string
     */
    protected $ingredient = '';

    /**
     * @return boolean
     */
    public function isRecipe()
    {
        return $this->recipe;
    }

    /**
     * @param boolean $recipe
     */
    public function setRecipe($recipe)
    {
        $this->recipe = $recipe;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @return string
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param string $ingredient
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;
    }
}
