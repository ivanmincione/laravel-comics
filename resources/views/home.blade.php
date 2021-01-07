@extends("layouts.app")

@section("content")
    @include("partials.jumbotron")

    <section id="comics">

        <div class="container">
            <div class="box-comics">
                @foreach ($series as $value)
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ $value["thumb"] }}" alt="{{ $value["series"] }}">
                        </div>
                        <div class="card-title">
                            <p class="uppercase">
                                {{ $value["series"] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section("page-title", "Home - Laravel DC Comics")
