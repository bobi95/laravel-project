@php
    if (isset($page) && $page instanceof \App\Common\Util\Page) {
        $pageObj = $page;
        $page = $pageObj->getPage();
        $max_pages = $pageObj->getTotalPages();
        $limit = $pageObj->getLimit();

        if ($max_pages == 0) {
            $max_pages = 1;
        }
        if ($page > $max_pages) {
            $page = $max_pages;
        }

    } else {
        $page = 1;
        $max_pages = 1;
        $limit = 20;
    }

    // TODO put in Paging util class
    // getPageNumbers($currentPage, $maxPages, $maxShownNumbers)
    // return [ 'startNum' => $i, 'endNum' => $max_i ]
    $MAX_SHOWN = isset($maxNumbers) && is_integer($maxNumbers) && $maxNumbers >= 3 ? $maxNumbers : 9;
    $OFFSET = floor($MAX_SHOWN / 2);
    $MIDDLE = $OFFSET + 1;

    $i = $page < $MIDDLE ? 1 :
         (($page > $max_pages - $OFFSET) ? ($max_pages - 2 * $OFFSET) :
         ($page - $OFFSET));

    if ($i < 1) {
        $i = 1;
    }

    $max_i = ($max_pages <= $MAX_SHOWN || $page + $OFFSET > $max_pages) ? $max_pages :
             ($page < $MIDDLE ? $MAX_SHOWN : $page + $OFFSET);

    if ($max_i > $max_pages) {
        $max_i = $max_pages;
    }

@endphp
<div class="center-align col s12">
    <ul class="pagination">
        <li class="@if ($page == 1) disabled @else waves-effect @endif">
            <a href="{{ Request::getPathInfo() }}?limit={{$limit}}"><i class="material-icons">first_page</i></a>
        </li>
        <li class="@if ($page == 1) disabled @else waves-effect @endif">
            <a href="{{ Request::getPathInfo() }}?page={{$page - 1}}&limit={{$limit}}"><i class="material-icons">chevron_left</i></a>
        </li>
        @for (; $i <= $max_i; $i++)
            <li class="@if ($i == $page) active @else waves-effect @endif">
                <a href="{{ Request::getPathInfo() }}?page={{$i}}&limit={{$limit}}">{{ $i }}</a>
            </li>
        @endfor
        <li class="@if ($page == $max_pages) disabled @else waves-effect @endif">
            <a href="{{ Request::getPathInfo() }}?page={{$page + 1}}&limit={{$limit}}"><i class="material-icons">chevron_right</i></a>
        </li>
        <li class="@if ($page == $max_pages) disabled @else waves-effect @endif">
            <a href="{{ Request::getPathInfo() }}?page={{$max_pages}}&limit={{$limit}}"><i class="material-icons">last_page</i></a>
        </li>
    </ul>
</div>