<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row" id="blogGet">

        </div>

    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 text-center">
            <nav class="navigation pagination d-inline-block">
                <div class="nav-links">
                    <a class="prev page-numbers" href="#">Prev</a>
                    <span aria-current="page" class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="next page-numbers" href="#">Next</a>
                </div>
            </nav>
        </div>
    </div>
    </div>
</section>

<script>
    getBlogs();

    async function getBlogs() {
        try {
            let URL = "/blogAjax";
            let response = await axios.get(URL);
            response.data.forEach(item => {

                document.getElementById('blogGet').innerHTML += `
                  <div  class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                    <h1>${item['id']}</h1>
                    <img src="images/blog/1.jpg" alt="" class="img-fluid rounded">

                    <div class="blog-item-content bg-white p-5">
                        <div class="blog-item-meta bg-gray py-1 px-2">
                            <span class="text-muted text-capitalize mr-3"><i
                                    class="ti-pencil-alt mr-2"></i>${item['category']}</span>
                            <span class="text-muted text-capitalize mr-3"><i
                                    class="ti-comment mr-2"></i>5 Comments</span>
                            <span class="text-black text-capitalize mr-3"><i
                                    class="ti-time mr-1"></i> 28th January</span>
                        </div>

                        <h3 class="mt-3 mb-3"><a href="{{ url('blogdetails') }}">Improve design with typography?</a>
                        </h3>
                        <p class="mb-4">${item['description']}</p>

                       <a href="#" onclick="redirectToDetails(${item['id']})" class="btn btn-small btn-main btn-round-full">Learn More</a>
                    </div>
                    </div>
                </div>`
            });


        } catch (e) {
            alert(e.message);
        }
    }

    function redirectToDetails(id) {
        window.location.href = `/blogdetails/${id}`;
    }
</script>
