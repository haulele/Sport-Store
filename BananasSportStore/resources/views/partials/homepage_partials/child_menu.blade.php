@if($categoryParent->categoryChildren->count())
    <ul class="collapse list-unstyled" id="homeSubmenu_{{$categoryParent->id}}">
        @foreach($categoryParent->categoryChildren as $categoryChild)
        <li class="active">
            <a href="#homeSubmenu_{{$categoryChild->id}}" data-toggle="collapse"
            aria-expanded="false"
            class="{{ ($categoryChild->categoryChildren->count()) ? 'dropdown-toggle' : ''}}">{{$categoryChild->name}}</a>
            @if($categoryChild->categoryChildren->count())
                @include('partials.homepage_partials.child_menu', ['categoryParent' => $categoryChild])
            @endif
        </li>
        @endforeach
    </ul>
@endif