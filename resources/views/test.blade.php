<form action="{{route('save')}}" method="POST">
    @csrf
    <div>
        @php if(session()->has('success')) $success = session()->get('success'); @endphp
        @if(isset($success))
            <div style="background: green;">{{ $success }}</div>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div style="background: red;">{{ $error }}</div>
            @endforeach
        @endif

        <p>Phone:</p>
        <input type="text" name="phone" required value="{{old('phone')}}">
        <p>Comment:</p>
        <textarea name="comment" id="" cols="30" rows="10" required>{{old('comment')}}</textarea>
        <br>
        <br>
        <div>
            <button type="submit" class="btn btn-dark">Send</button>
        </div>
    </div>
</form>
