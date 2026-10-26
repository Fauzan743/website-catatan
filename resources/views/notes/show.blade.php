<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Baca Catatan - Website Catatan Fauzan Maulana</title>

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
            max-width: 850px;
            margin: auto;
            padding: 45px 20px;
        }

        /* HEADER */
        .header {
            margin-bottom: 25px;
        }

        .back {
            display: inline-block;
            margin-bottom: 18px;
            color: #666;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
        }

        .back:hover {
            color: #ff2d20;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
            letter-spacing: -1px;
        }

        .header p {
            margin: 8px 0 0;
            color: #999;
            font-size: 13px;
        }

        /* CARD */
        .card {
            background: white;
            border-radius: 14px;
            border: 1px solid #e5e5e5;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            position: relative;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: #ff2d20;
        }

        .card-body {
            padding: 35px;
        }

        /* NOTE TITLE */
        .note-title {
            font-size: 28px;
            font-weight: bold;
            margin: 0 0 12px;
            word-break: break-word;
        }

        /* DATE */
        .date {
            color: #999;
            font-size: 12px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eeeeee;
        }

        /* CONTENT */
        .content {
            margin-top: 25px;
            color: #444;
            font-size: 15px;
            line-height: 1.9;
            white-space: pre-line;
            word-break: break-word;
        }

        /* ACTIONS */
        .actions {
            display: flex;
            gap: 10px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eeeeee;
        }

        .btn {
            display: inline-block;
            padding: 11px 17px;
            border-radius: 8px;
            border: none;
            text-decoration: none;
            cursor: pointer;
            font-size: 13px;
            font-weight: bold;
            transition: 0.2s;
        }

        .btn-back {
            background: #eeeeee;
            color: #333;
        }

        .btn-back:hover {
            background: #dddddd;
        }

        .btn-edit {
            background: #fff1f0;
            color: #e1261c;
        }

        .btn-edit:hover {
            background: #ffe1de;
        }

        /* FOOTER */
        footer {
            text-align: center;
            margin-top: 45px;
            padding: 20px;
            color: #999;
            font-size: 11px;
        }

        footer span {
            color: #ff2d20;
            font-weight: bold;
        }

        /* MOBILE */
        @media (max-width: 700px) {

            .laravel {
                display: none;
            }

            .container {
                padding: 30px 15px;
            }

            .header h1 {
                font-size: 28px;
            }

            .card-body {
                padding: 25px 20px;
            }

            .note-title {
                font-size: 23px;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                text-align: center;
                width: 100%;
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

        <!-- HEADER -->
        <div class="header">

            <a
                href="{{ route('notes.index') }}"
                class="back"
            >
                ← Kembali ke Catatan
            </a>

            <h1>
                Baca Catatan
            </h1>

            <p>
                Lihat isi catatan secara lengkap.
            </p>

        </div>


        <!-- NOTE -->
        <div class="card">

            <div class="card-body">

                <h2 class="note-title">
                    {{ $note->title }}
                </h2>


                <div class="date">

                    Dibuat:
                    {{ $note->created_at
                        ? $note->created_at->format('d M Y, H:i')
                        : '-'
                    }}

                    @if($note->updated_at && $note->updated_at != $note->created_at)

                        • Diperbarui:
                        {{ $note->updated_at->format('d M Y, H:i') }}

                    @endif

                </div>


                <!-- CONTENT -->
                <div class="content">
                    {{ $note->content }}
                </div>


                <!-- ACTIONS -->
                <div class="actions">

                    <a
                        href="{{ route('notes.index') }}"
                        class="btn btn-back"
                    >
                        ← Kembali
                    </a>

                    <a
                        href="{{ route('notes.edit', $note->id) }}"
                        class="btn btn-edit"
                    >
                        ✎ Edit Catatan
                    </a>

                </div>

            </div>

        </div>


        <!-- FOOTER -->
        <footer>

            Website Catatan Fauzan Maulana
            • Dibuat dengan
            <span>Laravel</span>

        </footer>

    </main>

</body>
</html>