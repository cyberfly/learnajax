<option value="">Pilih Daerah</option>
@foreach ($daerahs as $daerah)
    <option value="{{ $daerah->id }}">{{ $daerah->nama }}</option>
@endforeach