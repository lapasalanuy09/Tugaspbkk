<form action="{{ route('penulis.store') }}" method="POST">
    @csrf



    <div>
        Nama:
        <input type="text" name="name" value="{{ old('name') }}" />

        <br>

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        email:
        <input type="text" name="email" value="{{ old('email') }}" />

        <br>

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        Address:
        <textarea name="adress">{{ old('address') }}</textarea>

        <br>

        @error('address')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
</form>
