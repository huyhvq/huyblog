<?php
$link_limit = 5;
?>
@if ($paginator->lastPage() > 1)
    <ul class="pagination">
        {{--<li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">--}}
        {{--<a class="next page-numbers" href="{{ $paginator->url(1) }}">First</a>--}}
        {{--</li>--}}
        @if($paginator->currentPage() == 1)
            <span class='page-numbers current'>First</span>
        @else
            <a class="page-numbers" href="{{ $paginator->url(1) }}">First</a>
        @endif

        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $paginator->currentPage() - $half_total_links;
            $to = $paginator->currentPage() + $half_total_links;
            if ($paginator->currentPage() < $half_total_links) {
                $to += $half_total_links - $paginator->currentPage();
            }
            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                @if($paginator->currentPage() == $i)
                    <span class='page-numbers current'>{{ $i }}</span>
                @else
                    <a class="page-numbers" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                @endif
            @endif
        @endfor

        @if($paginator->currentPage() == $paginator->lastPage())
            <span class='page-numbers current'>Last</span>
        @else
            <a class="page-numbers" href="{{ $paginator->lastPage() }}">Last</a>
        @endif
    </ul>
@endif