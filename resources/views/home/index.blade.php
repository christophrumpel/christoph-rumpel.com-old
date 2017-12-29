@component('layouts.app')
            {{--@include('partials.social')--}}
            @foreach($posts as $year => $postsInYear)
                    <h2 class="list-group__title">
                        {{ $year }}
                    </h2>
                    <ul>
                        @foreach($postsInYear as $post)
                            <li class="list-group__item">
                                <a class="list-group__link" href="{{ $post->url }}">
                                    {{ $post->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
            @endforeach
        @include('partials.footer')
@endcomponent
