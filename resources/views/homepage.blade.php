@extends('base')
    @section('main')
    <div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <img src="" alt="">
                </div>
                <div class="col-md-6">
                    <div id="new-arrival">
                    <div id="new-arrival-title">
                        <h1>Awaken The Giant Within You</h1>
                    </div>
                    <div id="new-arrival-author">
                        <h5>by: <span>J.K. Rowling</span></h5>
                    </div>
                    <div id="new-arrival-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.
                            <br>
                            Lorem ipsum dolor sit.
                    </div>
                    <div id="new-arrival-downloads">
                        <h5><i class="fas fa-download me-2 "></i>  Downloads: <span>1,000,000</span></h5>
                    </div>
                    <div id="new-arrival-price">
                        <h5>$10.00</h5>
                    </div>
                    <div class="row " id="new-arrival-cta">
                        <div class="col-6 "><button class="btn btn-primary w-100"><i class="fas fa-money-bill me-2"></i> Buy Now</button></div><div class="col-6 px-2"> <button class="btn btn-outline-danger w-100"><i class="fa fa-cart-plus me-3" aria-hidden="true"></i> Add to Cart</button></div>
                    </div>
                </div>
        </div>
    </div>
    <hr class="mt-5" />


    {{-- Get The Book You wanted --}}
    <div class="container mt-2">
        <div class="justify-content-center">
            <h2 class="text-center">
                More Books For You!
            </h2>
        </div>
        <div class="book-card row g-2">
        <div class="col-md-4 p-2 border">
        
        <div class="row">
            <img src="" alt="" class="book-cover img-fluid">
        </div>
        <div class="row">
            <h5 class="book-title text-bold">
                Awaken The Giant Within You
            <p class="book-card-intro text-weight-light">
                <i><small> ipsum dolor sit amet consectetur, adipisicing elit.</small></i>
            </p>
            <div class="row">
                <div class="col-6"><button class="btn btn-sm btn-primary w-100"><i class="fas fa-money-bill me-2"></i> Buy Now</button></div>
                <div class="col-6 px-2"><button class="btn btn-sm btn-outline-danger w-100"><i class="fa fa-cart-plus me-3" aria-hidden="true"></i> Add to Cart</button></div>
            </div>
        </div>
        </div>
    </div>
    <hr class="mt-5" />
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/QpjAiHq.jpg"></div>
                    <div class="col-md-6 mt-1">
                        <h5>Quant olap shirts</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                        <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to wishlist</button></div>
                    </div>
                </div>
                <div class="row p-2 bg-white border rounded mt-2">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/JvPeqEF.jpg"></div>
                    <div class="col-md-6 mt-1">
                        <h5>Quant trident shirts</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                        <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">$14.99</h4><span class="strike-text"><del>$20.99</del></span>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to wishlist</button></div>
                    </div>
                </div>
                <div class="row p-2 bg-white border rounded mt-2">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/Bf4dIaN.jpg"></div>
                    <div class="col-md-6 mt-1">
                        <h5>Quant ruybi shirts</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>123</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                        <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to wishlist</button></div>
                    </div>
                </div>
                <div class="row p-2 bg-white border rounded mt-2">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/HO8e9b8.jpg"></div>
                    <div class="col-md-6 mt-1">
                        <h5>Quant tinor shirts</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>110</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                        <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">$15.99</h4><span class="strike-text">$21.99</span>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to wishlist</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <hr class="mt-5" />
    </div>
        </div>
@endsection
