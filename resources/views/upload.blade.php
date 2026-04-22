@extends('layouts.app')

@section('content')
    <h1>☁️ Cinnamoroll's Photo Studio ☁️</h1>

    @if(session('success'))
        <div style="background: white; border: 2px solid #AEE1F9; color: #5BA6D0; padding: 12px; border-radius: 20px; text-align: center; margin-bottom: 20px; font-weight: bold; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            ✨ {{ session('success') }} ✨
        </div>
    @endif

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 40px;">
        <div class="file-input-wrapper">
            <h3>Single Snap</h3>
            <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" required>
                <button type="submit" class="btn btn-primary">Upload One</button>
            </form>
        </div>

        <div class="file-input-wrapper">
            <h3>Cloud Collection</h3>
            <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="images[]" multiple required>
                <button type="submit" class="btn btn-primary">Upload Many</button>
            </form>
        </div>
    </div>

    <hr style="border: 1px dashed var(--cinna-blue); margin-bottom: 30px;">

    <h2>🎀 My Captured Memories 🎀</h2>
    <div class="gallery-grid">
        @foreach($photos as $photo)
            <div class="photo-cloud">
                <img src="{{ asset('images/' . $photo->image) }}" width="180" height="150" style="object-fit: cover; border-radius: 20px;">
                <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="margin-top: 10px; text-align: center;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="btn btn-danger" 
                            onclick="return confirm('☁️ Remove this memory from the clouds?')">
                        Delete
                    </button>
                </form>
            </div>
        @endforeach
    </div>

    <div style="margin-top: 40px; margin-bottom: 20px;">
        {{ $photos->links('pagination::bootstrap-4') }}
    </div>

    <img src="https://i.pinimg.com/originals/81/2a/39/812a392e22c95459f0f9b3b55c65d6c8.png" 
         style="position: fixed; bottom: 10px; left: 10px; width: 120px; pointer-events: none;">
@endsection