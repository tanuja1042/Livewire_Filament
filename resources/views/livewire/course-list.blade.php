<div>
    <h1>Available Courses</h1>
    @foreach($courses as $course)
        <div class="card">
            <a href="{{ route('course.details', $course->id) }}">
                <h2>{{ $course->title }}</h2>
                <p>{{ $course->description }}</p>
            </a>
        </div>
    @endforeach
</div>
