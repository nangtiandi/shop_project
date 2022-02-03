@extends('layouts.master')
@section('content')
    <div class="row">
        <h3>Pricacy & Policy</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur corporis delectus deleniti excepturi illum ipsa, laboriosam magnam maxime necessitatibus nesciunt nihil pariatur perspiciatis quis reprehenderit repudiandae ullam voluptatum. Aliquam, totam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi cupiditate, dignissimos distinctio, error fuga impedit molestiae obcaecati perferendis porro quas quis reiciendis sint sit tempore voluptates voluptatibus? Dolorum, hic.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dignissimos dolorum enim esse ex expedita, facere harum, inventore iusto magni nemo nesciunt omnis optio possimus quam quidem sed veritatis vitae.</p>
        <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        What User Data We Collect
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body bg-white">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Why We Collect Your Data
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Safeguarding adn Securing the Data
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#policyFour" aria-expanded="false" aria-controls="policyFour">
                        Our Cookies Policy
                    </button>
                </h2>
                <div id="policyFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#policyFive" aria-expanded="false" aria-controls="policyFive">
                        Restricting the Collection of your Personal Data
                    </button>
                </h2>
                <div id="policyFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#policySix" aria-expanded="false" aria-controls="policySix">
                        Links to Other Website
                    </button>
                </h2>
                <div id="policySix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
        <form action="{{route('index')}}">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" required>
                <label class="form-check-label" for="flexCheckIndeterminate">
                    I agree to the privacy & policy.
                </label>
            </div>
            <button class="btn btn-dark w-25">Agree</button>
        </form>
    </div>
@endsection
