<?php

namespace App\Common\Util;

use \Illuminate\Http\Request;

/**
* PageRequest
*/
class PageRequest implements IPageable
{
    private $page;
    private $limit;
    private $sorts;

    /**
     * Constructs a new PageRequest from the provided request
     * @param  Request $request Request
     * @return PageRequest      Resulting PageRequest
     */
    public static function fromRequest(Request $request) {
        Assert::notNull($request, '$request');

        $page = $request->get('page', 1);
        $limit = $request->get('limit', 20);

        $sort = $request->get('sort', []);
        $sort = is_array($sort) ? $sort : [ $sort ];

        $sorts = [];
        foreach ($sort as $prop) {
            $dir = strtoupper($request->get($pro . '.dir', 'ASC'));
            if ($dir !== 'ASC' && $dir !== 'DESC') {
                $dir = 'ASC';
            }
            $sorts[$prop] = $dir;
        }

        return new PageRequest($page, $limit, $sorts);
    }

    public function __construct($page, $limit, $sorts) {
        $this->page = $page > 0 ? $page : 1;
        $this->limit = $limit > 0 ? $limit : 0;
        $this->sorts = isset($sorts) ? $sorts : [];
    }

    public function getPage() {
        return $this->page;
    }

    public function getLimit() {
        return $this->limit;
    }

    public function getSkip() {
        return ($this->page - 1) * $this->limit;
    }

    public function getSorts() {
        return $this->sorts;
    }
}