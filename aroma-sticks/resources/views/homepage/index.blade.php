@extends('app')

@section('header')
    <header>
        <nav class="container">
            <div class="logo">💎 Aroma Sticks</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
@endsection

@section('content')
    <section class="hero" id="home">
        <div class="container">
            <h1>Elevate Your Space</h1>
            <div class="tagline-div">
                <p class="tagline">Luxurious incense sticks for the modern home</p>
            </div>
            <button class="btn">Shop Now</button>
        </div>
    </section>

    <section class="products" id="products">
        <div class="container">
            <h2 class="section-title">Our Collections</h2>
            <div class="product-grid">
                <div class="product-card">
                    <div class="product-image">🌹</div>
                    <div class="product-name">Rose Garden</div>
                    <div class="product-price">$12.99</div>
                    <p class="product-desc">Delicate rose and sandalwood blend</p>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-image">🌲</div>
                    <div class="product-name">Forest Pine</div>
                    <div class="product-price">$12.99</div>
                    <p class="product-desc">Fresh pine and eucalyptus essence</p>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-image">🌙</div>
                    <div class="product-name">Midnight Oud</div>
                    <div class="product-price">$14.99</div>
                    <p class="product-desc">Rich oud and amber with musk</p>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-image">🍋</div>
                    <div class="product-name">Citrus Zest</div>
                    <div class="product-price">$12.99</div>
                    <p class="product-desc">Bright lemon and bergamot notes</p>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-image">🌸</div>
                    <div class="product-name">Cherry Blossom</div>
                    <div class="product-price">$13.99</div>
                    <p class="product-desc">Sweet cherry and floral harmony</p>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-image">☕</div>
                    <div class="product-name">Coffee Dreams</div>
                    <div class="product-price">$13.99</div>
                    <p class="product-desc">Rich coffee and vanilla blend</p>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-image">🌺</div>
                    <div class="product-name">Tropical Paradise</div>
                    <div class="product-price">$14.99</div>
                    <p class="product-desc">Exotic coconut and hibiscus</p>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-image">🍃</div>
                    <div class="product-name">Fresh Mint</div>
                    <div class="product-price">$11.99</div>
                    <p class="product-desc">Cool peppermint and spearmint essence</p>
                    <button class="btn">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <section class="products-list">
        <div class="container">
            <h3>Available home aromas:</h3>
            <ul>
                {{-- Čia turi būti išlistinti aromatų pavadinimai iš div.product-name --}}
            </ul>
        </div>
    </section>
@endsection


@section('footer')
    <footer id="contact">
        <div class="container">
            <p>&copy; 2026 Aroma Sticks. All rights reserved.</p>
            <p>Crafted with elegance for your home</p>
        </div>
    </footer>
@endsection


@section('title')
    Feel the Flow of Aroma - Aroma Sticks
@endsection
