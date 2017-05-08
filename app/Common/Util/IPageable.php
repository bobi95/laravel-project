<?php

namespace App\Common\Util;

interface IPageable {
    /**
     * Returns the page number (starts with 1)
     * @return int page number
     */
    public function getPage();
    /**
     * Returns the maximum number of items to be returned
     * @return int Max number of items
     */
    public function getLimit();
    /**
     * Returns the number of items to skip ((page - 1) * limit)
     * @return int Items to skip
     */
    public function getSkip();
    /**
     * Returns the sortings of the items (property => 'ASC'/'DESC')
     * @return array Sortings
     */
    public function getSorts();
}