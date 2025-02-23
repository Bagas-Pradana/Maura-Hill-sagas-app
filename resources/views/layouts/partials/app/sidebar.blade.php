@php
    // Data menu
    $menu = [
        [
            'title' => 'Dashboard',
            'icon' => 'mdi mdi-home',
            'url' => route('dashboard'),
            'children' => null,
        ],
        [
            'title' => 'Setting',
            'icon' => 'mdi mdi-cog',
            'url' => route('setting.index'),
            'children' => null,
        ],
        [
            'title' => 'Profile',
            'icon' => 'mdi mdi-account',
            'url' => '#',
            'children' => null,
        ],
        // Example Nav Link with Nav Item
        // [
        //     'title' => 'Nav Link',
        //     'icon' => 'mdi mdi-crosshairs-gps',
        //     'url' => '#',
        //     'children' => [
        //         [
        //             'title' => 'Nav Item 1',
        //             'url' => '#',
        //         ],
        //         [
        //             'title' => 'Nav Item 2',
        //             'url' => '#',
        //         ],
        //     ],
        // ],
    ];
@endphp

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        {{-- <li class="nav-item">
            <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li> --}}
        @foreach ($menu as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ $item['url'] }}"
                    @if (!is_null($item['children'])) data-bs-toggle="collapse" aria-expanded="false" aria-controls="{{ str_replace(' ', '-', strtolower($item['title'])) }}" @endif>
                    <span class="menu-title">{{ $item['title'] }}</span>
                    <i class="{{ $item['icon'] }} menu-icon"></i>
                    @if (!is_null($item['children']))
                        <i class="menu-arrow"></i>
                    @endif
                </a>
                @if (!is_null($item['children']))
                    <div class="collapse"
                        id="{{ str_replace(' ', '-', strtolower($item['title'])) }}">
                        <ul class="nav flex-column sub-menu">
                            @foreach ($item['children'] as $child)
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ $child['url'] }}">{{ $child['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </li>
        @endforeach
    </ul>
</nav>
