@extends('layout.web-layout-updates')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Scholarship Listings')


@section('webpage2')


    @extends('layout.app-navbar')

    <div class="container">
        <h2 class="mt-5">Enhanced Search Form</h2>
        <form action="#" method="GET">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="searchInput" name="searchInput"
                            placeholder="Enter your search query">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <select class="form-control" id="locationSelect" name="locationSelect">
                            <option value="">Select Location</option>
                            <option value="new-york">New York</option>
                            <option value="los-angeles">Los Angeles</option>
                            <option value="chicago">Chicago</option>
                            <option value="houston">Houston</option>
                            <!-- Add more locations as needed -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <div class="form-group">
                        <select class="form-control" id="categorySelect" name="categorySelect">
                            <option value="">All Categories</option>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <select class="form-control" id="sortBySelect" name="sortBySelect">
                            <option value="relevance">Sort by Relevance</option>
                            <option value="date">Sort by Date</option>
                        </select>
                    </div>
                </div>

            </div>
        </form>
    </div>

    <div class="container">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="card-img" alt="Product Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" style="padding: 10px;">
                                <h5 class="card-title" style="margin-bottom: 5px;">Scholarship Title</h5>
                                <p class="card-text" style="margin-bottom: 3px;">Scholarship Provider Name</p>
                                <p class="card-text" style="margin-bottom: 3px;"><small class="text-muted">Scholarship
                                        Provider</small></p>
                                <p class="card-text" style="margin-bottom: 3px;"><small class="text-muted">Scholarship
                                        Provider</small></p>
                                <p class="card-text" style="margin-bottom: 3px;"><small class="text-muted">Scholarship
                                        Provider</small></p>
                                <p class="card-text" style="margin-bottom: 0;"><small class="text-muted">Scholarship
                                        Provider</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="card-img" alt="Product Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" style="padding: 10px;">
                                <h5 class="card-title" style="margin-bottom: 5px;">Scholarship Title</h5>
                                <p class="card-text" style="margin-bottom: 3px;">Scholarship Provider Name</p>
                                <p class="card-text" style="margin-bottom: 3px;"><small class="text-muted">Scholarship
                                        Provider</small></p>
                                <p class="card-text" style="margin-bottom: 3px;"><small class="text-muted">Scholarship
                                        Provider</small></p>
                                <p class="card-text" style="margin-bottom: 3px;"><small class="text-muted">Scholarship
                                        Provider</small></p>
                                <p class="card-text" style="margin-bottom: 0;"><small class="text-muted">Scholarship
                                        Provider</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
