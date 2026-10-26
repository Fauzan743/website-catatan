<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Website Catatan Fauzan Maulana</title>

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
            max-width: 950px;
            margin: auto;
            padding: 45px 20px;
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .header h1 {
            margin: 0;
            font-size: 34px;
            letter-spacing: -1px;
        }

        /* BUTTON */
        .btn {
            display: inline-block;
            padding: 11px 16px;
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
            box-shadow: 0 5px 15px rgba(255, 45, 32, 0.25);
        }

        .btn-primary:hover {
            background: #e9271b;
            transform: translateY(-2px);
        }

        /* SECTION */
        .section-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .section-title h2 {
            margin: 0;
            font-size: 18px;
        }

        .count {
            color: #999;
            font-size: 12px;
        }

        /* NOTES */
        .notes {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            border: 1px solid #e5e5e5;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: 0.2s;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: #ff2d20;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.09);
        }

        .card-head {
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }

        .card h3 {
            margin: 0;
            font-size: 19px;
            word-break: break-word;
        }

        .icon {
            width: 38px;
            height: 38px;
            background: #fff1f0;
            color: #ff2d20;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .content {
            color: #525252;
            font-size: 14px;
            line-height: 1.7;
            margin: 17px 0;
            white-space: pre-line;
            word-break: break-word;
        }

        .date {
            color: #a3a3a3;
            font-size: 11px;
            border-top: 1px solid #eeeeee;
            padding-top: 12px;
        }

        /* ACTIONS */
        .actions {
            display: flex;
            gap: 8px;
            margin-top: 15px;
        }

        /* READ */
        .read {
            background: #f1f1f1;
            color: #333333;
        }

        .read:hover {
            background: #e2e2e2;
        }

        /* EDIT */
        .edit {
            background: #fff1f0;
            color: #e1261c;
        }

        .edit:hover {
            background: #ffe1de;
        }

        /* DELETE */
        .delete {
            background: #171717;
            color: white;
        }

        .delete:hover {
            background: #ff2d20;
        }

        .actions form {
            display: inline;
        }

        /* EMPTY */
        .empty {
            background: white;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 60px 20px;
            text-align: center;
        }

        .empty-icon {
            width: 60px;
            height: 60px;
            margin: auto auto 15px;
            background: #fff1f0;
            color: #ff2d20;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
        }

        .empty h2 {
            margin: 0 0 7px;
            font-size: 20px;
        }

        .empty p {
            color: #999;
            font-size: 13px;
            margin: 0;
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

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .btn-primary {
                width: 100%;
                text-align: center;
            }

            .notes {
                grid-template-columns: 1fr;
            }

            .laravel {
                display: none;
            }

            .header h1 {
                font-size: 29px;
            }

            .actions {
                flex-wrap: wrap;
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

            <h1>
                Catatan Saya
            </h1>

            <a
                href="{{ route('notes.create') }}"
                class="btn btn-primary"
            >
                + Tambah Catatan
            </a>

        </div>


        <!-- SECTION -->
        <div class="section-title">

            <h2>
                Semua Catatan
            </h2>

            <div class="count">
                {{ $notes->count() }} catatan
            </div>

        </div>


        <!-- NOTES -->
        @if($notes->count() > 0)

            <div class="notes">

                @foreach($notes as $note)

                    <div class="card">

                        <div class="card-head">

                            <h3>
                                {{ $note->title }}
                            </h3>

                            <div class="icon">
                                📝
                            </div>

                        </div>


                        <div class="content">
                            {{ $note->content }}
                        </div>


                        <div class="date">

                            Dibuat:
                            {{ $note->created_at
                                ? $note->created_at->format('d M Y, H:i')
                                : '-'
                            }}

                        </div>


                        <!-- ACTIONS -->
                        <div class="actions">

                            <!-- READ -->
                            <a
                                href="{{ route('notes.show', $note->id) }}"
                                class="btn read"
                            >
                                👁 Baca
                            </a>


                            <!-- EDIT -->
                            <a
                                href="{{ route('notes.edit', $note->id) }}"
                                class="btn edit"
                            >
                                ✎ Edit
                            </a>


                            <!-- DELETE -->
                            <form
                                action="{{ route('notes.destroy', $note->id) }}"
                                method="POST"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn delete"
                                    onclick="return confirm('Yakin ingin menghapus catatan ini?')"
                                >
                                    🗑 Hapus
                                </button>

                            </form>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <!-- EMPTY -->
            <div class="empty">

                <div class="empty-icon">
                    📝
                </div>

                <h2>
                    Belum ada catatan
                </h2>

                <p>
                    Yuk buat catatan pertama kamu.
                </p>

            </div>

        @endif


        <!-- FOOTER -->
        <footer>

            Website Catatan Fauzan Maulana
            • Dibuat dengan
            <span>Laravel</span>

        </footer>

    </main>

</body>
</html>