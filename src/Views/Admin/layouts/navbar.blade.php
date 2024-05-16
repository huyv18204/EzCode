<nav>
 <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Tìm kiếm...">
            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
    </form>

    <a href="#" class="profile">
        @if(empty($_SESSION['user']['image']))
            <img src="{{route('/assets/imgs/user.png')}}" alt="">
        @else
            <img src="{{$_SESSION['user']['image']}}">
        @endif
    </a>
</nav>