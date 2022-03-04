<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @foreach($show_mail as $mail)
        <div>
            <h3>{{$mail->email}}</h3>
            <p>{{$mail->body}}</p>
            <span>{{$mail->sender}}</span>
            <span>{{$mail->status}}</span>
        </div>
    @endforeach
</div>
