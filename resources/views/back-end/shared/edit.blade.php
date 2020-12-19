<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header" style="color: white;">
                    <h3 class="card-title" style="color: white;">{{ $modelName }} Edit</h3>
                    <p class="card-text">
                        {{ $pageDesc }}
                    </p>
                </div>
                <div class="card-body">{{ $slot }}</div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    {{ isset($md4) ? $md4 : '' }}
                </div>
            </div>
        </div>
    </div>
</div>
