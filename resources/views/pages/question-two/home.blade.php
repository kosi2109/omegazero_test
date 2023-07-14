<x-layouts.app title="Home">
    <x-partials.introduce number='2' />

    <div class="shadow rounded p-5">
        <h2>Send Email Notify To User</h2>
        <form method="POST" action="{{route('question-two.mail-send')}}">
            @csrf
            <div class="col-12 mb-3">
                <div>
                    <input required name="email" type="email" value="{{old('email')}}" class="form-control" id="email_input" placeholder="Email">
                </div>
            </div>
            <div class="col-12 mb-3">
                <div>
                    <input required name="subject" type="text" value="{{old('subject')}}" class="form-control" id="subject_input" placeholder="Subject">
                </div>
            </div>
            <div class="col-12 mb-3">
                <div>
                    <textarea required name="body" cols="30" class="form-control" rows="10" id="subject_input" placeholder="Body">{{old('subject')}}</textarea>
                </div>
            </div>

            <button class="btn btn-primary">Send</button>
        </form>

        @if (count($errors->all()) > 0 || session("success"))
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
                @if(session("success"))
                    <li class="text-success">{{session('success')}}</li>
                @endif
            </ul>
        @endif
    </div>

    <div class="text-start mt-5">
        <h4>Make:</h4>
        <ul>
            <li>Please run artisan queue:listen or queue:work</li>
            <li>Add you own mail configuration.</li>
        </ul>
    </div>
    <div>
    <div>
        <h4>Description:</h4>
        <ul>
            <li>Set Multiple Email Address : You can use email from users table that migrated in question 1.</li>
            <li>Validation : Validate for required all field and check that email exists in database users table.</li>
            <li>Queue : I use queue job to send mail in order to reduce network traffic and Server Load.</li>
        </ul>
    </div>
</x-layouts.app>