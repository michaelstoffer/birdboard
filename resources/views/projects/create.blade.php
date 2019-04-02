@extends ('layouts.app')

@section('content')
    <div class="lg:w-1/2 lg:mx-auto bg-white py-12 px-16 rounded shadow">
        <h1 class="text-2xl font-normal mb-10 text-center">Let’s start something new</h1>

        <form method="POST" action="/projects">
            @include('projects._form', [
                'project' => new App\Project,
                'buttonText' => 'Create Project'
            ])
        </form>
    </div>
@endsection
