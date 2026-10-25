<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Catatan | Website Catatan Fauzan Maulana</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f5f5;
            color: #171717;
        }

        /* NAVBAR */
        .navbar {
            background: #111111;
            color: white;
            padding: 18px 25px;
        }

        .nav-content {
            max-width: 950px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: bold;
            font-size: 18px;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            background: #ff2d20;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .laravel {
            color: #ff2d20;
            font-size: 13px;
            font-weight: bold;
        }

        /* CONTAINER */
        .container {
            max-width: 700px;
            margin: auto;
            padding: 50px 20px;
        }

        .back {
            display: inline-block;
            margin-bottom: 18px;
            color: #737373;
            text-decoration: none;
            font-size: 13px;
        }

        .back:hover {
            color: #ff2d20;
        }

        /* CARD */
        .form-card {
            background: white;
            border: 1px solid #e5e5e5;
            border-radius: 14px;
            padding: 32px;
            box-shadow: 0 6px 22px rgba(0, 0, 0, 0.06);
            position: relative;
            overflow: hidden;
        }

        .form-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: #ff2d20;
        }

        .title-area {
            margin-bottom: 28px;
        }

        .icon {
            width: 48px;
            height: 48px;
            background: #fff1f0;
            color: #ff2d20;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 15px;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        .subtitle {
            margin: 8px 0 0;
            color: #737373;
            font-size: 13px;
            line-height: 1.6;
        }

        /* FORM */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #d4d4d4;
            border-radius: 8px;
            font-family: inherit;
            font-size: 13px;
            outline: none;
            transition: 0.2s;
        }

        input {
            height: 46px;
        }

        textarea {
            min-height: 180px;
            resize: vertical;
            line-height: 1.6;
        }

        input:focus,
        textarea:focus {
            border-color: #ff2d20;
            box-shadow: 0 0 0 3px rgba(255, 45, 32, 0.10);
        }

        input::placeholder,
        textarea::placeholder {
            color: #a3a3a3;
        }

        /* ERROR */
        .errors {
            background: #fff1f0;
            color: #b91c1c;
            border-left: 4px solid #ff2d20;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 7px;
            font-size: 13px;
        }

        .errors ul {
            margin: 0;
            padding-left: 18px;
        }

        /* ACTIONS */
        .actions {
            display: flex;
            gap: 10px;
            margin-top: 25px;
            padding-top: 22px;
            border-top: 1px solid #eeeeee;
        }

        .btn {
            padding: 12px 18px;
            border-radius: 8px;
            border: none;
            text-decoration: none;
            cursor: pointer;
            font-size: 13px;
            font-weight: bold;
            transition: 0.2s;
        }

        .btn-primary {
            background: #ff2d20;
            color: white;
            box-shadow: 0 5px 15px rgba(255, 45, 32, 0.22);
        }

        .btn-primary:hover {
            background: #e9271b;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: #171717;
            color: white;
        }

        .btn-secondary:hover {
            background: #333333;
        }

        /* FOOTER */
        footer {
            text-align: center;
            margin-top: 30px;
            color: #999;
            font-size: 11px;
        }

        footer span {
            color: #ff2d20;
            font-weight: bold;
        }

        /* MOBILE */
        @media (max-width: 600px) {

            .container {
                padding: 30px 15px;
            }

            .form-card {
                padding: 24px 20px;
            }

            .nav-content {
                padding: 0;
            }

            .laravel {
                display: none;
            }

            h1 {
                font-size: 25px;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="nav-content">

            <div class="logo">

                <div class="logo-icon">
                    L
                </div>

                <div>
                    Website Catatan
                </div>

            </div>

            <div class="laravel">
                ● POWERED BY LARAVEL
            </div>

        </div>

    </nav>


    <!-- MAIN -->
    <main class="container">

        <a
            href="{{ route('notes.index') }}"
            class="back"
        >
            ← Kembali ke daftar catatan
        </a>


        <div class="form-card">

            <div class="title-area">

                <div class="icon">
                    📝
                </div>

                <h1>
                    Tambah Catatan
                </h1>

                <p class="subtitle">
                    Buat catatan baru dan simpan informasi penting
                    kamu.
                </p>

            </div>


            <!-- VALIDATION ERROR -->
            @if($errors->any())

                <div class="errors">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <!-- FORM -->
            <form
                action="{{ route('notes.store') }}"
                method="POST"
            >

                @csrf


                <div class="form-group">

                    <label for="title">
                        Judul Catatan
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Tulis Judul Catatan"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="content">
                        Isi Catatan
                    </label>

                    <textarea
                        id="content"
                        name="content"
                        placeholder="Tulis isi catatan kamu di sini..."
                        required
                    >{{ old('content') }}</textarea>

                </div>


                <div class="actions">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        ✓ Simpan Catatan
                    </button>

                    <a
                        href="{{ route('notes.index') }}"
                        class="btn btn-secondary"
                    >
                        Batal
                    </a>

                </div>

            </form>

        </div>


        <footer>
            Website Catatan Fauzan Maulana
            • Dibuat dengan
            <span>Laravel</span>
        </footer>

    </main>

</body>
</html>