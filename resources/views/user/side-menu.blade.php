<div class="col-md-3 side-menu">
    <h4>Categories</h4>
    <ul class="nav nav-pills nav-stacked">
        @if($category)
            @foreach($category as $categories)
                <li><a href="/user/category/{{$categories->cat_name}}">{{$categories->cat_name}}</a></li>
            @endforeach
        @endif
    </ul>
    <ul class="nav nav-pills nav-stacked">
        <li><a href="#">Subscribe</a></li>
        <li><a href="#">News Letter</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</div>