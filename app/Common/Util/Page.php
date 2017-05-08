<?php

namespace App\Common\Util;

/**
* Page
*/
class Page implements IPageable
{
    private $items;
    private $count;
    private $pageable;

    public static function fromPageable($items, $count, IPageable $pageable) {
        return new Page($items, $count, $pageable);
    }

    private function __construct($items, $count, $pageable) {
        Assert::notNull($items, '$items');
        Assert::notNull($items, '$pageable');

        $this->items = $items;

        if (!isset($count)) {
            $count = count($items);
        }
        $this->count = $count;

        $this->pageable = $pageable;
    }

    public function getItems() {
        return $this->items;
    }

    public function getCount() {
        return $this->count;
    }

    public function getPage() {
        return $this->pageable->getPage();
    }

    public function getTotalPages() {
        if ($this->getLimit() === 0) { return 0; }
        return ceil($this->count / $this->getLimit());
    }

    public function getLimit() {
        return $this->pageable->getLimit();
    }

    public function getSkip() {
        return $this->pageable->getSkip();
    }

    public function getSorts() {
        return $this->pageable->getSorts();
    }
}