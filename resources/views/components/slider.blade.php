<section>
    <h1 class='fs-medium text-center mb-5'>My Work</h1>

    <div class='carousel'>
        <div class="carousel-wrapper">
            <div class="carousel-slides">
                <img src="{{ asset('images/image-slide-1.jpg') }}" alt="">
            </div>
            <div class="carousel-slides">
                <img src="{{ asset('images/image-slide-2.jpg') }}" alt="">
            </div>
            <div class="carousel-slides">
                <img src="{{ asset('images/image-slide-3.jpg') }}" alt="">
            </div>
            <div class="carousel-slides">
                <img src="{{ asset('images/image-slide-4.jpg') }}" alt="">
            </div>
            <div class="carousel-slides">
                <img src="{{ asset('images/image-slide-5.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <div class='carousel-buttons flex justify-center space-x-5 mt-10'>
        <img src="{{ asset('images/icon-arrow-left.svg') }}" alt=""
            class='bg-black p-5 border rounded-full cursor-pointer prev-button'>
        <img src="{{ asset('images/icon-arrow-right.svg') }}" alt=""
            class='bg-black p-5 border rounded-full cursor-pointer next-button'>
    </div>
</section>
