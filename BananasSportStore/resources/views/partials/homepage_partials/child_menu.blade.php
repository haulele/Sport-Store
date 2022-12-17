@if($categoryParent->categoryChildren->count())
    <ul class="collapse list-unstyled" id="homeSubmenu_{{$categoryParent->id}}">
        @foreach($categoryParent->categoryChildren as $categoryChild)
        <li class="active row">
            <div class="col">
                <a href="{{ route('category.product',
                        ['slug' => $categoryChild->slug,
                         'id' => $categoryChild->id]) }}">{{$categoryChild->name}}</a>
            </div>
            <div class="col justify-content-end d-flex pt-2">
                <a href="#homeSubmenu_{{$categoryChild->id}}" data-toggle="collapse"
                aria-expanded="false"
                class="{{ ($categoryChild->categoryChildren->count()) ? 'ti-angle-down' : ''}}"></a>
            </div>
            @if($categoryChild->categoryChildren->count())
                @include('partials.homepage_partials.child_menu', ['categoryParent' => $categoryChild])
            @endif
        </li>
        @endforeach
    </ul>
@endif