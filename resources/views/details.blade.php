@extends('layouts.app')

@section('page-title', 'Details Comic - Laravel DC Comics')

@section('content')
    @include('partials.jumbotron')

    <section class="comic-thumb">
        <div class="small-container">
            <div class="comic-thumb-container">
                <div class="comic-thumb-wrapper">
                    <span class="comic-type uppercase">
                        {{ $comic['type'] }}
                    </span>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <span class="comic-gallery uppercase">View Gallery</span>
                </div>
            </div>
        </div>
    </section>

    <section id="comic-main">
        <div class="small-container">
            <div class="comic-info">
                <h1 class="uppercase">{{ $comic['title'] }}</h1>
                <div class="comic-availability-container">
                    <div class="price">
                        <span>U.S. Price:</span>
                        <span class="comic-price">{{ $comic['price'] }}</span>
                    </div>
                    <div class="availability">
                        <span class="comic-availability uppercase">Available</span>
                    </div>
                    <div class="check">
                        <span>Check Avalibality</span>
                    </div>
                </div>
                <div class="description-container">
                    <p class="comic-description">
                        {{ $comic['description'] }}
                    </p>
                </div>
            </div>
            <div class="comic-adv">
                <h5 class="uppercase">Advertisement</h5>
                <img src="{{ asset('images/adv.jpg') }}" alt="adv">
            </div>
        </div>
    </section>
    <section id="comic-details">
        <div class="small-container">
            <div class="talent">
                <h2>Talent</h2>
                <ul>
                    <li>
                        <span class="detail-label">Art by:</span>
                        <span class="detail-data">
                            @foreach ($comic['artists'] as $artist_name)
                                <a href="#">{{ $artist_name }}</a>{{ !$loop->last ? ',' : '' }}
                            @endforeach
                        </span>
                    </li>
                    <li>
                        <span class="detail-label">Written by:</span>
                        <span class="detail-data">
                            @foreach ($comic['writers'] as $writer_name)
                                <a href="#">{{ $writer_name }}</a>{{ !$loop->last ? ',' : '' }}
                            @endforeach
                        </span>
                    </li>
                </ul>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <ul>
                    <li>
                        <span class="detail-label">Series:</span>
                        <span class="detail-data">
                            <a href="#" class="uppercase">
                                {{ $comic['series'] }}
                            </a>
                        </span>
                    </li>
                    <li>
                        <span class="detail-label">Price:</span>
                        <span class="detail-data">{{ $comic['price'] }}</span>
                    </li>
                    <li>
                        <span class="detail-label">On Sale Date:</span>
                        <span class="detail-data">
                            {{ DateTime::createFromFormat('Y-m-d', $comic['sale_date'])->format('M d Y') }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="comic-bottom">
        <div class="small-container">
            <div class="icon-box-container">
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <span class="icon-box-text">Digital Comics</span>
                        <span class="icon-box-image"></span>
                    </a>
                </div>
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <span class="icon-box-text">Shop DC</span>
                        <span class="icon-box-image"></span>
                    </a>
                </div>
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <span class="icon-box-text">Comic Shop Locator</span>
                        <span class="icon-box-image"></span>
                    </a>
                </div>
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <span class="icon-box-text">Subscriptions</span>
                        <span class="icon-box-image"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
