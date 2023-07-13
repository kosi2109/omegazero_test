<x-layouts.app title="Home">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1>Hello <span class="text-primary">OmegaZero Team</span></h1>
        <h2>I'm Si Thu Htet and here is my code test result</h2>
    
        <ul>
            <li><a class="text-danger" href="{{route('question-one.home')}}">Question 1</a></li>
            <li><a class="text-danger" href="{{route('question-two')}}">Question 2</a></li>
            <li><a class="text-danger" href="{{route('question-three')}}">Question 3</a></li>
            <li><a class="text-danger" href="{{route('question-four')}}">Question 4</a></li>
        </ul>
    </div>
</x-layouts.app>