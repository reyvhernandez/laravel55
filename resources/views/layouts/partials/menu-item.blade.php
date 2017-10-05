@foreach($items as $item)
    <li class="treeview">
        <a href="{!! $item->url() !!}">
            {!! $item->title !!}
        </a>

        @if($item->hasChildren())
            <ul class="treeview-menu">
                @include('layouts.partials.menu-item', ['items' => $item->children()])
            </ul>
        @endif
    </li>

    @if($item->divider)
        <li{!! Lavary\Menu\Builder::attributes($item->divider) !!}></li>
    @endif
@endforeach