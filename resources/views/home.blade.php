@extends("layouts.app")

@section("content")
    @include("partials.jumbotron")

    <section id="comics">
        <div class="container">
            <div class="title-section">
                <h2 class="uppercase"> current series </h2>
            </div>
            <div class="box-comics">
                @foreach ($series as $index => $value)
                    <div class="card">
                        <a href="{{ route('page-details', ['id' => $index]) }}">
                            <div class="card-image">
                                <img src="{{ $value["thumb"] }}" alt="{{ $value["series"] }}">
                            </div>
                            <div class="card-title">
                                <p class="uppercase">
                                    {{ $value["series"] }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="button">
                <div class="btn-load">
                    <a class="uppercase" href="#"> load more</a>
                </div>
            </div>
        </div>
        <div class="shop-link">
            <div class="card-shop">
                <img src="/images/buy-comics-digital-comics.png" alt="img DC">
                <a class="uppercase" href="#">digital comics</a>
            </div>
            <div class="card-shop">
                <img src="/images/buy-comics-merchandise.png" alt="img DC">
                <a class="uppercase" href="#">DC merchandise</a>
            </div>
            <div class="card-shop">
                <img src="/images/buy-comics-subscriptions.png" alt="img DC">
                <a class="uppercase" href="#">subscription</a>
            </div>
            <div class="card-shop">
                <img src="/images/buy-comics-shop-locator.png" alt="img DC">
                <a class="uppercase" href="#">comic shop locator</a>
            </div>
            <div class="card-shop">
                <img src="/images/buy-dc-power-visa.svg" alt="img DC">
                <a class="uppercase" href="#">dc power visa</a>
            </div>
        </div>
    </section>
@endsection

@section("page-title", "Home - Laravel DC Comics")
