@extends('site.layouts.layout')

@section('main')
    



    <div class="container">
        <div class="row">
            
                <div class="col-4 right-col"><span
                        style="background-color: #87CEEB; padding: 5px; border-radius: 10px; margin:5px"><i
                            style="color: rgb(238, 25, 25); font-style: italic; font-size: 18px;"></i>{{ $item->name }}</span>
                    @php
                        $counter = 0;
                    @endphp
                    <hr>
                    
                        @if ($counter == 0)
                            <div class="article">
                                <div class="image-container">
                                    
                                        <img src="{{ url('/storage/media/blogs/' . $result->post->image) }}"
                                            alt="Article Image" class="article-imageee">
                                    {{-- @else
                                        <img src="{{ url('/storage/media/blogs/' . $result->post->image) }}"
                                            alt="Article Image" class="article-imageee"> --}}
                                  
                                </div>
                                <div class="text">
                                    <a href="{{ url('news/' . $result->post->id) }}">
                                        <h4>{{  }}</h4>
                                    </a>
                                    <p class="date">{{ }}</p>
                                    <p class="author">
                                        <img src=""
                                            alt="Author Image" class="author-avatar">
                                        <span>{{  }}</span>
                                    </p>
                                </div>
                            </div>
                        @else
                            <div class="article">
                                <div class="image-container">
                                    <img src=""
                                        alt="Article Image" class="article-image">
                                </div>
                                <div class="text">
                                    <h4>{{ }}</h4>
                                    <p class="date">Published on: {{  }}</p>
                                    <p class="author">
                                        <img src=""
                                            alt="Author Image" class="author-avatar">
                                        <span>{{ }}</span>
                                    </p>
                                </div>
                            </div>
                        @endif
                    
                </div>
                @php
                    $counter++;
                @endphp
            @endforeach
        </div>
    </div>



    
@endsection
