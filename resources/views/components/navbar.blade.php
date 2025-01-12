<nav class="navbar navbar-expand-lg navbar-light bg-body  shadow-lg ">
    <div class="container-fluid ms-5 me-5">
        <a class="navbar-brand" href="{{ route('home') }}">EduFun</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto gap-md-4 ">
                <li class="nav-item">
                    <a class="nav-link fw-bold {{request()->routeIs('home')? 'text-decoration-underline text-primary' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold {{request()->routeIs('articleByCategory') || request()->routeIs('article')? 'text-decoration-underline text-primary' : ''}}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('articleByCategory', ['category' => 'Data Science'])}}">Data Science</a></li>
                        <li><a class="dropdown-item" href="{{route('articleByCategory', ['category' => 'Network Security'])}}">Network Security</a></li>
                    </ul>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link {{request()->routeIs('writers') || request()->routeIs('articleByWriter')? 'text-decoration-underline text-primary' : ''}}" href="{{route('writers')}}">Writers</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link {{request()->routeIs('about')? 'text-decoration-underline text-primary' : ''}}" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link {{request()->routeIs('popular')? 'text-decoration-underline text-primary' : ''}}" href="{{route('popular')}}">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>