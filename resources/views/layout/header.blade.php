<div class="navbar-header">

    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/') }}">
        Danh sách công việc
    </a>
    @php
        $menus = ['Trang chu', 'Trang sinh vien','Trang hoc sinh']
    @endphp

    @foreach($menus as $menu)

        <div class="menu">
            <a href="#" style="color: red">{{$menu}}</a>
        </div>

    @endforeach
</div>



