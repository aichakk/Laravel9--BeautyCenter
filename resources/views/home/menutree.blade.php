@foreach($children as $submenu)

    @if(count($submenu->children))
        <li>
            <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href=""> {{$submenu->type}}</a></li>
            </ul>
        </li>

        @include('home.menutree',['children'=> $submenu->children])
    @else
        <li><a class="dropdown-item"
               href="{{route('menucontents',['id'=>$submenu->id,'slug'=>$submenu->type])}}"> {{$submenu->type}}</a></li>
    @endif

@endforeach


