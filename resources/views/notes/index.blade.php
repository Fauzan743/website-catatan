<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Saya</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            border: none;
            cursor: pointer;
        }

        .success {
            background: #d1fae5;
            color: #065f46;
            padding: 12px;
            margin: 20px 0;
            border-radius: 6px;
        }

        .card {
            background: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .card h2 {
            margin-top: 0;
        }

        .actions {
            margin-top: 15px;
        }

        .edit {
            background: #f59e0b;
        }

        .delete {
            background: #dc2626;
        }

        .actions form {
            display: inline;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>📝 Catatan Saya</h1>

    <a href="{{ route('notes.create') }}" class="btn">
        + Tambah Catatan
    </a>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @forelse($notes as $note)

        <div class="card">

            <h2>{{ $note->title }}</h2>

            <p>{{ $note->content }}</p>

            <div class="actions">

                <a href="{{ route('notes.edit', $note->id) }}" class="btn edit">
                    Edit
                </a>

                <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn delete"
                        onclick="return confirm('Yakin ingin menghapus catatan ini?')">
                        Hapus
                    </button>
                </form>

            </div>

        </div>

    @empty

        <div class="card">
            <p>Belum ada catatan.</p>
        </div>

    @endforelse

</div>

</body>
</html>