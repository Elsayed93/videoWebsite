<div class="card" style="width: fit-content;">
    <div class="row" style="padding-right: 20px;">
        <div class="col-8">
            <div class="card-body" style="color: white;">
                <h3 class="card-title" style="color: white;">{{ $modelName }} index</h3>
                <p class="card-text">
                    {{ $pageDesc }}
                </p>


            </div>
        </div>
        {{ $addButton }}


    </div>
</div>

{{ $slot }}
