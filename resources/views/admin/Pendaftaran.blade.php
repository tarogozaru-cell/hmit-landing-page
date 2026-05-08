<h2>Data Pendaftaran</h2>

@foreach($data as $d)
    <div style="padding:10px;border:1px solid #ddd;margin-bottom:10px;">
        <b>{{ $d->nama }}</b><br>
        {{ $d->nim }}<br>
        {{ $d->email }}<br>
        {{ $d->alasan }}
    </div>
@endforeach