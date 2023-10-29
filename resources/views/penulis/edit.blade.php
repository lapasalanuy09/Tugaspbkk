<form action="{{ route('penulis.update', $penuli->id) }}" method="POST">
    @csrf
    @method('PUT')



    <div>
        name:
        <input type="text" name="name" value="{{ old('name', $penuli->name) }}" />

        <br>

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Email:
        <input type="text" name="email" value="{{ old('title', $penuli->email) }}" />

        <br>

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Deskripsi:
        <textarea name="address">{{ old('address', $penuli->address) }}</textarea>

        <br>

        @error('address')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
</form>
