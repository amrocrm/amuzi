<?php

/**
 * View_Helper_PlaylistSquare
 *
 * @package Amuzi
 * @version 1.0
 * Amuzi - Online music
 * Copyright (C) 2010-2013  Diogo Oliveira de Melo
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('views/helpers/T.php');
class View_Helper_PlaylistSquare extends View_Helper_T
{

    public function playlistSquare(DbTable_iTrackCollectionRow $playlistRow, $current = false)
    {
        return '<div class="item-square playlist-square object-playlist '
            . ($current ? 'current-playlist' : '') . '" '
            . $playlistRow->getType() . 'id="' . $playlistRow->id . '">'
            . '<div class="cover"><img src="' . $playlistRow->getCover()
            . '"/></div>' . '<div class="name">' . $playlistRow->getCoverName()
            . '</div>'
            . '<a href="#" class="play button"><img src="/img/play_icon_'
            . 'square.png"/></a>'
            . '<a href="/' . $playlistRow->getType() . '/info/id/'
            . $playlistRow->id
            . '" class="info button loadModal" title="' . $this->t(ucfirst($playlistRow->getType()))
            . ' ' . $this->t('details') . '"><img src="/img/info_icon.png"/>'
            . '</a>'
            . '<a href="#" class="remove button"><img src="/img/remove_icon_'
            . 'square.png"/></a>'
            . '</div>';
    }
}
