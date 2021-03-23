{{-- <h1>header</h1> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light mt-1 fixed">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">TODO-APP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>


            </ul>
            <form class="d-flex mt-3">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-3 me-1 mb-2 mb-lg-0">
                <li>
                    <img class="user_img"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Microsoft_Account.svg/768px-Microsoft_Account.svg.png"
                        alt="User Img">
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
    .user_img {
        height: 54px
    }

</style>
