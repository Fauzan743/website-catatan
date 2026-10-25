<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        textarea {
            height: 150px;
            resize: vertical;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 16px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .back {
            display: inline-block;
            margin-top: 15px;
            color: #2563eb;
            text-decoration: none;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Edit Catatan</h1>

        @if($errors->any())
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('notes.update', $note->id) }}" method="POST">

            @csrf
            @method('PUT')

            <label for="title">Judul</label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $note->title) }}"
                placeholder="Masukkan judul catatan"
            >

            <label for="content">Isi Catatan</label>

            <textarea
                id="content"
                name="content"
                placeholder="Tulis catatan di sini..."
            >{{ old('content', $note->content) }}</textarea>

            <button type="submit" class="btn">
                Simpan Perubahan
            </button>

        </form>

        <a href="{{ route('notes.index') }}" class="back">
            ← Kembali ke daftar catatan
        </a>

    </div>

</div>

</body>
</html>