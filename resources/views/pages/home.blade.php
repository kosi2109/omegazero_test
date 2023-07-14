<x-layouts.app title="Home">
    <div class="d-flex flex-column justify-content-center align-items-center mt-5">
        <h1>Hello <span class="text-primary">OmegaZero Team</span></h1>
        <h2>I'm Si Thu Htet and here is my code test results</h2>
    
        <ul>
            <li><a class="text-danger" href="{{route('question-one.home')}}">Answer 1</a></li>
            <li><a class="text-danger" href="{{route('question-two.home')}}">Answer 2</a></li>
            <li><a class="text-danger" href="{{route('question-three')}}">Answer 3</a></li>
            <li><a class="text-danger" href="{{route('question-four')}}">Answer 4</a></li>
        </ul>
    </div>
</x-layouts.app>