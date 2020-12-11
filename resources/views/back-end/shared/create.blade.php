<div class="container">
    <div class="row">
        <div class="card">
            <div class="col-8">
                <div class="card-body" style="color: white;">
                    <h3 class="card-title" style="color: white;">{{ $modelName }} create</h3>
                    <p class="card-text">
                        {{ $pageDesc }}
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-10 mx-auto">
            {{ $slot }}
        </div>
    </div>

</div>
