
@foreach($items as $item)
    @if($item->meta('hidden', false) === true)
        @continue
    @endif
    @if($item->hasChildren())
        <div class="dropdown-submenu">
            <a href="#" class="dropdown-item">
                {{ $item->getValue() }}
            </a>
            <div class="dropdown-menu">
                @include('codex::menus.projects-child', [
                    'items' => $item->getChildren(),
                    'menu' => $menu
                ])
            </div>
        </div>
    @else
        <li>
        <a href="{{ $item->attribute('href', '#') }}" class="dropdown-item a">
            @if($item->meta('icon', false) !== false)
                <i class="{{ $item->meta('icon') }}"></i>
            @endif
            {{ $item->getValue() }}
        </a>
        </li>
    @endif
@endforeach
