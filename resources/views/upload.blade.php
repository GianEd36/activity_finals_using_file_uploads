<!DOCTYPE html>
<html>
<head>
    <title>Laravel Image Upload (Single + Multiple)</title>
</head>
<body>
    <h1>Single Image Upload</h1>
    <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>

    <h1>Multiple Images Upload</h1>
    <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="file" name="images[]" multiple required>
        <button type="submit">Upload</button>
    </form>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <hr>

    <h2>Uploaded Images</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach($photos as $photo)
            <div style="text-align: center;">
                <img src="{{ asset('images/' . $photo->image) }}" width="150" height="100" style="object-fit: cover;">
                <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="margin-top: 5px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this photo?')">Delete</button> 
                </form>
            </div>
        @endforeach
    </div>

    <div style="margin-top: 20px;">
        {{ $photos->links() }} 
    </div>
</body>
</html>
