@if (count($breadcrumbs))

    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item">
                    <a href="{{ $breadcrumb->url }}">
                        @if($breadcrumb->icon)
                            <i class="fa {{ $breadcrumb->icon }}"></i>&nbsp;
                        @endif
                        {{ $breadcrumb->title }}
                    </a>
                </li>
            @else
                <li class="breadcrumb-item active">
                    @if($breadcrumb->icon)
                        <i class="fa {{ $breadcrumb->icon }}"></i>&nbsp;
                    @endif
                    {{ $breadcrumb->title }}
                </li>
            @endif

        @endforeach
    </ol>

@endif