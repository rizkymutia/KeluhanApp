@extends('layouts.app')
@section('content')
<div style="flex: 1; padding: 20px">
    <form action={{route('report')}} method="POST">
        @csrf
        <label for="keluhan">Keluhan</label>
            <select name="keluhan" id="keluhan">
                <option value="guru">Perilaku Guru</option>
                <option value="siswa">Perilaku Siswa</option>
                <option value="kurikulum">Kurikulum</option>
                <option value="lingkungan">Lingkungan Sekolah</option>
                <option value="fasilitas">Fasilitas Sekolah</option>
            </select>
        <label for="lokasi">Lokasi</label>
        <input type="text" name="lokasi" id="lokasi">
        <label for="bukti">Bukti</label>
        <input type="file" name="bukti" id="bukti">
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection

        