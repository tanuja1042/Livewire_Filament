<div> <!-- Single root element -->
    <div class="card">
        <h1>{{ $course->title }}</h1>
        <p>{{ $course->description }}</p>
    </div>

    <h2>Lessons</h2>
    @foreach($lessons as $lesson)
        <div class="card">
            <a href="{{ route('lesson.view', $lesson->id) }}">
                <h3>{{ $lesson->title }}</h3>
            </a>
        </div>
    @endforeach
</div>
