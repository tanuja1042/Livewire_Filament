<div class="services-section">
    <h1>Available Services</h1>
    <div class="services-grid">
        @foreach($services as $service)
            <div class="card">
                <h2>{{ $service->title }}</h2>
                <p>{!! $service->description !!}</p>
            </div>
        @endforeach
    </div>
</div>
