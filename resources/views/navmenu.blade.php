<!-- File: resources/views/navmenu.blade.php -->

<ul id="nav" class="navbar-nav ms-auto">
    @foreach($menuItems as $menuItem)
        <li class="nav-item">
            <a class="page-scroll" href="/{{$menuItem['url']}}">{{$menuItem['label']}}</a>
        </li>
    @endforeach
</ul>